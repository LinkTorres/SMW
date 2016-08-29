<?php namespace Monitor\Manager;

class RegisterPedidoManager extends BaseManager
{
	public function getRules()
	{
		
		$rules = [
				'ticket_id'		=> 'required',
				'servicio_tipo_id'		=> 'required',
				'medio_id'  		=> 'required',
				'estatus_id'  	=> 'required',
				'kilos'			=> 'required',
				'id_colonia_r'	=> 'required',
				'id_colonia_e'	=> 'required'
		];
		
		return $rules;
	}
}

