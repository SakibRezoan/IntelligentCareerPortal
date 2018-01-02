<?php

namespace App\Http\Controllers;

use App\JobSeekerTeam;
use Illuminate\Http\Request;
use Auth;

class JobSeekerTeamController extends Controller
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
        return view('jobseekerTeam.create');
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
            'type' => 'required|string|max:25',
            'designation' => 'required|string|max:255',
            'client' => 'string|max:255',
            'product' => 'string|max:255',
            'product_url' => 'string|max:255',
        ]);

        $jobseekerTeam = new JobSeekerTeam();

        $jobseekerTeam->user_id = Auth::user()->id;
        $jobseekerTeam->company = $request->company;
        $jobseekerTeam->type = $request->type;
        $jobseekerTeam->designation = $request->designation;
        $jobseekerTeam->client = $request->client;
        $jobseekerTeam->product = $request->product;
        $jobseekerTeam->product_url = $request->product_url;

        $jobseekerTeam->save();

        $notification = array(
            'message' => 'Team Details Stored Successfully!',
            'alert-type' => 'success'
        );

        return redirect()->route('jobseekerTeam.list')->with($notification);
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
        $jobseekerTeams = JobSeekerTeam::where('user_id', $id)->get();
        if(count($jobseekerTeams)){
            return view('jobseekerTeam.view',['jobseekerTeams' => $jobseekerTeams]);
        }
        return view('jobseekerTeam.create');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jobseekerTeam = JobSeekerTeam::where('id', $id)->first();
        return view('jobseekerTeam.edit',['jobseekerTeam' => $jobseekerTeam]);
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
            'type' => 'required|string|max:25',
            'designation' => 'required|string|max:255',
            'client' => 'string|max:255',
            'product' => 'string|max:255',
            'product_url' => 'string|max:255',
        ]);

        $jobseekerTeam = JobSeekerTeam::find($id);

        $jobseekerTeam->company = $request->input('company');
        $jobseekerTeam->type = $request->input('type');
        $jobseekerTeam->designation = $request->input('designation');
        $jobseekerTeam->client = $request->input('client');
        $jobseekerTeam->product = $request->input('product');
        $jobseekerTeam->product_url = $request->input('product_url');

        $jobseekerTeam->save();

        $notification = array(
            'message' => 'Team Details Updated Successfully!',
            'alert-type' => 'info'
        );

        return redirect()->route('jobseekerTeam.list')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jobseekerTeam = JobSeekerTeam::find($id);

        $jobseekerTeam->delete();

        $notification = array(
            'message' => 'Team Details Deleted !',
            'alert-type' => 'warning'
        );

        return redirect()->route('jobseekerTeam.list')->with($notification);
    }
}
