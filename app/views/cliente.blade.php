@extends('sesion')

@section('titulo')
  Ordenes
@stop

@section('contenido')

<?php
    session_start();
    $cli1= array('id'=>'1', 'Nombre'=>'Carmen Salinas', 'Direccion'=> 'Calle Colonia CP', 'Telefono' =>'55-15145-7845','correo'=>'carmen@salinas.com.mx');
    $cli2= array('id'=>'2', 'Nombre'=>'Juanita Cortes', 'Direccion'=> 'Calle Colonia CP', 'Telefono' =>'55-1125-7845','correo'=>'jmen@sasxy.com.mx');
    $cli3= array('id'=>'3', 'Nombre'=>'Lolita Ayala', 'Direccion'=> 'Calle Colonia CP', 'Telefono' =>'55-125-7845','correo'=>'lolita@slins.com.mx');

    $clientes =  array(0=>$cli1,1=>$cli2,2=>$cli3);
    $lavado = array('id' => 1, 'servicio'=>'Lavado', 'costo'=>'20');
    $planchado = array('id' => 2, 'servicio'=>'Planchado', 'costo'=>'20');
    $lavado_planchado = array('id' => 3, 'servicio'=>'Lavado y Planchado', 'costo'=>'110');
    $servicios= array(0=>$lavado,1=>$planchado,2=>$lavado_planchado);



?>
<style type="text/css">
/*
.panel-default > .panel-heading{
    background-image: none;
    background-color: none;
    }   
*/
.clsDatePicker {
  z-index: 100000;
}

.datepicker{
  z-index:1151;
}

</style>

<br>

<div class="row">
    <div class="col-xs-12 morado" style="height:10px"></div>
    <div class="col-xs-12 menta btn-texto"><h2>Levantar Orden</h2></div>
 
</div> 
<br>
<div class="row">
    <div class="col-xs-5">
    </div>

    <div class="col-xs-5">
    </div>

    <div class="col-xs-2">
        <button class="btn btn-texto list-group-item btn-block menta" type="button"  data-toggle="modal" href='#mdalNuevoCliente'>
            
          <span aria-hidden="true" class="glyphicon glyphicon-user"></span>
          <span class="glyphicon-class">Agregar Cliente</span>
        
        </button>
    </div>
</div>

<br>

    <div aria-multiselectable="true" role="tablist" id="acc_cliente" class="panel-group">

      <?php

      echo "<div class='table-responsive'>
            <table class='table table-hover table-table-bordered table-condensed' id='tbl'>
                <thead>
                    <tr>
                        <th>Cliente:</th>
                        <th>Opc</th>
                        <th>Telefono</th>
                        <th>Dirección:</th>
                        <th>Correo</th>
                    </tr>   
                </thead>
                <tbody>";

      foreach ($clientes  as $cliente) {
        
        $pos=$cliente['id'];
        $cliente_id="div_".$pos;
        $levantar="<a class='btn btn-primary' data-toggle='modal' href='#modal-id' onclick='pedido_cliente($pos)'>Levantar Servicio</a>";
        echo   "<tr id='tr_$pos'>
                    <td><label id='lbl_nombre_$pos'>$cliente[Nombre]</label></td>
                    <td>$levantar</td>
                    <td>$cliente[Telefono]</td>
                    <td>$cliente[Direccion]</td>
                    <td>$cliente[correo]</td>
                </tr>";
      
      }
        echo "</tbody>
            </table>
        </div>"
      ?>
      

      
    </div>

<script>
$('#tbl').dataTable({
    "language": {
            "url": "asset/js/sp.lang"
            },
    "bPaginate": false,
    "bLengthChange": false,
    "bFilter": true,
    "bInfo": false,
    "bAutoWidth": false 
});


</script>

<!--Levantar orden -->

