<?php

class AdministracionController extends \BaseController {

	public function vistaInsumos()
	{
		return View::make('administracion/agregarInsumos');
	}

	public function postInsumos()
	{
		$data = Input::all();

		DB::table('insumos')->insert(
		    array('concepto' => $data['concepto'], 'cantidad' => $data['cantidad'], 'costo' => $data['costo'] , 'fecha'=> $data['fecha'])
		);

		return Redirect::route('insumos');
	}

	public function vistaGastos()
	{
		return View::make('administracion/agregarGastos');
	}

	public function postGastos()
	{
		return View::make('administracion/agregarGastos');
	}

	public function vistaReportes()
	{
		return View::make('administracion/reporte');
	}

	public function vistaFinanzas()
	{
		return View::make('finanzas/ingresos');
	}
}
