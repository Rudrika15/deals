<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\writer\DashboardController;
use App\Http\Controllers\writer\WriterController;
use App\Http\Controllers\writer\WriterdController;

Route::get('writer/dashboard', [DashboardController::class, 'dashboard'])->name('writer.dashboard');
Route::get('writer/create', [WriterController::class, 'create'])->name('writer.slugs.create');
Route::post('writer/store', [WriterController::class, 'store'])->name('writer.slugs.store');
Route::get('writer/index', [WriterController::class, 'index'])->name('writer.slugs.index');
Route::get('writer/edit/{id?}', [WriterController::class, 'edit'])->name('writer.slugs.edit');
Route::post('writer/update', [WriterController::class, 'update'])->name('writer.slugs.update');
Route::get('writer/delete/{id?}', [WriterController::class, 'delete'])->name('writer.slugs.delete');
