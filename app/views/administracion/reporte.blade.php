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
                            <img alt="image" class="img-circle" src="asset/img/profile_small.jpg" />
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
                    <a href="./clientes"><i class="fa fa-diamond"></i> <span class="nav-label">Clientes</span></a>
                </li>
                <li class="active">
                    <a href="index.html"><i class="fa fa-th-large"></i> <span class="nav-label">Corporativo</span> <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li><a href="./corporativo1">Empresas</a></li>
                        <li class="active"><a href="./corporativo2">Empleados</a></li>
                        <li><a href="./corporativo3">Pedidos</a></li>
                    </ul>
                </li>
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
                <li>
                    <a href="./pedidos"><i class="fa fa-pie-chart"></i> <span class="nav-label">Pedidos</span>  </a>
                </li>
                <li>
                    <a href="./promociones"><i class="fa fa-pie-chart"></i> <span class="nav-label">Promociones</span>  </a>
                </li>
                <li>
                    <a href="./alrededores"><i class="fa fa-pie-chart"></i> <span class="nav-label">Aledaños</span>  </a>
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
        <span> Seleccione el año </span> <select name="carlist" form="carform">
  <option value="volvo">2015</option>
  <option value="volvo">2016</option>
  <option value="volvo">Acumulado</option>
</select><br><br> <span> Seleccione el mes </span> <select name="carlist" form="carform">
  <option value="volvo">Enero</option>
  <option value="volvo">Febrero</option>
  <option value="volvo">Marzo</option>
  <option value="volvo">Abril</option>
  <option value="volvo">Mayo</option>
  <option value="volvo">Junio</option>
  <option value="volvo">Julio</option>
  <option value="volvo">Agosto</option>
  <option value="volvo">Septiembre</option>
  <option value="volvo">Octubre</option>
  <option value="volvo">Noviembre</option>
  <option value="volvo">Diciembre</option>
  <option value="volvo">Acumulado</option>
</select><br><br>
        <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Por Tickets / Servicios</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="fa fa-wrench"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-user">
                                <li><a href="./altaCliente">Agregar Insumo</a>
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
                        <th>Servicio</th>
                        <th>Zona A</th>
                        <th>Zona B</th>
                        <th>Corporativo</th>
                        <th>Gym</th>
                        <th>Barberia</th>
                        <th>Aledaños</th>
                        <th>Total</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Lavado</td>
                        <td>{{ $lavadoZonaA }} Tickets</td>
                        <td>{{ $lavadoZonaB }} Tickets</td>
                        <td>{{ $lavadoCorp }} Tickets</td>
                        <td>{{ $lavadoZonaB }} Tickets</td>
                        <td>{{ $lavadoZonaB }} Tickets</td>
                        <td>{{ $lavadoZonaB }} Tickets</td>

                        <td> </td>
                    </tr>
                    <tr>
                        <td>Planchado</td>
                        <td>{{ $planchadoZonaA }} Tickets</td>
                        <td>{{ $planchadoZonaB }} Tickets</td>
                        <td>{{ $planchadoCorp }} Tickets</td>
                        <td>{{ $planchadoZonaB }} Tickets</td>
                        <td>{{ $planchadoZonaB }} Tickets</td>
                        <td>{{ $planchadoZonaB }} Tickets</td>

                        <td> </td>
                    </tr>
                    <tr>
                        <td>Lavado y planchado</td>
                        <td>{{ $ambosZonaA }} Tickets</td>
                        <td>{{ $ambosZonaB }} Tickets</td>
                        <td>{{ $ambosCorp }} Tickets</td>
                        <td>{{ $ambosZonaB }} Tickets</td>
                        <td>{{ $ambosZonaB }} Tickets</td>
                        <td>{{ $ambosZonaB }} Tickets</td>

                        <td> </td>
                    </tr>
                    <tr>
                        <td>Total</td>
                        <td>{{ $totalZonaA }} Tickets</td>
                        <td>{{ $totalZonaB }} Tickets</td>
                        <td>{{ $totalCorp }} Tickets</td>
                        <td>{{ $totalZonaB }} Tickets</td>
                        <td>{{ $totalZonaB }} Tickets</td>
                        <td>{{ $totalZonaB }} Tickets</td>

                        <td> </td>
                    </tr>

                    </tbody>
                    </table>
                        </div>

                    </div>

                </div>
                        </div>


                    </div>

        <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Dinero / Servicio</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="fa fa-wrench"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-user">
                                <li><a href="./altaCliente">Agregar Insumo</a>
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
                        <th>Servicio</th>
                        <th>Zona A</th>
                        <th>Zona B</th>

                        <th>Total</th>
                    </tr>
                    </thead>
                    <tbody>
                      <tr>
                          <td>Lavado</td>
                          <td>$ {{ $dinerolavadoZonaA }}</td>
                          <td>$ {{ $dinerolavadoZonaB }}</td>

                          <td> </td>
                      </tr>
                      <tr>
                          <td>Planchado</td>
                          <td>$ {{ $dineroplanchadoZonaA }}</td>
                          <td>$ {{ $dineroplanchadoZonaB }} </td>

                          <td> </td>
                      </tr>
                      <tr>
                          <td>Lavado y planchado</td>
                          <td>$ {{ $dineroambosZonaA }}</td>
                          <td>$ {{ $dineroambosZonaB }}</td>

                          <td> </td>
                      </tr>
                      <tr>
                          <td>Total</td>
                          <td>$ {{ $dinerototalZonaA }}</td>
                          <td>$ {{ $dinerototalZonaB }}</td>

                          <td> </td>
                      </tr>

                    </tbody>
                    </table>
                        </div>

                    </div>

                </div>
                        </div>


                    </div>

            <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Unidades / Servicios</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="fa fa-wrench"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-user">
                                <li><a href="./altaCliente">Agregar Insumo</a>
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
                        <th>Servicio</th>
                        <th>Zona A</th>
                        <th>Zona B</th>

                        <td>Total</td>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Lavado</td>
                        <td>{{ $cantidadlavadoZonaA }} Kilos</td>
                        <td>{{ $cantidadlavadoZonaB }} Kilos</td>

                        <td></td>
                    </tr>
                    <tr>
                        <td>Planchado</td>
                        <td>{{ $cantidadplanchadoZonaB }} Piezas</td>
                        <td>{{ $cantidadplanchadoZonaB }} Piezas</td>

                        <td></td>
                    </tr>
                    <tr>
                        <td>Lavado y planchado</td>
                        <td>{{ $cantidadambosZonaA }} Piezas</td>
                        <td>{{ $cantidadambosZonaB }} Piezas</td>

                        <td></td>
                    </tr>


                    </tbody>
                    </table>
                        </div>

                    </div>

                </div>
                        </div>


                    </div>
