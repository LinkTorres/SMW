<?php namespace Monitor\Repositories;
use Monitor\Entities\User;

class UserRepo 
{
	public function getModel()
	{
		return new User();
	}
	
	public function all()
	{
		$usuarios= User::all();
		return $usuarios;
	}

	public function listado_Users(){

		$usuarios = [];
		foreach ($this->all() as $User) 
		{
			$usuarios[$User->id] = $User->User;
		}	

		return $usuarios;
	}

	
	
	
}
