<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CommitteeActivitie;
use App\Models\CommitteeMember;
use App\Models\CommitteeYear;

class FrontendActivitiesController extends Controller {
    
    public function committeeActivities(){
        $committeeYears = CommitteeYear::where('committee_id', 1)->latest()->get();
            foreach($committeeYears as $committeeYear){
                $committeeYear->committeeMembers = CommitteeMember::where('CommitteeYear_id', $committeeYear->id)
                            ->select('name', 'photo', 'role')
                            ->whereIn('role', ['1', '4'])
                            ->get();
                $committeeYear->committeeActivities = CommitteeActivitie::where('committee_year_id', $committeeYear->id)->get();
            }
        return view('frontend.pages.comitee_activities', compact('committeeYears'));
    }
}
