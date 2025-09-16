<?php

namespace App\Http\Controllers;

use App\Models\Person;
use App\Models\PersonType;
use App\Models\PersonTag;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($personType)
    {
        // Step 1: Tag গুলো নাও
        $personTags = PersonTag::where('persontype_id', $personType)->get();

        // Step 2: Person ID গুলো বের করো
        $personIds = $personTags->pluck('person_id'); // ধরে নিচ্ছি PersonTag এর column name হচ্ছে person_id

        // Step 3: Person গুলো নাও
        $persons = Person::whereIn('id', $personIds)->get();

        return view('Backend.Pages.Special-Person');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Person $person)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Person $person)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Person $person)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Person $person)
    {
        //
    }

    public function tag(){
        $tags = PersonType::get();
        foreach($tags as $tag){
            $tag->persons_count = PersonTag::where('persontype_id', $tag->id)->count();
        }
        return view('Backend.Pages.Person-Tag-Create',compact('tags'));
    }

    public function tagcreate(Request $request){
            // ভ্যালিডেশন
        $request->validate([
            'tag_create' => 'required|string|max:255|unique:person_types,person_type_name',
        ], [
            'tag_create.required' => 'ক্যাটাগরির নাম অবশ্যই দিতে হবে।',
            'tag_create.string'   => 'ক্যাটাগরির নাম অবশ্যই টেক্সট হতে হবে।',
            'tag_create.max'      => 'ক্যাটাগরির নাম সর্বোচ্চ ২৫৫ অক্ষরের হতে পারবে।',
            'tag_create.unique'   => 'এই ক্যাটাগরি আগেই তৈরি করা হয়েছে।',
        ]);

        // ডাটা সংরক্ষণ
        PersonType::create([
            'person_type_name' => $request->tag_create,
        ]);

        // সফল হলে রিডাইরেক্ট + মেসেজ
        return redirect()->back()->with('success', 'নতুন ক্যাটাগরি সফলভাবে যোগ করা হয়েছে!');
    }
    public function tagdelete($id){
        $tag = PersonType::findOrFail($id); // ID অনুযায়ী ট্যাগ খুঁজে বের করা
        $tag->delete();
        return redirect()->back()->with('success', 'ক্যাটাগরি সফলভাবে ডিলিট করা হয়েছে!');
    }
    
}
