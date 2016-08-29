<?php namespace Monitor\Entities;

class Pedido extends \Eloquent {

protected $fillable = ['ticket_id','servicio_tipo_id','piezas','kilos','descripcion','medio_id','estatus_id','id_recoleccion','id_entrega','id_colonia_e','id_colonia_r'];


	public function servicio()
	{
		return $this->hasMany('Monitor\Entities\Servicio','id', 'servicio_tipo_id');
		
		//belongsTo
	}

	public function ticket()
	{
		return $this->hasMany('Monitor\Entities\Tickets','id', 'ticket_id');
		//belongsTo
	}

	public function entrega()
	{
		return $this->hasMany('Monitor\Entities\Ruta','id', 'id_colonia_e');
		//belongsTo
	}

	public function recoleccion()
	{
		return $this->hasMany('Monitor\Entities\Ruta','id', 'id_colonia_r');
		//belongsTo
	}


	public function recolector(){
		return $this->hasMany('Monitor\Entities\Recolector','id','id_recolector_r');

	}
	public function entregador(){
		return $this->hasMany('Monitor\Entities\Recolector','id','id_recolector_e');

	}


	public function fechaRecoleccion(){
		return $this->hasMany('Monitor\Entities\Disponibilidads','id', 'id_recoleccion');

	}

	public function fechaEntrega(){
		return $this->hasMany('Monitor\Entities\Disponibilidads','id', 'id_entrega');

	}
	
	public function statusOrden()
	{
		return $this->hasMany('Monitor\Entities\Statu','id', 'estatus_id');
		
	}
	
}

