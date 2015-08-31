<?php namespace Monitor\Repositories;
use Monitor\Entities\Hora;
use Monitor\Entities\Disponibilidad;

class Disponibilidad 
{
	
	public function lista_rutas()
	{
		$rutas = [];
		foreach ($this->all() as $ruta)
		{
			$rutas[$ruta->id] = $ruta->ruta;
		}
	
		return $rutas;
		
	}
	
}
