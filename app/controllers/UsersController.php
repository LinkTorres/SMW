<?php
use Monitor\Repositories\ZonaRepo;

class ZonasController extends \BaseController {

	protected  $zonaRepo;
	
	public function __construct(ZonaRepo $zonaRepo)
	{
		$this->zonaRepo = $zonaRepo;
	} 
	 
	public function index()
	{
		$zonas = $this->zonaRepo->all();
		return View::make('zonas.index',compact('zonas'));
	}

	/**
	 * Show the form for creating a new zona
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('zonas.create');
	}

	/**
	 * Store a newly created zona in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Zona::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		//Zona::create($data);

		return Redirect::route('zonas.index');
	}

	/**
	 * Display the specified zona.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$zona = Zona::findOrFail($id);

		return View::make('zonas.show', compact('zona'));
	}

	/**
	 * Show the form for editing the specified zona.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$zona = Zona::find($id);

		return View::make('zonas.edit', compact('zona'));
	}

	/**
	 * Update the specified zona in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$zona = Zona::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Zona::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$zona->update($data);

		return Redirect::route('zonas.index');
	}

	/**
	 * Remove the specified zona from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Zona::destroy($id);

		return Redirect::route('zonas.index');
	}

}
