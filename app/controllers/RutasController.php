<?php

use Monitor\Repositories\RutaRepo;
use Monitor\Repositories\ZonaRepo;
use Monitor\Manager\RegisterRutaManager;
class RutasController extends \BaseController {

	protected $rutaRepo;
	protected $zonaRepo;
	
	public function __construct(RutaRepo $rutaRepo)
	{
		$this->rutaRepo= $rutaRepo;
	}
	
	public function index()
	{
		$rutas = $this->rutaRepo->all();
		return View::make('rutas.index', compact('rutas'));

	}

	
	public function create()
	{
		$this->zonaRepo= new ZonaRepo();
		$zonas=$this->zonaRepo->listado_zonas();

		return View::make('rutas.create', compact('zonas'));		
	}

	
	public function store()
	{
		$ruta = $this->rutaRepo->newRuta();
		$manager = new RegisterRutaManager($ruta,Input::all());
		
		if($manager->save())
		{
			return Redirect::route('altaRutas');
			//return "alta exitosa";
		}
		
		else
		{
			return Redirect::back()->withInput()->withErrors($manager->getErrors());
		}
	}

	
	public function show($slug,$id)
	{
		$ruta = $this->rutaRepo->find($id,$slug);
		$this->zonaRepo= new ZonaRepo();
		$zonas=$this->zonaRepo->listado_zonas();
		
		return View::make('rutas.show', compact('ruta','zonas'));
	}

	public function edit($id)
	{	$slug=null;
		
		$ruta = $this->rutaRepo->find($id,$slug);
		$this->zonaRepo= new ZonaRepo();
		$zonas=$this->zonaRepo->listado_zonas();		

		return View::make('rutas.edit', compact('ruta','zonas'));
	}

	
	public function update($id)
	{
		
        $ruta = $this->rutaRepo->find($id,null);
        $manager = new RegisterRutaManager($ruta,Input::all());
        $manager->save();
        

		return Redirect::route('zonas');
	}

	
	public function destroy($id)
	{
		//Ruta::destroy($id);

		return Redirect::route('zonas');
	}

}
