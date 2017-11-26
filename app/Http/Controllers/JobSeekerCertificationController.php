<?php

namespace App\Http\Controllers;

use App\JobSeekerCertification;
use Illuminate\Http\Request;
use Auth;
use Storage;

class JobSeekerCertificationController extends Controller
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
        return view('jobseekerCertification.create');
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
            'title' => 'required|string|max:255',
            'authority' => 'string|max:255',
            'license_no' => 'required|string|max:255',
            'date' => 'required|date',
            'link' => 'string|max:255',
            'scanned_document' => 'required',
        ]);

        $jobseekerCertificate = new JobSeekerCertification();

        $jobseekerCertificate->user_id = Auth::user()->id;
        $jobseekerCertificate->title = $request->title;
        $jobseekerCertificate->authority = $request->authority;
        $jobseekerCertificate->license_no = $request->license_no;
        $jobseekerCertificate->date = $request->date;
        $jobseekerCertificate->link = $request->link;

        if ($request->file('scanned_document')) {

            Storage::putFile('public/images', $request->file('scanned_document'));

            $request->file('scanned_document')->store('public/images');

            $file_name = $request->file('scanned_document')->hashName();

            $jobseekerCertificate->scanned_document = $file_name;
        }

        $jobseekerCertificate->save();

        $notification = array(
            'message' => 'Certification Details Stored Successfully  !',
            'alert-type' => 'success'
        );

        return redirect()->route('jobseekerCertification.list')->with($notification);
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
        $jobseeker_certificates = JobSeekerCertification::where('user_id', $id)->get();
        if(count($jobseeker_certificates)){
            return view('jobseekerCertification.view',['jobseeker_certificates' => $jobseeker_certificates]);
        }
        return view('jobseekerCertification.create');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jobseeker_certificate = JobSeekerCertification::where('id', $id)->first();
        return view('jobseekerCertification.edit',['jobseeker_certificate' => $jobseeker_certificate]);
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
            'title' => 'required|string|max:255',
            'authority' => 'string|max:25',
            'license_no' => 'required|string|max:255',
            'date' => 'required|date',
            'link' => 'string|max:255',
        ]);

        $jobseekerCertificate = JobSeekerCertification::find($id);

        $jobseekerCertificate->title = $request->input('title');
        $jobseekerCertificate->authority = $request->input('authority');
        $jobseekerCertificate->license_no = $request->input('license_no');
        $jobseekerCertificate->date = $request->input('date');
        $jobseekerCertificate->link = $request->input('link');

        if ($request->file('scanned_document')) {

            Storage::putFile('public/images', $request->file('scanned_document'));
            $request->file('scanned_document')->store('public/images');

            $scanned_document = $jobseekerCertificate->scanned_document;
            if ($scanned_document){

                unlink(storage_path('app/public/images/'.$scanned_document));
            }

            $file_name = $request->file('scanned_document')->hashName();

            $jobseekerCertificate->scanned_document = $file_name;
        }

        $jobseekerCertificate->save();

        $notification = array(
            'message' => 'Certification Details Updated Successfully  !',
            'alert-type' => 'info'
        );

        return redirect()->route('jobseekerCertification.list')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jobseekerCertificate = JobSeekerCertification::find($id);

        $scanned_document = $jobseekerCertificate->scanned_document;

        if ($scanned_document){
            unlink(storage_path('app/public/images/'.$scanned_document));
        }

        $jobseekerCertificate->delete();

        $notification = array(
            'message' => 'Certification Details Deleted.!',
            'alert-type' => 'warning'
        );

        return redirect()->route('jobseekerCertification.list')->with($notification);
    }
}