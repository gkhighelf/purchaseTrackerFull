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
		return View::make('masters.index');
	}

	public function getSearch(){
		return View::make('search');
	}
}
