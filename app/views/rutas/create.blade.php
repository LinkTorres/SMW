@extends('sesion')

@section('titulo')
  Nueva Rutas
@stop

@section('contenido')

<br>
<br>

<div class="container"> 
	<div class="row">
	<h1>Nueva Ruta</h1>

	
	<div class="col-md-6">

		{{ Form::open(['route'=>'altaRutas', 'method'=>'POST', 'role' => 'form','novalidate']) }}
	    	 	
		
		<div class="form-group">
		   {{  Form::label('ruta', 'Nombre de la Ruta') }}
		   {{  Form::text('ruta',null, ['class' => 'form-control'])}}
		   {{ $errors->first('ruta','<p class="message_error">:message</p>') }}

		</div>

		<div class="form-group">
			{{  Form::label('zona_id', 'Zona') }}
			{{ Form::select('zona_id',$zonas,null,['class'=> 'input-sm']) }}

		</div>

		
	


		<input type="submit" value="Guardar Ruta" class="btn btn-success">	  

		{{ Form::close() }}
	</div>	
</div>
		

	
</div>

@stop	