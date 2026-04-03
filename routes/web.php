<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\DashboardController;

// Web site routes 
Route::get('/about', function () {
    return view('about');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/portfolio', function () {
    return view('portfolio');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::post('/contact-submit', [ContactController::class, 'store'])->name('contact.submit');

// Admin page routes 
Route::get('/', [HomeController::class,'index']);
Route::get('/admin/dashboard', [DashboardController::class,'index']);

Route::get('/admin/services',[ServiceController::class,'index']);
Route::get('/admin/services/create',[ServiceController::class,'create']);
Route::post('/admin/services/store',[ServiceController::class,'store']);
Route::get('/admin/services/edit/{id}',[ServiceController::class,'edit']);
Route::post('/admin/services/update/{id}',[ServiceController::class,'update']);
Route::get('/admin/services/delete/{id}',[ServiceController::class,'delete']);