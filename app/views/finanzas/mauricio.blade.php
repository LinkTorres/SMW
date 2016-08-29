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
    <script src="http://cdnjs.cloudflare.com/ajax/libs/numeral.js/1.4.5/numeral.min.js"></script>

     <style type="text/css">
        .table>thead:first-child>tr:first-child>th:first-child
{
    position: absolute;
    display: inline-block;
    border:none;
    height: 10%;
    width:100px;
}
.table> tbody > tr > td:first-child
{
    position: absolute;
    display: inline-block;
    border:none;
    height: 10%;
    background-color: #fff;
    width:100px;

}
.table>thead:first-child>tr:first-child>th:nth-child(2)
{
    padding-left:150px;
}
.table> tbody > tr > td:nth-child(2)
{
    padding-left:150px;

}
     </style>

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
                        <li><a href="./alrededores">Aledaños</a></li>
                        <li class="active">
                            <a href="index.html"><i class="fa fa-th-large"></i> <span class="nav-label">Recoleccion</span> <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li class="active"><a href="./pedidos">Pedidos</a></li>
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
                        <li><a href="./nomina">Nómina</a></li>
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
                    <a href="./logout">
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
                        <h5></h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="fa fa-wrench"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-user">
                                <li><a href="./altaCliente"></a>
                                </li>
                            </ul>
                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">
                        <?php
$recolector_nombre="";
$cliente="";
$piezas="";
$kilos="";
$descripcion="";
$costo="";
$p_id="";
$turno="" ?>

<div class="row">
    {{ HTML::style('https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css') }}</script>
    <center><h2>Ordenes y porcentajes</h2></center>

</div>

<br>

<br>

