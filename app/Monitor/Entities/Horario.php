<?php namespace Monitor\Entities;


class Horario extends \Eloquent {
	protected $fillable = [];
	
	public function recolector(){
		return $this->hasMany('Monitor\Entities\Recolector');
		//Una zona puede tener muchas rutas
	}
	
	
	
}