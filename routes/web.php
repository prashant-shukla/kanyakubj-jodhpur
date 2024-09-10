<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Qirolab\Theme\Middleware\ThemeMiddleware;

Route::get('/register', function () {
    return view('welcome');
});

Route::get('/registration-success', function () {
    return view('registration-success');
});

Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);
Route::get('/events', function () {
    return view('events');
});