<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\HomepageController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\ProjectsController;
use App\Http\Controllers\Admin\SettingsController;
use App\Http\Controllers\Admin\VideosController;
use App\Http\Controllers\Website\ContactController;
use App\Http\Controllers\Website\HomepageController as WebsiteHomepageController;
use App\Http\Controllers\Website\LanguageController;
use App\Http\Controllers\Website\NewsController as WebsiteNewsController;
use App\Http\Controllers\Website\ProjectsController as WebsiteProjectsController;
use App\Http\Middleware\LoadAdminVariables;
use App\Http\Middleware\LoadWebsiteVariables;
use App\Http\Middleware\SetLocale;
use Illuminate\Support\Facades\Route;

Route::name('website.')->middleware([LoadWebsiteVariables::class, SetLocale::class])->group(function () {
    Route::get('/', [WebsiteHomepageController::class, 'index'])->name('homepage');
    Route::get('/news', [WebsiteNewsController::class, 'index'])->name('news');
    Route::get('/news/{articleSlug}', [WebsiteNewsController::class, 'article'])->name('article');
    Route::get('/project/{projectSlug}', [WebsiteProjectsController::class, 'project'])->name('project');
    Route::post('/contact', [ContactController::class, 'sendContactForm'])->name('contact.send');
    Route::get('lang/{lang}', [LanguageController::class, 'switchLang'])->name('lang.switch');
});

Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [AuthController::class, 'login'])->name('login.post');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::name('admin.')->prefix('admin')->middleware(['auth', LoadAdminVariables::class])->group(function () {

    Route::redirect('/', '/admin/homepage');

    Route::name('homepage.')->prefix('homepage')->group(function () {
        Route::get('/', [HomepageController::class, 'index'])->name('index');
        Route::post('/', [HomepageController::class, 'update'])->name('update');
    });

    Route::name('projects.')->prefix('projects')->group(function () {
        Route::get('/', [ProjectsController::class, 'index'])->name('index');
        Route::get('/add', [ProjectsController::class, 'create'])->name('create');
        Route::post('/add', [ProjectsController::class, 'store'])->name('store');
        Route::get('/{project}', [ProjectsController::class, 'edit'])->name('edit');
        Route::post('/{project}', [ProjectsController::class, 'update'])->name('update');
        Route::get('/{project}/delete', [ProjectsController::class, 'destroy'])->name('destroy');
        Route::get('/{project}/images/{mediaId}/delete', [ProjectsController::class, 'destroyPhoto'])->name('images.destroy');
    });

    Route::name('news.')->prefix('news')->group(function () {
        Route::get('/', [NewsController::class, 'index'])->name('index');
        Route::get('/add', [NewsController::class, 'create'])->name('create');
        Route::post('/add', [NewsController::class, 'store'])->name('store');
        Route::get('/{article}', [NewsController::class, 'edit'])->name('edit');
        Route::post('/{article}', [NewsController::class, 'update'])->name('update');
        Route::get('/{article}/delete', [NewsController::class, 'destroy'])->name('destroy');
    });

    Route::name('videos.')->prefix('videos')->group(function () {
        Route::get('/', [VideosController::class, 'index'])->name('index');
        Route::post('/', [VideosController::class, 'store'])->name('store');
        Route::get('/{video}/delete', [VideosController::class, 'destroy'])->name('destroy');
    });

    Route::name('settings.')->prefix('settings')->group(function () {
        Route::get('/', [SettingsController::class, 'index'])->name('index');
        Route::post('/', [SettingsController::class, 'update'])->name('update');
    });
});
