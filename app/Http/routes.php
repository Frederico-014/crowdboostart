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

Route::pattern('id','[1-9][0-9]*');

Route::get('/','FrontController@index');

Route::get('annonces','FrontController@annonces');

Route::get('booster','FrontController@newUser');

Route::post('inscription', 'FrontController@createUser');

Route::get('creator','FrontController@newUser');


Route::get('event','FrontController@newEvent');

Route::post('event','FrontController@createEvent');

Route::any('search', 'FrontController@search');

Route::get('show/{id}','FrontController@showEvent');

Route::get('discovery','FrontController@discovery');

Route::get('discovery/category/{id}','FrontController@showEventByCategory');

Route::get('discovery/tag/{id}','FrontController@showEventByTag');


Route::any('login', 'LoginController@login');

Route::get('logout', 'LoginController@logout');


Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::resource('event', 'EventController');
    Route::resource('user', 'UserController');
    Route::resource('institution', 'InstitutionController');

});