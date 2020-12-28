<?php

namespace App\Http\Controllers;

use App\Models\Profile\CandidateAppliedJob;
use App\Models\Profile\CandidatePersonal;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Builder;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
//     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $users= User::query()->count();
        $profiles = CandidatePersonal::query()->count();
        $applications = CandidateAppliedJob::query()->count();

//        $applied = CandidatePersonal::query()->groupBy('pm_district_id','pm_police_station_id')

        $applied = CandidatePersonal::query()
            ->select('pm_district_id', 'pm_police_station_id',DB::raw('count(*) as total'))
            ->where('candidate_personals.status',true)
            ->groupBy('pm_district_id','pm_police_station_id')
            ->orderBy('pm_district_id','ASC')
//            ->whereHas('application',function (Builder $query) {
//                $query->where('eligible', true);
//            })
            ->get();

        if($request->ajax())
        {
            $input = $request->get('query');

            $table = CandidatePersonal::query()
                ->select('pm_district_id', 'pm_police_station_id',DB::raw('count(*) as total'))
//                ->where('candidate_personals.status',true)
                ->whereHas('application',function (Builder $query) {
                    $query->where('eligible', true);
                })
                ->whereHas('pm_district',function (Builder $query) use($input) {
                    $query->where('name','LIKE', '%'.$input.'%');
                })->with('pm_district')
                ->orWhereHas('pm_thana',function (Builder $query) use($input) {
                    $query->where('name','LIKE', '%'.$input.'%');
                })->with('pm_thana')
                ->groupBy('pm_district_id','pm_police_station_id')
                ->orderBy('pm_district_id','ASC')
                ->get();

            return response()->json($table);
        }

//        return view('home',compact('users','profiles','applications'));

        return view('dashboard',compact('users','profiles','applications','applied'));
    }
}
