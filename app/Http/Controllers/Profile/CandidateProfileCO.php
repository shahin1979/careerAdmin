<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CandidateProfileCO extends Controller
{
    public function index()
    {
        return view('profile.view-candidate-profile-index');
    }

//    public function getProfile()
//    {
//        $profiles = ::query()->where('bank_id',1);
//
//        return DataTables::of($branches)
//
//            ->addColumn('action', function ($branches) {
//                return '<div class="btn-group-sm" role="group" aria-label="Action Button">
//                    <button data-remote="edit/' . $branches->id . '" data-rowid="'. $branches->id . '"
//                        data-code="'. $branches->branch_code . '"
//                        data-name="'. $branches->branch_name . '"
//                        data-address="'. $branches->address . '"
//                        data-city="'. $branches->city . '"
//                        data-post="'. $branches->post_code . '"
//                        data-country="'. $branches->country . '"
//                        data-swift="'. $branches->swift_code . '"
//                        data-phone="'. $branches->phone_no . '"
//                        data-opening="'. $branches->opening_date . '"
//                        data-routing="'. $branches->routing_no . '"
//                        data-email="'. $branches->email . '"
//
//                        type="button" class="btn btn-sm btn-branch-edit btn-primary" ><i class="fa fa-edit" >Edit</i></button>
//                    </div>
//                    ';
//            })
//            ->rawColumns(['action'])
//            ->make(true);
//    }
}
