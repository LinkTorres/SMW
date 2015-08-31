@extends('sesion')

@section('titulo')
  Servicio
@stop

@section('contenido')

<br>
<br>

<div class="row">
	<div class="col-md-2"></div>

	<div class="col-md-6">
		<div class="table-responsive">
			<table class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>#</th>
						<th>Servico</th>
						<th>Costo</th>
						<th>Minimo</th>
						<th>Extra</th>

					</tr>
				</thead>
				<tbody>
					@foreach ($servicios as $servicio)
					<tr>
						<td>{{$servicio->id }}</td>
						<td>{{$servicio->servicio }}</td>
						<td>${{ number_format($servicio->costo,2) }}</td>
						<td>

							@if($servicio->minimo_id!=3)
								{{ $servicio->minimo->minimo }} 
								{{ $servicio->minimo->tipo->tipo }}
							</td>	
							<td>${{ number_format($servicio->minimo->extra,2) }}</td>	

							@else
								Lavado y planchado</td>
							<td> - </td>	
							
							@endif	
							</td>
							
    					

					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>		


@stop	