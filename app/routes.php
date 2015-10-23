<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
Route::get('createUser', array('as' => 'create', 'uses'=> 'UsersController@signUp'));
Route::post('createUser', array('as' => 'create', 'uses'=> 'UsersController@handleSignUp'));
Route::get('login', array('as' => 'login', 'uses' => 'UsersController@login'));
Route::post('/login', array('as' => 'login', 'uses' => 'UsersController@handleLogin'));
Route::get('/logout', array('as' => 'logout', 'uses' => 'UsersController@logout'));

Route::get('customerData', array('as' => 'customerData', 'uses' => 'CustomerController@viewCustomerData'));
Route::get('exportData', array('as' => 'exportData', 'uses' => 'CustomerController@exportCustomerData'));
Route::get('contact', array('as' => 'contact', 'uses' => 'CustomerController@requestData'));
Route::post('contact', array('as' => 'contact', 'uses' => 'CustomerController@handleRequestData'));


Route::get('/', function()
{
	return View::make('index');
});
