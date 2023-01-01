<?php

namespace App\Http\Controllers;

use App\Models\Plans;
use Illuminate\Http\Request;

class PlansController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.plan.index');
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
        $data['min'] = $request->min;
        $data['max'] = $request->max;
        $data['roi'] = $request->roi;
        $data['grow'] = $request->grow;
        $data['perperref'] = $request->perperref;

        if(Plans::create($data))
        {
            return back()->with(AlertController::SendAlert('success', "Plan Created Successfully!"));
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
        $plan = Plans::findOrFail($id); 
        return view('admin.plan.edit', compact('plan'));
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
    //    return $request; , "perperref":"2","roi":"5","grow":"2"
        $plan = Plans::findOrFail($id); 
        $plan->name = $request->name;
        $plan->min = $request->min;
        $plan->max = $request->max;
        $plan->perperref = $request->perperref;
        $plan->roi = $request->roi;
        $plan->grow = $request->grow;

        $res =  $plan->save();
        if ($res)
        {
            return back()->with(AlertController::SendAlert('success', 'Plan  Updated Successfully!'));
        } else {
            return back()->with(AlertController::SendAlert('error', 'An error occured!'));
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
        //  return "hello";
         $review = Plans::findOrFail($id);
         $res =  $review->delete();
         if ($res)
         {
             return back()->with(AlertController::SendAlert('success', 'Plan  deleted Successfully!'));
         } else {
             return back()->with(AlertController::SendAlert('error', 'An error occured!'));
         }
         // return back()->with(AlertController::SendAlert());
 
    }
}
