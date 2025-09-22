<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use App\Models\DonationEvent;
use Illuminate\Http\Request;

class DonationController extends Controller
{

    public function donatorList()
    {
        return view('Backend.Pages.Donetor-List');
    }

    public function donationEvent()
    {
        return view('Backend.Pages.Donation-Event-List');
    }
    public function recentDonation()
    {
        return view('Backend.Pages.Donation-List');
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
            'description'   => 'nullable|string',
            'total_amount'  => 'required|numeric|min:0',
            'total_donator' => 'required|integer|min:0',
        ]);

        // Store data
        $event = new Event();
        $event->event_name    = $request->event_name;
        $event->description   = $request->description;
        $event->total_amount  = $request->total_amount;
        $event->total_donator = $request->total_donator;
        $event->save();

        // Redirect with success message
        return redirect()->back()->with('success', 'ইভেন্ট সফলভাবে সংরক্ষণ করা হয়েছে!');
    }
    
}
