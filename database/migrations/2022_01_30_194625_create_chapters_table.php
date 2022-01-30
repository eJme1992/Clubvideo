<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChaptersTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('chapters', function (Blueprint $table) {
			$table->increments('id');
			$table->integer('season_id')->unsigned();
			$table->foreign('season_id')
			 ->references('id')->on('season')
				 ->onUpdate('cascade')
				 ->onDelete('cascade');
			$table->string('title', 255);
			$table->text('descriptions');
			$table->timestamp('release_date');
			$table->time('duration');
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
		Schema::dropIfExists('chapters');
	}
}
