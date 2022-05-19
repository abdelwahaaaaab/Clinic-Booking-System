<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{

    public function show($id){
      $mydata=$this->getid($id);
      return view('test',$mydata);
    }
    private function getid($id)
    {
       $alldata=$this->getdata();
       foreach($alldata as $data){
          if($data['id']==$id)
          {
             return $data;
          }
       }
    }
    private function getdata()
    {
       return [
          ['id'=>1,'name'=>"Ahmed", 'age'=>20, 'city'=>"Benha"],
          ['id'=>2,'name'=>"Abdelwahab", 'age'=>30, 'city'=>"cairo"]
       ];
    }
}
