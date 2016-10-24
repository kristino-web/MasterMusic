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
Route::group(['middleware' => 'admin'], function(){

	Route::get('/admin', 'AdminController@index');

	Route::get('/admin/login', 'AdminController@login');

	Route::post('/admin/login', 'AdminController@postLogin');

});

Route::group(['middleware' => 'web'], function(){

	Route::auth();

	Route::get('/home', 'HomeController@index');

	Route::get('/menu', [
		'uses' => 'HomeController@menu',
		'as' => 'menu.---'
	]);


	// Route::get('/', function () {
	//     return view('welcome');
	// });

});

	Route::get('/', function () {
	    return view('welcome');
	});
	
	Route::get('/inicio', [
		'uses' => 'MenuController@principal',
		'as' => 'menu.principal'
	]);

	Route::get('musicas', [
	'uses' =>	'MenuController@musicas',
	'as' => 'menu.musicas',
	]);

	Route::get('videos', [
	'uses' =>	'MenuController@videos',
	'as' => 'menu.videos',
	]);

	Route::get('galerias', [
	'uses' =>	'MenuController@galerias',
	'as' => 'menu.galerias',
	]);

	Route::get('contato', [
	'uses' =>	'MenuController@contato',
	'as' => 'menu.contato',
	]);







