<?php

use Monitor\Entities\Zona;
use Monitor\Repositories\RutaRepo;
use Monitor\Repositories\ServicioRepo;
use Monitor\Repositories\HorarioRepo;
use Monitor\Repositories\PedidoRepo;



class HomeController extends \BaseController {

	protected $servicioRepo;
	protected $rutaRepo;
	protected $horarioRepo;
	protected $pedidoRepo;

	
	
	public function __construct(PedidoRepo $pedidoRepo, ServicioRepo $servicioRepo, RutaRepo $rutaRepo, HorarioRepo $horarioRepo)
	{
		
		
		$this->servicioRepo= $servicioRepo;
		$this->rutaRepo=$rutaRepo;
		$this->horarioRepo=$horarioRepo;
		$this->pedidoRepo=$pedidoRepo;
	}
	
	public function showWelcome()
	{
		return View::make('index');
	}

	public function index()
	{
		$zonas= Zona::all();

		
		return View::make('zonas/index')->with ('zonas',$zonas);;
		
		//return "Mensaje de Hola";
	}

	/*
	public function ordenes()
	{
		return View::make('ordenes');
	}
	*/


	public function orden(){

		
		$rutas = $this->rutaRepo->lista_rutas();
		$info2 = date('d-m-Y H:i');
		Log::info($info2);
		return View::make('orden', compact('rutas'))->with('info2',$info2);
	}
	
	

	public function historial(){

		$pedidos= $this->pedidoRepo->all();
		return View::make('historial', compact('pedidos'));
	}


	public function lavado(){
		return View::make('lavado');
	}
	public function planchado(){
		return View::make('planchado');
	}
	public function cliente(){
		return View::make('cliente');
	}
	public function correo(){

		
	}

	public function configuracion(){
		return View::make('configuracion');
	}
	
	public function manager(){
		return View::make('manager');
		
	}
	public function monitor(){
		return View::make('monitor');
	
	}

	public function promociones(){
		return View::make('pedidos/promociones');
	
	}
	public function corporativo1(){
		return View::make('pedidos/corporativo1');
	
	}
	public function corporativo2(){
		return View::make('pedidos/corporativo2');
	
	}
	public function corporativo3(){
		return View::make('pedidos/corporativo3');
	
	}

	public function promociones2(){
		
		return Redirect::away('http://core.mintwash.com.mx/pedidos', 301);
	}

	public function principal(){
		$data = array(1,2,3);
		Mail::send('correo2', $data, function($message)
		{
		    $message->from('noreply@mintwash.com.mx', 'Mint Wash');

		    $message->to('et_3001@hotmail.com');

		    
		});
		return Redirect::away('http://mintwash.com.mx/', 301);
	
	}

	public function ordenMail($id){
		

		$ticket = DB::table('tickets')->where('id',$id)->first();
		$cliente =  DB::table('clientes')->where('id',$ticket->cliente_id)->first();
		$pedido = DB::table('pedidos')->where('ticket_id',$id)->first();
		$fechaRecoleccion = DB::table('disponibilidads')->where('id',$pedido->id_recoleccion)->first();
		$fechaEntrega = DB::table('disponibilidads')->where('id',$pedido->id_entrega)->first();
		$servicio = DB::table('servicios')->where('id',$pedido->servicio_tipo_id)->first();
		$horaRecoleccion = DB::table('horas')->where('id',$fechaRecoleccion->hora_id)->first();
		try{
			$horaEntrega = DB::table('horas')->where('id',$fechaEntrega->hora_id)->first();}
		catch(Exception $e){

		}
		$colonia = DB::table('rutas')->where('id',$cliente->ruta_id)->first();

		$data = array('cliente' => $cliente->nombre, 
							'ticket'=> $ticket->id,
							'creado'=>date('d-m-Y H:i'),
							'recoleccion'=> $fechaRecoleccion->fecha,
							'direccion'=>   $cliente->direccion,
							'servicio'=>$servicio->servicio,
							'hora_recoleccion' =>$horaRecoleccion->hora,
							'hora_entrega' =>$horaEntrega->hora,
							'fecha_entrega' => $fechaEntrega->fecha,
							'colonia' => $colonia->ruta,
							'especificacion' => $pedido->descripcion

							);


		Mail::queue('correo2', $data, function($message) use ($cliente)
		{
		    $message->from('noreply@mintwash.com.mx', 'Mint Wash');

		    $message->to($cliente->correo);

		    $message->subject('Orden Realizada');

		    
		});
		return Redirect::away('http://mintwash.com.mx/', 301);
	
	}

	public function usuario(){
		return View::make('index');
	
	}
	public function recolector(){
		
		$id = Auth::id();
        $clave = Auth::user()->clave;


        $pedidos= $this->pedidoRepo->misPedidos($clave);
        Log::info('Pedidos Recolector');
        Log::info($pedidos);
        
		return View::make('recolector', compact('pedidos'));
	}


}
	