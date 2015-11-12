@extends('monitor')

@section('titulo')
Promociones
@stop

@section('contenido')

<h2>Descuentos</h2>

<h3> Groupon </h3>


<form action="promociones" method="post">
<span>Numero de orden</span><input class="form-control" type="text"><br>
<span>5 Kilos</span><input class="form-control" type="number" min="0" max="5" id="k5" name="k5"><br>
<span>10 Kilos</span><input class="form-control" type="number" min="0" max="5"><br>
<span>Docena de planchado</span><input class="form-control"type="number" min="0" max="5"><br>
<span>Lavado y planchado</span><input class="form-control"type="number" min="0" max="5"><br>
<span>Codigo</span><input class="form-control"type="text"><br>
<input type="submit" class="btn" value="Actualizar"><br>
</form>

@stop        
