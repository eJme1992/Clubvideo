<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTagMoviesTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tag_movies', function (Blueprint $table) {
			$table->increments('id');
			$table->integer('movie_id')->unsigned();
			$table->foreign('movie_id')
			 ->references('id')->on('movies_and_series')
				 ->onUpdate('cascade')
				 ->onDelete('cascade');
			$table->integer('tag_id')->unsigned();
			$table->foreign('tag_id')
			 ->references('id')->on('tag')
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
		Schema::dropIfExists('tag_movies');
	}
}
