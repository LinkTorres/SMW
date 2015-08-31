<?php namespace Monitor\Repositories;
use Monitor\Entities\Cliente;
use Monitor\Entities;
use Monitor\Entities\Ruta;
class ClienteRepo 
{
	
	public function all()
	{
		
		$clientes= Cliente::all();
		return $clientes;
	
	}
	
	public function newClient()
	{
		$cliente = new Cliente();
		return $cliente;
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
	
	public function find ($id,$slug)
	{
		$cliente= Cliente::find($id);
		return $cliente;
	}
}
