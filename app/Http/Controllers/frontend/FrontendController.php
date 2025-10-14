<?php

namespace App\Http\Controllers\frontend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home_view(){
        return view('frontend.pages.home');
    }
    public function commitee(){
        return view('frontend.pages.commitee');
    }
   
    
    public function about(){
        return view('frontend.pages.about');
    }
    public function service(){
        return view('frontend.pages.service');
    }
    
    public function techteam(){
        return view('frontend.pages.techteam');
    }

    
}
