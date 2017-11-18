<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/','PagesController@getIndex')->name('landing-page');

Route::get('contact','PagesController@getContact');

Route::get('about', 'PagesController@getAbout');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/users/logout', 'Auth\LoginController@userLogout')->name('user.logout');

Route::prefix('admin')->group(function(){
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
    Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
});

Route::prefix('company')->group(function(){
    Route::get('/register', 'CompanyAuth\RegisterController@showRegistrationForm')->name('company.registration');
    Route::post('/register', 'CompanyAuth\RegisterController@register')->name('company.register.submit');
    Route::get('/login', 'Auth\CompanyLoginController@showLoginForm')->name('company.login');
    Route::post('/login', 'Auth\CompanyLoginController@login')->name('company.login.submit');
    Route::get('/home', 'CompanyController@index')->name('company.dashboard');
    Route::get('/logout', 'Auth\CompanyLoginController@logout')->name('company.logout');


    Route::get('companyinfo/create',['uses' => 'CompanyInfoController@create', 'as' => 'companyInfo.create'] );
    Route::post('companyinfo/store',['uses' => 'CompanyInfoController@store', 'as' => 'companyInfo.store'] );
    Route::get('companyinfo/edit/{id}',['uses' => 'CompanyInfoController@edit', 'as' => 'companyInfo.edit'] );
    Route::put('companyinfo/update/{id}',['uses' => 'CompanyInfoController@update', 'as' => 'companyInfo.update'] );
    Route::get('companyinfo/delete/{id}',['uses' => 'CompanyInfoController@destroy', 'as' => 'companyInfo.delete'] );

    Route::get('job/create',['uses' => 'JobController@create', 'as' => 'job.create'] );
    Route::post('job/store',['uses' => 'JobController@store', 'as' => 'job.store'] );
    Route::get('job/edit/{id}',['uses' => 'JobController@edit', 'as' => 'job.edit'] );
    Route::put('job/update/{id}',['uses' => 'JobController@update', 'as' => 'job.update'] );
    Route::get('job/delete/{id}',['uses' => 'JobController@destroy', 'as' => 'job.delete'] );
});

Route::prefix('jobseekerProfile')-> group(function (){

    Route::get('generalinfo/create',['uses' => 'JobSeekerGeneralInfoController@create', 'as' => 'jobseekerGeneral_Info.create'] );
    Route::post('generalinfo/store',['uses' => 'JobSeekerGeneralInfoController@store', 'as' => 'jobseekerGeneral_Info.store'] );
    Route::get('generalinfo/edit/{id}',['uses' => 'JobSeekerGeneralInfoController@edit', 'as' => 'jobseekerGeneral_Info.edit'] );
    Route::put('generalinfo/update/{id}',['uses' => 'JobSeekerGeneralInfoController@update', 'as' => 'jobseekerGeneral_Info.update'] );
    Route::get('generalinfo/delete/{id}',['uses' => 'JobSeekerGeneralInfoController@destroy', 'as' => 'jobseekerGeneral_Info.delete'] );

    Route::get('education/create',['uses' => 'JobSeekerEducationController@create', 'as' => 'jobseekerEducation.create'] );
    Route::post('education/store',['uses' => 'JobSeekerEducationController@store', 'as' => 'jobseekerEducation.store'] );
    Route::get('education/edit/{id}',['uses' => 'JobSeekerEducationController@edit', 'as' => 'jobseekerEducation.edit'] );
    Route::put('education/update/{id}',['uses' => 'JobSeekerEducationController@update', 'as' => 'jobseekerEducation.update'] );
    Route::get('education/delete/{id}',['uses' => 'JobSeekerEducationController@destroy', 'as' => 'jobseekerEducation.delete'] );

});
