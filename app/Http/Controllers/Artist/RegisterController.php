<?php

namespace App\Http\Controllers\Artist;

use App\Models\Artist;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    //
    public function showRegisterForm(){
        return view('artist.auth.artist_registration');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'      =>'required',
            'phone'     =>'required|numeric|min:6',
            'email'     =>'required|email|unique:artists',
            'category'  =>'required',
            'password'  =>'required|min:8'
        ]);

        $artist             = new Artist();
        $artist->name       = $request->name;
        $artist->phone      = $request->phone;
        $artist->email      = $request->email;
        $artist->category   = $request->category;
        $artist->password   = Hash::make($request->password);
        $res                = $artist->save();

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
