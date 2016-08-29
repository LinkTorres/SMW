<?php namespace Monitor\Manager;

class RegisterRecolectorManager extends BaseManager
{
	public function getRules()
	{
		$rules = [
				'nombre'		=> 'required',
				'correo'		=> 'required|email|unique:recolectors,correo,'. $this->entity->id,
				'zona_id'  		=> 'required',
				'horario_id'  	=> 'required',
				'sueldo'		=> 'required|integer'
		];
		
		return $rules;
	}
}

