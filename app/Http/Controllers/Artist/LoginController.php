<?php

namespace App\Http\Controllers\Artist;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function showLoginForm(){

        return view('artist.auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
    
        if (Auth::guard('artist')->attempt($credentials)) {
            return redirect()->intended('/artist/dashboard');
        }
    
        return redirect()->back()->withErrors([
            'email' => 'Invalid login credentials',
        ]);
    }

    public function logout()
    {
        Auth::guard('artist')->logout();

        return redirect('/artist/login');
    }
}
