@extends('sesion')

@section('titulo')
  Rutas
@stop

@section('contenido')

<br>
<br>

<div aria-multiselectable="true" role="tablist" id="div_Rutas" class="panel-group">
	
	@foreach ($rutas as $ruta)
	
      <div class="panel panel-default">
      <!--Principio del encabezado -->
        <div id="hc_{{ $ruta->id }}" role="tab" class="panel-heading">
          <h4 class="panel-title" id="gc_{{ $ruta->id }}">
            <a aria-controls="div_z{{ $ruta->id }}" aria-expanded="true" href="#div_z{{ $ruta->id }}" data-parent="#div_Rutas" data-toggle="collapse">
              {{ $ruta->id }} .- {{ $ruta->ruta }}
            </a>
          <a href="#gc_{{ $ruta->id }}" class="anchorjs-link"><span class="anchorjs-icon"></span></a></h4>
        </div>
        <div aria-labelledby="hc_{{ $ruta->id }}" role="tabpanel" class="panel-collapse collapse" id="div_z{{ $ruta->id }}">
          <div class="panel-body">
          <!--Contenido del Accordion-->
	           <div class="table-responsive">
				<table class="table table-hover">
					<tbody>
						<tr>
							<td>Ruta:</td>
							<td>{{ $ruta->ruta }}</td>
						</tr>
						<tr>
							<td>Zona</td>
							<td>{{ $ruta->zona->zona }}</td>
						</tr>
						<tr>
							<td>Slug</td>
							<td>{{  \Str::slug($ruta->ruta)  }} </td>
						</tr>
						<tr>
							<td>Editar</td>
							<td> --- </td>
						</tr>	      	
					</tbody>
				</table>
			</div>

          </div>
        </div>
      </div>
    @endforeach  
	</div>


	
</div>

@stop	