<?php

namespace App\Http\Controllers\web;

use App\Models\Agent;
use App\Models\Artist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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
    public function create_artist(Request $request){
        $request->validate([
            'name'      =>'required',
            'phone'     =>'required|numeric|min:6',
            'email'     =>'required|email|unique:artists',
            'category'  =>'required',
            'password'  =>'required|min:8'
        ]);
        $artist             = new  Artist();
        $artist->name       = $request->name;
        $artist->phone      = $request->phone;
        $artist->email      = $request->email;
        $artist->category   = $request->category;
        $artist->password   = Hash::make($request->password);
        $res   = $artist->save();
        if($res)
        {
            return back()->with('success',"You have registered your data successfully");
        }else{
            return back()->with('fail','Something went wrong');
        }
    }

    public function create_agent(Request $request){

        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required | email',
            'social' => 'required',
            'password' => 'required',
        ]);

        $agent             = new Agent();
        $agent->name       = $request->name;
        $agent->phone      = $request->phone;
        $agent->email      = $request->email;
        $agent->active_social_media_accounts   = $request->social_media;
        $agent->password   = Hash::make($request->password);

     
        $res   = $agent->save();
        if($res)
        {
            return back()->with('success',"You have registered your data successfully");
        }else{
            return back()->with('fail','Something went wrong');
        }
    }
}
