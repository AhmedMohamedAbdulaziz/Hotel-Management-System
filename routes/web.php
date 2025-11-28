<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('dashboard_new');
})->name('dashboard');

// Customer routes
Route::resource('customers', App\Http\Controllers\CustomerController::class);

// Room routes
Route::resource('rooms', App\Http\Controllers\RoomController::class);

// Employee routes
Route::resource('employees', App\Http\Controllers\EmployeeController::class);

// Room Type routes
Route::resource('room_types', App\Http\Controllers\RoomTypeController::class);

// Service routes
Route::resource('services', App\Http\Controllers\ServiceController::class);

// Reservation routes
Route::resource('reservations', App\Http\Controllers\ReservationController::class);
