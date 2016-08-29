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

</head>

<body>
    <div id="wrapper">
    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element"> <span>
                            <img alt="image" class="img-circle" src="img/profile_small.jpg" />
                             </span>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">Tere</strong>
                             </span> <span class="text-muted text-xs block">Monitor<b class="caret"></b></span> </span> </a>
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                            <li><a href="login.html">Cerrar sesión</a></li>
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
                    <div class="col-lg-6 col-md-6">
                        <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Registrar Pedido Corporativo</h5>
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
                    <div class="ibox-content">
                     {{ Form::open(['route'=>'corporativo3', 'method'=>'POST', 'role' => 'form','novalidate', 'id'=>'form-horizontal',  'class'=>'form-horizontal']) }} 
                     
                        <div class="form-group"><label class="col-lg-2 control-label">Empleado</label>

                                    <div class="col-lg-10">{{  Form::select('empresaEmpleado', array($array),null, ['class' => 'form-control', 'required' => 'required'])  }}
                                    </div>
                        </div>
                        <div class="form-group"><label class="col-lg-2 control-label">Nota</label>

                                    <div class="col-lg-10">{{  Form::text('nota',null, ['class' => 'form-control','placeholder' => 'Número de nota', 'required' => 'required'])}}
                                    </div>
                            </div>
                        <div class="form-group"><label class="col-lg-2 control-label">Lavado</label>

                                    <div class="col-lg-10">{{  Form::text('lavadoKilos',null, ['class' => 'form-control','placeholder' => 'Kilos', 'required' => 'required'])}}
                                    </div>
                        </div>

                        <div class="form-group"><label class="col-lg-2 control-label">Lavado</label>

                                    <div class="col-lg-10">{{  Form::text('lavadoPiezas',null, ['class' => 'form-control','placeholder' => 'Piezas', 'required' => 'required'])}}
                                    </div>
                        </div>
                        <div class="form-group"><label class="col-lg-2 control-label">Planchado</label>

                                <div class="col-lg-10">{{  Form::text('planchado',null, ['class' => 'form-control','placeholder' => 'Piezas', 'required' => 'required'])}}
                                </div>
                        </div>
                        <div class="form-group"><label class="col-lg-2 control-label">Lav y Pl</label>

                                    <div class="col-lg-10">{{  Form::text('lyp',null, ['class' => 'form-control','placeholder' => 'Piezas', 'required' => 'required'])}}
                                    </div>
                        </div>
                        <div class="form-group"><label class="col-lg-2 control-label">Costo</label>

                                    <div class="col-lg-10">{{  Form::text('costo',null, ['class' => 'form-control','placeholder' => 'Costo', 'required' => 'required'])}}
                                    </div>
                            </div>
                            <div class="form-group"><label class="col-lg-2 control-label">Fecha</label>

                                    <div class="col-lg-10">{{  Form::text('fecha',null, ['class' => 'form-control datepicker','placeholder' => 'Fecha de orden', 'required' => 'required'])}}
                                    </div>
                            </div>
                            <div class="form-group">
                                    <div class="col-lg-offset-2 col-lg-10">
                                        <button class="btn btn-sm btn-white" type="submit">Registrar</button>
                                    </div>
                                </div>
</form>

                    </div>
                    
                </div>
                        </div>
                    </div>


                <div class="row">
                <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Catálogo de Pedidos Corporativos</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="fa fa-wrench"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-user">
                                <li><a href="#">Config option 1</a>
                                </li>
                                <li><a href="#">Config option 2</a>
                                </li>
                            </ul>
                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">

                        <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover dataTables-example" >
                    <thead>
                    <tr>
                        <th>Nota</th>
                        <th>Empresa</th>
                        <th>Empleado</th>
                        <th>Fecha</th>
                        <th>Kilos Lavado</th>
                        <th>Piezas Lavado</th>
                        <th>Planchado</th>
                        <th>Lavado y planchado</th>
                        <th>Costo</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($pedidos as $pedido)
                        <tr>
                            <td>{{  $pedido->nota   }}</td>
                            <td>{{  $pedido->Empresa   }}</td>
                            <td>{{  $pedido->nombre   }}</td>
                            <td>{{  $pedido->fecha   }}</td>
                           <td>{{  $pedido->lavadoKilos   }}</td>
                           <td>{{  $pedido->lavadoPiezas   }}</td>
                            <td>{{  $pedido->planchado  }}</td>
                            <td>{{  $pedido->lyp  }}</td>
                            <td>{{  $pedido->Costo  }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                    </table>
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

    <script>
        $(document).ready(function() {
            $('.datepicker').datepicker();
        });
    </script>
</body>
</html>
