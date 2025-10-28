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
        $persons = Person::where('donator', 'yes')
            ->with('donations.event')
            ->withSum('donations', 'donate_amount')
            ->orderByDesc(Donation::select('date')->whereColumn('people_id', 'people.id')->latest('date')->limit(1))
            ->paginate(10);

    return view('frontend.pages.donetor_list', compact('persons'));
    }
    public function topDonetorFrontend()
    {
        $persons = Person::where('donator', 'yes')
            ->with('donations.event')
            ->withSum('donations', 'donate_amount')
            ->orderByDesc('donations_sum_donate_amount')
            ->paginate(10);

    return view('frontend.pages.donetor_list', compact('persons'));
    }
}
