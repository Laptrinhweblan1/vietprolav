<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
class LoginController extends Controller
{
    public function getpaginate(){
    	$user = DB::table('user')->paginate(3);
    	dd($user);
    	return view('login',['abc'=>$user]);
    }
}
