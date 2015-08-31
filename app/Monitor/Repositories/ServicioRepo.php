<?php namespace Monitor\Repositories;

use Monitor\Entities;
use Monitor\Entities\Servicio;

class ServicioRepo 
{
	
	public function all()
	{
		
		$servicios= Servicio::all();
		return $servicios;
	
	}
	
	public function newServcio()
	{
		$Servicio = new Servicio();
		return $Servicio;
	}
	
	
	public function find ($id,$slug)
	{
		$Servicio= Servicio::find($id);
		return $Servicio;
	}
	
	public function listado_servicios(){
	
		$servicios = [];
		foreach ($this->all() as $servicio)
		{
			$servicios[$servicio->id] = $servicio->servicio;
		}
	
		return $servicios;
	}
}
