<?php

use Monitor\Repositories\PedidoRepo;
use Monitor\Repositories\TicketsRepo;
use Monitor\Repositories\ServicioRepo;
use Monitor\Repositories\RutaRepo;
use Monitor\Repositories\HorarioRepo;
use Monitor\Manager\RegisterPlanchadoManager;
use Monitor\Manager\RegisterTicketManager;
use Monitor\Manager\RegisterPedidoManager;

class planchadoController extends \BaseController {

	protected $pedidoRepo;
	protected $servicioRepo;
	protected $rutaRepo;
	protected $horarioRepo;
	protected $ticketsRepo;
	
	
	public function __construct(PedidoRepo $pedidoRepo, ServicioRepo $servicioRepo, RutaRepo $rutaRepo, HorarioRepo $horarioRepo, TicketsRepo $ticketRepo)
	{
		$this->pedidoRepo=$pedidoRepo;
		$this->servicioRepo= $servicioRepo;
		$this->rutaRepo=$rutaRepo;
		$this->horarioRepo=$horarioRepo;
		$this->ticketsRepo= $ticketRepo;
	}
	
	
	public function index()
	{
		$listado_servicios = $this->servicioRepo->listado_servicios();
		$servicio = $this->servicioRepo->find(2, "");
		$rutas = $this->rutaRepo->lista_rutas();

		$id = Auth::id();
        $rol = Auth::user()->rol_id;
       

        switch ($rol) 
        {
            case 2:
                return View::make('planchado.createM', compact('listado_servicios','servicio','rutas'));
                break;

            case 3:
                	
            break;
            case 4:
                break;
            default:
               return View::make('planchado.create', compact('listado_servicios','servicio','rutas'));
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
		
		$data['cliente']=1;
		$pedido = $this->pedidoRepo->newPedido();
		
		
		$data['estatus_id']=1;
		//'ticket_id','servicio_tipo_id','piezas','piezas','descripcion','medio_id','estatus_id'
		$piezas = $data['piezas'];
		
		$monto= ($piezas>= $data['iptMin'])? ($data['iptCosto']/ $data['iptMin']) * $piezas : $data['iptCosto'];
		
		
		$manager = new RegisterpLanchadoManager($pedido, $data);
		$valido=$manager->isValid();
	
		
		if($valido)
		{
			
		$data_ticket=array('cliente_id'=>$data['cliente'],'estatus_id'=>$data['estatus_id'],'cupo'=>0,'pago'=>1,'monto'=>$monto);
			
			$ticket = $this->ticketsRepo->newTicket();
			$manager_ticket= new RegisterTicketManager($ticket,$data_ticket);
			$manager_ticket->save();
			if($manager_ticket->isValid()){
				$ticket_id= $manager_ticket->getId();
				$pedido= $this->pedidoRepo->newPedido();
				$data_pedido=array('ticket_id'=>$ticket_id,'servicio_tipo_id'=>2,'piezas'=>$piezas,'medio_id'=>1,'estatus_id'=>1,'id_colonia_e' => $data['colonia_e'],'id_colonia_r' => $data['colonia_r']);
			
				$manager_pedido = new RegisterPedidoManager($pedido, $data_pedido);
				$valido=$manager_pedido->isValid();
				$manager_pedido->save();
				echo "<pre>valido: ".print_r($valido,true)."</pre>";

				echo "<pre>Id pedido: ".print_r($manager_pedido->getId(),true)."</pre>";
				if($valido){
					//Guardar las fechas y hora de recolección y entrega
					//echo "<pre>Falta gaurdar fechas".print_r($valido,true)."</pre>";
					
					//Verificar si los horarios aun estan disponibles
					//echo "<pre>FR ".print_r($data['iptFR'],true)."</pre>";
					//echo "<pre>FE ".print_r($data['iptFE'],true)."</pre>";
					$id_recoleccion=$this->horarioRepo->ocuparHorario($data['iptFR'], $data['hora_recoleccion']);
					$id_entrega=$this->horarioRepo->ocuparHorario($data['iptFE'], $data['hora_entrega']);
					
					$this->horarioRepo->agregaHorariosAPedidos($manager_pedido->getId(), $id_recoleccion, $id_entrega);
					
					//Quitar disponibilidad de las fechas recoleccion y entrega
					
					
					//return Redirect::route('pedidos');
					//actualizar el pedido con los horarios de recoleccion y entrega
				}
				else {
					//echo "<pre>No se guardo el Pedido</pre>";
					//dd($manager_pedido->getErrors());
					return Redirect::back()->withInput()->withErrors($manager->getErrors(),array('disponible' =>'0' ));
				}
			
				
			}
			
			//Tiene toda la información,
			//crear el ticket
				
				
			//Crear el Pedido de planchado
				$data_pedido=array();
			//Crear fechas pedido
			$data_fecha=array();
		
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

		return View::make('planchado.show', compact('pedido'));
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

		return View::make('planchado.edit', compact('pedido'));
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

		return Redirect::route('planchado.index');
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

		return Redirect::route('planchado.index');
	}

}
