<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AchieverController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TributeController;
use Illuminate\Support\Facades\Route;
use Qirolab\Theme\Middleware\ThemeMiddleware;

Route::get('/change-language', function () {
    return view('welcome');
});
Route::get('/change-language', [HomeController::class, 'changeLanguage'])->name('change.language');

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
Route::get('/members-detail/{id}', [MemberController::class, 'members_detail']);
Route::get('/members-details', [MemberController::class, 'members_details']);
Route::get('/gallery',[GalleryController::class,'index']);
Route::get('/achievers', [AchieverController::class,'index']);
Route::get('/tribute', [TributeController::class,'index']);
Route::post('/tribute', [TributeController::class, 'store']);
Route::get('/contact', [ContactController::class,'index']);
Route::post('/contact', [ContactController::class, 'store']);
Route::get('/download', [HomeController::class, 'DocumentCategorys']);
Route::get('/download/{slug}', [HomeController::class, 'document']);
Route::get('/documents/{id}/download', [HomeController::class, 'download'])->name('documents.download');
Route::get('/documents/{id}', [HomeController::class, 'show'])->name('documents.view');
