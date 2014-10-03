<?php

class UsersController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /users
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /users/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	public function getLogin(){
		return View::make('users.login');
	}

	public function getLogout(){
		Auth::logout();

		return Redirect::to('/')
			->with('message', 'Bye');
	}

	public function postLogin(){
		$_post = Input::all();
		$rules = User::$rules;

//		$validation = Validator::make( $_post, $rules );
//
//		if( $validation->fails()){
//			return Redirect::back()
//				->withErrors($validation)
//				->withInput(Input::except('password'));
//		}

		//try email
		if(Auth::attempt(array('email' => Input::get('email'), 'password' => Input::get('password')))){
			return Redirect::to('/')
				->with('message', 'Welcome');
		}

		//try username
		if(Auth::attempt(array('username' => Input::get('email'), 'password' => Input::get('password')))){
			return Redirect::to('/')
				->with('message', 'Welcome');
		}

		return Redirect::to('login')
			->withInput(Input::except('password'))
			->withErrors('Bad username/Password');
	}

	public function getRegister(){
		return View::make('users.register');
	}

	public function postRegister(){
		$_post = Input::all();

		dd($_post);
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /users
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /users/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /users/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /users/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /users/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}