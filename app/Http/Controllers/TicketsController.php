<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tickets;

class TicketsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        	// id	
    // ticket_id	user_id	status	department	subject	related	priority	attachment	message	created_at	updated_at	
        // return $request;
        $data['ticket_id'] = rand(1000,990000);
        $data['user_id'] = $request->user_id;
        $data['department'] = $request->department;
        $data['subject'] = $request->subject;
        $data['related'] = $request->related;
        $data['priority'] = $request->priority;
        $data['attachment'] = $request->attachment;
        $data['message'] = $request->message;
        // return $data;
        if (Tickets::create($data)) {
            return back()->with(AlertController::SendAlert());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
