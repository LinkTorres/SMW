@extends('monitor')

@section('titulo')
Promociones
@stop

@section('contenido')

<h2>Registrar Empresa</h2>

<form action="promociones" method="post">
<span>Nombre de la empresa</span><input class="form-control" type="text"><br>
<span>Nombre del contacto</span><input class="form-control" type="text" id="k5" name="k5"><br>
<span>Cargo</span><input class="form-control" type="text"><br>
<span>Correo</span><input class="form-control"type="email"><br>
<input type="submit" class="btn" value="Registrar"><br>
</form>

@stop        
