<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//Login Page
Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//TicketList
Route::get('/ticketlist', function () {
    return view('ticketlist');
});
//TicketView
Route::get('/ticketview', function () {
    return view('ticketview');
});
//CustomerList
Route::get('/customerlist', function () {
    return view('customerlist');
});
//CustomerView
Route::get('/customerview', function () {
    return view('customerview');
});
