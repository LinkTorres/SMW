@extends('monitor')

@section('titulo')
Promociones
@stop

@section('contenido')

<h2>Pedidos Corporativos</h2>

<form action="promociones" method="post">
<span>Empresa</span> <select class="form-control">
  <option value="volvo">AeroMexico</option>
  <option value="saab">WTC</option>
</select> 
<span>Empleado</span> <select class="form-control">
  <option value="volvo">Juan Hernandez</option>
  <option value="saab">Javier Ramos</option>
</select> 


<span>Lavado</span><input class="form-control" type="number" min="0" max="5" id="k5" name="k5">KG<br> 
<span>Planchado</span><input class="form-control" type="number" min="0" max="5">Piezas<br>
<span>Lavado y planchado</span><input class="form-control"type="number" min="0" max="5">Piezas<br>

<label> Costo $</label>

<input type="submit" class="btn" value="Registrar"><br>
</form>

@stop        
