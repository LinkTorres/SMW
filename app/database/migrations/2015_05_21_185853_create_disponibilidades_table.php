<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDisponibilidadesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('disponibilidades', function(Blueprint $table)
		{
			$table->increments('id');
			$table->date('fecha');
			$table->time('hora');
			$table->time('salida');
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
		Schema::drop('disponibilidades');
	}

}
