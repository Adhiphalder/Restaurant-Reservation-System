<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CustomerController;

use App\Http\Controllers\AdminController;

use App\Http\Controllers\PaymentController;

use App\Http\Controllers\LoginController;

use App\Http\Controllers\BookhisController;

use App\Http\Controllers\PayhisController;

use App\Http\Controllers\BookingController;

use App\Http\Controllers\MenuController;

use App\Models\Customer;

use App\Models\Table;

use App\Models\Bookhistory;

use App\Models\Booking;

use App\Models\Payment;

use App\Models\Review;

use App\Models\Admin;




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
    // return view('welcome');

    $reviews = Review::with('customer')->get(); 
    return view('welcome', compact('reviews'));
})->name('home');

/*---------------------------------*\
  #LOGIN & SIGNUP
\*---------------------------------*/



Route::get('/signup', [LoginController::class, 'index'])->name('signup');

Route::post('/signup', [LoginController::class, 'signUp']);

Route::post('/login', [LoginController::class, 'login'])->name('login');

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/forgot',[LoginController::class,'viewforgot']);

Route::post('/reset-password', [LoginController::class, 'resetPassword'])->name('reset.password');

/*---------------------------------------------*\
  #PROFILE & MYBOOKINGS
\*---------------------------------------------*/



Route::get('/profile',[CustomerController::class, 'profile'])->name('profile');

Route::get('/bookhis',[BookhisController::class, 'booking_history'])->name('mybookings');

Route::get('/paymenthis',[PayhisController::class, 'payment_history'])->name('mypayments');


/*---------------*\
  #ADMIN
\*----------------*/


// Route::get('/admin/menu',[AdminController::class, 'admenu'])->name('admin.menu');

Route::get('admin/login',[AdminController::class, 'showLoginForm'])->name('admin.login');

Route::post('admin/login', [AdminController::class, 'login']);

Route::get('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');

Route::get('/admin/customer',[AdminController::class, 'customer'])->name('admin.customer');

Route::get('admin/addmenu',[AdminController::class,'view']);

Route::post('admin/menu',[AdminController::class,'show'])->name('admin.menu');

Route::get('/admin/menu',[AdminController::class, 'viewmenu'])->name('admin.menu');

Route::get('/admin/addtable',[AdminController::class,'viewaddtable'])->name('admin.addtable');

Route::get('/admin/reservation',[AdminController::class, 'reservation'])->name('admin.reservation');

Route::post('/admin/addtable',[AdminController::class,'addtable'])->name('admin.addtable');

Route::get('/admin/table',[AdminController::class, 'viewtable'])->name('admin.table');

Route::get('/admin/bookcancle',[AdminController::class,'viewbookcancle'])->name('admin.bookcancel');

Route::post('/deny/booking/cancel/{id}', [AdminController::class, 'denycancelBooking'])->name('deny.cancel.booking');

Route::post('/approve/booking/cancel/{id}', [AdminController::class, 'approvecancelBooking'])->name('approve.cancel.booking');


/*----------------*\
  #MENU
\*---------------*/


Route::get('/menu',[AdminController::class,'menuview']);


/*-------------------*\
  #BOOKING
\*------------------*/



Route::get('/booking',[BookingController::class,'view'])->name('booking');

Route::post('/booking',[BookingController::class,'booking'])->name('booking');

Route::get('/booktable',[BookingController::class,'table_view'])->name('booktable');

// Route::post('/booktable',[BookingController::class,'storetable'])->name('booktable.store');

Route::post('booktable/store', [BookingController::class, 'storetable'])->name('booktable.store');

Route::post('/booking/cancel/{id}', [BookingController::class, 'cancelBooking'])->name('cancel.booking');


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

/*-------------------*\
  #POPUP
\*------------------*/

Route::get('/popup', function () {
  return view('popup');
});
