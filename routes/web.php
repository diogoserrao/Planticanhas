<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::post('/contact', [App\Http\Controllers\ContactController::class, 'send'])->name('contact.send');