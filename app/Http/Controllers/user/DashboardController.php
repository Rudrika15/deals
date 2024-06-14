<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\BrandCategory;
use App\Models\BrandWithCategory;
use App\Models\Brochure;
use App\Models\Cardportfoilo;
use App\Models\Cardservices;
use App\Models\CardsModels;
use App\Models\Categories;
use App\Models\Category;
use App\Models\CategoryInfluencer;
use App\Models\Counter;
use App\Models\Feedback;
use App\Models\InfluencerProfile;
use App\Models\Inquiry;
use App\Models\Link;
use App\Models\Payment;
use App\Models\Qrcode;
use App\Models\Servicedetail;
use App\Models\Slider;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Spatie\ImageOptimizer\OptimizerChainFactory;

class DashboardController extends Controller
{
    public function dashboard()
    {
        return view('user.dashboard.index');
    }

    public function edit(Request $req)
    {
        try {
            $authid = Auth::User()->id;
            $userurl = Auth::user()->mobileno;

            // user refer code generation start
            $referUserId = Auth::user()->id;
            $username = Auth::user()->username;
            $newStr = str_replace(' ', '', $username);
            $referCode = $newStr . $referUserId;
            $user = User::find($referUserId);
            $user->myrefer = $referCode;
            $user->save();
            // end

            $details = CardsModels::where('user_id', '=', $authid)->first();
            $id = $details->id;
            #for service details
            $servicedetail = Servicedetail::where('card_id', '=', $id)->get();
            #for payment data
            $payment = Payment::where('card_id', '=', $id)->first();

            $data1 = Cardservices::join('cards', 'cards.id', '=', 'cardservices.card_id')->where('cards.user_id', '=', $authid)
                ->where('cardservices.card_id', '=', $id)
                ->get(['cardservices.*']);

            $influencer = InfluencerProfile::where('userId', '=', $authid)->first();
            $brand_category = BrandWithCategory::where('brandId', '=', $authid)->first();
            $category = Categories::all();
            $influencerCategory = CategoryInfluencer::all();
            $brandCategory = BrandCategory::all();
            // $category = Admin::all();
            $data = User::where('id', '=', $authid)->get();
            $link = Link::join('cards', 'cards.id', '=', 'cardlinkes.card_id')
                ->where('cards.user_id', '=', $authid)
                ->where('cardlinkes.card_id', '=', $id)
                ->get(['cardlinkes.*']);

            $links = Link::where('card_id', '=', $id)->first();
            $qr = Qrcode::where('card_id', '=', $id)->get();
            $users = User::find($authid);


            $feed = Feedback::where('card_id', '=', $id)->get();
            $inq = Inquiry::where('card_id', '=', $id)->get();

            $admincategory = Category::all();
            $cardimage = Cardportfoilo::where('cardportfoilos.card_id', '=', $id)
                ->where('type', '=', 'Photo')
                // ->orWhere('type', '=', 'Image')
                ->get('cardportfoilos.*');
            $cardvideo = Cardportfoilo::where('cardportfoilos.card_id', '=', $id)
                ->where('type', '=', 'Video')
                ->get('cardportfoilos.*');


            $bro = Brochure::where('card_id', '=', $id)->get();
            $slider = Slider::where('card_id', '=', $id)->get();

            $linkcount = Link::where('card_id', '=', $id)->count();

            $category = Category::all();
            // if ($linkcount > 0) {
            //     return view('demo', compact('linkcount', 'inq', 'cardvideo', 'feed', 'id', 'details', 'qr', 'links', 'data1', 'category', 'cardimage', 'servicedetail', 'payment', 'admincategory', 'users'));
            // } else {
            return view('user.profile.index', compact('authid', 'userurl', 'influencer', 'influencerCategory', 'brand_category', 'brandCategory', 'category', 'slider', 'bro', 'linkcount', 'inq', 'cardvideo', 'feed', 'id', 'details', 'qr', 'links', 'data1', 'category', 'cardimage', 'servicedetail', 'payment', 'admincategory', 'users'));
            // }
        } catch (\Throwable $th) {
            throw $th;
            // 

        }
    }

