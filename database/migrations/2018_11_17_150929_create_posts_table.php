<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePostsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('posts', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('title', 200);
			$table->text('text', 65535);
			$table->string('image', 250);
			$table->dateTime('date');
			$table->integer('catId')->index('catId');
			$table->integer('userId')->index('userId');
			$table->boolean('status');
			$table->boolean('isNew')->default(0);
			$table->date('deleted_at')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('posts');
	}

}
