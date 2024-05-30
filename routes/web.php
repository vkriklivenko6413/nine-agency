<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\HomepageController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'website.home');
Route::view('/news', 'website.news');
Route::view('/article', 'website.article');
Route::view('/project', 'website.project');

Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [AuthController::class, 'login'])->name('login.post');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::name('admin.')->prefix('admin')->middleware('auth')->group(function () {
    Route::get('/', [HomepageController::class, 'index'])->name('homepage.index');
    Route::post('/', [HomepageController::class, 'update'])->name('homepage.update');
});
