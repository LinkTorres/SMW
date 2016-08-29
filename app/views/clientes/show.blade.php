<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Mint Wash</title>

    <link href="../../asset/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha256-k2/8zcNbxVIh5mnQ52A0r3a6jAgMGxFJFE2707UxGCk= sha512-ZV9KawG2Legkwp3nAlxLIVFudTauWuBpC10uEafMHYL0Sarrz5A7G79kXh5+5+woxQ5HM559XX2UZjMJ36Wplg==" crossorigin="anonymous">

    <link href="../../asset/css/animate.css" rel="stylesheet">
    <link href="../../asset/css/style.css" rel="stylesheet">

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
<h1>Datos del Cliente</h1>


<div class="col-md-6">


{{ HTML::linkAction('ClientesController@edit', 'Modificar datos del Cliente', array($cliente->id),array('class' => 'btn btn-warning')) }}


{{ Form::model($cliente,array()) }}


<div class="form-group">
{{  Form::label('nombre', 'Nombre Completo') }}
{{  Form::text('nombre',null, ['class' => 'form-control', 'disabled'])}}


</div>

<div class="form-group">
{{  Form::label('direccion', 'Dirección') }}
{{  Form::text('direccion',null, ['class' => 'form-control','disabled'])}}


</div>

<div class="form-group">
{{  Form::label('nacimiento', 'Fecha de Nacimiento') }}
{{  Form::text('nacimiento',null, ['class' => 'form-control','disabled'])}}


</div>

<div class="form-group">
{{  Form::label('correo', 'Correo') }}
{{  Form::email('correo', null, ['class' => 'form-control','disabled'])}}



</div>

<div class="form-group">
{{  Form::label('telefono', 'Teléfono') }}
{{  Form::text('telefono', null, ['class' => 'form-control','disabled'])}}



</div>

<div class="form-group">
{{  Form::label('ruta_id', 'Colonia') }}
{{ Form::select('ruta_id',$rutas,null,['class'=> 'input-sm','disabled'],$cliente->ruta_id) }}

</div>

{{ Form::close() }}
</div>
</div>

	             <div class="row">
                <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Historial de Cortesias</h5>
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
<script>var monthNames = [
  "Enero", "Febrero", "Marzo",
  "Abril", "Mayo", "Junio", "Julio",
  "Agosto", "Septiembre", "Octubre",
  "Noviembre", "Diciembre"
];</script>
                        <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover dataTables-example" >
                    <thead>
                    <tr>
                      <th>Fecha</th>
                      <th>Tipo de Servicio</th>
                      <th>Costo</th>
                      <th>Lavado</th>
                      <th>Planchado</th>
                    </tr>
                    </thead>
                    <tbody>
                      @foreach ($pedidos as $pedido)
                    <tr>
                        <td>
                          <script>


                          var date = new Date("{{ $pedido->fecha }}");
                          var day = date.getDate();
                          var monthIndex = date.getMonth();
                          var year = date.getFullYear();
                          document.write(day+" - "+monthNames[monthIndex]+" - "+year);
                          </script>
                          </td>
                        <td>{{ $pedido->servicio }}</td>
                        <td>${{ $pedido->monto }}</td>
                        <td>{{ $pedido->kilos }} Kilos</td>
                        <td>{{ $pedido->piezas }} Piezas</td>

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
    <!-- Mainly scripts -->
    <script src="../../asset/js/jquery-2.1.1.js"></script>
    <script src="../../asset/js/bootstrap.min.js"></script>
    <script src="../../asset/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="../../asset/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Flot -->
    <script src="../../asset/js/plugins/flot/jquery.flot.js"></script>
    <script src="../../asset/js/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="../../asset/js/plugins/flot/jquery.flot.spline.js"></script>
    <script src="../../asset/js/plugins/flot/jquery.flot.resize.js"></script>
    <script src="../../asset/js/plugins/flot/jquery.flot.pie.js"></script>
    <script src="../../asset/js/plugins/flot/jquery.flot.symbol.js"></script>
    <script src="../../asset/js/plugins/flot/jquery.flot.time.js"></script>

    <!-- Peity -->
    <script src="../../asset/js/plugins/peity/jquery.peity.min.js"></script>
    <script src="../../asset/js/demo/peity-demo.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="../../asset/js/inspinia.js"></script>
    <!--<script src="../../asset/js/plugins/pace/pace.min.js"></script>-->

    <!-- jQuery UI -->
    <script src="../../asset/js/plugins/jquery-ui/jquery-ui.min.js"></script>

    <!-- Jvectormap -->
    <script src="../../asset/js/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="../../asset/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>

    <!-- EayPIE -->
    <script src="../../asset/js/plugins/easypiechart/jquery.easypiechart.js"></script>

    <!-- Sparkline -->
    <script src="../../asset/js/plugins/sparkline/jquery.sparkline.min.js"></script>

    <!-- Sparkline demo data  -->
    <script src="../../asset/js/demo/sparkline-demo.js"></script>

    <!-- Data Tables -->
    <script src="../../asset/js/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="../../asset/js/plugins/dataTables/dataTables.bootstrap.js"></script>
    <script src="../../asset/js/plugins/dataTables/dataTables.responsive.js"></script>
    <script src="../../asset/js/plugins/dataTables/dataTables.tableTools.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.2/js/select2.min.js"></script>




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
