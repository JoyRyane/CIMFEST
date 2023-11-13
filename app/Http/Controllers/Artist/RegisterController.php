<?php

namespace App\Http\Controllers\Artist;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //
    public function showRegisterForm(){
        return view('artist.auth.artist_registration');
    }

    public function store(Request $request){
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
}
