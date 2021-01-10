<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use App\Models\Bangladesh\District;
use App\Models\Bangladesh\PoliceStation;
use App\Models\Examination\EligibleCandidate;
use App\Models\Profile\CandidatePersonal;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;

class CandidateProfileCO extends Controller
{
    public function index()
    {
        return view('profile.candidate-profile-index');
    }

    public function getProfile()
    {
        $profiles = CandidatePersonal::query()->with('pm_district');

        return DataTables::of($profiles)

            ->addColumn('action', function ($profiles) {
                return '<div class="btn-group-sm" role="group" aria-label="Action Button">
                    <button data-remote="edit/' . $profiles->id . '" data-rowid="'. $profiles->id . '"
                        type="button" class="btn btn-sm btn-branch-edit btn-primary" >Details</button>
                    </div>
                    ';
            })
            ->rawColumns(['action'])
            ->make(true);
    }

    public function viewGroupIndex($district,$thana)
    {
        $pm_district = District::query()->find($district);
        $pm_thana = PoliceStation::query()->find($thana);

        $report=[];
        $report['district'] = $pm_district->name;
        $report['thana'] = $pm_thana->name;

        $profiles = CandidatePersonal::query()->where('pm_district_id',$district)
            ->where('pm_police_station_id',$thana)
//            ->whereHas('application',function (Builder $query) {
//                $query->where('eligible', true);
//            })
            ->with(['application'=>function($q){
                $q->where('eligible',true);
            }])
            ->with('education')->with('document')
            ->get();

        return view('profile.group-wise-candidate-index',compact('profiles','report'));
    }

    public function profile($id)
    {
        $profile = CandidatePersonal::query()->where('id',$id)->with('education')->first();
        $age = $this->ageCalculator($profile->dob);
        return view('profile.view-details-profile-index',compact('profile','age'));
    }

    public function eligible($id)
    {
        DB::beginTransaction();

        try {
            $profile = CandidatePersonal::query()->where('id',$id)->with('education')->first();

            $age = $this->ageCalculator($profile->dob);

            if($age > 30)
            {
                return response()->json(['error' => 'Applicants age is greater than 30'], 404);
            }

            foreach ($profile->education as $row)
            {
                if($row->exam_serial == 1 and $row->result_type == 'G' and $row->result < 4.00)
                {
                    return response()->json(['error' => 'Applicant SSC result is below the requirements'], 404);
                }
                if($row->exam_serial == 1 and $row->result_type == 'C' and $row->result > 1.00)
                {
                    return response()->json(['error' => 'Applicant SSC result is below the requirements'], 404);
                }


                if($row->exam_serial == 2 and $row->result_type == 'G' and $row->result < 4.00)
                {
                    return response()->json(['error' => 'Applicant HSC result is below the requirements'], 404);
                }
                if($row->exam_serial == 2 and $row->result_type == 'C' and $row->result > 1.00)
                {
                    return response()->json(['error' => 'Applicant HSC result is below the requirements'], 404);
                }

//                if($row->exam_serial == 3 and $row->result_type == 'G' and $row->result < 3.00)
//                {
//                    return response()->json(['error' => 'Applicant HSC result is below the requirements'], 404);
//                }
//                if($row->exam_serial == 2 and $row->result_type == 'C' and $row->result > 1.00)
//                {
//                    return response()->json(['error' => 'Applicant HSC result is below the requirements'], 404);
//                }

            }

            EligibleCandidate::query()->insert([
                'candidate_id'=>$profile->id,
                'job_id'=>1,
                'eligible'=>true,
                'remarks'=>'Eligible',
                'verified_by'=>Auth::id(),
                'verified_date'=>Carbon::now()
            ]);

        }catch (\Exception $e)
        {
            DB::rollBack();
            $error = $e->getMessage();
            return response()->json(['error' => $error], 404);
        }
        DB::commit();
        return response()->json(['success' => 'Candidate marked as Eligible'], 200);

    }

    public function ageCalculator($dob){

//        dd($dob);
        if(!empty($dob)){
            $birthdate = new \DateTime($dob);
            $today   = new \DateTime('2021-01-10');
            $age = $birthdate->diff($today)->y;
            return $age;
        }else{
            return 0;
        }
    }
}
