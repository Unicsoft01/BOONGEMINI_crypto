<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
