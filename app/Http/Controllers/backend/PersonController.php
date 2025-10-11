<?php

namespace App\Http\Controllers\backend;
use App\Http\Controllers\Controller;
use App\Models\Person;
use App\Models\PersonType;
use App\Models\PersonTag;
use App\Http\Requests\PersonValidation;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($personType)
    {
       // Step 1: PersonType মডেল থেকে তথ্য নাও (রিলেশনসহ এবং person এর personType সহ)
        $personTypeData = PersonType::with(['people.personType'])
            ->findOrFail($personType);

        // Step 2: নাম এবং সম্পর্কিত persons গুলো পাও
        $personTypeName = $personTypeData->person_type_name;

        // Step 3: PersonType এর রিলেশন থেকে persons paginate করে আনো
        $persons = $personTypeData->people()->with('personType')->paginate(10);

        // Step 4: ভিউতে পাঠাও
        return view('Backend.Pages.Person-List', compact('persons', 'personTypeName'));
    }

    //ব্যাক্তি সার্চ
    public function personSearch(){
        return view('Backend.Pages.Person-Search');
    }
    //সার্চ রিজাল্ট
    public function searchResult(Request $request){
        
        $query = Person::query();

        $searchFields = ['name','father_husband_name','mother_name','photo','date_of_birth','gender','caste','marital_status',
            'mobile_number','village','post_office','thana','district','profession','blood_group',
        ];

        foreach ($searchFields as $field) {
            if ($request->filled($field)) {
                $query->where($field, 'like', "%" . trim($request->input($field)) . "%");
            }
        }

        // যদি কোনো ফিল্ড না দেওয়া হয়
        if ($query->getQuery()->wheres === []) {
            return back()->with('error', 'অনুগ্রহ করে অন্তত একটি সার্চ ফিল্ড দিন');
        }

        $persons = $query->paginate(10)->appends($request->all());

        return view('Backend.Pages.Person-Search', compact('persons'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {   
        $tags = PersonType::get();
        return view('Backend.Pages.PersonCreate',compact('tags'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PersonValidation $request)
    {
        // Person তৈরি করা
        $validdata = $request->validated();
        $person = Person::create($validdata);

        // Selected tags
        $selectedTags = $request->input('person_tag', []); // array of tag IDs
        //প্রতিটি tag attach করা
        foreach ($selectedTags as $tagId) {
            PersonTag::create([
                'person_id'     => $person->id,
                'persontype_id' => $tagId
            ]);
        }
        return redirect()->back()->with('success', 'সফলভাবে সংরক্ষণ করা হয়েছে!');
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
        $person_tag = PersonTag::where('persontype_id',$id)->count();
        if($person_tag == 0){
            $tag = PersonType::findOrFail($id); // ID অনুযায়ী ট্যাগ খুঁজে বের করা
            $tag->delete();
            return redirect()->back()->with('success', 'ক্যাটাগরি সফলভাবে ডিলিট করা হয়েছে!');
        }
        else{
            return redirect()->back()->with('error', ' এই ক্যাটাগরির মানুষ ইতোমধ্যে রয়েছে');
        }
        
    }
    public function tagstatus($id){
        $tagStatus = PersonType::find($id);
        
        if($tagStatus->status=='active'){
            $tagStatus->status='deactive';
            $mgs = 'ক্যাটাগরিটি নিস্ক্রিয় করা হয়েছে';
        }
        else{
            $tagStatus->status='active';
            $mgs = 'ক্যাটাগরিটি সক্রিয় করা হয়েছে';
        }
        $tagStatus->update();
        return redirect()->back()->with('success',$mgs);
    }
    
}
