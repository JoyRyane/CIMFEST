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

Route::group(['namespace' => 'web'], function()
{
    Route::get('/', 'PageController@index')->name('home'); 
    Route::get('/artist_dashboard','PageController@artist')->name('artist_dashboard');
    Route::get('/agent_registration','PageController@agentRegistration')->name('agent_registration');
    Route::get('/artist_registration','PageController@artistRegistration')->name('artist_registration');
    Route::get('/login','PageController@login')->name('login');
    // Route::post('/artist','PageController@create_artist')->name('create_artist');
    Route::post('/agent','PageController@create_agent')->name('create_agent');
}); 
