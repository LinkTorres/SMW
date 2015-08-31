<?php namespace Monitor\Manager;

class RegisterLavadoManager extends BaseManager
{
	public function getRules()
	{
		$rules = [
							
			  'kilos'   			=> 'required',
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

