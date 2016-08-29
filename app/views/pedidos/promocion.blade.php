<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Mint Wash</title>

    {{ HTML::style('asset/css/bootstrap.min.css') }}
    {{ HTML::style('https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" ') }}

    {{ HTML::style('asset/css/animate.css') }}
    {{ HTML::style('asset/css/style.css') }}
    {{ HTML::style('asset/css/bootstrap-datepicker3.css') }}
    {{ HTML::style('https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.2/css/select2.min.css') }}

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
               <li class="active">
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
                        <li class="active"><a href="./alrededores">Aledaños</a></li>
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
                                <li><a href="./altaCliente">Agregar Gasto</a>
                                </li>
                            </ul>
                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">
                        {{ Form::open(['route'=>'promociones2', 'method'=>'POST', 'role' => 'form','novalidate', 'id'=>'form-horizontal',  'class'=>'form-horizontal']) }}

                                <div class="form-group"><label class="col-lg-2 control-label">Nombre</label>

                                    <!--<div class="col-lg-10">{{  Form::text('nombre',null, ['class' => 'form-control','placeholder' => 'Nombre', 'required' => 'required'])}}
                                    -->
                                    <div class="col-lg-10">{{  Form::select('nombre',null, ['class' => 'form-control', 'required' => 'required'])  }}

                                    </div>
                                </div>
                                <div class="form-group"><label class="col-lg-2 control-label">Descripcion</label>

                                    <div class="col-lg-10">
                                        {{  Form::text('descripcion',null, ['class' => 'form-control','placeholder' => 'Descripcion de la promocion','onkeydown'=>'costoTotal();', 'id' => 'kilos', 'required'])}}</div>
                                </div>
                                <div class="form-group"><label class="col-lg-2 control-label">Código</label>

                                    <div class="col-lg-10">
                                        {{  Form::text('codigo',null, ['class' => 'form-control','placeholder' => 'Codigo de la promocion', 'id' => 'kilos', 'required'])}}</div>
                                </div>


                                <div class="form-group">
                                    <div class="col-lg-offset-2 col-lg-10">
                                        <button class="btn btn-sm btn-white" type="submit">Actualizar</button>
                                    </div>
                                </div>
                            </form>

                    </div>

                </div>
                        </div>
                    </div>


    </div>

    <!-- Mainly scripts -->
    {{ HTML::script('asset/js/jquery-2.1.1.js') }}
    {{ HTML::script('asset/js/bootstrap.min.js') }}
    {{ HTML::script('asset/js/plugins/metisMenu/jquery.metisMenu.js') }}
    {{ HTML::script('asset/js/plugins/slimscroll/jquery.slimscroll.min.js') }}
    {{ HTML::script('asset/js/bootstrap-datepicker.js') }}
    {{ HTML::script('https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/locales/bootstrap-datepicker.es.min.js') }}
    <!-- Data Tables -->
    {{ HTML::script('asset/js/plugins/dataTables/jquery.dataTables.js') }}
    {{ HTML::script('asset/js/plugins/dataTables/dataTables.bootstrap.js') }}
    {{ HTML::script('asset/js/plugins/dataTables/dataTables.responsive.js') }}
    {{ HTML::script('asset/js/plugins/dataTables/dataTables.tableTools.min.js') }}

    <!-- Flot -->
    {{ HTML::script('asset/js/plugins/flot/jquery.flot.js') }}
    {{ HTML::script('asset/js/plugins/flot/jquery.flot.tooltip.min.js') }}
    {{ HTML::script('asset/js/plugins/flot/jquery.flot.spline.js') }}
    {{ HTML::script('asset/js/plugins/flot/jquery.flot.resize.js') }}
    {{ HTML::script('asset/js/plugins/flot/jquery.flot.pie.js') }}
    {{ HTML::script('asset/js/plugins/flot/jquery.flot.symbol.js') }}
    {{ HTML::script('asset/js/plugins/flot/jquery.flot.time.js') }}

    <!-- Peity -->
    {{ HTML::script('asset/js/plugins/peity/jquery.peity.min.js') }}
    {{ HTML::script('asset/js/demo/peity-demo.js') }}

    <!-- Custom and plugin javascript -->
    {{ HTML::script('asset/js/inspinia.js') }}
    {{ HTML::script('asset/js/plugins/pace/pace.min.js') }}

    <!-- jQuery UI -->
    {{ HTML::script('asset/js/plugins/jquery-ui/jquery-ui.min.js') }}

    <!-- Jvectormap -->
    {{ HTML::script('asset/js/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js') }}
    {{ HTML::script('asset/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}

    <!-- EayPIE -->
    {{ HTML::script('asset/js/plugins/easypiechart/jquery.easypiechart.js') }}

    <!-- Sparkline -->
    {{ HTML::script('asset/js/plugins/sparkline/jquery.sparkline.min.js') }}

    <!-- Sparkline demo data  -->
    {{ HTML::script('asset/js/demo/sparkline-demo.js') }}

    <!-- Data Tables -->
    {{ HTML::script('js/plugins/dataTables/jquery.dataTables.js') }}
    {{ HTML::script('js/plugins/dataTables/dataTables.bootstrap.js') }}
    {{ HTML::script('js/plugins/dataTables/dataTables.responsive.js') }}
    {{ HTML::script('js/plugins/dataTables/dataTables.tableTools.min.js') }}
    {{ HTML::script('https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.2/js/select2.min.js') }}




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

        }});


           $('.datepicker').datepicker();
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

        });

    </script>

    <script type="text/javascript">
    function costoTotal()
    {

        var kilos=document.getElementById("kilos").value;
        var piezas=document.getElementById("piezas").value;
        var costo= kilos*15+piezas*10;
        document.getElementById("costo2").innerHTML="$"+costo;
        $('#costo3').val(kilos*15+piezas*10);

    }
</script>
</body>
</html>
