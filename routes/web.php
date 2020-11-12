<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('pages.welcome');
});

Auth::routes();

Route::get('/strategy/create', 'StrategyController@create');
Route::post('/strategy', 'StrategyController@store');
Route::get('/search', 'SearchController@index')->name('search');
Route::post('/login/custom', [
    'uses' => 'LoginController@login',
    'as' => 'login.custom'
]);

Route::group(['middleware' => 'auth'], function() {
    Route::get('/', function() {
        return view('pages.welcome');
    })->name('home');
    Route::get('/dashboard', function() {
        return view('pages.moderator');
    })->name('dashboard');
});

Route::get('/profile/{user}', 'ProfilesController@index')->name('profile.show');
