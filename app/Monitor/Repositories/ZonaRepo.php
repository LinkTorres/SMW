<?php namespace Monitor\Repositories;
use Monitor\Entities\Zona;

class ZonaRepo 
{
	public function getModel()
	{
		return new Zona();
	}
	
	public function all()
	{
		$zonas= Zona::all();
		return $zonas;
	}

	public function listado_zonas(){

		$zonas = [];
		foreach ($this->all() as $zona) 
		{
			$zonas[$zona->id] = $zona->zona;
		}	

		return $zonas;
	}
	
	
	
}
