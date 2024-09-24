<?php

use App\Models\City;
use App\Models\User;
use App\Models\BrandOffer;
use Illuminate\Http\Request;
use App\Models\BrandCategory;
use App\Models\BrandWithCategory;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\OtpController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\LocationController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Auth::routes();


Route::get('/', function (Request $request) {
    $brandCategory =null;

    $offerCategory = BrandCategory::take(9)->get();
    $brandLogos = User::whereHas('roles', function ($q) {
        $q->where('name', 'Brand');
    })->with('card')->get();
    $posters = BrandCategory::inRandomOrder()->take(3)->get();
    $sliderPosters = BrandCategory::all();

    $cat = BrandCategory::inRandomOrder()->first();
    $posters2 = BrandCategory::inRandomOrder()->where('id', $cat->id)->with('brand.brand.card.cardPortfolio')->get();

    $brands = BrandWithCategory::with('brand.card.cardPortfolio')->get();

    $newBrands = User::whereHas('roles', function ($q) {
        $q->where('name', 'Brand');
    })->with('offer')->with('card')->with('brandWithCategories')->take(4)->get();
    // return $newBrands;

    $offers = BrandOffer::inRandomOrder()->take(6)->get();
    $cities = City::where('is_delete', '=', 'Active')->get();

    $randomBrandPortfolio = User::whereHas('roles', function ($q) {
        $q->where('name', 'Brand');
    })->with('card.cardPortfolio')->get();

    if (Auth::user()) {
        $userId = auth()->user()->id;      // Get the logged-in user's ID
        $userLocation = DB::table('locations')
            ->where('user_id', $userId)
            ->first(['latitude', 'longitude']); // Assuming 'city' column exists in 'locations' table

        // return $userLocation;
        if ($userLocation) {
            $latitude = $userLocation->latitude;
            $longitude = $userLocation->longitude;
            $radius = 2; // Radius in kilometers

            // Query to find locations within 2km radius
            $locations = DB::table('locations')
                ->select('id', 'user_id', 'latitude', 'longitude')
                ->whereRaw("
            (6371 * acos(
                cos(radians(?)) * cos(radians(latitude)) *
                cos(radians(longitude) - radians(?)) +
                sin(radians(?)) * sin(radians(latitude))
            )) <= ?
            ", [$latitude, $longitude, $latitude, $radius])
            ->pluck('user_id');

            if ($locations->isNotEmpty()) {
                $userData = DB::table('users')
                    ->whereIn('id', $locations)
                    ->get(['id', 'name', 'profilePhoto', 'city']); // Adjust column names as needed
                $id = $userData->pluck('id');
                $brandCategory = DB::table('brand_with_categories')
                    ->whereIn('brandId', $id)
                    ->pluck('brandCategoryId')
                    ->first();
            }
        }
    } else {
        // $userData = '';
        $city = session('city');
        $latitude = session('latitude');
        $longitude = session('longitude');
        
        $near_latitude = $latitude;
        $near_longitude = $longitude;
        $near_radius = 2; // Radius in kilometers
        $locations = DB::table('locations')
            ->select('id', 'user_id', 'latitude', 'longitude')
            ->whereRaw("
         (6371 * acos(
             cos(radians(?)) * cos(radians(latitude)) *
             cos(radians(longitude) - radians(?)) +
             sin(radians(?)) * sin(radians(latitude))
         )) <= ?
         ", [$near_latitude, $near_longitude, $near_latitude, $near_radius])
            ->pluck('user_id');
        if ($locations->isNotEmpty()) {
            $userData = DB::table('users')
                ->whereIn('id', $locations)
                ->get(['id', 'name', 'profilePhoto', 'city']); // Adjust column names as needed
            $id = $userData->pluck('id');
            $brandCategory = DB::table('brand_with_categories')
                ->whereIn('brandId', $id)
                ->pluck('brandCategoryId')
                ->first();
        }

    }

    return view('welcome', compact('userData', 'brandCategory', 'offerCategory', 'brandLogos', 'posters', 'sliderPosters', 'brands', 'posters2', 'cat', 'newBrands', 'offers', 'randomBrandPortfolio', 'cities'));
});
Route::post('/getlocalstoragedata',[LocationController::class,'getlocalstoragedata']);
Route::get('/search-main', [HomepageController::class, 'search_main']);

// search nearby location
// Route::post('/search-nearby-brands', [LocationController::class, 'searchNearby'])->name('search.nearby.brands');

Route::get('/search', function (Request $request) {
    if ($request->ajax()) {
        $query = $request->get('search');
        $results = [];

        $categories = BrandCategory::where('name', 'LIKE', "%{$query}%")->take(5)->get();
        foreach ($categories as $category) {
            $results[] = ['id' => $category->id, 'name' => $category->name, 'type' => 'category'];
        }

        $brands = User::whereHas('roles', function ($q) {
            $q->where('name', 'Brand');
        })->where('name', 'LIKE', "%{$query}%")->take(5)->get();
        foreach ($brands as $brand) {
            $results[] = ['id' => $brand->id, 'name' => $brand->name, 'type' => 'brand'];
        }

        $offers = BrandOffer::where('title', 'LIKE', "%{$query}%")->take(5)->get();
        foreach ($offers as $offer) {
            $results[] = ['id' => $offer->id, 'name' => $offer->title, 'type' => 'offer'];
        }

        return response()->json($results);
    }
})->name('search');


Route::group(['middleware' => ['auth']], function () {
    Route::prefix('/')->group(__DIR__ . '/admin/adminRoute.php');
    Route::prefix('/')->group(__DIR__ . '/user/userRoute.php');
    Route::prefix('/')->group(__DIR__ . '/writer/writerRoute.php');
    Route::prefix('/')->group(__DIR__ . '/designer/designerRoute.php');
    Route::prefix('/')->group(__DIR__ . '/brand/brandRoute.php');
    Route::prefix('/')->group(__DIR__ . '/influencer/influencerRoute.php');
    Route::prefix('/')->group(__DIR__ . '/reseller/resellerRoute.php');

    Route::get('/fetch-layout', [App\Http\Controllers\HomepageController::class, 'fetchLayout'])->name('fetch-layout');
    // routes/web.php
    Route::post('/save-location', [LocationController::class, 'store'])
        ->name('save.location');
    Route::post('/find-users-by-city', [LocationController::class, 'findUsersByCity'])->name('find.users.by.city');
});

// OTP 

Route::controller(OtpController::class)->group(function () {
    Route::get('loginn', 'login')->name('otp.login');
    Route::get('auth/checkotp', 'checkotp')->name('auth.checkotp');
    Route::post('auth/loginotp/{id?}', 'loginotp')->name('auth.loginotp');
    Route::post('otp/generate', 'generate')->name('otp.generate');
});

// influencer details
Route::get('/influencer', [HomepageController::class, 'influencer'])->name('main.influencer');
Route::get('/influencer/profile/{id?}', [HomepageController::class, 'influencerProfileView'])->name('main.influencer.profile');

// brand offers
Route::get('/brand/offer', [HomepageController::class, 'brandOffer'])->name('main.brandOffer');
Route::get('/brand/offers/{categoryId?}', [HomepageController::class, 'getOffer'])->name('brand.offer');
Route::get('/brand/detail/{id?}/{category?}', [HomepageController::class, 'brandDetail'])->name('brand.detail');

// qr code
Route::get('/getQr/{offerId?}', [HomepageController::class, 'qrCode'])->name('qrCode');


Route::get('/about', [HomepageController::class, 'about'])->name('about');
Route::get('/contact', [HomepageController::class, 'contact'])->name('contact');
Route::get('/privacy', [HomepageController::class, 'privacy'])->name('privacy');
Route::get('/refund', [HomepageController::class, 'refund'])->name('refund');
Route::get('/term', [HomepageController::class, 'term'])->name('term');


// offer payment
Route::post('/store-current-url', function (Request $request) {
    $request->session()->put('current_url', $request->url);
    return response()->json(['message' => 'Current URL stored successfully']);
});

Route::post('/set-login-user-session', function (Request $request) {
    // Retrieve the value to set the loginUser session variable
    $loginUser = $request->input('loginUser');

    session(['loginUser' => $loginUser]);

    return response()->json(['message' => 'loginUser session variable set successfully']);
});
