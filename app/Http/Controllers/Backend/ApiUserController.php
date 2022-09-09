<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Apiuser;
use Illuminate\Http\Request;

class ApiUserController extends Controller
{
     public function add(){
        return view('api/add');
     }  

     public function adduser(Request $request){

        $apiuser= new Apiuser;
        $apiuser->name=$request->uname;
        $apiuser->address=$request->address;
        $apiuser->phone=$request->phone;
        $apiuser->email=$request->email;
        $apiuser->nid=$request->nid;
        $apiuser->save();




     }
}
