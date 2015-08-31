@extends('sesion')

@section('titulo')
Ordens
@stop

@section('contenido')
  
  <?php
/*
1 Planchado
2 Lavado
3 Paquete
*/


    $ordenes = array();
    $ord1=array();

    $ord1=array("Ticket"=>'ZA001',"Detalles"=>'-',"Zona"=>'Del Valle',"Repartidor"=>'0X-Jorge',"Recoger"=>'24-Mar-14 14-30',"Entrega"=>'26-Mar-14 14:30',"Cliente"=>'Luz Saviñon',"Estatus"=>'Orden levantada',"Tipo"=>'3',"Kilos"=>'---','Ruta'=>'Ruta 1. Nápoles','Zona'=>'Zona B','Direccion'=>'4 Cerrada de Nápoles #1
','aniversario' =>'25 de Abril
');
    $ord2=array("Ticket"=>'ZA002',"Detalles"=>'-',"Zona"=>'Bajío',"Repartidor"=>'Asigna',"Recoger"=>'24-Mar-14 14-30',"Entrega"=>'26-Mar-14 14:30',"Cliente"=>'Niurka',"Estatus"=>'Orden levantada',"Tipo"=>'2',"Kilos"=>'12Pzs','Ruta'=>'','Zona'=>'Zona B','Direccion'=>'','aniversario' =>'25 de Abril');
    $ord3=array("Ticket"=>'ZA003',"Detalles"=>'-',"Zona"=>'Coxpa',"Repartidor"=>'0X-Jorge',"Recoger"=>'24-Mar-14 14-30',"Entrega"=>'26-Mar-14 14:30',"Cliente"=>'Niurka',"Estatus"=>'Orden levantada',"Tipo"=>'1',"Kilos"=>'---','Ruta'=>'','Zona'=>'Zona B','Direccion'=>'','aniversario' =>'26 de Abril');

    $ordenes=array(0=>$ord1,1=>$ord2,2=>$ord3);

?>
<br>
<div class="row">
    <div class="col-xs-12 morado" style="height:10px"></div>
    <div class="col-xs-12 menta btn-texto"><h2>Recepción de Ordenes</h2></div>
</div>
<br>
<div class="table-responsive">
    <table class="table table-hover table-bordered">
        <thead>
            <tr>
                <th>Ticket</th>
                <th>Zona</th>
                <th>Repartidor</th>
                <th>Recoger</th>
                <th>Entrega</th>
                <th>Cliente</th>
                <th>Estatus</th>
                <th>Tipo</th>
                <th>Kilos</th>

            </tr>
        </thead>
        <tbody>
        <?php 
        foreach ($ordenes as $orden) {
            $tipo="";
            switch ($orden['Tipo']) {
                case 1:
                    $tipo="Lavado";
                break;
                case 2:
                    $tipo="Planchado";
                    
                break;
                case 3:
                    $tipo="Lavado y Planchado";
                break;
                
                default:
                    # code...
                    break;
            }
$contenido_modal="
    <div class='panel panel-default'>
        <legend class='text-center panel-heading'>Tipo de Orden $tipo</legend>
            <div class='table-responsive'>
                <table class='table'>
                <tr>
                    <td>Cliente</td>    
                    <td>Luz Saviñon</td>
                </tr>
                <tr>
                    <td>Ruta</td>   
                    <td>$orden[Ruta]</td>
                </tr>
                <tr>
                    <td></td>   
                    <td>$orden[Recoger]</td>
                </tr>
                <tr>
                    <td></td>   
                    <td>$orden[Entrega]</td>
                </tr>
                <tr>
                    <td></td>   
                    <td>$orden[Cliente]</td>
                </tr>
                <tr>
                    <td></td>   
                    <td>$orden[Estatus]</td>
                </tr>
                <tr>
                    <td></td>   
                    <td>$tipo</td>
                </tr>
                <tr>
                    <td></td>   
                    <td>$orden[Kilos]</td>
                </tr>
                
            </table>
        </div>
    </div>";

$folio=$orden['Ticket'];
$boton ="<a class='btn btn-info btn-mini' data-toggle='modal' href='#mdal$folio'>$folio</a>";           
$modal="<div class='modal fade' id='mdal$folio' style='display:none'>
            <div class='modal-dialog'>
                <div class='modal-content'>
                    <div class='modal-header'>
                        <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
                        <h4 class='modal-title text-center'>Orden $orden[Ticket]</h4>
                    </div>
                    <div class='modal-body'>
                       $contenido_modal
                    </div>
                    <div class='modal-footer'>
                        <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
                        <button type='button' class='btn btn-primary'>Save changes</button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->";

        echo "<tr>
                <td>$boton $modal</td>
                <td>$orden[Zona]</td>
                <td>$orden[Repartidor]</td>
                <td>$orden[Recoger]</td>
                <td>$orden[Entrega]</td>
                <td>$orden[Cliente]</td>
                <td>$orden[Estatus]</td>
                <td>$tipo</td>
                <td>$orden[Kilos]</td>
                
            </tr>";
            }   
        ?>  
        </tbody>
    </table>
</div>


        
   
@stop    