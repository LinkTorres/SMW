<!DOCTYPE html>
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
     {{ HTML::style('asset/css/sesion.css') }}
     {{ HTML::style('asset/css/jquery.dataTables.min.css') }}
     




    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    {{ HTML::script('asset/js/jquery.min.js') }}
    {{ HTML::script('asset/js/bootstrap.min.js') }}


    {{ HTML::script('asset/js/app/sesion.js') }}
    
   

    <script>
  function DisableSunday(date) {
 
  var day = date.getDay();
 // If day == 1 then it is MOnday
 if (day == 0) {
 
 return [false] ; 
 
 } else { 
 
 return [true] ;
 }

   $.datepicker.regional['es'] = {
     closeText: 'Cerrar',
     prevText: '<Ant',
     nextText: 'Sig>',
     currentText: 'Hoy',
     monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
     monthNamesShort: ['Ene','Feb','Mar','Abr', 'May','Jun','Jul','Ago','Sep', 'Oct','Nov','Dic'],
     dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
     dayNamesShort: ['Dom','Lun','Mar','Mié','Juv','Vie','Sáb'],
     dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','Sá'],
     weekHeader: 'Sm',
     dateFormat: 'dd/mm/yy',
     beforeShowDay: DisableSunday,
     firstDay: 1,
     isRTL: false,
     showMonthAfterYear: false,
     yearSuffix: ''
   };
   $.datepicker.setDefaults($.datepicker.regional['es']);


</script> 




  <style>
  .table > tbody > tr > td, .table > tbody > tr > th, .table > tfoot > tr > td, .table > tfoot > tr > th, .table > thead > tr > td, .table > thead > tr > th{
line-height:0
}
  </style>
    
  </head>

  <body>

  <nav class="navbar menta navbar-fixed-top">
    <div class="container">  
      <div class="navbar-right">
        <img src="asset/img/logo.png" alt="MintWash" class="img-responsive ">
      </div> 

    </div>
  </nav>
<br>
<br>
  
  <div class="morado" style="height:30px"></div>
  <div class="menta btn-texto" style="height: 30px; margin-top: -20px;"><h2 class="text-center"></h2></div>
  <br>

<div class="row" style="margin-left: 84px; margin-right: 84px;">
    <div class="col-md-6 column ui-sortable">
      <strong>Nombre del Cliente {{ $info['cliente']}}</strong><br>
      Dirección {{$info['direccion']}}<br>
      Correo    {{$info['correo'] }}<br>
      <abbr title="Phone">Tel:</abbr> {{ $info['telefono'] }}
      </address>
    </div>
    
    <div class="col-md-6 column ui-sortable">
      <p class="text-right">mintwash.com.mx</p>
      <div class="table-responsive">
        <table class="table table-hover bordered">
          <tbody>
            <tr>
              <td>Ticket</td>
              <td>{{ $info['ticket']}}</td>
            </tr>
            <tr>
              <td>Creado</td>
              <td>{{ $info['creado']}}</td>
            </tr>
            <tr>
              <td>Fecha de Recolección</td>
              <td>{{ str_replace("/", "-", $info['recoleccion']) }} a las {{ $info['hora_recoleccion']}}</td>
            </tr>
            <tr>
              <td>Fecha de Entrega</td>
              <td>{{ str_replace("/", "-", date('d-m-Y',strtotime($info['fecha_entrega']))) }} a las {{ $info['hora_entrega']}}</td>
            </tr>


          </tbody>
        </table>
      </div>
    </div>
</div>
<div style="margin-left: 84px; margin-right: 84px;">
  <div class="panel panel-default">
    <!-- Default panel contents -->
    <div class="panel-heading">Datos</div>
      <div class="panel-body">
  
      <!-- Table -->
      <table class="table">
        <tbody>
          <tr>
          <td>Recolección: {{ $info['direccion']}}</td>
          <!--
            <td>Costo Aproximado ${{ number_format($info['costo'],2)}}</td>-->
            <td>Colonia {{ $info['colonia']}}   </td>
          </tr>
          <tr>
            <td colspan="2"><b>Detalles</b></td>
          </tr>  
          <tr>
            <td>Servicio: {{ $info['servicio']}}</td>
            <td></td>
          </tr>

          <tr>
            <td> Costo Aproximado {{ $info['descripcion']}}</td>
            <td><!--<label class="btn btn-default" data-toggle="tooltip" data-placement="top" title="{{ $info['descripcion']}}"></label>--></td>
            
          </tr>
          <tr>
            <td>Forma de Pago</td>
            <td>{{ $info['pago']}}</td>
          </tr>
        </tbody>
      </table>            
            
    </div>
  </div>
</div>

<div class="text-center">
  <a class="btn btn-danger" data-toggle="modal" href='#mdalcancel'>Cancelar</a>
<a class="btn btn-warning" data-toggle="modal" href='#mdalEd'>Editar Orden</a>
<a class="btn btn-success" data-toggle="modal" href='#mdalFE'>Finalizar Orden</a>
<div class="modal fade" id="mdalFE" style="display:none">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Orden Completa</h4>
      </div>
      <div class="modal-body">
        Tu orden esta completa, en unos momentos recibiras un correo con la información.
      </div>
      <div class="modal-footer">
       
         {{ HTML::link('principal', 'Aceptar', array('class' => 'btn btn-primary')); }}
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="mdalcancel" style="display:none">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Orden Cancelada</h4>
      </div>
      <div class="modal-body">
        Tu orden ha sido cancelada.
      </div>
      <div class="modal-footer">
       
         {{ HTML::link('principal', 'Aceptar', array('class' => 'btn btn-primary')); }}
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="mdalEd" style="display:none">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Modificar datos de entrega</h4>
      </div>
      <div class="modal-body">
        
         <div class="control-group">
                            {{  Form::label('fecha_recoleccion', 'Fecha de Recolección') }}
                              {{  Form::text('fecha_recoleccion',null, ['class' => 'form-control','placeholder' => 'Fecha de Recolección', 'data-date-format' => 'dd-mm-yyyy'])}}
                              {{ $errors->first('fecha_recoleccion','<p class="message_error">:message</p>') }}
                              {{ Form::hidden('iptFR', NULL, array('id' => 'iptFR') ) }}
                        </div>

                        <div class="control-group">
                            {{  Form::label('hora_recoleccion', 'Hora de Recolección') }}
                            {{ Form::select('hora_recoleccion',array(),null,['class'=> 'form-control'],1) }}
                        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary">Guardar Cambios</button>
      </div>
    </div>
  </div>
</div>
  
</div>


<!--Footer-->
<footer class="footer">
  <div class="container">
   <div class="morado">
      <img src="asset/img/pie.png" alt="MintWash" class="img-responsive">
  </div>
  </div>
</footer>


<div class="modal fade" id="mdalCargando"  data-keyboard="false" data-backdrop="static">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Solicitud</h4>
      </div>
      <div class="modal-body">
         <img src="asset/img/cargando.gif"> Espere mientras se Carga la Información
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
<script>


$(function () {
  $('[data-toggle="tooltip"]').tooltip()
});

   $('#fecha_entrega').datepicker({
      changeYear: false,
      minDate: "0D",
      maxDate: "1M 10D",
      onSelect: function(selectedDate) {
        console.log('fecha ' + selectedDate);
         $('#hora_entrega').html('');
        formato = selectedDate.split("/");
        fecha = (formato[2].length>3)? formato[2] +"-" + formato[1] +"-" +formato[0] : formato[2] +"-" + formato[0] +"-"+ formato[1];
        $('#iptFR').val(fecha);
        console.log("Valor: "+ fecha);
        onfocus="#fecha_recoleccion";
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

       }
    });
  
  });

</script>
    
  @yield('scripts')

  </body>
</html>
