<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CommitteeActivitie;
use App\Models\CommitteeMember;
use App\Models\CommitteeYear;

class FrontendActivitiesController extends Controller {
    
    public function committeeActivities(){
        $activities = CommitteeActivitie::all();
        return view('frontend.pages.comitee_activities', compact('activities'));
    }
}
