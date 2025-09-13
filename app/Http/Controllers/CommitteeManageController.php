<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CommitteeName;

class CommitteeManageController extends Controller {
    public function committeeCreate(){
        $committees = CommitteeName::all();
        return view('Backend.Pages.CommitteeCreate', compact('committees'));
    }
}
