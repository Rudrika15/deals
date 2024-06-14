<?php

namespace App\Http\Controllers\brand;

use App\Http\Controllers\Controller;
use App\Models\BrandPackage;
use App\Models\BrandPoints;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Validator;
use App\Models\IMPGPayment;
use Exception;
use Illuminate\Support\Facades\Auth;

class InstaMojoPaymentController extends Controller
{

    public function pay(Request $request)
    {

        $auth = Auth::user();
        try {
            $instamojo = config('services.instamojo');
            $payload = array(
                "purpose" => "IMORDER" . Str::random(9),
                "amount" => intval($request->amount),
                "buyer_name" => $auth->name,
                "email" => $auth->email,
                "phone" => "9876543210",
                "send_email" => true,
                "send_sms" => true,
                "redirect_url" => url('/instamojopayments/success') . '?amount=' . $request->amount . ''
            );
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $instamojo['endpoint'] . 'payment-requests/');
            curl_setopt($ch, CURLOPT_HEADER, FALSE);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                "X-Api-Key:" . $instamojo['api_key'],
                "X-Auth-Token:" . $instamojo['auth_token']
            ));
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($payload));
            $response = curl_exec($ch);
            curl_close($ch);

            $response = json_decode($response, true);
            // return $response;

            if ($response['success'] == 1) {
                $payment_request = $response['payment_request'];
                IMPGPayment::insert([
                    'name' => $payment_request['buyer_name'],
                    'email' => $payment_request['email'],
                    'mobile' => $payment_request['phone'],
                    'amount' => $payment_request['amount'],
                    'purpose' => $payment_request['purpose'],
                    'payment_request_id' => $payment_request['id'],
                    'payment_link' => $payment_request['longurl'],
                    'payment_status' => $payment_request['status'],
                    'created_at' => now(),
                    'updated_at' => now()
                ]);
                header('Location: ' . $payment_request['longurl']);
                exit();
            } else {
                echo "<pre>";
                print_r($response);
                exit;
            }
        } catch (Exception $e) {
            echo "<pre>";
            print('Error: ' . $e->getMessage());
            exit;
        }
    }

    public function success(Request $request)
    {

        $user = Auth::user();
        $request_data = $request->all();
        $payment_id = $request_data['payment_id'];
        $payment_status = $request_data['payment_status'];
        $payment_request_id = $request_data['payment_request_id'];
        $payment_amount = $request_data['amount'];

        $im_payment = IMPGPayment::where('payment_request_id', $payment_request_id)->first();
        if ($payment_status == 'Credit') {
            $im_payment->payment_status = $payment_status;
            $im_payment->payment_id = $payment_id;
            $im_payment->save();

            $hasPackage = BrandPoints::where('userId', '=', $user->id)->count();
            $packagePoints = BrandPackage::where('price', '=', $payment_amount)->first();
            $points = new BrandPoints();
            $points->userId = $user->id;
            $points->email = $user->email;
            $points->points = $packagePoints->points;
            if ($hasPackage > 0)
                $points->remark = "Renew Package";
            else
                $points->remark = "Purchase";
            $points->save();
            return redirect()->back()->with('success', 'Payment success');
            // dd('Payment Successful');
        } else {
            return redirect()->back()->with('danger', 'Payment failed!!');
            // dd('Payment Failed!');
        }
        // dd($request_data);
    }
}
