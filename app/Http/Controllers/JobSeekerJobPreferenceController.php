<?php

namespace App\Http\Controllers;

use App\JobSeekerJobPreference;
use Illuminate\Http\Request;
use Auth;

class JobSeekerJobPreferenceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jobseekerJobPreference.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'contract_types' => 'required|array|',
            'contract_types.*'=> 'required|string',
            'organizations' => 'required|array|',
            'organizations.*'=> 'required|string',
            'locations' => 'required|array|',
            'locations.*'=> 'required|string',
            'environment'=> 'required|string|max:2000',
            'minimum_compensation' => 'integer',
            'isNegotiable' => 'boolean',
            'skill_wishlist' => 'array|',
            'skill_wishlist.*'=> 'string|max:255',
        ]);

        $jobseekerJobPreference = new JobSeekerJobPreference();

        $jobseekerJobPreference->user_id = Auth::user()->id;
        $jobseekerJobPreference->contract_types = $request->contract_types;
        $jobseekerJobPreference->organizations = $request->organizations;
        $jobseekerJobPreference->locations = $request->locations;
        $jobseekerJobPreference->environment = $request->environment;
        $jobseekerJobPreference->minimum_compensation = $request->minimum_compensation;
        $jobseekerJobPreference->isNegotiable = $request->isNegotiable;
        $jobseekerJobPreference->skill_wishlist = $request->skill_wishlist;

        $jobseekerJobPreference->save();

        $notification = array(
            'message' => 'Job Preference Details Stored Successfully  !',
            'alert-type' => 'success'
        );

        return redirect()->route('jobseekerJobPreference.show')->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $id = \Auth::user()->id;
        $jobseekerJobPreference = JobSeekerJobPreference::where('user_id', $id)->first();
        if($jobseekerJobPreference){
            return view('jobseekerJobPreference.show',['jobseekerJobPreference' => $jobseekerJobPreference]);
        }
        return view('jobseekerJobPreference.create');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jobseekerJobPreference = JobSeekerJobPreference::where('id', $id)->first();
        return view('jobseekerJobPreference.edit',['jobseekerJobPreference' => $jobseekerJobPreference]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'contract_types' => 'required|array|',
            'contract_types.*'=> 'required|string',
            'organizations' => 'required|array|',
            'organizations.*'=> 'required|string',
            'locations' => 'required|array|',
            'locations.*'=> 'required|string',
            'environment'=> 'required|string|max:2000',
            'minimum_compensation' => 'integer',
            'isNegotiable' => 'boolean',
            'skill_wishlist' => 'array|',
            'skill_wishlist.*'=> 'string|max:255',
        ]);

        $jobseekerJobPreference = JobSeekerJobPreference::find($id);

        $jobseekerJobPreference->contract_types = $request->input('contract_types');
        $jobseekerJobPreference->organizations = $request->input('organizations');
        $jobseekerJobPreference->locations = $request->input('locations');
        $jobseekerJobPreference->environment = $request->input('environment');
        $jobseekerJobPreference->minimum_compensation = $request->input('minimum_compensation');
        $jobseekerJobPreference->isNegotiable = $request->input('isNegotiable');
        $jobseekerJobPreference->skill_wishlist = $request->input('skill_wishlist');

        $jobseekerJobPreference->save();

        $notification = array(
            'message' => 'Job Preference Updated Successfully  !',
            'alert-type' => 'info'
        );

        return redirect()->route('jobseekerJobPreference.show')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jobseekerJobPreference = JobSeekerJobPreference::find($id);

        $jobseekerJobPreference->delete();

        $notification = array(
            'message' => 'Job Preference Deleted.!',
            'alert-type' => 'warning'
        );

        return redirect()->route('jobseekerJobPreference.show')->with($notification);
    }
}
