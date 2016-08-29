<?php namespace Monitor\Entities;


class Zona extends \Eloquent {
	protected $fillable = [];
	
	public function ruta(){
		return $this->hasMany('Monitor\Entities\Ruta');
		//Una zona puede tener muchas rutas
	}
	public function recolector()
	{
		return $this->hasMany('Monitor\Entities\Recolector');
		
	}
}