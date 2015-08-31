<?php namespace Monitor\Entities;

class Recolector extends \Eloquent {

	// Add your validation rules here

	// Don't forget to fill this array
	protected $fillable = ['nombre','correo','zona_id','horario_id', 'sueldo'];

	public function zona()
	{
		return $this->belongsTo('Monitor\Entities\Zona');
	}
	
	public function horario()
	{
		return $this->belongsTo('Monitor\Entities\Horario');
	}
}