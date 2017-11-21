<?php

namespace App\Http\Controllers;

use App\JobSeekerEducation;
use Illuminate\Http\Request;
use Auth;
use Session;

class JobSeekerEducationController extends Controller
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
        return view('jobseekerEducation.create');
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
            'degree' => 'required|string|max:255',
            'group' => 'string|max:25',
            'institute' => 'required|string|max:255',
            'year_of_passing' => 'required|integer',
            'cgpa' => 'required|numeric|min:1|max:5',
            'isStudying' => 'boolean',
            'scanned_document' => 'required',
        ]);

        $jobseekerEducation = new JobSeekerEducation();
        $jobseekerEducation->user_id = Auth::user()->id;
        $jobseekerEducation->degree = $request->degree;
        $jobseekerEducation->group = $request->group;
        $jobseekerEducation->institute = $request->institute;
        $jobseekerEducation->year_of_passing = $request->year_of_passing;
        $jobseekerEducation->cgpa = $request->cgpa;
        $jobseekerEducation->isStudying = $request->isStudying;
        $path = $request->file('scanned_document')->store('public/images');
        $jobseekerEducation->scanned_document = substr($path,7);

        $jobseekerEducation->save();

        Session::flash('success', 'Education Details Stored Successfully !');

        return redirect()->route('jobseekerEducation.list');
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
        $jobseeker_educations = JobSeekerEducation::where('user_id', $id)->get();
        if(count($jobseeker_educations)){
            return view('jobseekerEducation.view',['jobseeker_educations' => $jobseeker_educations]);
        }
        return view('jobseekerEducation.create');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jobseeker_education = JobSeekerEducation::where('id', $id)->first();
        return view('jobseekerEducation.edit',['jobseeker_education' => $jobseeker_education]);
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
       echo "Hello";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
