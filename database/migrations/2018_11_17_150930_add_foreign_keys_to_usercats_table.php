<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToUsercatsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('usercats', function(Blueprint $table)
		{
			$table->foreign('catId', 'usercats_ibfk_1')->references('id')->on('categories')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('userId', 'usercats_ibfk_2')->references('id')->on('users')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('usercats', function(Blueprint $table)
		{
			$table->dropForeign('usercats_ibfk_1');
			$table->dropForeign('usercats_ibfk_2');
		});
	}

}
