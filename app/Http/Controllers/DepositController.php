<?php

namespace App\Http\Controllers;

use App\Models\Deposits;
use App\Models\Roi;
use App\Models\Plans;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AlertController;
use App\Http\Controllers\RoiController;
use App\Http\Controllers\WithdrawalController;

class DepositController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('users.deposit.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.deposit.all');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request;
        $trans_id = $data['trans_id']  = rand(1234,9876);
        $data['plan_id']  = $request->plan;
        $data['user_id']  = Auth::user()->id;
        $data['amount']  = $request->amount;
        $data['evidence']  = "waiting";
        $data['status']  = "waiting";
        // return $data;

        if(Deposits::create($data)){
            return redirect()->route('Deposit.comfirmation', $trans_id);
        }
        // return $data;
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

        $rio = (new RoiController)->store($request, $id);
        $withdraw = (new WithdrawalController)->store($request, $id);
        // return $rio;
        $comfirmed = Deposits::whereId($id)->first();
        $comfirmed->status = "verified";
        $res = $comfirmed->save();
        // return $comfirmed;
        if ($res && $rio && $withdraw) {
            # code...
            return back()->with(AlertController::SendAlert());
        }
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
    public function comfirmation ($id)
    {
        $deposit = Deposits::whereTrans_id($id)->get();
        $plan = Plans::whereId($deposit[0]->plan_id)->get();
// return $plan;
        return view('users.deposit.comfirmation',compact('plan','deposit'));
    }

    public function completeTrans (Request $request, $id)
    {
        // return $id;
        // return $request;
        $deposit = Deposits::whereTrans_id($id)->first();
        $plan = Plans::whereId($deposit->plan_id)->get();
        
        // process evidence

        $evidence = "Evidence_Deposit_".$id.'.'.$request->evidence->extension();  
        $request->evidence->move(public_path('User_deposits'), $evidence);
        // save evidence
        $deposit->evidence = $evidence;
        $deposit->status = "pending";
        // return $deposit->evidence;

        $res = $deposit->save();      
        // if ($res) 
        // {

         $user_mail_msg =
                [
                    'user' => Auth::User()->name,
                    'recipient' => Auth::User()->email,
                    'fromEmail' => "Support@boongemini.com",
                    'transaction_id' => $deposit->trans_id,
                    'plan' => $plan[0]->name,
                    'Amount' => number_format($deposit->amount),
                    
                    'subject' => "Your request has been recieved and is been proceessed!",
                    'body' => "Hey Dear, Thank you for choosing one of our hot trending plan. you can proceed to the Deposit Page to upload your evidence of payment, we will automatically update your account once we comfirm the payment.",
                ];

                \Mail::send('emails.plan_email', $user_mail_msg, function($message) use ($user_mail_msg){
                    $message->to($user_mail_msg['recipient'])->from($user_mail_msg['fromEmail'])->subject($user_mail_msg['subject']);
                });
            return view('users.deposit.all')->with(AlertController::SendAlert());
        // }
// return $plan;
        // return view('users.deposit.comfirmation',compact('plan','deposit'));
    }

    public function UserDepo()
    {
        return view('admin.deposits.index');
    }

}
