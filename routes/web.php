<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;

use App\Http\Controllers\AdminController;

use App\Http\Controllers\PaymentController;

use App\Http\Controllers\LoginController;

use App\Models\Customer;





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

//LOGIN 

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);



Route::get('/profile',[CustomerController::class, 'profile']);

Route::get('/bookhis',[CustomerController::class, 'booking_history']);


Route::get('/admenu',[AdminController::class, 'admenu']);

Route::get('/customer',[AdminController::class, 'customer']);

Route::get('/reservation',[AdminController::class, 'reservation']);

Route::get('/table',[AdminController::class, 'table']);

Route::get('/menu',[CustomerController::class,'menu'])->name('menu');

Route::get('/booking',[CustomerController::class,'booking']);

Route::get('/booktable',[CustomerController::class,'booktable']);


Route::get('/payment',[PaymentController::class,'payment']);

