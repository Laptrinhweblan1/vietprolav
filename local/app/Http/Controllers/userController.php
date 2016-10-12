<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Validator, DB;
class userController extends Controller
{
    //
    public function getlogin(){
      return view('login');

    }
    public function postlogin(Request $request){
      $rules = [
        'user'=>'required',
        'pass'=>'required|min:3|max:6',

      ];
      $message = [
        'user.required'=>'Username required!',
        'pass.required'=>'pass required!',
        'pass.min'=>'Pass min 3!',
        'pass.max'=>'pass max 6!',
      ];
      $Validator = Validator::make($request->all(), $rules, $message);
      if($Validator->fails()){
        return view('login',['errors'=>$Validator->error()->all()]);
      }
      else{
        $arr = [
          'user_name'=>$request->user,
          'user_pass'=>$request->pass,
        ];
      if(DB::table('users')->where($arr)->count() > 0){
				return view('login', ['success'=>'Logined success!']);
			}
			else{
				return view('login', ['errors'=>['Account not valid!']]);
			}
      }
    }
}
