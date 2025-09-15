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

        //return view('Backend.Pages.Special-Person');
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
}
