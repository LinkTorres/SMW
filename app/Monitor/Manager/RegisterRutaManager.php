<?php namespace Monitor\Manager;

class RegisterRutaManager extends BaseManager
{
	public function getRules()
	{
		$rules=[
				'ruta'			=> 'required',
				'zona_id'  		=> 'required'
		];

		return $rules;
	}
}

