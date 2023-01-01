<?php

namespace App\Http\Controllers;

use App\Models\UserBank;
use Illuminate\Http\Request;

class UserBankController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('users.bank.index');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserBank  $userBank
     * @return \Illuminate\Http\Response
     */
    public function show(UserBank $userBank)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserBank  $userBank
     * @return \Illuminate\Http\Response
     */
    public function edit(UserBank $userBank)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UserBank  $userBank
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserBank $userBank)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserBank  $userBank
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserBank $userBank)
    {
        //
    }
}
