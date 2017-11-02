<?php
namespace App\Http\Controllers;

class PagesController extends Controller{

  public function getIndex(){
    return view('pages/welcome');
  }
  public function getContact(){
    return view('pages.contact');
  }
  public function getAbout(){

    $data = array(
      'fullname' => 'Sakib Rezoan',
      'email'    => 'sakib.rezoan@sekai-lab-bd.com'
    );
    return view('pages.about')->withData($data);
  }
}
