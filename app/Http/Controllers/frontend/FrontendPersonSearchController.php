<?php

namespace App\Http\Controllers\frontend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendPersonSearchController extends Controller {
    public function bmjksDatabase(){
        return view('frontend.pages.database');
    }
}
