<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\BrandCategory;
use App\Models\BrandOffer;
use App\Models\CardsModels;
use App\Models\Category;
use App\Models\InfluencerProfile;
use App\Models\Link;
use App\Models\Payment;
use App\Models\User;
use Spatie\Permission\Models\Role;
use DB;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use League\Csv\Writer;

use function Ramsey\Uuid\v1;

class UserController extends Controller
{
    // function __construct()
    // {
    //     $this->middleware('permission:users-list|users-create|users-edit|users-delete', ['only' => ['index', 'store']]);
    //     $this->middleware('permission:users-create', ['only' => ['create', 'store']]);
    //     $this->middleware('permission:users-edit', ['only' => ['edit', 'update']]);
    //     $this->middleware('permission:users-delete', ['only' => ['destroy']]);
    //     //  $this->middleware('permission:users-payment', ['only' => ['destroy']]);
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // 
        try {
            $data = User::whereHas('roles', function ($query) {
                return $query->whereNotIn('name', ['User', 'Influencer']);
            })->orderBy('id', 'DESC')->paginate(50);
            $userRoles = Role::where('name', '!=', 'Influencer')->get();

            $search = $request->roleSearch;
            if ($search == "Admin") {
                $data = User::whereHas('roles', function ($query) {
                    return $query->where('name', '=', 'Admin');
                })->orderBy('id', 'DESC')->paginate(50);
            }
            if ($search == "Brand") {
                $data = User::whereHas('roles', function ($query) {
                    return $query->where('name', '=', 'Brand');
                })->orderBy('id', 'DESC')->paginate(50);
            }
            // if ($search == "Influencer") {
            //    $data = User::whereHas('roles', function ($query) {
            //       return $query->where('name', '=', 'Influencer');
            // })->orderBy('id', 'DESC')->paginate(50);
            // }
            if ($search == "Reseller") {
                $data = User::whereHas('roles', function ($query) {
                    return $query->where('name', '=', 'Reseller');
                })->orderBy('id', 'DESC')->paginate(50);
            }
            if ($search == "Designer") {
                $data = User::whereHas('roles', function ($query) {
                    return $query->where('name', '=', 'Designer');
                })->orderBy('id', 'DESC')->paginate(50);
            }
            if ($search == "Writer") {
                $data = User::whereHas('roles', function ($query) {
                    return $query->where('name', '=', 'Writer');
                })->orderBy('id', 'DESC')->paginate(50);
            }

            return view('admin.users.index', compact('data', 'userRoles'))
                ->with('i', ($request->input('page', 1) - 1) * 5);
            // $data = User::all();
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        try {
            $roles = Role::where('name', '!=', 'Influencer')->pluck('name', 'name')->all();
            return view('admin.users.create', compact('roles'));
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            // 'password' => 'required|same:confirm-password',
            'roles' => 'required',
            'mobileno' => 'required',
        ]);

        try {
            $input = $request->all();
            // $input['password'] = Hash::make($input['password']);

            $input['username'] = $input['name'];
            $input['package'] = "FREE";
            $user = User::create($input);
            $user->assignRole($request->input('roles'));
            if ($request->profilePhoto) {
                $user->profilePhoto = time() . '.' . $request->profilePhoto->extension();
                $request->profilePhoto->move(public_path('profile'), $user->profilePhoto);
            }
            $user->save();

            $userUpdate  = User::find($user->id);
            $userUpdate->assignRole('User');
            $userUpdate->save();

            $card = new CardsModels();
            $card->userid = $user->id;
            $card->save();

            $payment = new Payment();
            $payment->card_id = $card->id;
            $payment->save();

            $links = new Link();
            $links->card_id  = $card->id;
            $links->phone1  = $user->mobileno;
            $links->save();
            return redirect()->route('users.index')
                ->with('success', 'User created successfully');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        try {
            $user = User::find($id);
            $roles = Role::where('name', '!=', 'Influencer')->pluck('name', 'name')->all();
            $userRole = $user->roles->pluck('name', 'name')->all();

            return view('admin.users.edit', compact('user', 'roles', 'userRole'));
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . $id,
            // 'password' => 'same:confirm-password',
            'roles' => 'required'
        ]);

