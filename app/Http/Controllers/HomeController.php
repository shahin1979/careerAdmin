<?php

namespace App\Http\Controllers;

use App\Models\Profile\CandidateAppliedJob;
use App\Models\Profile\CandidatePersonal;
use App\Models\User;
use Illuminate\Http\Request;

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

        return view('home',compact('users','profiles','applications'));

//        return view('dashboard',compact('users','profiles','applications'));
    }
}
