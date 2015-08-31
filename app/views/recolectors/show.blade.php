@extends('sesion')

@section('titulo')

@stop

@section('contenido')
  
  <br>
<div class="container"> 
	<div class="row">
	<h1>Datos del Recolector</h1>
	
	
	<div class="col-md-6">

		
	    {{ Form::model($recolector,array()) }}	 	
		
		<div class="form-group">
		   {{  Form::label('nombre', 'Nombre Completo') }}
		   {{  Form::text('nombre',null, ['class' => 'form-control', 'disabled']) }}
		   

		</div>

		<div class="form-group">
		   {{  Form::label('correo', 'Correo') }}
		   {{  Form::email('correo', null, ['class' => 'form-control', 'disabled']) }}
		   


		</div>

		<div class="form-group">
			{{  Form::label('zona_id', 'Zona') }}
			{{ Form::select('zona_id',$zonas,null,['class'=> 'input-sm','disabled'],$recolector->zona_id) }}

		</div>

		<div class="form-group">
			{{  Form::label('horario_id', 'Horario') }}
			{{ Form::select('horario_id',$horarios,null,['class'=> 'input-sm','disabled'],$recolector->horario_id) }}

		</div>

		<div class="form-group">
		   {{  Form::label('sueldo', 'Sueldo') }}
		   {{  Form::text('sueldo', null, ['class' => 'form-control', 'disabled'])}}
		   {{ $errors->first('sueldo','<p class="message_error">:message</p>') }}


		</div>
	

		{{ HTML::linkAction('RecolectorsController@edit', 'Modificar datos del Recolector', array($recolector->id),array('class' => 'btn btn-warning')) }}

		

		{{ Form::close() }}
	</div>	
</div>
		

	
</div>


     
   
@stop 