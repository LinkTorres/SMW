<html>
<head>
    <meta charset="utf-8">
    </head>
<body>
	<div style="width:100%; background-color:#4b3048"><center><img src="http://mintwash.com.mx/img/logo.png"></center></div>
	
	<h1> {{ $cliente }} haz realizado una orden en Mint Wash</h1>

	<h3>A continuación los detalles de tu orden: </h3>

	<p>

      
      
    Ticket #{{ $ticket }}<br>
    Orden levantada el {{ $creado }}<br>
    Servicio de {{ $servicio }}<br>
    Fecha de Recolección: {{ $recoleccion }} a las {{ $hora_recoleccion }}<br>
    Fecha de Entrega: {{ $fecha_entrega }} a las {{ $hora_entrega }}<br>
	Dirección de recolección: {{ $direccion }}
	Colonia {{ $colonia }}  <br>
	Especificaciones {{ $especificacion }}

	Te recordamos que nuestro recolector no trae mas de $200 pesos en cambio. 
	</p>

	

	<div style="width:100%; height:20px; background-color:#1ABC9C; text-align: left; color:white;"><span style="padding-left:10px;">#LoHacemosPorTi  </span></div>
<br><br>
	<div style="font-size:10px;">Si deseas conocer nuestro aviso de privacidad puedes consultarlo en mintwash.com.mx</div>





</body>
</hmtl>