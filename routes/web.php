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

Route::get('/','PagesController@getIndex');

Route::get('contact','PagesController@getContact');

Route::get('about', 'PagesController@getAbout');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin', 'AdminController@index')->name('admin');
Route::get('/company', 'CompanyController@index')->name('company');

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
    Route::get('/register', 'Auth\CompanyRegisterController@showRegistrationForm')->name('company.registration');
    Route::post('/register', 'Auth\CompanyRegisterController@register')->name('company.register.submit');
    Route::get('/login', 'Auth\CompanyLoginController@showLoginForm')->name('company.login');
    Route::post('/login', 'Auth\CompanyLoginController@login')->name('company.login.submit');
    Route::get('/', 'CompanyController@index')->name('company.dashboard');
    Route::get('/logout', 'Auth\CompanyLoginController@logout')->name('company.logout');
});

Route::prefix('jobseekerProfile')-> group(function (){

    Route::get('generalinfo/create',['uses' => 'JobseekerGeneralInfoController@create', 'as' => 'jobseekerGeneral_Info.create'] );
    Route::post('generalinfo/store',['uses' => 'JobseekerGeneralInfoController@store', 'as' => 'jobseekerGeneral_Info.store'] );
    Route::get('generalinfo/show/{id}',['uses' => 'JobseekerGeneralInfoController@show', 'as' => 'jobseekerGeneral_Info.show'] );
    Route::get('generalinfo/edit/{id}',['uses' => 'JobseekerGeneralInfoController@edit', 'as' => 'jobseekerGeneral_Info.edit'] );
    Route::put('generalinfo/update/{id}',['uses' => 'JobseekerGeneralInfoController@update', 'as' => 'jobseekerGeneral_Info.update'] );
    Route::delete('generalinfo/delete/{id}',['uses' => 'JobseekerGeneralInfoController@destroy', 'as' => 'jobseekerGeneral_Info.delete'] );

});
