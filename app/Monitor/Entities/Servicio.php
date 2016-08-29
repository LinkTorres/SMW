<?php namespace Monitor\Entities;


class Servicio extends \Eloquent {
	protected $fillable = [];
	
	public function minimo()
	{
		return $this->belongsTo('Monitor\Entities\Minimo');
		//Un Servicio puede tener varios minimo
		
	}
	
	public function pedido()
	{
		return $this->hasMany('Monitor\Entities\Pedido');
		
	}
	
}