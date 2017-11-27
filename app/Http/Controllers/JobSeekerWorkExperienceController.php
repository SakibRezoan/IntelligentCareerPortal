<?php

namespace App\Http\Controllers;

use App\JobSeekerWorkExperience;
use Illuminate\Http\Request;
use Auth;;

class JobSeekerWorkExperienceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
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
        return view('jobseekerExperience.create');
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
            'company' => 'required|string|max:255',
            'designation' => 'required|string|max:255',
            'location' => 'required|string|max:1000',
            'skill' => 'required|array',
            'skill.*'=> 'required|string',
            'experience' => 'required|array',
            'experience.*'=> 'required|numeric',
        ]);

        $jobseekerExperience = new JobSeekerWorkExperience();

        $jobseekerExperience->user_id = Auth::user()->id;
        $jobseekerExperience->company = $request->company;
        $jobseekerExperience->designation = $request->designation;
        $jobseekerExperience->location = $request->location;
        $jobseekerExperience->skill = $request->skill;
        $jobseekerExperience->experience = $request->experience;

        $jobseekerExperience->save();

        $notification = array(
            'message' => 'Experience Details Stored Successfully  !',
            'alert-type' => 'success'
        );

        return redirect()->route('jobseekerExperience.list')->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function list()
    {
        $id = \Auth::user()->id;
        $jobseekerExperiences = JobSeekerWorkExperience::where('user_id', $id)->get();
        if(count($jobseekerExperiences)){
            return view('jobseekerExperience.view',['jobseekerExperiences' => $jobseekerExperiences]);
        }
        return view('jobseekerExperience.create');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jobseekerExperience = JobSeekerWorkExperience::where('id', $id)->first();
        return view('jobseekerExperience.edit',['jobseekerExperience' => $jobseekerExperience]);
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
            'company' => 'required|string|max:255',
            'designation' => 'required|string|max:255',
            'location' => 'required|string|max:1000',
            'skill' => 'required|array',
            'skill.*'=> 'required|string',
            'experience' => 'required|array',
            'experience.*'=> 'required|numeric',
        ]);

        $jobseekerExperience = JobSeekerWorkExperience::find($id);

        $jobseekerExperience->company = $request->input('company');
        $jobseekerExperience->designation = $request->input('designation');
        $jobseekerExperience->location = $request->input('location');
        $jobseekerExperience->skill = $request->input('skill');
        $jobseekerExperience->experience = $request->input('experience');

        $jobseekerExperience->save();

        $notification = array(
            'message' => 'Experience Details Updated Successfully  !',
            'alert-type' => 'info'
        );

        return redirect()->route('jobseekerExperience.list')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jobseekerExperience = JobSeekerWorkExperience::find($id);

        $jobseekerExperience->delete();

        $notification = array(
            'message' => 'Experience Details Deleted.!',
            'alert-type' => 'warning'
        );

        return redirect()->route('jobseekerExperience.list')->with($notification);
    }
}
