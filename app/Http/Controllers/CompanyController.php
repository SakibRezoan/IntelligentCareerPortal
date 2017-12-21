<?php

namespace App\Http\Controllers;

use App\CandidateRecommendation;
use App\Company;
use App\CompanyPriorityValue;
use App\Job;
use App\JobSeekerEducation;
use App\JobSeekerGeneralInfo;
use App\JobSeekerJobPreference;
use App\JobSeekerTeam;
use App\JobSeekerWorkExperience;
use App\User;
use Illuminate\Http\Request;
use App\CompanyInfo;
use Auth;
use Illuminate\Support\Collection;
use Storage;

class CompanyController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:company');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = Auth::user()->id;
        $companyInfo = CompanyInfo::where('company_id', $id)->first();
        if($companyInfo){
            return view('company',['info' => $companyInfo]);
        }
        return view('company.create');
    }

    public function requestForVerificationCreate(){
        return view('company.requestForVerification');
    }

    public function requestForVerificationStore(Request $request){
        $this->validate($request, [
            'document' => 'required',
        ]);

        $id = Auth::user()->id;
        $company = Company::where('id',$id)->first();
        if ($request->file('document')) {

            Storage::putFile('public/images', $request->file('document'));

            $request->file('document')->store('public/images');
            $document = $company->document;
            if ($document){
                unlink(storage_path('app/public/images/'.$document));
            }
            $file_name = $request->file('document')->hashName();
            $company->document = $file_name;
            $company->save();
            $notification = array(
                'message' => 'Verification Request Sent Successfully  !',
                'alert-type' => 'success'
            );
            return redirect()->route('company.dashboard')->with($notification);
        }
        $notification = array(
            'message' => 'Upload Valid Document !',
            'alert-type' => 'danger'
        );
        return redirect()->route('company.requestForVerification')->with($notification);


    }


    public function searchCandidateList(Request $request){
        $keywords = explode(' ',$request->keyword);
        $first = true;
        foreach ($keywords as $keyword){
            if($first){
                $db_query = User::where('name', 'LIKE', '%'.$keyword.'%')
                    ->orWhere('email', 'LIKE','%'.$keyword.'%');
                $first = false;
            }else{
                $db_query = $db_query->orWhere('name', 'LIKE', '%'.$keyword.'%')
                    ->orWhere('email', 'LIKE','%'.$keyword.'%');
            }

        }

        $users =  $db_query ->get();

        $second = true;

        foreach ($keywords as $keyword){
            if($second){
                $db_query = JobSeekerGeneralInfo::where('first_name', 'LIKE', '%'.$keyword.'%')
                    ->orWhere('last_name', 'LIKE','%'.$keyword.'%')
                    ->orWhere('address', 'LIKE','%'.$keyword.'%');
                $second = false;
            }else{
                $db_query = $db_query->orWhere('first_name', 'LIKE', '%'.$keyword.'%')
                    ->orWhere('last_name', 'LIKE','%'.$keyword.'%')
                    ->orWhere('address', 'LIKE','%'.$keyword.'%');
            }

        }

        $candidatesInfo =  $db_query ->get();

        $third = true;

        foreach ($keywords as $keyword){
            if($third){
                $db_query = JobSeekerEducation::where('degree', 'LIKE', '%'.$keyword.'%')
                    ->orWhere('institute', 'LIKE','%'.$keyword.'%')
                    ->orWhere('group', 'LIKE','%'.$keyword.'%');
                $third = false;
            }else{
                $db_query = $db_query->orWhere('degree', 'LIKE', '%'.$keyword.'%')
                    ->orWhere('institute', 'LIKE','%'.$keyword.'%')
                    ->orWhere('group', 'LIKE','%'.$keyword.'%');
            }

        }

        $candidatesEducation =  $db_query ->get();

        $fourth = true;
        foreach ($keywords as $keyword){
            if($fourth){
                $db_query = JobSeekerJobPreference::where('skill_wishlist', 'LIKE', '%'.$keyword.'%');
                $fourth = false;
            }else{
                $db_query = $db_query->orWhere('skill_wishlist', 'LIKE', '%'.$keyword.'%');
            }

        }

        $candidatesJobPreference =  $db_query ->get();

        $fifth = true;

        foreach ($keywords as $keyword){
            if($fifth){
                $db_query = JobSeekerTeam::where('designation', 'LIKE', '%'.$keyword.'%');
                $fifth = false;
            }else{
                $db_query = $db_query->orWhere('designation', 'LIKE', '%'.$keyword.'%');
            }

        }

        $candidatesTeam =  $db_query ->get();

        $sixth = true;
        foreach ($keywords as $keyword){
            if($sixth){
                $db_query = JobSeekerWorkExperience::where('designation', 'LIKE', '%'.$keyword.'%')
                    ->orWhere('skill', 'LIKE','%'.$keyword.'%');
                $sixth = false;
            }else{
                $db_query = $db_query->orWhere('name', 'LIKE', '%'.$keyword.'%')
                    ->orWhere('email', 'LIKE','%'.$keyword.'%');
            }

        }

        $candidatesExperience =  $db_query ->get();

        if(count($users) > 0
            || count($candidatesInfo) > 0
            || count($candidatesEducation) > 0
            || count($candidatesJobPreference) > 0
            || count($candidatesTeam) > 0
            || count($candidatesExperience) > 0
        ){
            return view('company.searchCandidateList',[
                        'users' => $users,
                        'candidatesInfo' => $candidatesInfo,
                        'candidatesEducation' => $candidatesEducation,
                        'candidatesTeam' => $candidatesTeam,
                        'candidatesExperience' => $candidatesExperience,
                        'candidatesJobPreference' => $candidatesJobPreference,
                    ]);
        }
        $notification = array(
            'message' => 'Sorry !! No candidate is available with this keyword',
            'alert-type' => 'warning'
        );
        return redirect()->route('company.dashboard')->with($notification);
    }

    public function inviteCandidate(){

    }

    public function viewCandidateCV($id){

    }

    public function applyJob(){

    }

    public function priorityValueCreate(){

        $priorityValue = CompanyPriorityValue::where('company_id',Auth::user()->id)->first();
        if($priorityValue){
            return view('companyPriorityValueEdit',['priorityValue' => $priorityValue]);
        }
        return view('companyPriorityValueCreate');
    }

    public function priorityValueStore(Request $request){
        $this->validate($request, [
            'contract_type_weight' => 'required|integer',
            'position_weight' => 'required|integer',
            'salary_weight' => 'required|integer',
            'degree_weight' => 'required|integer',
            'skill_experience_weight' => 'required|integer',
        ]);

        $priorityValue = new CompanyPriorityValue;
        $priorityValue->company_id = Auth::user()->id;

        $priorityValue->contract_type_weight = $request->contract_type_weight;
        $priorityValue->position_weight = $request->position_weight;
        $priorityValue->salary_weight = $request->salary_weight;
        $priorityValue->degree_weight = $request->degree_weight;
        $priorityValue->skill_experience_weight = $request->skill_experience_weight;

        $priorityValue->save();

        $notification = array(
            'message' => 'Priority Value Saved successfully. See the recommended candidates',
            'alert-type' => 'success'
        );

        return redirect()->route('candidateRecommendation')->with($notification);
    }

    public function priorityValueUpdate(Request $request, $id){
        $this->validate($request, [
            'contract_type_weight' => 'required|integer',
            'position_weight' => 'required|integer',
            'salary_weight' => 'required|integer',
            'degree_weight' => 'required|integer',
            'skill_experience_weight' => 'required|integer',
        ]);

        $priorityValue = CompanyPriorityValue::find($id);
        $priorityValue->contract_type_weight = $request->input('contract_type_weight');
        $priorityValue->position_weight = $request->input('position_weight');
        $priorityValue->salary_weight = $request->input('salary_weight');
        $priorityValue->degree_weight = $request->input('degree_weight');
        $priorityValue->skill_experience_weight = $request->input('skill_experience_weight');
        $priorityValue->save();

        $notification = array(
            'message' => 'Priority Value Updated successfully. See the recommended jobs',
            'alert-type' => 'success'
        );
        return redirect()->route('candidateRecommendation')->with($notification);
    }

    public function candidateRecommendation(){
        $rank = 0;
        $company_id = Auth::user()->id;
        $priorityValue = CompanyPriorityValue::where('company_id',$company_id)->first();
        $jobs = Job::where('company_id',$company_id)->get();
        if(count($jobs) < 1){
            $notification = array(
                'message' => 'Post a job to get recommended candidates',
                'alert-type' => 'info'
            );
            return redirect()->route('jobs.view')->with($notification);
        }
        $jobseekers = User::where('status',1)->get();

        if(count($jobseekers) < 1){
            $notification = array(
                'message' => 'No candidates available in the system',
                'alert-type' => 'info'
            );
            return redirect()->route('jobs.view')->with($notification);
        }

        foreach ($jobs as $job){
            $previousRecommendations = CandidateRecommendation::where('job_id',$job->id)->get();
            if(count($previousRecommendations) > 0){
                foreach ($previousRecommendations as $previousRecommendation)
                    $previousRecommendation->delete();
            }
        }

        foreach($jobs as $job) {
            foreach ($jobseekers as $jobseeker) {

                $jobPreferences = JobSeekerJobPreference::where('user_id', $jobseeker->id)->get();

                foreach ($jobPreferences as $jobPreference) {
                    if ($job->contract_type == $jobPreference) {
                        $rank = $rank + $priorityValue->contract_type_weight;
                        break;
                    }
                }

                $workExperiences = JobSeekerWorkExperience::where('user_id', $jobseeker->id)->get();

                foreach ($workExperiences as $workExperience) {
                    if ($job->position == $workExperience->designation) {
                        $rank = $rank + $priorityValue->position_weight;
                    }
                }
                if ($job->isNegotiable) {
                    $rank = $rank + $priorityValue->salary_weight;
                }
                elseif ($jobPreference->isNegotiable) {
                    $rank = $rank + $priorityValue->salary_weight;
                }
                elseif ($jobPreference->minimum_compensation >= $job->salary_max) {
                    $rank = $rank + $priorityValue->salary_weight;
                }
                elseif ($jobPreference->minimum_compensation >= $job->salary_min) {
                    $rank = $rank + $priorityValue->salary_weight;
                }

                if ($job->isNegotiable) {
                    $rank = $rank + $priorityValue->salary_weight;
                }

                $educations = JobSeekerEducation::where('user_id', $jobseeker->id)->get();

                foreach ($educations as $education) {
                    if ($job->required_degree == $education->degree) {
                        $rank = $rank + $priorityValue->degree_weight;
                        break;
                    }
                }

                for ($i = 0; $i< count($job->skill); $i++) {
                    for($j = 0; $j< count($workExperience->skill); $j++) {

                        if($job->skill[$i] == $workExperience->skill[$j] && $job->experience[$i] <= $workExperience->experience[$j] ){
                            $rank = $rank + $priorityValue->skill_experience_weight;
                        }
                        elseif ($job->skill[$i] == $workExperience->skill[$j]){
                            $rank = $rank + ($priorityValue->skill_experience_weight)/2;
                        }

                    }
                }

                $rank = $rank / 100;
                $candidateRecommendation = new CandidateRecommendation;
                $candidateRecommendation->user_id = $jobseeker->id;
                $candidateRecommendation->job_id = $job->id;
                $candidateRecommendation->rank = $rank;
                $candidateRecommendation->save();
            }

        }

        return redirect()->route('recommendedCandidates.show');

    }

    public function recommendedCandidatesshow(){
        $company_id = Auth::user()->id;

        $jobs = Job::where('company_id',$company_id)->get();
        foreach ($jobs as $job){
            $db_query = CandidateRecommendation::where('job_id',$job->id)->orderBy('rank', 'DESC')->limit(4);
        }
        $candidates =  $db_query ->get();
        return view('company.recommendedCandidates',['recommendedCandidates' => $candidates]);
    }


}
