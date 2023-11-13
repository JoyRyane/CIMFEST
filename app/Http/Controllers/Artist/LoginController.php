<?php

namespace App\Http\Controllers\Artist;

use auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    //
    public function showLoginForm(){

        return view('artist.auth.login');
    }
    public function login(Request $request){
        if(auth()->guard('artist')->attempt(['email' => $request->email, 'password' => $request->password])){
            return redirect()->intended('/dashboard');
        }

        return redirect()->back()->withErrors([
            'email' => 'Invalid login credentials'
        ]);
    }
}
