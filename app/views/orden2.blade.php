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
     {{ HTML::style('web/css/main.css') }}
     {{ HTML::style('web/css/green.css') }}


     {{ HTML::style('asset/css/jquery-ui.min.css') }}
     {{ HTML::style('asset/css/jquery-ui.structure.css') }}
     {{ HTML::style('https://gitcdn.github.io/bootstrap-toggle/2.2.0/css/bootstrap-toggle.min.css') }}

<style>
  .toggle.ios, .toggle-on.ios, .toggle-off.ios { border-radius: 20px; }
  .toggle.ios .toggle-handle { border-radius: 20px; }
</style>




    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    {{ HTML::script('asset/js/jquery.min.js') }}
    {{ HTML::script('asset/js/bootstrap.min.js') }}
    {{ HTML::script('asset/js/jquery-ui.min.js') }}
    {{ HTML::script('asset/js/app/orden.js') }}
    {{ HTML::script('https://gitcdn.github.io/bootstrap-toggle/2.2.0/js/bootstrap-toggle.min.js') }}



   <script>

   function DisableSunday(date) {

  var day = date.getDay();
 // If day == 1 then it is MOnday
 if (day == 0) {

 return [false] ;

 } else {

 return [true] ;
 }

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

     dateFormat: 'dd/mm/yy',


   };
   $.datepicker.setDefaults($.datepicker.regional['es']);



