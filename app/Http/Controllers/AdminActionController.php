<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Company;

class AdminActionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function searchUserList(Request $request)
    {
        $keyword = $request->keyword;
        $users = User::where('name', 'LIKE', '%'.$keyword.'%')
                    ->orWhere('email', 'LIKE','%'.$keyword.'%')
                    ->get();
        $companies = Company::where('name', 'LIKE', '%'.$keyword.'%')
            ->orWhere('email', 'LIKE','%'.$keyword.'%')
            ->get();
        if(count($users) > 0 || count($companies) > 0 ){

            return view('admin.showUserList',['users' => $users, 'companies' => $companies]);
        }
        $notification = array(
            'message' => 'Sorry !! No user is available with this keyword',
            'alert-type' => 'warning'
        );
        return redirect()->route('admin.dashboard')->with($notification);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function banUserList()
    {
        $users = User::all();
        $companies = Company::all();
        if(count($users) > 0 || count($companies) > 0 ){

            return view('admin.showUserList',['users' => $users, 'companies' => $companies]);
        }
        $notification = array(
            'message' => 'Sorry !! No user is available',
            'alert-type' => 'warning'
        );
        return redirect()->route('admin.dashboard')->with($notification);
    }

    public function banUser($id)
    {
        $user = User::where('id',$id)->first();
        $user->status = 0;
        $user->save();

        $notification = array(
            'message' => 'User is banned successfully !!!',
            'alert-type' => 'success'
        );
        return redirect()->route('admin.dashboard')->with($notification);
    }

    public function unbanUser($id)
    {
        $user = User::where('id',$id)->first();
        $user->status = 1;
        $user->save();

        $notification = array(
            'message' => 'User is unbanned successfully !!!',
            'alert-type' => 'success'
        );
        return redirect()->route('admin.dashboard')->with($notification);
    }

    public function banCompany($id)
    {
        $company = Company::where('id',$id)->first();
        $company->status = 0;
        $company->save();

        $notification = array(
            'message' => 'Company is banned successfully !!!',
            'alert-type' => 'success'
        );
        return redirect()->route('admin.dashboard')->with($notification);
    }

    public function unbanCompany($id)
    {
        $company = Company::where('id',$id)->first();
        $company->status = 1;
        $company->save();
        $notification = array(
            'message' => 'Company is unbanned successfully !!!',
            'alert-type' => 'success'
        );
        return redirect()->route('admin.dashboard')->with($notification);
    }


    public function requestedCompanyList()
    {
//        $users = User::all();
//        return view('admin.showUserList',['users' => $users]);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
