<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use App\Models\DonationEvent;
use Illuminate\Http\Request;

class DonationController extends Controller
{
    public function donationCreate(){
        return view('Backend.Pages.Donation-Create');
    }

    public function donationStore(){
        return view('Backend.Pages.Donation-Create');
    }

    public function recentDonation()
    {
        return view('Backend.Pages.Donation-List');
    }

    public function donationEvent()
    {
        return view('Backend.Pages.Donation-Event-List');
    }

    public function donationEventCreate()
    {
        return view('Backend.Pages.Donation-Event-Create');
    }

    public function donationEventStore(Request $request)
    {
              // Validation
        $request->validate([
            'event_name'    => 'required|string|max:255',
            'description'   => 'nullable|string|max:1000',
        ]);

        // Store data
        $event = new DonationEvent();
        $event->event_name    = $request->event_name;
        $event->description   = $request->description;
        $event->total_amount  = 0;
        $event->total_donator = 0;
        $event->save();

        // Redirect with success message
        return redirect()->back()->with('success', 'ইভেন্ট সফলভাবে সংরক্ষণ করা হয়েছে!');
    }
    public function donatorList()
    {
        return view('Backend.Pages.Donetor-List');
    }
}
