<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notice;

class DashboardController extends Controller {

    public function Dashboard(){
        $notices = Notice::orderBy('id', 'desc')->take(5)->get();
        $title = 'Dashboard';
        return view('Backend.Pages.Dashboard', compact('notices','title'));
    }
}