    /* card new store */
    public function store(Request $request)
    {
        $this->validate($request, [
            'year' => 'regex:/^[a-zA-Z0-9\s]+$/',
            'logo' => 'mimetypes:image/jpeg,image/png,image/jpg,image/gif,image/svg+xml',
            'profilePhoto' => 'mimetypes:image/jpeg,image/png,image/jpg,image/gif,image/svg+xml',
            'category' => 'required',


        ], [
            'year.regex' => 'The year field must contain only letters and characters.',
            'logo.max' => 'The logo may not be greater than 2 MB.',
            'profilePhoto.max' => 'The profile photo may not be greater than 2 MB.',
            'logo.mimetypes' => 'The logo must be a valid image (jpeg, png, jpg, gif, svg).',
            'profilePhoto.mimetypes' => 'The profile photo must be a valid image (jpeg, png, jpg, gif, svg).',
        ]);
        try {
            $id = Auth::user()->id;
            //dd($id);
            $cards = CardsModels::where('user_id', '=', $id)->get();
            // return $cards;
            $card_id = $cards[0]->id;
            // return $card_id;
            $details =  CardsModels::find($card_id);


            // return $details;

            $details->name = $request->name;
            $details->heading = $request->heading;
            $details->companyname = $request->companyname;
            $details->city = $request->city;
            $details->state = $request->state;
            $category1 = $request->category;
            if ($category1 == 'other') {
                $categorystore = new Category();

                $categorystore->name = $request->categoryname;
                $categorystore->iconPath = "default.jpg";
                $categorystore->isBusiness = "yes";
                $categorystore->save();

                $details->category = $categorystore->id;
            } else {
                $details->category = $category1;
            }
            $details->about = $request->about;
            $details->address = $request->address;
            $details->year = $request->year;
            if ($request->logo) {
                $image = $request->logo;
                $details->logo = time() . '.' . $request->logo->extension();
                $request->logo->move(public_path('cardlogo'), $details->logo);
            }
            $details->save();

            $user = User::find($id);
            $user->name = $request->name;
            $user->username = $request->username;
            $image = $request->profilePhoto;
            if ($request->profilePhoto) {
                // Get the original file name
                $originalFileName = time() . '.' . $request->profilePhoto->extension();

                // Optimize the image in place
                $optimizerChain = OptimizerChainFactory::create();
                $optimizerChain->optimize($request->file('profilePhoto')->getPathname());

                // Move the optimized image to the desired directory
                $request->profilePhoto->move(public_path('profile'), $originalFileName);

                // Save the optimized image filename to the user's profilePhoto attribute
                $user->profilePhoto = $originalFileName;
            }
            $user->save();


            if (Auth::user()->hasRole('Influencer')) {
                $influencerCategory = $request->categoryId;
                // $categoryData = implode(",", $influencerCategory);
                $this->validate($request, [
                    'pinCode' => 'numeric|digits:6',
                    'instagramUrl' => 'regex:/^(?!.*[@#])(?!.*https:\/\/instagram)/',
                ], [
                    'instagramUrl.regex' => 'Do not enter @,# or https://instagram in the url.',
                ]);
                $influencer = InfluencerProfile::where('userId', '=', $id)->first();
                if ($influencerCategory) {
                    $influencer->categoryId = $influencerCategory;
                }

                $influencer->address = $request->influaddress;
                $influencer->contactNo = $user->mobileno;
                $influencer->publicLocation = $request->publicLocation;
                $influencer->city = $details->city;
                $influencer->state = $details->state;
                $influencer->gender = $request->gender;
                $influencer->pinCode = $request->pinCode;
                $influencer->instagramUrl = $request->instagramUrl;
                $influencer->instagramFollowers = $request->instagramFollowers;
                $influencer->youtubeChannelUrl = $request->youtubeChannelUrl;
                $influencer->youtubeSubscriber = $request->youtubeSubscriber;
                $influencer->dob = $request->dob;
                $influencer->save();
            }

            if (Auth::user()->hasRole('Brand')) {
                $brandId = Auth::user()->id;
                $brandCategory = BrandWithCategory::where('brandId', '=', $brandId)->first();
                if ($brandCategory) {
                    $brandCategory = BrandWithCategory::find($brandCategory->id);
                    $brandCategory->brandId = $brandId;
                    $brandCategory->brandCategoryId = $request->brandCategoryId;
                    $brandCategory->save();
                } else {
                    $brandCategory = new BrandWithCategory();
                    $brandCategory->brandId = $brandId;
                    $brandCategory->brandCategoryId = $request->brandCategoryId;
                    $brandCategory->save();
                }
            }
            return redirect()->back()->with('success', 'Details Updated successfully');
        } catch (\Throwable $th) {
            throw $th;
            // 
        }
    }

    // view card

