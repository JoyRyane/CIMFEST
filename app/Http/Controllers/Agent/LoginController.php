<?php

namespace App\Http\Controllers\Agent;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    public function login(Request $request){
        if(auth()->guard('agent')->attempt(['email' => $request->email, 'password' => $request->password])){
            return redirect()->intended('/dashboard');
        }

        return redirect()->back()->withErrors([
            'email' => 'Invalid login credentials'
        ]);
    }
    public function showLogin(){
        return view("agent.auth.agent_login");
    }
}
