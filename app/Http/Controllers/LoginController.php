<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('loginPage');
    }

    public function do_Login(Request $request)
    {
        if (auth()->attempt($request->only('email','password'))) {
        	return view('admin.dasboard') ;
        } else {
        	return redirect()->back() ;
        }
    }
}
