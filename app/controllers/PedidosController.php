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

			//Tiene toda la informaci�n,
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

		DB::table('pedidos')
            ->where('ticket_id',$id)
            ->update(array('estatus_id' => 8));

		return Redirect::route('recolector');

	}

	public function cancelarEntrega($id)
	{
		DB::table('pedidos')
            ->where('ticket_id',$id)
            ->update(array('estatus_id' => 9));

		return Redirect::route('recolector');

	}

 	public function cancelarOrden($id)
 	{
 		DB::table('pedidos')
            ->where('ticket_id',$id)
            ->update(array('estatus_id' => 7));

		return Redirect::route('recolector');
 	}

 	public function corporativo1(){
 		$empresas = DB::table('corporativo')->get();
		return View::make('pedidos/corporativo1', compact('empresas'));

	}
	public function corporativo2(){
		$array = array();
		$empresas = DB::table('corporativo')->get();
		foreach ($empresas as $empresa){
			$array = array_add($array,$empresa->Empresa,$empresa->Empresa);
		}
		Log::info($array);
		$empleados = DB::table('empleado')->get();

		return View::make('pedidos/corporativo2', compact('empresas','array','empleados'));

	}
	public function corporativo3(){
		$array = array();
		$empresas = DB::table('empleado')->get();
		foreach ($empresas as $empresa){
			$array = array_add($array,$empresa->id,$empresa->Empresa." ".$empresa->nombre);
		}
		Log::info($array);
		$pedidos = DB::table('pedidoCorporativo')
						->join('empleado', 'pedidoCorporativo.id', '=', 'empleado.id')
						->get();

		return View::make('pedidos/corporativo3', compact('empresas','array','pedidos'));
	}

	public function alrededores(){

		$aledanos = DB::table('aledanos')->get();
		$aledanos2 = DB::table('aledanos')->groupBy('nombre')->get();
		$array = array();
		$array = array();
		foreach ($aledanos2 as $aledano){
			$array = array_add($array,$aledano->nombre,$aledano->nombre);
		}

		return View::make('pedidos/alrededores', compact('aledanos','array'));

	}

	public function saveAlrededores(){
		$data = Input::all();

			try
			{
				DB::table('aledanos')->insert(
				    array('numNota' => $data['nota'], 'nombre' => $data['nombre'], 'kilos' => $data['kilos'] , 'piezas'=> $data['piezas'], 'costo' => $data['costo'],'kilos2' => $data['kilos2'], 'fecha'=> $data['fecha'])
				);
			}
			catch(PDOException $exception)
			{
					return Redirect::route('alrededores');
			}

		return Redirect::route('alrededores');
	}

	public function promocion(){

		$promociones = DB::table('promociones')->get();
		$aledanos2 = DB::table('aledanos')->groupBy('nombre')->get();
		$array = array();
		$array = array();
		foreach ($aledanos2 as $aledano){
			$array = array_add($array,$aledano->nombre,$aledano->nombre);
		}

		return View::make('pedidos/promocion2', compact('promociones','array'));

	}

	public function reportePromociones2(){

		$promociones = DB::table('promociones')->get();

		$aledanos2 = DB::table('aledanos')->groupBy('nombre')->get();
		$array = array();
		$array = array();
		foreach ($aledanos2 as $aledano){
			$array = array_add($array,$aledano->nombre,$aledano->nombre);
		}

		return View::make('pedidos/reportePromocion2', compact('promociones','array'));

	}

	public function reportePromociones()
	{
		$aleEne = DB::table('aledanos')
									->whereMonth('fecha', '=', '01')
									->sum('costo')
									;
									$ale02 = DB::table('aledanos')
																->whereMonth('fecha', '=', '02')
																->sum('costo')
																;
								$ale03 = DB::table('aledanos')
															->whereMonth('fecha', '=', '03')
															->sum('costo')
															;
									$ale04 = DB::table('aledanos')
																->whereMonth('fecha', '=', '04')
																->sum('costo')
																;
									$ale05 = DB::table('aledanos')
																->whereMonth('fecha', '=', '05')
																->sum('costo')
																;
								$ale06 = DB::table('aledanos')
															->whereMonth('fecha', '=', '06')
															->sum('costo')
															;
								$ale07 = DB::table('aledanos')
															->whereMonth('fecha', '=', '07')
															->sum('costo')
															;
															$ale08 = DB::table('aledanos')
																						->whereMonth('fecha', '=', '08')
																						->sum('costo')
																						;
																$ale09 = DB::table('aledanos')
																							->whereMonth('fecha', '=', '09')
																							->sum('costo')
																							;
																$ale10 = DB::table('aledanos')
																							->whereMonth('fecha', '=', '10')
																							->sum('costo')
																							;
															$ale11 = DB::table('aledanos')
																						->whereMonth('fecha', '=', '11')
																						->sum('costo')
																						;
															$ale12 = DB::table('aledanos')
																						->whereMonth('fecha', '=', '12')
																						->sum('costo')
																						;
																						$aleTotal = DB::table('aledanos')
																						->sum('costo')
																													;
															$rec01 = DB::table('tickets')
																						->join('pedidos', 'tickets.id', '=', 'pedidos.ticket_id')
																						->join('disponibilidads', 'pedidos.id_recoleccion', '=', 'disponibilidads.id')
																						->whereMonth('disponibilidads.fecha', '=', '01')
																						->sum('tickets.monto')
																						;
															$rec02 = DB::table('tickets')
																						->join('pedidos', 'tickets.id', '=', 'pedidos.ticket_id')
																						->join('disponibilidads', 'pedidos.id_recoleccion', '=', 'disponibilidads.id')
																						->whereMonth('disponibilidads.fecha', '=', '02')
																						->sum('tickets.monto')
														;$rec03 = DB::table('tickets')
																					->join('pedidos', 'tickets.id', '=', 'pedidos.ticket_id')
																					->join('disponibilidads', 'pedidos.id_recoleccion', '=', 'disponibilidads.id')
																					->whereMonth('disponibilidads.fecha', '=', '03')
																					->sum('tickets.monto')
																					;
														$rec04 = DB::table('tickets')
																					->join('pedidos', 'tickets.id', '=', 'pedidos.ticket_id')
																					->join('disponibilidads', 'pedidos.id_recoleccion', '=', 'disponibilidads.id')
																					->whereMonth('disponibilidads.fecha', '=', '04')
																					->sum('tickets.monto')
																					;
														$rec05 = DB::table('tickets')
																					->join('pedidos', 'tickets.id', '=', 'pedidos.ticket_id')
																					->join('disponibilidads', 'pedidos.id_recoleccion', '=', 'disponibilidads.id')
																					->whereMonth('disponibilidads.fecha', '=', '05')
																					->sum('tickets.monto')
													;$rec06 = DB::table('tickets')
																				->join('pedidos', 'tickets.id', '=', 'pedidos.ticket_id')
																				->join('disponibilidads', 'pedidos.id_recoleccion', '=', 'disponibilidads.id')
																				->whereMonth('disponibilidads.fecha', '=', '06')
																				->sum('tickets.monto')
																				;
													$rec07 = DB::table('tickets')
																				->join('pedidos', 'tickets.id', '=', 'pedidos.ticket_id')
																				->join('disponibilidads', 'pedidos.id_recoleccion', '=', 'disponibilidads.id')
																				->whereMonth('disponibilidads.fecha', '=', '07')
																				->sum('tickets.monto')
																				;
													$rec08 = DB::table('tickets')
																				->join('pedidos', 'tickets.id', '=', 'pedidos.ticket_id')
																				->join('disponibilidads', 'pedidos.id_recoleccion', '=', 'disponibilidads.id')
																				->whereMonth('disponibilidads.fecha', '=', '08')
																				->sum('tickets.monto')
												;$rec09 = DB::table('tickets')
																			->join('pedidos', 'tickets.id', '=', 'pedidos.ticket_id')
																			->join('disponibilidads', 'pedidos.id_recoleccion', '=', 'disponibilidads.id')
																			->whereMonth('disponibilidads.fecha', '=', '09')
																			->sum('tickets.monto')
																			;
												$rec10 = DB::table('tickets')
																			->join('pedidos', 'tickets.id', '=', 'pedidos.ticket_id')
																			->join('disponibilidads', 'pedidos.id_recoleccion', '=', 'disponibilidads.id')
																			->whereMonth('disponibilidads.fecha', '=', '10')
																			->sum('tickets.monto')
																			;
												$rec11 = DB::table('tickets')
																			->join('pedidos', 'tickets.id', '=', 'pedidos.ticket_id')
																			->join('disponibilidads', 'pedidos.id_recoleccion', '=', 'disponibilidads.id')
																			->whereMonth('disponibilidads.fecha', '=', '11')
																			->sum('tickets.monto')
											;$rec12 = DB::table('tickets')
																		->join('pedidos', 'tickets.id', '=', 'pedidos.ticket_id')
																		->join('disponibilidads', 'pedidos.id_recoleccion', '=', 'disponibilidads.id')
																		->whereMonth('disponibilidads.fecha', '=', '12')
																		->sum('tickets.monto')
																		;
																		$recTotal = DB::table('tickets')
																									->join('pedidos', 'tickets.id', '=', 'pedidos.ticket_id')
																									->join('disponibilidads', 'pedidos.id_recoleccion', '=', 'disponibilidads.id')
																									->sum('tickets.monto')
																									;
			$cor01 = DB::table('pedidoCorporativo')
										->whereMonth('fecha', '=', '01')
										->sum('costo')
										;
			$cor02 = DB::table('pedidoCorporativo')
										->whereMonth('fecha', '=', '02')
										->sum('costo')
										;
			$cor03 = DB::table('pedidoCorporativo')
										->whereMonth('fecha', '=', '03')
										->sum('costo')
										;
			$cor04 = DB::table('pedidoCorporativo')
										->whereMonth('fecha', '=', '04')
										->sum('costo')
										;
			$cor05 = DB::table('pedidoCorporativo')
										->whereMonth('fecha', '=', '05')
										->sum('costo')
										;
			$cor06 = DB::table('pedidoCorporativo')
										->whereMonth('fecha', '=', '06')
										->sum('costo')
										;
			$cor07 = DB::table('pedidoCorporativo')
										->whereMonth('fecha', '=', '07')
										->sum('costo')
										;
			$cor08 = DB::table('pedidoCorporativo')
										->whereMonth('fecha', '=', '08')
										->sum('costo')
			;$cor09 = DB::table('pedidoCorporativo')
										->whereMonth('fecha', '=', '09')
										->sum('costo')
										;
			$cor10 = DB::table('pedidoCorporativo')
										->whereMonth('fecha', '=', '10')
										->sum('costo')
										;
			$cor11 = DB::table('pedidoCorporativo')
										->whereMonth('fecha', '=', '11')
										->sum('costo')
										;
			$cor12 = DB::table('pedidoCorporativo')
										->whereMonth('fecha', '=', '12')
										->sum('costo')
										;

										$corTotal = DB::table('pedidoCorporativo')
																	->sum('costo')
																	;


		return View::make('reportePromociones',compact('aleEne','ale02','ale03','ale04','ale05','ale06','ale07','ale08','ale09','ale10','ale11','ale12','aleTotal','rec01','rec02','rec03','rec04','rec05','rec06','rec07','rec08','rec09','rec10','rec11','rec12','recTotal','cor01','cor02','cor03','cor04','cor05','cor06','cor07','cor08','cor09','cor10','cor11','cor12','corTotal'));

	}



	public function savePromocion(){
		$data = Input::all();

			try
			{
				DB::table('promociones')->insert(
				    array('Nombre' => $data['nombre'], 'Descripcion' => $data['descripcion'] , 'Codigo'=> $data['codigo'])
				);
			}
			catch(PDOException $exception)
			{
					return Redirect::route('promociones2');
			}

		return Redirect::route('promociones2');
	}

	public function edicionAlrededores($id){

		$aledanos = DB::table('aledanos')->get();

		$aledano3 = DB::table('aledanos')->where('id',$id)->first();

		$aledanos2 = DB::table('aledanos')->groupBy('nombre')->get();
		$array = array();
		$array = array();
		foreach ($aledanos2 as $aledano){
			$array = array_add($array,$aledano->nombre,$aledano->nombre);
		}

		return View::make('pedidos/edicionAlrededores', compact('aledanos','array','aledano3'));

	}

	public function edicionSaveAlrededores($id){
		$data = Input::all();

			try
			{
				DB::table('aledanos')
				->where('nota',$id)
				->update(
				    array('nombre' => $data['nombre'], 'kilos' => $data['kilos'] , 'piezas'=> $data['piezas'], 'costo' => $data['costo'],'kilos2' => $data['kilos2'], 'fecha'=> $data['fecha'])
				);
			}
			catch(PDOException $exception)
			{
					return Redirect::route('alrededores');
			}

		return Redirect::route('alrededores');
	}

	public function saveCorporativo1(){
		$data = Input::all();
		$data = array_except(Input::all(), array('_method', '_token'));
		DB::table('corporativo')->insert(
		    array($data)
		);

		return Redirect::route('corporativo1');
	}

	public function saveCorporativo2(){
		$data = Input::all();
		$data = array_except(Input::all(), array('_method', '_token'));
		DB::table('empleado')->insert(
		    array($data)
		);

		return Redirect::route('corporativo2');
	}

	public function saveCorporativo3(){
		$data = Input::all();
		$data = array_except(Input::all(), array('_method', '_token'));
		DB::table('pedidoCorporativo')->insert(
		    array($data)
		);

		return Redirect::route('corporativo3');
	}

}
