<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDataImportTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('dataImport', function(Blueprint $table) {
			$table->increments('dataID');

			$table->string('dataTitle')->nullable();
			$table->date('dataDate')->nullable();
			$table->text('dataType')->nullable();
			$table->integer('dataUser')->nullable();
			$table->string('dataFile')->nullable();
			$table->boolean('dataFirstRowHeader')->nullable();

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
		Schema::drop('dataImport');
	}

}
