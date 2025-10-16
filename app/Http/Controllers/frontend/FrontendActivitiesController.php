<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CommitteeActivitie;
use App\Models\CommitteeMember;
use App\Models\CommitteeYear;

class FrontendActivitiesController extends Controller {
    public function committeeActivities() {
        $committeeYears = CommitteeYear::where('committee_id', 1)->latest()->get();

        foreach ($committeeYears as $committeeYear) {
            $committeeYear->committeeMembers = CommitteeMember::where('CommitteeYear_id', $committeeYear->id)
                ->select('name', 'photo', 'role')
                ->whereIn('role', ['1', '4'])
                ->get();

            $committeeYear->committeeActivities = CommitteeActivitie::where('committee_year_id', $committeeYear->id)->get();
        }

        return view('frontend.pages.comitee_activities', compact('committeeYears'));
    }

    public function activitieSearch(Request $request) {
        $activities = CommitteeActivitie::where('title', 'like', "%{$request->search}%")->get();

        foreach ($activities as $activitie) {
            $activitie->committeeMembers = CommitteeMember::where('CommitteeYear_id', $activitie->committee_year_id)
                ->select('name', 'photo', 'role')
                ->whereIn('role', ['1', '4'])
                ->get();

            $activitie->committeeYears = CommitteeYear::where('id', $activitie->committee_year_id)->get();
        }

        return view('frontend.pages.comitee_activities', compact('activities'));
    }

    public function activitieFilter(Request $request) {
        $activities = CommitteeActivitie::where('activities_date', $request->filter)->get();

        foreach ($activities as $activitie) {
            $activitie->committeeMembers = CommitteeMember::where('CommitteeYear_id', $activitie->committee_year_id)
                ->select('name', 'photo', 'role')
                ->whereIn('role', ['1', '4'])
                ->get();

            $activitie->committeeYears = CommitteeYear::where('id', $activitie->committee_year_id)->get();
        }

        return view('frontend.pages.comitee_activities', compact('activities'));
    }
}