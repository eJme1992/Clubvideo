<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDistributionTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('distribution', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('movie_id')->unsigned();
            $table->foreign('movie_id')
             ->references('id')->on('movies_and_series')
                 ->onUpdate('cascade')
                 ->onDelete('cascade');
            $table->integer('actor_id')->unsigned();
            $table->foreign('actor_id')
             ->references('id')->on('celebrities')
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
		Schema::dropIfExists('distribution');
	}
}
