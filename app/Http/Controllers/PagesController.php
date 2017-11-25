<?php
namespace App\Http\Controllers;

class PagesController extends Controller{

  public function getIndex(){
    return view('index');
  }
  public function getContact(){
    return view('pages.contact');
  }
  public function getAbout(){

    $data = array(
      'fullname' => 'Sakib Rezoan',
      'email'    => 'bsse0611@iit.duac.bd'
    );
    return view('pages.about')->withData($data);
  }
}
