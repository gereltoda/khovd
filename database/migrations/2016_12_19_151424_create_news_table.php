<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateNewsTable extends Migration {

	public function up()
	{
		Schema::create('news', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('name');
			$table->tinyInteger('author_id');
			$table->tinyInteger('cat_id');
			$table->date('date');
			$table->text('content');
			$table->boolean('status');
			$table->datetime('posted_date');
		});
	}

	public function down()
	{
		Schema::drop('news');
	}
}