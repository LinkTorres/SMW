<?php

use Monitor\Repositories\PedidoRepo;
use Monitor\Repositories\TicketsRepo;
use Monitor\Repositories\ServicioRepo;
use Monitor\Repositories\RutaRepo;
use Monitor\Repositories\HorarioRepo;
use Monitor\Manager\RegisterLavadoManager;
use Monitor\Manager\RegisterTicketManager;
use Monitor\Manager\RegisterPedidoManager;
use Monitor\Manager\RegisterOrderManager;

class OrdenController extends \BaseController {

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
		$rutas = $this->rutaRepo->lista_rutas();
		$servicio= $this->servicioRepo->listado_servicios();
		$info2 = date('d-m-Y H:i');
		Log::info($info2);
		return View::make('orden', compact('rutas','servicio','info2'));
	}

	/**
	 * Show the form for creating a new pedido
	 *
	 * @return Response
	 */
	public function create()
	{

	}

	/**
	 * Store a newly created pedido in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$data = Input::all();
		
		$orden = $this->pedidoRepo->newPedido();
		$manager = new RegisterOrderManager($orden, $data);

		$valido=$manager->isValid();
	
		
		if($valido)
		{

			$id = DB::table('clientes')->where('correo',$data['correo'])->count();
			Log::info("id ".$id);
			if (!($id>0))
			{
			Log::info($data);
			$cliente= new Cliente();
			$cliente->nombre	=$data['nombre'];
			$cliente->direccion	=$data['direccion'];
			$cliente->direccion = $cliente->direccion . " Entre: " . $data['calles'];
			$cliente->telefono	=$data['telefono'];
			$cliente->correo	=$data['correo'];
			$cliente->ruta_id	=$data['colonia_e'];
			$cliente->save();
			}
			//Borrar estas lineas
					//$cliente->id= 151;
			//*************
			$pedido = new Pedido();
			
			//Ticket
			$user = DB::table('clientes')->where('correo',$data['correo'])->first();
			$ticket= $this->ticketsRepo->newTicket();
			$ticket->cliente_id=$user->id;
			$ticket->estatus_id=1;
			$ticket->pago=$data['pago'];
			$ticket->save();


			//Pedido
			$pedido->servicio_tipo_id=$data['servicio'];
			$pedido->ticket_id=$ticket->id;
			$pedido->medio_id=2;
			$pedido->estatus_id=1;
			$pedido->id_colonia_r=$data['colonia_e'];
			$pedido->descripcion=utf8_decode($data['descripcion']);

			$servicio_solicitado="";
			$costo="";
			$pago="";
			$descripcion="";
			$colonia="";




			switch ($data['servicio']) 
			{
				case 1:
					$servicio_solicitado="Lavado";
					$costo="140";
					$descripcion="$".number_format($costo,2). " por 4kg de ropa, el costo aumenta por kg adicional";
				break;
				
				case 2:
				$servicio_solicitado="Planchado";
					$costo="135";
					$descripcion="$".number_format($costo,2). " por 12 piezas de ropa, el costo aumenta por pieza adicional";


				break;

				case 3:
					$servicio_solicitado="Servicio Completo";
					$costo="180";
					$descripcion="$".number_format($costo,2). " por 12 piezas de lavado y planchado, el costo aumenta por pieza adicional";


				break;
				
			}
			switch ($data['pago']) 
			{
				case 1:
					$pago= "Efectivo";
					break;
				case 2:
					$pago= "Tarjeta de Crédito";
					break;
				case 3:
					$pago= "Tarjeta de Débito";
					break;		

			}

			switch ($data['colonia_e']) {
				case 1:
					$colonia = "Roma";
					break;
				case 2:
					$colonia = "Condesa";
					break;
				case 3:
					$colonia = "Escandon";
					break;
				case 4:
					$colonia = "Del Valle";
					break;
				case 5:
					$colonia = "Napoles";
					break;
			}

		
		
			$id_recoleccion=$this->horarioRepo->ocuparHorario($data['iptFR'], $data['hora_recoleccion'],$data['colonia_e']);
			$id_entrega=$this->horarioRepo->agregaHoraEntrega($data['iptFR'], $data['hora_recoleccion'],$data['colonia_e']);

			$pedido->id_recoleccion=$id_recoleccion;
			$pedido->id_entrega =$id_entrega;		
			$pedido->save();

			$hora_entrega="";
			$fecha_entrega="";
			$hora_recoleccion="";
			
			
			$horario_entrega=$this->horarioRepo->id_horario($id_entrega);
			$horario_recoleccion=$this->horarioRepo->id_horario($id_recoleccion);

			foreach ($horario_entrega as  $valores) {
				$hora_entrega=$valores->hora;
				$fecha_entrega=$valores->fecha;
			}

			foreach ($horario_recoleccion as  $valores) {
				$hora_recoleccion=$valores->hora;
				
			}

			
			$id_recolector=$this->horarioRepo->agregaHorarioRecoleccion($pedido->id, $id_recoleccion, $pedido->id_colonia_r,$data['hora_recoleccion'] );
			$this->horarioRepo->asignaRecolectorE($pedido->id,$id_recolector);
			$info = array('cliente' => $data['nombre'], 
							'ticket'=> $ticket->id,
							'telefono'=>$data['telefono'],
							'creado'=>date('d-m-Y H:i'),
							'recoleccion'=> $data['fecha_recoleccion'],
							'direccion'=>   $data['direccion']. " Entre: " . $data['calles'],
							'costo'=>$costo,
							'servicio'=>$servicio_solicitado,
							'correo'=>$data['correo'],
							'pago' =>$pago,
							'hora_recoleccion' =>$hora_recoleccion,
							'hora_entrega' =>$hora_entrega,
							'fecha_entrega' => $fecha_entrega,
							'descripcion' => $descripcion,
							'colonia' => $colonia

							);
		//echo "<pre>".print_r($horario_entrega,true)."</pre>";
			return View::make('historial', compact('info'));
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

		return View::make('lavado.show', compact('pedido'));
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

		return View::make('lavado.edit', compact('pedido'));
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

		return Redirect::route('lavado.index');
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

		return Redirect::route('lavado.index');
	}

}
