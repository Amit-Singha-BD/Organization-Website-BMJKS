<?php

namespace App\Http\Controllers\frontend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Person;

class FrontendPersonSearchController extends Controller {

    public function bmjksDatabase() {
        return view('frontend.pages.database');
    }

    public function bmjksDatabaseSearch(Request $request) {
        
        $query = Person::query();

        $searchFields = ['name','father_husband_name','mother_name','photo','date_of_birth_from','date_of_birth_to','gender','caste','marital_status',
            'mobile_number','village','post_office','thana','district','profession','blood_group',
        ];

        foreach ($searchFields as $field) {
            if ($request->filled($field)) {
                $query->where($field, 'like', "%" . trim($request->input($field)) . "%");
            }
        }

        // যদি কোনো ফিল্ড না দেওয়া হয়
        if ($query->getQuery()->wheres === []) {
            return back()->with('error', 'অনুগ্রহ করে অন্তত একটি সার্চ ফিল্ড দিন');
        }

        $persons = $query->paginate(10)->appends($request->all());

        return view('frontend.pages.database', compact('persons'));
    }
}
