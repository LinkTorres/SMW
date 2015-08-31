@extends('sesion')

@section('titulo')
  Pedido de Lavado
@stop

@section('scripts')

   {{ HTML::script('asset/js/app/sesion.js') }}
   {{ HTML::script('asset/js/angular.min.js') }}
   {{ HTML::script('asset/js/app/app.js') }}
  

@endsection


@section('contenido')
<br>

<br>

<?php
/*

	$time = strtotime('10:00');
	$startTime = date("H:i", strtotime('-30 minutes', $time));
	$endTime = date("H:i", strtotime('+30 minutes', $time));



echo "<pre>".print_r($time,true)."</pre>";
echo "<pre>".print_r($startTime,true)."</pre>";
echo "<pre>".print_r($endTime,true)."</pre>";
echo "<pre>".print_r($date,true)."</pre>";

*/
?>

<div ng-app="Monitor">
{{ Form::open(['route'=>'create.lavado', 'method'=>'POST', 'role' => 'form','novalidate', 'id'=>'frm_pedido']) }}

	
	<div class="panel panel-default">
  		<div class="panel-heading">Cliente</div>
  			<div class="panel-body">
    			<div class="container"> 
					<div class="row" ng-controller="SerachCtrl">
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
							<h4>Cliente: @{{ searchInput }}  </h4>
						
							<textarea ng-model="iptDireccion"></textarea>
								<div class="form-group hide">
									{{  Form::label('cliente_id', 'Cliente id') }}
						            {{  Form::text('cliente_id',null, ['class' => 'form-control'])}}
										<input type="text" ng-model="iptcliente" id="iptcliente">   
								</div>
						</div>
					</div>
				</div>
			</div>	
  		</div>
	</div>


	<div class="panel panel-default">
  		<div class="panel-heading">Lavado</div>
  		<div class="panel-body">
	    	<div class="row">
				<div class="col-md-3">	
		    		<div class="form-group">
					   	{{  Form::label('kilos', 'Kilos') }}
					   	{{  Form::text('kilos' ,null, ['class' => 'form-control', 'onkeypress'=>'return solonumeros(event);', 'onkeyup'=> 'costo(1)'])}}
					   	{{ $errors->first('kilos','<p class="message_error">:message</p>') }}
					</div>
				</div>
				<div class="col-md-6">
					Costo
					<label id="lbl_Costo"></label>
				</div>
				<div class="col-md-3">
					Precios <br>
					Costo del Servicio ${{ number_format($servicio->costo,2) }}
					{{ Form::hidden('iptCosto', $servicio->costo, array('id' => 'iptCosto') ) }}
					{{ Form::hidden('iptMin', $servicio->minimo->minimo, array('id' => 'iptMin') ) }}

					<input type="hidden" id="lbl_p" value="{{ $servicio->costo }}">
					<input type="hidden" id="ipt_min" value="{{ $servicio->minimo->minimo }}"><br>
					

					Minimo {{ $servicio->minimo->minimo }} {{ $servicio->minimo->tipo->tipo }}<br>
					Costo Extra ${{ number_format($servicio->minimo->extra,2) }}

				</div>		
  		</div>
	</div>

	<div class="panel panel-default">
  		<div class="panel-heading">Recolección</div>
			<div class="panel-body">

			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
		            	{{  Form::label('fecha_recoleccion', 'Fecha de Recolección') }}
		                <div class='input-group date'>
							{{  Form::text('fecha_recoleccion',null, ['class' => 'form-control','placeholder' => 'Fecha de Recolección', 'data-date-format' => 'dd-mm-yyyy'])}}
							{{ $errors->first('fecha_recoleccion','<p class="message_error">:message</p>') }}
							 {{ Form::hidden('iptFR', NULL, array('id' => 'iptFR') ) }}
		                    <span class="input-group-addon">
		                        <span class="glyphicon glyphicon-calendar"></span>
		                    </span>

		                </div>
		            </div>

				</div>
				<div class="col-md-6">
					<div class="form-group">
						{{  Form::label('hora_recoleccion', 'Hora') }}
						{{ Form::select('hora_recoleccion',array(),null,['class'=> 'input-sm'],1) }}
					</div>  	
				</div>
			</div>	

			<div class="form-group">
				{{  Form::label('colonia_r', 'Colonia') }}
				{{ Form::select('colonia_r',$rutas,null,['class'=> 'input-sm'],1) }}

			</div>
       		<div class="form-group">
			   {{  Form::label('recoleccion', 'Dirección') }}
			   {{  Form::text('recoleccion',null, ['class' => 'form-control'])}}
			   {{ $errors->first('recoleccion','<p class="message_error">:message</p>') }}

			</div>	

				

		</div>
	</div>

	<div class="panel panel-default">
  		<div class="panel-heading">Entrega</div>
  		<div class="panel-body">
  			<div class="row">
				<div class="col-md-6">
		    		<div class="form-group">
		            	{{  Form::label('fecha_entrega', 'Fecha de Entrega') }}
		                <div class='input-group date'>
							{{  Form::text('fecha_entrega',null, ['class' => 'form-control','placeholder' => 'Fecha de Entrega','data-date-format' => 'dd-mm-yyyy'])}}
							{{ $errors->first('fecha_entrega','<p class="message_error">:message</p>') }}
							 {{ Form::hidden('iptFE', NULL, array('id' => 'iptFE') ) }}
		                    <span class="input-group-addon">
		                        <span class="glyphicon glyphicon-calendar"></span>
		                    </span>
		                </div>
		            </div>
		        </div>
			    <div class="col-md-6">        
		            <div class="form-group">
						{{  Form::label('hora_entrega', 'Hora') }}
						{{ Form::select('hora_entrega',array(),null,['class'=> 'input-sm'],1) }}

					</div>
				</div>
			</div>	

       		<div class="form-group">
				{{  Form::label('colonia_e', 'Colonia') }}
				{{ Form::select('colonia_e',$rutas,null,['class'=> 'input-sm'],1) }}

			</div>
       		<div class="form-group">
			   {{  Form::label('direccion', 'Dirección') }}
			   {{  Form::text('direccion',null, ['class' => 'form-control'])}}
			   {{ $errors->first('direccion','<p class="message_error">:message</p>') }}

			</div>	


  		</div>
	</div>
	
	<input type="button" value="Levantar Pedido" class="btn btn-success" onclick="enviar()">

