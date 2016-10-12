<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use DB;

class Democontroller extends Controller
{
    public function getform(){
      //$arr=[
        //'khoahoc'=>'Laravel',
        //'trungtam'=>'Vietpro'
      //];
      //return view('Demo', $arr);
      return view('maytinh');
    }
    public function postform(Request $x){
      $st1 = $x->st1;
      $pt = $x->pt;
      $st2 = $x->st2;
      switch ($pt) {
        case '+': $kq = $st1 + $st2;  break;
        case '-': $kq = $st1 - $st2;  break;
        case 'x': $kq = $st1 * $st2;  break;
        case ':': $kq = $st1 / $st2;  break;
      }
      $arr = ['kq'=>$kq];
      return view('maytinh', $arr);
    }
    public function getpaginate(){
      $user = DB::table('demo')->paginate(3);
      dd($user);
      return view('login',['abc'=>$user]);
    }
}
