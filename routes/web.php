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
//Home Page - nav
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Home Page
Route::get('/home', function () {
    return view('home');
});
//TicketList
Route::get('/tickets', function () {

            //!$ticketdata = array('ticketnumber' => $ticketnumber,
                            //'subject' => $ticketsubect,
                            //'ticketcreation' => $createdon,
                            //'customername' => $customername,
                            //'ticketuser' => $assingnedto,
                            //'state' => $State);


    return view('ticketlist',);
});
//TicketView
Route::get('/ticket', function () {
    return view('ticketview');
});
//TicketCreate/edit
Route::get('/ticketcreate', function () {
    return view('ticketcreate');
});
//CustomerList
Route::get('/customers', function () {
    return view('customerlist');
});
//Customer Create
Route::get('/customercreate', function () {
    return view('customercreate');
});
//CustomerView
Route::get('/customer', function () {
    return view('customerview');
});
