<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Brochure;
use App\Models\Cardportfoilo;
use App\Models\Cardservices;
use App\Models\CardsModels;
use App\Models\Categories;
use App\Models\Category;
use App\Models\Feedback;
use App\Models\Inquiry;
use App\Models\Link;
use App\Models\Otp;
use App\Models\Payment;
use App\Models\Qrcode;
use App\Models\Servicedetail;
use App\Models\Slider;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OtpController extends Controller
{
    public function login()
    {
        try {
            return view('auth.otpLogin');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function generate(Request $request)
    {
        try {
            $apiKey = urlencode('0c5ff664-819f-48f1-a22c-d5894e9fba3b');

            // Message details
            $otp = random_int(100000, 999999);
            $numbers = $request->mobileno;
            $sender = urlencode('DGSAPI');
            $message = "Your One Time Verification Password is {$otp}.";
            $username = "BrandBeans";
            $smstype = "TRANS";

            // Prepare data for POST request
            $data = array(
                'apikey' => $apiKey,
                'numbers' => $numbers,
                "sender" => $sender,
                "message" => $message,
                "username" => $username,
                "sendername" => $sender,
                "smstype" => $smstype,
            );

            // Send the POST request with cURL
            $ch = curl_init('http://sms.hspsms.com/sendSMS');
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $response = curl_exec($ch);
            curl_close($ch);

            $time = Carbon::now()->toTimeString();
            $otps = new Otp();
            $otps->otp = $otp;
            $otps->mobileno = $request->mobileno;
            $otps->time = $time;
            $otps->save();


            // Process your response here
            // return $response;

            return \redirect('auth/checkotp');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    function checkotp()
    {
        try {
            return view('auth.checkotp');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    function loginotp(Request $request)
    {
        try {
            $otp  = $request->otp;
            // check otp
            $otptab = Otp::where('otp', '=', $otp)
                // ->where('mobileno', '=', $mobileno)
                ->first();
            // find mobile no
            if ($otptab) {
                $mobileno = $otptab->mobileno;

                $user = User::where('mobileno', '=', $mobileno)->first();
                $links = Link::where('phone1', '=', $mobileno)->orWhere('phone2', '=', $mobileno)->first();

                if ($user) {

                    Auth::login($user);
                    // return Auth::user()->role;
                    return redirect("/user/dashboard");
                    // if ($user->hasRole(['Admin'])) {
                    //     return \redirect('/');
                    // } else if ($user->hasRole(['User', 'Writer', 'Designer'])) {

                    // }
                } elseif ($links) {

                    $card_id =  $links->card_id;
                    $card = CardsModels::where('id', '=', $card_id)->first();
                    $userId = $card->user_id;
                    $user = User::where('id', '=', $userId)->first();
                    if ($user) {
                        $id = $user->id;
                        $userUpdate = User::find($id);
                        $userUpdate->mobileno = $links->phone1;
                        $userUpdate->save();
                        Auth::login($user);

                        // return Auth::user()->role;
                        return \redirect('/user/dashboard');
                        // if ($user->hasRole(['Admin'])) {

                        // } else if ($user->hasRole(['User', 'Writer', 'Designer'])) {

                        //     return redirect("/");
                        // }
                    } else {
                        session_start();
                        $_SESSION['mobileno'] = $mobileno;

                        return \redirect('register');
                    }
                } else {
                    session_start();
                    $_SESSION['mobileno'] = $mobileno;

                    return \redirect('register');
                    // return \redirect('register');
                }

                // $otptab->delete();
            } else {
                return redirect('auth/checkotp')->with("success", 'Otp Does not match');
            }
            // find mobileno in user table
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
