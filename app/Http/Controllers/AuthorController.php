<?php

namespace App\Http\Controllers;
use GrahamCampbell\ResultType\Success;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AuthorController extends Controller
{
    function index(){
        return view ("author/index");
    }
    function login(request $request){
        Session::flash('username', $request->username);
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ],[
            'username.required' => '<span class="error-message">Username Wajib Di Isi Bang</span>',
            'password.required' => '<span class="error-message">Password Wajib Di Isi Bang</span>',
        ]);
        $infologin=[
            'username'=> $request->username,
            'password'=>$request->password
        ];
        if (Auth::attempt($infologin)){
            return redirect ('home')->with('Success','BERHASIL LOGIN!!');
        }
        else {
            return redirect ('author')->with('USERNAME PASSWORD SALAH BOSS');
        }
    }
}
