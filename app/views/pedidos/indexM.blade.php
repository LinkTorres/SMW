<?php 
$recolector_nombre="";
$cliente="";
$piezas="";
$kilos="";
$descripcion="";
$costo="";
$p_id=""; 
$turno="" ?>
@extends('monitor')

@section('titulo')
Recepción de Ordenes
@stop

@section('contenido')
   
<div class="row">
    <center><h2>Status</h2></center>
    <div class="col-md-2 btn btn-danger">Orden Levantada</div>
    <div class="col-md-2 btn btn-default">En Ruta-Recoleccion</div>
    <div class="col-md-2 btn btn-primary">Recolectada</div>
    
    <div class="col-md-2 btn btn-info">En establecimiento</div>
    <div class="col-md-2 btn btn-warning">En ruta Entrega</div>
    <div class="col-md-2 btn btn-success">Pagada</div>
    
</div>

<br>

<br>

<div class="table-responsive">
    @if(count($pedidos)>0)
    <table class="table table-hover table-bordered">
        <thead>
            <tr>
                <th>Ticket</th>
                <th>Servicio</th>
                <th>Cliente</th>
                <th>Recoger</th>
                <th>Entrega</th>
                <th>Estatus</th>
                

            </tr>
        </thead>
        <tbody>

        @foreach ($pedidos->reverse() as $pedido)
            {{ Log::info($pedido) }}
            @if ($pedido->estatus_id===1)
                <tr class="danger">
            @elseif ($pedido->estatus_id===2)
                <tr class="default">
            @elseif ($pedido->estatus_id===3)
                <tr class="primary">
            @elseif ($pedido->estatus_id===4)
                <tr class="info">
            @elseif ($pedido->estatus_id===5)
                <tr class="warning">
            @elseif ($pedido->estatus_id===6)
                <tr class="success">
            @else
                <tr>
            @endif

            
                    <?php 
                        $piezas = ($pedido->piezas > 0)? $pedido->piezas : 0;
                        $kilos = ($pedido->kilos > 0)? $pedido->kilos : 0;
                        $descripcion= utf8_encode($pedido->descripcion);
                        $p_id=$pedido->id;
                       

                    ?>   
                <td>
                {{ $pedido->ticket_id }}
                <?php $modal_id=$pedido->ticket_id; ?>
                </td>

                <td>
                    @foreach ($pedido->servicio as $servicio)
                     {{ $servicio->servicio }}
                    @endforeach
                </td>
                    
                <td>
                    @foreach ($pedido->ticket as $ticket)
                        @foreach ($ticket->cliente as $cliente)
                            {{ utf8_encode($cliente->nombre) }}
                            <?php $cliente=utf8_encode($cliente->nombre); 
                                 $costo= $ticket->monto;
                            ?>

                        @endforeach    
                    @endforeach
                </td>
                
                <td>
                    @foreach ($pedido->recoleccion as $recoleccion)
                        {{ $recoleccion->ruta }}<br>
                    @endforeach    

                    @foreach ($pedido->recolector as $recolector)
                        <?php $recolector_nombre = $recolector->nombre ?>
                    @endforeach    

                    @foreach($pedido->fechaRecoleccion as $fecha)
                        {{ date("d-M-Y",strtotime($fecha ->fecha)) }} a las
                        {{ $fecha->hora->hora }}
                        {{ Log::info($fecha->hora->id) }}
                         <?php 
                        $turno = (int) $fecha->hora->id;
                       

                    ?> 

                    @endforeach
                    <br>
                     @if($pedido->estatus_id===1)
                        <a class="btn btn-danger" data-toggle="modal" href='#modal{{ $modal_id }}'>Asignar Recolector</a>
                        {{ Form::open(['', '', 'role' => 'form','novalidate', 'id'=>'frm_'.$modal_id]) }}
                        <div class="modal fade" id="modal{{ $modal_id }}">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        <h4 class="modal-title">Datos de la Orden</h4>
                                    </div>
                                    <div class="modal-body">
                                        Cliente {{ $cliente }} <br>
                                       
                                        <div class="form-group">
                                            {{  Form::label('recolector', 'Recolector') }}
                                            {{ Log::info($turno) }}
                                            @if ($pedido->id_colonia_r < 4)
                                                   @if ($turno <11)
                                                    
                                                        {{ Form::select('recolector',$recolectores,1,['class'=> 'input-sm','data-val' => $modal_id,' disabled'],1) }}
                                                    
                                                    @else
                                                    
                                                        {{ Form::select('recolector',$recolectores,2,['class'=> 'input-sm', 'data-val' => $modal_id,' disabled'],1) }}
                                                    
                                                    
                                                    @endif

                                                
                                            @else
                                                 
                                                    @if($turno <11)
                                                    
                                                       {{ Form::select('recolector',$recolectores,3,['class'=> 'input-sm','data-val' => $modal_id, ' disabled'],1) }}
                                                    
                                                    
                                                    @else
                                                    
                                                        {{ Form::select('recolector',$recolectores,4,['class'=> 'input-sm','data-val' => $modal_id, ' disabled'],1) }}
                                                    
                                                    @endif

                                                
                                            @endif                 
                                            
                                           <br>
                                        <a href="#" onclick="habilitarOtro({{ $modal_id }});return false;">Otro</a>
                                            <script type="text/javascript">
                                                function  habilitarOtro(id) {
                                                    console.log("Holi1");
                                                    $('[data-val='+id+']').prop( "disabled", false );
                                                    console.log("Holi2");
                                                    
                                                        
                                                }
                                            </script>
                                        </div>  
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                        <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="cambiaStatus({{ $modal_id}},2)">Asignar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{ Form::hidden('iptT', $modal_id, '' ) }}
                        {{ Form::hidden('iptP', $p_id, '' ) }}
                        {{ Form::close() }}
                    @endif
                </td>

                <td>
                    @foreach ($pedido->entrega as $entrega)
                        {{ $entrega->ruta }}<br>
                    @endforeach        
                    
                    @foreach($pedido->fechaEntrega as $fecha)
                        {{ date("d-M-Y",strtotime($fecha ->fecha)) }} a las
                        {{ $fecha->hora->hora }}

                    @endforeach
                    
                    @foreach ($pedido->entregador as $recolector)
                        {{ $recolector->nombre }}<br>
                    @endforeach       
                </td>

                <td>
                    @foreach ($pedido->statusOrden   as $statu)
                       {{ $statu->status}}

                        @if($statu->id===3)
                        {{ Form::open(['', '', 'role' => 'form','novalidate', 'id'=>'frme_'.$modal_id]) }}

                           <p class="text-center">
                            <a class="btn btn-primary" data-toggle="modal" href='#modal{{ $modal_id }}'>Recibir en Establecimiento</a>
                            </p>
                                <div class="modal fade" id="modal{{ $modal_id }}">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                <h4 class="modal-title">Datos de la Orden</h4>
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
                                                            <tr>
                                                                <td>Cliente </td>
                                                                <td>{{ $cliente }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Recolector </td>
                                                                <td>{{ $recolector_nombre}}</td>
                                                            </tr>
                                                            @if( $costo==180)
                                                                 <tr>
                                                                    <td colspan="2"><p class="text-center">Paquete Completo </p></td>
                                                                    
                                                                </tr>
                                                                <tr>
                                                                    <td>Piezas para planchado </td>
                                                                    <td> 12 </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Piezas para lavado</td>
                                                                    <td>12</td>
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
                                                            <tr>

                                                                <td>Costo</td>
                                                                <td>{{ number_format($costo,2)}}</td>
                                                            </tr>

                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                                <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="cambiaStatus({{ $modal_id}},4)">Orden Correcta</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            {{ Form::hidden('iptT', $modal_id, '' ) }}
                            {{ Form::hidden('iptP', $p_id, '' ) }}

                            {{ Form::close() }}

                        @endif

                        @if($pedido->estatus_id===4)
                        <a class="btn btn-info" data-toggle="modal" href='#modal{{ $modal_id }}'>Asignar Recolector</a>
                        {{ Form::open(['', '', 'role' => 'form','novalidate', 'id'=>'frm_e'.$modal_id]) }}
                        <div class="modal fade" id="modal{{ $modal_id }}">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        <h4 class="modal-title">Datos de la Orden</h4>
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
                                                            <tr>
                                                                <td>Cliente </td>
                                                                <td>{{ $cliente }}</td>
                                                            </tr>
                                                            @if( $costo==180)
                                                                 <tr>
                                                                    <td colspan="2"><p class="text-center">Paquete Completo </p></td>
                                                                    
                                                                </tr>
                                                                <tr>
                                                                    <td>Piezas para planchado </td>
                                                                    <td> 12 </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Piezas para lavado</td>
                                                                    <td>12</td>
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
                                                            <tr>
                                                                <td>Costo</td>
                                                                <td>{{ number_format($costo,2)}}</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                       
                                        <div class="form-group">
                                            {{  Form::label('recolector', 'Recolector') }}
                                            {{ Form::select('recolector',$recolectores,null,['class'=> 'input-sm','data-val' => $modal_id, 'disabled'],1) }}
                                            <a href="#" onclick="habilitarOtro({{ $modal_id }});return false;">Otro</a>
                                            <script type="text/javascript">
                                                function  habilitarOtro(id) {
                                                    console.log("Holi1");
                                                    $('[data-val='+id+']').prop( "disabled", false );
                                                    console.log("Holi2");
                                                    
                                                        
                                                }
                                            </script>        
                                            
                                        </div>  
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                        <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="cambiaStatus({{ $modal_id}},5)">Asignar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                            {{ Form::hidden('iptT', $modal_id, '' ) }}
                            {{ Form::hidden('iptP', $p_id, '' ) }}

                        {{ Form::close() }}
                    @endif

                    @endforeach
                </td>
                
            </tr>

        @endforeach
       </tbody>
    </table>
    @else
    <p class="alert text-center">Sin registros</p>
    @endif
</div>

<div class="modal fade" id="mdalSuccessEntrega" style="display:none" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                
                <h4 class="modal-title">Entrega</h4>
            </div>
            <div class="modal-body">
                Se ha asignado al recolector para la entrega de la orden.
            </div>
            <div class="modal-footer">
                {{ HTML::link('pedidos', 'Aceptar', array('class' => 'btn btn-success')); }}
                
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="mdalSuccessEstablecimiento" style="display:none" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                
                <h4 class="modal-title">Orden Recibida</h4>
            </div>
            <div class="modal-body">
                La orden ha sido recibida en el establecimiento.
            </div>
            <div class="modal-footer">
                {{ HTML::link('pedidos', 'Aceptar', array('class' => 'btn btn-success')); }}
                
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="mdalSuccessAsignacion" style="display:none" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                
                <h4 class="modal-title">Asignación Recolector</h4>
            </div>
            <div class="modal-body">
                Se ha efectuado la asignación del recolector.
            </div>
            <div class="modal-footer">
                {{ HTML::link('pedidos', 'Aceptar', array('class' => 'btn btn-success')); }}
                
            </div>
        </div>
    </div>
</div>


@stop        