{{ Form::open(['route'=>'alta', 'method'=>'POST', 'role' => 'form','novalidate']) }}
<div class="modal fade" id="modal-id" style="display:none">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Levantar Servicio</h4>
            </div>
            <div class="modal-body">
            <!--formulario de Levantar Orden -->    
                <form  class="form-horizontal panel panel-default" role="form">
                <legend class="text-center panel-heading">Datos del Servicio</legend>
                 <div class="form-group">
                    <label for="iptNombre" class="col-sm-2 control-label">Tipo de Servicio</label>
                    <div class="col-sm-10">
                      <select class="input-sm" onclick="tipoServicio()" id="sctServicio">
                        <option>Seleccione el Servicio</option>
                        <?php 
                            $ref="";//"aria-controls='accordion' aria-expanded='true' data-target='#accordion' data-toggle='collapse'";
                            foreach ($servicios as $servicio) {
                                echo "<option value='$servicio[id]' $ref >$servicio[servicio]</option>";
                            }
                        ?>
                      </select>
                    </div>
                  </div>
                <!--Accordion datos del Cliente -->
                 <div aria-multiselectable="false" role="tablist" id="accordion" class="panel-group">
                  <div class="panel panel-default">
                    <div id="headingOne" role="tab" class="panel-heading">
                      <h4 class="panel-title" id="-collapsible-group-item-#1-">
                        <a aria-controls="collapseOne" aria-expanded="false" href="#collapseOne" data-parent="#accordion" data-toggle="collapse" class="collapsed">
                          Cliente: <span id='spnNombre'></span>
                        </a>
                      <a href="#-collapsible-group-item-#1-" class="anchorjs-link"><span class="anchorjs-icon"></span></a></h4>
                    </div>
                    <div aria-labelledby="headingOne" role="tabpanel" class="panel-collapse collapse" id="collapseOne" aria-expanded="false" style="height: 0px;">
                      <div class="panel-body">
                      <!--Datos del Cliente-->
                       <div class="form-group">
                        <label for="iptZona" class="col-sm-3 control-label">Zona</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="iptZona" name="iptZona" placeholder="Zona" value="Zona B">
                        </div>
                      </div>
                       
                      <div class="form-group">
                        <label for="iptDireccion" class="col-sm-3 control-label">Dirección</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="iptDireccion" name="iptDireccion" placeholder="Dirección" value="4 Cerrada de Nápoles #1">
                        </div>
                      </div>
                       <div class="form-group">
                        <label for="iptTel" class="col-sm-3 control-label">Teléfono</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="iptTel" name="iptTel" placeholder="Teléfono" value="55-4521-8956">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="correo" class="col-sm-3 control-label">Correo</label>
                        <div class="col-sm-9">
                          <input type="email" class="form-control" id="correo" name="correo" placeholder="Correo" value="correo@gmail.com">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="correo" class="col-sm-3 control-label">Cumpleaños</label>
                        <div class="col-sm-9">
                            <div data-date-viewmode="years" data-date-format="dd-mm-yyyy" data-date="12-02-2012" id="dpYears" class="input-append date">
                                <input type="text" readonly="" value="12-02-2012" size="16" class="span2">
                                <span class="add-on"><i class="icon-calendar"></i></span>
                            </div>
                        </div>
                      </div>                  
                    <!--Fin de datos del Cliente--> 
                      </div>
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div id="headingTwo" role="tab" class="panel-heading">
                      <h4 class="panel-title" id="-collapsible-group-item-#2-">
                        <a aria-controls="collapseTwo" aria-expanded="false" href="#collapseTwo" data-parent="#accordion" data-toggle="collapse" class="collapsed">
                          Datos entrega Recepción/Entrega
                        </a>
                      <a href="#-collapsible-group-item-#2-" class="anchorjs-link"><span class="anchorjs-icon"></span></a></h4>
                    </div>
                    <div aria-labelledby="headingTwo" role="tabpanel" class="panel-collapse collapse" id="collapseTwo" aria-expanded="false">
                      <div class="panel-body">
                       <!--Contenido-->
                        <legend>Recolección</legend>
                        <div class="form-group">
                            <label for="iptRuta" class="col-sm-3 control-label">Ruta</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" id="iptRuta" name="iptRuta" placeholder="Ruta" value="Ruta 1. Nápoles">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="correo" class="col-sm-3 control-label">Recolección</label>
                            <div class="col-sm-9">
                                <div data-date-viewmode="years" data-date-format="dd-mm-yyyy" data-date="12-02-2012" id="" class="input-append date">
                                    <input type="text" readonly="" value="23-04-2015" size="16" class="span2">
                                    <span class="add-on"><i class="icon-calendar"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="iptHoraR" class="col-sm-3 control-label">Hora</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" id="iptHoraR" name="iptHoraR" placeholder="Hora" value="14:30">
                            </div>
                        </div>
                        <hr>
                        <legend>Entrega</legend>
                        <div class="form-group">
                            <label for="iptRuta" class="col-sm-3 control-label">Ruta</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" id="iptRuta" name="iptRuta" placeholder="Ruta" value="Ruta 1. Nápoles">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="correo" class="col-sm-3 control-label">Entrega de Orden</label>
                            <div class="col-sm-9">
                                <div data-date-viewmode="years" data-date-format="dd-mm-yyyy" data-date="12-02-2012" id="" class="input-append date">
                                    <input type="text" readonly="" value="27-04-2015" size="16" class="span2">
                                    <span class="add-on"><i class="icon-calendar"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="iptHoraE" class="col-sm-3 control-label">Hora</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" id="iptHoraE" name="iptHoraE" placeholder="Hora" value="14:30">
                            </div>
                        </div>
                       <!--Fin Contendo-->
                      </div>
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div id="headingThree" role="tab" class="panel-heading">
                      <h4 class="panel-title" id="-collapsible-group-item-#3-">
                        <a aria-controls="collapseThree" aria-expanded="false" href="#collapseThree" data-parent="#accordion" data-toggle="collapse" class="collapsed">
                          Detalles del Servicio
                        </a>
                      <a href="#-collapsible-group-item-#3-" class="anchorjs-link"><span class="anchorjs-icon"></span></a></h4>
                    </div>
                    <div aria-labelledby="headingThree" role="tabpanel" class="panel-collapse collapse" id="collapseThree" aria-expanded="false">
                      <div class="panel-body">
                        <!--Datos del Servicio-->
                        <!-- Lavado-->
                        <legend>Servicio</legend>
                        <div id="divLavado" class="hide">
                        <legend>Planchado</legend>
                            <div class="form-group">
                                <label for="" class="col-sm-3 control-label">Kg</label>
                                <div class="col-sm-9">
                                  <input type="text" class="form-control" id="" name="" placeholder="Hora" value="4kg">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-sm-3 control-label">Costo de Servicio</label>
                                <div class="col-sm-9">
                                  <input type="text" class="form-control" id="" name="" placeholder="Hora" value="$150.00">
                                </div>
                            </div>
                            

                        </div>
                        <!-- Fin Lavado-->
                        <!-- Planchado-->
                        <div id="divPlanchado" class="hide">
                            <legend>Planchado</legend>
                            <div class="form-group">
                                <label for="" class="col-sm-3 control-label">Piezas</label>
                                <div class="col-sm-9">
                                  <input type="text" class="form-control" id="" name="" placeholder="Hora" value="12">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-sm-3 control-label">Costo de Servicio</label>
                                <div class="col-sm-9">
                                  <input type="text" class="form-control" id="" name="" placeholder="Hora" value="$110.00">
                                </div>
                            </div>
                            
                        </div>
                        <!--Fin Planchado-->
                        <!-- Lavado y Planchado-->
                        <div id="divLavadoPlanchado" class="hide">
                            <legend>Lavado y Planchado</legend>
                            <div class="form-group">
                                <label for="" class="col-sm-3 control-label">Kg</label>
                                <div class="col-sm-9">
                                  <input type="text" class="form-control" id="" name="" placeholder="Hora" value="4kg">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-sm-3 control-label">Piezas</label>
                                <div class="col-sm-9">
                                  <input type="text" class="form-control" id="" name="" placeholder="Hora" value="12">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-sm-3 control-label">Costo de Servicio</label>
                                <div class="col-sm-9">
                                  <input type="text" class="form-control" id="" name="" placeholder="Hora" value="$80.00">
                                </div>
                            </div>
                        </div>
                        <!--Fin Lavado y Planchado-->
                        <!--Fin Datos del Servicio-->
                      </div>
                    </div>
                  </div>
                  <br>
                  <div class="alert alert-warning">
                      <p class="text-center"><strong>Estatus </strong> La orden en Proceso de Levantamiento ...</p>
                  </div>
                </div>
                  
                </form>
            <!--formulario de registro -->  

            </div>
            <div class="modal-footer">
                <div class="row">
                    <div class="col-xs-4">
                    </div>

                    <div class="col-xs-4">
                        <button class="btn btn-texto list-group-item btn-block menta" type="button" data-dismiss="modal" onclick="mostrarModal('#mdalSuccess')">
                        <span aria-hidden="true" class="glyphicon glyphicon-floppy-open"></span>
                          <span class="glyphicon-class">Guardar Cambios</span>
                        
                        </button>

                    </div>

                    <div class="col-xs-4">
                    </div>
                </div>
                

            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!--Levantar orden -->

