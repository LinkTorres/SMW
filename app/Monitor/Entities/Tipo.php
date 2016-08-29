<?php namespace Monitor\Entities;


class Tipo extends \Eloquent {
	protected $fillable = [];

	
	public function minimo()
	{
		return $this->hasMany('Monitor\Entities\Minimo');
		//Un Tipo solo tiene un servicio
	}
	
	
}