<?php namespace Monitor\Entities;

class Rol extends \Eloquent {


	protected $fillable = [];
	
    public function usuario()
    {
    	return $this->belongsTo('Monitor\Entities\User');
    	//Una Rol puede tener muchas Usuarios
    }
	

}