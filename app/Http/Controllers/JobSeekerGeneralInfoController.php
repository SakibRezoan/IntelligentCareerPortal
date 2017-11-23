<?php

namespace App\Http\Controllers;

use App\JobSeekerGeneralInfo;
use Illuminate\Http\Request;
use Storage;
use Auth;
use Session;

class JobSeekerGeneralInfoController extends Controller
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
            'last_name' => 'required|string|max:255',
            'date_of_birth' => 'required|date',
            'city' => 'required|string',
            'gender' => 'required|string',
            'hidden_status' => 'boolean',
            'address' => 'required|string|max:1000',
            'avatar' =>'required',
        ]);

        $jobseeker_general_info = new JobSeekerGeneralInfo;
        $jobseeker_general_info->user_id = Auth::user()->id;

        if ($request->file('avatar')) {

            Storage::putFile('public/images', $request->file('avatar'));

            $request->file('avatar')->store('public/images');
            $file_name = $request->file('avatar')->hashName();
            $jobseeker_general_info->avatar = $file_name;
        }

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

        return redirect()->route('home');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jobseeker_general_info = JobSeekerGeneralInfo::where('id', $id)->first();
        return view('jobseekerGeneral_Info.edit',['info' => $jobseeker_general_info]);
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
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'date_of_birth' => 'required|date',
            'city' => 'required|string',
            'gender' => 'required|string',
            'hidden_status' => 'boolean',
            'address' => 'required|string|max:1000',
        ]);

        $jobseeker_general_info = JobSeekerGeneralInfo::find($id);
        $jobseeker_general_info->first_name = $request->input('first_name');
        $jobseeker_general_info->last_name = $request->input('last_name');
        $jobseeker_general_info->date_of_birth = $request->input('date_of_birth');
        $jobseeker_general_info->city = $request->input('city');
        $jobseeker_general_info->gender = $request->input('gender');
        $jobseeker_general_info->contact_no = $request->input('contact_no');
        $jobseeker_general_info->hidden_status = $request->input('hidden_status');
        $jobseeker_general_info->address = $request->input('address');

        if ($request->file('avatar')) {

            Storage::putFile('public/images', $request->file('avatar'));
            $request->file('avatar')->store('public/images');
            $avatar = $jobseeker_general_info->avatar;
            if($avatar){
                unlink(storage_path('app/public/images/'.$avatar));
            }
            $file_name = $request->file('avatar')->hashName();
            $jobseeker_general_info->avatar = $file_name;
        }

        $jobseeker_general_info->save();

        Session::flash('success', 'General information was successfully updated!');
        return redirect()->route('home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jobseeker_general_info = JobSeekerGeneralInfo::find($id);

        $avatar = $jobseeker_general_info->avatar;

        if($avatar){
            unlink(storage_path('app/public/images/'.$avatar));
        }

        $jobseeker_general_info->delete();

        Session::flash('success', 'General Inforamtion was successfully deleted.');
        return redirect()->route('home');    }
}
