<?php 
$recolector_nombre="";
$cliente="";
$piezas="";
$kilos="";
$descripcion="";
$costo="";
$p_id=""; ?>
@extends('monitor')

@section('titulo')
Recepción de Ordenes
@stop

@section('contenido')
   
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
            <tr>
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

                    @endforeach
                    <br>
                     @if($pedido->estatus_id===1)
                        <a class="btn btn-primary" data-toggle="modal" href='#modal{{ $modal_id }}'>Asignar Recolector</a>
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
                                            {{ Form::select('recolector',$recolectores,null,['class'=> 'input-sm'],1) }}

                                            
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
                            <a class="btn btn-success" data-toggle="modal" href='#modal{{ $modal_id }}'>Ticket {{ $modal_id }} recolectada </a>
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
                                                <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="cambiaStatus({{ $modal_id}},4)">Aceptar Orden</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            {{ Form::hidden('iptT', $modal_id, '' ) }}
                            {{ Form::hidden('iptP', $p_id, '' ) }}

                            {{ Form::close() }}

                        @endif

                        @if($pedido->estatus_id===4)
                        <a class="btn btn-info" data-toggle="modal" href='#modal{{ $modal_id }}'>Asignar a Repartido</a>
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
                                            {{ Form::select('recolector',$recolectores,null,['class'=> 'input-sm'],1) }}

                                            
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


<div class="modal fade" id="mdalSuccess" style="display:none" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                
                <h4 class="modal-title">Cambio Realizado</h4>
            </div>
            <div class="modal-body">
                El cambio se ha realizado correctamente.
            </div>
            <div class="modal-footer">
                {{ HTML::link('pedidos', 'Aceptar', array('class' => 'btn btn-success')); }}
                
            </div>
        </div>
    </div>
</div>


@stop        
