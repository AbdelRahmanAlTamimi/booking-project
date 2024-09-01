<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Ticketscontroller;
use App\Http\Controllers\UsersController;

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
Route::resource('tickets', Ticketscontroller::class);

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//====Admin Dashboard====

Route::get('/adminDashboard', function () {
   return view('AdminDashboard/index');
});

//====Admin Dashboard - Layouts====
Route::get('/AdminDashboard/layouts/head', function () {
    return view('AdminDashboard/layouts/head');
});
Route::get('/users',[UsersController::class,"index"])->name('users.index');
Route::get('/users/create',[UsersController::class,"create"])->name('users.create');
Route::post('/users',[UsersController::class,"store"])->name('users.store');
Route::get('/users/{user}',[UsersController::class,"show"])->name('users.show');
Route::get('/users/{user}/edit',[UsersController::class,"edit"])->name('users.edit');
Route::put('/users/{user}',[UsersController::class,"update"])->name('users.update');
Route::delete('/users/{user}',[UsersController::class,"destroy"])->name('users.destroy');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
