<?php

use App\Http\Controllers\admin\ActivityController;
use App\Http\Controllers\admin\BrandCategoryController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\CategoryInfluencerController;
use App\Http\Controllers\admin\CityController;
use App\Http\Controllers\admin\CostController;
use App\Http\Controllers\admin\CouponController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\ManualPaymentController;
use App\Http\Controllers\admin\MediaController;
use App\Http\Controllers\admin\OfferController;
use App\Http\Controllers\admin\OfferSliderController;
use App\Http\Controllers\admin\PricingController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\admin\RoleController as AdminRoleController;
use App\Http\Controllers\admin\StateController;
use App\Http\Controllers\admin\TemplateDetailController;
use App\Http\Controllers\admin\TemplatemasterController;
use App\Http\Controllers\admin\TypeController;
use App\Http\Controllers\admin\TypedetailController;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\admin\WriterDesignerController;
use App\Http\Controllers\designer\DesignController;
use Illuminate\Support\Facades\Route;


Route::get('admin/dashboard', [DashboardController::class, 'dashboard'])->name('admin.dashboard');
// Route::get('admin/user/list', [UserController::class, 'index'])->name('users.index');
// Route::get('admin/user/create', [UserController::class, 'create'])->name('users.create');


Route::resource('roles', AdminRoleController::class);
Route::resource('users', UserController::class);
Route::get('/assign/roles', [UserController::class, 'assignRoles'])->name('users.assignRole');
Route::get('/assign/roles/create/{id?}', [UserController::class, 'assignRoleCreate'])->name('users.assignRoleCreate');
Route::post('/assign/roles/code', [UserController::class, 'assignRoleCreateCode'])->name('users.assignRoleCreateCode');


// change email and password

Route::get('account/setting', [UserController::class, 'changeEmail'])->name('account.setting');

Route::post('change-email', [UserController::class, 'changeEmailCode'])->name('change.email');
Route::post('change-password', [UserController::class, 'changePassword'])->name('change.password');


// pricing

Route::get('/pricing', [PricingController::class, 'index'])->name('pricing.index');
// Route::post('/pricing/payment', [PricingController::class, 'store'])->name('pay');



Route::group(['prefix' => 'instamojopayments'], function () {
    // Route::post('/payment', [PricingController::class, 'store'])->name('package.payment');
    // Route::any('/success/package', [PricingController::class, 'success']);
});

Route::get('payment', [PricingController::class, 'index']);
Route::post('razorpay-payment', [PricingController::class, 'store'])->name('razorpay.payment.store');





// Category

Route::get('admincategory/index', [CategoryController::class, 'index'])->name('admincategory.index');
Route::get('admincategory/create', [CategoryController::class, 'create'])->name('admincategory.create');
Route::post('admincategory/store', [CategoryController::class, 'store'])->name('admincategory.store');
Route::get('admincategory/edit/{id}', [CategoryController::class, 'edit'])->name('admincategory.edit');
Route::post('admincategory/update', [CategoryController::class, 'update'])->name('admincategory.update');
Route::get('admincategory/delete/{id?}', [CategoryController::class, 'destroy'])->name('admincategory.delete');


// Media
Route::get('adminMedia/index', [MediaController::class, 'index'])->name('adminmedia.index');
Route::get('adminMedia/create', [MediaController::class, 'create'])->name('adminmedia.create');
Route::post('adminMedia/store', [MediaController::class, 'store'])->name('adminmedia.store');
Route::get('adminMedia/edit/{id}', [MediaController::class, 'edit'])->name('adminmedia.edit');
Route::post('adminMedia/update', [MediaController::class, 'update'])->name('adminmedia.update');
Route::get('adminMedia/delete/{id?}', [MediaController::class, 'destroy'])->name('adminmedia.delete');
Route::get('adminMedia/downloads', [MediaController::class, 'downloads'])->name('admindownload.index');
// select Category Page
Route::get('adminMedia/select-category', [MediaController::class, 'selectCategory'])->name('adminmedia.selectCategory');


