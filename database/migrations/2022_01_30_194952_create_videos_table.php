<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVideosTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('videos', function (Blueprint $table) {
			$table->increments('id');

			/*
			TODO: descomentar cuando exista 'suppliers'

			$table->integer('supplier_id')->unsigned();
			$table->foreign('supplier_id')
			 ->references('id')->on('suppliers')
				 ->onUpdate('cascade')
				 ->onDelete('cascade');
			*/
			$table->integer('movies_id')->unsigned();
			$table->foreign('movies_id')
			 ->references('id')->on('movies_and_series')
				 ->onUpdate('cascade')
				 ->onDelete('cascade');
			$table->integer('chapter_id')->unsigned();
			$table->foreign('chapter_id')
			 ->references('id')->on('chapters')
				 ->onUpdate('cascade')
				 ->onDelete('cascade');
			$table->string('from', 255);
			$table->string('to', 255);
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
		Schema::dropIfExists('videos');
	}
}
