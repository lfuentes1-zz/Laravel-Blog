<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		//delete in the reverse order of adding data
		DB::table('posts')->delete();
		DB::table('categories')->delete();
		DB::table('users')->delete();
		//the above ensures fresh data everytime

		$this->call('UserTableSeeder');
		$this->call('CategoryTableSeeder');
		$this->call('PostTableSeeder'); //this is the table with the foreign keys
	}

}
