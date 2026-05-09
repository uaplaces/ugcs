<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\IndexController;
use App\Http\Controllers\Front\ArticlesController;
use App\Http\Controllers\Api\AuthController;

Route::get('/', [IndexController::class, 'index'])->name('index');
Route::get('articles', [ArticlesController::class, 'index'])->name('articles.index');

Route::get('logout', [AuthController::class, 'logout'])->name('logout');
