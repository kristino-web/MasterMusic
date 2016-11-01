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
/*************** Sites Pages *********************/	
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


/*************** Admin Group Routes ******************/
Route::group(['middlewareGroups' => 'admin'], function(){

	Route::get('/admin/login', 'AdminController@login');

	Route::post('/admin/login', 'AdminController@postLogin');

	Route::get('/admin/logout', 'AdminController@getLogout');
	
	Route::get('/admin', [ 
		'middleware' => 'authAdmin',
		'uses' =>  'AdminController@index',
		'as' => 'admin.admin',
	]);

	/*************** Musicas home *********************/
	Route::get('/admin/Slide', [
		'middleware' => 'authAdmin',
		'uses' =>	'AdminController@formSlide',
		'as' => 'admin_slide',
	]);
	Route::post('/admin/SendSlide', [
		'middleware' => 'authAdmin',
		'uses' =>	'AdminController@sendSlide',
		'as' => 'admin_Send_slide',
	]);

	Route::get('/admin/SobreMim', [
		'middleware' => 'authAdmin',
		'uses' =>	'AdminController@formSobreMim',
		'as' => 'admin_sobremin',
	]);

	Route::get('/admin/Subscritos', [
		'middleware' => 'authAdmin',
		'uses' =>	'AdminController@formSubscrever',
		'as' => 'admin_sobscrever',
	]);

	/*************** Musicas Pages *********************/
	Route::get('/admin/Musicas', [
		'middleware' => 'authAdmin',
		'uses' =>	'AdminController@formMusicas',
		'as' => 'admin_musicas',
	]);

	/*************** Videos Pages *********************/
	Route::get('/admin/Videos', [
		'middleware' => 'authAdmin',
		'uses' =>	'AdminController@formVideos',
		'as' => 'admin_videos',
	]);

	/*************** Galleria Pages *********************/
	Route::get('/admin/Galleria', [
		'middleware' => 'authAdmin',
		'uses' =>	'AdminController@formGalleria',
		'as' => 'admin_galeria',
	]);

});


/*************** Web Group Routes ******************/
Route::group(['middlewareGroups' => 'web'], function(){

	Route::auth();

	Route::get('/home', 'UserController@perfil');

	Route::post('/perfilAtualiza', 'UserController@update_avatar');

	Route::get('/menu', [
		'uses' => 'HomeController@menu',
		'as' => 'menu.---'
	]);

	// Route::get('/', function () {
	//     return view('welcome');
	// });
});









