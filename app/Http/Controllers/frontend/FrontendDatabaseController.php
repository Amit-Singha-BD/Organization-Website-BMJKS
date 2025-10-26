<?php

namespace App\Http\Controllers\frontend;
use App\Http\Controllers\Controller;
use App\Models\PersonType;
use App\Models\PersonTag;

class FrontendDatabaseController extends Controller
{
    public function bmjks_database_info(){
       $tags = PersonType::where('status','active')->get();
        foreach($tags as $tag){
            $tag->persons_count = PersonTag::where('persontype_id', $tag->id)->count();
        }

        return view('Frontend.Pages.database_info', compact('tags'));
    }
}
