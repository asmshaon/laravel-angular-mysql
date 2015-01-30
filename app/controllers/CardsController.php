<?php

class CardsController extends \BaseController {

	protected $layout = 'master';

	/**
	 * Display a listing of the resource.
	 * GET /cards
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /cards/create
	 *
	 * @return Response
	 */
	public function create()
	{
		$this->layout->title   = "Credit Card :: create new";
		$this->layout->content = View::make('cards.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /cards
	 *
	 * @return Responseprotected $layout = 'master';
	 */
	public function store()
	{
		$card = new Card(Input::all());

		if ($card->save()) {
			return $card;
		} else {
			return Redirect::back()->withInput()->withErrors($card->errors());
		}
	}

	/**
	 * Display the specified resource.
	 * GET /cards/{id}
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
	 * GET /cards/{id}/edit
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
	 * PUT /cards/{id}
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
	 * DELETE /cards/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}