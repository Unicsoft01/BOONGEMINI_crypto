<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.review.index');
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
        // return $request;
        $data['name'] = $request->name;
        $data['review'] = $request->review;
        $data['occupation'] = $request->occupation;
        $data['status'] = "0";
        $avatar = "Review".time().'.'.$request->avatar->extension();  
         
         $request->avatar->move(public_path('assets/img/review'), $avatar);
 
 
         $data['avatar'] = $avatar;


        if (Review::create($data)) {
            return back()->with(AlertController::SendAlert());
        } else {
            return back()->with(AlertController::SendAlert('error', "sorry an error occured!"));
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
        $review = Review::find($id);
        if ($review->status == "0")
        {
            $review->status = "1";
        }
        else
        {
            $review->status = "0";
        }
        $review->save();
        return back()->with(AlertController::SendAlert());

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
        // return [$request, $id];
        // return $request;
        $review = Review::findOrFail($id);
        $review->name = $request->name;
        $review->review = $request->review;
        $review->occupation = $request->occupation;
        $review->status = "0";
        if ($review->save())
        {
            return back()->with(AlertController::SendAlert());
        }
        else {
            return back()->with(AlertController::SendAlert('error', 'An error occured'));
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
        // return $id;
        $review = Review::findOrFail($id);
        $res =  $review->delete();
        if ($res)
        {
            return back()->with(AlertController::SendAlert('success', 'Review  deleted Successfully!'));
        } else {
            return back()->with(AlertController::SendAlert('error', 'An error occured!'));
        }
        // return back()->with(AlertController::SendAlert());

    }
}
