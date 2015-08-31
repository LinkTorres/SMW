<?php namespace Monitor\Repositories;
use Monitor\Entities\Ruta;
use Monitor\Entities\Recolector;

class RutaRepo 
{
	public function getModel()
	{
		return new Ruta();
	}
	
	public function all()
	{
		$rutas= Ruta::all();
		return $rutas;
	}
	
	public function newRuta()
	{
		$ruta = new Ruta();
		return $ruta;
	}
	//findOrFail
	public function find ($id,$slug)
	{
		$rutas= Ruta::find($id);
		return $rutas;
	}
	public function lista_rutas()
	{
		$rutas = [];
		foreach ($this->all() as $ruta)
		{
			$rutas[$ruta->id] = $ruta->ruta;
		}
	
		return $rutas;
		
	}
	public function recolectores(){

		$recolectores = [];
		foreach (Recolector::all() as $recolector) {
		$recolectores[$recolector->id] = $recolector->nombre;
		}

		return $recolectores;
	}
}
