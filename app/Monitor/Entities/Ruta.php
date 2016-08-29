<?php namespace Monitor\Entities;

class Ruta extends \Eloquent {


	protected $fillable = ['ruta','zona_id'];
	
    public function zona()
    {
    	return $this->belongsTo('Monitor\Entities\Zona');
    	//Una ruta puede tener muchas zonas
    }
    
	

}