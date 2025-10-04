<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendSearchController extends Controller
{
    public function metrimonial_search(){
        return view('Frontend.Pages.matrimonial');
    }
}
