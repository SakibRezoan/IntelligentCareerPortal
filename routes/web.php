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

    Route::get('/view/users','AdminActionController@showUserList')->name('admin.showUserList');
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

    Route::get('jobs/view',['uses' => 'JobController@view', 'as' => 'jobs.view'] );
    Route::get('jobs/show/{id}',['uses' => 'JobController@show', 'as' => 'job.show'] );
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

    Route::get('education/list',['uses' => 'JobSeekerEducationController@list', 'as' => 'jobseekerEducation.list'] );
    Route::get('education/create',['uses' => 'JobSeekerEducationController@create', 'as' => 'jobseekerEducation.create'] );
    Route::post('education/store',['uses' => 'JobSeekerEducationController@store', 'as' => 'jobseekerEducation.store'] );
    Route::get('education/edit/{id}',['uses' => 'JobSeekerEducationController@edit', 'as' => 'jobseekerEducation.edit'] );
    Route::put('education/update/{id}',['uses' => 'JobSeekerEducationController@update', 'as' => 'jobseekerEducation.update'] );
    Route::get('education/delete/{id}',['uses' => 'JobSeekerEducationController@destroy', 'as' => 'jobseekerEducation.delete'] );

    Route::get('certificate/list',['uses' => 'JobSeekerCertificationController@list', 'as' => 'jobseekerCertification.list'] );
    Route::get('certificate/create',['uses' => 'JobSeekerCertificationController@create', 'as' => 'jobseekerCertification.create'] );
    Route::post('certificate/store',['uses' => 'JobSeekerCertificationController@store', 'as' => 'jobseekerCertification.store'] );
    Route::get('certificate/edit/{id}',['uses' => 'JobSeekerCertificationController@edit', 'as' => 'jobseekerCertification.edit'] );
    Route::put('certificate/update/{id}',['uses' => 'JobSeekerCertificationController@update', 'as' => 'jobseekerCertification.update'] );
    Route::get('certificate/delete/{id}',['uses' => 'JobSeekerCertificationController@destroy', 'as' => 'jobseekerCertification.delete'] );

    Route::get('jobPreference/show',['uses' => 'JobSeekerJobPreferenceController@show', 'as' => 'jobseekerJobPreference.show'] );
    Route::get('jobPreference/create',['uses' => 'JobSeekerJobPreferenceController@create', 'as' => 'jobseekerJobPreference.create'] );
    Route::post('jobPreference/store',['uses' => 'JobSeekerJobPreferenceController@store', 'as' => 'jobseekerJobPreference.store'] );
    Route::get('jobPreference/edit/{id}',['uses' => 'JobSeekerJobPreferenceController@edit', 'as' => 'jobseekerJobPreference.edit'] );
    Route::put('jobPreference/update/{id}',['uses' => 'JobSeekerJobPreferenceController@update', 'as' => 'jobseekerJobPreference.update'] );
    Route::get('jobPreference/delete/{id}',['uses' => 'JobSeekerJobPreferenceController@destroy', 'as' => 'jobseekerJobPreference.delete'] );

    Route::get('team/list',['uses' => 'JobSeekerTeamController@list', 'as' => 'jobseekerTeam.list'] );
    Route::get('team/create',['uses' => 'JobSeekerTeamController@create', 'as' => 'jobseekerTeam.create'] );
    Route::post('team/store',['uses' => 'JobSeekerTeamController@store', 'as' => 'jobseekerTeam.store'] );
    Route::get('team/edit/{id}',['uses' => 'JobSeekerTeamController@edit', 'as' => 'jobseekerTeam.edit'] );
    Route::put('team/update/{id}',['uses' => 'JobSeekerTeamController@update', 'as' => 'jobseekerTeam.update'] );
    Route::get('team/delete/{id}',['uses' => 'JobSeekerTeamController@destroy', 'as' => 'jobseekerTeam.delete'] );

});
