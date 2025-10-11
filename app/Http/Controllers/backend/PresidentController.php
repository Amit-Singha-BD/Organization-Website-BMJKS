<?php

namespace App\Http\Controllers\backend;
use App\Http\Controllers\Controller;
use App\Models\President;
use Illuminate\Http\Request;

class PresidentController extends Controller
{
    public function create_view()
    {
        $president = President::latest()->first();
        return view('backend.pages.president',compact('president'));
    }



    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'message' => 'required|string|max:2000',
        ], [
            'message.required' => 'বার্তা অবশ্যই দিতে হবে।',
            'message.string' => 'বার্তাটি সঠিকভাবে লিখুন।',
            'message.max' => 'বার্তা সর্বোচ্চ ২০০০ অক্ষর হতে পারবে।',
        ]);

        $presidentData = President::findOrFail($id);
        $presidentData->message = $validated['message'];
        $presidentData->save();

        return redirect()->back()->with('success', 'সভাপতির বার্তা সফলভাবে তৈরি হয়েছে');

    }


}
