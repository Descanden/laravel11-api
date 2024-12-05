<?php

use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route untuk mendapatkan data user yang terautentikasi
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware(Authenticate::using('sanctum'));

// Route API resource untuk mengelola posts
Route::apiResource('/posts', App\Http\Controllers\Api\PostController::class);