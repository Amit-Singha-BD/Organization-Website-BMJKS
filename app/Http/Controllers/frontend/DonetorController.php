<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Donation;
use App\Models\DonationEvent;
use App\Models\Person;

class DonetorController extends Controller
{
    public function donetorFrontend()
    {
    $persons = Person::where('donator','yes')->with('donations.event')->latest()->paginate(10);
        foreach($persons as $person){
            $person->totalDonation = Donation::where('people_id', $person->id)->sum('donate_amount');
        }

    return view('frontend.pages.donetor_list', compact('persons'));
    }
}
