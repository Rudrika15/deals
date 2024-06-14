<?php

namespace App\Http\Controllers;

use App\Models\BrandCategory;
use App\Models\BrandWithCategory;
use App\Models\Brochure;
use App\Models\Cardportfoilo;
use App\Models\Cardservices;
use Illuminate\Http\Request;
use App\Models\CardsModels;
use App\Models\Categories;
use App\Models\Category;
use App\Models\CategoryInfluencer;
use App\Models\Design;
use App\Models\Feedback;
use App\Models\InfluencerProfile;
use App\Models\Inquiry;
use App\Models\User;
use App\Models\Link;
use App\Models\Payment;
use App\Models\Qrcode;
use App\Models\Servicedetail;
use App\Models\Slider;
use App\Models\Writerslogan;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // try {
        //     //  'Writer', 'Designer', 'Influencer', 'Brand'   // for dashboard
        //     if (Auth::user()->hasRole(['Admin'])) {
        //         $users = User::count();
        //         $paidUsers = User::where('package', '!=', 'FREE')->count();
        //         $freeUsers = User::where('package', '=', 'FREE')->count();

        //         $influencer = User::whereHas(
        //             'roles',
        //             function ($q) {
        //                 $q->where('name', 'Influencer');
        //             }
        //         )->count();
        //         $brand = User::whereHas(
        //             'roles',
        //             function ($q) {
        //                 $q->where('name', 'Brand');
        //             }
        //         )->count();
        //         $reseller = User::whereHas(
        //             'roles',
        //             function ($q) {
        //                 $q->where('name', 'Reseller');
        //             }
        //         )->count();
        //         $writer = User::whereHas(
        //             'roles',
        //             function ($q) {
        //                 $q->where('name', 'Writer');
        //             }
        //         )->count();
        //         $designer = User::whereHas(
        //             'roles',
        //             function ($q) {
        //                 $q->where('name', 'Designer');
        //             }
        //         )->count();
        //         $pendingSlogans = Writerslogan::where('status', '=', 'Pending')->count();
        //         $pendingDesign = Design::where('status', '=', 'Pending')->count();
        //         return view('home', \compact('users', 'paidUsers', 'freeUsers', 'influencer', 'brand', 'reseller', 'writer', 'designer', 'pendingDesign', 'pendingSlogans'));
        //     } else {
        //         $id = Auth::user()->id;
        //         // $data = CardsModels::join('users', 'users.id', '=', 'cards.user_id')->where('users.id', '=', $id)->get(['cards.*', 'users.email']);
        //         // return $data;
        //         $authid = Auth::User()->id;
        //         $userurl = Auth::user()->mobileno;

        //         // user refer code generation start
        //         $referUserId = Auth::user()->id;
        //         $username = Auth::user()->username;
        //         $newStr = str_replace(' ', '', $username);
        //         $referCode = $newStr . $referUserId;
        //         $user = User::find($referUserId);
        //         $user->myrefer = $referCode;
        //         $user->save();
        //         // end

        //         $details = CardsModels::where('user_id', '=', $authid)->first();
        //         $id = $details->id;
        //         #for service details
        //         $servicedetail = Servicedetail::where('card_id', '=', $id)->get();
        //         #for payment data
        //         $payment = Payment::where('card_id', '=', $id)->first();

        //         $data1 = Cardservices::join('cards', 'cards.id', '=', 'cardservices.card_id')->where('cards.user_id', '=', $authid)
        //             ->where('cardservices.card_id', '=', $id)
        //             ->get(['cardservices.*']);

        //         $influencer = InfluencerProfile::where('userId', '=', $authid)->first();
        //         // $category = Categories::all();
        //         $influencerCategory = CategoryInfluencer::all();
        //         // $category = Admin::all();
        //         $data = User::where('id', '=', $authid)->get();
        //         $link = Link::join('cards', 'cards.id', '=', 'cardlinkes.card_id')
        //             ->where('cards.user_id', '=', $authid)
        //             ->where('cardlinkes.card_id', '=', $id)
        //             ->get(['cardlinkes.*']);

        //         $links = Link::where('card_id', '=', $id)->first();
        //         $qr = Qrcode::where('card_id', '=', $id)->get();
        //         $users = User::find($authid);


        //         $feed = Feedback::where('card_id', '=', $id)->get();
        //         $inq = Inquiry::where('card_id', '=', $id)->get();

        //         $admincategory = Category::where('isBusiness', '=', 'yes')->get();
        //         $cardimage = Cardportfoilo::where('cardportfoilos.card_id', '=', $id)
        //             ->where('type', '=', 'Photo')
        //             // ->orWhere('type', '=', 'Image')
        //             ->get('cardportfoilos.*');
        //         $cardvideo = Cardportfoilo::where('cardportfoilos.card_id', '=', $id)
        //             ->where('type', '=', 'Video')
        //             ->get('cardportfoilos.*');


        //         $bro = Brochure::where('card_id', '=', $id)->get();
        //         $slider = Slider::where('card_id', '=', $id)->get();

        //         $linkcount = Link::where('card_id', '=', $id)->count();
        //         $brandCategory = BrandCategory::all();
        //         $brand_category = BrandWithCategory::where('brandId', '=', $authid)->first();
        //         $category = Category::where('isBusiness', '=', 'yes')->get();
        //         // if ($linkcount > 0) {
        //         //     return view('demo', compact('linkcount', 'inq', 'cardvideo', 'feed', 'id', 'details', 'qr', 'links', 'data1', 'category', 'cardimage', 'servicedetail', 'payment', 'admincategory', 'users'));
        //         // } else {
        //         return view('demo', compact('data', 'authid', 'userurl', 'influencer', 'brandCategory', 'brand_category', 'influencerCategory', 'category', 'slider', 'bro', 'linkcount', 'inq', 'cardvideo', 'feed', 'id', 'details', 'qr', 'links', 'data1', 'category', 'cardimage', 'servicedetail', 'payment', 'admincategory', 'users'));
        //     }
        // } catch (\Throwable $th) {
        //     throw $th;
        //      
        //      
        // }

        return view('home');
    }

    public function home2()
    {
        try {
            // $homecard = CardsModels::all();
            $id = Auth::User()->id;
            $cardshow = CardsModels::join('users', 'users.id', '=', 'cards.user_id')->where('users.id', '=', $id)->get(['users.email', 'cards.*']);
            $link = Link::join('cards', 'cards.id', '=', 'cardlinkes.card_id')->where('cards.user_id', '=', $id)->get(['cardlinkes.*']);
            // return $cardshow;
            return view('layout.home1', compact('cardshow', 'link'));
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
