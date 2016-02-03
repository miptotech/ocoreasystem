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

Route::get('/', [
    'uses' => 'HomeController@index',
    'as'   => 'home'
]);

// Authentication Servicio Tecnico...

Route::get('st', [
    'uses' => 'St\StController@index',
    'as'   => 'st.index'
]);

Route::get('st/create', [
    'uses' => 'St\StController@create',
    'as'   => 'st.create'
]);

Route::post('st/create', [
    'uses' => 'St\StController@store',
    'as'   => 'st.store'
]);


Route::get('st/{id}', [
    'uses' => 'St\StController@edit',
    'as'   => 'st.edit'
]);

Route::get('st/update/{id}', [
    'uses' => 'St\StController@update',
    'as'   => 'st.update'
]);

Route::delete('st/destroy/{id}', [
    'uses' => 'St\StController@destroy',
    'as'   => 'st.destroy'
]);


// Clients routes...

Route::post('st/create/{id}', [
    'uses' => 'ClientController@getClient',
    'as'   => 'client.getClient'
]);

Route::get('client', [
    'uses' => 'ClientController@index',
    'as'   => 'client.index'
]);

Route::get('client/create', [
    'uses' => 'ClientController@create',
    'as'   => 'client.create'
]);

Route::post('client/create', [
    'uses' => 'ClientController@store',
    'as'   => 'client.store'
]);


Route::get('client/{id}', [
    'uses' => 'ClientController@edit',
    'as'   => 'client.edit'
]);

Route::get('client/update/{id}', [
    'uses' => 'ClientController@update',
    'as'   => 'client.update'
]);

Route::delete('client/destroy/{id}', [
    'uses' => 'ClientController@destroy',
    'as'   => 'client.destroy'
]);
// Authentication routes..

Route::get('login',[
    'uses' => 'Auth\AuthController@getLogin',
    'as' => 'login'
]);

Route::post('login','Auth\AuthController@postLogin');
Route::get('logout',[
    'uses' => 'Auth\AuthController@getLogout',
    'as' => 'logout'
]);

// Registration Routes...

Route::get('register',[
    'uses' => 'Auth\AuthController@getRegister',
    'as'   => 'register'
]);

Route::post('register','Auth\AuthController@postRegister');

// Password reset link request routes...
Route::get('password/email', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');

// Password reset routes...
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');