<?php namespace Monitor\Repositories;
use Monitor\Entities\Recolector;
use Monitor\Entities;
use Monitor\Entities\Ruta;
use Monitor\Entities\Zona;
use Monitor\Entities\Horario;
class RecolectorRepo 
{
	
	public function all()
	{
		
		$recolectors= Recolector::all();
		return $recolectors;
	
	}
	
	public function newRecolector()
	{
		$recolector = new Recolector();
		return $recolector;
	}
	
	public function lista_rutas()
	{
		$rutas = [];
		
		foreach (Ruta::all() as $ruta) 
		{
			$rutas[$ruta->id] = $ruta->ruta;
		}
		return $rutas;
	}
	
	public function lista_zonas()
	{
		$zonas = [];
	
		foreach (Zona::all() as $zona)
		{
			$zonas[$zona->id] = $zona->zona;
		}
		return $zonas;
	}
	
	public function lista_horarios()
	{
		$horarios = [];
	
		foreach (Horario::all() as $horario)
		{
			$horarios[$horario->id] = $horario->horario;
		}
		return $horarios;
	}
	
	public function find ($id,$slug)
	{
		$recolector= Recolector::find($id);
		return $recolector;
	}
}
