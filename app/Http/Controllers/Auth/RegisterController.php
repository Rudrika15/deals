<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Brochure;
use App\Models\Cardportfoilo;
use App\Models\CardsModels;
use App\Models\Category;
use App\Models\Link;
use App\Models\Payment;
use App\Models\Point;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use PhpParser\Node\Expr\Assign;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:255',],
            'email' => ['required', 'string', 'email', 'max:255'],
            'category' => ['required_if:type,==,Business'],
            'password' => 'required|same:confirm-password',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        try {
            $new_str = str_replace(' ', '', $data['username']);

            $user = User::create([
                'name' => $data['name'],
                'username' => $data['username'],
                'email' => $data['email'],
                'package' => "FREE",
                'refer' => $data['refer'],
                'mobileno' => $data['mobileno'],
                'password' => Hash::make($data['password']),
            ]);

            // $email = User::where('email', '=', $data['email'])->get();
            // return $email;

            $user->assignRole(['User', 'Brand']);
            if ($data['type'] ==  'Individual') {
                $card = new CardsModels();
                $card->user_id = $user->id;
                $card->name = $user->name;
                $type = $data['type'];
                $cat = Category::where('name', '=', $type)->get();
                $cat_id = $cat[0]->id;
                $card->category = $cat_id;
                $card->save();
            } else {
                if ($data['category'] == 'other') {
                    $category = new Category();
                    $category->name = $data['categoryname'];
                    $category->iconPath = "default.jpg";
                    $category->isBusiness = "yes";
                    $category->save();

                    $card = new CardsModels();
                    $card->user_id = $user->id;
                    $card->name = $user->name;
                    $card->category = $category->id;
                    $card->save();
                } else {
                    $card = new CardsModels();
                    $card->user_id = $user->id;
                    $card->name = $user->name;
                    $card->category = $data['category'];
                    $card->save();
                }
            }
            $payment = new Payment();
            $payment->card_id = $card->id;
            $payment->save();

            $links = new Link();
            $links->card_id  = $card->id;
            $links->phone1  = $data['mobileno'];
            $links->save();


            $id = $user->id;
            $mycode = $new_str . $id;
            $userUpdate = User::find($id);
            $userUpdate->myrefer = $mycode;
            $userUpdate->save();

            $code = $user->refer;
            if ($code) {

                $pointableUser = User::where('myrefer', '=', $code)->first();

                $userPoint = new Point();
                $userPoint->userId = $pointableUser->id;
                $userPoint->point = 50;
                $userPoint->save();
            }
            return $user;
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
