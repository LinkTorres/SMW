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

		return View::make('orden', compact('rutas'));
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
	public function principal(){
		return Redirect::away('http://mintwash.azurewebsites.net/', 301);
	
	}
	public function usuario(){
		return View::make('index');
	
	}
	public function recolector(){
		
		$id = Auth::id();
        $clave = Auth::user()->clave;


        $pedidos= $this->pedidoRepo->misPedidos($clave);
        
		return View::make('recolector', compact('pedidos'));
	}


}
	