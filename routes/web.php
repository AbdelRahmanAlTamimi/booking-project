<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\FligthsController;

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





Route::get("/flights",[FlightsController::class,'search']);


// --------------------- sign in & sign up --------------------------
Route::get('/login',[SessionController::class,'create'])->name('auth.signin');
Route::post('/login', [SessionController::class, 'store']);
Route::post('/logout', [SessionController::class, 'destroy']);

Route::get('/signup',[RegisteredUserController::class,'create'])->name('auth.signup');
Route::post('/signup', [RegisteredUserController::class, 'store']);