    public function index($name = 0)
    {
        try {
            $userEmail = User::where('mobileno', '=', $name)
                ->count();
            // return $userEmail;
            if ($userEmail) {
                $userEmail1 = User::where('mobileno', '=', $name)
                    ->get();
                $id = $userEmail1[0]->id;
            }
            // return $name;

            // return $userEmail;
            if ($userEmail > 0) {
                // $userID = $userEmail[0]->id;

                $userfind = CardsModels::where('user_id', '=', $id)->count();

                // return $userfind->id;
                // $userfind = $userfind1[0]->id;
                // return $userfind;
                if ($userfind > 0) {
                    $userfind1 = CardsModels::where('user_id', '=', $id)->get();
                    $username = $userfind1[0]->name;
                } else {
                    return view('notfound');
                }
                // $userId = Auth::user()->id;
                $card_id1 = $userfind1[0]->id;
                // return $card_id1;

                // $checkCard1 = User::where('email', '=', $card_id1)->get();
                $checkCard1 = CardsModels::where('id', '=', $card_id1)->get();
                $card_id = $checkCard1[0]->id;
                $checkCard = CardsModels::where('id', '=', $card_id)->count();

                // return $checkCard;
                if ($checkCard == 0) {
                    return view('notfound');
                } else {

                    // counter code
                    $counter = Counter::where('card_id', '=', $card_id)->count();
                    if ($counter < 1) {
                        $totalcounter = new Counter();
                        $totalcounter->card_id = $card_id;
                        $totalcounter->counter = "1";
                        $totalcounter->save();
                    } else {

                        $counter = Counter::where('card_id', '=', $card_id)->first();
                        //get counter values & count id  from database
                        $dbcounter = $counter->counter;
                        $counter_id = $counter->id;

                        //update count values
                        $countinc = Counter::find($counter_id);
                        $countinc->counter = $dbcounter + 1;
                        $countinc->save();
                    }

                    // get counter  value  
                    $count = Counter::where('card_id', '=', $card_id)->first();

                    //

                    $cards = CardsModels::where('id', '=', $card_id)->first();
                    $user_id = $cards->user_id;

                    // return $cards;

                    // dd($user_id);
                    $card = CardsModels::join('admincategories', 'admincategories.id', '=', 'cards.category')
                        ->where('cards.id', '=', $card_id)
                        ->first(['cards.*', 'admincategories.name as catName']);


                    $user = DB::table('cards')
                        ->crossJoin('users')
                        ->select('cards.*', 'users.mobileno', 'users.email', 'users.profilePhoto')
                        ->where('users.id', '=', DB::raw('cards.user_id'))
                        ->where('users.id', '=', $user_id)
                        ->first();

                    $servicelist = Servicedetail::where('card_id', '=', $card_id)->get();
                    $links = Link::where('card_id', '=', $card_id)->first();
                    $web = Link::where('card_id', '=', $card_id)->first();
                    // dd($links);
                    $service = Servicedetail::where('card_id', '=', $card_id)->get();
                    // dd($payment1);
                    $payment = Payment::where('card_id', '=', $card_id)->get();
                    $gallery = Cardportfoilo::where('card_id', '=', $card_id)->get();
                    $gallery1 = Cardportfoilo::where('card_id', '=', $card_id)->get();
                    $qrno = Qrcode::where('card_id', '=', $card_id)->get();
                    $qrcod = Qrcode::where('card_id', '=', $card_id)->get();
                    $feed = Feedback::where('card_id', '=', $card_id)->get();
                    $feed1 = Feedback::where('card_id', '=', $card_id)->get();
                    $bro = Brochure::where('card_id', '=', $card_id)->get();
                    $slider = Slider::where('card_id', '=', $card_id)->get();

                    return view('user.profile.show', compact('count', 'bro', 'cards', 'card', 'service', 'servicelist',  'links', 'web', 'payment', 'gallery', 'gallery1', 'qrno', 'qrcod', 'feed', 'user', 'feed1', 'user_id', 'slider'));
                }
            } else {
                return view('notfound');
            }
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    function sliders(Request $request)
    {
        $request->validate([
            'file' => 'required',
        ]);

        try {
            $id = $request->sliderCardId;

            $slider = new Slider();
            $slider->card_id = $id;
            $image = $request->file;
            $slider->file = time() . '.' . $request->file->extension();
            $request->file->move(public_path('slider'), $slider->file);
            $slider->save();
            return redirect()->back()->with('success', "Slider Added Successfully");
        } catch (\Throwable $th) {
            throw $th;
        }
    }
    function photodestroy($id)
    {
        try {
            $photo = Cardportfoilo::find($id);
            // return $photo;
            $photo->delete();
            return redirect()->back()->with('success', "deleted successfully");
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
