<?php

class MinimosController extends \BaseController {

	/**
	 * Display a listing of minimos
	 *
	 * @return Response
	 */
	public function index()
	{
		$minimos = Minimo::all();

		return View::make('minimos.index', compact('minimos'));
	}

	/**
	 * Show the form for creating a new minimo
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('minimos.create');
	}

	/**
	 * Store a newly created minimo in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Minimo::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Minimo::create($data);

		return Redirect::route('minimos.index');
	}

	/**
	 * Display the specified minimo.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$minimo = Minimo::findOrFail($id);

		return View::make('minimos.show', compact('minimo'));
	}

	/**
	 * Show the form for editing the specified minimo.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$minimo = Minimo::find($id);

		return View::make('minimos.edit', compact('minimo'));
	}

	/**
	 * Update the specified minimo in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$minimo = Minimo::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Minimo::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$minimo->update($data);

		return Redirect::route('minimos.index');
	}

	/**
	 * Remove the specified minimo from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Minimo::destroy($id);

		return Redirect::route('minimos.index');
	}

}
