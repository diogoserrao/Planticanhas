<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminAuthController; // Removido o Auth\
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\ContactController;

// Site Routes
Route::get('/', function () {
    return view('index');
});

Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');

// Authentication Routes (sem prefixo admin)
Route::get('/login', [AdminAuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AdminAuthController::class, 'login']);
Route::post('/logout', [AdminAuthController::class, 'logout'])->name('logout');

// Protected Routes (sem prefixo admin)
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
    
    // Products Routes
    Route::resource('products', ProductController::class);
    
    // Banners Routes
    Route::resource('banners', BannerController::class);
});


#Route::get('/cafe', function () {
 #   return view('cafe');
#});