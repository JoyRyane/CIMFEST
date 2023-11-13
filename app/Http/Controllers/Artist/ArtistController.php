<?php

namespace App\Http\Controllers\Artist;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArtistController extends Controller
{
    //
    public function getDashboard(){

        return view('artist.dashboard');
    }

    public function playList(){

        return view('artist.playlist');
    }

    public function userDashboard(){

        return view('user.dashboard');
    }
}
