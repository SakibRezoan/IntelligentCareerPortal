<?php

namespace App\Http\Controllers;

use App\CompanyInfo;
use Illuminate\Http\Request;
use Auth;
use Session;
use Storage;

class CompanyInfoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:company');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('company.create');
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
            'company_name' => 'required|string|max:255',
            'date_of_establishment' => 'date',
            'address' => 'required|string|max:1000',
            'url' => 'required|string|max:255',
            'logo' => 'required',
        ]);

        $companyInfo = new CompanyInfo;
        $companyInfo->company_id = Auth::user()->id;

        if ($request->file('logo')) {

            Storage::putFile('public/images', $request->file('logo'));

            $request->file('logo')->store('public/images');
            $file_name = $request->file('logo')->hashName();
            $companyInfo->logo = $file_name;
        }

        $companyInfo->company_name = $request->company_name;
        $companyInfo->date_of_establishment = $request->date_of_establishment;
        $companyInfo->address = $request->address;
        $companyInfo->contact_no = $request->contact_no;
        $companyInfo->url = $request->url;
        $companyInfo->save();

        Session::flash('success', 'Company information updated successfully !');

        return redirect()->route('company.dashboard');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $companyInfo = CompanyInfo::where('id', $id)->first();
        return view('company.edit',['info' => $companyInfo]);
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
            'company_name' => 'required|string|max:255',
            'address' => 'required|string|max:1000',
            'contact_no' => '',
            'date_of_establishment' => 'date',
            'url' => 'required|string|max:255',
        ]);
        $companyInfo = CompanyInfo::find($id);
        $companyInfo->company_name = $request->input('company_name');
        $companyInfo->date_of_establishment = $request->input('date_of_establishment');
        $companyInfo->address = $request->input('address');
        $companyInfo->contact_no = $request->input('contact_no');
        $companyInfo->url = $request->input('url');

        if ($request->file('logo')) {

            Storage::putFile('public/images', $request->file('logo'));
            $request->file('logo')->store('public/images');
            $logo = $companyInfo->logo;
            if ($logo){
                unlink(storage_path('app/public/images/'.$logo));
            }
            $file_name = $request->file('logo')->hashName();
            $companyInfo->logo = $file_name;
        }

        $companyInfo->save();

        Session::flash('success', 'Company information was successfully updated!');
        return redirect()->route('company.dashboard');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $companyInfo = CompanyInfo::find($id);

        $logo = $companyInfo->logo;
        if($logo){
            unlink(storage_path('app/public/images/'.$logo));
        }

        $companyInfo->delete();

        Session::flash('success', 'Company Inforamtion was successfully deleted.');

        return redirect()->route('company.dashboard');
    }
}
