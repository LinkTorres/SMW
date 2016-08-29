<?php

class AdministracionController extends \BaseController {

	public function vistaInsumos()
	{
		$insumos = DB::table('insumos')->get();

		return View::make('administracion/agregarInsumos',compact('insumos'));
	}

	public function postInsumos()
	{
		$data = Input::all();

		Log::error($data);

		DB::table('insumos')->insert(
		    array('concepto' => $data['concepto'], 'costo' => $data['costo'] , 'fecha'=> $data['fecha'])
		);

		return Redirect::route('insumos');
	}

	public function pagarNomina()
	{
		

		$semana = date("W");
		$sueldoTotal = DB::table('nomina')
									->sum('sueldoTotal')
									;
		$cargaSocial = DB::table('nomina')
									->sum('cargaSocial')
									;

		$numEmpleados = DB::table('nomina')
									->count()
									;

		DB::table('pagoNomina')->insert(
		    array('numQuincena' => $semana, 'total' => $sueldoTotal, 'cargaSocial'=> $cargaSocial, 'numTrabajadores' => $numEmpleados)
		);

		return Redirect::route('consolidadoNomina');
	}

	public function vistaGastos()
	{
		return View::make('administracion/agregarGastos');
	}

	public function nomina()
	{
		$nomina= DB::table('nomina')->get();
		return View::make('nomina',compact('nomina'));
	}

	public function consolidadoNomina()
	{
		$nomina= DB::table('pagoNomina')->get();
		return View::make('consolidadoNomina',compact('nomina'));
	}

