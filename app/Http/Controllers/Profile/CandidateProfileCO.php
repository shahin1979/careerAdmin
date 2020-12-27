<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use App\Models\Bangladesh\District;
use App\Models\Bangladesh\PoliceStation;
use App\Models\Profile\CandidatePersonal;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
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
            ->whereHas('application',function (Builder $query) {
                $query->where('eligible', true);
            })
            ->with('education')->with('document')
            ->get();

        return view('profile.group-wise-candidate-index',compact('profiles','report'));
    }
}
