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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('jobseekerProfile')-> group(function (){

    Route::get('generalinfo/create',['uses' => 'JobseekerGeneralInfoController@create', 'as' => 'jobseekerGeneral_Info.create'] );
    Route::post('generalinfo/store',['uses' => 'JobseekerGeneralInfoController@store', 'as' => 'jobseekerGeneral_Info.store'] );
    Route::get('generalinfo/show/{id}',['uses' => 'JobseekerGeneralInfoController@show', 'as' => 'jobseekerGeneral_Info.show'] );
    Route::get('generalinfo/edit/{id}',['uses' => 'JobseekerGeneralInfoController@edit', 'as' => 'jobseekerGeneral_Info.edit'] );
    Route::put('generalinfo/update/{id}',['uses' => 'JobseekerGeneralInfoController@update', 'as' => 'jobseekerGeneral_Info.update'] );
    Route::delete('generalinfo/delete/{id}',['uses' => 'JobseekerGeneralInfoController@destroy', 'as' => 'jobseekerGeneral_Info.delete'] );

});
