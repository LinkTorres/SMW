<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRecolectoresTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('recolectores', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nombre', 50);
			$table->string('correo', 50)->unique();
			$table->string('password', 40);
			$table->integer('horario_id')->unsigned();
			$table->integer('ruta_id')->unsigned();
			$table->float('sueldo');
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
		Schema::drop('recolectores');
	}

}
