<?php

class StoresController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /stores
	 *
	 * @return Response
	 */
	public function index()
	{
		$tiles = array();

		$tiles[] = View::make('tile',array(
			'id' => 'storeIndex',
			'title' => 'random title',
			'content' => 'random content',
		))->render();

		$tiles[] = View::make('tile',array(
			'id' => 'teamIndex',
			'title' => 'random team title',
			'content' => 'random team content',
		))->render();

		return implode('', $tiles);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /stores/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('stores.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /stores
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /stores/{id}
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
	 * GET /stores/{id}/edit
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
	 * PUT /stores/{id}
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
	 * DELETE /stores/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}