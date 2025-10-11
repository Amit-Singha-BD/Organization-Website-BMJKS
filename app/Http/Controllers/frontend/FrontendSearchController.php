<?php

namespace App\Http\Controllers\frontend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendSearchController extends Controller
{
    public function metrimonial_search(){
        return view('Frontend.Pages.matrimonial');
    }
}
