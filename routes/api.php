<?php

use App\Http\Controllers\api\ApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


// login/register
Route::post('/login', [ApiController::class, 'login']);
Route::post('/checkotp', [ApiController::class, 'checkotp']);
Route::post('/sendotp', [ApiController::class, 'sendotp']);

Route::post('/otpapi', [ApiController::class, 'otpapi']);

// login with Pin

Route::post('/loginWithPin', [ApiController::class, 'loginWithPin']);
Route::post('/updatePin', [ApiController::class, 'updatePin']);



Route::post('/register1', [ApiController::class, 'register1']);
Route::post('/register', [ApiController::class, 'register']);

//Update Profile
Route::post('/updateProfile', [ApiController::class, 'updateProfile']);

//userPackage list
Route::post('/userpackage', [ApiController::class, 'userpackage']);

// cahange password

Route::post('/changepassword', [ApiController::class, 'changepassword']);
Route::post('/forgotpassword', [ApiController::class, 'forgotpassword']);
Route::post('/updatepassword', [ApiController::class, 'updatepassword']);


// category List
Route::get('/categorylist', [ApiController::class, 'categorylist']);

// card
Route::get('/cardview/{id?}', [ApiController::class, 'cardView']);
Route::post('/cardedit', [ApiController::class, 'cardedit']);


// Card Portfolio

Route::get('/portfolioview/{id}', [ApiController::class, 'portfolioView']);
Route::post('/portfoliostore', [ApiController::class, 'portfoliostore']);
Route::get('/portfoliodelete/{id}', [ApiController::class, 'portfoliodelete']);


// Services Details

Route::get('/serviceview/{id}', [ApiController::class, 'serviceview']);
Route::post('/servicestore', [ApiController::class, 'servicestore']);
Route::get('/servicedelete/{id}', [ApiController::class, 'servicedelete']);
Route::post('/serviceedit/{id?}', [ApiController::class, 'serviceedit']);


// Card Links

Route::get('/linksview/{id}', [ApiController::class, 'linksview']);
Route::post('/linksedit', [ApiController::class, 'linksedit']);
Route::get('/linksdelete/{id}', [ApiController::class, 'linksdelete']);


// Payment

Route::get('/paymentview/{id}', [ApiController::class, 'paymentview']);
Route::post('/paymentedit', [ApiController::class, 'paymentedit']);

// QR CODE

Route::get('/qrview/{id}', [ApiController::class, 'qrview']);
Route::post('/qrstore', [ApiController::class, 'qrstore']);
Route::get('/qrdelete/{id?}', [ApiController::class, 'qrdelete']);

// Brochure

Route::get('/broview/{id}', [ApiController::class, 'broview']);
Route::post('/brostore', [ApiController::class, 'brostore']);
Route::get('/brodelete/{id?}', [ApiController::class, 'brodelete']);

//category API list Start
// nonebusinesscategory
Route::get('/nonebusinesscategory', [ApiController::class, 'nonebusinesscategory']);
// with pagination
Route::get('/nonebusinesscategorywithpaginate', [ApiController::class, 'nonebusinesscategorywithpaginate']);

Route::post('/nonebusinesscategorysearch', [ApiController::class, 'nonebusinesscategorysearch']);

Route::get('/categorylistdatenull', [ApiController::class, 'categorylistdatenull']);
// with pagination
Route::get('/categorylistdatenullwithpagination', [ApiController::class, 'categorylistdatenullwithpagination']);

// isbusinesscategory
Route::post('/isbusinesscategory', [ApiController::class, 'isbusinesscategory']);

// with pagination
Route::post('/isbusinesscategorywithpaginate', [ApiController::class, 'isbusinesscategorywithpaginate']);

Route::post('/festivalCategory', [ApiController::class, 'festivalCategory']);

Route::post('/categorywithoutbussiness', [ApiController::class, 'categorywithoutbussiness']);

// endcategory

// start Media
Route::post('/categorymedia', [ApiController::class, 'categorymedia']);
// media with Pagination
Route::post('/categorymediaWithPaginate', [ApiController::class, 'categorymediaWithPaginate']);

// end media


//template Master
Route::get('/templateview', [ApiController::class, 'templateview']);
Route::post('/templatestore', [ApiController::class, 'templatestore']);
// custom template 
Route::get('/customTemplateView/{id?}', [ApiController::class, 'customTemplateView']);
Route::post('/customTemplateRequest', [ApiController::class, 'customTemplateRequest']);

// FeedBack
Route::get('/feedview/{id?}', [ApiController::class, 'feedview']);
Route::post('/feedstore', [ApiController::class, 'feedstore']);


// My media

Route::post('/storemedia', [ApiController::class, 'storemedia']);
Route::post('/mediaDownload', [ApiController::class, 'mediaDownload']);


