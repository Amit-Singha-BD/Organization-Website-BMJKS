<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\ChadaCollection;
use Illuminate\Http\Request;

class MonthlyContributionController extends Controller {
    public function monthlyContribution(){
        $contributions = ChadaCollection::with('committee')
                       ->selectRaw('committee_id,
                            SUM(CASE WHEN payment_status = "paid" THEN amount ELSE 0 END) as total_paid_amount,
                            SUM(CASE WHEN payment_status IN ("not_paid","pending") THEN amount ELSE 0 END) as total_not_paid_amount,
                            COUNT(CASE WHEN payment_status = "paid" THEN 1 END) as total_paid_count,
                            COUNT(CASE WHEN payment_status IN ("not_paid","pending") THEN 1 END) as total_not_paid_count')
                       ->groupBy('committee_id')
                       ->get();

        return view('Backend.Pages.Monthly-Contribution', compact('contributions'));
    }


    public function monthlyContributionList($committeeId){
        $contributionList = ChadaCollection::with('chadaName', 'committee')
                          ->where('committee_id', $committeeId)
                          ->get();

        return view('Backend.Pages.Monthly-Contribution-List', compact('contributionList'));
    }

}
