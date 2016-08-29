<?php namespace Monitor\Entities;


class Minimo extends \Eloquent {
	protected $fillable = [];

	
	public function servicio()
	{
		return $this->belongsTo('Monitor\Entities\Servicio');
		
	}
	public function tipo()
	{
		return $this->belongsTo('Monitor\Entities\Tipo');
		//Un Minimo puede tener varios tipos
	}
	
}