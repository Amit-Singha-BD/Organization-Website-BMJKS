<?php
namespace App\Http\Controllers\frontend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;

class FrontendHomeController extends Controller{

    public function home_view(){
        $services = Service::all();
        return view('frontend.pages.home', compact('services'));
    }

}
