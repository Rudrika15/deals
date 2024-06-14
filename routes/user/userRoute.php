<?php

use App\Http\Controllers\Admin\user\SubscriptionpackageController;
use App\Http\Controllers\brand\BrandOfferController;
use App\Http\Controllers\user\BannerController;
use App\Http\Controllers\user\BrochureController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\user\DashboardController;
use App\Http\Controllers\user\FeedbackController;
use App\Http\Controllers\user\InquiryController;
use App\Http\Controllers\user\LinkController;
use App\Http\Controllers\user\PaymentController;
use App\Http\Controllers\user\PortfolioController;
use App\Http\Controllers\user\QrcodeController;
use App\Http\Controllers\user\ReferController;
use App\Http\Controllers\user\ServiceController;
use App\Http\Controllers\user\SliderController;
use App\Http\Controllers\user\UserTemplateMasterController;
use App\Http\Controllers\writer\WriterController;
use App\Http\Controllers\writer\WriterdController;

Route::get('user/dashboard', [DashboardController::class, 'dashboard'])->name('user.dashboard');

// Card
Route::get('user/profile', [DashboardController::class, 'edit'])->name('profile');
Route::get('mycard/{name?}', [DashboardController::class, 'index'])->name('user.card');
Route::post('card/store', [DashboardController::class, 'store'])->name('card.store');
Route::get('photo-delete/{id?}', [DashboardController::class, 'photodestroy'])->name('photo.delete');


// feedback and inquiry


// slider
Route::post('/sliders', [DashboardController::class, 'sliders'])->name('sliders');


// Payments
Route::get('payment/index/{id?}', [PaymentController::class, 'index'])->name('payment.index');
Route::post('payment/update', [PaymentController::class, 'update'])->name('payment.update');

// QR Codes
Route::post('qrcode/store', [QrcodeController::class, 'store'])->name('qrcode.store');
Route::get('qr/delete/{id?}', [QrcodeController::class, 'destroy'])->name('qr.delete');
Route::get('slider/delete/{id?}', [SliderController::class, 'destroy'])->name('slider.delete');

// Feedback Form
Route::post('feedback/store', [FeedbackController::class, 'store'])->name('feedback.store');
Route::get('feedback/index', [FeedbackController::class, 'index'])->name('feed.index');

// Inquiry
Route::post('inquiry/store', [InquiryController::class, 'store'])->name('inquiry.store');
Route::get('inquiry/index', [InquiryController::class, 'index'])->name('inquiry.index');

//brou
Route::post('brochure/store', [BrochureController::class, 'store'])->name('bro.store');
Route::get('brochure/delete/{id?}', [BrochureController::class, 'destroy'])->name('bro.delete');


// banner
Route::get('banner/index', [BannerController::class, 'index'])->name('banner.index');
Route::get('banner/create', [BannerController::class, 'create'])->name('banner.create');
Route::post('banner/store', [BannerController::class, 'store'])->name('banner.store');
Route::get('banner/delete/{id?}', [BannerController::class, 'destory'])->name('banner.delete');

// Link
Route::post('link/update', [LinkController::class, 'update'])->name('link.update');
Route::get('detail-delete/{id?}', [LinkController::class, 'delete'])->name('detail.delete');



// Service Details
Route::get('serviceDetails/index', [SubscriptionpackageController::class, 'index'])->name('servicedetail.index');

// Card Service
Route::post('serviceDetails/store', [ServiceController::class, 'store'])->name('servicedetail.store');
Route::get('serviceDetails/edit/{id?}', [ServiceController::class, 'edit'])->name('servicedetail.edit');
Route::post('serviceDetails/update', [ServiceController::class, 'update'])->name('servicedetail.update');
Route::get('serviceDetails/delete/{id?}', [ServiceController::class, 'destroy'])->name('servicedetail.delete');



//  REFER CODE
Route::get('refer/index', [ReferController::class, 'index'])->name('refer.index');


// portfolio

Route::get('portfolio', [PortfolioController::class, 'index'])->name('portfolio.index');
Route::get('portfolio/create', [PortfolioController::class, 'create'])->name('portfolio.create');
Route::post('portfolio/store', [PortfolioController::class, 'store'])->name('portfolio.store');
Route::get('portfolio/edit/{id?}', [PortfolioController::class, 'edit'])->name('portfolio.edit');
Route::post('portfolio/update', [PortfolioController::class, 'update'])->name('portfolio.update');
Route::get('portfolio/delete/{id?}', [PortfolioController::class, 'delete'])->name('portfolio.delete');

Route::post('image-store', [PortfolioController::class, 'storeimage'])->name('image.store');


// User Template Master

Route::get('userTemplate/index', [UserTemplateMasterController::class, 'index'])->name('userTemplate.index');
Route::get('userTemplate/create', [UserTemplateMasterController::class, 'create'])->name('userTemplate.create');
Route::post('userTemplate/store', [UserTemplateMasterController::class, 'store'])->name('userTemplate.store');
Route::get('userTemplate/edit/{id}', [UserTemplateMasterController::class, 'edit'])->name('userTemplate.edit');
Route::post('userTemplate/update', [UserTemplateMasterController::class, 'update'])->name('userTemplate.update');
Route::get('userTemplate/delete/{id?}', [UserTemplateMasterController::class, 'destroy'])->name('userTemplate.delete');


// my purchase offer list

Route::get('my-purchase-offer', [BrandOfferController::class, 'myPurchaseOffer'])->name('my-purchase-offer');
