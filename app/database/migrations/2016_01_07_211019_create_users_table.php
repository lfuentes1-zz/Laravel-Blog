<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('first_name', 100);
			$table->string('last_name', 100);
			$table->string('username', 100)->unique();
			$table->string('email', 100)->unique();
			$table->string('password', 255);
			// $table->date('birthday')->nullable();
			// $table->string('phone_number', 50)->nullable();
			// $table->integer('zip_code');
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
		// if I am running refresh I will get a constraint error, unless I delete foreigh key first
		// Schema::table('posts', function($table) {
		// 	$table->dropForeign('posts_user_id_foreign');
		// });

		Schema::drop('users');
	}

}
