<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        return view('frontend.home');
    }
    public function about(){
        return view('frontend.about');
    }

    public function contact(){
        return view('frontend.contact');
    }

    public function signup(){
        return view('frontend.signup');
    }

    public function login(){
        return view('frontend.login');
    }

    public function package(){
        return view('frontend.package');
    }

    public function packageDetails(){
        return view('frontend.package-details');
    }

    public function whyUs(){
        return view('frontend.why-choose-us');
    }
    
}