        try {
            $input = $request->all();
            // if (!empty($input['password'])) {
            //     $input['password'] = Hash::make($input['password']);
            // } else {
            //     $input = Arr::except($input, array('password'));
            // }

            $user = User::find($id);
            $user->update($input);
            DB::table('model_has_roles')->where('model_id', $id)->delete();

            $user->assignRole($request->input('roles'));

            return redirect()->route('users.index')
                ->with('success', 'User updated successfully');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            User::find($id)->delete();
            return redirect()->route('users.index')
                ->with('success', 'User deleted successfully');
        } catch (\Throwable $th) {
            throw $th;
        }
    }


    public function assignRoles(Request $request)
    {
        $users = User::paginate(20);
        $userRoles = Role::all();

        $search = $request->roleSearch;
        $name = $request->userName;
        $email = $request->userEmail;
        $mobileNumber = $request->mobileNumber;
        $package = $request->package;
        $users = User::where(function ($query) use ($search, $name, $email, $mobileNumber, $package) {
            if ($search == "Admin") {
                $query->whereHas('roles', function ($query) {
                    $query->where('name', 'Admin');
                });
            }
            if ($search == "Brand") {
                $query->whereHas('roles', function ($query) {
                    $query->where('name', 'Brand');
                });
            }
            if ($search == "Influencer") {
                $query->whereHas('roles', function ($query) {
                    $query->where('name', 'Influencer');
                });
            }
            if ($search == "Reseller") {
                $query->whereHas('roles', function ($query) {
                    $query->where('name', 'Reseller');
                });
            }
            if ($search == "Designer") {
                $query->whereHas('roles', function ($query) {
                    $query->where('name', 'Designer');
                });
            }
            if ($search == "Writer") {
                $query->whereHas('roles', function ($query) {
                    $query->where('name', 'Writer');
                });
            }
            if ($name) {
                $query->where('name', 'LIKE', '%' . $name . '%');
            }
            if ($email) {
                $query->where('email', 'LIKE', '%' . $email . '%');
            }
            if ($mobileNumber) {
                $query->where('mobileno', 'LIKE', '%' . $mobileNumber . '%');
            }
            if ($package) {
                $query->where('package', 'LIKE', '%' . $package . '%');
            }
        })->orderBy('id', 'DESC')->paginate(20);

        return view('admin.users.assignRoles', compact('users', 'userRoles'));
    }

    public function assignRoleCreate(Request $request, $id)
    {
        $user = User::find($id);
        $userRole = $user->roles->pluck('name', 'name')->all();
        $roles = Role::pluck('name', 'name')->all();
        return view('admin.users.assignRoleCreate', compact('user', 'roles', 'userRole'));
    }

    public function assignRoleCreateCode(Request $request)
    {
        $userId = $request->input('userId');
        $roles = $request->input('roles');

        $user = User::find($userId);
        DB::table('model_has_roles')->where('model_id', $userId)->delete();
        $user->assignRole($request->input('roles'));
        // $user->roles()->sync($roles);
        $user->save();

        if ($roles == 'Influencer') {
            $findInfluencer = InfluencerProfile::where('userId', $userId)->first();
            if ($findInfluencer) {
                $influencer = new InfluencerProfile();
                $influencer->userId = $userId;
                $influencer->save();
            }
        }
        return redirect()->route('users.assignRole')->with('success', 'Roles assigned successfully.');
    }


    public function changeEmail()
    {
        try {
            $authid = Auth::User()->id;
            $user = User::find($authid);

            return view('user.profile.account', \compact('user'));
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function changeEmailCode(Request $request)
    {
        try {
            $authid = Auth::User()->id;
            $user = User::find($authid);
            $user->email = $request->email;
            $user->save();
            return redirect()->back()->with('success', 'Email change successfully');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function changePassword(Request $request)
    {
        $request->validate([
            'oldpassword' => 'required',
            'newpassword' => 'required',
            'confirmpassword' => 'required',
        ]);

        try {
            $newpassword = $request->newpassword;
            $confirmpassword = $request->confirmpassword;
            #Match The Old Password
            if (!Hash::check($request->oldpassword, auth()->user()->password)) {
                return back()->with("warning", "Old Password Doesn't match!");
            }

            if ($newpassword == $confirmpassword) {
                #Update the new Password
                User::whereId(auth()->user()->id)->update([
                    'password' => Hash::make($request->newpassword)
                ]);

                return back()->with("success", "Password changed successfully!");
            } else {
                return back()->with("warning", "New password and Confirm passwor does not match!");
            }
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    // User report

    function allUser(Request $request)
    {
        try {
            $type = $request->type;
            if ($type == 'free') {
                $user = User::where('package', '=', 'FREE')->orderBy('id', 'DESC')->get();
                return view("admin.report.report", compact('user'));
            } else if ($type == 'paid') {
                // $paiduser = User::join('razorpays', 'razorpays.user_id', '=', 'users.id')
                //     ->where('package', '!=', 'FREE')
                //     ->get(['users.*', 'razorpays.payment_id']);
                $paiduser = User::with('razor')->orderBy('id', 'DESC')->where('package', '!=', 'FREE')->get();
                return view("admin.report.report", compact('paiduser'));
            } else {
                $user = User::where('package', '=', 'FREE')->orderBy('id', 'DESC')->get();
                return view("admin.report.report", compact('user'));
            }
        } catch (\Throwable $th) {
            throw $th;
            // 

        }
    }

    public function updateStatus(Request $request, $id)
    {
        // Find the user by ID
        $user = User::findOrFail($id);

        // Update the user status based on the current status
        $user->status = $user->status === 'Active' ? 'Inactive' : 'Active';

        // Save the changes to the database
        $user->save();

        // Redirect back to the previous page (or any other response)
        return back()->with('success', 'User status updated successfully.');
    }

    public function export(Request $request)
    {
        $type = $request->type;

        if ($type == "paid") {
            $users = User::where('package', '!=', 'FREE')->get(); // Assuming User is your model for users

            // You can format the data as CSV, JSON, or any other format here
            // For example, to export as CSV:
            $csv = Writer::createFromString('');
            $csv->insertOne(['Name', 'Email', 'MobileNumber', 'PackageType']);

            foreach ($users as $user) {
                $csv->insertOne([$user->name, $user->email, $user->mobileno, $user->package]);
            }
            $filename = 'PaidUsers.csv';

            return response($csv, 200, [
                'Content-Type' => 'text/csv',
                'Content-Disposition' => "attachment; filename=\"$filename\"",
            ]);
        } else {
            $users = User::where('package', 'FREE')->get(); // Assuming User is your model for users

            // You can format the data as CSV, JSON, or any other format here
            // For example, to export as CSV:
            $csv = Writer::createFromString('');
            $csv->insertOne(['Name', 'Email', 'MobileNumber', 'PackageType', 'Validity']);

            foreach ($users as $user) {
                $csv->insertOne([$user->name, $user->email, $user->mobileno, $user->package, $user->validity]);
            }
            $filename = 'FreeUsers.csv';

            return response($csv, 200, [
                'Content-Type' => 'text/csv',
                'Content-Disposition' => "attachment; filename=\"$filename\"",
            ]);
        }
        // $users = User::all(); // Assuming User is your model for users

        // // You can format the data as CSV, JSON, or any other format here
        // // For example, to export as CSV:
        // $csv = Writer::createFromString('');
        // $csv->insertOne(['Name', 'Email', 'MobileNumber', 'PackageType']);

        // foreach ($users as $user) {
        //     $csv->insertOne([$user->name, $user->email, $user->mobileno, $user->package]);
        // }
        // $filename = 'users.csv';

        // return response($csv, 200, [
        //     'Content-Type' => 'text/csv',
        //     'Content-Disposition' => "attachment; filename=\"$filename\"",
        // ]);
    }

    public function brandList()
    {
        $users = User::whereHas('roles', function ($query) {
            $query->where('name', 'Brand');
        })->get();

        return view('admin.brand.index', compact('users'));
    }

    public function brandOfferAdd($id)
    {
        $user = User::find($id);
        $offers = BrandOffer::where('userId', $id)->get();
        return view('admin.brand.createOffer', compact('user', 'offers'));
    }
    public function addBrand()
    {
        $brandCategories = BrandCategory::all();
        $businessCategory = Category::all();
        return view('admin.brand.create', compact('brandCategories', 'businessCategory'));
    }
    public function addBrandCode(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'mobileno' => 'required',
            'password' => 'required',
            'brandCategoryId' => 'required',
            'categoryId' => 'required',
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->username = $request->name;
        $user->mobileno = $request->mobileno;
        $user->password = Hash::make($request->password);
        $user->package = "FREE";
        $user->status = "Active";
        $user->save();

        $user->assignRole('Brand');

        $card = new CardsModels();
        $card->user_id = $user->id;
        $card->category = $request->categoryId;
        $card->save();

        $payment = new Payment();
        $payment->card_id = $card->id;
        $payment->save();

        $links = new Link();
        $links->card_id  = $card->id;
        $links->phone1  = $request->mobileno;
        $links->save();





        return redirect()->back()->with('success', 'Brand created successfully.');
    }
}
