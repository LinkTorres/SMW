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
     {{ HTML::style('asset/css/index.css') }}

     


    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    {{ HTML::script('asset/js/jquery.min.js') }}
    {{ HTML::script('asset/js/bootstrap.min.js') }}
   
    


    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
  
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    
  </head>

  <body>

  <nav class="navbar menta navbar-fixed-top">
    <div class="container">  
      <div class="navbar-right">
        <img src="asset/img/logo.png" alt="MintWash" class="img-responsive ">
      </div>
   </div>
  </nav>      

<!-- Session 'route'=>'login' -->


<div class="container">

    

    {{ Form::open(['route' => 'login', 'method'=>'POST', 'role' => 'form', 'class'=> 'form-signin', 'novalidate' => 'novalidate']) }}
        <h2 class="form-signin-heading text-center">Iniciar Sesión</h2>
        @if(Session::has('login_error'))
          <span class="label label-danger">Datos incorrectos</span>
        @endif
        
       

      <div class="form-group">
  
       {{  Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Usuario'])}}
      
      </div>

      <div class="form-group">
      
       {{  Form::password('password', ['class' => 'form-control' , 'placeholder' => 'Contraseña'])}}
       
      </div>

      <div class="checkbox">
      <label> {{  Form::checkbox('remember')}} Recordarme</label>
       

       
      </div>


    <div class="text-center">
      <input type="submit" value="Acceder" class="btn btn-success"> 
    </div>   
     {{ Form::close() }}

</div> <!-- /container -->

<!-- Session -->

     
  

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

    
  </body>
</html>
