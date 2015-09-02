<!DOCTYPE html>
<?php
$tipo;
$id_servicio;
$costo;
$pago;
$tipo_pago;
 ?>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Mint Wash</title>

    <!-- Bootstrap core CSS -->
     {{ HTML::style('asset/css/bootstrap.min.css') }}
     {{ HTML::style('asset/css/bootstrap-datepicker3.css') }}
     {{ HTML::style('web/css/main.css') }}
     {{ HTML::style('web/css/green.css') }}
     {{ HTML::style('asset/css/sesion.css') }}
     {{ HTML::style('asset/css/tablas.css') }}
     {{ HTML::style('asset/css/jquery-ui.min') }}
     {{ HTML::style('asset/css/jquery-ui.structure.css') }}





     
     




    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    {{ HTML::script('asset/js/jquery.min.js') }}
    {{ HTML::script('asset/js/bootstrap.min.js') }}
    {{ HTML::script('asset/js/jquery-ui.min.js') }}

  
    
    {{ HTML::script('asset/js/app/recolector.js') }}


    


  
    
  </head>

  <body>

   <nav class="navbar menta navbar-fixed-top">
    <div class="container">  
      <div class="navbar-right">
        <img src="asset/img/logo.png" alt="MintWash" class="img-responsive ">
      </div> 
    </div>
   </nav>


   <div class="row">
  <div class="col-xs-12 morado" style="height:10px"></div>
  <div class="col-xs-12 menta btn-texto text-center"><h2>Ordenes Recolector</h2></div>
</div>
<br>

@if(count($pedidos)>0)

