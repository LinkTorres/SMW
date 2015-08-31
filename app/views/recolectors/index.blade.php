@extends('sesion')

@section('titulo')
  Recolectores
@stop

@section('contenido')

<p class="right">  
	<a href="{{ URL::route('altaRecolector') }}" class="btn btn-lg btn-success"> <span class="glyphicon glyphicon-plus"></span>		Dar de alta a nuevo Recolector </a>
</p>

	<div aria-multiselectable="true" role="tablist" id="div_recolectors" class="panel-group">
	@foreach ($recolectors as $recolector)
	
      <div class="panel panel-default">
      <!--Principio del encabezado -->
        <div id="hc_{{ $recolector->id }}" role="tab" class="panel-heading">
          <h4 class="panel-title" id="gc_{{ $recolector->id }}">
            <a aria-controls="col_{{ $recolector->id }}" aria-expanded="true" href="#col_{{ $recolector->id }}" data-parent="#div_recolectors" data-toggle="collapse">
              {{ $recolector->id }} .- {{ $recolector->nombre }}
            </a>
          <a href="#gc_{{ $recolector->id }}" class="anchorjs-link"><span class="anchorjs-icon"></span></a></h4>
        </div>
        <div aria-labelledby="hc_{{ $recolector->id }}" role="tabpanel" class="panel-collapse collapse" id="col_{{ $recolector->id }}">
          <div class="panel-body">
          <!--Contenido del Accordion-->
	           <div class="table-responsive">
				<table class="table table-hover">
					<tbody>
						<tr>
							<td>recolector:</td>
							<td>{{ $recolector->nombre }}</td>
						</tr>
						<tr>
							<td>Correo</td>
							<td>{{ $recolector->correo }}</td>
						</tr>
						<tr>
							<td>Zona</td>
							<td>{{ $recolector->zona->zona }}</td>
						</tr>
						<tr>
							<td>Horario 
							
							</td>
							<td>
							
								<div class="table-responsive">
									<table class="table table-hover">
										<tbody>
			    							<tr>

			    								<td colspan="2">{{ $recolector->horario->horario }}</td>
			    							</tr>
											<tr>
												<td>Entrada </td>
			    								<td>{{ $recolector->horario->entrada }}</td>
			    							</tr>
			    							<tr>
			    								<td>Salida </td>
			    								<td>{{ $recolector->horario->salida }}</td>
			    							</tr>
										</tbody>
									</table>
								</div>
							</td>
						</tr>
						<tr>
							<td>Ver</td>
							<td>{{ HTML::linkAction('RecolectorsController@show', 'Ver', array(
												\Str::slug($recolector->nombre)."/".$recolector->id),array('class' => 'btn btn-xs')) }}</td>
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
