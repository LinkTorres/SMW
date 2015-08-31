@extends('sesion')

@section('titulo')

@stop

@section('contenido')
 
<br>
<div class="container"> 
	<div class="row">
	<h1>Datos del Cliente</h1>
	
	
	<div class="col-md-6">

		
		{{ HTML::linkAction('ClientesController@edit', 'Modificar datos del Cliente', array($cliente->id),array('class' => 'btn btn-warning')) }}


		{{ Form::model($cliente,array()) }}
	    	 	
		
		<div class="form-group">
		   {{  Form::label('nombre', 'Nombre Completo') }}
		   {{  Form::text('nombre',null, ['class' => 'form-control', 'disabled'])}}
		   

		</div>

		<div class="form-group">
		   {{  Form::label('direccion', 'Dirección') }}
		   {{  Form::text('direccion',null, ['class' => 'form-control','disabled'])}}
		   

		</div>

		<div class="form-group">
		   {{  Form::label('nacimiento', 'Fecha de Nacimiento') }}
		   {{  Form::text('nacimiento',null, ['class' => 'form-control','disabled'])}}
		  

		</div>

		<div class="form-group">
		   {{  Form::label('correo', 'Correo') }}
		   {{  Form::email('correo', null, ['class' => 'form-control','disabled'])}}
		  


		</div>

		<div class="form-group">
		   {{  Form::label('telefono', 'Teléfono') }}
		   {{  Form::text('telefono', null, ['class' => 'form-control','disabled'])}}
		  


		</div>

		<div class="form-group">
			{{  Form::label('ruta_id', 'Colonia') }}
			{{ Form::select('ruta_id',$rutas,null,['class'=> 'input-sm','disabled'],$cliente->ruta_id) }}

		</div>  

		{{ Form::close() }}
	</div>	
</div>
		

	
</div>


        
   
@stop 