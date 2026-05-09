<?php

use App\Http\Controllers\Api\AuthController;

Route::post('auth/signup', [AuthController::class, 'signup'])->name('auth.signup');
