<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\JobSeekerGeneralInfo;
use App\Job;
use Illuminate\Support\Collection;

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
        $jobseeker_general_info = JobSeekerGeneralInfo::where('user_id', $id)->first();
        if($jobseeker_general_info){
            return view('home',['info' => $jobseeker_general_info]);
        }
        return view('jobseekerGeneral_Info.create');
    }

    public function searchJobList(Request $request){
        $keywords = explode(' ',$request->keyword);
        $first = true;
        foreach ($keywords as $keyword){
            if($first){
                $db_query = Job::where('job_title', 'LIKE', '%'.$keyword.'%')
                            ->orWhere('position', 'LIKE','%'.$keyword.'%')
                            ->orWhere('job_location', 'LIKE','%'.$keyword.'%')
                            ->orWhere('contract_type', 'LIKE','%'.$keyword.'%')
                            ->orWhere('required_degree', 'LIKE','%'.$keyword.'%')
                            ->orWhere('skill', 'LIKE','%'.$keyword.'%')
                            ->orWhere('salary_min', 'LIKE','%'.$keyword.'%')
                            ->orWhere('salary_max', 'LIKE','%'.$keyword.'%')
                            ->orWhere('required_degree', 'LIKE','%'.$keyword.'%');
                $first = false;
            }else{
                $db_query = $db_query->orWhere('job_title', 'LIKE', '%'.$keyword.'%')
                    ->orWhere('position', 'LIKE','%'.$keyword.'%')
                    ->orWhere('job_location', 'LIKE','%'.$keyword.'%')
                    ->orWhere('contract_type', 'LIKE','%'.$keyword.'%')
                    ->orWhere('required_degree', 'LIKE','%'.$keyword.'%')
                    ->orWhere('skill', 'LIKE','%'.$keyword.'%')
                    ->orWhere('salary_min', 'LIKE','%'.$keyword.'%')
                    ->orWhere('salary_max', 'LIKE','%'.$keyword.'%')
                    ->orWhere('required_degree', 'LIKE','%'.$keyword.'%');
            }

        }

        $jobs =  new Collection($db_query ->get()->toArray());
        if(count($jobs) > 0){

            return view('searchJobList',['jobs' => $jobs]);
        }
        $notification = array(
            'message' => 'Sorry !! No job is available with this keyword',
            'alert-type' => 'warning'
        );
        return redirect()->route('home')->with($notification);
    }

    public function saveJob(){

    }

    public function applyJob(){

    }
}
