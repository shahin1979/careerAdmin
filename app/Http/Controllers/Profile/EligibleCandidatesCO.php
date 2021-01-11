<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use App\Models\Profile\CandidateAppliedJob;
use App\Models\Profile\CandidatePersonal;
use Illuminate\Http\Request;

class EligibleCandidatesCO extends Controller
{
    public function index()
    {
        $eligible = CandidatePersonal::query()->whereHas('eligible',function ($q){
            $q->where('eligible',true);
        })
            ->with('eligible')
            ->get();
        return view('profile.eligible-candidates-index',compact('eligible'));
    }

    public function reject()
    {
        $rejects = CandidatePersonal::query()->whereHas('eligible',function ($q){
            $q->where('eligible',false);
        })
        ->with('eligible')
        ->get();

        return view('profile.rejected-candidates-index',compact('rejects'));
    }
}
