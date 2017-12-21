<?php

namespace App\Http\Controllers;

use App\Company;
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

    public function saveCandidate(){

    }

    public function inviteCandidate(){

    }

    public function viewCandidateCV($id){

    }


}
