<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\IndexController;

Route::get('/', [IndexController::class, 'index']);
