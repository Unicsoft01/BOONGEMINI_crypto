<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ReferralLinks;
use App\Models\ReferredUsers;
use Illuminate\Support\Facades\Auth;


class ReferralsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $username = explode(" ", Auth::User()->name);
        if (count(ReferralLinks::whereUser_id(Auth::User()->id)->get()) > 0)
        {
        //  return "users has ref";
        } else {
        $data['link'] = $username[0].$username[1];
        // return $data;
        $data['user_id'] = Auth::User()->id;
        $save = ReferralLinks::create($data);
        // return $data;
        }
        // // return "Creare and saved";
         return view('users.referal.index');
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // return $id;
        if($linked = ReferralLinks::whereLink($id)->first())
        {
            // return "Ref found";
            // save logged user to refferedUsers table
            $data['refered_user_id'] = Auth::User()->id;
            $data['user_id'] = $linked->user_id;
            $data['has_made_deposit'] = "not yet";
            // return $data;
            $ref = ReferredUsers::create($data);
            if($ref)
            {
                return view('users.index')->with(AlertController::SendAlert('info', 'Welcome, Refer Us to other an earn a commision to!!') );
            }
            // bless link owner
        }
        else
        {
            return "<h1 style='margin:auto;'>This referral link may have been deleted or not found, Please check that is correctly spelt and try again</h1>";
        }

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
