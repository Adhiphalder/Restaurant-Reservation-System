<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CustomerController;

use App\Http\Controllers\AdminController;

use App\Http\Controllers\PaymentController;

use App\Http\Controllers\LoginController;

use App\Http\Controllers\BookhisController;

use App\Http\Controllers\BookingController;

use App\Http\Controllers\MenuController;

use App\Models\Customer;

use App\Models\Bookhistory;

use App\Models\Booking;

use App\Models\Payment;

use App\Models\Review;




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

/*---------------------------------*\
  #LOGIN & SIGNUP
\*---------------------------------*/



Route::get('/signup', [LoginController::class, 'index'])->name('signup');

Route::post('/signup', [LoginController::class, 'signUp']);

Route::post('/login', [LoginController::class, 'login'])->name('login');

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

/*---------------------------------------------*\
  #PROFILE & MYBOOKINGS
\*---------------------------------------------*/



Route::get('/profile',[CustomerController::class, 'profile'])->name('profile');

Route::get('/bookhis',[BookhisController::class, 'booking_history'])->name('mybookings');


/*---------------*\
  #ADMIN
\*----------------*/


// Route::get('/admin/menu',[AdminController::class, 'admenu'])->name('admin.menu');

Route::get('/admin/customer',[AdminController::class, 'customer'])->name('admin.customer');

Route::get('/admin/reservation',[AdminController::class, 'reservation'])->name('admin.reservation');

Route::get('/admin/table',[AdminController::class, 'table'])->name('admin.table');

/*----------------*\
  #MENU
\*---------------*/


Route::get('/menu',[MenuController::class,'menuview']);

Route::get('/addmenu',[MenuController::class,'view']);

Route::get('/admin/menu',[MenuController::class, 'viewmenu']);

Route::post('/addmenu',[MenuController::class,'show']);


/*-------------------*\
  #BOOKING
\*------------------*/



Route::get('/booking',[BookingController::class,'view'])->name('booking');

Route::post('/booking',[BookingController::class,'booking'])->name('booking');

Route::get('/booktable',[BookingController::class,'table_view']);

/*-------------------*\
  #PAYMENT
\*------------------*/


Route::get('/payment',[PaymentController::class,'view'])->name('payment');

Route::post('/payment',[PaymentController::class,'payment']);

Route::get('/pay/successful',[PaymentController::class,'pay_successful'])->name('pay_successful');

/*-------------------*\
  #REVIEW
\*------------------*/

Route::post('/pay/successful',[PaymentController::class,'review']);