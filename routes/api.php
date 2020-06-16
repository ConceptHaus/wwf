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
Route::post('auth/user/edit','UserController@edit');
Route::post('auth/password','Auth\ForgotPasswordController@forgot');
Route::post('auth/password/manual','Auth\ResetPasswordController@resetManual');
Route::post('auth/reset-password','Auth\ResetPasswordController@reset');
Route::group(['middleware'=>'jwt.refresh'], function(){
    Route::get('auth/refresh','Auth\LoginController@refresh');
});

Route::post('/contacto','GeneralController@contacto');
Route::post('/newsletter','GeneralController@newsletter');
Route::post('/recursos','Admin\AdminController@addRecurso');
Route::post('/casos','Admin\AdminController@addCaso');
Route::post('/button','Admin\AdminController@addButtonPaso');
Route::post('/catalogo','Admin\AdminController@addCatalogo');
Route::post('/recursos/rutas','Admin\AdminController@addRecursoRuta');
Route::get('/download/users','Admin\AdminController@downloadUsers');
Route::get('/download/mensajes','Admin\AdminController@downloadMensajes');
Route::get('/users','Admin\AdminController@getUsers');
Route::get('/mensajes','Admin\AdminController@getMensajes');
Route::get('/newsletter','Admin\AdminController@getNewsletter');
Route::get('/recursos','Admin\AdminController@getRecursos');
Route::get('/casos','Admin\AdminController@getCasos');
Route::get('/button/{ruta}','Admin\AdminController@getButtonPaso');
Route::get('/catalogo','Admin\AdminController@getCatalogo');
Route::get('/recursos/rutas/{ruta}','Admin\AdminController@getRecursosRutas');
