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
        $array = array();
        $array = array();
		foreach ($clientes as $cliente){
			$array = array_add($array,$cliente->id,$cliente->nombre);
		}


        switch ($rol) {
                case 2:
                    return View::make('clientes.indexM',compact('clientes','array'));
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
		Log::info('Hola1');
		$cliente = $this->clienteRepo->find($id,$slug);
		$this->clienteRepo= new ClienteRepo();
		$rutas=$this->clienteRepo->lista_rutas();
		$pedidos = DB::table('tickets')
					->join('pedidos', 'tickets.id', '=', 'pedidos.ticket_id')
					->join('disponibilidads', 'pedidos.id_recoleccion', '=', 'disponibilidads.id')
					->join('servicios', 'pedidos.servicio_tipo_id', '=', 'servicios.id')
					->where('tickets.cliente_id', '=', $id)
					->get();

		$total =  DB::table('tickets')
					->join('pedidos', 'tickets.id', '=', 'pedidos.ticket_id')
					->join('disponibilidads', 'pedidos.id_recoleccion', '=', 'disponibilidads.id')
					->join('servicios', 'pedidos.servicio_tipo_id', '=', 'servicios.id')
					->where('tickets.cliente_id', '=', $id)
					->sum('monto');

		Log::info(json_decode(json_encode($pedidos), true));

		return View::make('clientes.show', compact('cliente','rutas','pedidos','total'));
	}

	public function cortesias()
	{

		$pedidos = DB::table('tickets')
							->join('pedidos', 'tickets.id', '=', 'pedidos.ticket_id')
							->join('clientes', 'tickets.cliente_id', '=', 'clientes.id')
							->join('disponibilidads', 'pedidos.id_recoleccion', '=', 'disponibilidads.id')
							->where('tickets.monto', '=', 0)
							->get();

		Log::info(json_decode(json_encode($pedidos), true));

		return View::make('pedidos.cortesias', compact('pedidos'));
	}

	public function edit($id)
	{	$slug=null;
		Log::info('Hola2');
	$cliente = $this->clienteRepo->find($id,$slug);
	$this->clienteRepo= new ClienteRepo();
	$rutas=$this->clienteRepo->lista_rutas();

	return View::make('clientes.edit', compact('cliente','rutas'));
	}



	public function update($id)
	{
		Log::info(Input::all());
		$cliente = array_except(Input::all(), array('_method', '_token'));
		Log::info($cliente);
		DB::table('clientes')
            ->where('id', $id)
            ->update($cliente);

		Log::info('Hola4');
		return Redirect::route('clientes');



	}


	public function destroy($id)
	{
		//
	}


}
