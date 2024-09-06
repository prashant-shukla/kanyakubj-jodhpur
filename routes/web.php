<?php

use Illuminate\Support\Facades\Route;
use Qirolab\Theme\Middleware\ThemeMiddleware;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/registration-success', function () {
    return view('registration-success');
});

Route::get('/home', function () {
    return view('index');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/events', function () {
    return view('events');
});