<div class="table-responsive">

    <table class="table table-hover table-bordered">
        <thead>
            <tr>
                <th>Mes</th>
                <th>Aledaños</th>
                <th>% Ventas</th>
                <th>% Crecimiento</th>
                <th>Recoleccion</th>
                <th>% Ventas</th>
                <th>% Crecimiento</th>
                <th>Corporativos</th>
                <th>% Ventas</th>
                <th>% Crecimiento</th>
                <th>Total</th>
                <th>% Crecimiento</th>
            </tr>
        </thead>
        <tbody>
          <tr>
            <td>Enero</td>
            <? $enero = $aleEne + $rec01 + $cor01; ?>
            <? $febrero = $ale02 + $rec02 + $cor02; ?>
            <? $marzo = $ale03 + $rec03 + $cor03; ?>
            <? $abril = $ale04 + $rec04 + $cor04; ?>
            <? $mayo = $ale05 + $rec05 + $cor05; ?>
            <? $junio = $ale06 + $rec06 + $cor06; ?>
            <? $julio = $ale07 + $rec07 + $cor07; ?>
            <? $agosto = $ale08 + $rec08 + $cor08; ?>
            <? $septiembre = $ale09 + $rec09 + $cor09; ?>
            <? $octubre = $ale10 + $rec10 + $cor10; ?>
            <? $noviembre = $ale11 + $rec11 + $cor11; ?>
            <? $diciembre = $ale12 + $rec12 + $cor12; ?>
            <? $total = $aleTotal + $recTotal + $corTotal; ?>
            <td><script>document.write(numeral({{ $aleEne }}).format('$ 0,0.00'));</script></td>
            <td><script>document.write(numeral(<? try{ echo $aleEne/$enero*100; }catch(Exception $e){ echo 0;} ?>).format('0.00'));</script> %</td>
            <td></td>
            <td><script>document.write(numeral({{ $rec01 }}).format('$ 0,0.00'));</script></td>
            <td><script>document.write(numeral(<? try{ echo $rec01/$enero*100; }catch(Exception $e){ echo 0;} ?>).format('0.00'));</script> %</td>
            <td></td>
            <td><script>document.write(numeral({{ $cor01 }}).format('$ 0,0.00'));</script></td>
            <td><script>document.write(numeral(<? try{ echo $cor01/$enero*100; }catch(Exception $e){ echo 0;} ?>).format('0.00'));</script> %</td>
            <td></td>
            <td><script>document.write(numeral({{ $enero }}).format('$ 0,0.00'));</script></td>
            <td></td>
          </tr>
          <tr>
            <td>Febrero</td>
            <td><script>document.write(numeral({{ $ale02 }}).format('$ 0,0.00'));</script></td>
            <td><script>document.write(numeral(<? try{ echo $ale02/$febrero*100; }catch(Exception $e){ echo 0;} ?>).format('0.00'));</script> %</td>
            <td><script>document.write(numeral(<? try{ echo ($ale02-$aleEne)/$ale02*100; }catch(Exception $e){ echo 0;} ?>).format('0.00'));</script> %</td>
            <td><script>document.write(numeral({{ $rec02 }}).format('$ 0,0.00'));</script></td>
            <td><script>document.write(numeral(<? try{ echo $rec02/$febrero*100; }catch(Exception $e){ echo 0;} ?>).format('0.00'));</script> %</td>
            <td><script>document.write(numeral(<? try{ echo ($rec02-$rec01)/$rec02*100; }catch(Exception $e){ echo 0;} ?>).format('0.00'));</script> %</td>
            <td><script>document.write(numeral({{ $cor02 }}).format('$ 0,0.00'));</script></td>
            <td><script>document.write(numeral(<? try{ echo $cor02/$febrero*100; }catch(Exception $e){ echo 0;} ?>).format('0.00'));</script> %</td>
            <td><script>document.write(numeral(<? try{ echo ($cor02-$cor01)/$cor02*100; }catch(Exception $e){ echo 0;} ?>).format('0.00'));</script> %</td>
            <td><script>document.write(numeral({{ $febrero }}).format('$ 0,0.00'));</script></td>
            <td><script>document.write(numeral(<? try{ echo ($febrero-$enero)/$febrero*100; }catch(Exception $e){ echo 0;} ?>).format('0.00'));</script> %</td>
          </tr>
          <tr>
            <td>Marzo</td>
            <td><script>document.write(numeral({{ $ale03 }}).format('$ 0,0.00'));</script></td>
            <td><script>document.write(numeral(<? try{ echo $ale03/$marzo*100; }catch(Exception $e){ echo 0;} ?>).format('0.00'));</script> %</td>
            <td><script>document.write(numeral(<? try{ echo ($ale03-$ale02)/$ale03*100; }catch(Exception $e){ echo 0;} ?>).format('0.00'));</script> %</td>
            <td><script>document.write(numeral({{ $rec03 }}).format('$ 0,0.00'));</script></td>
            <td><script>document.write(numeral(<? try{ echo $rec03/$marzo*100; }catch(Exception $e){ echo 0;} ?>).format('0.00'));</script> %</td>
            <td><script>document.write(numeral(<? try{ echo ($rec03-$rec02)/$rec03*100; }catch(Exception $e){ echo 0;} ?>).format('0.00'));</script> %</td>
            <td><script>document.write(numeral({{ $cor03 }}).format('$ 0,0.00'));</script></td>
            <td><script>document.write(numeral(<? try{ echo $cor03/$marzo*100; }catch(Exception $e){ echo 0;} ?>).format('0.00'));</script> %</td>
            <td><script>document.write(numeral(<? try{ echo ($cor03-$cor02)/$cor03*100; }catch(Exception $e){ echo 0;} ?>).format('0.00'));</script> %</td>
            <td><script>document.write(numeral({{ $marzo }}).format('$ 0,0.00'));</script></td>
            <td><script>document.write(numeral(<? try{ echo ($marzo-$febrero)/$marzo*100; }catch(Exception $e){ echo 0;} ?>).format('0.00'));</script> %</td>
          </tr>
          <tr>
            <td>Abril</td>
            <td><script>document.write(numeral({{ $ale04 }}).format('$ 0,0.00'));</script></td>
            <td><script>document.write(numeral(<? try{ echo $ale04/$abril*100; }catch(Exception $e){ echo 0;} ?>).format('0.00'));</script> %</td>
            <td><script>document.write(numeral(<? try{ echo ($ale04-$ale03)/$ale04*100; }catch(Exception $e){ echo 0;} ?>).format('0.00'));</script> %</td>
            <td><script>document.write(numeral({{ $rec04 }}).format('$ 0,0.00'));</script></td>
            <td><script>document.write(numeral(<? try{ echo $rec04/$abril*100; }catch(Exception $e){ echo 0;} ?>).format('0.00'));</script> %</td>
            <td><script>document.write(numeral(<? try{ echo ($rec04-$rec03)/$rec04*100; }catch(Exception $e){ echo 0;} ?>).format('0.00'));</script> %</td>
            <td><script>document.write(numeral({{ $cor04 }}).format('$ 0,0.00'));</script></td>
            <td><script>document.write(numeral(<? try{ echo $cor04/$abril*100; }catch(Exception $e){ echo 0;} ?>).format('0.00'));</script> %</td>
            <td><script>document.write(numeral(<? try{ echo ($cor04-$cor03)/$cor04*100; }catch(Exception $e){ echo 0;} ?>).format('0.00'));</script> %</td>
            <td><script>document.write(numeral({{ $abril }}).format('$ 0,0.00'));</script></td>
            <td><script>document.write(numeral(<? try{ echo ($abril-$marzo)/$abril*100; }catch(Exception $e){ echo 0;} ?>).format('0.00'));</script> %</td>
          </tr>
          <tr>
            <td>Mayo</td>
            <td><script>document.write(numeral({{ $ale05 }}).format('$ 0,0.00'));</script></td>
            <td><script>document.write(numeral(<? try{ echo $ale05/$mayo*100; }catch(Exception $e){ echo 0;} ?>).format('0.00'));</script> %</td>
            <td><script>document.write(numeral(<? try{ echo ($ale05-$ale04)/$ale05*100; }catch(Exception $e){ echo 0;} ?>).format('0.00'));</script> %</td>
            <td><script>document.write(numeral({{ $rec05 }}).format('$ 0,0.00'));</script></td>
            <td><script>document.write(numeral(<? try{ echo $rec05/$mayo*100; }catch(Exception $e){ echo 0;} ?>).format('0.00'));</script> %</td>
            <td><script>document.write(numeral(<? try{ echo ($rec05-$rec04)/$rec05*100; }catch(Exception $e){ echo 0;} ?>).format('0.00'));</script> %</td>
            <td><script>document.write(numeral({{ $cor05 }}).format('$ 0,0.00'));</script></td>
            <td><script>document.write(numeral(<? try{ echo $cor05/$mayo*100; }catch(Exception $e){ echo 0;} ?>).format('0.00'));</script> %</td>
            <td><script>document.write(numeral(<? try{ echo ($cor05-$cor04)/$cor05*100; }catch(Exception $e){ echo 0;} ?>).format('0.00'));</script> %</td>
            <td><script>document.write(numeral({{ $mayo }}).format('$ 0,0.00'));</script></td>
            <td><script>document.write(numeral(<? try{ echo ($mayo-$abril)/$mayo*100; }catch(Exception $e){ echo 0;} ?>).format('0.00'));</script> %</td>
          </tr>
          <tr>
            <td>Junio</td>
            <td><script>document.write(numeral({{ $ale06 }}).format('$ 0,0.00'));</script></td>
            <td><script>document.write(numeral(<? try{ echo $ale06/$junio*100; }catch(Exception $e){ echo 0;} ?>).format('0.00'));</script> %</td>
            <td><script>document.write(numeral(<? try{ echo ($ale06-$ale05)/$ale06*100; }catch(Exception $e){ echo 0;} ?>).format('0.00'));</script> %</td>
            <td><script>document.write(numeral({{ $rec06 }}).format('$ 0,0.00'));</script></td>
            <td><script>document.write(numeral(<? try{ echo $rec06/$junio*100; }catch(Exception $e){ echo 0;} ?>).format('0.00'));</script> %</td>
            <td><script>document.write(numeral(<? try{ echo ($rec06-$rec05)/$rec06*100; }catch(Exception $e){ echo 0;} ?>).format('0.00'));</script> %</td>
            <td><script>document.write(numeral({{ $cor06 }}).format('$ 0,0.00'));</script></td>
            <td><script>document.write(numeral(<? try{ echo $cor06/$junio*100; }catch(Exception $e){ echo 0;} ?>).format('0.00'));</script> %</td>
            <td><script>document.write(numeral(<? try{ echo ($cor06-$cor05)/$cor06*100; }catch(Exception $e){ echo 0;} ?>).format('0.00'));</script> %</td>
            <td><script>document.write(numeral({{ $junio }}).format('$ 0,0.00'));</script></td>
            <td><script>document.write(numeral(<? try{ echo ($junio-$mayo)/$junio*100; }catch(Exception $e){ echo 0;} ?>).format('0.00'));</script> %</td>
          </tr>
          <tr>
            <td>Julio</td>
            <td><script>document.write(numeral({{ $ale07 }}).format('$ 0,0.00'));</script></td>
            <td><script>document.write(numeral(<? try{ echo $ale07/$julio*100; }catch(Exception $e){ echo 0;} ?>).format('0.00'));</script> %</td>
            <td><script>document.write(numeral(<? try{ echo ($ale07-$ale06)/$ale07*100; }catch(Exception $e){ echo 0;} ?>).format('0.00'));</script> %</td>
            <td><script>document.write(numeral({{ $rec07 }}).format('$ 0,0.00'));</script></td>
            <td><script>document.write(numeral(<? try{ echo $rec07/$julio*100; }catch(Exception $e){ echo 0;} ?>).format('0.00'));</script> %</td>
            <td><script>document.write(numeral(<? try{ echo ($rec07-$rec06)/$rec07*100; }catch(Exception $e){ echo 0;} ?>).format('0.00'));</script> %</td>
            <td><script>document.write(numeral({{ $cor07 }}).format('$ 0,0.00'));</script></td>
            <td><script>document.write(numeral(<? try{ echo $cor07/$julio*100; }catch(Exception $e){ echo 0;} ?>).format('0.00'));</script> %</td>
            <td><script>document.write(numeral(<? try{ echo ($cor07-$cor06)/$cor07*100; }catch(Exception $e){ echo 0;} ?>).format('0.00'));</script> %</td>
            <td><script>document.write(numeral({{ $julio }}).format('$ 0,0.00'));</script></td>
            <td><script>document.write(numeral(<? try{ echo ($julio-$junio)/$julio*100; }catch(Exception $e){ echo 0;} ?>).format('0.00'));</script> %</td>
          </tr>
          <tr>
            <td>Agosto</td>
            <td><script>document.write(numeral({{ $ale08 }}).format('$ 0,0.00'));</script></td>
            <td><script>document.write(numeral(<? try{ echo $ale08/$agosto*100; }catch(Exception $e){ echo 0;} ?>).format('0.00'));</script> %</td>
            <td><script>document.write(numeral(<? try{ echo ($ale08-$ale07)/$ale08*100; }catch(Exception $e){ echo 0;} ?>).format('0.00'));</script> %</td>
            <td><script>document.write(numeral({{ $rec08 }}).format('$ 0,0.00'));</script></td>
            <td><script>document.write(numeral(<? try{ echo $rec08/$agosto*100; }catch(Exception $e){ echo 0;} ?>).format('0.00'));</script> %</td>
            <td><script>document.write(numeral(<? try{ echo ($rec08-$rec07)/$rec08*100; }catch(Exception $e){ echo 0;} ?>).format('0.00'));</script> %</td>
            <td><script>document.write(numeral({{ $cor08 }}).format('$ 0,0.00'));</script></td>
            <td><script>document.write(numeral(<? try{ echo $cor08/$agosto*100; }catch(Exception $e){ echo 0;} ?>).format('0.00'));</script> %</td>
            <td><script>document.write(numeral(<? try{ echo ($cor08-$cor07)/$cor08*100; }catch(Exception $e){ echo 0;} ?>).format('0.00'));</script> %</td>
            <td><script>document.write(numeral({{ $agosto }}).format('$ 0,0.00'));</script></td>
            <td><script>document.write(numeral(<? try{ echo ($agosto-$julio)/$agosto*100; }catch(Exception $e){ echo 0;} ?>).format('0.00'));</script> %</td>
          </tr>
          <tr>
            <td>Septiembre</td>
            <td><script>document.write(numeral({{ $ale09 }}).format('$ 0,0.00'));</script></td>
            <td><script>document.write(numeral(<? try{ echo $ale09/$septiembre*100; }catch(Exception $e){ echo 0;} ?>).format('0.00'));</script> %</td>
            <td><script>document.write(numeral(<? try{ echo ($ale09-$ale08)/$ale09*100; }catch(Exception $e){ echo 0;} ?>).format('0.00'));</script> %</td>
            <td><script>document.write(numeral({{ $rec09 }}).format('$ 0,0.00'));</script></td>
            <td><script>document.write(numeral(<? try{ echo $rec09/$septiembre*100; }catch(Exception $e){ echo 0;} ?>).format('0.00'));</script> %</td>
            <td><script>document.write(numeral(<? try{ echo ($rec09-$rec08)/$rec09*100; }catch(Exception $e){ echo 0;} ?>).format('0.00'));</script> %</td>
            <td><script>document.write(numeral({{ $cor09 }}).format('$ 0,0.00'));</script></td>
            <td><script>document.write(numeral(<? try{ echo $cor09/$septiembre*100; }catch(Exception $e){ echo 0;} ?>).format('0.00'));</script> %</td>
            <td><script>document.write(numeral(<? try{ echo ($cor09-$cor08)/$cor09*100; }catch(Exception $e){ echo 0;} ?>).format('0.00'));</script> %</td>
            <td><script>document.write(numeral({{ $septiembre }}).format('$ 0,0.00'));</script></td>
            <td><script>document.write(numeral(<? try{ echo ($septiembre-$agosto)/$septiembre*100; }catch(Exception $e){ echo 0;} ?>).format('0.00'));</script> %</td>
          </tr>
          <tr>
            <td>Octubre</td>
            <td><script>document.write(numeral({{ $ale10 }}).format('$ 0,0.00'));</script></td>
            <td><script>document.write(numeral(<? try{ echo $ale10/$octubre*100; }catch(Exception $e){ echo 0;} ?>).format('0.00'));</script> %</td>
            <td><script>document.write(numeral(<? try{ echo ($ale10-$ale09)/$ale10*100; }catch(Exception $e){ echo 0;} ?>).format('0.00'));</script> %</td>
            <td><script>document.write(numeral({{ $rec10 }}).format('$ 0,0.00'));</script></td>
            <td><script>document.write(numeral(<? try{ echo $rec10/$octubre*100; }catch(Exception $e){ echo 0;} ?>).format('0.00'));</script> %</td>
            <td><script>document.write(numeral(<? try{ echo ($rec10-$rec09)/$rec10*100; }catch(Exception $e){ echo 0;} ?>).format('0.00'));</script> %</td>
            <td><script>document.write(numeral({{ $cor10 }}).format('$ 0,0.00'));</script></td>
            <td><script>document.write(numeral(<? try{ echo $cor10/$octubre*100; }catch(Exception $e){ echo 0;} ?>).format('0.00'));</script> %</td>
            <td><script>document.write(numeral(<? try{ echo ($cor10-$cor09)/$cor10*100; }catch(Exception $e){ echo 0;} ?>).format('0.00'));</script> %</td>
            <td><script>document.write(numeral({{ $octubre }}).format('$ 0,0.00'));</script></td>
            <td><script>document.write(numeral(<? try{ echo ($octubre-$septiembre)/$octubre*100; }catch(Exception $e){ echo 0;} ?>).format('0.00'));</script> %</td>
          </tr>
          <tr>
            <td>Noviembre</td>
            <td><script>document.write(numeral({{ $ale11 }}).format('$ 0,0.00'));</script></td>
            <td><script>document.write(numeral(<? try{ echo $ale11/$noviembre*100; }catch(Exception $e){ echo 0;} ?>).format('0.00'));</script> %</td>
            <td><script>document.write(numeral(<? try{ echo ($ale11-$ale10)/$ale11*100; }catch(Exception $e){ echo 0;} ?>).format('0.00'));</script> %</td>
            <td><script>document.write(numeral({{ $rec11 }}).format('$ 0,0.00'));</script></td>
            <td><script>document.write(numeral(<? try{ echo $rec11/$noviembre*100; }catch(Exception $e){ echo 0;} ?>).format('0.00'));</script> %</td>
            <td><script>document.write(numeral(<? try{ echo ($rec11-$ale10)/$rec11*100; }catch(Exception $e){ echo 0;} ?>).format('0.00'));</script> %</td>
            <td><script>document.write(numeral({{ $cor11 }}).format('$ 0,0.00'));</script></td>
            <td><script>document.write(numeral(<? try{ echo $cor11/$noviembre*100; }catch(Exception $e){ echo 0;} ?>).format('0.00'));</script> %</td>
            <td><script>document.write(numeral(<? try{ echo ($cor11-$cor10)/$cor11*100; }catch(Exception $e){ echo 0;} ?>).format('0.00'));</script> %</td>
            <td><script>document.write(numeral({{ $noviembre }}).format('$ 0,0.00'));</script></td>
            <td><script>document.write(numeral(<? try{ echo ($noviembre-$octubre)/$noviembre*100; }catch(Exception $e){ echo 0;} ?>).format('0.00'));</script> %</td>
          </tr>
          <tr>
            <td>Diciembre</td>
            <td><script>document.write(numeral({{ $ale12 }}).format('$ 0,0.00'));</script></td>
            <td><script>document.write(numeral(<? try{ echo $ale12/$diciembre*100; }catch(Exception $e){ echo 0;} ?>).format('0.00'));</script> %</td>
            <td><script>document.write(numeral(<? try{ echo ($ale12-$ale11)/$ale12*100; }catch(Exception $e){ echo 0;} ?>).format('0.00'));</script> %</td>
            <td><script>document.write(numeral({{ $rec12 }}).format('$ 0,0.00'));</script></td>
            <td><script>document.write(numeral(<? try{ echo $rec12/$diciembre*100; }catch(Exception $e){ echo 0;} ?>).format('0.00'));</script> %</td>
            <td><script>document.write(numeral(<? try{ echo ($rec12-$rec11)/$rec12*100; }catch(Exception $e){ echo 0;} ?>).format('0.00'));</script> %</td>
            <td><script>document.write(numeral({{ $cor12 }}).format('$ 0,0.00'));</script></td>
            <td><script>document.write(numeral(<? try{ echo $cor12/$diciembre*100; }catch(Exception $e){ echo 0;} ?>).format('0.00'));</script> %</td>
            <td><script>document.write(numeral(<? try{ echo ($cor12-$cor11)/$cor12*100; }catch(Exception $e){ echo 0;} ?>).format('0.00'));</script> %</td>
            <td><script>document.write(numeral({{ $diciembre }}).format('$ 0,0.00'));</script></td>
            <td><script>document.write(numeral(<? try{ echo ($diciembre-$noviembre)/$diciembre*100; }catch(Exception $e){ echo 0;} ?>).format('0.00'));</script> %</td>
          </tr>
          <tr>
            <td>Total</td>
            <td><script>document.write(numeral({{ $aleTotal }}).format('$ 0,0.00'));</script></td>
            <td><script>document.write(numeral(<? try{ echo $aleTotal/$total*100; }catch(Exception $e){ echo 0;} ?>).format('0.00'));</script> %</td>
            <td></td>
            <td><script>document.write(numeral({{ $recTotal }}).format('$ 0,0.00'));</script></td>
            <td><script>document.write(numeral(<? try{ echo $recTotal/$total*100; }catch(Exception $e){ echo 0;} ?>).format('0.00'));</script> %</td>
            <td></td>
            <td><script>document.write(numeral({{ $corTotal }}).format('$ 0,0.00'));</script></td>
            <td><script>document.write(numeral(<? try{ echo $corTotal/$total*100; }catch(Exception $e){ echo 0;} ?>).format('0.00'));</script> %</td>
            <td></td>
            <td><script>document.write(numeral({{ $total }}).format('$ 0,0.00'));</script></td>
            <td></td>
          </tr>
       </tbody>
    </table>



