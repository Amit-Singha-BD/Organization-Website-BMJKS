<?php

namespace App\Http\Controllers\backend;
use App\Http\Controllers\Controller;
use App\Models\CommitteeActivitie;
use App\Models\CommitteeYear;
use App\Http\Requests\CommitteeActivitiesValidate;
use Illuminate\Http\Request;

class CommitteeActivitieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $activities_data = CommitteeActivitie::paginate(10);
        $committeeYears = CommitteeYear::select('id', 'committee_name')->get();
        return view('Backend.Pages.CommitteeActivities',compact('activities_data', 'committeeYears'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CommitteeActivitiesValidate $request)
    {
       
        if(CommitteeActivitie::create($request->validated())){
            return redirect()->route('committeeActivities.index')->with('success', 'activitie save successfully');
        }
        else{
            return redirect()->back()->with('error', 'activitie save failed');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(CommitteeActivitie $committeeActivitie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CommitteeActivitie $committeeActivitie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CommitteeActivitiesValidate $request, CommitteeActivitie $committeeActivity)
    {
        $validData = $request->validated();

        if ($committeeActivity->update($validData)) {
            return redirect()->route('committeeActivities.index')->with('success', 'এক্টিভিটি সফলভাবে আপডেট হয়েছে');
        }

        return redirect()->route('committeeActivities.index')->with('error', 'এক্টিভিটি আপডেট ব্যর্থ হয়েছে');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CommitteeActivitie $committeeActivity)
    {
        $committeeActivity->delete();

        return redirect()->route('committeeActivities.index')->with('success','এক্টিভিটি সফলভাবে মুছে ফেলা হয়েছে');
    }
}
