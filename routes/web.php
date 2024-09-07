<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\FlightController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\SeatController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PassengerController;
use App\Http\Controllers\AircraftController;
use App\Models\Flight;
use App\Http\Controllers\TicketController;
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



Route::get('/contact',function() {
    return view('userSide.contact');
})->name('user.contact');

Route::POST('/messages', [MessageController::class, 'store'])->name('messages.store');
Route::POST('/messages', [MessageController::class, 'store'])->name('messages.store');



Route::get('/about', [TestimonialController::class, 'about'])->name('user.about');








// --------------------- sign in & sign up --------------------------
Route::get('/login',[SessionController::class,'create'])->name('auth.signin');
Route::post('/login', [SessionController::class, 'store']);
Route::post('/logout', [SessionController::class, 'destroy']);

Route::get('/signup',[RegisteredUserController::class,'create'])->name('auth.signup');
Route::post('/signup', [RegisteredUserController::class, 'store']);


//--------------------- Flight Routes ---------------------
Route::get('/home', [FlightController::class, 'main'])->name('index');
Route::get('/flights/search', [FlightController::class, 'search'])->name('flights.search');
Route::get('/flights/{id}/prices', [FlightController::class, 'getPrices'])->name('flights.prices');


//--------------------- Booking Routes ---------------------
Route::get('/booking/{flightId}/{class}', [BookingController::class, 'showBookingForm'])->name('booking.form');
Route::post('/booking/preview', [BookingController::class, 'preview'])->name('booking.preview');
Route::post('/booking/confirm', [BookingController::class, 'confirm'])->name('booking.confirm');
Route::get('/booking/success', function() {
    return view('booking.success');
})->name('booking.success');



//-------------------- Profile Routes --------------------------
Route::get('/profile',[ProfileController::class,"edit"])->name('profile.edit');
Route::put('/profile',[ProfileController::class,"update"])->name('profile.update');
Route::get('/profile/history',[ProfileController::class,"history"])->name('profile.history');
Route::get('/profile/currentBookings',[ProfileController::class,"currentBookings"])->name('profile.currentBookings');

//---------------- Admin Dashboard ----------------

Route::get('/adminDashboard', function () {
   return view('AdminDashboard/index');
});

//------------ Admin Dashboard - Layouts ------------------
Route::get('/AdminDashboard/layouts/head', function () {
    return view('AdminDashboard/layouts/head');
});

Route::resource('bookings', bookingcontroller::class);
Route::resource('passengers', PassengerController::class);
Route::resource('seats', Seatcontroller::class);
Route::resource('flights', Flightcontroller::class);
Route::resource('aircrafts', aircraftcontroller::class);
