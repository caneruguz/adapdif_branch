<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDataInfoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('dataInfo', function(Blueprint $table) {
			$table->increments('dataInfoID');
			$table->integer('dataColumnID');
			$table->integer('dataStudentID');
			$table->string('dataContent')->nullable();

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
		Schema::drop('dataInfo');
	}

}
