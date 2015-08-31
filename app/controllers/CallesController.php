<?php

class CallesController extends \BaseController {

	/**
	 * Display a listing of calles
	 *
	 * @return Response
	 */
	public function index()
	{
		$calles = Calle::all();

		return View::make('calles.index', compact('calles'));
	}

	/**
	 * Show the form for creating a new calle
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('calles.create');
	}

	/**
	 * Store a newly created calle in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Calle::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Calle::create($data);

		return Redirect::route('calles.index');
	}

	/**
	 * Display the specified calle.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$calle = Calle::findOrFail($id);

		return View::make('calles.show', compact('calle'));
	}

	/**
	 * Show the form for editing the specified calle.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$calle = Calle::find($id);

		return View::make('calles.edit', compact('calle'));
	}

	/**
	 * Update the specified calle in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$calle = Calle::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Calle::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$calle->update($data);

		return Redirect::route('calles.index');
	}

	/**
	 * Remove the specified calle from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Calle::destroy($id);

		return Redirect::route('calles.index');
	}

}
