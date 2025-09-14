<?php

namespace App\Http\Controllers;

use App\Models\CommitteeMember;
use Illuminate\Http\Request;
use App\Http\Requests\CommitteeMemberValidate;

class CommitteeMemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CommitteeMemberValidate $request) {
        // ভ্যালিডেটেড ডেটা
        $validateData = $request->validated();

        // ছবি আপলোড (যদি থাকে)
        if ($request->hasFile('photo')) {
            $image = $request->file('photo');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('uploads/members'), $imageName);
            $validateData['photo'] = 'uploads/members/' . $imageName;
        }

        if(CommitteeMember::create($validateData)){
            return redirect()->back()->with('success', 'সদস্য সফলভাবে সংরক্ষণ করা হয়েছে!');
        }

        // রিডাইরেক্ট বা মেসেজ
        return redirect()->back()->with('error', 'সদস্য সংরক্ষণ করতে ব্যর্থ হয়েছে।');
    }

    /**
     * Display the specified resource.
     */
    public function show(CommitteeMember $committeeMember)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CommitteeMember $committeeMember)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CommitteeMember $committeeMember)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CommitteeMember $committeeMember)
    {
        //
    }
}
