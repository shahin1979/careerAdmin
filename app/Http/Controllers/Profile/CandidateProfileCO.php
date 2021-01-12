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
            ->with(['application'=>function($q){
                $q->where('eligible',true);
            }])
            ->doesntHave('eligible')
            ->with('education')->with('document')
            ->get();

        return view('profile.group-wise-candidate-index',compact('profiles','report'));
    }

    public function profile($id)
    {
        $profile = CandidatePersonal::query()->where('id',$id)->with('education')
            ->doesntHave('eligible')
            ->first();

        $age = $this->ageCalculator($profile->dob);
        return view('profile.view-details-profile-index',compact('profile','age'));
    }

    public function eligible($id, Request $request)
    {
        DB::beginTransaction();

        switch ($request['action'])
        {
            case 'approve':

                try {
                    $profile = CandidatePersonal::query()->where('id',$id)->with('education')->first();

                    $age = $this->ageCalculator($profile->dob);

                    if($profile->dob < '1991-01-10')
                    {
                        return redirect()->back()->withErrors(['error' => 'Applicants age is greater than 30']);
                    }

                    foreach ($profile->education as $row)
                    {
                        //Check SSC Result
                        if($row->exam_serial == 1 and $row->result_type == 'G' and $row->result < 4.00)
                        {
                            return redirect()->back()->withErrors(['error' => 'Applicant SSC result is below the requirements']);
                        }
                        if($row->exam_serial == 1 and $row->result_type == 'C' and $row->result > 1.00)
                        {
                            return redirect()->back()->withErrors(['error' => 'Applicant SSC result is below the requirements']);
//                            return response()->json(['error' => 'Applicant SSC result is below the requirements'], 404);
                        }

                        //Check HSC Result

                        if($row->exam_serial == 2 and $row->result_type == 'G' and $row->result < 4.00)
                        {
                            return redirect()->back()->withErrors(['error' => 'Applicant HSC result is below the requirements']);
//                            return response()->json(['error' => 'Applicant HSC result is below the requirements'], 404);
                        }
                        if($row->exam_serial == 2 and $row->result_type == 'C' and $row->result > 1.00)
                        {
                            return redirect()->back()->withErrors(['error' => 'Applicant HSC result is below the requirements']);
//                            return response()->json(['error' => 'Applicant HSC result is below the requirements'], 404);
                        }
                    }

                    EligibleCandidate::query()->insert([
                        'candidate_id'=>$profile->id,
                        'job_id'=>1,
                        'eligible'=>true,
                        'remarks'=>$request->filled('remarks') ? $request['remarks'] : 'Eligible',
                        'verified_by'=>Auth::id(),
                        'verified_date'=>Carbon::now()
                    ]);

                }catch (\Exception $e)
                {
                    DB::rollBack();
                    $error = $e->getMessage();
                    return redirect()->back()->withErrors(['error' => $error]);
                }
                DB::commit();
                break;

            case 'reject':

                $request->validate([
                    'remarks' => 'required',
                ],
                    [
                        'remarks.required' => 'Please specify the reason of rejection',
                    ]);

                try {
                    $profile = CandidatePersonal::query()->where('id',$id)->first();

                    EligibleCandidate::query()->insert([
                        'candidate_id'=>$profile->id,
                        'job_id'=>1,
                        'eligible'=>false,
                        'remarks'=>$request->filled('remarks') ? $request['remarks'] : 'Un Qualified',
                        'verified_by'=>Auth::id(),
                        'verified_date'=>Carbon::now()
                    ]);

                }catch (\Exception $e)
                {
                    DB::rollBack();
                    $error = $e->getMessage();
                    return redirect()->back()->withErrors(['error' => $error]);
                }
                DB::commit();
                break;

            default:
                break;
        }

        return $this->viewGroupIndex($profile->pm_district_id, $profile->pm_police_station_id);

//        return response()->json(['success' => 'Candidate '.$profile->name.' marked as Eligible'], 200);

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
