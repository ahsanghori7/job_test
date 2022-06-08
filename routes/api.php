<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::post('login', 'App\Http\Controllers\UserController@login');
Route::post('register', 'App\Http\Controllers\UserController@register');

Route::get('films', 'App\Http\Controllers\FilmApiController@index');
Route::get('film/{id}', 'App\Http\Controllers\FilmApiController@show');


Route::group(['middleware' => 'auth:api'], function(){
    
Route::post('film_add', 'App\Http\Controllers\FilmApiController@store');
Route::post('add_comment', 'App\Http\Controllers\FilmApiController@comment');

});


