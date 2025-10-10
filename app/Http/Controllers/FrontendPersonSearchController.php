<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendPersonSearchController extends Controller {
    public function bmjksDatabase(){
        return view('frontend.pages.database');
    }
}