// subscription Detail
Route::get('/subscriptiondetail', [ApiController::class, 'subscriptiondetail']);


// User logo
Route::post('/getImage', [ApiController::class, 'getImage']);

// category find by keyword
Route::get('/categorymaster', [ApiController::class, 'categorymaster']);
Route::post('/today', [ApiController::class, 'today']);

// update card link data 
Route::post('/updateUser', [ApiController::class, 'updateUser']);


// Payment data

Route::post('/paymentDetails', [ApiController::class, 'paymentDetails']);


// Banner 

Route::get('/banner', [ApiController::class, 'banner']);
Route::post('/bannerstore', [ApiController::class, 'bannerstore']);


// media (VIDEO)
Route::get('/mediavideo', [ApiController::class, 'mediavideo']);

// refer and earn 

Route::post('/refer', [ApiController::class, 'refer']);


// home category slider

Route::get('/homeCategorySlider', [ApiController::class, 'homeCategorySlider']);

//product 
Route::get('/product', [ApiController::class, 'productView']);


// refer Points
Route::post('/referpoints', [ApiController::class, 'referpoints']);

// Order

Route::get('/order', [ApiController::class, 'order']);
Route::post('/orderstore', [ApiController::class, 'orderstore']);


// add to Cart

Route::post('/viewcart', [ApiController::class, 'viewcart']);
Route::post('/addtocart', [ApiController::class, 'addtocart']);

// remove cart 
Route::post('/removecart', [ApiController::class, 'removecart']);

// Slider 

Route::get('/slider', [ApiController::class, 'slider']);
Route::post('/sliderstore', [ApiController::class, 'sliderstore']);


// Offer

Route::get('/offer', [ApiController::class, 'offerView']);
Route::post('/offerstore', [ApiController::class, 'offerstore']);


// type
Route::get('/typeview', [Apicontroller::class, 'typeView']);

// Notification
Route::get('/notificationview/{id?}', [ApiController::class, 'notificationView']);
Route::post('/notificationstore', [Apicontroller::class, 'notificationstore']);


// typedetail 
Route::get('/typedetailview/{id?}', [Apicontroller::class, 'typedetailview']);


// Home category view
Route::get('/homescreencategory', [Apicontroller::class, 'homescreencategory']);
Route::get('/homescreencategory/today', [Apicontroller::class, 'homescreencategoryfortoday']);


// notification tabel data store */
Route::post('/notificationdata', [ApiController::class, 'notificationdata']);

// notificationdata view */
Route::post('/notificationdataview', [ApiController::class, 'notificationdataview']);

// Coupon */
Route::get('/coupon', [ApiController::class, 'coupon']);
Route::post('/coupon/check', [ApiController::class, 'couponApply']);
Route::post('/package/check', [ApiController::class, 'packageCheck']);


// brand and influencer List
Route::get('/list', [ApiController::class, 'BrandInfluencerList']);


// -------------Brand


// Campaign

Route::get('/brand-campaign-list/{id?}', [ApiController::class, 'brandCampainList']);
Route::post('/brand-campaign-store', [ApiController::class, 'brandCampainStore']);
Route::post('/brand-campaign-edit/{id?}', [ApiController::class, 'brandCampainEdit']);
Route::get('/brand-campaign-delete/{id?}', [ApiController::class, 'brandCampainDelete']);


// Campaign Step

Route::get('/brand-campaign-step-list/{userId?}', [ApiController::class, 'brandCampainStepList']);
Route::post('/brand-campaign-step-store', [ApiController::class, 'brandCampainStepStore']);
Route::post('/brand-campaign-step-edit/{id?}', [ApiController::class, 'brandCampainStepEdit']);
Route::get('/brand-campaign-step-delete/{id?}', [ApiController::class, 'brandCampainStepDelete']);

// influencer followed steps
Route::get('/influencer-steps/{campaignId?}/{influencerId?}', [ApiController::class, 'influencerFollowedSteps']);

// brand package
Route::get('/brandPackage', [ApiController::class, 'brandPackage']);


// brand campaign appliers

Route::get('/brand-campaign-appliers/{userId?}', [ApiController::class, 'brandCampaignAppliers']);

// influencer Approval
Route::get('/brand-campaign-applier-approval/{campaignId?}/{userId?}', [ApiController::class, 'brandCampaignApplierApproval']);

// influencer On Hold
Route::get('/brand-campaign-applier-onHold/{campaignId?}/{userId?}', [ApiController::class, 'brandCampaignApplierOnHold']);

// influencer Reject
Route::get('/brand-campaign-applier-rejected/{campaignId?}/{userId?}', [ApiController::class, 'brandCampaignApplierReject']);

