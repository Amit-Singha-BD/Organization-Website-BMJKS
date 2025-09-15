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
            $imageName = time() . '.' . $image->getClientOriginalExtension();
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
    public function update(CommitteeMemberValidate $request, CommitteeMember $committeeMember) {
        $data = $request->validated();

        if ($request->hasFile('photo')) {

            if ($committeeMember->photo && file_exists(public_path($committeeMember->photo))) {
                unlink(public_path($committeeMember->photo));
            }

            $image = $request->file('photo');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/members'), $imageName);

            $data['photo'] = 'uploads/members/' . $imageName;
        }

        if ($committeeMember->update($data)) {
            return redirect()->back()
                            ->with('success', 'সদস্যের তথ্য সফলভাবে আপডেট হয়েছে');
        }

        return redirect()->back()
                        ->with('error', 'আপডেট ব্যর্থ হয়েছে।');
    }

    public function destroy(CommitteeMember $committeeMember) {
        if (!$committeeMember) {
            return redirect()->back()->with("error", "অনুরোধকৃত তথ্য খুঁজে পাওয়া যায়নি।");
        }

        $committeeMember->delete();
        return redirect()->back()->with("success", "সদস্য সফলভাবে মুছে ফেলা হয়েছে।");
    }
}