	public function consolidadoIngresosEgresos()
	{
		$aleEne = DB::table('aledanos')
									->whereMonth('fecha', '=', '01')
									->sum('costo')
									;
									$ale02 = DB::table('aledanos')
																->whereMonth('fecha', '=', '02')
																->whereYear('fecha', '=', 2016)
																->sum('costo')
																;
								$ale03 = DB::table('aledanos')
															->whereMonth('fecha', '=', '03')
															->whereYear('fecha', '=', 2016)
															->sum('costo')
															;
									$ale04 = DB::table('aledanos')
																->whereMonth('fecha', '=', '04')
																->whereYear('fecha', '=', 2016)
																->sum('costo')
																;
									$ale05 = DB::table('aledanos')
																->whereMonth('fecha', '=', '05')
																->whereYear('fecha', '=', 2016)
																->sum('costo')
																;
								$ale06 = DB::table('aledanos')
															->whereMonth('fecha', '=', '06')
															->whereYear('fecha', '=', 2016)
															->sum('costo')
															;
								$ale07 = DB::table('aledanos')
															->whereMonth('fecha', '=', '07')
															->whereYear('fecha', '=', 2016)
															->sum('costo')
															;
															$ale08 = DB::table('aledanos')
																						->whereMonth('fecha', '=', '08')
																						->whereYear('fecha', '=', 2016)
																						->sum('costo')
																						;
																$ale09 = DB::table('aledanos')
																							->whereMonth('fecha', '=', '09')
																							->whereYear('fecha', '=', 2016)
																							->sum('costo')
																							;
																$ale10 = DB::table('aledanos')
																							->whereMonth('fecha', '=', '10')
																							->whereYear('fecha', '=', 2016)
																							->sum('costo')
																							;
															$ale11 = DB::table('aledanos')
																						->whereMonth('fecha', '=', '11')
																						->whereYear('fecha', '=', 2016)
																						->sum('costo')
																						;
															$ale12 = DB::table('aledanos')
																						->whereMonth('fecha', '=', '12')
																						->whereYear('fecha', '=', 2016)
																						->sum('costo')
																						;
																						$aleTotal = DB::table('aledanos')
																						->whereYear('fecha', '=', 2016)
																						->sum('costo')
																													;
															$rec01 = DB::table('tickets')
																						->join('pedidos', 'tickets.id', '=', 'pedidos.ticket_id')
																						->join('disponibilidads', 'pedidos.id_recoleccion', '=', 'disponibilidads.id')
																						->whereMonth('disponibilidads.fecha', '=', '01')
																						->whereYear('disponibilidads.fecha', '=', 2016)
																						->sum('tickets.monto')
																						;
															$rec02 = DB::table('tickets')
																						->join('pedidos', 'tickets.id', '=', 'pedidos.ticket_id')
																						->join('disponibilidads', 'pedidos.id_recoleccion', '=', 'disponibilidads.id')
																						->whereMonth('disponibilidads.fecha', '=', '02')
																						->whereYear('disponibilidads.fecha', '=', 2016)
																						->sum('tickets.monto')
														;$rec03 = DB::table('tickets')
																					->join('pedidos', 'tickets.id', '=', 'pedidos.ticket_id')
																					->join('disponibilidads', 'pedidos.id_recoleccion', '=', 'disponibilidads.id')
																					->whereMonth('disponibilidads.fecha', '=', '03')
																					->whereYear('disponibilidads.fecha', '=', 2016)
																					->sum('tickets.monto')
																					;
														$rec04 = DB::table('tickets')
																					->join('pedidos', 'tickets.id', '=', 'pedidos.ticket_id')
																					->join('disponibilidads', 'pedidos.id_recoleccion', '=', 'disponibilidads.id')
																					->whereMonth('disponibilidads.fecha', '=', '04')
																					->whereYear('disponibilidads.fecha', '=', 2016)
																					->sum('tickets.monto')
																					;
														$rec05 = DB::table('tickets')
																					->join('pedidos', 'tickets.id', '=', 'pedidos.ticket_id')
																					->join('disponibilidads', 'pedidos.id_recoleccion', '=', 'disponibilidads.id')
																					->whereMonth('disponibilidads.fecha', '=', '05')
																					->whereYear('disponibilidads.fecha', '=', 2016)
																					->sum('tickets.monto')
													;$rec06 = DB::table('tickets')
																				->join('pedidos', 'tickets.id', '=', 'pedidos.ticket_id')
																				->join('disponibilidads', 'pedidos.id_recoleccion', '=', 'disponibilidads.id')
																				->whereMonth('disponibilidads.fecha', '=', '06')
																				->whereYear('disponibilidads.fecha', '=', 2016)
																				->sum('tickets.monto')
																				;
													$rec07 = DB::table('tickets')
																				->join('pedidos', 'tickets.id', '=', 'pedidos.ticket_id')
																				->join('disponibilidads', 'pedidos.id_recoleccion', '=', 'disponibilidads.id')
																				->whereMonth('disponibilidads.fecha', '=', '07')
																				->whereYear('disponibilidads.fecha', '=', 2016)
																				->sum('tickets.monto')
																				;
													$rec08 = DB::table('tickets')
																				->join('pedidos', 'tickets.id', '=', 'pedidos.ticket_id')
																				->join('disponibilidads', 'pedidos.id_recoleccion', '=', 'disponibilidads.id')
																				->whereMonth('disponibilidads.fecha', '=', '08')
																				->whereYear('disponibilidads.fecha', '=', 2016)
																				->sum('tickets.monto')
												;$rec09 = DB::table('tickets')
																			->join('pedidos', 'tickets.id', '=', 'pedidos.ticket_id')
																			->join('disponibilidads', 'pedidos.id_recoleccion', '=', 'disponibilidads.id')
																			->whereMonth('disponibilidads.fecha', '=', '09')
																			->whereYear('disponibilidads.fecha', '=', 2016)
																			->sum('tickets.monto')
																			;
												$rec10 = DB::table('tickets')
																			->join('pedidos', 'tickets.id', '=', 'pedidos.ticket_id')
																			->join('disponibilidads', 'pedidos.id_recoleccion', '=', 'disponibilidads.id')
																			->whereMonth('disponibilidads.fecha', '=', '10')
																			->whereYear('disponibilidads.fecha', '=', 2016)
																			->sum('tickets.monto')
																			;
												$rec11 = DB::table('tickets')
																			->join('pedidos', 'tickets.id', '=', 'pedidos.ticket_id')
																			->join('disponibilidads', 'pedidos.id_recoleccion', '=', 'disponibilidads.id')
																			->whereMonth('disponibilidads.fecha', '=', '11')
																			->whereYear('disponibilidads.fecha', '=', 2016)
																			->sum('tickets.monto')
											;$rec12 = DB::table('tickets')
																		->join('pedidos', 'tickets.id', '=', 'pedidos.ticket_id')
																		->join('disponibilidads', 'pedidos.id_recoleccion', '=', 'disponibilidads.id')
																		->whereMonth('disponibilidads.fecha', '=', '12')
																		->whereYear('disponibilidads.fecha', '=', 2016)
																		->sum('tickets.monto')
																		;
																		$recTotal = DB::table('tickets')
																									->join('pedidos', 'tickets.id', '=', 'pedidos.ticket_id')
																									->join('disponibilidads', 'pedidos.id_recoleccion', '=', 'disponibilidads.id')
																									->whereYear('disponibilidads.fecha', '=', 2016)
																									->sum('tickets.monto')
																									;
			$cor01 = DB::table('pedidoCorporativo')
										->whereMonth('fecha', '=', '01')
										->whereYear('fecha', '=', 2016)
										->sum('costo')
										;
			$cor02 = DB::table('pedidoCorporativo')
										->whereMonth('fecha', '=', '02')
										->whereYear('fecha', '=', 2016)
										->sum('costo')
										;
			$cor03 = DB::table('pedidoCorporativo')
										->whereMonth('fecha', '=', '03')
										->whereYear('fecha', '=', 2016)
										->sum('costo')
										;
			$cor04 = DB::table('pedidoCorporativo')
										->whereMonth('fecha', '=', '04')
										->whereYear('fecha', '=', 2016)
										->sum('costo')
										;
			$cor05 = DB::table('pedidoCorporativo')
										->whereMonth('fecha', '=', '05')
										->whereYear('fecha', '=', 2016)
										->sum('costo')
										;
			$cor06 = DB::table('pedidoCorporativo')
										->whereMonth('fecha', '=', '06')
										->whereYear('fecha', '=', 2016)
										->sum('costo')
										;
			$cor07 = DB::table('pedidoCorporativo')
										->whereMonth('fecha', '=', '07')
										->whereYear('fecha', '=', 2016)
										->sum('costo')
										;
			$cor08 = DB::table('pedidoCorporativo')
										->whereMonth('fecha', '=', '08')
										->whereYear('fecha', '=', 2016)
										->sum('costo')
			;$cor09 = DB::table('pedidoCorporativo')
										->whereMonth('fecha', '=', '09')
										->whereYear('fecha', '=', 2016)
										->sum('costo')
										;
			$cor10 = DB::table('pedidoCorporativo')
										->whereMonth('fecha', '=', '10')
										->whereYear('fecha', '=', 2016)
										->sum('costo')
										;
			$cor11 = DB::table('pedidoCorporativo')
										->whereMonth('fecha', '=', '11')
										->whereYear('fecha', '=', 2016)
										->sum('costo')
										;
			$cor12 = DB::table('pedidoCorporativo')
										->whereMonth('fecha', '=', '12')
										->whereYear('fecha', '=', 2016)
										->sum('costo')
										;

										$corTotal = DB::table('pedidoCorporativo')
										->whereYear('fecha', '=', 2016)
																	->sum('costo')
																	;

		$in01 = DB::table('insumos')
										->whereMonth('fecha', '=', '01')
										->whereYear('fecha', '=', 2016)
										->sum('costo')
										;
			$in02 = DB::table('insumos')
										->whereMonth('fecha', '=', '02')
										->whereYear('fecha', '=', 2016)
										->sum('costo')
										;
			$in03 = DB::table('insumos')
										->whereMonth('fecha', '=', '03')
										->whereYear('fecha', '=', 2016)
										->sum('costo')
										;
			$in04 = DB::table('insumos')
										->whereMonth('fecha', '=', '04')
										->whereYear('fecha', '=', 2016)
										->sum('costo')
										;
			$in05 = DB::table('insumos')
										->whereMonth('fecha', '=', '05')
										->whereYear('fecha', '=', 2016)
										->sum('costo')
										;
			$in06 = DB::table('insumos')
										->whereMonth('fecha', '=', '06')
										->whereYear('fecha', '=', 2016)
										->sum('costo')
										;
			$in07 = DB::table('insumos')
										->whereMonth('fecha', '=', '07')
										->whereYear('fecha', '=', 2016)
										->sum('costo')
										;
			$in08 = DB::table('insumos')
										->whereMonth('fecha', '=', '08')
										->whereYear('fecha', '=', 2016)
										->sum('costo');

			$in09 = DB::table('insumos')
										->whereMonth('fecha', '=', '09')
										->whereYear('fecha', '=', 2016)
										->sum('costo')
										;
			$in10 = DB::table('insumos')
										->whereMonth('fecha', '=', '10')
										->whereYear('fecha', '=', 2016)
										->sum('costo')
										;
			$in11 = DB::table('insumos')
										->whereMonth('fecha', '=', '11')
										->whereYear('fecha', '=', 2016)
										->sum('costo')
										;
			$in12 = DB::table('insumos')
										->whereMonth('fecha', '=', '12')
										->whereYear('fecha', '=', 2016)
										->sum('costo')
										;

										$inTotal = DB::table('insumos')
										->whereYear('fecha', '=', 2016)
																	->sum('costo')
																	;


		return View::make('finanzas/consolidadoIngresosEgresos',compact('aleEne','ale02','ale03','ale04','ale05','ale06','ale07','ale08','ale09','ale10','ale11','ale12','aleTotal','rec01','rec02','rec03','rec04','rec05','rec06','rec07','rec08','rec09','rec10','rec11','rec12','recTotal','cor01','cor02','cor03','cor04','cor05','cor06','cor07','cor08','cor09','cor10','cor11','cor12','corTotal','in01','in02','in03','in04','in05','in06','in07','in08','in09','in10','in11','in12','inTotal'));
	}

