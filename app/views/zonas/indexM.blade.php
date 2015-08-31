@extends('monitor')

@section('titulo')
  Zona
@stop

@section('contenido')

<br>
<br>



<div aria-multiselectable="true" role="tablist" id="div_Zonas" class="panel-group">
	@foreach ($zonas as $zona)
	
      <div class="panel panel-default">
      <!--Principio del encabezado -->
        <div id="hc_{{ $zona->id }}" role="tab" class="panel-heading">
          <h4 class="panel-title" id="gc_{{ $zona->id }}">
            <a aria-controls="div_z{{ $zona->id }}" aria-expanded="true" href="#div_z{{ $zona->id }}" data-parent="#div_Zonas" data-toggle="collapse">
              {{ $zona->id }} .- {{ $zona->zona }}
            </a>
          <a href="#gc_{{ $zona->id }}" class="anchorjs-link"><span class="anchorjs-icon"></span></a></h4>
        </div>
        <div aria-labelledby="hc_{{ $zona->id }}" role="tabpanel" class="panel-collapse collapse" id="div_z{{ $zona->id }}">
          <div class="panel-body">
          <!--Contenido del Accordion-->
	           <div class="table-responsive">
				<table class="table table-hover">
					<tbody>
						<tr>
							<td>Zona:</td>
							<td>{{ $zona->zona }}</td>
						</tr>
							<td>Rutas</td>
							<td>
								@if (count($zona->ruta) > 0)    
								<div class="table-responsive">
										<table class="table table-hover">
										<tbody>
											@foreach ($zona->ruta as $ruta)
											<tr>
												<td>{{ $ruta->ruta }}</td>
												<?php
												/*
												<td>
													{{ HTML::linkAction('RutasController@show', 'Ver', array(
												$ruta->slug."/".$ruta->id),array('class' => 'btn btn-xs')) }}
												</td>
												*/ ?>			
											</tr>
											@endforeach
										</tbody>
										</table>
									</div>
								@else
    				
    							<p class="alert">Sin registros</p>
								@endif
							</td>
						</tr>
						<tr>
							<td>Recolector</td>	
							<td>	
								@if (count($zona->recolector) > 0)
								<?php $i=0;?>    
									@foreach ($zona->recolector as $recolector)
										<?php $i++;?>
										<div class="table-responsive">
											<table class="table table-hover">
												<tbody>
													<tr>
														<td>{{ $i }}.- {{ $recolector->nombre }} </td>
														<td>[Puesto: recolector]</td>
													</tr>
													<tr>
														<td>Horario</td>
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
												</tbody>
											</table>
										</div>

									@endforeach
									
								@else
    				
    							<p class="alert">Sin registros</p>
								@endif
							</td>
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