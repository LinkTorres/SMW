<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFechaServiciosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('fechaServicios', function(Blueprint $table)
		{
			$table->increments('id');
			$table->date('fecha');
			$table->time('hora');
			$table->time('salida');
			$table->string('direccion', 100);
			$table->integer('descripcion_id')->unsigned();
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('fechaServicios');
	}

}
