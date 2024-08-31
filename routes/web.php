<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AdminProfileController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::POST('/messages', [App\Http\Controllers\MessageController::class, 'store'])->name('messages.store');

Auth::routes();


Route::get('admin/profile/{id}', [AdminProfileController::class, 'show'])->name('admin.profile.show');
Route::post('admin/profile/{id}', [AdminProfileController::class, 'update'])->name('admin.profile.update');