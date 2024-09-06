<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Ticketscontroller;
use App\Http\Controllers\PassengerController;
use App\Http\Controllers\Seatscontroller;
use App\Http\Controllers\Flightscontroller;
use App\Http\Controllers\planescontroller;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\AdminDashboardController;

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
Route::resource('passengers', PassengerController::class);
Route::resource('seats', Seatscontroller::class);
Route::resource('flights', Flightscontroller::class);
Route::resource('planes', planescontroller::class);
Route::resource('users', UsersController::class);

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/users/deleted', [UsersController::class, 'showDeleted'])->name('user.deleted');
Route::put('/users/{id}/restore', [UsersController::class, 'restore'])->name('user.restore');
Route::delete('/users/{id}/force-delete', [UsersController::class, 'forceDelete'])->name('user.forceDelete');

//====Admin Dashboard====
Route::get('/statstic', [AdminDashboardController::class , 'cardsShow'])->name('statstic');

Route::get('/adminDashboard', function () {
   return view('AdminDashboard/index');
});

//====Admin Dashboard - Layouts====
Route::get('/AdminDashboard/layouts/head', function () {
    return view('AdminDashboard/layouts/head');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
