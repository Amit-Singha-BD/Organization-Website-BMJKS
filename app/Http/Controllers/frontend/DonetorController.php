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
                ->withSum('donations', 'donate_amount') // প্রতিটি person এর মোট দান বের করছে
                ->latest()
                ->paginate(10);

    return view('frontend.pages.donetor_list', compact('persons'));
    }
    public function topDonetorFrontend()
    {
        $persons = Person::where('donator', 'yes')
            ->with('donations.event')
            ->withSum('donations', 'donate_amount') // প্রতিটি person এর মোট দান বের করছে
            ->orderByDesc('donations_sum_donate_amount') // মোট দানের পরিমাণ অনুযায়ী সাজাচ্ছে
            ->paginate(10);

    return view('frontend.pages.donetor_list', compact('persons'));
    }
}
