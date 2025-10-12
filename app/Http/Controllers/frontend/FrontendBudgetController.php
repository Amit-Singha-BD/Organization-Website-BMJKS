<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Finance;

class FrontendBudgetController extends Controller {

    public function budget(){
        $budgets = Finance::orderBy('date', 'desc')->paginate(10);
        return view('frontend.pages.budget', compact('budgets'));
    }

    public function budgetDownload($fileName){
        $file = public_path('finance/' . $fileName);

        if(file_exists($file)) {
            return response()->download($file);
        }
        else{
            return redirect()->back()
                             ->with('error', 'দুঃখিত! নির্দিষ্ট হিসাবটি খুঁজে পাওয়া যায়নি।');
        }
    }
}
