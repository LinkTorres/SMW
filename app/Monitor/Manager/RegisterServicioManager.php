<?php namespace Monitor\Manager;

class RegisterServicioManager extends BaseManager
{
	public function getRules()
	{
		$rules = [
				'servicio'		=> 'required'
				];
		
		return $rules;
	}
}

