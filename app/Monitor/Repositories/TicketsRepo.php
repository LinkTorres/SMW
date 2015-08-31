<?php namespace Monitor\Repositories;
use Monitor\Entities\Tickets;

class TicketsRepo 
{
	public function getModel()
	{
		return new Tickets();
	}
	
	public function all()
	{
		$tickets= Tickets::all();
		return $tickets;
	}
	
	public function newTicket()
	{
		$ticket = new Tickets();
		return $ticket;
	}
	//findOrFail
	public function find ($id,$slug)
	{
		$tickets= Tickets::find($id);
		return $tickets;
	}
	
}
