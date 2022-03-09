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
    public function storecustomer(Request $customerdata)
    {

      $customer = Customers::create([
        "firstname" => $customerdata->{'firstname'},
        "lastname" => $customerdata->{'lastname'},
        "email" => $customerdata->{'email'},
        "cell-number"=>$customerdata->{'cell-number'}
      ]);
      // $customer = new Customers([
      //
      //   $customer->firstname = $customerdata->{'firstname'},
      //   $customer->lastname = $customerdata->{'lastname'},
      //   $customer->email = $customerdata->{'email'},
      //   $customer->cellnumber = $customerdata->{'cell-number'},
      //
      //
      // ]);

        return view ('Customer.view',compact('customer'));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customers  $customers
     * @return \Illuminate\Http\Response
     */
    public function view(Customers $customers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Customers  $customers
     * @return \Illuminate\Http\Response
     */
    public function edit(Customers $customers)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Customers  $customers
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customers)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Customers  $customers
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customers $customers)
    {
        //
    }
}
