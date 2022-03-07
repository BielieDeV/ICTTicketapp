<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;

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
Auth::routes();
//GETS
//
//Home Page - nav
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Home Page
Route::get('/home', function () {
    return view('home');
});
//TicketList
Route::get('/tickets', function () {


    return view('ticket/ticketlist',['ticketnumber' => '5256' ]);
});
//TicketView
Route::get('/ticket', function () {
    return view('ticket/ticketview');
});
//TicketCreate/edit
Route::get('/ticketcreate', function () {
    return view('ticket/ticketcreate');
});
//CustomerList
Route::get('/customers', function () {
    return view('Customer/customerlist');
});
//Customer Create
Route::get('/customercreate', function () {
    return view('Customer/customercreate');
});
//CustomerView
Route::get('/customer', function () {
    return view('Customer//customerview');
});

//POSTS
