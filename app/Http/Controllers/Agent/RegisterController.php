<?php

namespace App\Http\Controllers\Agent;

use App\Models\Agent;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    //
    public function showArtistLoginForm(){
        return view('agent_registration');
    }
    public function LogUserin(Request $request){
        $request->validate([
            'name'      =>'required',
            'phone'     =>'required|numeric|min:6',
            'email'     =>'required|email|unique:agents',
            'active_social_media_accounts'  =>'required',
            'password'  =>'required|min:8'
        ]);

        $agent             = new Agent();
        $agent->name       = $request->name;
        $agent->phone      = $request->phone;
        $agent->email      = $request->email;
        $agent->active_social_media_accounts   = $request->active_social_media_accounts;
        $agent->password   = Hash::make($request->password);
        $res               = $agent->save();

        /*if ($res) {
            // Log in the newly created artist
            //Auth::artist('artist')->login($artist);
            Auth::Artist()->login($artist);


            return redirect('/artist/dashboard')->with('success', "You have registered your data successfully");
        } else {
            return back()->with('fail', 'Something went wrong');
        }*/
    }
}
