<?php namespace Monitor\Manager;

class RegisterTicketManager extends BaseManager
{
	public function getRules()
	{

		$rules = [
							
			  'cliente_id'   			=> 'required',
			  'estatus_id'   			=> 'required',
			  'cupo'   					=> 'required',
			  'pago'  					=> 'required',
			  'monto' 					=> 'required'
				];
		
		return $rules;
	}
}

