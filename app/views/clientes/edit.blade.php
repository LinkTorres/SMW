@extends('sesion')

@section('titulo')

@stop

@section('contenido')
  
  <br>
<div class="container"> 
	<div class="row">
	<h1>Actualizar datos del Cliente</h1>
	
	
	<div class="col-md-6">

	    
	    {{ Form::model($cliente,array('route'=> array('actualizaCliente',$cliente->id), 'method'=>'PUT', 'role' => 'form','novalidate') ) }}	 	
		
		<div class="form-group">
		   {{  Form::label('nombre', 'Nombre Completo') }}
		   {{  Form::text('nombre',null, ['class' => 'form-control'])}}
		   {{ $errors->first('nombre','<p class="message_error">:message</p>') }}

		</div>

		<div class="form-group">
		   {{  Form::label('direccion', 'Dirección') }}
		   {{  Form::text('direccion',null, ['class' => 'form-control'])}}
		   {{ $errors->first('direccion','<p class="message_error">:message</p>') }}

		</div>

		<div class="form-group">
		   {{  Form::label('nacimiento', 'Fecha de Nacimiento') }}
		   {{  Form::text('nacimiento',null, ['class' => 'form-control'])}}
		   {{ $errors->first('nacimiento','<p class="message_error">:message</p>') }}

		</div>

		<div class="form-group">
		   {{  Form::label('correo', 'Correo') }}
		   {{  Form::email('correo', null, ['class' => 'form-control'])}}
		   {{ $errors->first('correo','<p class="message_error">:message</p>') }}


		</div>

		<div class="form-group">
		   {{  Form::label('telefono', 'Teléfono') }}
		   {{  Form::text('telefono', null, ['class' => 'form-control'])}}
		   {{ $errors->first('telefono','<p class="message_error">:message</p>') }}


		</div>

		<div class="form-group">
			{{  Form::label('ruta_id', 'Colonia') }}
			{{ Form::select('ruta_id',$rutas,null,['class'=> 'input-sm'],$cliente->ruta_id) }}

		</div>

	


		<input type="submit" value="Actualizar Información" class="btn btn-success">	  

		{{ Form::close() }}
	</div>	
</div>
		

	
</div>


        
   
@stop 