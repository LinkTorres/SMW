<?php namespace Monitor\Repositories;

use Monitor\Entities\Pedido;



class PedidoRepo 
{
	
	public function all()
	{
		
		$pedidos= Pedido::all();
		return $pedidos;
	
	}
	public function misPedidos($id){
		$pedidos =Pedido::where('id_recolector_r', '=', $id )->whereIn('estatus_id', array(2,5))->orderBy('id_recoleccion', 'asc')->get();
		return $pedidos;
	}
	
	public function newPedido()
	{
		$pedidos = new Pedido();
		return $pedidos;
	}
	
	
	public function find ($id,$slug)
	{
		$pedidos= Pedido::find($id);
		return $pedidos;
	}

	
}
