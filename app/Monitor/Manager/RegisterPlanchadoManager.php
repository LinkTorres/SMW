<?php namespace Monitor\Manager;

class RegisterPlanchadoManager extends BaseManager
{
	public function getRules()
	{
		$rules = [
							
			  'piezas'   			=> 'required',
			  'fecha_recoleccion'   => 'required',
			  'hora_recoleccion'   	=> 'required',
			  'recoleccion'  		=> 'required',
			  'colonia_r' 			=> 'required',
			  'fecha_entrega'   	=> 'required',
			  'hora_entrega'   		=> 'required',
			  'direccion'   		=> 'required',
			  'colonia_e' 			=> 'required'
				];
		return $rules;
	}
}

