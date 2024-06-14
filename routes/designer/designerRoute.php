<?php

use App\Http\Controllers\designer\DesignController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\designer\DashboardController;

Route::get('designer/dashboard', [DashboardController::class, 'dashboard'])->name('designer.dashboard');
Route::get('designer/create/{id?}/{category?}', [DesignController::class, 'create'])->name('designer.create');
Route::post('designer/store', [DesignController::class, 'store'])->name('designer.store');
Route::get('designer/index', [DesignController::class, 'index'])->name('designer.index');
Route::get('designer/show', [DesignController::class, 'show'])->name('designer.show');
Route::get('designer/edit/{id?}', [DesignController::class, 'edit'])->name('designer.edit');
Route::post('designer/update', [DesignController::class, 'update'])->name('designer.update');
Route::get('designer/delete/{id?}', [DesignController::class, 'delete'])->name('designer.delete');
