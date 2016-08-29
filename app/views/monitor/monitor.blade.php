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
                                <li><a href="./cortesias">Cortesias</a></li>
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
                        
                        <li><a href="./nomina">Nómina</a></li>
                        <li><a href="./promociones2">Catalogo Promociones</a></li>
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
                <li>
                    <a href="#"><i class="fa fa-bar-chart-o"></i> <span class="nav-label">Reportes</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="./reporteMauricio">Reporte Mauricio</a></li>
                        <li><a href="./comentarios">Reporte de comentarios</a></li>
                        <li><a href="./consolidado">Consolidado </a></li>
                        <li><a href="./consolidadoSemanal">Consolidado Ingresos Semanal</a></li>

                        <li><a href="./consolidadoNomina">Consolidado Nómina</a></li>
                        <li><a href="./consolidadoIngresosEgresos">Ingresos - Egresos</a></li>
                        <li><a href="./consolidadoIngresosEgresosSemanal">Consolidado Ingresos vs Egresos Semanal</a></li>
                        
                        <li><a href="./reportePromociones2"> Reporte Promociones</a></li>
                    </ul>
                </li>

                    </ul>
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
                    <a href="./logout">
                        <i class="fa fa-sign-out"></i> Cerrar sesión
                    </a>
                </li>
            </ul>

        </nav>
        </div><!--
            <div class="wrapper wrapper-content">
        <div class="row">
                    <div class="col-lg-3">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <span class="label label-success pull-right">Mensual</span>
                                <h5>Ingresos</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins">40 886,200</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <span class="label label-info pull-right">Anual</span>
                                <h5>Ordenes</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins">275,800</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <span class="label label-primary pull-right">Hoy</span>
                                <h5>Visitantes</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins">106,120</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">

            </div>
        </div>
        <div class="row">
                    <div class="col-lg-12">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <h5>Ordenes</h5>
                                <div class="pull-right">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-xs btn-white active">Hoy</button>
                                        <button type="button" class="btn btn-xs btn-white">Mes</button>
                                        <button type="button" class="btn btn-xs btn-white">Año</button>
                                    </div>
                                </div>
                            </div>
                            <div class="ibox-content">
                                <div class="row">
                                <div class="col-lg-9">
                                    <div class="flot-chart">
                                        <div class="flot-chart-content" id="flot-dashboard-chart"></div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <ul class="stat-list">
                                        <li>
                                            <h2 class="no-margins">2,346</h2>
                                            <small>Total de ordenes en el periodo</small>
                                            <div class="stat-percent">48% <i class="fa fa-level-up text-navy"></i></div>
                                            <div class="progress progress-mini">
                                                <div style="width: 48%;" class="progress-bar"></div>
                                            </div>
                                        </li>
                                        <li>
                                            <h2 class="no-margins ">4,422</h2>
                                            <small>Ordenes del periodo pasado</small>
                                            <div class="stat-percent">60% <i class="fa fa-level-down text-navy"></i></div>
                                            <div class="progress progress-mini">
                                                <div style="width: 60%;" class="progress-bar"></div>
                                            </div>
                                        </li>
                                        <li>
                                            <h2 class="no-margins ">9,180</h2>
                                            <small>Ingresos de las ordenes mensuales</small>
                                            <div class="stat-percent">22% <i class="fa fa-bolt text-navy"></i></div>
                                            <div class="progress progress-mini">
                                                <div style="width: 22%;" class="progress-bar"></div>
                                            </div>
                                        </li>
                                        </ul>
                                    </div>
                                </div>
                                </div>

                            </div>
                        </div>
                    </div>





                </div>
                </div>

        </div>

    </div>-->

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

</body>
</html>
