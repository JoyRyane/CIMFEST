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

<<<<<<< HEAD
Route::group(['namespace' => 'web'], function()
{
=======
Route::group(['namespace' => 'Artist' , 'prefix' => 'dashboard'], function(){
    Route::get('/', 'ArtistController@getDashboard')->name('dashboard'); 
    Route::get('/playlist', 'ArtistController@playList')->name('playlist'); 
    Route::get('/user-dashboard', 'ArtistController@userDashboard')->name('user-dashboard'); 
}); 

Route::group(['namespace' => 'web'], function(){
>>>>>>> 0f545a2e6da587cb55f436b75c1d5db2e37574a7
    Route::get('/', 'PageController@index')->name('home'); 
    Route::get('/artist_dashboard','PageController@artist')->name('artist_dashboard');
    Route::get('/agent_registration','PageController@agentRegistration')->name('agent_registration');
    Route::get('/artist_registration','PageController@artistRegistration')->name('artist_registration');
    Route::get('/login','PageController@login')->name('login');
    // Route::post('/artist','PageController@create_artist')->name('create_artist');
    Route::post('/agent','PageController@create_agent')->name('create_agent');
}); 
