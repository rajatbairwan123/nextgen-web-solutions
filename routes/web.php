<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\PortfolioController;
use App\Http\Controllers\Admin\ContactController as AdminContactController;
use App\Http\Controllers\Admin\SettingController;

// Web site routes 
Route::get('/about', function () {
    return view('about');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/portfolio', [HomeController::class,'portfolio']);

Route::get('/contact', function () {
    return view('contact');
});

Route::post('/contact-submit', [ContactController::class, 'store'])->name('contact.submit');

Route::get('/admin/contacts',[AdminContactController::class,'index']);
Route::get('/admin/contacts/delete/{id}',[AdminContactController::class,'delete']);

// Admin page routes 
Route::get('/', [HomeController::class,'index']);
Route::get('/admin/dashboard', [DashboardController::class,'index']);

// Admin Service routes controller 
Route::get('/admin/services',[ServiceController::class,'index']);
Route::get('/admin/services/create',[ServiceController::class,'create']);
Route::post('/admin/services/store',[ServiceController::class,'store']);
Route::get('/admin/services/edit/{id}',[ServiceController::class,'edit']);
Route::post('/admin/services/update/{id}',[ServiceController::class,'update']);
Route::get('/admin/services/delete/{id}',[ServiceController::class,'delete']);

// Admin Portfolio routes controller 
Route::get('/admin/portfolio',[PortfolioController::class,'index']);
Route::get('/admin/portfolio/create',[PortfolioController::class,'create']);
Route::post('/admin/portfolio/store',[PortfolioController::class,'store']);
Route::get('/admin/portfolio/delete/{id}',[PortfolioController::class,'delete']);



Route::get('/admin/settings',[SettingController::class,'index']);
Route::post('/admin/settings/update',[SettingController::class,'update']);