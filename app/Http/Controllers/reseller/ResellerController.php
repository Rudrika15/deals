<?php

namespace App\Http\Controllers\reseller;

use App\Http\Controllers\Controller;
use App\Models\CardsModels;
use App\Models\Category;
use App\Models\Link;
use App\Models\Passbook;
use App\Models\Payment;
use App\Models\Point;
use App\Models\ResellerPackage;
use App\Models\Subscriptiondetail;
use App\Models\Subscriptionpackage;
use App\Models\User;
use Illuminate\Http\Request;
use Twilio\Rest\Events\V1\SubscriptionPage;
use Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

class ResellerController extends Controller
{
    //
    public function index(Request $request)
    {
        try {
            $reseller = User::whereHas('roles', function ($query) {
                return $query->where('name', '=', 'Reseller');
            })->orderBy('id', 'DESC')->paginate(20);

            return view('reseller.index', compact('reseller'));
        } catch (\Throwable $th) {
            throw $th;
        }
        // return view('reseller.index', compact('reseller'));
    }

    public function create()
    {
        try {
            return view('reseller.create');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function store(Request $request)
    {
        $existUser = User::where('mobileno', '=', $request->mobileno)
            ->first();

        if ($existUser) {
            if ($existUser->hasRole('Reseller') && $existUser->hasRole('User')) {
                return redirect()->back()->with('warning', 'This user already has a role of Reseller');
            } else if ($existUser->hasRole('Reseller')) {
                $this->validate($request, [
                    'mobileno' => 'required',
                ]);

                try {
                    $new_str = str_replace(' ', '', $request['name']);


                    $existUser->assignRole(['User', 'Reseller']);

                    $type = 'Individual';
                    $card = new CardsModels();
                    $card->user_id = $existUser->id;
                    $cat = Category::where('name', '=', $type)->first();
                    $cat_id = $cat->id;
                    $card->category = $cat_id;
                    $card->save();

                    $payment = new Payment();
                    $payment->card_id = $card->id;
                    $payment->save();

                    $links = new Link();
                    $links->card_id  = $card->id;
                    $links->phone1  = $request['mobileno'];
                    $links->save();

                    $id = $existUser->id;
                    $name = $request->name;
                    $mycode = $new_str . $name . $id;
                    $userUpdate = User::find($id);
                    $userUpdate->myrefer = $mycode;
                    $userUpdate->save();

                    $code = $existUser->refer;
                    if ($code) {

                        $pointableUser = User::where('myrefer', '=', $code)->first();

                        $userPoint = new Point();
                        $userPoint->userId = $pointableUser->id;
                        $userPoint->point = 50;
                        $userPoint->save();
                    }

                    return redirect()->back()
                        ->with('success', 'Reseller created successfully');
                } catch (\Throwable $th) {
                    // throw $th;

                }
            } else if ($existUser->hasRole('User')) {
                $oldUser = User::find($existUser->id);
                $oldUser->assignRole(['Reseller']);
                $oldUser->save();
                return redirect()->back()
                    ->with('success', 'Reseller created successfully');
            } else {
                $this->validate($request, [
                    'mobileno' => 'required',
                ]);

                try {
                    $new_str = str_replace(' ', '', $request['name']);

                    $user = new User();
                    $user->mobileno = $request->mobileno;
                    $user->password = Hash::make('123456');
                    $user->package = "FREE";
                    $user->save();

                    $user->assignRole(['Reseller', 'User']);
                    $type = 'Individual';
                    $card = new CardsModels();
                    $card->user_id = $user->id;
                    $cat = Category::where('name', '=', $type)->first();
                    $cat_id = $cat->id;
                    $card->category = $cat_id;
                    $card->save();

                    $payment = new Payment();
                    $payment->card_id = $card->id;
                    $payment->save();

                    $links = new Link();
                    $links->card_id  = $card->id;
                    $links->phone1  = $request['mobileno'];
                    $links->save();

                    $id = $user->id;
                    $name = $request->name;
                    $mycode = $new_str . $name . $id;
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

                    return redirect()->back()
                        ->with('success', 'Reseller created successfully');
                } catch (\Throwable $th) {
                    // throw $th;

                }
            }
        } else {

            $this->validate($request, [
                'mobileno' => 'required',
            ]);

            try {
                $new_str = str_replace(' ', '', $request['name']);

                $user = new User();
                $user->mobileno = $request->mobileno;
                $user->password = Hash::make('123456');
                $user->package = "FREE";
                $user->save();

                $user->assignRole(['Reseller', 'User']);
                $type = 'Individual';
                $card = new CardsModels();
                $card->user_id = $user->id;
                $cat = Category::where('name', '=', $type)->first();
                $cat_id = $cat->id;
                $card->category = $cat_id;
                $card->save();

                $payment = new Payment();
                $payment->card_id = $card->id;
                $payment->save();

                $links = new Link();
                $links->card_id  = $card->id;
                $links->phone1  = $request['mobileno'];
                $links->save();

                $id = $user->id;
                $name = $request->name;
                $mycode = $new_str . $name . $id;
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

                return redirect()->back()
                    ->with('success', 'Reseller created successfully');
            } catch (\Throwable $th) {
                // throw $th;

            }
        }
    }

    public function edit($id)
    {
        try {
            $user = User::find($id);
            // $package = Subscriptionpackage::where('title', '!=', 'FREE')->get();

            return view('reseller.edit', compact('user'));
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'mobileno' => 'required',
        ]);

        try {

            $id = $request->id;
            $user = User::find($id);
            $user->mobileno = $request->mobileno;
            $user->save();

            return redirect()->back()
                ->with('success', 'Reseller Updated successfully');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function destroy($id)
    {
        try {
            User::find($id)->delete();
            return redirect()->back()
                ->with('success', 'User deleted successfully');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /* Reseller Side Add User */
    public function userIndex()
    {
        try {
            $reseller = Auth::user();

            $user = User::join('subscriptionpackages', 'subscriptionpackages.title', '=', 'users.package')
                ->where('users.refer', '=', $reseller->myrefer)
                ->orderBy('users.id', 'DESC')
                ->paginate(
                    10,
                    [
                        'users.*',
                        'subscriptionpackages.title',
                        'subscriptionpackages.price',
                        'subscriptionpackages.details'
                    ]
                );

            return view('reseller.user.index', compact('user'));
        } catch (\Throwable $th) {
            // throw $th;

        }
    }

    public function userCreate()
    {
        try {
            $authId = Auth::user()->id;
            $package = Subscriptionpackage::all();
            $userData = User::where('id', '=', $authId)->get();

            return view('reseller.user.create', compact('package', 'userData'));
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function userStore(Request $request)
    {
        $this->validate($request, [
            'mobileno' => 'required',
        ]);

        try {
            $new_str = str_replace(' ', '', $request['username']);

            $authId = Auth::user();

            $user = new User();
            $user->mobileno = $request->mobileno;
            $user->refer = $authId->myrefer;
            $user->password = Hash::make('123456');
            $user->package = $request->package;
            $user->save();
            $user->assignRole(['User']);

            $userPackage = Subscriptionpackage::where('title', 'like', '%' . $user->package . '%')->first();
            $passbook  = new Passbook();
            $passbook->userId = $user->id;
            $passbook->resellerId = $authId->id;
            $passbook->mobileNumber = $user->mobileno;
            $passbook->package = $userPackage->id;
            $passbook->status = "Pending";
            $passbook->date = Carbon::now()->toDateString();
            $passbook->save();

            $type = 'Individual';
            $card = new CardsModels();
            $card->user_id = $user->id;
            $cat = Category::where('name', '=', $type)->first();
            $cat_id = $cat->id;
            $card->category = $cat_id;
            $card->save();

            $payment = new Payment();
            $payment->card_id = $card->id;
            $payment->save();

            $links = new Link();
            $links->card_id  = $card->id;
            $links->phone1  = $request['mobileno'];
            $links->save();

            $id = $user->id;
            $name = $request->name;
            $mycode = $new_str . $name . $id;
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

            return redirect()->back()
                ->with('success', 'User Created Successfully');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function userEdit($id)
    {
        try {
            $user = User::find($id);
            $package = Subscriptionpackage::all();

            return view('reseller.user.edit', compact('user', 'package'));
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function userUpdate(Request $request)
    {
        $this->validate($request, [
            'mobileno' => 'required',
        ]);

        try {
            $id = $request->userId;
            $authId = Auth::user();

            $user = User::find($id);
            $user->mobileno = $request->mobileno;
            $user->package = $request->package;
            $user->save();

            return redirect()->back()
                ->with('success', 'User Updated Successfully');
        } catch (\Throwable $th) {
            throw $th;
        }
    }


    public function userdestroy($id)
    {
        try {
            $user = User::find($id);
            $user->delete();
            return redirect()->back()
                ->with('success', 'User Deleted Successfully');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function passbook(Request $request)
    {
        try {
            $userId = Auth::user()->id;

            $type = $request->type;
            if ($type == 'Pending') {
                $passbook  = Passbook::where('status', '=', 'Pending')->where('resellerId', '=', $userId)->get();
            } else if ($type == 'Paid') {
                $passbook  = Passbook::where('status', '=', 'Paid')->where('resellerId', '=', $userId)->get();
            } else {
                $passbook  = Passbook::where('resellerId', '=', $userId)->get();
            }
            return view('reseller.passbook', \compact('passbook'));
        } catch (\Throwable $th) {
            throw $th;
        }
    }
    public function passbookCode(Request $request)
    {
        try {
            $selectedUsers = $request->input('selectedUsers');
            if (isset($selectedUsers)) {

                foreach ($selectedUsers as $selectedUsersData) {
                    $data = Passbook::where('id', '=', $selectedUsersData)->first();

                    $data->status = "Paid";
                    $data->save();
                }
            } else {
                return redirect()->back()->with('warning', 'Select atleast one checkbox ');
            }
            return redirect()->back()->with('success', 'Payment Successful');
        } catch (\Throwable $th) {
            throw $th;
        }
    }


    public function resellerAddAmount($userId)
    {
        try {
            $package = Subscriptionpackage::all();
            return view('reseller.addAmount', \compact('userId', 'package'));
        } catch (\Throwable $th) {
            throw $th;
        }
    }
    public function resellerPackageStore(Request $request)
    {
        try {
            $this->validate($request, [
                'packageId' => 'required',
            ]);
            $userId = $request->userId;
            $packageId = $request->packageId;
            $amount = $request->amount;
            for ($i = 0; $i < count($packageId); $i++) {
                $rePackage = new ResellerPackage();
                $rePackage->userId = $userId;
                $rePackage->packageId = $packageId[$i];
                if ($request->amount)
                    $rePackage->amount = $amount[$i];
                else
                    $rePackage->amount = '0';

                $rePackage->save();
            }


            return redirect()->back();
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function adminPaymentStatus()
    {
        try {
            $passbook = Passbook::all();
            return view('reseller.adminPaymentView', \compact('passbook'));
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function updateStatus($id)
    {
        try {
            // Find the user by ID
            $user = Passbook::findOrFail($id);

            // Update the user status based on the current status
            $user->status = $user->status === 'Paid' ? 'Pending' : 'Paid';

            // Save the changes to the database
            $user->save();

            // Redirect back to the previous page (or any other response)
            return back()->with('success', 'Reseller Payment status updated successfully.');
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
