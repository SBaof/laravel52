<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

// test for route-model binding
Route::get('/user/{user}', function (\App\User $user) {
    return $user;
})->middleware('throttle:3');

Route::get('/username/{username}', function (\App\User $user) {
    return $user;
});



Route::auth();

Route::get('/home', 'HomeController@index');
