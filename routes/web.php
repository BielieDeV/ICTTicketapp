<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\TicketController;

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
Route::get('/tickets', [App\Http\Controllers\TicketController::class, 'list'])->name('ticket/list');
//TicketView
Route::get('/ticket/{id}', [App\Http\Controllers\TicketController::class, 'show'])->name('ticket/view');
//TicketCreate/edit View
Route::get('/ticketcreate', [App\Http\Controllers\TicketController::class, 'create'])->name('ticket/create');
//POST
//Create Ticket
Route::post('/ticket.save', [App\Http\Controllers\TicketController::class, 'storeticket'])->name('ticket.save');
//Update Tickets
Route::post('/ticket.update', [App\Http\Controllers\TicketController::class, 'update'])->name('ticket.update');

//Customer Pages
//GETS
//CustomerList
Route::get('/customers',[App\Http\Controllers\CustomerController::class, 'list'])->name('Customer.list');
//Customer Create
Route::get('/customercreate', [App\Http\Controllers\CustomerController::class, 'create'])->name('Customer/create');
//CustomerView
Route::get('/customer', [App\Http\Controllers\CustomerController::class, 'view'])->name('Customer/view');
Route::get('/customer/{id}', [App\Http\Controllers\CustomerController::class, 'show'])->name('Customer.show');
//POST
//Update Customer
Route::post('/customer/update',[App\Http\Controllers\CustomerController::class, 'updatecustomer'])->name('Customer.update');
//Delete Customer
Route::post('/customer/delete',[App\Http\Controllers\CustomerController::class, 'destroy'])->name('Customer.delete');
//Create Customer page
Route::post('/customer.save',[App\Http\Controllers\CustomerController::class, 'storecustomer'])->name('Customer.save');
