<?php

use Illuminate\Support\Facades\Route;

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
