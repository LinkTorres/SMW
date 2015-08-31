'use strict'
var Monitor = angular.module('Monitor', []);

Monitor.controller('SerachCtrl', function ($scope,$http)
{

	$scope.search = function () {

	$http.get('results',{
		params: { nombre: $scope.searchInput }
		
		}).success( function (data) {
			$scope.clientes = data;

		});	
	};

	$scope.selecciono = function(cliente) {
        $scope.selected = cliente;
        console.log('Se asigno a Set master cliente '+ cliente.id);
        $scope.searchInput= cliente.nombre;
        $scope.iptcliente=cliente.id;
        $scope.iptDireccion="Direccion: " + cliente.direccion;
        $scope.clientes=null;
    };

  	

});