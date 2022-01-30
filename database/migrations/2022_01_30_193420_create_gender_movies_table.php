<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGenderMoviesTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('gender_movies', function (Blueprint $table) {
			$table->increments('id');
			$table->integer('movie_id')->unsigned();
			$table->foreign('movie_id')
			 ->references('id')->on('movies_and_series')
				 ->onUpdate('cascade')
				 ->onDelete('cascade');
			$table->integer('gender_id')->unsigned();
			$table->foreign('gender_id')
			 ->references('id')->on('gender')
				 ->onUpdate('cascade')
				 ->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('gender_movies');
	}
}
