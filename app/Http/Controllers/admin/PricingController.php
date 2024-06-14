<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\BrandPackage;
use App\Models\BrandPoints;
use App\Models\Package;
use App\Models\Razorpay;
use App\Models\Subscription;
use App\Models\Subscriptiondetail;
use App\Models\Subscriptionpackage;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Razorpay\Api\Api;

use Exception;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class PricingController extends Controller
{
    public function index()
    {
        try {
            // return $freepack;
            // $subpack = Subscriptionpackage::orderBy('id', 'DESC')->get();
            $subpack = BrandPackage::with('brandPackageDetails.activity')->orderBy('id', 'DESC')->get();
            $user = User::where('id', '=', Auth::user()->id)->first();
            return view('user.pricing.index', compact('user', 'subpack'));
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    // old instamojo payment
    // public function store(Request $request)
    // {
    //     $auth = Auth::user();
    //     $amount = $request->amount;

    //     try {


    //         $instamojo = config('services.instamojo');
    //         $payload = array(
    //             "purpose" => "IMORDER" . Str::random(9),
    //             "amount" => intval($amount),
    //             "buyer_name" => $auth->name,
    //             "email" => $auth->email,
    //             "phone" => "9876543210",
    //             "send_email" => true,
    //             "send_sms" => true,
    //             "redirect_url" => url('/instamojopayments/success/package') . '?amount=' . $amount . ''
    //         );
    //         $ch = curl_init();
    //         curl_setopt($ch, CURLOPT_URL, $instamojo['endpoint'] . 'payment-requests/');
    //         curl_setopt($ch, CURLOPT_HEADER, FALSE);
    //         curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    //         curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
    //         curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    //             "X-Api-Key:" . $instamojo['api_key'],
    //             "X-Auth-Token:" . $instamojo['auth_token']
    //         ));
    //         curl_setopt($ch, CURLOPT_POST, true);
    //         curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($payload));
    //         $response = curl_exec($ch);
    //         curl_close($ch);

    //         $response = json_decode($response, true);

    //         if ($response['success'] == 1) {
    //             $payment_request = $response['payment_request'];
    //             Package::insert([
    //                 'name' => $payment_request['buyer_name'],
    //                 'email' => $payment_request['email'],
    //                 'mobile' => $payment_request['phone'],
    //                 'amount' => $payment_request['amount'],
    //                 'purpose' => $payment_request['purpose'],
    //                 'payment_request_id' => $payment_request['id'],
    //                 'payment_link' => $payment_request['longurl'],
    //                 'payment_status' => $payment_request['status'],
    //                 'created_at' => now(),
    //                 'updated_at' => now()
    //             ]);
    //             header('Location: ' . $payment_request['longurl']);
    //             exit();
    //         } else {
    //             echo "<pre>";
    //             print_r($response);
    //             exit;
    //         }
    //     } catch (Exception $e) {
    //         echo "<pre>";
    //         print('Error: ' . $e->getMessage());
    //         exit;
    //     }
    // }

    // public function success(Request $request)
    // {

    //     $user = Auth::user();
    //     $request_data = $request->all();
    //     $payment_id = $request_data['payment_id'];
    //     $payment_status = $request_data['payment_status'];
    //     $payment_request_id = $request_data['payment_request_id'];
    //     $payment_amount = $request_data['amount'];

    //     $payment = Package::where('payment_request_id', $payment_request_id)->first();
    //     if ($payment_status == 'Credit') {
    //         $payment->payment_status = $payment_status;
    //         $payment->payment_id = $payment_id;
    //         $payment->save();

    //         $user = User::find($user->id);
    //         $user->package = 'SILVER';
    //         if ($user->validity) {
    //             // If validity date is available in the database, add 365 days to it
    //             $validity = Carbon::parse($user->validity)->addDays(365);
    //         } else {
    //             // If validity date is not available, set it to the current date plus 365 days
    //             $validity = Carbon::now()->addDays(365);
    //         }

    //         $user->validity = $validity;
    //         $user->save();

    //         return redirect()->back()->with('success', 'Payment success');
    //         // dd('Payment Successful');
    //     } else {
    //         return redirect()->back()->with('danger', 'Payment failed!!');
    //         // dd('Payment Failed!');
    //     }
    // }


    // razorpay payment
    // public function store(Request $request)
    // {
    //     $input = $request->all();
    //     $api = new Api(env('RAZORPAY_KEY'), env('RAZORPAY_SECRET'));
    //     $payment = $api->payment->fetch($input['razorpay_payment_id']);
    //     if (count($input) && !empty($input['razorpay_payment_id'])) {
    //         try {
    //             $response = $api->payment->fetch($input['razorpay_payment_id'])->capture(array('amount' => $payment['amount']));
    //             $payment = Razorpay::create([
    //                 'r_payment_id' => $response['id'],
    //                 'method' => $response['method'],
    //                 'currency' => $response['currency'],
    //                 'user_email' => $response['email'],
    //                 'amount' => $response['amount'] / 100,
    //                 'json_response' => json_encode((array)$response)
    //             ]);
    //         } catch (Exception $e) {
    //             return $e->getMessage();
    //             Session::put('error', $e->getMessage());
    //             return redirect()->back();
    //         }
    //     }
    //     Session::put('success', ('Payment Successful'));
    //     return redirect()->back();
    // }

    public function store(Request $request)
    {

        // Store the payment ID in the table
        $payment = new Razorpay();
        $payment->payment_id = $request->input('paymentId');
        $payment->user_id = Auth::user()->id;
        $payment->amount = $request->input('amount');
        $payment->save();

        // update user package
        $user = User::find(Auth::user()->id);
        $user->package = "SILVER";
        if ($user->validity) {
            // If validity date is available in the database, add 365 days to it
            $validity = Carbon::parse($user->validity)->addDays(365);
        } else {
            // If validity date is not available, set it to the current date plus 365 days
            $validity = Carbon::now()->addDays(365);
        }
        $user->validity = $validity;
        $user->save();
        if (!$user->hasRole('Brand')) {
            $user->assignRole(['Brand']);
        }
        // $user->assignRole(['User', 'Brand']);

        // add points of user
        $hasPackage = BrandPoints::where('userId', '=', Auth::user()->id)->count();
        $packagePoints = BrandPackage::where('price', '=', $request->input('amount'))->first();
        $points = new BrandPoints();
        $points->userId = Auth::user()->id;
        $points->email = Auth::user()->email;
        // pending
        $points->points = $packagePoints->points;
        if ($hasPackage > 0)
            $points->remark = "Renew Package";
        else
            $points->remark = "Purchase";
        $points->save();
        // Additional logic such as order processing, user notification, etc.

        // Return a response
        return response()->json(['message' => 'Payment ID stored successfully'], 200);
    }
}
