<?php namespace Monitor\Entities;

class Disponibilidads extends \Eloquent {


	protected $fillable = ['fecha','hora_id','disponible'];
	


    public function hora()
    {
    	return $this->belongsTo('Monitor\Entities\Hora');
    	//Una ruta puede tener muchas zonas
    }
   	
	

}