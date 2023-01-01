<?php

namespace App\Http\Controllers;

use App\Models\Deposits;
use App\Models\Roi;
use App\Models\Plans;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
// use App\Http\Controllers\AlertController;
// use App\Http\Controllers\RoiController;

class RoiController extends Controller
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
    public function store(Request $request, $id)
    {
        $deposit = Deposits::whereId($id)->first();
        $plan = Plans::whereId($deposit->plan_id)->first();
// deposit 
//  {"id":38,"trans_id":5648,"user_id":"7","plan_id":"4","status":"pending","amount":33218,"evidence":"Evidence_Deposit_5648.jpg","created_at":"2022-12-31T01:31:53.000000Z","updated_at":"2022-12-31T01:32:06.000000Z"}

// plan
// {"id":4,"name":"golden","min":"60","max":"600","roi":"5","perperref":"2","grow":"3","type":"cash","created_at":"2022-12-28T23:13:48.000000Z","updated_at":"2022-12-28T23:13:48.000000Z"}

// 	id	roi	user_id	plan_id	due_days	day	status	payout	created_at	updated_at	

        $data['roi'] = $deposit->amount/100* $plan->roi; // return on investment per day
        $data['user_id'] = $deposit->user_id;
        $data['plan_id'] = $deposit->plan_id;
        $data['due_days'] = $plan->grow;
        $data['day'] = 1;
        $data['status'] = "start"; //due, loading
        $data['payout'] = $data['roi'];

        if(Roi::create($data)){
            return true;
        }
        // return $data;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Roi  $roi
     * @return \Illuminate\Http\Response
     */
    public function show(Roi $roi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Roi  $roi
     * @return \Illuminate\Http\Response
     */
    public function edit(Roi $roi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Roi  $roi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Roi $roi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Roi  $roi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Roi $roi)
    {
        //
    }

}
