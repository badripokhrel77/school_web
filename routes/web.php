<?php

use App\Http\Controllers\Admin\AddmessageController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\NoticeController;
use App\Http\Controllers\Admin\TeamController;

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\NoticesectionController;
use Illuminate\Support\Facades\Route;

//Frontend

Route::get('/', [FrontendController::class, 'index']);
Route::get('/home', [FrontendController::class, 'home']);
Route::get('/about', [FrontendController::class, 'about']);
Route::get('/contact', [FrontendController::class, 'contact']);
Route::get('/courses', [FrontendController::class, 'courses']);
Route::get('/team', [FrontendController::class, 'team']);
Route::get('/testimonial', [FrontendController::class, 'testimonial']);
// Route::get('/notice', [FrontendController::class, 'notice']);

Route::get('/notice',[NoticesectionController::class,'index']);
Route::get('notice/{id}',[NoticesectionController::class,'view']);

Route::get('/message',[MessageController::class,'index']);
Route::get('message/{id}',[MessageController::class,'view']);


//Admin
Route::prefix('admin')->middleware('admin')->group(function () {

    Route::get('/', [AdminController::class, 'index'])->name('admin.dashboard');

    Route::resource('team', TeamController::class);
    Route::resource('notice', NoticeController::class);
    Route::resource('message', AddmessageController::class);
});


Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');
