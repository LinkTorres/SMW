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
                        <li><a href="graph_flot.html">Zonas</a></li>
                        <li><a href="graph_morris.html">Recolectores</a></li>
                        <li><a href="graph_rickshaw.html">Servicios</a></li>
                    </ul>
                </li>
                 <li>
                    <a href="#"><i class="fa fa-bar-chart-o"></i> <span class="nav-label">Administración</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="graph_flot.html">Insumos</a></li>
                        <li><a href="graph_morris.html">Gastos</a></li>
                        <li><a href="graph_rickshaw.html">Reportes</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-bar-chart-o"></i> <span class="nav-label">Finanzas</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="graph_flot.html">Reporte de Ingresos</a></li>
                        <li><a href="graph_morris.html">Reporte de Gastos</a></li>
                        <li><a href="graph_rickshaw.html">Reporte Ingresos - Egresos</a></li>
                    </ul>
                </li>
                <li>
                    <a href="metrics.html"><i class="fa fa-pie-chart"></i> <span class="nav-label">Promociones</span>  </a>
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
                    <div class="col-lg-5">
                        <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Zona A</h5>
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
                        <form class="form-horizontal">
                                <p>Detalles</p>
                                <div class="form-group"><label class="col-lg-3 control-label">$Ingresos</label>

                                    <div class="col-lg-9"><span><br>$3400</span>
                                    </div>
                                </div>
                                <div class="form-group"><label class="col-lg-3 control-label">Efectivo</label>

                                    <div class="col-lg-9"><span><br>$3400</span>
                                    </div>
                                </div>
                                <div class="form-group"><label class="col-lg-3 control-label">Tarjeta de D</label>

                                    <div class="col-lg-9"><span><br>$0</span>
                                    </div>
                                </div>
                                <div class="form-group"><label class="col-lg-3 control-label">Lavado</label>

                                    <div class="col-lg-9"><span><br>$1600</span>
                                    </div>
                                </div>
                                <div class="form-group"><label class="col-lg-3 control-label">Planchado</label>

                                    <div class="col-lg-9"><span><br>$1400</span>
                                    </div>
                                </div>
                                <div class="form-group"><label class="col-lg-3 control-label">L y P</label>

                                    <div class="col-lg-9"><span><br>$0</span>
                                    </div>
                                </div>
                            </form>

                    </div>
                    
                </div>
                        </div>

                        <div class="col-lg-5">
                        <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Zona B</h5>
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
                         <form class="form-horizontal">
                                <p>Detalles</p>
                                <div class="form-group"><label class="col-lg-3 control-label">$Ingresos</label>

                                    <div class="col-lg-9"><span><br>$4200</span>
                                    </div>
                                </div>
                                <div class="form-group"><label class="col-lg-3 control-label">Efectivo</label>

                                    <div class="col-lg-9"><span><br>$3400</span>
                                    </div>
                                </div>
                                <div class="form-group"><label class="col-lg-3 control-label">Tarjeta de D</label>

                                    <div class="col-lg-9"><span><br>$800</span>
                                    </div>
                                </div>
                                <div class="form-group"><label class="col-lg-3 control-label">Lavado</label>

                                    <div class="col-lg-9"><span><br>$1600</span>
                                    </div>
                                </div>
                                <div class="form-group"><label class="col-lg-3 control-label">Planchado</label>

                                    <div class="col-lg-9"><span><br>$1400</span>
                                    </div>
                                </div>
                                <div class="form-group"><label class="col-lg-3 control-label">L y P</label>

                                    <div class="col-lg-9"><span><br>$800</span>
                                    </div>
                                </div>
                            </form>

                    </div>
                    
                </div>
                        </div>
                    </div>

		<div class="row">
                    <div class="col-lg-5">
                        <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Aledaños</h5>
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
                         <form class="form-horizontal">
                                <p>Detalles</p>
                                <div class="form-group"><label class="col-lg-3 control-label">$Ingresos</label>

                                    <div class="col-lg-9"><span><br>$0</span>
                                    </div>
                                </div>
                                
                                <div class="form-group"><label class="col-lg-3 control-label">Lavado</label>

                                    <div class="col-lg-9"><span><br>$0</span>
                                    </div>
                                </div>
                                <div class="form-group"><label class="col-lg-3 control-label">Planchado</label>

                                    <div class="col-lg-9"><span><br>$0</span>
                                    </div>
                                </div>
                                <div class="form-group"><label class="col-lg-3 control-label">L y P</label>

                                    <div class="col-lg-9"><span><br>$0</span>
                                    </div>
                                </div>
                            </form>

                    </div>
                    
                </div>
                        </div>

                        <div class="col-lg-5">
                        <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Egresos/Ingresos</h5>
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
                        <form class="form-horizontal">
                                <p>Detalles</p>
                                <div class="form-group"><label class="col-lg-3 control-label">Ingreso Total</label>

                                    <div class="col-lg-9"><span><br>$7400</span>
                                    </div>
                                </div>
                                <div class="form-group"><label class="col-lg-3 control-label">Egresos</label>

                                    <div class="col-lg-9"><span><br>0</span>
                                    </div>
                                </div>
                                <div class="form-group"><label class="col-lg-3 control-label">Ganancia</label>

                                    <div class="col-lg-9"><span><br>$7400</span>
                                    </div>
                                </div>
                               
                            </form>

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
