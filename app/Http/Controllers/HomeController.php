<?php

namespace App\Http\Controllers;
use App\CompanyInfo;
use App\JobRecommendation;
use App\JobSeekerJobPreference;
use Illuminate\Http\Request;
use App\JobSeekerGeneralInfo;
use App\Job;
use App\JobSeekerPriorityValue;
use Illuminate\Support\Collection;
use Auth;

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

    public function applyJob(){

    }

    public function priorityValueCreate(){

        $priorityValue = JobSeekerPriorityValue::where('user_id',Auth::user()->id)->first();
        if($priorityValue){
            return view('jobseekerPriorityValueEdit',['priorityValue' => $priorityValue]);
        }
        return view('jobseekerPriorityValueCreate');
    }

    public function priorityValueStore(Request $request){
        $this->validate($request, [
            'contract_type_weight' => 'required|integer',
            'organization_weight' => 'required|integer',
            'job_location_weight' => 'required|integer',
            'salary_weight' => 'required|integer',
            'skill_wishlist_weight' => 'required|integer',
        ]);

        $priorityValue = new JobSeekerPriorityValue();
        $priorityValue->user_id = Auth::user()->id;

        $priorityValue->contract_type_weight = $request->contract_type_weight;
        $priorityValue->organization_weight = $request->organization_weight;
        $priorityValue->job_location_weight = $request->job_location_weight;
        $priorityValue->salary_weight = $request->salary_weight;
        $priorityValue->skill_wishlist_weight = $request->skill_wishlist_weight;

        $priorityValue->save();

        $notification = array(
            'message' => 'Priority Value Saved successfully. See the recommended jobs',
            'alert-type' => 'success'
        );

        return redirect()->route('jobRecommendation')->with($notification);
    }

    public function priorityValueUpdate(Request $request, $id){
        $this->validate($request, [
            'contract_type_weight' => 'required|integer',
            'organization_weight' => 'required|integer',
            'job_location_weight' => 'required|integer',
            'salary_weight' => 'required|integer',
            'skill_wishlist_weight' => 'required|integer',
        ]);

        $priorityValue = JobSeekerPriorityValue::find($id);
        $priorityValue->contract_type_weight = $request->input('contract_type_weight');
        $priorityValue->organization_weight = $request->input('organization_weight');
        $priorityValue->job_location_weight = $request->input('job_location_weight');
        $priorityValue->salary_weight = $request->input('salary_weight');
        $priorityValue->skill_wishlist_weight = $request->input('skill_wishlist_weight');
        $priorityValue->save();

        $notification = array(
            'message' => 'Priority Value Updated successfully. See the recommended jobs',
            'alert-type' => 'success'
        );
        return redirect()->route('jobRecommendation')->with($notification);
    }

    public function jobRecommendation(){
        $rank = 0;
        $user_id = Auth::user()->id;
        $priorityValue = JobSeekerPriorityValue::where('user_id',$user_id)->first();
        $jobs = Job::where('isAvailable',1)->get();
        $jobPreference = JobSeekerJobPreference::where('user_id', $user_id)->first();

        $previousRecommendations = JobRecommendation::where('user_id',$user_id)->get();
        if(count($previousRecommendations) > 0){
            foreach ($previousRecommendations as $previousRecommendation)
            $previousRecommendation->delete();
        }

        foreach($jobs as $job) {
            foreach ($jobPreference->contract_types as $contract_type) {
                if ($job->contract_type == $contract_type) {
                    $rank = $rank + $priorityValue->contract_type_weight;
                    break;
                }
            }
            foreach ($jobPreference->organizations as $organization)
            {
                if((CompanyInfo::where('id',$job->company_id)->first())->company_type
                    == $organization){
                    $rank = $rank + $priorityValue->organization_weight;
                }
            }
            foreach ($jobPreference->locations as $location){
                if($job->job_location == $location){
                    $rank = $rank + $priorityValue->job_location_weight;
                    break;
                }
            }
            if($job->isNegotiable){
                $rank = $rank + $priorityValue->salary_weight;
            }
            elseif ($jobPreference->isNegotiable){
                $rank = $rank + $priorityValue->salary_weight;
            }
            elseif ($jobPreference->minimum_compensation >= $job->salary_max){
                $rank = $rank + $priorityValue->salary_weight;
            }
            elseif ($jobPreference->minimum_compensation >= $job->salary_min){
                $rank = $rank + $priorityValue->salary_weight;
            }

            if($job->isNegotiable){
                $rank = $rank + $priorityValue->salary_weight;
            }

            foreach ($jobPreference->skill_wishlist as $skill_wishlist){
                foreach ($job->skill as $skill){
                    $count = 0;
                    if(strtolower($skill_wishlist) == strtolower($skill)){
                        $count++;
                    }
                }

            }
            $rank = $rank + ($priorityValue->skill_wishlist)*($count/(count($job->skill)));

            $rank = $rank/50;
            $jobRecommendation = new JobRecommendation;
            $jobRecommendation->user_id = $user_id;
            $jobRecommendation->job_id = $job->id;
            $jobRecommendation->rank = $rank;
            $jobRecommendation->save();

        }

        return redirect()->route('recommendedJobs.show');

    }

    public function recommendedJobsshow(){
        $user_id = Auth::user()->id;
        $recommendedJobsIds = JobRecommendation::where('user_id',$user_id)->orderBy('rank', 'DESC')->limit(2)->get();
        if(count($recommendedJobsIds) < 1){
            $notification = array(
                'message' => 'No recommended jobs for you. Try updating your profile',
                'alert-type' => 'info'
            );
            return redirect()->route('home')->with($notification);
        }
        return view('recommendedJobs',['recommendedJobsIds' => $recommendedJobsIds]);
    }
}
