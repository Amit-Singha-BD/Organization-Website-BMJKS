<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notice;
use App\Models\PersonType;
use App\Models\PersonTag;
use App\Models\CommitteeYear;
use App\Models\CommitteeMember;

class DashboardController extends Controller {

    public function Dashboard(){
        $notices = Notice::orderBy('id', 'desc')->take(5)->get();
        $title = 'Dashboard';

        $tags = PersonType::get();
        foreach($tags as $tag){
            $tag->persons_count = PersonTag::where('persontype_id', $tag->id)->count();
        }
        $committees = CommitteeYear::where('status', 'active')->get();
        foreach($committees as $committee){
            $committee->persons_count = CommitteeMember::where('CommitteeYear_id', $committee->id)->count();
        }

        return view('Backend.Pages.Dashboard', compact('notices','title', 'tags', 'committees'));
    }
}
