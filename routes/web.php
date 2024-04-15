<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;

use App\Http\Controllers\AdminController;

use App\Http\Controllers\PaymentController;

use App\Http\Controllers\LoginController;

use App\Http\Controllers\BookhisController;

use App\Http\Controllers\BookingController;


use App\Models\Customer;

use App\Models\Bookhistory;

use App\Models\Booking;




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
})->name('home');


    //LOGIN 


Route::get('/signup', [LoginController::class, 'index'])->name('signup');
Route::post('/signup', [LoginController::class, 'signUp']);

Route::post('/login', [LoginController::class, 'login'])->name('login');

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');



Route::get('/profile',[CustomerController::class, 'profile'])->name('profile');


Route::get('/bookhis',[BookhisController::class, 'booking_history'])->name('mybookings');


Route::get('/admenu',[AdminController::class, 'admenu']);

Route::get('/customer',[AdminController::class, 'customer']);

Route::get('/reservation',[AdminController::class, 'reservation']);

Route::get('/table',[AdminController::class, 'table']);

Route::get('/menu',[CustomerController::class,'menu'])->name('menu');



// Route::get('/booktable',[CustomerController::class,'booktable']);

Route::get('/booktable', function () {
    return view('payment_booking.booktable');
});




Route::get('/booking',[BookingController::class,'view']);

Route::post('/booking',[BookingController::class,'booking']);



// Route::get('/booking', function () {
//     return view('payment_booking.booking');
// });





Route::get('/successful',[PaymentController::class,'successful']);


Route::get('/index',[PaymentController::class,'index']);
Route::post('/indexpost',[PaymentController::class,'post']);

Route::get('/indexone',[PaymentController::class,'indexone']);
Route::post('/indexonepost',[PaymentController::class,'postone']);


Route::get('/payment',[PaymentController::class,'view']);
Route::post('/payment',[PaymentController::class,'pay']);