<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\DashboardAdmin;
use App\Http\Controllers\DashboardController;

// route tampil halaman login & register
Route::get('/login', function () {
    return view('auth.login', ['title' => 'Login']);
});

Route::get('/register', function () {
    return view('auth.register', ['title' => 'Register']);
});

// proses authentication
Route::post('/login/authentication', [AuthenticationController::class, 'login_function']);
Route::post('/register/check-email', [AuthenticationController::class, 'check_email_ajax']);
Route::post('/register/store', [AuthenticationController::class, 'register_function']);
Route::post('/logout', [AuthenticationController::class, 'logout'])->name('logout');

Route::middleware(['usersession:1'])->group(function () {
    Route::get('/dashboard-admin', [DashboardAdmin::class, 'index']);
});

Route::middleware(['usersession:3'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index']);
});
