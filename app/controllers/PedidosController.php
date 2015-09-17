<?php

use Monitor\Repositories\PedidoRepo;
use Monitor\Repositories\ServicioRepo;
use Monitor\Repositories\RutaRepo;
use Monitor\Repositories\HorarioRepo;
use Monitor\Manager\RegisterLavadoManager;
use Monitor\Entities\Pedido;

class PedidosController extends \BaseController {

	protected $pedidoRepo;
	protected $servicioRepo;
	protected $rutaRepo;
	protected $horarioRepo;
	
	
	public function __construct(PedidoRepo $pedidoRepo, ServicioRepo $servicioRepo, RutaRepo $rutaRepo, HorarioRepo $horarioRepo)
	{
		$this->pedidoRepo=$pedidoRepo;
		$this->servicioRepo= $servicioRepo;
		$this->rutaRepo=$rutaRepo;
		$this->horarioRepo=$horarioRepo;
	}
	
	
	public function index()
	{
	
		$pedidos=$this->pedidoRepo->all();
		$recolectores =$this->rutaRepo->recolectores();

		$id = Auth::id();
        $rol = Auth::user()->rol_id;
       

        switch ($rol) 
        {
            case 2:
				return View::make('pedidos.indexM',compact('pedidos','recolectores'));
                
                break;

            case 3:
                	
            break;
            case 4:
                break;
            default:
				return View::make('pedidos.index',compact('pedidos','recolectores'));
               
                break;
        }
	}

	/**
	 * Show the form for creating a new pedido
	 *
	 * @return Response
	 */
	public function create()
	{
		$servicios = $this->pedidoRepo->all();
		return View::make('pedidos.create', compact($zonas));
	}

	/**
	 * Store a newly created pedido in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$data = Input::all();
		$pedido = $this->pedidoRepo->newPedido();
		
		switch ($data['servicio_id']) {
			case 1:
				//'ticket_id','servicio_tipo_id','piezas','kilos','descripcion','medio_id','estatus_id'
				$manager = new RegisterLavadoManager($pedido, $data);
				$valido=$manager->isValid();
			break;
			
		}	dd($data);
	
		if($valido)
		{
			
			dd($data);
			/*	$this->entity->fill($this->data);
			 	$this->entity->save();
			*/
			
			//Tiene toda la información,
			//crear el ticket
			
			//Crear el Pedido de lavado
			
			//Crear fechas pedido
						
		}
		
		else
		{
			return Redirect::back()->withInput()->withErrors($manager->getErrors());
		}
	}

	/**
	 * Display the specified pedido.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$pedido = Pedido::findOrFail($id);

		return View::make('pedidos.show', compact('pedido'));
	}

	/**
	 * Show the form for editing the specified pedido.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$pedido = Pedido::find($id);

		return View::make('pedidos.edit', compact('pedido'));
	}

	/**
	 * Update the specified pedido in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$pedido = Pedido::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Pedido::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$pedido->update($data);

		return Redirect::route('pedidos.index');
	}

	/**
	 * Remove the specified pedido from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Pedido::destroy($id);

		return Redirect::route('pedidos.index');
	}

	public function cancelarRecoleccion($id)
	{
		Log::info("Pedido ".$id);
		//$pedido = $this->pedidoRepo->find($id,$id);
		//Log::info("Pedido ".$pedido);

		

		return Redirect::route('recolector');

	}

	public function cancelarEntrega($id)
	{
		$pedido = Pedido::find($id);

		$pedido->estatus_id = (int)'9';

		$pedido->save();

		return Redirect::route('recolector');

	}


}
