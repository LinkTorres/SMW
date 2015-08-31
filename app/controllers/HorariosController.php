<?php
use Monitor\Repositories\HorarioRepo;
use Monitor\Entities\Disponibilidads;

class HorariosController extends \BaseController {
	protected $horarioRepo;
	
	public function __construct(HorarioRepo $horarioRepo)
	{
		$this->horarioRepo=$horarioRepo;
		
	}
	
	/**
	 * Display a listing of horarios
	 *
	 * @return Response
	 */
	public function index()
	{
		$horarios = Horario::all();

		return View::make('horarios.index', compact('horarios'));
	}

	/**
	 * Show the form for creating a new horario
	 *
	 * @return Response
	 */
	public function create()
	{
		
		date_default_timezone_set('America/Mexico_City');
		setlocale(LC_TIME, 'spanish');
		$anio =date('Y');
		$mes= 9; //date('m');
		$dias =date('t');
		
		
		$horas =$this->horarioRepo->lista_horas();
		//echo "<pre>".print_r($horas,true)."</pre>";
		//lista_horas
		for ($i=1; $i<=$dias;$i++){
			$dia=$i;
			$sabado=date('w',strtotime($anio."/".$mes."/".$dia));
			if($i<10)
				$dia="0".$i;	
			$fecha=$anio."-".$mes."-".$dia;
			foreach ($horas as $hora)
			{
				if($sabado!=0)
				{	
					if($sabado!=6)
					{
						echo "<pre>dia - $sabado </pre>";
						 $disponible= new Disponibilidads();
						 $disponible->fecha=$fecha;
						 $disponible->hora_id=$hora['id'];
						 $disponible->disponible=0;
						 $disponible->save();
						 $valores = $fecha ." ".$hora['id']." ".$hora['hora'];
						 echo "<pre>".print_r($valores,true)."</pre>";
						
					}
					else
					{
					//Para los sabado hasta medio dia
					if($hora['id']<=7)
					{
						echo "<pre> Sábado $sabado</pre>";
						$disponible= new Disponibilidads();
						$disponible->fecha=$fecha;
						$disponible->hora_id=$hora['id'];
						$disponible->disponible=0;
						$disponible->save();
						$valores = $fecha ." ".$hora['id']." ".$hora['hora'];
						echo "<pre>".print_r($valores,true)."</pre>";
					}	
				}
						
			}
					
			
			
		 }
	 }
	
		
		//return View::make('horarios.create');
	}

	/**
	 * Store a newly created horario in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Horario::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Horario::create($data);

		return Redirect::route('horarios.index');
	}

	/**
	 * Display the specified horario.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$horario = Horario::findOrFail($id);

		return View::make('horarios.show', compact('horario'));
	}

	/**
	 * Show the form for editing the specified horario.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$horario = Horario::find($id);

		return View::make('horarios.edit', compact('horario'));
	}

	/**
	 * Update the specified horario in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$horario = Horario::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Horario::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$horario->update($data);

		return Redirect::route('horarios.index');
	}

	/**
	 * Remove the specified horario from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Horario::destroy($id);

		return Redirect::route('horarios.index');
	}

}
