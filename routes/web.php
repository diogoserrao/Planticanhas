<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminAuthController; // Removido o Auth\
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;

// Site Routes
Route::get('/', function () {
    return view('index');
});

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
Route::resource('banners', BannerController::class);


Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');

// Authentication Routes (sem prefixo admin)
Route::get('/login', [AdminAuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AdminAuthController::class, 'login']);
Route::post('/logout', [AdminAuthController::class, 'logout'])->name('logout');

// Protected Routes (sem prefixo admin)
Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('dashboard');
    Route::resource('products', ProductController::class); // Gera admin.products.index
    Route::resource('banners', BannerController::class);  // Gera admin.banners.index
});

