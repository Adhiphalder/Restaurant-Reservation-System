<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\booking;
use App\Http\Controllers\mriganka;




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

Route::get('/login', function () {
    return view('login');
});

Route::get('/customer', function () {
    return view('Admin.customer');
});

Route::get('/admenu', function () {
    return view('Admin.admenu');
});

Route::get('/reservation', function () {
    return view('Admin.reservation');
});

Route::get('/table', function () {
    return view('Admin.table');
});

Route::get('/pay', function () {
    return view('payment_booking.payment');
});

Route::get('/profile', function () {
    return view('profile.profile');
});

Route::get('/bookhis', function () {
    return view('profile.booking_history');
});

Route::get('/booking',[booking::class, 'booking']);

Route::get('/menu', mriganka::class);