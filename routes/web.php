<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\TicketController;


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
//Auths
Auth::routes();
//Home Page - nav
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Home Page
Route::get('/home', function () {
    return view('home');
});
//Ticket Pages
//GETS

//TicketList
Route::get('/tickets', function () {
    return view('ticket/list',['ticketnumber' => '5256' ]);
});
//TicketView
Route::get('/ticket', function () {
    return view('ticket/view');
});
//TicketCreate/edit
Route::get('/ticketcreate', function () {
    return view('ticket/create');
});

//POST


//Customer Pages
//GETS

//CustomerList
Route::get('/customers',[App\Http\Controllers\CustomerController::class, 'list'])->name('Customer/list');
//Customer Create
Route::get('/customercreate', [App\Http\Controllers\CustomerController::class, 'create'])->name('Customer/create');
//CustomerView
Route::get('/customer', [App\Http\Controllers\CustomerController::class, 'view'])->name('Customer/view');
//POST
Route::post('/storecustomer', [App\Http\Controllers\CustomerController::class, 'storecustomer'])->name('/storecustomer');
