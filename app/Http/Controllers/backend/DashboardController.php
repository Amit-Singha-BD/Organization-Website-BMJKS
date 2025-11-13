<?php

namespace App\Http\Controllers\backend;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Notice;
use App\Models\PersonType;
use App\Models\PersonTag;
use App\Models\CommitteeYear;
use App\Models\CommitteeMember;
use App\Models\ViewCount;
use App\Models\ChadaName;
use App\Models\ChadaCollection;
use App\Models\ChadaSetting;

class DashboardController extends Controller {

    public function __construct()
    {
        $month = date('m');
        $year = date('Y');

        $english = ['0','1','2','3','4','5','6','7','8','9'];
        $bangla  = ['০','১','২','৩','৪','৫','৬','৭','৮','৯'];
        $year_bn = str_replace($english, $bangla, $year);

        $banglaMonths = [
            '01' => 'জানুয়ারি',
            '02' => 'ফেব্রুয়ারি',
            '03' => 'মার্চ',
            '04' => 'এপ্রিল',
            '05' => 'মে',
            '06' => 'জুন',
            '07' => 'জুলাই',
            '08' => 'আগস্ট',
            '09' => 'সেপ্টেম্বর',
            '10' => 'অক্টোবর',
            '11' => 'নভেম্বর',
            '12' => 'ডিসেম্বর',
        ];

        $month_name = $banglaMonths[$month] . ' ' . $year_bn;

        $chada_name_data = ChadaName::whereYear('date', $year)
            ->whereMonth('date', $month)
            ->first();

        if (!$chada_name_data) {

            \DB::transaction(function () use ($month_name, $year, $month) {
                $chada_data = ChadaName::create([
                    'chada_name' => $month_name,
                    'date' => date('Y-m-d'),
                ]);

                $chada_amount = ChadaSetting::first();

                ChadaCollection::create([
                    'chada_names_id' => $chada_data->id,
                    'committee_id' => 1,
                    'amount' => $chada_amount->central_chada_amount,
                ]);

                for ($committee_id = 2; $committee_id <= 13; $committee_id++) {
                    ChadaCollection::create([
                        'chada_names_id' => $chada_data->id,
                        'committee_id' => $committee_id,
                        'amount' => $chada_amount->branch_chada_amount,
                    ]);
                }
            });
        }
    }

    public function Dashboard(){
        $notices = Notice::orderBy('id', 'desc')->take(5)->get();
        $title = 'Dashboard';

        $tags = PersonType::where('status', 'active')
            ->with(['people' => function ($query) {$query->where('member_aproved', 'yes')
                ->when(!in_array(Auth::user()->branch, ['99', '100']), 
                function ($query) {$query->where('gm_id', Auth::user()->branch);});
            }])
            ->get();


        $committees = CommitteeYear::where('status', 'active')->when(!in_array(Auth::user()->branch, ['1', '100']), 
            function ($query) {
            $query->where('committee_id', Auth::user()->branch);
            })->withCount('committee_members')->get();

        $total_active_member = $committees->sum('committee_members_count');
        
        $view_count = ViewCount::value('count');

        return view('Backend.Pages.Dashboard', compact('notices','title', 'tags', 'committees','total_active_member','view_count'));
    }
}
