<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use App\Models\DonationEvent;
use App\Models\Person;
use App\Http\Requests\DonationValidate;
use Illuminate\Http\Request;

class DonationController extends Controller
{
    public function donationCreate(){
        $donationEvent = DonationEvent::get();
        return view('Backend.Pages.Donation-Create',compact('donationEvent'));
    }

    public function donationStore(DonationValidate $request)
    {
        $validData = $request->validated();

        $person = Person::where('mobile_number', $validData['people_id'])->first();

        if(!$person){
            return back()->withErrors(['people_id' => 'সহায়তাকারী পাওয়া যায়নি।']);
        }
        else{
            $person->donator = 'yes';
            $person->update();
        }

        $donation = new Donation();
        $donation->people_id     = $person->id; 
        $donation->event_id      = $validData['event_id'];
        $donation->donate_amount = $validData['donate_amount'];
        $donation->date          = $validData['date'];
        $donation->save();

        return redirect()->route('recent.donation')->with('success', 'ডোনেশন সফলভাবে এন্ট্রি হয়েছে');
    }


    public function recentDonation(){
        $donations = Donation::paginate(10);

        foreach($donations as $donation) {
            $donation->donator = Person::where('id', $donation->people_id)->first();
            $donation->event   = DonationEvent::where('id', $donation->event_id)->first();
        }
        return view('Backend.Pages.Donation-List',compact('donations'));
    }

    public function donationEvent(){
        $donationEvent = DonationEvent::with('donations.person')->paginate(20);
        return view('Backend.Pages.Donation-Event-List',compact('donationEvent'));
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

    public function donationEventStatus($id){
        $eventStatus = DonationEvent::where('id', $id)->first();
        if($eventStatus->status=='active'){
            $eventStatus->status= 'deactive';
            $eventStatus->update();
            return redirect()->back()->with('success','ইভেন্টটি সফলভাবে অচলমান করা হয়েছে');
        }
        else{
            $eventStatus->status= 'active';
            $eventStatus->update();
            return redirect()->back()->with('success','ইভেন্টটি সফলভাবে সচল করা হয়েছে');
        }
    }

    public function donationEventDetails($id)
    {
        $event = DonationEvent::findOrFail($id);

        $donations = $event->donations()->with('person')->paginate(20);

        return view('Backend.Pages.Donation-List', compact('event', 'donations'));
    }


    public function donatorList()
    {   
        $persons = Person::where('donator','yes')->paginate(20);
            foreach($persons as $person){
                $person->totalDonation = Donation::where('people_id', $person->id)->sum('donate_amount');
                $person->donations = Donation::where('people_id', $person->id)->get();
                    foreach($person->donations as $event){
                        $event->eventName = DonationEvent::where('id', $event->event_id)->value('event_name');
                    }
            }
        return view('Backend.Pages.Donetor-List',compact('persons'));
    }
}
