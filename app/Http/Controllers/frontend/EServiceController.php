<?php

namespace App\Http\Controllers\frontend;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Http\Requests\LifetimeMemberValidation;
use App\Models\Person;
use App\Models\PersonType;
use App\Models\PersonTag;
use App\Models\CommitteeName;

class EServiceController extends Controller
{
    public function lifetime_member_application_view(){
        return view('frontend.pages.lifetime_member');
    }
    public function lifetime_member_store(LifetimeMemberValidation $request){
        $validdata = $request->validated();
        $validdata['member_aproved'] = 'no';
        $person = Person::create($validdata);
        PersonTag::create([
            'person_id'     => $person->id,
            'persontype_id' => 5
        ]);
        return view('frontend.pages.application_success_msz')->with('name',$person->name)->with('mobile',$person->mobile_number);
    }

    public function general_member_application_view(){
        $committeeNames = CommitteeName::get();
        return view('frontend.pages.general_member', compact('committeeNames'));
    }

    public function general_member_store(LifetimeMemberValidation $request){
        $validdata = $request->validated();
        $validdata['member_aproved'] = 'no';
        $person = Person::create($validdata);

        PersonTag::create([
            'person_id'     => $person->id,
            'persontype_id' => 6
        ]);
        return view('frontend.pages.application_success_msz')->with('name',$person->name)->with('mobile',$person->mobile_number);
    }
}
