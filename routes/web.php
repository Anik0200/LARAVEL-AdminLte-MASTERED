<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\backend\ProfileController;
use Illuminate\Support\Facades\Route;

route::post('logout', [AuthController::class, 'logout'])->middleware('auth')->name('logout');

Route::group(['middleware' => 'guest'], function () {

    Route::get('login', [AuthController::class, 'login_view'])->name('login');
    Route::post('login', [AuthController::class, 'login'])->name('login');

    Route::get('register', [AuthController::class, 'register_view'])->name('register');
    Route::post('register', [AuthController::class, 'register'])->name('register');

});

Route::group(['middleware' => 'auth', 'admin'], function () {

    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('dashboard/profile', [ProfileController::class, 'profile'])->name('dashboard.profile');
    Route::post('dashboard/profile/update', [ProfileController::class, 'profile_update'])->name('dashboard.profile.update');

});
