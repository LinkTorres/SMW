@extends('monitor')

@section('titulo')
Promociones
@stop

@section('contenido')

<h2>Registrar Empleado</h2>

<form action="promociones" method="post">
<span>Nombre</span><input class="form-control" type="text"><br>
<span>Cumpleaños</span><input class="form-control" type="date" id="k5" name="k5"><br>
<span>Correo</span><input class="form-control"type="email"><br>
<span>Empresa</span> <select class="form-control">
  <option value="volvo">AeroMexico</option>
  <option value="saab">WTC</option>
</select> 
<input type="submit" class="btn" value="Registrar"><br>
</form>

@stop        
