@extends('sesion')

@section('titulo')
  Rutas
@stop

@section('contenido')

<br>
<br>

<h1> {{ $ruta->ruta }}</h1>


<div class="table-responsive">
{{ HTML::linkAction('RutasController@edit', 'Editar', array($ruta->id),array('class' => 'btn btn-warning')) }}
	<table class="table table-hover">
		<thead>
			<tr>
				<th>Zona</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>{{ $ruta->zona->zona }}</td>
			</tr>
		</tbody>
	</table>
</div>

@stop	