// slogan
Route::get('adminslogan/adminslogan', [WriterDesignerController::class, 'adminslogan'])->name('adminslogan.adminslogan');
Route::post('adminslogan/approve', [WriterDesignerController::class, 'approve'])->name('adminslogan.approve');
Route::post('adminslogan/changeDate', [WriterDesignerController::class, 'changeSloganDate'])->name('slogan.changeDate');

// design
Route::get('admindesign/admindesign', [WriterDesignerController::class, 'admindesign'])->name('admindesign.admindesign');
Route::get('admindesign/approve/{id?}', [WriterDesignerController::class, 'designapprove'])->name('admindesign.approve');
Route::post('admindesign/designapproveCode', [WriterDesignerController::class, 'designapproveCode'])->name('admindesign.designapproveCode');
Route::post('admindesign/reject', [WriterDesignerController::class, 'reject'])->name('admindesign.reject');


// Template Master

Route::get('admintemplatemaster/index', [TemplatemasterController::class, 'index'])->name('admintemplatemaster.index');
Route::get('admintemplatemaster/create', [TemplatemasterController::class, 'create'])->name('admintemplatemaster.create');
Route::post('admintemplatemaster/store', [TemplatemasterController::class, 'store'])->name('admintemplatemaster.store');
Route::get('admintemplatemaster/edit/{id}', [TemplatemasterController::class, 'edit'])->name('admintemplatemaster.edit');
Route::post('admintemplatemaster/update', [TemplatemasterController::class, 'update'])->name('admintemplatemaster.update');
Route::get('admintemplatemaster/delete/{id?}', [TemplatemasterController::class, 'destroy'])->name('admintemplatemaster.delete');


// Template Master
Route::get('adminTemplateDetail/index/{id?}', [TemplateDetailController::class, 'index'])->name('adminTemplateDetail.index');
Route::get('adminTemplateDetail/create', [TemplateDetailController::class, 'create'])->name('adminTemplateDetail.create');
Route::post('adminTemplateDetail/store', [TemplateDetailController::class, 'store'])->name('adminTemplateDetail.store');
Route::get('adminTemplateDetail/edit/{id}', [TemplateDetailController::class, 'edit'])->name('adminTemplateDetail.edit');
Route::post('adminTemplateDetail/update', [TemplateDetailController::class, 'update'])->name('adminTemplateDetail.update');
Route::get('adminTemplateDetail/delete/{id?}', [TemplateDetailController::class, 'destroy'])->name('adminTemplateDetail.delete');


// Product
Route::get('product/index', [ProductController::class, 'index'])->name('product.index');
Route::get('product/create', [ProductController::class, 'create'])->name('product.create');
Route::post('product/store', [ProductController::class, 'store'])->name('product.store');
Route::get('product/edit/{id?}', [ProductController::class, 'edit'])->name('product.edit');
Route::post('product/update', [ProductController::class, 'update'])->name('product.update');
Route::get('product/delete/{id?}', [ProductController::class, 'destory'])->name('product.delete');



// adminstate details
Route::get('state/index', [StateController::class, 'index'])->name('state.index');
Route::get('state/create', [StateController::class, 'create'])->name('state.create');
Route::post('state/store', [StateController::class, 'store'])->name('state.store');
Route::get('state/edit/{id?}', [StateController::class, 'edit'])->name(('state.edit'));
Route::post('state/update', [StateController::class, 'update'])->name('state.update');
Route::get('state/delete/{id?}', [StateController::class, 'delete'])->name('state.delete');


// admincity details
Route::get('city/index', [CityController::class, 'index'])->name('city.index');
Route::get('city/create', [CityController::class, 'create'])->name('city.create');
Route::post('city/store', [CityController::class, 'store'])->name('city.store');
Route::get('city/edit/{id?}', [CityController::class, 'edit'])->name('city.edit');
Route::post('city/update/{id?}', [CityController::class, 'update'])->name('city.update');
Route::get('city/delete/{id?}', [CityController::class, 'delete'])->name('city.delete');


