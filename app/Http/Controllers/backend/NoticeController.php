<?php

namespace App\Http\Controllers\backend;
use App\Http\Controllers\Controller;
use App\Models\Notice;
use Illuminate\Http\Request;
use App\Http\Requests\NoticeValidate;

class NoticeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $notice_data = Notice::orderBy('id', 'desc')->paginate(10);
        $title = 'Notice';
         return view('Backend.Pages.Notice',compact('notice_data','title'));
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
    public function store(NoticeValidate $request)
    {   
        Notice::create($request->validated());

        return redirect()->route('notice.index')->with('success', 'নোটিশ আপলোড হয়েছে');
    }


    /**
     * Display the specified resource.
     */
    public function show(Notice $notice)
    {
        return view('Backend.Pages.notice-show', compact('notice'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Notice $notice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(NoticeValidate $request, Notice $notice)
    {
        // ভ্যালিড ডেটা নেয়া
        $validData = $request->validated();

        // রেকর্ড আপডেট করা
        if ($notice->update($validData)) {
            return redirect()->route('notice.index')->with('success', 'নোটিশ সফলভাবে আপডেট হয়েছে');
        } else {
            return redirect()->route('notice.index')->with('error', 'নোটিশ আপডেট ব্যর্থ হয়েছে');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Notice $notice)
    {
        $notice->delete();

        return redirect()->route('notice.index')->with('success','নোটিশটি সফলভাবে মুছে ফেলা হয়েছে');
    }
}
