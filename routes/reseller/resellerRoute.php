<?php

use App\Http\Controllers\reseller\DashboardController;
use App\Http\Controllers\reseller\ResellerController;
use Illuminate\Support\Facades\Route;



Route::get('reseller/dashboard', [DashboardController::class, 'dashboard'])->name('reseller.dashboard');



/* Admin Side Reseller */

Route::get('reseller/index', [ResellerController::class, 'index'])->name('reseller.index');
Route::get('reseller/create', [ResellerController::class, 'create'])->name('reseller.create');
Route::post('reseller/store', [ResellerController::class, 'store'])->name('reseller.store');
Route::get('reseller/delete/{id?}', [ResellerController::class, 'destroy'])->name('reseller.delete');
Route::get('reseller/edit/{id?}', [ResellerController::class, 'edit'])->name('reseller.edit');
Route::post('reseller/update', [ResellerController::class, 'update'])->name('reseller.update');


// reseller passbook View
Route::get('reseller/passbook', [ResellerController::class, 'passbook'])->name('reseller.passbook');
Route::get('reseller/passbook/code', [ResellerController::class, 'passbookCode'])->name('reseller.passbook.code');
Route::get('reseller/addAmount/{userId}', [ResellerController::class, 'resellerAddAmount'])->name('reseller.addAmount');
Route::post('resellerPackage/store', [ResellerController::class, 'resellerPackageStore'])->name('resellerPackage.store');
Route::get('reseller/payment/status', [ResellerController::class, 'adminPaymentStatus'])->name('reseller.admin.adminPaymentStatus');
Route::put('/reseller/{id}/update-status', [ResellerController::class, 'updateStatus'])->name('reseller.payment.updateStatus');



/* reseller side add user */
Route::get('reseller/user/index', [ResellerController::class, 'userIndex'])->name('reseller.user.index');
Route::get('reseller/user/create', [ResellerController::class, 'userCreate'])->name('reseller.user.create');
Route::post('reseller/user/store', [ResellerController::class, 'userStore'])->name('reseller.user.store');
Route::get('reseller/user/delete/{id?}', [ResellerController::class, 'userdestroy'])->name('reseller.user.delete');
Route::get('reseller/user/edit/{id?}', [ResellerController::class, 'userEdit'])->name('reseller.user.edit');
Route::post('reseller/user/update', [ResellerController::class, 'userUpdate'])->name('reseller.user.update');