// brand Packages activity
Route::get('admin/brand/package/activity/index', [ActivityController::class, 'index'])->name('admin.brand.activity.index');
Route::get('admin/brand/package/activity/create', [ActivityController::class, 'create'])->name('admin.brand.activity.create');
Route::post('admin/brand/package/activity/store', [ActivityController::class, 'store'])->name('admin.brand.activity.store');
Route::get('admin/brand/package/activity/edit/{id?}', [ActivityController::class, 'edit'])->name('admin.brand.activity.edit');
Route::post('admin/brand/package/activity/update', [ActivityController::class, 'update'])->name('admin.brand.activity.update');
Route::get('admin/brand/package/activity/delete/{id?}', [ActivityController::class, 'delete'])->name('admin.brand.activity.delete');


// influencer category
Route::get('influencer/category/index', [CategoryInfluencerController::class, 'index'])->name('influencer.index');
Route::get('influencer/list', [CategoryInfluencerController::class, 'list'])->name('influencer.list');
Route::get('influencer/singleView/{id?}', [CategoryInfluencerController::class, 'singleView'])->name('influencer.singleView');
Route::get('influencer/statusEdit/{id?}', [CategoryInfluencerController::class, 'statusEdit'])->name('influencer.statusEdit');
Route::post('influencer/statusEditCode', [CategoryInfluencerController::class, 'statusEditCode'])->name('influencer.statusEditCode');
Route::get('influencer/category/create', [CategoryInfluencerController::class, 'create'])->name('influencer.create');
Route::post('influencer/category/store', [CategoryInfluencerController::class, 'store'])->name('influencer.store');
Route::get('influencer/category/edit/{id?}', [CategoryInfluencerController::class, 'edit'])->name('influencer.edit');
Route::post('influencer/category/update', [CategoryInfluencerController::class, 'update'])->name('influencer.update');
Route::get('influencer/category/delete/{id?}', [CategoryInfluencerController::class, 'destroy'])->name('influencer.delete');



// Brand Category
Route::get('brand/category/index', [BrandCategoryController::class, 'index'])->name('brand.category.index');
Route::get('brand/category/create', [BrandCategoryController::class, 'create'])->name('brand.category.create');
Route::post('brand/category/store', [BrandCategoryController::class, 'store'])->name('brand.category.store');
Route::get('brand/category/edit/{id?}', [BrandCategoryController::class, 'edit'])->name('brand.category.edit');
Route::post('brand/category/update', [BrandCategoryController::class, 'update'])->name('brand.category.update');
Route::get('brand/category/delete/{id?}', [BrandCategoryController::class, 'delete'])->name('brand.category.delete');


// Offer
Route::controller(OfferController::class)->group(function () {
    Route::get('offer/index', 'index')->name('offer.index');
    Route::get('offer/create', 'create')->name('offer.create');
    Route::post('offer/store', 'store')->name('offer.store');
    Route::get('offer/edit/{id?}', 'edit')->name('offer.edit');
    Route::post('offer/update', 'update')->name('offer.update');
    Route::get('offer/delete/{id?}', 'destroy')->name('offer.delete');
    Route::get('offer/offerdetail/{id?}', 'offerdetail')->name('offer.offerdetail');
    Route::post('offer/offerdetailstore', 'offerdetailstore')->name('offer.offerdetailstore');
    Route::get('offer/offerdetailedit/{id?}', 'offerdetailedit')->name('offer.offerdetailedit');
    Route::post('offer/offerdetailupdate', 'offerdetailupdate')->name('offer.offerdetailupdate');
    Route::get('offer/offerdetaildelete/{id?}', 'offerdetaildelete')->name('offer.offerdetaildelete');
});