{{ Form::close() }}
<!--Cliente -->
<div class="modal fade" id="mdalNuevoCliente" style="display:none">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header morado btn-texto">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title text-center">Agregar Cliente</h4>
            </div>
            <div class="modal-body">
                <form  class="" role="form">
                <legend class="text-center">Datos del Cliente</legend>
                 <div class="form-group">
                    <label for="iptNombre" class="col-sm-2 control-label">Nombre</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="iptNombre" name="iptNombre" placeholder="Nombre">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="iptDireccion" class="col-sm-2 control-label">Dirección</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="iptDireccion" name="iptDireccion" placeholder="Dirección">
                    </div>
                  </div>
                   <div class="form-group">
                    <label for="iptTel" class="col-sm-2 control-label">Teléfono</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="iptTel" name="iptTel" placeholder="Teléfono">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="correo" class="col-sm-2 control-label">Correo</label>
                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="correo" name="correo" placeholder="Correo">
                    </div>
                  </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Guardar</button>
                
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->



<div class="modal fade" id="mdalSuccess" style="display:none">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header menta">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Operación Exitosa</h4>
            </div>
            <div class="modal-body">
                <p class="text-center"><h3>Datos Guardados Correctamente</h3></p>
            </div>
            <div class="modal-footer">
                <div class="row">
                    <div class="col-xs-4">
                    </div>

                    <div class="col-xs-4">
                        <button class="btn btn-texto list-group-item btn-block menta" type="button" data-dismiss="modal" onclick="remover()">
                        <span aria-hidden="true" class="glyphicon glyphicon-floppy-saved"></span>
                          <span class="glyphicon-class">Guardado</span>
                        
                        </button>

                    </div>

                    <div class="col-xs-4">
                    <input type="hidden" id="iptPos">
                    </div>
                </div>
                
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<script>


</script>

@stop