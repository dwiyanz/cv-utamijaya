<?php

use Illuminate\Support\Facades\Route;

// routes/web.php
Route::get('/', [App\Http\Controllers\LandingPageController::class, 'index']);

Route::get('/login-level', function () {
    return view('login-level');
})->name('login-level');

