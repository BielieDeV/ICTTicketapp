<?php

namespace App\Http\Controllers;

use App\Models\Tickets;
use Illuminate\Http\Request;
use App\Models\Customers;
use App\Models\User;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list()
    {
      $customers = Customers::all();

      //$int = 0;
      $tickets = Tickets::all();
      $ticketcount = Tickets::count();
      //$ticketcustomer = Customers::where ('email', '=', $ticket->{'customer'})->first();

      return view ('ticket.list',compact('tickets','ticketcount'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $customers = Customers::all();

        return view('ticket.create',compact('customers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeticket(Request $ticketdata)
    {

        $ticket = Tickets::create([
        "subject" => $ticketdata->{'subject'},
        "customer" => $ticketdata->{'customer'},
        "priority" => $ticketdata->{'priority'},


      ]);
        //$int = 0;
        $tickets = Tickets::all();
        $ticketcount = Tickets::count();
        $ticketcustomer = Customers::where ('email', '=', $ticket->{'customer'})->first();
        //$ticketactive = Tickets::where('status' = 'Active')->count();
        //$ticketclosed = Tickets::where('status' = 'Closed')->count();

        return view ('ticket.list',compact('tickets','ticketcount','ticketcustomer'));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tickets  $tickets
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $ticketinfo = Tickets::where('id','=',$id);

      return view ('ticket.view','ticketinfo');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tickets  $tickets
     * @return \Illuminate\Http\Response
     */
    public function edit(Tickets $tickets)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tickets  $tickets
     * @return \Illuminate\Http\Response
     */
    public function update(Request $ticketdata)
    {
      Tickets::where('id', $ticketdata->{'id'})
      ->update(["firstname" => $ticketdata->{'firstname'},
      "lastname" => $ticketdata->{'lastname'},
      "email" => $ticketdata->{'email'},
      "cellnumber"=> $ticketdata->{'cellnumber'},
      "SLA"=> $ticketdata->{'SLA'},
      "notes"=>$tciketdata->{'comment'}
    ]);

    return view ('home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tickets  $tickets
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tickets $tickets)
    {
        //
    }
}
