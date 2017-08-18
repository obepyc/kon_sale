<?php

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

Route::group(['middleware' => 'web'], function()
{

	Route::get('/', [
		'uses' => 'MainPageController@index',
		'as' => 'main_page'
		]);

// Auth

	Route::any('registration', [
		'uses' => 'AuthController@registration',
		'as' => 'registration'
		]);

	Route::post('reg-user', [
		'uses' => 'AuthController@reguser',
		'as' => 'signup'
		]);

	Route::post('signin', [
		'uses' => 'AuthController@signin',
		'as' => 'signin'
		]);

	Route::get('logout',[
		'uses' => 'AuthController@logout',
		'as' => 'logout'
		]);
});

Route::group(['middleware' => ['web', 'auth']], function()
{

	Route::group(['prefix' => 'cabinet'], function()
	{

		Route::get('', [
			'uses' => 'CabinetController@show',
			'as' => 'cabinet'
			]);

	});

});