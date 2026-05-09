<?php

use App\Http\Controllers\Api\AuthController;

Route::post('auth/signup', [AuthController::class, 'signup'])->name('auth.signup');
Route::post('auth/login', [AuthController::class, 'login'])->name('auth.login');
Route::get('auth/logout', [AuthController::class, 'logout'])->name('auth.logout');
