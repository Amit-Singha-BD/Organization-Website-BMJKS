<?php

namespace App\Http\Controllers\frontend;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Http\Requests\LifetimeMemberValidation;
use App\Models\Person;
use App\Models\PersonType;
use App\Models\PersonTag;

class EServiceController extends Controller
{
    public function lifetime_member_application_view(){
        return view('frontend.pages.lifetime_member');
    }
    public function lifetime_member_store(LifetimeMemberValidation $request){
             // Person তৈরি করা
        $validdata = $request->validated();
        $person = Person::create($validdata);

        // Selected tags
        PersonTag::create([
            'person_id'     => $person->id,
            'persontype_id' => 5
        ]);
        return view('frontend.pages.application_success_msz')->with('name',$person->name)->with('mobile',$person->mobile_number);
    }

    public function general_member_application_view(){
        return view('frontend.pages.general_member');
    }

    public function general_member_store(LifetimeMemberValidation $request){
             // Person তৈরি করা
        $validdata = $request->validated();
        $person = Person::create($validdata);

        // Selected tags
        PersonTag::create([
            'person_id'     => $person->id,
            'persontype_id' => 6
        ]);
        return view('frontend.pages.application_success_msz')->with('name',$person->name)->with('mobile',$person->mobile_number);
    }
}
