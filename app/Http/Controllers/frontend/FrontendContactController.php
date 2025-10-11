<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ContactValidate;
use App\Models\Contact;

class FrontendContactController extends Controller {
    public function contact() {
        return view('frontend.pages.contact');
    }

    public function Store(ContactValidate $request) {
        $validateData = $request->validated();
        
        $contact = Contact::create([
            "name"          => $validateData['name'],
            "phone_no"      => $validateData['phone'],
            "email"         => $validateData['email'],
            "read_status"   => 'unread',
            "message_title" => $validateData['subject'],
            "message"       => $validateData['message'],
        ]);

        if(!$contact){
            return redirect()->back()->with('error', 'দুঃখিত! বার্তাটি পাঠানো সম্ভব হয়নি, পরে আবার চেষ্টা করুন।');
        }
        return redirect()->back()->with('success', 'আপনার বার্তা সফলভাবে পাঠানো হয়েছে!');
    }

}
