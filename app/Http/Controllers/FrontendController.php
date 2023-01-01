<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class FrontendController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }

    public function AboutUs()
    {
        return view('frontend.about-us');
    }

    public function Services()
    {
        return view('frontend.service');
    }

    public function ServiceDetails()
    {
        return view('frontend.service-details');
    }

    public function Pricing()
    {
        return view('frontend.pricing');
    }

    public function Contact()
    {
        return view('frontend.contact');
    }

    public function Faq()
    {
        return view('frontend.faq');
    }

    public function err()
    {
        return view('frontend.err');
    }

    public function SubmitPropery()
    {
        return view('frontend.submit-a-property');
    }

    public function SaveContact(Request $request)
    {
        // name
        // phone
        // email
        // subject
        // message
        // return $request;
        $data['name'] = $request->name;
        $data['phone'] = $request->phone;
        $data['email'] = $request->email;
        $data['subject'] = $request->subject;
        $data['message'] = $request->message;
        if (Contact::create($data))
        {
            return back()->with(AlertController::SendAlert('success', 'Request recieved, we will reach you via mail'));
        }
    }
}
