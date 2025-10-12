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
    public function notice(){
        return view('frontend.pages.notice');
    }
    
    public function about(){
        return view('frontend.pages.about');
    }
    public function service(){
        return view('frontend.pages.service');
    }
    public function lifetime_member(){
        return view('frontend.pages.lifetime_member');
    }
    public function general_member(){
        return view('frontend.pages.general_member');
    }
    public function techteam(){
        return view('frontend.pages.techteam');
    }

     public function comitee_activities(){
        return view('frontend.pages.comitee_activities');
    }
}