</div>

<div class="modal fade" id="mdalSuccessEntrega" style="display:none" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">

                <h4 class="modal-title">Entrega</h4>
            </div>
            <div class="modal-body">
                Se ha asignado al recolector para la entrega de la orden.
            </div>
            <div class="modal-footer">
                {{ HTML::link('pedidos', 'Aceptar', array('class' => 'btn btn-success')); }}).format('$ 0,0.00'));</script>

            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="mdalSuccessEstablecimiento" style="display:none" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">

                <h4 class="modal-title">Orden Recibida</h4>
            </div>
            <div class="modal-body">
                La orden ha sido recibida en el establecimiento.
            </div>
            <div class="modal-footer">
                {{ HTML::link('pedidos', 'Aceptar', array('class' => 'btn btn-success')); }}).format('$ 0,0.00'));</script>

            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="mdalSuccessAsignacion" style="display:none" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">

                <h4 class="modal-title">Asignación Recolector</h4>
            </div>
            <div class="modal-body">
                Se ha efectuado la asignación del recolector.
            </div>
            <div class="modal-footer">
                {{ HTML::link('pedidos', 'Aceptar', array('class' => 'btn btn-success')); }}).format('$ 0,0.00'));</script>

            </div>
        </div>
    </div>
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
    <script src="asset/js/sesion.js"></script>
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
            $('.chart').easyPieChart({
                barColor: '#f8ac59',
//                scaleColor: false,
                scaleLength: 5,
                lineWidth: 4,
                size: 80
            });

            $('.chart2').easyPieChart({
                barColor: '#1c84c6',
//                scaleColor: false,
                scaleLength: 5,
                lineWidth: 4,
                size: 80
            });

            var data2 = [
                [gd(2012, 1, 1), 7], [gd(2012, 1, 2), 6], [gd(2012, 1, 3), 4], [gd(2012, 1, 4), 8],
                [gd(2012, 1, 5), 9], [gd(2012, 1, 6), 7], [gd(2012, 1, 7), 5], [gd(2012, 1, 8), 4],
                [gd(2012, 1, 9), 7], [gd(2012, 1, 10), 8], [gd(2012, 1, 11), 9], [gd(2012, 1, 12), 6],
                [gd(2012, 1, 13), 4], [gd(2012, 1, 14), 5], [gd(2012, 1, 15), 11], [gd(2012, 1, 16), 8],
                [gd(2012, 1, 17), 8], [gd(2012, 1, 18), 11], [gd(2012, 1, 19), 11], [gd(2012, 1, 20), 6],
                [gd(2012, 1, 21), 6], [gd(2012, 1, 22), 8], [gd(2012, 1, 23), 11], [gd(2012, 1, 24), 13],
                [gd(2012, 1, 25), 7], [gd(2012, 1, 26), 9], [gd(2012, 1, 27), 9], [gd(2012, 1, 28), 8],
                [gd(2012, 1, 29), 5], [gd(2012, 1, 30), 8], [gd(2012, 1, 31), 25]
            ];

            var data3 = [
                [gd(2012, 1, 1), 800], [gd(2012, 1, 2), 500], [gd(2012, 1, 3), 600], [gd(2012, 1, 4), 700],
                [gd(2012, 1, 5), 500], [gd(2012, 1, 6), 456], [gd(2012, 1, 7), 800], [gd(2012, 1, 8), 589],
                [gd(2012, 1, 9), 467], [gd(2012, 1, 10), 876], [gd(2012, 1, 11), 689], [gd(2012, 1, 12), 700],
                [gd(2012, 1, 13), 500], [gd(2012, 1, 14), 600], [gd(2012, 1, 15), 700], [gd(2012, 1, 16), 786],
                [gd(2012, 1, 17), 345], [gd(2012, 1, 18), 888], [gd(2012, 1, 19), 888], [gd(2012, 1, 20), 888],
                [gd(2012, 1, 21), 987], [gd(2012, 1, 22), 444], [gd(2012, 1, 23), 999], [gd(2012, 1, 24), 567],
                [gd(2012, 1, 25), 786], [gd(2012, 1, 26), 666], [gd(2012, 1, 27), 888], [gd(2012, 1, 28), 900],
                [gd(2012, 1, 29), 178], [gd(2012, 1, 30), 555], [gd(2012, 1, 31), 993]
            ];


            var dataset = [
                {
                    label: "Numero de Ordenes",
                    data: data3,
                    color: "#1ab394",
                    bars: {
                        show: true,
                        align: "center",
                        barWidth: 24 * 60 * 60 * 600,
                        lineWidth:0
                    }

                }, {
                    label: "Pagos",
                    data: data2,
                    yaxis: 2,
                    color: "#1C84C6",
                    lines: {
                        lineWidth:1,
                            show: true,
                            fill: true,
                        fillColor: {
                            colors: [{
                                opacity: 0.2
                            }, {
                                opacity: 0.4
                            }]
                        }
                    },
                    splines: {
                        show: false,
                        tension: 0.6,
                        lineWidth: 1,
                        fill: 0.1
                    },
                }
            ];


            var options = {
                xaxis: {
                    mode: "time",
                    tickSize: [3, "day"],
                    tickLength: 0,
                    axisLabel: "Date",
                    axisLabelUseCanvas: true,
                    axisLabelFontSizePixels: 12,
                    axisLabelFontFamily: 'Arial',
                    axisLabelPadding: 10,
                    color: "#d5d5d5"
                },
                yaxes: [{
                    position: "left",
                    max: 1070,
                    color: "#d5d5d5",
                    axisLabelUseCanvas: true,
                    axisLabelFontSizePixels: 12,
                    axisLabelFontFamily: 'Arial',
                    axisLabelPadding: 3
                }, {
                    position: "right",
                    clolor: "#d5d5d5",
                    axisLabelUseCanvas: true,
                    axisLabelFontSizePixels: 12,
                    axisLabelFontFamily: ' Arial',
                    axisLabelPadding: 67
                }
                ],
                legend: {
                    noColumns: 1,
                    labelBoxBorderColor: "#000000",
                    position: "nw"
                },
                grid: {
                    hoverable: false,
                    borderWidth: 0
                }
            };

            function gd(year, month, day) {
                return new Date(year, month - 1, day).getTime();
            }

            var previousPoint = null, previousLabel = null;

            $.plot($("#flot-dashboard-chart"), dataset, options);

            var mapData = {
                "US": 298,
                "SA": 200,
                "DE": 220,
                "FR": 540,
                "CN": 120,
                "AU": 760,
                "BR": 550,
                "IN": 200,
                "GB": 120,
            };

            $('#world-map').vectorMap({
                map: 'world_mill_en',
                backgroundColor: "transparent",
                regionStyle: {
                    initial: {
                        fill: '#e4e4e4',
                        "fill-opacity": 0.9,
                        stroke: 'none',
                        "stroke-width": 0,
                        "stroke-opacity": 0
                    }
                },

                series: {
                    regions: [{
                        values: mapData,
                        scale: ["#1ab394", "#22d6b1"],
                        normalizeFunction: 'polynomial'
                    }]
                },
            });
        });
    </script>
</body>
</html>