{{ Form::close() }}

</div>

<script type="text/javascript">
    $(function () {
    	$('.date').datepicker({
            autoclose:true
        },
        {
				onRender: function(date) {
					//console.log("entro a date:" + date);
					 
					return date.valueOf() < now.valueOf() ? 'disabled' : '';
				}
			});
    	var nowTemp = new Date();
		var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate()+2, 0, 0, 0, 0);
		console.log('nowTemp '+nowTemp);
		console.log('now ' + now);

        $('#fecha_recoleccion').datepicker({
            autoclose:true
        }).on('changeDate', 
          function(ev) {
          	$('#hora_recoleccion').html('');
        valor= $('#fecha_recoleccion').val();
        formato = valor.split("-");
        fecha = (formato[2].length>3)? formato[2] +"-" + formato[1] +"-" +formato[0] : formato[2] +"-" + formato[0] +"-"+ formato[1];
        $('#iptFR').val(fecha);
        console.log("Valor: "+ fecha);
        /*Ajax para la peticion del horario*/ 

	        $.ajax({
			type:'POST',
			dataType: 'JSON',
			url: 'disponible',
			data: {fecha: fecha},
				success :
				function(data) 
				{  	
					console.log("datos: " + data);
					for (var i in data) {
          			$('#hora_recoleccion').append('<option value="'+data[i]['id']+'">'+data[i]['hora']+'</option>');	
          			console.log( i + ' - '+data[i]['hora']);

        			}
				},
			complete: 
	    		function(){
	    			//$(carga).hide('slow');
	    		}

		});
		 /*Ajax para la peticion del horario*/ 



          	$('#fecha_entrega').datepicker({
    			startDate: '+3d',
    			autoclose: true
          	}).on('changeDate', 
          function(ev) {
          	$('#hora_entrega').html('');
        valor= $('#fecha_entrega').val();
        formato = valor.split("-");
        fecha = (formato[2].length>3)? formato[2] +"-" + formato[1] +"-" +formato[0] : formato[2] +"-" + formato[0] +"-"+ formato[1];
        $('#iptFE').val(fecha);
        console.log("Valor: "+ fecha);
        /*Ajax para la peticion del horario*/ 

	        $.ajax({
			type:'POST',
			dataType: 'JSON',
			url: 'disponible',
			data: {fecha: fecha},
				success :
				function(data) 
				{  	
					console.log("datos: " + data);
					for (var i in data) {
          			$('#hora_entrega').append('<option value="'+data[i]['id']+'">'+data[i]['hora']+'</option>');	
          			console.log( i + ' - '+data[i]['hora']);

        			}
				},
			complete: 
	    		function(){
	    			//$(carga).hide('slow');
	    		}

			});
	    });    


          	

          	
        });  	
    });
</script>
<br>
<br>
@stop	