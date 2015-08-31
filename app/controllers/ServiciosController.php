<?php

use Monitor\Repositories\ServicioRepo;
class ServiciosController extends \BaseController {

	protected $servicioRepo;
	
	public function __construct(ServicioRepo $servicioRepo)
	{
		$this->servicioRepo=$servicioRepo;
	}
	
	public function index()
	{
		
		$servicios = $this->servicioRepo->all();


		$id = Auth::id();
        $rol = Auth::user()->rol_id;
       

        switch ($rol) 
        {
            case 2:
                return View::make('servicios.indexM', compact('servicios'));
                break;

            case 3:
                	
            break;
            case 4:
                break;
            default:
               return View::make('servicios.index', compact('servicios'));
                break;
        }

		
	}

	/**
	 * Show the form for creating a new servicio
	 *
	 * @return Response
	 */
	public function create()
	{
		
		return View::make('servicios.create');
	}

	/**
	 * Store a newly created servicio in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Servicio::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Servicio::create($data);

		return Redirect::route('servicios.index');
	}

	/**
	 * Display the specified servicio.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$servicio = Servicio::findOrFail($id);

		return View::make('servicios.show', compact('servicio'));
	}

	/**
	 * Show the form for editing the specified servicio.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$servicio = Servicio::find($id);

		return View::make('servicios.edit', compact('servicio'));
	}

	/**
	 * Update the specified servicio in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$servicio = Servicio::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Servicio::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$servicio->update($data);

		return Redirect::route('servicios.index');
	}

	/**
	 * Remove the specified servicio from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Servicio::destroy($id);

		return Redirect::route('servicios.index');
	}

}
