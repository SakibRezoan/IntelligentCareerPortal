<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CompanyInfo;
use Auth;

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
}
