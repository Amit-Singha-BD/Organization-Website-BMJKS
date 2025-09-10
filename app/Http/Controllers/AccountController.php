<?php

namespace App\Http\Controllers;

use App\Http\Requests\AccountValidate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AccountController extends Controller {
    public function users(){
        $users = User::all();
        return view('Backend.Pages.Users-Manage', compact('users'));
    }

    public function userStore(AccountValidate $request){
        $validateData = $request->validated();

        $user = User::create([
            "name"     => $validateData['name'],
            "username" => $validateData['username'],
            "phone_no" => $validateData['phone_no'],
            "branch"   => $validateData['branch'],
            "password" => Hash::make('password'),
        ]);

        if(!$user){
            return redirect()->back()
                             ->with("error", "দুঃখিত! অ্যাকাউন্ট সংরক্ষণ করতে ব্যর্থ হয়েছে।");
        }
        return redirect()->back()
                         ->with("success", "অ্যাকাউন্ট সফলভাবে সংরক্ষণ করা হয়েছে।");
    }

    public function passwordUpdate(Request $request, $id){
        // $validateData = $request->validated();

        $user = User::find($id);
        if(!$user){
            return redirect()->back()
                            ->with("error", "দুঃখিত! নির্দিষ্ট অ্যাকাউন্টটি খুঁজে পাওয়া যায়নি।");
        }

        $user->update([
            "password" => Hash::make('password'),
        ]);

        return redirect()->back()
                         ->with("success", "অ্যাকাউন্ট সফলভাবে আপডেট করা হয়েছে।");
    }
}
