<?php

namespace App\Http\Controllers\backend;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
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

        $tags = PersonType::where('status','active')->get();
        foreach($tags as $tag){
            $tag->persons_count = PersonTag::where('persontype_id', $tag->id)->count();
        }
        $committees = CommitteeYear::where('status', 'active')->when(!in_array(Auth::user()->branch, ['1', '100']), 
            function ($query) {
            $query->where('committee_id', Auth::user()->branch);
            })->withCount('committee_members')->get();

        $total_active_member = $committees->sum('committee_members_count');
        
        $lifetime_person = PersonTag::where('persontype_id', 5)->count();
        $general_person = PersonTag::where('persontype_id', 6)->count();

        return view('Backend.Pages.Dashboard', compact('notices','title', 'tags', 'committees','lifetime_person','general_person','total_active_member'));
    }
}
