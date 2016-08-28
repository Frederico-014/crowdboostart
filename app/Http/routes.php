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

Route::pattern('id','[1-9][0-9]');

Route::get('/','FrontCrontroller@index');

Route::get('/booster','FrontCrontroller@newUser');

Route::get('/creator','FrontCrontroller@newUser');


Route::any('login', 'LoginController@login');

Route::get('logout', 'LoginController@logout');
