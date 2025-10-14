<?php

namespace App\Http\Controllers\frontend;
use App\Http\Controllers\Controller;


use App\Models\Notice;
use Illuminate\Http\Request;

class FrontendNoticeController extends Controller
{
     public function notice(){
        $notices = Notice::latest()->paginate(10);

        return view('frontend.pages.notice',compact('notices'));
    }
}
