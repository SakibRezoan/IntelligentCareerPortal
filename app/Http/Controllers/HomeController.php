<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\JobseekerGeneralInfo;
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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = \Auth::user()->id;
        $jobseeker_general_info = JobseekerGeneralInfo::where('user_id', $id)->first();
        if($jobseeker_general_info){
            return view('home',['info' => $jobseeker_general_info]);
        }
        return view('jobseekerGeneral_Info.create');
    }
}