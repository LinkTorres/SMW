<?php namespace Monitor\Manager;

class RegisterOrderManager extends BaseManager
{
	public function getRules()
	{
		$rules = [
				'nombre'		=> 'required|min:5',
				'direccion'		=> 'required|min:5',
				'telefono' 		=> 'required|min:6',
				/*
				'correo'		=> 'required|email|unique:clientes,correo,'. $this->entity->id,*/
				'correo' => 'required',
				'fecha_recoleccion'  		=> 'required',
				'hora_recoleccion' => 'required'


				];
		
		return $rules;
	}  
}

