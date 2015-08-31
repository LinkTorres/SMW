@extends('sesion')

@section('titulo')
  Rutas
@stop

@section('contenido')

<br>
<br>


<div class="container"> 
	<div class="row">
	<h1>Nueva Ruta</h1>

	
	<div class="col-md-6">

		{{ Form::model($ruta,array('route'=> array('actualizaRuta', $ruta->id), 'method'=>'POST', 'role' => 'form','novalidate') ) }}
	    	 	
		
		<div class="form-group">
		   {{  Form::label('ruta', 'Nombre de la Ruta') }}
		   {{  Form::text('ruta',null, ['class' => 'form-control'])}}
		   {{ $errors->first('ruta','<p class="message_error">:message</p>') }}

		</div>

		<div class="form-group">
			{{  Form::label('zona_id', 'Zona') }}
			{{ Form::select('zona_id',$zonas,null,['class'=> 'input-sm'],$ruta->zona_id) }}

		</div>

		
	


		<input type="submit" value="Guardar Ruta" class="btn btn-success">	  

		{{ Form::close() }}
	</div>	
</div>
		

	
</div>

@stop	