// Admin Coupon
Route::get('coupon/index', [CouponController::class, 'index'])->name('coupon.index');
Route::get('coupon/create', [CouponController::class, 'create'])->name('coupon.create');
Route::post('coupon/store', [CouponController::class, 'store'])->name('coupon.store');
Route::get('coupon/edit/{id?}', [CouponController::class, 'edit'])->name('coupon.edit');
Route::post('coupon/update', [CouponController::class, 'update'])->name('coupon.update');
Route::get('coupon/delete/{id?}', [CouponController::class, 'delete'])->name('coupon.delete');

// Admin Type
Route::get('type/index', [TypeController::class, 'index'])->name('type.index');
Route::get('type/create', [TypeController::class, 'create'])->name('type.create');
Route::post('type/store', [TypeController::class, 'store'])->name('type.store');
Route::get('type/edit/{id?}', [TypeController::class, 'edit'])->name('type.edit');
Route::post('type/update', [TypeController::class, 'update'])->name('type.update');
Route::get('type/delete/{id?}', [TypeController::class, 'destroy'])->name('type.delete');

// Admin Type detail
Route::get('typedetail/index', [TypedetailController::class, 'index'])->name('typedetail.index');
Route::get('typedetail/create', [TypedetailController::class, 'create'])->name('typedetail.create');
Route::post('typedetail/store', [TypedetailController::class, 'store'])->name('typedetail.store');
Route::get('typedetail/edit/{id?}', [TypedetailController::class, 'edit'])->name('typedetail.edit');
Route::post('typedetail/update', [TypedetailController::class, 'update'])->name('typedetail.update');
Route::get('typedetail/delete/{id?}', [TypedetailController::class, 'destroy'])->name('typedetail.delete');


// user Report

Route::get('user/report/index', [UserController::class, 'allUser'])->name('adminsubscription.index');
// Update User Status
Route::put('/users/{id}/update-status', [UserController::class, 'updateStatus'])->name('users.updateStatus');



// Writer Designer Report
Route::get('writer/designer/report', [DesignController::class, 'writerDesignerReport'])->name('writer.designer.report');
Route::get('writer/report/{id?}', [DesignController::class, 'writerReport'])->name('writer.report');
Route::get('designer/report/{id?}', [DesignController::class, 'designerReport'])->name('designer.report');


// Content Creators Cost
Route::get('designer-cost/{id?}', [CostController::class, 'create'])->name('designer.cost');
Route::post('designer-cost-store', [CostController::class, 'store'])->name('designer-cost.store');


// Payment REPORT

Route::get('/paymentReport/index', [ManualPaymentController::class, 'index'])->name('paymentReport.index');
Route::post('/changeStatus', [ManualPaymentController::class, 'changeStatus'])->name('paymentReport.changeStatus');
Route::post('/updateUserPackage', [ManualPaymentController::class, 'updateUserPackage'])->name('updateUserPackage');


// export
Route::get('/export-users', [UserController::class, 'export'])->name('export.users');


// offer slider
Route::get('/offerSlider/index', [OfferSliderController::class, 'index'])->name('offerSlider.index');
Route::get('/offerSlider/create', [OfferSliderController::class, 'create'])->name('offerSlider.create');
Route::post('/offerSlider/store', [OfferSliderController::class, 'store'])->name('offerSlider.store');
// Route::get('/offerSlider/edit/{id?}', [OfferSliderController::class, 'edit'])->name('offerSlider.edit');
// Route::post('/offerSlider/update', [OfferSliderController::class, 'update'])->name('offerSlider.update');
Route::get('/offerSlider/delete/{id?}', [OfferSliderController::class, 'destroy'])->name('offerSlider.delete');


Route::get('/admin/brand/index', [UserController::class, 'brandList'])->name('admin.brand.list');
Route::get('/admin/brand/offer/create/{id?}', [UserController::class, 'brandOfferAdd'])->name('admin.brand.offer.create');
Route::get('/admin/brand/create', [UserController::class, 'addBrand'])->name('admin.brand.create');
Route::post('/admin/brand/store', [UserController::class, 'addBrandCode'])->name('admin.brand.store');
