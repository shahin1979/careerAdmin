<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use App\Models\Profile\CandidatePersonal;
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
}
