@extends('sesion')

@section('titulo')
 Busqueda
@stop

@section('scripts')

   {{ HTML::script('asset/js/angular.min.js') }}
   {{ HTML::script('asset/js/app/app.js') }}

@endsection

@section('contenido')

<br>
<br>


<div class="container" ng-app="Monitor"> 
	<div class="row" ng-controller="SerachCtrl">
		<div class="col-md-6">
			<h1>Directorio de clientes</h1>
			<label>Busqueda</label>
			<h3 ng-class="@{{ isSelected }}">@{{ searchInput }}  </h3>
			<input type="text" class="form-control" ng-model="searchInput" ng-change="search()" autofocus>
				
			<div ng-repeat="cliente in clientes" ng-class="{active: isSelect(cliente)} ">	
				<a href="#" class="list-group-item" ng-click="selecciono(cliente)">
					<h2>@{{ cliente.nombre }}</h2>
					<div class="list-group">
						<h4 class="list-group-heading">Télefono: @{{ cliente.telefono }}</h4>
						<p class="list-group-item-text">Correo  : @{{ cliente.correo }}</p>
					</div>	
				</a>
			</div>	
		</div>
	</div>
</div>


		
<br>
<br>
<br>
<br>
<br>
@stop	