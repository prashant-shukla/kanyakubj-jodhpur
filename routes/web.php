<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\MemberController;
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
Route::get('/events', [EventController::class, 'index']);
Route::get('/members', [MemberController::class, 'index']);
Route::get('/gallery',[GalleryController::class,'index']);

