<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\FlightController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\SeatController;
use App\Models\Flight;
use Illuminate\Http\Request;


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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/index', function () {
//     return view('userSide.index');
// })->name('user.index');

Route::get('/contact',function() {
    return view('userSide.contact');
})->name('user.contact');

Route::POST('/messages', [MessageController::class, 'store'])->name('messages.store');



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
Route::get('/flights/{id}/prices', [FlightController::class, 'getPrices'])->name('flights.prices');


//--------------------- Booking Routes ---------------------
Route::get('/booking/{flightId}/{class}', [BookingController::class, 'showBookingForm'])->name('booking.form');
Route::post('/booking/finalize', [BookingController::class, 'submitBooking'])->name('booking.finalize');
Route::get('/confirmation',  [BookingController::class, 'showConfirmation'])->name('confirmation');




