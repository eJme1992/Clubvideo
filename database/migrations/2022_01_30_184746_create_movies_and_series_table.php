<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMoviesAndSeriesTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('movies_and_series', function (Blueprint $table) {
			$table->increments('id');
			$table->string('title', 255);
			$table->text('descriptions');
			$table->timestamp('release_date');
			$table->time('duration');
			$table->float('score', 8, 2);
			$table->boolean('status');
		});

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('movies_and_series');
	}
}
