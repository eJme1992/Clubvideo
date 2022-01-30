<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeasonTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('season', function (Blueprint $table) {
			$table->increments('id');
			$table->integer('serie_id')->unsigned();
			$table->foreign('serie_id')
			 ->references('id')->on('movies_and_series')
				 ->onUpdate('cascade')
				 ->onDelete('cascade');
			$table->integer('chapters');
			$table->text('descriptions');
			$table->float('score', 8, 2);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('season');
	}
}
