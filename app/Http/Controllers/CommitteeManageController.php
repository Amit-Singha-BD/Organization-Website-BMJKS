<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CommitteeName;
use App\Models\CommitteeYear;

class CommitteeManageController extends Controller {
    public function committeeCreate(){
        $committees = CommitteeName::all();
        return view('Backend.Pages.CommitteeCreate', compact('committees'));
    }

    public function committeeActiveListView(){
        $committees = CommitteeYear::where('status', 'active')->get();
        return view('Backend.Pages.Committee-List', compact('committees'));
    }

    public function committeeDeactiveListView(){
        $committees = CommitteeYear::where('status', 'deactive')->get();
        return view('Backend.Pages.Committee-List', compact('committees'));
    }
}
