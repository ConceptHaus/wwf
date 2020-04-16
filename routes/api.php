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

Route::post('auth/register', 'Auth\RegisterController@create');
Route::post('auth/login','Auth\LoginController@login');
Route::post('auth/logout','Auth\LoginController@logout');
Route::get('auth/user','Auth\LoginController@user');
Route::post('auth/password','Auth\ForgotPasswordController@forgot');
Route::post('auth/reset-password','Auth\ResetPasswordController@reset');
Route::group(['middleware'=>'jwt.refresh'], function(){
    Route::get('auth/refresh','Auth\LoginController@refresh');
});