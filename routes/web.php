<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\Ticketscontroller;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\FlightController;

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
    return view('index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//====Admin Dashboard====

Route::get('/adminDashboard', [AdminDashboardController::class , 'cardsShow'])->name('adminDashboard');

//====Admin Dashboard - Layouts====
Route::get('/AdminDashboard/layouts/head', function () {
    return view('AdminDashboard/layouts/head');
});



/// Route::get('/', function () {
//     return view('welcome');
// });
 Route::get('/index', function () {
     return view('userSide.index');
 })->name('user.index');

    Route::get('/contact',function() {
        return view('userSide.contact');
    })->name('user.contact');
    Route::POST('/messages', [MessageController::class, 'store'])->name('messages.store');

// Route::get('/about',function() {
//     return view('userSide.about');
// })->name('user.about');

    Route::get('/about', [TestimonialController::class, 'about'])->name('user.about');





// --------------------- sign in & sign up --------------------------
Route::get('/login',[SessionController::class,'create'])->name('auth.signin');
Route::post('/login', [SessionController::class, 'store']);
Route::post('/logout', [SessionController::class, 'destroy']);

Route::get('/signup',[RegisteredUserController::class,'create'])->name('auth.signup');
Route::post('/signup', [RegisteredUserController::class, 'store']);


//--------------------- Flight Routes ---------------------
Route::get('/flights', [FlightController::class, 'index'])->name('flights.index');
Route::get('/flights/search', [FlightController::class, 'search'])->name('flights.search');
Route::get('/flights/{flight}', [FlightController::class, 'show'])->name('flights.show');

//--------------------- Booking Routes ---------------------
Route::get('/bookings', [BookingController::class, 'index'])->name('bookings.index');
Route::get('/bookings/create', [BookingController::class, 'create'])->name('bookings.create');
Route::post('/bookings', [BookingController::class, 'store'])->name('bookings.store');
Route::get('/bookings/{booking}', [BookingController::class, 'show'])->name('bookings.show');
Route::delete('/bookings/{booking}', [BookingController::class, 'destroy'])->name('bookings.destroy');
