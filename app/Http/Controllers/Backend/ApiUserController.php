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

     function userview($id){
           
      $userview=Apiuser::find($id);
      return view('api.profile',compact('userview'));

     }

     function update(Request $request, $id){

      $data= Apiuser::find($id);
      $clientid=md5($data->nid);
      $token=md5($data->phone);
      $data->appname=$request->appname;
      $data->description=$request->description;
      $data->url=$request->url;
      $data->clientid=$clientid;
      $data->token=$token;
      $data->update();
      return back();

     }
     function gettoken($id){
      $token= Apiuser::find($id);

      return response()->json([

        'status'=>'success',
        'token'=>$token

      ]);



     }
}
