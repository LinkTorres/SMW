
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Mint Wash | Login</title>

    <link href="asset/css/bootstrap.min.css" rel="stylesheet">
    <link href="asset/font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="asset/css/animate.css" rel="stylesheet">
    <link href="asset/css/style.css" rel="stylesheet">

</head>

<body class="gray-bg">

    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <div>

                <h1 class="logo-name">MW</h1>

            </div>
            <h3>Bienvenido a Mint Wash</h3>
            <p>
                <!--Continually expanded and constantly improved Inspinia Admin Them (IN+)-->
            </p>
            <p>Ingresa en el sistema. Ve la acción</p>
              {{ Form::open(['route' => 'login', 'method'=>'POST', 'role' => 'form', 'class'=> 'm-t', 'novalidate' => 'novalidate','role' => 'form']) }}
              @if(Session::has('login_error'))
                  <span class="label label-danger">Datos incorrectos</span>
              @endif
                <div class="form-group">
                     {{  Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Correo'])}}
                </div>
                <div class="form-group">
                    
                    {{  Form::password('password', ['class' => 'form-control' , 'placeholder' => 'Contraseña'])}}
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">Ingresar</button>

               
            {{ Form::close() }}
            <p class="m-t"> <small>Mint Wash &copy; 2015</small> </p>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="asset/js/jquery-2.1.1.js"></script>
    <script src="asset/js/bootstrap.min.js"></script>

</body>

</html>