</script>




  </head>

  <body>

 <!-- Nav starts -->
     <div class="navbar navbar-default navbar-static-top" role="navigation">
      <div class="container">
        <div class="navbar-header">

          <a href="http://mintwash.com.mx"><img src="http://mintwash.com.mx/img/logo.png" width="230px; " style="vertical-align:middle;"></a>
        </div>
        <div class="navbar-collapse collapse">
        </div><!--/.nav-collapse -->
      </div>
    </div><!-- Nav ends -->

    <!-- about begins -->
    <section id="page-about" class="page-about">
      <div class="container">
                <header class="section-header">
                    <h2 class="section-title">Realiza tu Ordennnnnn</h2>
                    <div class="spacer"></div>
                    <p class="section-subtitle">Tu di cuando y donde, y nosotros lo hacemos realidad</p>
                </header>


      </div>

    </section><!-- about ends -->
    <section id="page-services2" class="highlight">


      <div class="container">

                <DIV class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <header class="section-header">
                            <h2 class="section-title">Orden de Servicio</h2>
                            <p class="section-subtitle">Actualmente {{$info2}}</p>
                        </header>
                   </div>
                    <div class="col-md-3 text-center" style=" border-style: solid;">
                              <p>
                              <span>Precios</span>

                              <br> Lavado: $140. 4 Kilos. $35 Kilo Adicional.
                              <br> Planchado: $135 Docena. Pieza Adicional: $12.
                              <br> Pieza lavado y planchado: $15.
                            </p>
                    </div>
                </DIV>




          <div class="row">





                        {{ Form::open(['route'=>'create.orden', 'method'=>'POST', 'role' => 'form','novalidate', 'id'=>'contact-form',  'class'=>'form-horizontal']) }}
                       <div class="col-md-3 col-lg-3"></div>
                       <div class="col-md-6 col-lg-6 col-sm-12">

                        <div class="control-group">
                               {{  Form::label('nombre', 'Tu nombre') }}
                               {{  Form::text('nombre',null, ['class' => 'form-control','required','placeholder' => 'Escribe tu nombre'])}}
                               {{ $errors->first('nombre','<p class="message_error">:message</p>') }}

                        </div>


                        <div class="control-group">
                           {{  Form::label('correo', 'Correo') }}
                           {{  Form::email('correo', null, ['class' => 'form-control','required','placeholder' => 'Escribe tu Correo'])}}
                           {{ $errors->first('correo','<p class="message_error">:message</p>') }}


                        </div>

                        <div class="control-group">
                               {{  Form::label('cumple', '¿Cuándo es tu cumpleaños?') }}
                               {{  Form::text('cumple',null, ['class' => 'form-control','required','placeholder' => 'Nos gustaria darte un detalle en ese dia especial.'])}}
                               {{ $errors->first('cumple','<p class="message_error">:message</p>') }}

                        </div>



                        <div class="control-group">
                           {{  Form::label('telefono', 'Teléfono') }}
                           {{  Form::text('telefono', null, ['class' => 'form-control'])}}
                           {{ $errors->first('telefono','<p class="message_error">:message</p>') }}


                        </div>

                        <div class="control-group">
                           {{  Form::label('direccion', 'Dirección') }}
                           {{  Form::text('direccion',null, ['class' => 'form-control','required'])}}
                           {{ $errors->first('direccion','<p class="message_error">:message</p>') }}

                        </div>
                        <div class="control-group">
                           {{  Form::label('calles', 'Entre que calles se encuentra') }}
                           {{  Form::text('calles',null, ['class' => 'form-control'])}}
                           {{ $errors->first('calles','<p class="message_error">:message</p>') }}

                        </div>
                        <div class="control-group">
                            <div class="controls">
                            {{  Form::label('colonia_e', 'Colonia') }}
                            {{ Form::select('colonia_e',$rutas,null,['class'=> 'form-control'],1) }}
                            </div>
                        </div>

                        <div>
                        <br>
                        <p>¿Te entregaremos en la misma dirección?  <input type="checkbox" id="checkDir" checked data-toggle="toggle" data-on="Si" data-off="No" data-onstyle="success" data-offstyle="danger" data-style="ios"></p>
                        </div>

                        <div id="dirEntrega" class="hidden">
                            {{  Form::label('entrega', 'Dirección de entrega') }}
                           {{  Form::text('entrega',null, ['class' => 'form-control','required'])}}
                        </div>

                        <div class="control-group">
                            {{  Form::label('servicio', 'Servicio') }}
                            {{ Form::select('servicio',$servicio,null,['class'=> 'form-control'],1) }}
                        </div>

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

                        <div class="control-group">
                            {{  Form::label('pago', 'Forma de Pago') }}
                            {{ Form::select('pago',array('1' => 'Efectivo'),null,['class'=> 'form-control'],1) }}
                        </div>
                        <div class="control-group">
                          {{  Form::label('descripcion', 'Requerimientos Especiales') }}
                          {{ Form::textarea('descripcion', null, ['class' => 'form-control','size' => '30x3', 'placeholder' => 'Si deseas algun (Almidon, suavizante, camisas dobladas o en gancho) puedes especificarlo aqui.'])  }}
                        </div>

                        <div class="form-actions">
                            <button type="submit" class="btn btn-default btn-lg btn-block">Realizar orden</button>
                        </div>
                    </div>
                    </form><!-- End contact-form -->



          </div>
      </div><br><br>
      <center><a style="color:#fff;" href="http://mintwash.com.mx/avisoPrivacidad.html">Aviso de privacidad</a></center>
    </section><!-- about ends -->
    <!-- highlight section begins -->
           <!-- parallax quote begins -->
       <!-- services begins -->

<script type="text/javascript">
  $("#checkDir").change(function() {
    if(this.checked) {
        //Do stuff
        $( "#dirEntrega" ).addClass( "hidden" );
    }
    else{
      $( "#dirEntrega" ).removeClass( "hidden" );
    }
});
</script>


<script type="text/javascript">
  $(function () {


    $('#fecha_recoleccion').datepicker({
      changeYear: false,
      maxDate: "1M 10D",
      onSelect: function(selectedDate) {
        console.log('fecha ' + selectedDate);
         $('#hora_recoleccion').html('');
        formato = selectedDate.split("/");
        fecha = (formato[2].length>3)? formato[2] +"-" + formato[1] +"-" +formato[0] : formato[2] +"-" + formato[0] +"-"+ formato[1];
        $('#iptFR').val(fecha);
        console.log("Valor: "+ fecha);
        col2=$('#colonia_e').val();
        console.log("Colonia: " + col2);
        onfocus="#fecha_recoleccion";
           $.ajax({
              type:'POST',
              dataType: 'JSON',
              url: 'disponible',
              data: {fecha: fecha, col2:col2},
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

       }
    });

  });

</script>


</body>


</html>
