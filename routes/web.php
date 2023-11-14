<?php

use App\Http\Controllers\web\PageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// ARTIST ROUTES
Route::group(['namespace' => 'Artist', 'prefix' => 'artist', 'as' => 'artist.'], function () {
    Route::get('/register', 'RegisterController@showRegisterForm')->name('register');
    Route::post('/register', 'RegisterController@store')->name('register');
    Route::get('/login', 'LoginController@showLoginForm')->name('login');
    
    Route::post('/login', 'LoginController@login')->name('login');
    
    
    Route::group(['middleware' => 'auth:artist'], function () {
        Route::get('/', function () {
            return redirect()->route('artist.dashboard');
        });
        Route::get('/dashboard', 'ArtistController@getDashboard')->name('dashboard');
        Route::get('/playlist', 'ArtistController@playList')->name('playlist');
    });
    Route::post('/logout', 'LoginController@logout')->name('logout');
});


// AGENT ROUTES
Route::group(['namespace' => 'agent' , 'prefix' => 'agent', 'as' => 'agent.'], function (){
    Route::get('/register', 'RegisterController@showArtistLoginForm')->name('agent_register');
    Route::post('/register', 'RegisterController@LogUserin')->name('register');
    Route::get('/login','LoginController@showLogin')->name('login');
});


// AUTHENTICATED USER ROUTES
Route::group([], function(){
    Route::get('/user-dashboard', 'Artist\ArtistController@userDashboard')->name('user-dashboard');
});

// WEB ROUTES
Route::group(['namespace' => 'web'], function () {
    Route::get('/', 'PageController@index')->name('home');
});
