<?php

namespace App\Http\Controllers;

use App\Models\Customers;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list()
    {
        $customers = Customers::all();

        return view ('Customer.list',compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('Customer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storecustomer(Request $request)
    {
      //dd($request);

      return Customers::create([

      'firstname' => $request['firstname'],
      'lastname' => $request['lastname'],
      'email' => $request['email'],
      'cell-number' => $request['cell-number'],

      ]);

        return redirect ('/customers');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customers  $customer
     * @return \Illuminate\Http\Response
     */
    public function view(Customers $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Customers  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customers $customer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Customers  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Customers  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customers $customer)
    {
        //
    }
}
