<?php

namespace App\Http\Controllers\backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CommitteeName;
use App\Models\CommitteeYear;
use App\Models\CommitteeMember;

class CommitteeManageController extends Controller {
    public function committeeCreate(){
        $committees = CommitteeName::all();
        return view('Backend.Pages.CommitteeCreate', compact('committees'));
    }

    public function committeeActiveListView(){
        $committees = CommitteeYear::where('status', 'active')->get();
        foreach($committees as $committee){
            $committee->persons_count = CommitteeMember::where('CommitteeYear_id', $committee->id)->count();
        }
        return view('Backend.Pages.Committee-List', compact('committees'));
    }

    public function committeeDeactiveListView(){
        $committees = CommitteeYear::where('status', 'deactive')->get();
        foreach($committees as $committee){
            $committee->persons_count = CommitteeMember::where('CommitteeYear_id', $committee->id)->count();
        }
        return view('Backend.Pages.Committee-List', compact('committees'));
    }
}
