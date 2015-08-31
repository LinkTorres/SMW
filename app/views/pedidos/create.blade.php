@extends('sesion')

@section('titulo')
  Pedidos
@stop

@section('scripts')

   {{ HTML::script('asset/js/app/sesion.js') }}
   {{ HTML::script('asset/js/angular.min.js') }}
   {{ HTML::script('asset/js/app/app.js') }}
  

@endsection


@section('contenido')
<br>

<br>

<input type="hidden" value="{{ $total_servicios }}" id="ipt_TS" />
<div ng-app="Monitor">
{{ Form::open(['route'=>'create.pedidos', 'method'=>'POST', 'role' => 'form','novalidate', 'id'=>'frm_pedido']) }}


	<div class="panel-group" id="div_Datos" role="tablist" aria-multiselectable="true" ng-controller="SerachCtrl">

	  	<div class="panel panel-default">
	        <div class="panel-heading" role="tab" id="h_cliente">
	          <h4 id="d_detalles_cliente" class="panel-title">
	            <a data-parent="#div_Datos" href="#d_cliente" aria-expanded="true" aria-controls="d_cliente" data-toggle="collapse" class="">
	              Directorio de clientes
	            </a>
	          <a class="anchorjs-link" href="#d_detalles_cliente"><span class="anchorjs-icon"></span></a></h4>
	        </div>
	        <div style="" aria-expanded="true" id="d_cliente" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="h_cliente">
	          <div class="panel-body">
	            <!-- Datos del  -->

	            	<div class="container"> 
						<div class="row">
							<div class="col-md-6">
								<label>Busquedar a cliente</label>
								<input type="text" class="form-control" ng-model="searchInput" ng-change="search()" autofocus>
									
								<div ng-repeat="cliente in clientes">	
									<a href="#" class="list-group-item" ng-click="selecciono(cliente)">
										<h2>@{{ cliente.nombre }}</h2>
										<div class="list-group">
											<h4 class="list-group-heading">Télefono: @{{ cliente.telefono }}</h4>
											<p class="list-group-item-text">Correo  : @{{ cliente.correo }}</p>
										</div>	
									</a>
								</div>	
							</div>
							<div class="col-md-6">
								<h3>Cliente: @{{ searchInput }}  </h3>
							
								<textarea ng-model="iptDireccion" class="form-control"></textarea>
									<div class="form-group hide">
										{{  Form::label('cliente_id', 'Cliente id') }}
						              	{{  Form::text('cliente_id',null, ['class' => 'form-control'])}}
										<input type="text" ng-model="iptcliente" id="iptcliente">   
									</div>

							</div>
						</div>
					</div>
	            	
	            <!-- Datos del Cliente -->
	          </div>
	        </div>
	    </div>

	    <div class="panel panel-default">
	    	<div class="panel-heading" role="tab" id="h_elemento_1">
	      		<h4 class="panel-title">
	        		<a data-toggle="collapse" data-parent="#div_Datos" href="#c_Servicio" aria-expanded="true" aria-controls="c_Servicio">
	          		Servicios
	        		</a>
	      		</h4>
	    	</div>
	    	<div id="c_Servicio" class="panel-collapse collapse" role="tabpanel" aria-labelledby="h_elemento_1">
	      		<div class="panel-body">
	        
		        {{ Form::label('servicio_id', 'Servicio') }}
				{{ Form::select('servicio_id',$listado_servicios,null,['class'=> 'input-sm', 'onchange' => 'cambio()']) }}

					@foreach ($servicios as $servicio)	
						
						@if ($servicio->id == 1)
							<div class="panel panel-primary" id="serv_{{ $servicio->id }}" style="">
						@else
					    	<div class="panel panel-primary hide" id="serv_{{ $servicio->id }}" style="">
					    @endif

								<div class="panel-heading">{{ $servicio->servicio }}</div>
								<div class="panel-body">

									Costo del Servicio ${{ number_format($servicio->costo,2) }}
									Minimo {{ $servicio->minimo->minimo }} {{ $servicio->minimo->tipo->tipo }}
									Costo Extra ${{ number_format($servicio->minimo->extra,2) }}
									<br>
									<?php $tipo_s= $servicio->minimo->tipo->tipo; ?>

								<div class="form-group">
								   	{{  Form::label( $tipo_s, $tipo_s) }}
								   	{{  Form::text( $tipo_s ,null, ['class' => 'form-control', 'onkeypress'=>'return solonumeros(event)'])}}
								   	{{ $errors->first( $tipo_s,'<p class="message_error">:message</p>') }}
								</div>

								</div>
								<div class="panel-footer">Panel footer</div>  
							</div>
						
				    	@endforeach 

	      		</div>
	    	</div>
		</div>

	   	<div class="panel panel-default">
	        <div id="h_recoleccion" role="tab" class="panel-heading">
	          <h4 class="panel-title" id="d_detalles_recoleccion">
	            <a aria-controls="d_recoleccion" aria-expanded="false" href="#d_recoleccion" data-parent="#div_Datos" data-toggle="collapse" class="collapsed">
	              Recolección
	            </a>
	          <a href="#d_detalles_recoleccion" class="anchorjs-link"><span class="anchorjs-icon"></span></a></h4>
	        </div>
	        <div aria-labelledby="h_recoleccion" role="tabpanel" class="panel-collapse collapse" id="d_recoleccion" aria-expanded="false" style="height: 0px;">
	          <div class="panel-body">
	           	<!-- Datos de Recoleccion -->

		            <div class="form-group">
		            	{{  Form::label('fecha_recoleccion', 'Fecha de Recolección') }}
		                <div class='input-group date'>
							{{  Form::text('fecha_recoleccion',null, ['class' => 'form-control','placeholder' => 'Fecha de Recolección'])}}
							{{ $errors->first('fecha_recoleccion','<p class="message_error">:message</p>') }}

		                    <span class="input-group-addon">
		                        <span class="glyphicon glyphicon-calendar"></span>
		                    </span>
		                </div>
		            </div>
					        

	           		<div class="form-group">
						{{  Form::label('hora_recoleccion', 'Hora') }}
						{{ Form::select('hora_recoleccion',$horario,null,['class'=> 'input-sm'],1) }}

					</div>

	           		<div class="form-group">
					   {{  Form::label('recoleccion', 'Dirección') }}
					   {{  Form::text('recoleccion',null, ['class' => 'form-control'])}}
					   {{ $errors->first('recoleccion','<p class="message_error">:message</p>') }}

					</div>	

					<div class="form-group">
						{{  Form::label('colonia_r', 'Colonia') }}
						{{ Form::select('colonia_r',$rutas,null,['class'=> 'input-sm'],1) }}

					</div>

	           	<!-- Datos de Recoleccion -->
	          </div>
	        </div>
	    </div>

	    <div class="panel panel-default">
	        <div id="h_entrega" role="tab" class="panel-heading">
	          <h4 class="panel-title" id="d_detalles_entrega">
	            <a aria-controls="d_entrega" aria-expanded="false" href="#d_entrega" data-parent="#div_Datos" data-toggle="collapse" class="collapsed">
	             Entrega
	            </a>
	          <a href="#d_detalles_entrega" class="anchorjs-link"><span class="anchorjs-icon"></span></a></h4>
	        </div>
	        <div aria-labelledby="h_entrega" role="tabpanel" class="panel-collapse collapse" id="d_entrega" aria-expanded="false" style="height: 0px;">
	          <div class="panel-body">
	           	<!-- Datos de Recoleccion -->
		          
		       		<div class="container">
					    <div class="row">
					        <div class='col-sm-6'>
					            <div class="form-group">
					            	{{  Form::label('fecha_entrega', 'Fecha de Entrega') }}
					                <div class='input-group date'>
										{{  Form::text('fecha_entrega',null, ['class' => 'form-control','placeholder' => 'Fecha de Entrega'])}}
										{{ $errors->first('fecha_entrega','<p class="message_error">:message</p>') }}

					                    <span class="input-group-addon">
					                        <span class="glyphicon glyphicon-calendar"></span>
					                    </span>
					                </div>
					            </div>
					        </div>
					    </div>
					</div>


	           		<div class="form-group">
						{{  Form::label('hora_entrega', 'Hora') }}
						{{ Form::select('hora_entrega',$horario,null,['class'=> 'input-sm'],1) }}

					</div>

	           		<div class="form-group">
					   {{  Form::label('direccion', 'Dirección') }}
					   {{  Form::text('direccion',null, ['class' => 'form-control'])}}
					   {{ $errors->first('direccion','<p class="message_error">:message</p>') }}

					</div>	

					<div class="form-group">
						{{  Form::label('colonia_e', 'Colonia') }}
						{{ Form::select('colonia_e',$rutas,null,['class'=> 'input-sm'],1) }}

					</div>

	           	<!-- Datos de Entrega -->
	          </div>
	        </div>
	    </div>

	</div>
<br>       
	<button type="button" class="btn btn-success" onclick="enviar();">Guardar </button>
	
	<br>
	<br>
	{{ Form::close() }}
	
<br>
<br>
<br>
</div>

<script type="text/javascript">
    $(function () {
        $('.date').datepicker({
            
        });
    });
</script>

@stop	