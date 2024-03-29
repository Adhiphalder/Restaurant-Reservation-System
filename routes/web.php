<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;

use App\Http\Controllers\AdminController;

use App\Http\Controllers\PaymentController;




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


Route::get('/profile',[CustomerController::class, 'profile']);

Route::get('/bookhis',[CustomerController::class, 'booking_history']);


Route::get('/admenu',[AdminController::class, 'admenu']);

Route::get('/customer',[AdminController::class, 'customer']);

Route::get('/reservation',[AdminController::class, 'reservation']);

Route::get('/table',[AdminController::class, 'table']);

Route::get('/menu',[CustomerController::class,'menu']);

Route::get('/booking',[CustomerController::class,'booking']);

Route::get('/booktable',[CustomerController::class,'booktable']);

// Payment

Route::get('/payment',[PaymentController::class,'payment']);

