<?php

namespace App\Http\Controllers;

use App\JobseekerGeneralInfo;
use Illuminate\Http\Request;
use Session;

class JobseekerGeneralInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jobseekerGeneral_Info.create');
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
            'first_name' => 'required|string|max:255',
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'date_of_birth' => 'required|date',
            'city' => 'required|string',
            'gender' => 'required|string',
            'hidden_status' => 'boolean',
            'address' => 'required|string|max:1000',
        ]);

        $jobseeker_general_info = new JobseekerGeneralInfo;
       // $jobseeker_general_info->user_id = $request->user_id;
        $jobseeker_general_info->avatar = $request->avatar;
        $jobseeker_general_info->first_name = $request->first_name;
        $jobseeker_general_info->last_name = $request->last_name;
        $jobseeker_general_info->date_of_birth = $request->date_of_birth;
        $jobseeker_general_info->city = $request->city;
        $jobseeker_general_info->gender = $request->gender;
        $jobseeker_general_info->contact_no = $request->contact_no;
        $jobseeker_general_info->hidden_status = $request->hidden_status;
        $jobseeker_general_info->address = $request->address;

        $jobseeker_general_info->save();

        Session::flash('success', 'General information updated successfully !');

//        flash('General information updated successfully !')->success();

        return redirect()->route('jobseekerGeneral_Info.create');
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
