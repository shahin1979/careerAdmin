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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users= User::query()->count();
        $profiles = CandidatePersonal::query()->count();
        $applications = CandidateAppliedJob::query()->count();

//        $applied = CandidatePersonal::query()->groupBy('pm_district_id','pm_police_station_id')

        $applied = CandidatePersonal::query()
            ->select('pm_district_id', 'pm_police_station_id','gender',DB::raw('count(*) as total'))
            ->groupBy('pm_district_id','pm_police_station_id','gender')
            ->orderBy('pm_district_id','ASC')
            ->whereHas('application',function (Builder $query) {
                $query->where('status', true);
            })->get();

//        return view('home',compact('users','profiles','applications'));

        return view('dashboard',compact('users','profiles','applications','applied'));
    }
}
