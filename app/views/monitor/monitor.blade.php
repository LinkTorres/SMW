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
    
    {{ HTML::script('asset/js/bootstrap-datepicker.js') }}
    {{ HTML::script('asset/js/bootstrap-datepicker.ES.js') }}

    {{ HTML::script('asset/js/sesion.js') }}
    
    {{ HTML::script('asset/js/highcharts.js') }}
    {{ HTML::script('asset/js/highcharts-3d.js') }}
    {{ HTML::script('asset/js/jquery.dataTables.min.js') }}
    

  
    
  </head>

  <body>

  <nav class="navbar menta navbar-fixed-top">
    <div class="container">  
      <div class="navbar-right">
        <img src="asset/img/logo.png" alt="MintWash" class="img-responsive ">
      </div> 

      <div id="navbar" class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
          <li><input class="form-control input-lg-3 hide" placeholder="Buscar"></input></li>
        </ul>
      </div><!--/.nav-collapse -->
    </div>
  </nav>

  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-3 col-md-2 sidebar">
        <ul class="nav nav-sidebar menu">
          <li>  </li>

            <li>  {{ HTML::link('/', 'Inicio', array('class' => 'list-group-item')); }}                          </li>
            
            <li>  {{ HTML::link('clientes', 'Clientes', array('class' => 'list-group-item')); }}                      </li>
            <li>  {{ HTML::link('zonas', 'Zonas', array('class' => 'list-group-item')); }}                      </li>
            <li>  {{ HTML::link('recolectors', 'Recolectores', array('class' => 'list-group-item')); }}                      </li>
            <li>  {{ HTML::link('servicios', 'Servicios', array('class' => 'list-group-item')); }}                      </li>
            <!--<li>  {{ HTML::link('lavado', 'Lavado- Via Telefonica', array('class' => 'list-group-item')); }}                      </li>
            <li>  {{ HTML::link('planchado', 'Planchado- Via Telefonica', array('class' => 'list-group-item')); }}                      </li>
            --><li>  {{ HTML::link('pedidos', 'Pedidos', array('class' => 'list-group-item')); }}   
            <li>  {{ HTML::link('promociones', 'Promociones', array('class' => 'list-group-item')); }}                      </li>
          <li>  {{ HTML::link('corporativo1', 'Corporativo Empresas', array('class' => 'list-group-item')); }}                      </li>
          <li>  {{ HTML::link('corporativo2', 'Corporativo Empleados', array('class' => 'list-group-item')); }}                      </li>
          <li>  {{ HTML::link('corporativo3', 'Corporativo Pedidos', array('class' => 'list-group-item')); }}                      </li>
            <li>  {{ HTML::link('logout', 'Salir', array('class' => 'list-group-item')); }}                      </li>
           
        </ul>
        
      </div>
      
      <br>
      <div class="row">
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 morado" style="height:10px"></div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 menta btn-texto"><h2 class="text-center">@yield('titulo')</h2></div>
      </div>
      <br>

      <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        
        @yield('contenido')
        
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

    
  @yield('scripts')
  </body>
</html>
