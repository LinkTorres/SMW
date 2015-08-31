
@extends('monitor')

@section('titulo')
  Clientes
@stop

@section('contenido')

<p class="right">  
	<a href="{{ URL::route('altaCliente') }}" class="btn btn-lg btn-success"> <span class="glyphicon glyphicon-plus"></span>		Dar de alta nuevo Cliente </a>
</p>

	<div aria-multiselectable="true" role="tablist" id="div_Clientes" class="panel-group">
	@foreach ($clientes as $cliente)
	
      <div class="panel panel-default">
      <!--Principio del encabezado -->
        <div id="hc_{{ $cliente->id }}" role="tab" class="panel-heading">
          <h4 class="panel-title" id="gc_{{ $cliente->id }}">
            <a aria-controls="col_{{ $cliente->id }}" aria-expanded="true" href="#col_{{ $cliente->id }}" data-parent="#div_Clientes" data-toggle="collapse">
              {{ $cliente->id }} .- {{ $cliente->nombre }}
            </a>
          <a href="#gc_{{ $cliente->id }}" class="anchorjs-link"><span class="anchorjs-icon"></span></a></h4>
        </div>
        <div aria-labelledby="hc_{{ $cliente->id }}" role="tabpanel" class="panel-collapse collapse" id="col_{{ $cliente->id }}">
          <div class="panel-body">
          <!--Contenido del Accordion-->
	           <div class="table-responsive">
				<table class="table table-hover">
					<tbody>
						<tr>
							<td>Cliente:</td>
							<td>{{ $cliente->nombre }}</td>
						</tr>
						<tr>
							<td>Telefono:</td>
							<td>{{ $cliente->telefono }}</td>
						</tr>
						<tr>
							<td>Dirección:</td>
							<td>{{ $cliente->direccion }}</td>
						</tr>
						<tr>
							<td>Correo</td>
							<td>{{ $cliente->correo }}</td>
						</tr>
						<tr>
							<td>Fecha de Nacimiento</td>
							<td>{{ $cliente->nacimiento }}</td>
						</tr>
						<tr>
							<td>Colonia</td>
							<td>{{ $cliente->ruta->ruta }}</td>
						</tr>
						<tr>
							<td>Colonia id</td>
							<td>{{ $cliente->ruta->id }}</td>
						</tr>

						<tr>
							<td>Ver</td>
							<td>{{ HTML::linkAction('ClientesController@show', 'Ver', array(
												\Str::slug($cliente->nombre)."/".$cliente->id),array('class' => 'btn btn-xs')) }}</td>
						</tr>
					</tbody>
				</table>
			</div>

          </div>
        </div>
      </div>
    @endforeach  
	</div>


@stop
