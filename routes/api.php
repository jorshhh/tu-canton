<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/teams', 'API\TeamController@index');
Route::get('/teams/{team}/users', 'API\UserController@index');
Route::get('/users/{user}/clients', 'API\ClientController@index');
