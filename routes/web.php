<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\User\LandingPageController;
use App\Http\Controllers\User\BookController;
use App\Http\Controllers\User\UserProfileController;
use App\Http\Controllers\User\AboutUsController;
use App\Http\Controllers\Admin\AdminUserController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ReservationController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Public Pages
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/book', [HomeController::class, 'book'])->name('book');

// Authentication Routes (Laravel UI)
Auth::routes();

// Profile Route for Logged In Users
Route::middleware('auth')->group(function () {
    Route::get('/profile', [UserProfileController::class, 'index'])->name('profile');
});
Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Admin Routes (with Middleware Protection)
Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::resource('reservations', ReservationController::class);
    Route::resource('users', AdminUserController::class);
    Route::get('/profile', [UserProfileController::class, 'adminProfile'])->name('admin.profile');
});

