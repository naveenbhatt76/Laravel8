<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    function login(Request $req){
    	$user=User::where(['email'=> $req->email])->first();
    		if(!$user || !Hash::check($req->passwd, $user->passwd)){
                return view('login',["msg"=>'Sorry!!! Email And Password is Wrong']);
    		}
            $req->session()->put('user', $user);
                return redirect('dashboard');
    		
    }

    function authenticate(){
    	// return ['code'=>200, 'msg'=>"success"];
    }

    function logout(Request $req){
        $req->session()->pull('user',null);
        return redirect('login');
    }

    function saveData(Request $req){
        $req->validate([
                'name'=>'required',
                'email'=>'required',
                'passwd'=>'required',
        ]);
        return $req->input();
    }   
}
