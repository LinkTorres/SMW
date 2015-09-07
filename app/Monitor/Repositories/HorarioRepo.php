<?php namespace Monitor\Repositories;
use Monitor\Entities\Horario;
use Monitor\Entities\Disponibilidads;
use Monitor\Entities\Recolector;
use Monitor\Entities\Hora;
use Monitor\Entities\Ruta;
use Monitor\Entities\Pedido;
class HorarioRepo 
{
	public function ocuparHorario($fecha, $hora,$zona){
		if($zona < 4){
			Disponibilidads::where('fecha','=', $fecha)
						->where('Zona','A') 
						->where('hora_id','=', $hora)->update(array('disponible' => 1) );
			$id= Disponibilidads::where('fecha','=', $fecha)
						->where('Zona','A') 
						->where('hora_id','=', $hora)->pluck('id');
		}
		else
		{
			Disponibilidads::where('fecha','=', $fecha)
						->where('Zona','B') 
						->where('hora_id','=', $hora)->update(array('disponible' => 1) );
			$id= Disponibilidads::where('fecha','=', $fecha)
						->where('Zona','B') 
						->where('hora_id','=', $hora)->pluck('id');
		}
		
		
					
		return $id;
	}
	public function agregaHorariosAPedidos($id,$recoleccion,$entrega){
		Pedido::where('id','=',$id)->update( array('id_recoleccion' => $recoleccion, 'id_entrega' => $entrega) );
		
	}


	public function agregaHoraEntrega($recoleccion,$entrega,$zona){

		$id;
		$fecha = $recoleccion;


		$nuevafecha = strtotime ( '+2 day' , strtotime ( $fecha ) ) ;
		$nuevafecha = date ( 'Y-m-d' , $nuevafecha );
		
		$dia= date('w',strtotime($nuevafecha));
		if($dia==0){
			$nuevafecha = strtotime ( '+3 day' , strtotime ( $fecha ) ) ;
			$nuevafecha = date ( 'Y-m-d' , $nuevafecha );
		}
		
		$ocupado= $this->estaDisponible($nuevafecha,$entrega,$zona);

		if($ocupado==0)
		{
			$id=$this->ocuparHorario($nuevafecha,$entrega,$zona);
		}
		else
		{
			
			while ($ocupado==1) 
			{
				if($entrega>=1 and $entrega<=15){
					$entrega++;
				}
				else
				{
					$entrega--;
				}
				
				$ocupado= $this->estaDisponible($nuevafecha,$entrega,$zona);

			}
			$id=$this->ocuparHorario($nuevafecha,$entrega,$zona);

		}				
		
		return $id;
		
	}
	public function estaDisponible($nuevafecha, $entrega, $zona){

		if($zona < 4){
			$ocupado= Disponibilidads::where('fecha','=', $nuevafecha)
						->where('Zona','A') 
						->where('hora_id','=', $entrega)->pluck('disponible');
		}
		else
		{
			$ocupado= Disponibilidads::where('fecha','=', $nuevafecha)
						->where('Zona','B') 
						->where('hora_id','=', $entrega)->pluck('disponible');
		}

		return $ocupado;
	}
	
	public function id_horario($id){

		$horario =Disponibilidads::leftJoin('horas','disponibilidads.hora_id','=', 'horas.id')->where('disponibilidads.id','=',$id)->get();
		
		return $horario;
	}

	public function agregaHorarioRecoleccion($id,$recoleccion,$zona,$hora){
		//falta agregar a recolector buscar Horario;
		
			$id_recolector= Hora::leftJoin('recolectors', 'recolectors.horario_id' , '=', 'horas.horario')
			->leftJoin('rutas','rutas.zona_id','=','recolectors.zona_id')->where('horas.id' ,'=', $hora)
			->where('rutas.id','=',$zona)->pluck('recolectors.id');
		
		Pedido::where('id','=',$id)->update( array('id_recoleccion' => $recoleccion, 'id_recolector_r'=>$id_recolector) );
		return $id_recolector; 
	}
	
	public function asignaRecolectorE($id,$recolector_id){
		Pedido::where('id','=',$id)->update( array('id_recolector_r'=>$recolector_id) );
	}

	public function lista_horas()
	{
		$horas = [];
		$i=0;
		foreach (Hora::all() as $hora) 
		{
			$horas[$i]['hora'] = $hora->hora;
			$horas[$i]['id'] = $hora->id;
			$i++;
		}
		return $horas;
	}
	
	public function sinOcupar($fecha,$hora_id){
		$respuesta = Disponibilidads::where('fecha', '=', $fecha)
                    ->where('hora_id', '=', $hora_id)
                    ->where('disponible', '=', 0)
                    ->get();

		return $respuesta;
	}
	
}
