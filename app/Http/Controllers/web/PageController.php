<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function index(){

        return view('home');
    }

    public function artist(){
        return view('artist_dashboard');
    }

    public function agentRegistration(){
        return view('agent_registration');
    }

    public function artistRegistration(){
        return view('artist_registration');
    }
    
    public function login(){
        return view('login');
    }
}
