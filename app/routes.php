<?php

use Monitor\Entities\User;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|

*/

Route::get('/', function()
{
	return View::make('login');
});

Route::get('principal', ['as'=> 'principal','uses'=>'HomeController@principal']);
Route::get('orden',['as'=> 'orden','uses'=>'HomeController@orden']);


Route::get('login', 'AuthController@showLogin'); // Mostrar login
//'AuthController@login'
Route::post('login', ['as'=> 'login','uses'=>'AuthController@login']); // Verificar datos
Route::get('logout', 'AuthController@logOut'); // Finalizar sesión


Route::group(['before' => 'auth'], function()
{


		Route::get('correo',['as'=> 'correo','uses'=>'HomeController@correo']);

		Route::get('historial','HomeController@historial');
		Route::get('nuevoMes','HorariosController@create');
		
		

		Route::get('monitor',['as'=> 'monitor','uses'=>'MonitorController@monitor']);
		
		



		Route::get('manager','HomeController@manager');
		
		
		Route::get('recolector',['as'=> 'recolector','uses'=>'HomeController@recolector']);
		
		
		Route::get('index','HomeController@usuario');

		

		Route::resource('orden','OrdenController');
		Route::get('create.orden',['as'=> 'create.orden','uses'=>'OrdenController@create']);
		Route::post('create.orden',['as'=> 'create.orden','uses'=>'OrdenController@store']);
		

		Route::get('pedidos',['as'=> 'pedidos','uses'=>'PedidoController@index']);
		Route::get('pedidoRecolecciónCancelada/{id}',['as'=> 'cancelarRecoleccion','uses'=>'PedidosController@cancelarRecoleccion']);

		Route::get('pedidoEntregaCancelada/{id}',['as'=> 'cancelarEntrega','uses'=>'PedidosController@cancelarEntrega']);
		Route::get('pedidoOrdenCancelada/{id}',['as'=> 'cancelarOrden','uses'=>'PedidosController@cancelarOrden']);


		Route::get('zonas',['as'=> 'zonas','uses'=>'ZonasController@index']);

		Route::get('rutas/', 'RutasController@index');
		Route::get('rutas/{slug}/{id}', 'RutasController@show');
		Route::post('rutas/{id}',['as'=> 'actualizaRuta','uses'=>'RutasController@update']);
		Route::get('rutas/{id}',['as'=> 'edit','uses'=>'RutasController@edit']);
		Route::post('altaRutas',['as'=> 'altaRutas','uses'=>'RutasController@store']);
		Route::get('altaRutas',['as'=> 'altaRutas','uses'=>'RutasController@create']);


		Route::post('altaCliente',['as'=> 'altaCliente','uses'=>'ClientesController@store']);
		Route::get('altaCliente',['as'=> 'altaCliente','uses'=>'ClientesController@create']);
		//Clientes



		Route::get('clientes', ['as'=> 'clientes','uses'=>'ClientesController@index']);
		Route::get('clientes/{slug}/{id}', 'ClientesController@show');
		Route::get('clientes/{id}',['as'=> 'editarCliente','uses'=>'ClientesController@edit']);
		Route::put('clientes/{id}',['as'=> 'actualizaCliente','uses'=>'ClientesController@update']);


		Route::get('recolectors', ['as'=> 'recolectors','uses'=>'RecolectorsController@index']);
		Route::get('altaRecolector',['as'=> 'altaRecolector','uses'=>'RecolectorsController@create']);
		Route::post('altaRecolector',['as'=> 'altaRecolector','uses'=>'RecolectorsController@store']);
		Route::get('recolectors/{id}',['as'=> 'editarRecolector','uses'=>'RecolectorsController@edit']);

		Route::get('recolectors/{slug}/{id}', 'RecolectorsController@show');

		Route::put('recolectors/{id}',['as'=> 'actualizarRecolector','uses'=>'RecolectorsController@update']);

		Route::resource('servicios','ServiciosController');
		
		Route::resource('pedidos','PedidosController');
		Route::get('create.pedidos',['as'=> 'create.pedidos','uses'=>'PedidosController@create']);
		Route::post('create.pedidos',['as'=> 'create.pedidos','uses'=>'PedidosController@store']);

		Route::resource('lavado','LavadoController');
		Route::get('create.lavado',['as'=> 'create.lavado','uses'=>'LavadoController@create']);
		Route::post('create.lavado',['as'=> 'create.lavado','uses'=>'LavadoController@store']);
		

		Route::resource('planchado','PlanchadoController');
		Route::get('create.planchado',['as'=> 'create.planchado','uses'=>'PlanchadoController@create']);
		Route::post('create.planchado',['as'=> 'create.planchado','uses'=>'PlanchadoController@store']);

		Route::get('search', function () {
			return View::make('search');
		});

			Route::get('recolectado', function () {
				$data= Input::all();
				dd($data);
			});
			
			
		Route::get('results', function () {
			$name = Input::get('nombre');
			$clientes = Monitor\Entities\Cliente::where('nombre', 'LIKE', '%' . $name . '%' )->take(5)->get();
			return Response::json($clientes);
		});
		
			Route::post('disponible', function () {
				
				$fecha= Input::get();
				Log::info('Valor de arreglo');
				Log::info($fecha);
				$num=(int)$fecha['col2'];
				
				date_default_timezone_set('America/Mexico_City');
				setlocale(LC_TIME, 'spanish');
				$hoy=  date('Y-m-d');
				$hora = "9:00:00";
			
				if(strcmp($fecha['fecha'],$hoy)==0)
				{
					$hora=  date('H:m');
				}
				if($num<4){	
				Log::info('Zona A');								
				$disponible = Monitor\Entities\Disponibilidads::leftJoin('horas', 'disponibilidads.hora_id' , '=', 'horas.id')->where('fecha' ,'=', $fecha['fecha'])
																->where('disponible','=',0)->where('Zona','A')->where('hora','>=',$hora)->get();
				}
				else{
				Log::info('Zona B');								
				$disponible = Monitor\Entities\Disponibilidads::leftJoin('horas', 'disponibilidads.hora_id' , '=', 'horas.id')->where('fecha' ,'=', $fecha['fecha'])
																->where('disponible','=',0)->where('Zona','B')->where('hora','>=',$hora)->get();	
				}

				$horarios= array();
				foreach ($disponible as $horario){
					$horarios[$horario['id']]=$horario['id'];
					$horarios[$horario['id']]=$horario['fecha'];
					$horarios[$horario['id']]=$horario['hora'];
					
				}
				return Response::json($disponible);
			});


});

App::missing(function($exception)
{
    return Response::view('404', array(), 404);
});
	