<!--
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Mejores Clientes</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="fa fa-wrench"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-user">
                                <li><a href="./altaCliente">Agregar Insumo</a>
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
                        <th>Cliente</th>
                        <th>Tickets</th>
                        <th>Lavado</th>
                        <th>Planchado</th>
                        <th>Lavado y Planchado</th>
                        <th>Total</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Emanuel</td>
                        <td>12 Tickets</td>
                        <td>6 Tickets</td>
                        <td>6 Tickets</td>
                        <td>0 Tickets</td>
                        <td>$1300</td>
                    </tr>
                    <tr>
                        <td>Hilario</td>
                        <td>15 Tickets</td>
                        <td>10 Tickets</td>
                        <td>1 Tickets</td>
                        <td>4 Tickets</td>
                        <td>$1600</td>
                    </tr>
                    <tr>
                        <td>Laura</td>
                        <td>6 Tickets</td>
                        <td>1 Tickets</td>
                        <td>2 Tickets</td>
                        <td>3 Tickets</td>
                        <td>$600</td>
                    </tr>
                    <tr>
                        <td>Francisco</td>
                        <td>9 Tickets</td>
                        <td>3 Tickets</td>
                        <td>3 Tickets</td>
                        <td>3 Tickets</td>
                        <td>$1000</td>
                    </tr>

                    </tbody>
                    </table>
                        </div>

                    </div>

                </div>
                        </div>

-->
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

    <!-- Data Tables -->
    <script src="asset/js/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="asset/js/plugins/dataTables/dataTables.bootstrap.js"></script>
    <script src="asset/js/plugins/dataTables/dataTables.responsive.js"></script>
    <script src="asset/js/plugins/dataTables/dataTables.tableTools.min.js"></script>

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

    <!-- Data Tables -->
    <script src="js/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="js/plugins/dataTables/dataTables.bootstrap.js"></script>
    <script src="js/plugins/dataTables/dataTables.responsive.js"></script>
    <script src="js/plugins/dataTables/dataTables.tableTools.min.js"></script>


   <script>
        $(document).ready(function() {
            $('.dataTables-example').DataTable({
                "language": {

            "lengthMenu": "Mostrar _MENU_ renglones por página",
            "zeroRecords": "Ninguno Encontrado",
            "info": "Mostrando página _PAGE_ de _PAGES_",
            "infoEmpty": "Ningun renglón disponible",
            "infoFiltered": "(Filtrada de _MAX_ renglones)",
            "search": "Filtrar",

        }
            });




        });

    </script>
</body>
</html>