<div aria-multiselectable="true" role="tablist" id="div_Pedidos" class="panel-group">
  @foreach ($pedidos as $pedido)
  
  
      <div class="panel panel-default" id="div_p{{ $pedido->ticket_id }}">
      <!--Principio del encabezado -->
        <div id="hc_{{ $pedido->id }}" role="tab" class="panel-heading">
          <h4 class="panel-title" id="gc_{{ $pedido->id }}">
            <a aria-controls="col_{{ $pedido->id }}" aria-expanded="true" href="#col_{{ $pedido->id }}" data-parent="#div_Pedidos" data-toggle="collapse">
               @if($pedido->estatus_id===2)
               [Recolectar]
               @else
               [Entregar]
              @endif

              Ticket - {{ $pedido->ticket_id }} 
              
              @foreach ($pedido->recoleccion as $recoleccion)
              Zona {{ $recoleccion->ruta }}
              @endforeach            

              @foreach($pedido->fechaRecoleccion as $fecha)
               Hora {{ $fecha->hora->hora }}
              @endforeach


        </a>
          <a href="#gc_{{ $pedido->id }}" class="anchorjs-link"><span class="anchorjs-icon"></span></a></h4>
        </div>
        <div aria-labelledby="hc_{{ $pedido->id }}" role="tabpanel" class="panel-collapse collapse" id="col_{{ $pedido->id }}">
          <div class="panel-body">
          <!--Contenido del Accordion-->
             <div class="table-responsive">
                <address>
                  <strong>Cliente:  
                       @foreach ($pedido->ticket as $ticket)
                        <?php $tipo_pago= $ticket->pago;?>
                                                 
                        @foreach ($ticket->cliente as $cliente)
                            {{ utf8_encode($cliente->nombre) }}

                            <?php $cliente=utf8_encode($cliente->nombre); ?>

                        @endforeach

                        @foreach ($ticket->pagar as $pago)
                            <?php $pago=$pago->pago;
                             
                            ?>
                        @endforeach  

                         
                    @endforeach

                  </strong><br>
                    Dirección:
                          @foreach ($pedido->ticket as $ticket)
                        <?php $tipo_pago= $ticket->pago;?>
                                                 
                        @foreach ($ticket->cliente as $cliente)
                            {{ utf8_encode($cliente->direccion) }}

                            <?php $cliente=utf8_encode($cliente->nombre); ?>

                        @endforeach

                        @foreach ($ticket->pagar as $pago)
                            <?php $pago=$pago->pago;
                             
                            ?>
                        @endforeach  

                         
                    @endforeach
                      <br>


                    Ticket {{ $pedido->ticket_id }} <br>
                    <?php $modal_id=$pedido->ticket_id; 
                     $costo= $ticket->monto;

                    ?>

                      @foreach ($pedido->servicio as $servicio)
                          Servicio {{ $servicio->servicio }}
                          <?php $tipo= utf8_encode($servicio->servicio);
                                $id_servicio=$servicio->id;
                                $piezas = ($pedido->piezas > 0)? $pedido->piezas : 0;
                                $kilos = ($pedido->kilos > 0)? $pedido->kilos : 0;
                                $descripcion= utf8_encode($pedido->descripcion);
                                $p_id=$pedido->id;

                          ?>
                      @endforeach

                    
                      @foreach ($pedido->recoleccion as $recoleccion)
                          . <strong>{{ $recoleccion->ruta }}</strong><br>
                      @endforeach    
                      

                      @foreach($pedido->fechaEntrega as $fecha)
                          {{ date("d-m-Y",strtotime($fecha ->fecha)) }} a las
                          {{ $fecha->hora->hora }}

                      @endforeach

                </address>
            

                      @foreach ($pedido->statusOrden   as $statu)

                      @if($statu->id===2)
                         <p class="text-center">
                         
                            <a class="btn btn-primary" data-toggle="modal" href='#mdal_{{ $modal_id }}' onclick="servicioCompleto('{{ $modal_id }}')">Ver</a>
                             <div class="modal fade" id="mdal_{{ $modal_id }}">
                               <div class="modal-dialog">
                                 <div class="modal-content">
                                   <div class="modal-header">
                                     <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                     <h4 class="modal-title">Detalles de la Orden</h4>
                                   </div>
                                   <div class="modal-body">
                                   <form id='frm_{{ $modal_id }}'>

                                     <div class="table-responsive" id="tbl_{{ $modal_id }}">
                                      <input type="hidden" name="iptServCom" id="iptServCom{{ $modal_id }}" value="0">
                                      <div class="table-responsive">
                                        <table class="table table-hover">
                                          <thead>
                                            <tr>
                                              <th>Servicio</th>
                                              <th>Paquete Completo 
                                              @if($id_servicio==3)
                                              <input type="checkbox" id="iptSC{{ $modal_id }}" checked onclick="adicional('{{ $modal_id }}')"></th>                                                
                                              @else
                                                <input type="checkbox" id="iptSC{{ $modal_id }}" onclick="adicional('{{ $modal_id }}')"></th>
                                              @endif
                                            </tr>
                                          </thead>
                                          <tbody>
                                            <tr>
                                              <td colspan="2"><label id="lblTipoS{{ $modal_id }}">{{ $tipo }}</label></td>
                                            </tr>
                                          </tbody>
                                        </table>
                                      </div>
                                      <table class="table-bordered table-striped table-condensed">
                                        <thead>
                                          <tr>
                                            <th class="numeric">Costo</th>
                                            <th class=""><label id="lbl_Costo{{ $modal_id }}" class="hide"></label></th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <td data-title="Kilos">Kilos para lavar</td>
                                            <td>
                                             
                                            <input class="form-control" type="text" id="kilos{{ $modal_id}}"  name="kilos" onkeypress='return solonumeros(event);' onkeyup="costoReco(1,{{ $modal_id }})" placeholder="Introduce los kgs a lavar"></td>
                                          </tr>
                                          <tr>
                                           <td data-title="Piezas">Piezas para planchar</td>
                                           <td>

                                           <input class="form-control" type="text" id="piezas{{ $modal_id}}" name="piezas" onkeypress='return numeros(event);' onkeyup='costoReco(2,{{ $modal_id }})'placeholder="Introduce las piezas a planchar ">
                                           <input type="hidden" id="iptPK{{ $modal_id }}" name="iptPK">
                                           <input type="hidden" id="iptPP{{ $modal_id }}" name="iptPP">
                                           <input type="hidden" value="{{ $pedido->id }}" name="iptI">
                                           <input type="hidden" value="{{ $modal_id }}" name="iptT">
                                           <input type="hidden" value="0" id="iptTotal{{ $modal_id }}" name="iptTotal">


                                           </td>

                                          </tr> 
                                          
                                        </tbody>
                                      </table>
                                    </div>  
                                   </form>
                                   </div>
                                   <div class="modal-footer">
                                     <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
                                     <button type="button" class="btn btn-default" onclick="guarda({{ $modal_id }})">Guardar</button>
                                   </div>
                                 </div>
                               </div>
                             </div>
                                        
                            <textarea>{{ utf8_encode($pedido->descripcion) }}</textarea>
                          </div>
                          </p>
                      
                      @else
                      
                      {{ Form::open(['', '', 'role' => 'form','novalidate', 'id'=>'frm_'.$modal_id]) }}
                      <a class="btn btn-primary" data-toggle="modal" href='#mdalP{{ $p_id }}'>Datos de entrega</a>
                      <div class="modal fade" id="mdalP{{ $p_id }}">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                              <h4 class="modal-title">Falta Pago</h4>
                            </div>
                            <div class="modal-body">

                                <div class="table-responsive">
                                  <table class="table table-condensed table-striped">
                                      <thead>
                                          <tr>
                                              <th>Informacion</th>
                                          </tr>
                                      </thead>
                                      <tbody>
                                       @if($id_servicio==3)
                                          <tr>
                                            <td>Paquete Completo (Lavado y Planchado 1 docena)</td>
                                            <td><span class="glyphicon-class glyphicon glyphicon-ok"></span></td>
                                          </tr>
                                       @endif
                                           @if( $costo==180)
                                               <tr>
                                                  <td colspan="2"><p class="text-center">Paquete Completo </p></td>
                                                  
                                              </tr>
                                              <tr>
                                                  <td>Piezas lavadas y planchadas </td>
                                                  <td> 12 </td>
                                              </tr>
                                          @else
                                          <tr>
                                              <td>Piezas para planchado </td>
                                              <td>{{ $piezas}}</td>
                                          </tr>
                                          <tr>
                                              <td>Kilos para lavado</td>
                                              <td>{{ $kilos}}</td>
                                          </tr>
                                          @endif
                                              <td>Costo</td>
                                              <td>${{ number_format($costo,2) }}</td>
                                          </tr>
                                          <tr>
                                          <td>Tipo de Pago</td>
                                            <td>{{ $pago }}</td>
                                          </tr>  
                                          @if($tipo_pago>1)
                                          <tr>
                                            <td colspan="2"><h4>Usar terminal para el cobro</h4></td>
                                            
                                          </tr>  
                                          @endif  
                                          
                                      </tbody>
                                  </table>
                              </div>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-success" data-dismiss="modal" onclick="cambiaStatus({{ $modal_id}})">Cobrar al cliente</button>

                            </div>
                          </div>
                        </div>
                      </div>
                      {{ Form::hidden('iptT', $modal_id, '' ) }}
                      {{ Form::hidden('iptP', $p_id, '' ) }}
                      {{ Form::close() }}
                      @endif  
                          

                      @endforeach
                      
                      
                  </tr>

               

          </tbody>
        </table>
      </div>

          </div>
        </div>
      </div>
    @endforeach  
  </div>
    
@else
<p class="alert text-center">Sin registros</p>
@endif     

<div class="modal fade" id="mdalSuccess" style="display:none" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                
                <h4 class="modal-title">Cambio Realizado</h4>
            </div>
            <div class="modal-body">
                Se ha realizado correctamente los cambios
            </div>
            <div class="modal-footer">
                {{ HTML::link('recolector', 'Aceptar', array('class' => 'btn btn-info')); }}
                
            </div>
        </div>
    </div>
</div>    
</body>


</html>