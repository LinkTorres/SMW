<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Mint Wash</title>

    <link href="asset/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha256-k2/8zcNbxVIh5mnQ52A0r3a6jAgMGxFJFE2707UxGCk= sha512-ZV9KawG2Legkwp3nAlxLIVFudTauWuBpC10uEafMHYL0Sarrz5A7G79kXh5+5+woxQ5HM559XX2UZjMJ36Wplg==" crossorigin="anonymous">

    <link href="asset/css/animate.css" rel="stylesheet">
    <link href="asset/css/style.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.2/css/select2.min.css" rel="stylesheet" />

</head>

<body>
    <div id="wrapper">
        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav metismenu" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element"> <span>
                            <img alt="image" class="img-circle" src="asset/img/profile_small.jpg" />
                             </span>
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">Tere</strong>
                             </span> <span class="text-muted text-xs block">Monitor<b class="caret"></b></span> </span>
                            </a>
                            <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                <li><a href="./logout">Cerrar sesión</a></li>
                            </ul>
                        </div>
                        <div class="logo-element">
                            MW
                        </div>
                    </li>
                    <li>
                    <a href="index.html"><i class="fa fa-th-large"></i> <span class="nav-label">Clientes</span> <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="index.html"><i class="fa fa-th-large"></i> <span class="nav-label">Corporativo</span> <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li><a href="./corporativo3">Pedidos</a></li>
                                <li><a href="./corporativo2">Empleados</a></li>
                                <li><a href="./corporativo1">Empresas</a></li>
                            </ul>
                        </li>
                        <li><a href="./alrededores">Aledaños</a></li>
                        <li>
                            <a href="index.html"><i class="fa fa-th-large"></i> <span class="nav-label">Recoleccion</span> <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li><a href="./pedidos">Pedidos</a></li>
                                <li><a href="./clientes">Clientes</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="index.html"><i class="fa fa-th-large"></i> <span class="nav-label">Operacion Interna</span> <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                         <li>
                    <a href="#"><i class="fa fa-bar-chart-o"></i> <span class="nav-label">Servicio</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="./zonas">Zonas</a></li>
                        <li><a href="./recolectors">Recolectores</a></li>
                        <li><a href="./servicios">Servicios</a></li>
                    </ul>
                </li>
                 <li>
                    <a href="#"><i class="fa fa-bar-chart-o"></i> <span class="nav-label">Administración</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="./insumos">Insumos</a></li>
                       <!-- <li><a href="./insumos">Caja Chica</a></li>-->
                        <li><a href="./reportes">Reportes</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-bar-chart-o"></i> <span class="nav-label">Finanzas</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="./Finanzasingresos">Reporte de Ingresos</a></li>
                        <li><a href="./FinanzasGastos">Reporte de Gastos</a></li>
                        <li><a href="./FinanzasFinal">Reporte Ingresos - Egresos</a></li>
                    </ul>
                </li>

                    </ul>
                </li>
                <li>
                    <a href="./pedidos"><i class="fa fa-pie-chart"></i> <span class="nav-label">Pedidos</span>  </a>
                </li>

                </ul>

            </div>
        </nav>

        <div id="page-wrapper" class="gray-bg">
            <div class="row border-bottom">
                <nav class="navbar navbar-static-top white-bg" role="navigation" style="margin-bottom: 0">
                    <div class="navbar-header">
                        <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
                    </div>
                    <ul class="nav navbar-top-links navbar-right">
                        <li>
                            <span class="m-r-sm text-muted welcome-message">Bienvenido a Mint Wash</span>
                        </li>


                        <li>
                            <a href="login.html">
                                <i class="fa fa-sign-out"></i> Cerrar sesión
                            </a>
                        </li>
                    </ul>

                </nav>
            </div>
            <div class="wrapper wrapper-content">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <h5>Clientes</h5>
                                <div class="ibox-tools">
                                    <a class="collapse-link">
                                        <i class="fa fa-chevron-up"></i>
                                    </a>
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                        <i class="fa fa-wrench"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-user">
                                        <li><a href="./altaCliente">Agregar Cliente</a>
                                        </li>
                                    </ul>
                                    <a class="close-link">
                                        <i class="fa fa-times"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="form-group">
        <label class="col-lg-2 control-label">Nombre</label>

                                    <!--<div class="col-lg-10">{{  Form::text('nombre',null, ['class' => 'form-control','placeholder' => 'Nombre', 'required' => 'required'])}}
                                    -->
                                    <div class="col-lg-10">{{  Form::select('nombre',$array,null, ['class' => 'form-control select', 'required' => 'required'])  }}

                                    </div>
    </div>
                            <div class="ibox-content">



                                <div aria-multiselectable="true" role="tablist" id="div_Clientes" class="panel-group">
                                    @foreach ($clientes as $cliente)

                                    <div class="panel panel-default">
                                        <!--Principio del encabezado -->
                                        <div id="hc_{{ $cliente->id }}" role="tab" class="panel-heading">
                                            <h4 class="panel-title" id="gc_{{ $cliente->id }}">
            <a aria-controls="col_{{ $cliente->id }}" aria-expanded="true" href="#col_{{ $cliente->id }}" data-parent="#div_Clientes" data-toggle="collapse">
              {{ $cliente->id }} .- {{ $cliente->nombre }}
            </a>
          <a href="#gc_{{ $cliente->id }}" class="anchorjs-link"><span class="anchorjs-icon"></span></a></h4>
                                        </div>
                                        <div aria-labelledby="hc_{{ $cliente->id }}" role="tabpanel" class="panel-collapse collapse" id="col_{{ $cliente->id }}">
                                            <div class="panel-body">
                                                <!--Contenido del Accordion-->
                                                <div class="table-responsive">
                                                    <table class="table table-hover">
                                                        <tbody>
                                                            <tr>
                                                                <td>Cliente:</td>
                                                                <td>{{ $cliente->nombre }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Telefono:</td>
                                                                <td>{{ $cliente->telefono }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Dirección:</td>
                                                                <td>{{ $cliente->direccion }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Correo</td>
                                                                <td><a href="mailto:{{ $cliente->correo }}">{{ $cliente->correo }}</a></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Fecha de Nacimiento</td>
                                                                <td>{{ $cliente->nacimiento }}</td>
                                                            </tr>
                                                            

                                                            <tr>
                                                                <td>Ver</td>
                                                                <td>{{ HTML::linkAction('ClientesController@show', 'Ver', array( \Str::slug($cliente->nombre)."/".$cliente->id),array('class' => 'btn btn-xs')) }}</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>

                        </div>
                    </div>
                </div>





            </div>
        </div>

    </div>

    </div>

    <!-- Mainly scripts -->
    <script src="asset/js/jquery-2.1.1.js"></script>
    <script src="asset/js/bootstrap.min.js"></script>
    <script src="asset/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="asset/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Flot -->
    <script src="asset/js/plugins/flot/jquery.flot.js"></script>
    <script src="asset/js/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="asset/js/plugins/flot/jquery.flot.spline.js"></script>
    <script src="asset/js/plugins/flot/jquery.flot.resize.js"></script>
    <script src="asset/js/plugins/flot/jquery.flot.pie.js"></script>
    <script src="asset/js/plugins/flot/jquery.flot.symbol.js"></script>
    <script src="asset/js/plugins/flot/jquery.flot.time.js"></script>

    <!-- Peity -->
    <script src="asset/js/plugins/peity/jquery.peity.min.js"></script>
    <script src="asset/js/demo/peity-demo.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="asset/js/inspinia.js"></script>
    <script src="asset/js/plugins/pace/pace.min.js"></script>

    <!-- jQuery UI -->
    <script src="asset/js/plugins/jquery-ui/jquery-ui.min.js"></script>

    <!-- Jvectormap -->
    <script src="asset/js/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="asset/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>

    <!-- EayPIE -->
    <script src="asset/js/plugins/easypiechart/jquery.easypiechart.js"></script>

    <!-- Sparkline -->
    <script src="asset/js/plugins/sparkline/jquery.sparkline.min.js"></script>

    <!-- Sparkline demo data  -->
    <script src="asset/js/demo/sparkline-demo.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.2/js/select2.min.js"></script>

    <script>
        $(document).ready(function() {


            $(".select").select2({
              tags: true,
              createTag: function (params) {
                return {
                  id: params.term,
                  text: params.term,
                  newOption: true
                }
              }
            });








            $("select[name='nombre']").change(function(e){




               var x= $("select[name='nombre'] option:selected").attr('value');
               console.log(x);
               $(location).attr('href', './clientes/'+x+'/'+x);

            });

        });



    </script>
</body>

</html>
