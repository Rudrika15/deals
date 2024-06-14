<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\influencer\DashboardController;
use App\Http\Controllers\influencer\InfluencerController;
use App\Http\Controllers\influencer\InfluencerPackagesController;
use App\Http\Controllers\influencer\InfluencerPortfolioController;
use App\Http\Controllers\influencer\InfluencerStepController;

Route::get('influencer/dashboard', [DashboardController::class, 'dashboard'])->name('influencer.dashboard');



// influencer profile
Route::get('influencer/profile', [InfluencerController::class, 'influencerProfile'])->name('influencer.profile');
Route::get('influencer/edit/{id?}', [InfluencerController::class, 'edit'])->name('influencer.profile.edit');
Route::post('influencer/update', [InfluencerController::class, 'update'])->name('influencer.profile.update');
Route::get('influencer/brands', [InfluencerController::class, 'brands'])->name('influencer.brands');
Route::get('influencer/campaign/{id?}', [InfluencerController::class, 'campaigns'])->name('influencer.campaignView');
Route::post('influencer/campaignApply', [InfluencerController::class, 'campaignApply'])->name('influencer.campaignApply');
Route::get('influencer/campaignApplyList', [InfluencerController::class, 'campaignApplyList'])->name('influencer.campaignApplyList');
Route::get('influencer/appliedPhotoDelete/{id?}', [InfluencerController::class, 'appliedPhotoDelete'])->name('appliedPhotoDelete');

// Applies
Route::get('influencer/campaign/appliersCreate/{campaignId?}/{userId?}', [InfluencerController::class, 'appliersCreate'])->name('brand.campaign.appliersCreate');
Route::post('influencer/campaign/appliersCreateStore', [InfluencerController::class, 'appliersCreateStore'])->name('brand.campaign.appliersCreateStore');

Route::get('influencer/campaign/step/{campaignId?}', [InfluencerStepController::class, 'index'])->name('brand.campaign.campaign.step');
Route::post('influencer/campaign/step', [InfluencerStepController::class, 'store'])->name('influencer.campaign.step.store');

// influencer Portfolio
Route::get('influencer/portfolio', [InfluencerPortfolioController::class, 'index'])->name('influencer.portfolio.index');
Route::get('influencer/portfolio/create', [InfluencerPortfolioController::class, 'create'])->name('influencer.portfolio.create');
Route::post('influencer/portfolio/store', [InfluencerPortfolioController::class, 'store'])->name('influencer.portfolio.store');
Route::get('influencer/portfolio/edit/{id?}', [InfluencerPortfolioController::class, 'edit'])->name('influencer.portfolio.edit');
Route::post('influencer/portfolio/update', [InfluencerPortfolioController::class, 'update'])->name('influencer.portfolio.update');
Route::get('influencer/portfolio/delete/{id?}', [InfluencerPortfolioController::class, 'delete'])->name('influencer.portfolio.delete');

// influencer packages
Route::get('influencer/package/index', [InfluencerPackagesController::class, 'index'])->name('influencer.package.index');
Route::get('influencer/package/create', [InfluencerPackagesController::class, 'create'])->name('influencer.package.create');
Route::post('influencer/package/store', [InfluencerPackagesController::class, 'store'])->name('influencer.package.store');
Route::get('influencer/package/edit/{id?}', [InfluencerPackagesController::class, 'edit'])->name('influencer.package.edit');
Route::post('influencer/package/update', [InfluencerPackagesController::class, 'update'])->name('influencer.package.update');
Route::get('influencer/package/delete/{id?}', [InfluencerPackagesController::class, 'destroy'])->name('influencer.package.delete');
Route::get('influencer/package', [InfluencerPackagesController::class, 'packageView'])->name('influencer.packages');