	public function comentarios()
	{

		$comentariosPositivos = DB::table('comentarios')
									->join('clientes', 'comentarios.cliente', '=', 'clientes.id')
									->where('tipo', '=', '1')
									->get()
									;



									$comentariosNegativos = DB::table('comentarios')
																->join('clientes', 'comentarios.cliente', '=', 'clientes.id')
																->where('tipo', '=', '0')
																->get()
																;

			Log::error($comentariosNegativos);

		return View::make('comentarios',compact('comentariosPositivos','comentariosNegativos'));
	}

	public function FinanzasGastos()
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


		return View::make('gastosReport',compact('aleEne','ale02','ale03','ale04','ale05','ale06','ale07','ale08','ale09','ale10','ale11','ale12','aleTotal','rec01','rec02','rec03','rec04','rec05','rec06','rec07','rec08','rec09','rec10','rec11','rec12','recTotal','cor01','cor02','cor03','cor04','cor05','cor06','cor07','cor08','cor09','cor10','cor11','cor12','corTotal'));

	}

	public function FinanzasFinal()
	{
		return View::make('finalReport');
	}

	public function postGastos()
	{
		return View::make('administracion/agregarGastos');
	}

	public function vistaReportes()
	{

		$lavadoZonaA = DB::table('tickets')
							->join('pedidos', 'tickets.id', '=', 'pedidos.ticket_id')
							->join('rutas', 'pedidos.id_colonia_r', '=', 'rutas.id')
							->where('rutas.zona_id', '=', 1)
							->where('pedidos.servicio_tipo_id', '=', 1)
							->count();

		$lavadoZonaB = DB::table('tickets')
												->join('pedidos', 'tickets.id', '=', 'pedidos.ticket_id')
												->join('rutas', 'pedidos.id_colonia_r', '=', 'rutas.id')
												->where('rutas.zona_id', '=', 2)
												->where('pedidos.servicio_tipo_id', '=', 1)
												->count();

			$lavadoCorp = DB::table('pedidoCorporativo')
												->where('lavadoKilos', '!=', 0)
											->count();

		$planchadoZonaA = DB::table('tickets')
																	->join('pedidos', 'tickets.id', '=', 'pedidos.ticket_id')
																	->join('rutas', 'pedidos.id_colonia_r', '=', 'rutas.id')
																	->where('rutas.zona_id', '=', 1)
																	->where('pedidos.servicio_tipo_id', '=', 2)
																	->count();

		$planchadoZonaB = DB::table('tickets')
																						->join('pedidos', 'tickets.id', '=', 'pedidos.ticket_id')
																						->join('rutas', 'pedidos.id_colonia_r', '=', 'rutas.id')
																						->where('rutas.zona_id', '=', 2)
																						->where('pedidos.servicio_tipo_id', '=', 2)
																						->count();

		$planchadoCorp = DB::table('pedidoCorporativo')
											->where('planchado', '!=', 0)
										->count();

			$ambosZonaA = DB::table('tickets')
								->join('pedidos', 'tickets.id', '=', 'pedidos.ticket_id')
								->join('rutas', 'pedidos.id_colonia_r', '=', 'rutas.id')
								->where('rutas.zona_id', '=', 1)
								->where('pedidos.servicio_tipo_id', '=', 3)
								->count();

			$ambosZonaB = DB::table('tickets')
													->join('pedidos', 'tickets.id', '=', 'pedidos.ticket_id')
													->join('rutas', 'pedidos.id_colonia_r', '=', 'rutas.id')
													->where('rutas.zona_id', '=', 2)
													->where('pedidos.servicio_tipo_id', '=', 3)
													->count();

			$ambosCorp = DB::table('pedidoCorporativo')
												->where('lyp', '!=', 0)
											->count();

		$totalZonaA = DB::table('tickets')
							->join('pedidos', 'tickets.id', '=', 'pedidos.ticket_id')
							->join('rutas', 'pedidos.id_colonia_r', '=', 'rutas.id')
							->where('rutas.zona_id', '=', 1)
							->count();

		$totalZonaB = DB::table('tickets')
												->join('pedidos', 'tickets.id', '=', 'pedidos.ticket_id')
												->join('rutas', 'pedidos.id_colonia_r', '=', 'rutas.id')
												->where('rutas.zona_id', '=', 2)
												->count();

												$totalCorp = DB::table('pedidoCorporativo')
																				->count();

												$dinerolavadoZonaA = DB::table('tickets')
																	->join('pedidos', 'tickets.id', '=', 'pedidos.ticket_id')
																	->join('rutas', 'pedidos.id_colonia_r', '=', 'rutas.id')
																	->where('rutas.zona_id', '=', 1)
																	->where('pedidos.servicio_tipo_id', '=', 1)
																	->sum('tickets.monto');

												$dinerolavadoZonaB = DB::table('tickets')
																						->join('pedidos', 'tickets.id', '=', 'pedidos.ticket_id')
																						->join('rutas', 'pedidos.id_colonia_r', '=', 'rutas.id')
																						->where('rutas.zona_id', '=', 2)
																						->where('pedidos.servicio_tipo_id', '=', 1)
																						->sum('tickets.monto');

												$dineroplanchadoZonaA = DB::table('tickets')
																											->join('pedidos', 'tickets.id', '=', 'pedidos.ticket_id')
																											->join('rutas', 'pedidos.id_colonia_r', '=', 'rutas.id')
																											->where('rutas.zona_id', '=', 1)
																											->where('pedidos.servicio_tipo_id', '=', 2)
																											->sum('tickets.monto');

												$dineroplanchadoZonaB = DB::table('tickets')
																																->join('pedidos', 'tickets.id', '=', 'pedidos.ticket_id')
																																->join('rutas', 'pedidos.id_colonia_r', '=', 'rutas.id')
																																->where('rutas.zona_id', '=', 2)
																																->where('pedidos.servicio_tipo_id', '=', 2)
																																->sum('tickets.monto');

													$dineroambosZonaA = DB::table('tickets')
																		->join('pedidos', 'tickets.id', '=', 'pedidos.ticket_id')
																		->join('rutas', 'pedidos.id_colonia_r', '=', 'rutas.id')
																		->where('rutas.zona_id', '=', 1)
																		->where('pedidos.servicio_tipo_id', '=', 3)
																		->sum('tickets.monto');

													$dineroambosZonaB = DB::table('tickets')
																							->join('pedidos', 'tickets.id', '=', 'pedidos.ticket_id')
																							->join('rutas', 'pedidos.id_colonia_r', '=', 'rutas.id')
																							->where('rutas.zona_id', '=', 2)
																							->where('pedidos.servicio_tipo_id', '=', 3)
																						->sum('tickets.monto');

												$dinerototalZonaA = DB::table('tickets')
																	->join('pedidos', 'tickets.id', '=', 'pedidos.ticket_id')
																	->join('rutas', 'pedidos.id_colonia_r', '=', 'rutas.id')
																	->where('rutas.zona_id', '=', 1)
																	->sum('tickets.monto');

												$dinerototalZonaB = DB::table('tickets')
																						->join('pedidos', 'tickets.id', '=', 'pedidos.ticket_id')
																						->join('rutas', 'pedidos.id_colonia_r', '=', 'rutas.id')
																						->where('rutas.zona_id', '=', 2)
																						->sum('tickets.monto');

			$cantidadlavadoZonaA = DB::table('tickets')
								->join('pedidos', 'tickets.id', '=', 'pedidos.ticket_id')
								->join('rutas', 'pedidos.id_colonia_r', '=', 'rutas.id')
								->where('rutas.zona_id', '=', 1)
								->where('pedidos.servicio_tipo_id', '=', 1)
								->sum('pedidos.kilos');

			$cantidadlavadoZonaB = DB::table('tickets')
													->join('pedidos', 'tickets.id', '=', 'pedidos.ticket_id')
													->join('rutas', 'pedidos.id_colonia_r', '=', 'rutas.id')
													->where('rutas.zona_id', '=', 2)
													->where('pedidos.servicio_tipo_id', '=', 1)
													->sum('pedidos.kilos');

			$cantidadplanchadoZonaA = DB::table('tickets')
																		->join('pedidos', 'tickets.id', '=', 'pedidos.ticket_id')
																		->join('rutas', 'pedidos.id_colonia_r', '=', 'rutas.id')
																		->where('rutas.zona_id', '=', 1)
																		->where('pedidos.servicio_tipo_id', '=', 2)
																		->sum('pedidos.piezas');

			$cantidadplanchadoZonaB = DB::table('tickets')
																							->join('pedidos', 'tickets.id', '=', 'pedidos.ticket_id')
																							->join('rutas', 'pedidos.id_colonia_r', '=', 'rutas.id')
																							->where('rutas.zona_id', '=', 2)
																							->where('pedidos.servicio_tipo_id', '=', 2)
																							->sum('pedidos.piezas');

				$cantidadambosZonaA = DB::table('tickets')
									->join('pedidos', 'tickets.id', '=', 'pedidos.ticket_id')
									->join('rutas', 'pedidos.id_colonia_r', '=', 'rutas.id')
									->where('rutas.zona_id', '=', 1)
									->where('pedidos.servicio_tipo_id', '=', 3)
									->sum('pedidos.piezas');

				$cantidadambosZonaB = DB::table('tickets')
														->join('pedidos', 'tickets.id', '=', 'pedidos.ticket_id')
														->join('rutas', 'pedidos.id_colonia_r', '=', 'rutas.id')
														->where('rutas.zona_id', '=', 2)
														->where('pedidos.servicio_tipo_id', '=', 3)
														->sum('pedidos.piezas');



		return View::make('administracion/reporte', compact('lavadoZonaA','lavadoZonaB','lavadoCorp','planchadoZonaA','planchadoZonaB','planchadoCorp','ambosZonaA','ambosZonaB','ambosCorp','totalZonaA','totalZonaB','totalCorp','dinerolavadoZonaA','dinerolavadoZonaB','dineroplanchadoZonaA','dineroplanchadoZonaB','dineroambosZonaA','dineroambosZonaB','dinerototalZonaA','dinerototalZonaB','cantidadlavadoZonaA','cantidadlavadoZonaB','cantidadplanchadoZonaA','cantidadplanchadoZonaB','cantidadambosZonaA','cantidadambosZonaB'));
	}

	public function vistaFinanzas()
	{
		return View::make('finanzas/ingresos');
	}

	public function reporteMauricio()
	{
		$aleEne = DB::table('aledanos')
									->whereMonth('fecha', '=', '01')
									->whereYear('fecha', '=', '2016')
									->sum('costo')
									;
									$ale02 = DB::table('aledanos')
																->whereMonth('fecha', '=', '02')
																->whereYear('fecha', '=', '2016')
																->sum('costo')
																;
								$ale03 = DB::table('aledanos')
															->whereMonth('fecha', '=', '03')
															->whereYear('fecha', '=', '2016')
															->sum('costo')
															;
									$ale04 = DB::table('aledanos')
																->whereMonth('fecha', '=', '04')
																->whereYear('fecha', '=', '2016')
																->sum('costo')
																;
									$ale05 = DB::table('aledanos')
																->whereMonth('fecha', '=', '05')
																->whereYear('fecha', '=', '2016')
																->sum('costo')
																;
								$ale06 = DB::table('aledanos')
															->whereMonth('fecha', '=', '06')
															->whereYear('fecha', '=', '2016')
															->sum('costo')
															;
								$ale07 = DB::table('aledanos')
															->whereMonth('fecha', '=', '07')
															->whereYear('fecha', '=', '2016')
															->sum('costo')
															;
															$ale08 = DB::table('aledanos')
																						->whereMonth('fecha', '=', '08')
																						->whereYear('fecha', '=', '2016')
																						->sum('costo')
																						;
																$ale09 = DB::table('aledanos')
																							->whereMonth('fecha', '=', '09')
																							->whereYear('fecha', '=', '2016')
																							->sum('costo')
																							;
																$ale10 = DB::table('aledanos')
																							->whereMonth('fecha', '=', '10')
																							->whereYear('fecha', '=', '2016')
																							->sum('costo')
																							;
															$ale11 = DB::table('aledanos')
																						->whereMonth('fecha', '=', '11')
																						->whereYear('fecha', '=', '2016')
																						->sum('costo')
																						;
															$ale12 = DB::table('aledanos')
																						->whereMonth('fecha', '=', '12')
																						->whereYear('fecha', '=', '2016')
																						->sum('costo')
																						;
																						$aleTotal = DB::table('aledanos')
																						->whereYear('fecha', '=', '2016')
																						->sum('costo')
																													;
															$rec01 = DB::table('tickets')
																						->join('pedidos', 'tickets.id', '=', 'pedidos.ticket_id')
																						->join('disponibilidads', 'pedidos.id_recoleccion', '=', 'disponibilidads.id')
																						->whereMonth('disponibilidads.fecha', '=', '01')
																						->whereYear('disponibilidads.fecha', '=', '2016')
																						->sum('tickets.monto')
																						;
															$rec02 = DB::table('tickets')
																						->join('pedidos', 'tickets.id', '=', 'pedidos.ticket_id')
																						->join('disponibilidads', 'pedidos.id_recoleccion', '=', 'disponibilidads.id')
																						->whereMonth('disponibilidads.fecha', '=', '02')
																						->whereYear('disponibilidads.fecha', '=', '2016')
																						->sum('tickets.monto')
														;$rec03 = DB::table('tickets')
																					->join('pedidos', 'tickets.id', '=', 'pedidos.ticket_id')
																					->join('disponibilidads', 'pedidos.id_recoleccion', '=', 'disponibilidads.id')
																					->whereMonth('disponibilidads.fecha', '=', '03')
																					->whereYear('disponibilidads.fecha', '=', '2016')
																					->sum('tickets.monto')
																					;
														$rec04 = DB::table('tickets')
																					->join('pedidos', 'tickets.id', '=', 'pedidos.ticket_id')
																					->join('disponibilidads', 'pedidos.id_recoleccion', '=', 'disponibilidads.id')
																					->whereMonth('disponibilidads.fecha', '=', '04')
																					->whereYear('disponibilidads.fecha', '=', '2016')
																					->sum('tickets.monto')
																					;
														$rec05 = DB::table('tickets')
																					->join('pedidos', 'tickets.id', '=', 'pedidos.ticket_id')
																					->join('disponibilidads', 'pedidos.id_recoleccion', '=', 'disponibilidads.id')
																					->whereMonth('disponibilidads.fecha', '=', '05')
																					->whereYear('disponibilidads.fecha', '=', '2016')
																					->sum('tickets.monto')
													;$rec06 = DB::table('tickets')
																				->join('pedidos', 'tickets.id', '=', 'pedidos.ticket_id')
																				->join('disponibilidads', 'pedidos.id_recoleccion', '=', 'disponibilidads.id')
																				->whereMonth('disponibilidads.fecha', '=', '06')
																				->whereYear('disponibilidads.fecha', '=', '2016')
																				->sum('tickets.monto')
																				;
													$rec07 = DB::table('tickets')
																				->join('pedidos', 'tickets.id', '=', 'pedidos.ticket_id')
																				->join('disponibilidads', 'pedidos.id_recoleccion', '=', 'disponibilidads.id')
																				->whereMonth('disponibilidads.fecha', '=', '07')
																				->whereYear('disponibilidads.fecha', '=', '2016')
																				->sum('tickets.monto')
																				;
													$rec08 = DB::table('tickets')
																				->join('pedidos', 'tickets.id', '=', 'pedidos.ticket_id')
																				->join('disponibilidads', 'pedidos.id_recoleccion', '=', 'disponibilidads.id')
																				->whereMonth('disponibilidads.fecha', '=', '08')
																				->whereYear('disponibilidads.fecha', '=', '2016')
																				->sum('tickets.monto')
												;$rec09 = DB::table('tickets')
																			->join('pedidos', 'tickets.id', '=', 'pedidos.ticket_id')
																			->join('disponibilidads', 'pedidos.id_recoleccion', '=', 'disponibilidads.id')
																			->whereMonth('disponibilidads.fecha', '=', '09')
																			->whereYear('disponibilidads.fecha', '=', '2016')
																			->sum('tickets.monto')
																			;
												$rec10 = DB::table('tickets')
																			->join('pedidos', 'tickets.id', '=', 'pedidos.ticket_id')
																			->join('disponibilidads', 'pedidos.id_recoleccion', '=', 'disponibilidads.id')
																			->whereMonth('disponibilidads.fecha', '=', '10')
																			->whereYear('disponibilidads.fecha', '=', '2016')
																			->sum('tickets.monto')
																			;
												$rec11 = DB::table('tickets')
																			->join('pedidos', 'tickets.id', '=', 'pedidos.ticket_id')
																			->join('disponibilidads', 'pedidos.id_recoleccion', '=', 'disponibilidads.id')
																			->whereMonth('disponibilidads.fecha', '=', '11')
																			->whereYear('disponibilidads.fecha', '=', '2016')
																			->sum('tickets.monto')
											;$rec12 = DB::table('tickets')
																		->join('pedidos', 'tickets.id', '=', 'pedidos.ticket_id')
																		->join('disponibilidads', 'pedidos.id_recoleccion', '=', 'disponibilidads.id')
																		->whereMonth('disponibilidads.fecha', '=', '12')
																		->whereYear('disponibilidads.fecha', '=', '2016')
																		->sum('tickets.monto')
																		;
																		$recTotal = DB::table('tickets')
																									->join('pedidos', 'tickets.id', '=', 'pedidos.ticket_id')
																									->join('disponibilidads', 'pedidos.id_recoleccion', '=', 'disponibilidads.id')
																									->whereYear('disponibilidads.fecha', '=', '2016')
																									->sum('tickets.monto')
																									;
			$cor01 = DB::table('pedidoCorporativo')
										->whereMonth('fecha', '=', '01')
										->whereYear('fecha', '=', '2016')
										->sum('costo')
										;
			$cor02 = DB::table('pedidoCorporativo')
										->whereMonth('fecha', '=', '02')
										->whereYear('fecha', '=', '2016')
										->sum('costo')
										;
			$cor03 = DB::table('pedidoCorporativo')
										->whereMonth('fecha', '=', '03')
										->whereYear('fecha', '=', '2016')
										->sum('costo')
										;
			$cor04 = DB::table('pedidoCorporativo')
										->whereMonth('fecha', '=', '04')
										->whereYear('fecha', '=', '2016')
										->sum('costo')
										;
			$cor05 = DB::table('pedidoCorporativo')
										->whereMonth('fecha', '=', '05')
										->whereYear('fecha', '=', '2016')
										->sum('costo')
										;
			$cor06 = DB::table('pedidoCorporativo')
										->whereMonth('fecha', '=', '06')
										->whereYear('fecha', '=', '2016')
										->sum('costo')
										;
			$cor07 = DB::table('pedidoCorporativo')
										->whereMonth('fecha', '=', '07')
										->whereYear('fecha', '=', '2016')
										->sum('costo')
										;
			$cor08 = DB::table('pedidoCorporativo')
										->whereMonth('fecha', '=', '08')
										->whereYear('fecha', '=', '2016')
										->sum('costo')
			;$cor09 = DB::table('pedidoCorporativo')
										->whereMonth('fecha', '=', '09')
										->whereYear('fecha', '=', '2016')
										->sum('costo')
										;
			$cor10 = DB::table('pedidoCorporativo')
										->whereMonth('fecha', '=', '10')
										->whereYear('fecha', '=', '2016')
										->sum('costo')
										;
			$cor11 = DB::table('pedidoCorporativo')
										->whereMonth('fecha', '=', '11')
										->whereYear('fecha', '=', '2016')
										->sum('costo')
										;
			$cor12 = DB::table('pedidoCorporativo')
										->whereMonth('fecha', '=', '12')
										->whereYear('fecha', '=', '2016')
										->sum('costo')
										;

										$corTotal = DB::table('pedidoCorporativo')
										->whereYear('fecha', '=', '2016')
																	->sum('costo')
																	;


		return View::make('finanzas/mauricio',compact('aleEne','ale02','ale03','ale04','ale05','ale06','ale07','ale08','ale09','ale10','ale11','ale12','aleTotal','rec01','rec02','rec03','rec04','rec05','rec06','rec07','rec08','rec09','rec10','rec11','rec12','recTotal','cor01','cor02','cor03','cor04','cor05','cor06','cor07','cor08','cor09','cor10','cor11','cor12','corTotal'));
	}

	public function consolidado()
	{
		$aleEne = DB::table('aledanos')
									->whereMonth('fecha', '=', '01')
									->whereYear('fecha', '=', '2016')
									->sum('costo')
									;
									$ale02 = DB::table('aledanos')
																->whereMonth('fecha', '=', '02')
																->whereYear('fecha', '=', '2016')
																->sum('costo')
																;
								$ale03 = DB::table('aledanos')
															->whereMonth('fecha', '=', '03')
															->whereYear('fecha', '=', '2016')
															->sum('costo')
															;
									$ale04 = DB::table('aledanos')
																->whereMonth('fecha', '=', '04')
																->whereYear('fecha', '=', '2016')
																->sum('costo')
																;
									$ale05 = DB::table('aledanos')
																->whereMonth('fecha', '=', '05')
																->whereYear('fecha', '=', '2016')
																->sum('costo')
																;
								$ale06 = DB::table('aledanos')
															->whereMonth('fecha', '=', '06')
															->whereYear('fecha', '=', '2016')
															->sum('costo')
															;
								$ale07 = DB::table('aledanos')
															->whereMonth('fecha', '=', '07')
															->whereYear('fecha', '=', '2016')
															->sum('costo')
															;
															$ale08 = DB::table('aledanos')
																						->whereMonth('fecha', '=', '08')
																						->whereYear('fecha', '=', '2016')
																						->sum('costo')
																						;
																$ale09 = DB::table('aledanos')
																							->whereMonth('fecha', '=', '09')
																							->whereYear('fecha', '=', '2016')
																							->sum('costo')
																							;
																$ale10 = DB::table('aledanos')
																							->whereMonth('fecha', '=', '10')
																							->whereYear('fecha', '=', '2016')
																							->sum('costo')
																							;
															$ale11 = DB::table('aledanos')
																						->whereMonth('fecha', '=', '11')
																							->whereYear('fecha', '=', '2016')
																						->sum('costo')
																						;
															$ale12 = DB::table('aledanos')
																						->whereMonth('fecha', '=', '12')
																							->whereYear('fecha', '=', '2016')
																						->sum('costo')
																						;
																						$aleTotal = DB::table('aledanos')
																						->sum('costo')
																													;
															$rec01 = DB::table('tickets')
																						->join('pedidos', 'tickets.id', '=', 'pedidos.ticket_id')
																						->join('disponibilidads', 'pedidos.id_recoleccion', '=', 'disponibilidads.id')
																						->whereMonth('disponibilidads.fecha', '=', '01')
																						->whereYear('disponibilidads.fecha', '=', '2016')
																						->sum('tickets.monto')
																						;
															$rec02 = DB::table('tickets')
																						->join('pedidos', 'tickets.id', '=', 'pedidos.ticket_id')
																						->join('disponibilidads', 'pedidos.id_recoleccion', '=', 'disponibilidads.id')
																						->whereMonth('disponibilidads.fecha', '=', '02')
																						->whereYear('disponibilidads.fecha', '=', '2016')
																						->sum('tickets.monto')
														;$rec03 = DB::table('tickets')
																					->join('pedidos', 'tickets.id', '=', 'pedidos.ticket_id')
																					->join('disponibilidads', 'pedidos.id_recoleccion', '=', 'disponibilidads.id')
																					->whereMonth('disponibilidads.fecha', '=', '03')
																						->whereYear('disponibilidads.fecha', '=', '2016')
																					->sum('tickets.monto')
																					;
														$rec04 = DB::table('tickets')
																					->join('pedidos', 'tickets.id', '=', 'pedidos.ticket_id')
																					->join('disponibilidads', 'pedidos.id_recoleccion', '=', 'disponibilidads.id')
																					->whereMonth('disponibilidads.fecha', '=', '04')
																						->whereYear('disponibilidads.fecha', '=', '2016')
																					->sum('tickets.monto')
																					;
														$rec05 = DB::table('tickets')
																					->join('pedidos', 'tickets.id', '=', 'pedidos.ticket_id')
																					->join('disponibilidads', 'pedidos.id_recoleccion', '=', 'disponibilidads.id')
																					->whereMonth('disponibilidads.fecha', '=', '05')
																						->whereYear('disponibilidads.fecha', '=', '2016')
																					->sum('tickets.monto')
													;$rec06 = DB::table('tickets')
																				->join('pedidos', 'tickets.id', '=', 'pedidos.ticket_id')
																				->join('disponibilidads', 'pedidos.id_recoleccion', '=', 'disponibilidads.id')
																				->whereMonth('disponibilidads.fecha', '=', '06')
																						->whereYear('disponibilidads.fecha', '=', '2016')
																				->sum('tickets.monto')
																				;
													$rec07 = DB::table('tickets')
																				->join('pedidos', 'tickets.id', '=', 'pedidos.ticket_id')
																				->join('disponibilidads', 'pedidos.id_recoleccion', '=', 'disponibilidads.id')
																				->whereMonth('disponibilidads.fecha', '=', '07')
																						->whereYear('disponibilidads.fecha', '=', '2016')
																				->sum('tickets.monto')
																				;
													$rec08 = DB::table('tickets')
																				->join('pedidos', 'tickets.id', '=', 'pedidos.ticket_id')
																				->join('disponibilidads', 'pedidos.id_recoleccion', '=', 'disponibilidads.id')
																				->whereMonth('disponibilidads.fecha', '=', '08')
																						->whereYear('disponibilidads.fecha', '=', '2016')
																				->sum('tickets.monto')
												;$rec09 = DB::table('tickets')
																			->join('pedidos', 'tickets.id', '=', 'pedidos.ticket_id')
																			->join('disponibilidads', 'pedidos.id_recoleccion', '=', 'disponibilidads.id')
																			->whereMonth('disponibilidads.fecha', '=', '09')
																						->whereYear('disponibilidads.fecha', '=', '2016')
																			->sum('tickets.monto')
																			;
												$rec10 = DB::table('tickets')
																			->join('pedidos', 'tickets.id', '=', 'pedidos.ticket_id')
																			->join('disponibilidads', 'pedidos.id_recoleccion', '=', 'disponibilidads.id')
																			->whereMonth('disponibilidads.fecha', '=', '10')
																						->whereYear('disponibilidads.fecha', '=', '2016')
																			->sum('tickets.monto')
																			;
												$rec11 = DB::table('tickets')
																			->join('pedidos', 'tickets.id', '=', 'pedidos.ticket_id')
																			->join('disponibilidads', 'pedidos.id_recoleccion', '=', 'disponibilidads.id')
																			->whereMonth('disponibilidads.fecha', '=', '11')
																						->whereYear('disponibilidads.fecha', '=', '2016')
																			->sum('tickets.monto')
											;$rec12 = DB::table('tickets')
																		->join('pedidos', 'tickets.id', '=', 'pedidos.ticket_id')
																		->join('disponibilidads', 'pedidos.id_recoleccion', '=', 'disponibilidads.id')
																		->whereMonth('disponibilidads.fecha', '=', '12')
																						->whereYear('disponibilidads.fecha', '=', '2016')
																		->sum('tickets.monto')
																		;
																		$recTotal = DB::table('tickets')
																									->join('pedidos', 'tickets.id', '=', 'pedidos.ticket_id')
																									->join('disponibilidads', 'pedidos.id_recoleccion', '=', 'disponibilidads.id')
																						->whereYear('disponibilidads.fecha', '=', '2016')
																									->sum('tickets.monto')
																									;
			$cor01 = DB::table('pedidoCorporativo')
										->whereMonth('fecha', '=', '01')
										->whereYear('fecha', '=', '2016')
										->sum('costo')
										;
			$cor02 = DB::table('pedidoCorporativo')
										->whereMonth('fecha', '=', '02')
										->whereYear('fecha', '=', '2016')
										->sum('costo')
										;
			$cor03 = DB::table('pedidoCorporativo')
										->whereMonth('fecha', '=', '03')
										->whereYear('fecha', '=', '2016')
										->sum('costo')
										;
			$cor04 = DB::table('pedidoCorporativo')
										->whereMonth('fecha', '=', '04')
										->whereYear('fecha', '=', '2016')
										->sum('costo')
										;
			$cor05 = DB::table('pedidoCorporativo')
										->whereMonth('fecha', '=', '05')
										->whereYear('fecha', '=', '2016')
										->sum('costo')
										;
			$cor06 = DB::table('pedidoCorporativo')
										->whereMonth('fecha', '=', '06')
										->whereYear('fecha', '=', '2016')
										->sum('costo')
										;
			$cor07 = DB::table('pedidoCorporativo')
										->whereMonth('fecha', '=', '07')
										->whereYear('fecha', '=', '2016')
										->sum('costo')
										;
			$cor08 = DB::table('pedidoCorporativo')
										->whereMonth('fecha', '=', '08')
										->whereYear('fecha', '=', '2016')
										->sum('costo')
			;$cor09 = DB::table('pedidoCorporativo')
										->whereMonth('fecha', '=', '09')
										->whereYear('fecha', '=', '2016')
										->sum('costo')
										;
			$cor10 = DB::table('pedidoCorporativo')
										->whereMonth('fecha', '=', '10')
										->whereYear('fecha', '=', '2016')
										->sum('costo')
										;
			$cor11 = DB::table('pedidoCorporativo')
										->whereMonth('fecha', '=', '11')
										->whereYear('fecha', '=', '2016')
										->sum('costo')
										;
			$cor12 = DB::table('pedidoCorporativo')
										->whereMonth('fecha', '=', '12')
										->whereYear('fecha', '=', '2016')
										->sum('costo')
										;

										$corTotal = DB::table('pedidoCorporativo')
										->whereYear('fecha', '=', '2016')
																	->sum('costo')
																	;


		return View::make('finanzas/consolidado',compact('aleEne','ale02','ale03','ale04','ale05','ale06','ale07','ale08','ale09','ale10','ale11','ale12','aleTotal','rec01','rec02','rec03','rec04','rec05','rec06','rec07','rec08','rec09','rec10','rec11','rec12','recTotal','cor01','cor02','cor03','cor04','cor05','cor06','cor07','cor08','cor09','cor10','cor11','cor12','corTotal'));
	}

	public function consolidadoSemanal()
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

			$semanasAledanos = DB::select( DB::raw('select week(fecha)+1 as semana, sum(costo) as costo from aledanos where YEAR(fecha) = 2016 group by Week(fecha)'));
			

			$array = array();
			foreach ($semanasAledanos as $valor)
			{
				$array[$valor->semana] = $valor->costo;
			}
    			
    		$array = json_encode($array);

			Log::debug($semanasAledanos);	
			Log::debug($array);	

			$semanasRecoleccion = DB::select( DB::raw('select Week(`disponibilidads`.`fecha`)+1 as semana, sum(`tickets`.`monto`) as costo from `tickets` inner join `pedidos` on `tickets`.`id` = `pedidos`.`ticket_id` inner join `disponibilidads` on `pedidos`.`id_recoleccion` = `disponibilidads`.`id` where YEAR(`disponibilidads`.`fecha`) = 2016 group by Week(`disponibilidads`.`fecha`)'));
			

			$array1 = array();
			foreach ($semanasRecoleccion as $valor)
			{
				$array1[$valor->semana] = $valor->costo;
			}
    			
    		$array1 = json_encode($array1);

    		$semanasCorporativo = DB::select( DB::raw('select week(fecha)+1 as semana, sum(costo) as costo from pedidoCorporativo where YEAR(fecha) = 2016 group by Week(fecha)'));
			

			$array2 = array();
			foreach ($semanasCorporativo as $valor)
			{
				$array2[$valor->semana] = $valor->costo;
			}
    			
    		$array2 = json_encode($array2);

			
			

		return View::make('finanzas/consolidadoSemanal',compact('aleEne','semanasAledanos','array','array1','array2','ale02','ale03','ale04','ale05','ale06','ale07','ale08','ale09','ale10','ale11','ale12','aleTotal','rec01','rec02','rec03','rec04','rec05','rec06','rec07','rec08','rec09','rec10','rec11','rec12','recTotal','cor01','cor02','cor03','cor04','cor05','cor06','cor07','cor08','cor09','cor10','cor11','cor12','corTotal'));
	}

	public function consolidadoIngresosEgresosSemanal()
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

			$semanasAledanos = DB::select( DB::raw('select week(fecha)+1 as semana, sum(costo) as costo from aledanos where YEAR(fecha) = 2016 group by Week(fecha)'));
			

			$array = array();
			foreach ($semanasAledanos as $valor)
			{
				$array[$valor->semana] = $valor->costo;
			}
    			
    		$array = json_encode($array);

			Log::debug($semanasAledanos);	
			Log::debug($array);	

			$semanasRecoleccion = DB::select( DB::raw('select Week(`disponibilidads`.`fecha`)+1 as semana, sum(`tickets`.`monto`) as costo from `tickets` inner join `pedidos` on `tickets`.`id` = `pedidos`.`ticket_id` inner join `disponibilidads` on `pedidos`.`id_recoleccion` = `disponibilidads`.`id` where YEAR(`disponibilidads`.`fecha`) = 2016 group by Week(`disponibilidads`.`fecha`)'));
			

			$array1 = array();
			foreach ($semanasRecoleccion as $valor)
			{
				$array1[$valor->semana] = $valor->costo;
			}
    			
    		$array1 = json_encode($array1);

    		$semanasCorporativo = DB::select( DB::raw('select week(fecha)+1 as semana, sum(costo) as costo from pedidoCorporativo where YEAR(fecha) = 2016 group by Week(fecha)'));
			

			$array2 = array();
			foreach ($semanasCorporativo as $valor)
			{
				$array2[$valor->semana] = $valor->costo;
			}
    			
    		$array2 = json_encode($array2);


    		$semanasEgresos = DB::select( DB::raw('select week(fecha)+1 as semana, sum(costo) as costo from insumos where YEAR(fecha) = 2016 group by Week(fecha)'));
			

			$array3 = array();
			foreach ($semanasEgresos as $valor)
			{
				$array3[$valor->semana] = $valor->costo;
			}
    			
    		$array3 = json_encode($array3);
			
			

		return View::make('finanzas/consolidadoIngresosEgresosSemanal',compact('aleEne','semanasAledanos','array3','array','array1','array2','ale02','ale03','ale04','ale05','ale06','ale07','ale08','ale09','ale10','ale11','ale12','aleTotal','rec01','rec02','rec03','rec04','rec05','rec06','rec07','rec08','rec09','rec10','rec11','rec12','recTotal','cor01','cor02','cor03','cor04','cor05','cor06','cor07','cor08','cor09','cor10','cor11','cor12','corTotal'));
	}

}
