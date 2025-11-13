<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\ChadaCollection;
use App\Models\ChadaSetting;
use Illuminate\Http\Request;

class MonthlyContributionController extends Controller {
    public function monthlyContribution(){
        $contributions = ChadaCollection::with('committee')
                       ->selectRaw('committee_id,
                            SUM(CASE WHEN payment_status = "paid" THEN amount ELSE 0 END) as total_paid_amount,
                            SUM(CASE WHEN payment_status IN ("not_paid","pending") THEN amount ELSE 0 END) as total_not_paid_amount,
                            COUNT(CASE WHEN payment_status = "paid" THEN 1 END) as total_paid_count,
                            COUNT(CASE WHEN payment_status IN ("not_paid","pending") THEN 1 END) as total_not_paid_count')
                       ->groupBy('committee_id')
                       ->get();

        return view('Backend.Pages.Monthly-Contribution', compact('contributions'));
    }


    public function monthlyContributionList($committeeId){
        $contributionList = ChadaCollection::with('chadaName', 'committee')
                          ->where('committee_id', $committeeId)
                          ->get();

        return view('Backend.Pages.Monthly-Contribution-List', compact('contributionList'));
    }

    public function chadaSettingsView(){
        $chadaSetting = ChadaSetting::get();
        return view('Backend.Pages.Chada-settings',compact('chadaSetting'));
    }
    
    public function chadaSettingsStore(Request $request)
    {
        $validdata = $request->validate([
            'central_chada_amount' => 'required|numeric|min:0|max:100000',
            'branch_chada_amount' => 'required|numeric|min:0|max:100000',
        ], [
            'central_chada_amount.required' => 'কেন্দ্রীয় চাঁদার পরিমাণ দিতে হবে।',
            'central_chada_amount.numeric' => 'কেন্দ্রীয় চাঁদার পরিমাণ অবশ্যই সংখ্যা হতে হবে।',
            'central_chada_amount.min' => 'কেন্দ্রীয় চাঁদার পরিমাণ শূন্যের কম হতে পারবে না।',
            'central_chada_amount.max' => 'কেন্দ্রীয় চাঁদার পরিমাণ ১০০০০০ এর বেশি হতে পারবে না।',

            'branch_chada_amount.required' => 'শাখা চাঁদার পরিমাণ দিতে হবে।',
            'branch_chada_amount.numeric' => 'শাখা চাঁদার পরিমাণ অবশ্যই সংখ্যা হতে হবে।',
            'branch_chada_amount.min' => 'শাখা চাঁদার পরিমাণ শূন্যের কম হতে পারবে না।',
            'branch_chada_amount.max' => 'শাখা চাঁদার পরিমাণ ১০০০০০ এর বেশি হতে পারবে না।',
        ]);

        // আগের ডাটা আপডেট করো
        $setting = ChadaSetting::first(); // টেবিলে একটাই রেকর্ড আছে ধরে নিচ্ছি

        if ($setting) {
            $setting->update($validdata);
        } else {
            ChadaSetting::create($validdata);
        }

        return redirect()->back()->with('success', 'চাঁদা সেটিংস সফলভাবে হালনাগাদ হয়েছে।');
    }


}
