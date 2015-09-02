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





    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    {{ HTML::script('asset/js/jquery.min.js') }}
    {{ HTML::script('asset/js/bootstrap.min.js') }}
    {{ HTML::script('asset/js/jquery-ui.min.js') }}
    {{ HTML::script('asset/js/app/orden.js') }}


    

   <script>
  
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
     firstDay: 1,
     isRTL: false,
     showMonthAfterYear: false,
     yearSuffix: ''
   };
   $.datepicker.setDefaults($.datepicker.regional['es']);


</script> 


  
    
  </head>

  <body>

 <!-- Nav starts -->
     <div class="navbar navbar-default navbar-static-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          
          <a href="index.html"><h4>Mint Wash<h4></a>
        </div>
        <div class="navbar-collapse collapse">
        </div><!--/.nav-collapse -->
      </div>
    </div><!-- Nav ends -->

    <!-- about begins -->
    <section id="page-about" class="page-about">
      <div class="container">
                <header class="section-header">
                    <h2 class="section-title">Realiza tu Orden</h2>
                    <div class="spacer"></div>
                    <p class="section-subtitle">Tu di cuando y donde, y nosotros lo hacemos realidad</p>
                </header>
       

      </div>

    </section><!-- about ends -->
    <section id="page-services2" class="highlight">
   
    
      <div class="container">
                <header class="section-header">
                    <h2 class="section-title">Orden</h2>
                    <p class="section-subtitle">Información General</p>
                </header>
          <div class="row">
        
        {{ Form::open(['route'=>'create.orden', 'method'=>'POST', 'role' => 'form','novalidate', 'id'=>'contact-form',  'class'=>'form-horizontal']) }}    
       
        
        <div class="control-group">
               {{  Form::label('nombre', 'Tu nombre') }}
               {{  Form::text('nombre',null, ['class' => 'form-control input-lg'])}}
               {{ $errors->first('nombre','<p class="message_error">:message</p>') }}

        </div>  

        <div class="control-group">
           {{  Form::label('correo', 'Correo') }}
           {{  Form::email('correo', null, ['class' => 'form-control input-lg'])}}
           {{ $errors->first('correo','<p class="message_error">:message</p>') }}


        </div>

        <div class="control-group">
           {{  Form::label('telefono', 'Teléfono') }}
           {{  Form::text('telefono', null, ['class' => 'form-control input-lg'])}}
           {{ $errors->first('telefono','<p class="message_error">:message</p>') }}


        </div>

        <div class="control-group">
           {{  Form::label('direccion', 'Dirección') }}
           {{  Form::text('direccion',null, ['class' => 'form-control input-lg'])}}
           {{ $errors->first('direccion','<p class="message_error">:message</p>') }}

        </div>  
      

        <div class="control-group">
            <div class="controls">
            {{  Form::label('colonia_e', 'Colonia') }}
            {{ Form::select('colonia_e',$rutas,null,['class'=> 'form-control input-lg'],1) }}
            </div>
        </div>

        <div class="control-group">
            {{  Form::label('servicio', 'Servicio') }}
            {{ Form::select('servicio',$servicio,null,['class'=> 'form-control input-lg'],1) }}
        </div> 

        <div class="control-group">
            {{  Form::label('fecha_recoleccion', 'Fecha de Recolección') }}
              {{  Form::text('fecha_recoleccion',null, ['class' => 'form-control','placeholder' => 'Fecha de Recolección', 'data-date-format' => 'dd-mm-yyyy'])}}
              {{ $errors->first('fecha_recoleccion','<p class="message_error">:message</p>') }}
              {{ Form::hidden('iptFR', NULL, array('id' => 'iptFR') ) }}
        </div>

        <div class="control-group">
            {{  Form::label('hora_recoleccion', 'Hora de Recolección') }}
            {{ Form::select('hora_recoleccion',array(),null,['class'=> 'form-control input-lg'],1) }}
        </div>

        <div class="control-group">
            {{  Form::label('pago', 'Forma de Pago') }}
            {{ Form::select('pago',array('1' => 'Efectivo', '2' => 'Tarjeta de Crédito','3' => 'Tarjeta de Débito'),null,['class'=> 'form-control input-lg'],1) }}
        </div>  
        <div class="control-group">
          {{  Form::label('descripcion', 'Requerimientos Especiales') }}
          {{ Form::textarea('descripcion', null, ['class' => 'form-control input-lg','size' => '30x3' ])  }}
        </div>
       
        <div class="form-actions">
            <button type="submit" class="btn btn-default btn-lg btn-block">Realizar orden</button>
        </div>
    </form><!-- End contact-form -->
              
          </div>
      </div><br><br>
      <center><a style="color:#fff;" href="avisoPrivacidad.html">Aviso de privacidad</a></center>
    </section><!-- about ends -->
    <!-- highlight section begins -->
           <!-- parallax quote begins -->
       <!-- services begins -->
  

<script type="text/javascript">
  $(function () {


    $('#fecha_recoleccion').datepicker({
      changeYear: false,
      minDate: "0D",
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