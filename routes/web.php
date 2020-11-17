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
Route::get('/comment/create', 'CommentController@create');
Route::post('/strategy', 'StrategyController@store');
Route::post('/comment', 'CommentController@store');
Route::get('/search', 'SearchController@index')->name('search');
Route::post('/login/custom', [
    'uses' => 'LoginController@login',
    'as' => 'login.custom'
]);
Route::get('delete/{id}','StratDeleteController@destroy');
Route::get('delete/strategy/{comment_id}','CommentDeleteController@destroy');


Route::group(['middleware' => 'auth'], function() {
    Route::get('/dashboard', function() {
        $strategies = DB::table('strategies')->get();
        return view('pages.admin', ['strategies' => $strategies]);
    })->name('dashboard');
    Route::get('/moderator-dashboard', function() {
        $comments = DB::table('comments')->get();
        return view('pages.moderator', ['comments' => $comments]);
    })->name('moderator-dashboard');
});

Route::get('/profile/{user}', 'ProfilesController@index')->name('profile.show');
