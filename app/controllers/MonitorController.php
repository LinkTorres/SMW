<?php

use Monitor\Entities\Zona;
use Monitor\Repositories\RutaRepo;
use Monitor\Repositories\ServicioRepo;
use Monitor\Repositories\HorarioRepo;
use Monitor\Repositories\PedidoRepo;



class MonitorController extends \BaseController {

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
	
	
	public function monitor(){
		return View::make('monitor.monitor');
	}


}
	