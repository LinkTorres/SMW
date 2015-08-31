@extends('sesion')

@section('titulo')

@stop

@section('contenido')
  
  <br>
<div class="container"> 
	<div class="row">
	<h1>Modificar Datos del Recolector</h1>
	
	
	<div class="col-md-6">

		
	    {{ Form::model($recolector,array('route'=> array('actualizarRecolector', $recolector->id), 'method'=>'PUT', 'role' => 'form','novalidate') ) }}	 	

		<div class="form-group">
		   {{  Form::label('nombre', 'Nombre Completo') }}
		   {{  Form::text('nombre',null, ['class' => 'form-control'])}}
		   {{ $errors->first('nombre','<p class="message_error">:message</p>') }}

		</div>

		<div class="form-group">
		   {{  Form::label('correo', 'Correo') }}
		   {{  Form::email('correo', null, ['class' => 'form-control'])}}
		   {{ $errors->first('correo','<p class="message_error">:message</p>') }}


		</div>

		<div class="form-group">
			{{  Form::label('zona_id', 'Zona') }}
			{{ Form::select('zona_id',$zonas,null,['class'=> 'input-sm'],$recolector->zona_id) }}

		</div>

		<div class="form-group">
			{{  Form::label('horario_id', 'Horario') }}
			{{ Form::select('horario_id',$horarios,null,['class'=> 'input-sm'],$recolector->horario_id) }}

		</div>

		<div class="form-group">
		   {{  Form::label('sueldo', 'Sueldo') }}
		   {{  Form::text('sueldo', null, ['class' => 'form-control'])}}
		   {{ $errors->first('sueldo','<p class="message_error">:message</p>') }}


		</div>
	


		<input type="submit" value="Enviar " class="btn btn-success">	  

		{{ Form::close() }}
	</div>	
</div>
		

	
</div>


     
   
@stop 