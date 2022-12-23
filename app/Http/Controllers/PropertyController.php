<?php

namespace App\Http\Controllers;

use App\Models\Properties;
use Illuminate\Http\Request;

class PropertyController extends Controller
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
        
// {{-- ng('user');
//     ng('subject');
//     ng('email');
//     ng('property_name
//     ng('location');
//     ng('description')
//     ng('image');
//     stamps(); 
    
        // return $request;
        $data['user'] = $request->name;
        $data['subject'] = $request->subject;
        $data['email'] = $request->email;
        $data['property_name'] = $request->property_name;
        $data['location'] = $request->location;
        $data['description'] = $request->description;

        $image = "property_tokenize".time().'.'.$request->image->extension();  
         
        $request->image->move(public_path('properties/submitted'), $image);


        $data['image'] = $image;

        if(Properties::create($data))
        {
            $user_mail_msg =
                [
                    'user' => $request->name,
                    'recipient' => $request->email,
                    'fromEmail' => "Support@boongemini.com",
                    
                    'subject' => "Your request has been recieved and is been proceessed!",
                    'body' => "Hey Dear $request->name, Thank you for submitting the property $request->property_name., we will get back to you soon.",
                ];

                \Mail::send('email', $user_mail_msg, function($message) use ($user_mail_msg){
                    $message->to($user_mail_msg['recipient'])->from($user_mail_msg['fromEmail'])->subject($user_mail_msg['subject']);
                });
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
