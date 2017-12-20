<?php

namespace App\Http\Controllers;

use App\Company;
use Illuminate\Http\Request;
use App\CompanyInfo;
use Auth;
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


}
