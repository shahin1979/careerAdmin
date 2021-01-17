<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use App\Models\Profile\CandidateAppliedJob;
use App\Models\Profile\CandidatePersonal;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class EligibleCandidatesCO extends Controller
{
    public function index()
    {
        ini_set('xdebug.max_nesting_level', 15000);
        $eligible = CandidatePersonal::query()->whereHas('eligible',function ($q){
            $q->where('eligible',true);
        })
            ->with('eligible')
            ->paginate(10);

//        dd($eligible->count());

        return view('profile.eligible-candidates-index',compact('eligible'));
    }

    public function getEligible()
    {
        $eligible = CandidatePersonal::query()->whereHas('eligible',function ($q){
            $q->where('eligible',true);
        })->with('eligible','education','pm_district','pm_thana')->select('candidate_personals.*');

        return DataTables::of($eligible)

//            ->addColumn('education', function ($eligible){
//                 foreach($eligible->education as $ed)
//                        $ed->examination->exam_name .':'. $ed->result. 'Out of'. $ed->total_cgpa .'<br/>'
//                                        endforeach
//            })

            ->addColumn('education', function ($eligible) {
                return $eligible->education->map(function($items) {
                    return $items->examination->exam_name.' : '. $items->result. ' Out of '. $items->total_cgpa;
                })->implode('<br>');
            })

            ->addColumn('address', function ($eligible) {
                return $eligible->pm_address.'<br/> Post Office : '.$eligible->pm_post_office. '<br/> Thana : '.$eligible->pm_thana->name;
            })

            ->addColumn('action', function ($eligible) {
                return '<div class="btn-group-sm" role="group" aria-label="Action Button">
                    <button data-remote="details/' . $eligible->id . '" data-rowid="'. $eligible->id . '"
                        type="button" class="btn btn-sm btn-details btn-primary" >Details</button>
                    </div>
                    ';
            })
            ->rawColumns(['action','education','address'])
            ->make(true);
    }

    public function details($id)
    {
        $profile = CandidatePersonal::query()->where('id',$id)
            ->with('eligible','education','pm_district','pm_thana','religion')->first();
        $age = $this->ageCalculator($profile->dob);

        return view('profile.candidate-details-index',compact('profile','age'));

    }

    public function getRejected()
    {
        $eligible = CandidatePersonal::query()->whereHas('eligible',function ($q){
            $q->where('eligible',false);
        })->with('eligible','education','pm_district','pm_thana')->select('candidate_personals.*');

        return DataTables::of($eligible)

            ->addColumn('education', function ($eligible) {
                return $eligible->education->map(function($items) {
                    return $items->examination->exam_name.' : '. $items->result. ' Out of '. $items->total_cgpa;
                })->implode('<br>');
            })

            ->addColumn('address', function ($eligible) {
                return $eligible->pm_address.'<br/> Post Office : '.$eligible->pm_post_office. '<br/> Thana : '.$eligible->pm_thana->name;
            })

            ->addColumn('action', function ($eligible) {
                return '<div class="btn-group-sm" role="group" aria-label="Action Button">
                    <button data-remote="details/' . $eligible->id . '" data-rowid="'. $eligible->id . '"
                        type="button" class="btn btn-sm btn-details btn-primary" >Details</button>
                    </div>
                    ';
            })
            ->rawColumns(['action','education','address'])
            ->make(true);
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

    public function ageCalculator($dob){

//        dd($dob);
        if(!empty($dob)){
            $birthdate = new \DateTime($dob);
            $today   = new \DateTime('2021-01-10');
            $diff = $birthdate->diff($today);
            $age = $diff->y.'Years '. $diff->m.'Month '.$diff->d.'Days';
            return $age;
        }else{
            return 0;
        }
    }
}
