<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\HomePostController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\ResumeController;
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\ServicesController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PortfolioController;

// Public routes
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/home', [HomeController::class, 'home']);
Route::get('/about', [HomeController::class, 'about']);
Route::get('/resume', [HomeController::class, 'resume']);
Route::get('/portfolio', [HomeController::class, 'portfolio']);
Route::get('/services', [HomeController::class, 'services']);
Route::get('/contact', [HomeController::class, 'contact']);
Route::post('/contact', [HomeController::class, 'contactPost']);

// Authentication routes
Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('admin_login', [AuthController::class, 'admin_login']);
Route::get('forgot', [AuthController::class, 'forgot'])->name('forgot');
Route::post('forgot_admin', [AuthController::class, 'forgot_admin']);
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

// Admin routes
Route::middleware('admin')->prefix('admin')->name('admin.')->group(function () {
    Route::get('dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::get('home', [DashboardController::class, 'admin_home'])->name('home');
    Route::get('about', [DashboardController::class, 'admin_about'])->name('about');
    Route::get('resume', [DashboardController::class, 'admin_resume'])->name('resume');
    Route::get('portfolio', [DashboardController::class, 'admin_portfolio'])->name('portfolio');
    Route::get('services', [DashboardController::class, 'admin_services'])->name('services');

    Route::get('contact', [DashboardController::class, 'admin_contact'])->name('contact');
    Route::get('contact/delete/{id}', [DashboardController::class, 'admin_contact_delete'])->name('contact.delete');

    Route::get('admin/home', [HomePostController::class, 'admin_home'])->name('admin.home');
    Route::post('admin/home', [HomePostController::class, 'store']);

    // Resource routes for admin
    Route::prefix('admin')->name('admin.')->group(function () {
        Route::resource('resumes', ResumeController::class);
        Route::resource('portfolios', PortfolioController::class);
        Route::resource('services', ServicesController::class);
        Route::resource('about', AboutController::class);

    });
});