<?php
namespace App\Http\Controllers\frontend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendHomeController extends Controller{

    public function home_view(){
        return view('frontend.pages.home');
    }

}