// influencer content
Route::get('/brand-campaign-applier-content/{campaignId?}/{userId?}', [ApiController::class, 'brandCampaignApplierContent']);

// content Approval\
Route::get('/brand-campaign-applier-content-approval/{id?}', [ApiController::class, 'brandCampaignApplierContentApproval']);

// content Pending
Route::get('/brand-campaign-applier-content-pending/{id?}', [ApiController::class, 'brandCampaignApplierContentPending']);

// content Reject
Route::post('/brand-campaign-applier-content-rejected/{id?}', [ApiController::class, 'brandCampaignApplierContentReject']);



// ---------- Influencer
Route::get('/influencerList', [ApiController::class, 'influencerList']);
Route::get('influencers', [ApiController::class, 'allInfluencer']);
Route::get('/influencerListById/{id?}', [ApiController::class, 'influencerListById']);

Route::get('/influencer-category', [ApiController::class, 'influencerCategoryList']);
Route::get('/influencer', [ApiController::class, 'categoryWiseInfluencerList']);

// profile
Route::post('/influencer-profile/{id?}', [ApiController::class, 'influencerProfile']);

// portfolio
Route::get('/influencer-portfolio/{id?}', [ApiController::class, 'influencerPortfolio']);
Route::post('/influencer-portfolio-store', [ApiController::class, 'influencerPortfolioStore']);
Route::get('/influencer-portfolio-delete/{id?}', [ApiController::class, 'influencerPortfolioDelete']);


// brand Lits for influencer
Route::get('/brand-list', [ApiController::class, 'BrandListWithCampaign']);

// apply by influencer
Route::post('/influencer-campaign-apply', [ApiController::class, 'campaignApplied']);

// campaign applied list of influencer

Route::get('/influencer-campaign-list/{id?}', [ApiController::class, 'campaignAppliedList']);

// coentant store for approved influencer
Route::post('/influencer-campaign-content-store', [ApiController::class, 'addContentforCampaign']);
Route::get('/influencer-campaign-content-view/{id?}', [ApiController::class, 'influencerContentforCampaignView']);

// followed Step by influencer
Route::get('/influencer-campaign-stepList/{campaignId?}', [ApiController::class, 'stepList']);
Route::post('/influencer-campaign-step', [ApiController::class, 'followedStep']);

Route::get('/influencer-package', [ApiController::class, 'influencerPackage']);
Route::get('/influencer-package-by-id/{id?}', [ApiController::class, 'influencerPackageById']);
Route::post('/influencer-package-store', [ApiController::class, 'storeInfluencerPackage']);
Route::get('/influencer-package-delete/{id?}', [ApiController::class, 'deleteInfluencerPackage']);


// appliers list by campaign id
Route::get('/appliersByCampaignId/{campaignId?}', [ApiController::class, 'appliersByCampaignId']);

Route::post('/contactInfluencer', [ApiController::class, 'contactInfluencer']);


// brand package buy
Route::post('/brandPackageBuy', [ApiController::class, 'brandPackageBuy']);
Route::get('/brandPoint/{id?}', [ApiController::class, 'brandPoint']);

Route::get('/contactInfluencerStatus/{brandId?}', [ApiController::class, 'contactInfluencerStatus']);



// manual payment

Route::post('/manualPayment', [ApiController::class, 'manualPayment']);


Route::get('/route-cache', function () {
    Artisan::call('route:cache');
    return 'Routes cache has been cleared';
});


// brandOffer crud

Route::get('/brand-offer-list/{id?}', [ApiController::class, 'brandOfferList']);
Route::post('/brand-offer-store', [ApiController::class, 'brandOfferCreate']);
Route::post('/brand-offer-edit/{id?}', [ApiController::class, 'brandOfferUpdate']);
Route::get('/brand-offer-delete/{id?}', [ApiController::class, 'brandOfferDelete']);



Route::get('/brand-category-list', [ApiController::class, 'offerCategoryList']);
Route::get('offerCategoryBrand/{categoryId?}', [ApiController::class, 'offerCategoryBrand']);
Route::get('purchesedOfferList/{userId?}', [ApiController::class, 'purchesedOfferList']);

// purchesedOffer
Route::post('/purchaseOffer', [ApiController::class, 'purchaseBrandOffer']);
Route::get('/offerSlider', [ApiController::class, 'offerSlider']);

// redeem OFFER  
Route::post('/redeemQrCode', [ApiController::class, 'redeemQrCode']);


// offer details
Route::get('/offerDetail/{offerId?}', [ApiController::class, 'offerDetail']);
Route::get('/recommendOffers', [ApiController::class, 'recommendOffers']);
Route::get('/offerBuyerList/{brandId?}', [ApiController::class, 'offerBuyerList']);
