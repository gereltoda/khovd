<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMenuTable extends Migration {

	public function up()
	{
		Schema::create('menu', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('name');
			$table->integer('sub_id');
			$table->string('link');
			$table->string('icon');
		});
	}

	public function down()
	{
		Schema::drop('menu');
	}
}