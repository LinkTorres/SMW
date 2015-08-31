<?php namespace Monitor\Entities;

class Tickets extends \Eloquent {


	protected $fillable = ['cliente_id','estatus_id','cupo','pago','monto','fecha'];
	
    public function cliente()
	{
		return $this->hasMany('Monitor\Entities\Cliente','id', 'cliente_id');
		//belongsTo
	}
	
	 public function pagar()
	{
		return $this->hasMany('Monitor\Entities\Pago','id', 'pago');
		//belongsTo
	}

}