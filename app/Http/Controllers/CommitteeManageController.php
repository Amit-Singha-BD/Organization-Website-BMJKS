<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CommitteeName;

class CommitteeManageController extends Controller {
    public function committeeCreate(){
        $committees = CommitteeName::all();
        return view('Backend.Pages.CommitteeCreate', compact('committees'));
    }

    public function committeeListView(){
        $committees = CommitteeName::all();
        return view('Backend.Pages.Committee-List', compact('committees'));
    }
}
