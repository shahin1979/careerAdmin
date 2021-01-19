<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Bangladesh\District;
use App\Models\Bangladesh\PoliceStation;
use App\Models\Education\Subject;
use App\Models\Education\University;
use App\Models\Profile\CandidatePersonal;
use Illuminate\Http\Request;

class ShortListCandidateCO extends Controller
{
    public function index(Request $request)
    {
        $districts = District::query()->pluck('name','id');
        $thanas = PoliceStation::query()->pluck('name','id');
        $universities = University::query()->pluck('name','id');
        $subjects = Subject::query()->pluck('name','id');
        $users = Admin::query()->whereNotIn('id',[1,2,3,5]) ->pluck('name','id');

        if(isset($request['search_id']))
        {

            $params = null;

//            $query = CandidatePersonal::query()->where('status',true)
//            ->whereHas('eligible',function ($q){
//                $q->where('eligible',true);
//            });

            $query = CandidatePersonal::query()->where('status',true)
                ->whereHas('eligible');


            if($request->filled('verified_by'))
            {
                $user_id = $request['verified_by'];
                $query->whereHas('eligible',function ($q) use ($user_id){
                    $q->where('verified_by',$user_id);
                });
            }

            if($request->filled('verified_as'))
            {
                $status = $request['verified_as'];
                $query->whereHas('eligible',function ($q) use ($status){
                    $q->where('eligible',$status);
                });
            }


            if($request->filled('name'))
            {
                $query->where('name','LIKE','%'.$request['name'].'%');
            }

            if($request->filled('mobile'))
            {
                $query->where('mobile','LIKE','%'.$request['mobile'].'%');
            }

            if($request->filled('pm_district_id'))
            {
                $query->where('pm_district_id', $request['pm_district_id']);
                $params['district'] = District::query()->where('id',$request['pm_district_id'])->first()->name;
            }

            if($request->filled('pm_police_station_id'))
            {
                $query->where('pm_police_station_id', $request['pm_police_station_id']);
                $params['thana'] = PoliceStation::query()->where('id',$request['pm_police_station_id'])->first()->name;
            }

            if($request->filled('graduation_uni_id'))
            {
                $guni_id = $request['graduation_uni_id'];
                $query->whereHas('education',function ($q) use ($guni_id){
                    $q->where('uni_board_id',$guni_id)
                        ->where('exam_serial',3);
                });

                $params['graduation_varsity'] = University::query()->where('id',$request['graduation_uni_id'])->first()->name;
            }

//            dd($request['graduation_subject_id']);

            if($request->filled('graduation_subject_id'))
            {
                $gsub_id = $request['graduation_subject_id'];
                $query->whereHas('education',function ($q) use ($gsub_id){
                    $q->whereIn('subject_id',[implode($gsub_id,',')])
                        ->where('exam_serial',3);
                });

//                dd(implode($gsub_id,','));

//                $subjects = Subject::query()->whereIn('id',[$gsub_id])->get();
//
//                dd($subjects);
//
//                $params['subjects'] = $subjects->map(function ($name){
//                    return $name->name.',';
//                });
            }

//            dd($params);


            if($request->filled('post_graduation_uni_id'))
            {
                $pguni_id = $request['post_graduation_uni_id'];
                $query->whereHas('education',function ($q) use ($pguni_id){
                    $q->where('uni_board_id',$pguni_id)
                        ->where('exam_serial',4);
                });
            }

            if($request->filled('post_graduation_subject_id'))
            {
                $pgsub_id = $request['post_graduation_subject_id'];
                $query->whereHas('education',function ($q) use ($pgsub_id){
                    $q->where('subject_id',$pgsub_id)
                        ->where('exam_serial',4);
                });
            }

            if($request->filled('grade_point_ssc_from'))
            {
                $ssc_result = $request['grade_point_ssc_from'];
                $query->whereHas('education',function ($q) use ($ssc_result){
                    $q->where('result','>=',$ssc_result)
                        ->where('exam_serial',1);
                });
            }


            if($request->filled('grade_point_hsc_from'))
            {
                $hsc_result = $request['grade_point_hsc_from'];
                $query->whereHas('education',function ($q) use ($hsc_result){
                    $q->where('result','>=',$hsc_result)
                        ->where('exam_serial',2);
                });
            }


            if($request->filled('grade_point_graduation_from'))
            {
                $gd_result = $request['grade_point_graduation_from'];
                $query->whereHas('education',function ($q) use ($gd_result){
                    $q->where('result','>=',$gd_result)
                        ->where('exam_serial',3);
                });
            }

            if($request->filled('grade_point_pg_from'))
            {
                $pg_result = $request['grade_point_pg_from'];
                $query->whereHas('education',function ($q) use ($pg_result){
                    $q->where('result','>=',$pg_result)
                        ->where('exam_serial',4);
                });
            }

            $report = $query->get();

            return view('profile.short-list-candidate-index',compact('report'));
        }
//        return view('profile.test');
//
        return view('profile.short-list-candidate-index',compact('districts','thanas','universities','subjects','users'));
    }

    public function ageCalculator($dob){

        if(!empty($dob)){
            $birthdate = new DateTime($dob);
            $today   = new DateTime('2021-01-10');
            $age = $birthdate->diff($today)->y;
            return $age;
        }else{
            return 0;
        }
    }
}
