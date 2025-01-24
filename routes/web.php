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
use App\Http\Controllers\EventRegistrationController;
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

//Home page 

Route::get('/', [HomeController::class, 'index']);

// About us page 
Route::get('/about', [AboutController::class, 'index']);

// Event page 
Route::get('/events', [EventController::class, 'index']) ;

// members page 
Route::get('/members', [MemberController::class, 'index']);
Route::get('/members-detail/{id}', [MemberController::class, 'members_detail']);
Route::get('/members-details', [MemberController::class, 'members_details']);

//gallery page 
Route::get('/gallery',[GalleryController::class,'index']);

// achievers page 
Route::get('/achievers', [AchieverController::class,'index']);

// Tribute page 
Route::get('/tribute', [TributeController::class,'index']);
Route::post('/tribute', [TributeController::class, 'store']);

// Contact us page 
Route::get('/contact', [ContactController::class,'index']);
Route::post('/contact', [ContactController::class, 'store']);

// download end documents page 
Route::get('/download', [HomeController::class, 'DocumentCategorys'])->name('documents');
Route::get('/download/{slug}', [HomeController::class, 'document']);
Route::get('/documents/{id}/download', [HomeController::class, 'download'])->name('documents.download');
// Route::get('/documents/{id}', [HomeController::class, 'show'])->name('documents.index');


// event register
Route::get('/event/register', [EventRegistrationController::class, 'showForm']);
Route::post('/events', [EventRegistrationController::class, 'storeForm'])->name('event.register');

Route::get('/events', [EventController::class, 'index']) ;