<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MonthlyContributionController extends Controller {
    public function monthlyContribution(){
        return view('Backend.Pages.Monthly-Contribution');
    }

    public function monthlyContributionList(){
        return view('Backend.Pages.Monthly-Contribution-List');
    }
}
