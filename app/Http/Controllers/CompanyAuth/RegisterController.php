<?php

namespace App\Http\Controllers\CompanyAuth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Company;
use Auth;

class RegisterController extends Controller
{
    protected $redirectPath = 'company/home';

    public function showRegistrationForm()
    {
        return view('auth.company-register');
    }

    public function register(Request $request)
    {
        //Validates data
        $this->validator($request->all())->validate();

        //Create company
        $company = $this->create($request->all());

        //Authenticates company
        $this->guard()->login($company);

        //Redirects company
        return redirect($this->redirectPath);
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:companies',
            'password' => 'required|min:6|confirmed',
        ]);
    }

    protected function create(array $data)
    {
        return Company::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }

    protected function guard()
    {
        return Auth::guard('company');
    }

}
