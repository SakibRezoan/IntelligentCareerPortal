<?php

namespace App\Http\Controllers;

use App\JobRequirements;
use Illuminate\Http\Request;
use App\Job;
use Auth;
use Session;

class JobController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:company');
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
        return view('job.create');
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
            'job_title' => 'required|string|max:255',
            'description' => 'required|string|max:2000',
            'feature_and_benifits' => 'required|string|max:2000',
            'contract_type' => 'required|string',
            'apply_due_date' => 'required|date',
            'job_location' => 'required|string',
            'salary_min' => 'integer',
            'salary_max' => 'integer',
            'isNegotiable' => 'boolean',
            'vacancy' => 'integer',
            'required_degree' => 'string|max:255'
        ]);

        $job = new Job;
        $job->company_id = Auth::user()->id;
        $job->job_title = $request->job_title;
        $job->description = $request->description;
        $job->feature_and_benifits = $request->feature_and_benifits;
        $job->contract_type = $request->contract_type;
        $job->apply_due_date = $request->apply_due_date;
        $job->job_location = $request->job_location;
        $job->salary_min = $request->salary_min;
        $job->salary_max = $request->salary_max;
        $job->isNegotiable = $request->isNegotiable;
        $job->vacancy = $request->vacancy;
        $job->required_degree = $request->required_degree;
        $job->isAvailable = True;

        $job->save();

        //$job_requirements = new JobRequirements;

        Session::flash('success', 'New Job Posted successfully !');

        return redirect()->route('company.dashboard');
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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