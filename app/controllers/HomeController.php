<?php

class HomeController extends BaseController {

	public function showWelcome()
	{
		return View::make('hello');
	}

	public function getLogin(){
		return View::make('users.login');
	}

	public function index(){
		$index = View::make('stores.index' )->render();
		$create= View::make('stores.create')->render();

		return View::make('index')
			->with('index', $index )
			->with('create',$create);
	}

	public function getSearch(){
		return View::make('search');
	}
}
