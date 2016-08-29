<?php namespace Monitor\Manager;

class RegisterClientManager extends BaseManager
{
	public function getRules()
	{
		$rules = [
				'nombre'		=> 'required',
				'direccion'		=> 'required',
				'nacimiento' 	=> 'required|date',
				'telefono' 		=> 'required',
				'correo'		=> 'required|email',
				'ruta_id'  		=> 'required'];
		
		return $rules;
	}
}

