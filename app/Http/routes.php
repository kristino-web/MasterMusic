<?php
use App\Slides;
use Illuminate\Support\Facades\DB;
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
		$slides = Slides::getSlides();
	    return view('welcome', compact('slides'));
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

		
	// ----------------- SLIDE -------------------
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
	Route::get('/admin/ListSlide', [
		'middleware' => 'authAdmin',
		'uses' =>	'AdminController@listSlide',
		'as' => 'admin_List_slide',
	]);
	Route::put('/admin/UpdateSlide/{id}', [
		'middleware' => 'authAdmin',
		'uses' =>	'AdminController@updateSlide',
		'as' => 'admin_update_slide',
	]);


	// ----------------- SOBRE MIN -------------------
	Route::get('/admin/SobreMim', [
		'middleware' => 'authAdmin',
		'uses' =>	'AdminController@formSobreMim',
		'as' => 'admin_sobremin',
	]);
	Route::post('/admin/SendSobreMim', [
		'middleware' => 'authAdmin',
		'uses' =>	'AdminController@sendSobreMim',
		'as' => 'admin_Send_sobreMim',
	]);
	Route::get('/admin/ListSobreMim', [
		'middleware' => 'authAdmin',
		'uses' =>	'AdminController@listSobreMim',
		'as' => 'admin_List_sobreMim',
	]);


	// ----------------- SUBSCRITOS -------------------
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
	Route::post('/admin/AddMusicas', [
		'middleware' => 'authAdmin',
		'uses' =>	'AdminController@addMusicas',
		'as' => 'admin_add_musicas',
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
});









