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
	//login
	Route::get('login', 'UsersController@getLogin');
	Route::post('login', 'UsersController@postLogin');

	//register
	Route::get('register', 'UsersController@getRegister');
	Route::post('register', 'UsersControler@postRegister');

	//already logged in
	Route::group( array( 'before' => 'auth' ), function(){

		Route::get('test', 'HomeController@index');
		Route::get('search', 'HomeController@getSearch');

		Route::get('/', function(){
			return Redirect::to('index');
		});

		Route::get('index', function(){

			if( Request::ajax() )
			{
				return View::make('ajax.index');
			}

			return App::make('HomeController')->index();
		});

//		Route::get('stores/index', "StoresController@index");

		Route::get('logout', 'UsersController@getLogout');

		//api stuff
		Route::resource('stores', 'StoresController');
		Route::resource('users', 'UsersController');
		Route::resource('users.teams', 'UsersController');
		Route::resource('teams', 'TeamsController');
	});
