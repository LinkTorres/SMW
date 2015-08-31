<?php

use Monitor\Entities\Cliente;
use Monitor\Entities\Zona;
use Monitor\Manager\RegisterClientManager;
use Monitor\Repositories\ClienteRepo;


class ClientesController extends \BaseController {

	protected $clienteRepo;
	
	public function __construct(ClienteRepo $clienteRepo)
	{
		$this->clienteRepo=$clienteRepo;	
	}

	
	public function index()
	{
		$clientes = $this->clienteRepo->all();
		$id = Auth::id();
        $rol = Auth::user()->rol_id;
       

        switch ($rol) {
                case 2:
                    return View::make('clientes.indexM',compact('clientes'));
                    break;

                case 3:
                    	
                break;
                case 4:
                    break;
                default:
                   return View::make('sesion');
                    break;
            }
		//return View::make('clientes.index',compact('clientes'));
	
	}

	
	public function create()
	{
		
		$rutas = $this->clienteRepo->lista_rutas();
		return View::make('clientes.create',compact('rutas')) ;
	}

	public function store()
	{
		$cliente= $this->clienteRepo->newClient();
		$manager = new RegisterClientManager($cliente,Input::all());
		
		if($manager->save())
		{
			return Redirect::route('altaCliente');
		}

		else
		{
			return Redirect::back()->withInput()->withErrors($manager->getErrors());
		}
	}

	
	public function show($slug,$id)
	{
		$cliente = $this->clienteRepo->find($id,$slug);
		$this->clienteRepo= new ClienteRepo();
		$rutas=$this->clienteRepo->lista_rutas();
	
		return View::make('clientes.show', compact('cliente','rutas'));
	}
	
	public function edit($id)
	{	$slug=null;
	$cliente = $this->clienteRepo->find($id,$slug);
	$this->clienteRepo= new ClienteRepo();
	$rutas=$this->clienteRepo->lista_rutas();
	
	return View::make('clientes.edit', compact('cliente','rutas'));
	}
	

	
	public function update($id)
	{
		$cliente = $this->clienteRepo->find($id,null);
		$manager = new RegisterClientManager($cliente,Input::all());
		
		if($manager->save())
		{
			return Redirect::route('clientes');
		}
		
		else
		{
			return Redirect::back()->withInput()->withErrors($manager->getErrors());
		}
		
	
	}

	
	public function destroy($id)
	{
		//
	}


}