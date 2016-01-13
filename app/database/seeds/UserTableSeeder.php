<?php

class UserTableSeeder extends Seeder {
	
	public function run()
	{
		$user = new User();
		$user->first_name = 'Letty';
		$user->last_name = 'Fuentes';
		$user->username = 'lfuentes';
		$user->email = 'lettyfuentes2013@gmail.com';
		$user->password = $_ENV['USER_PASS'];
		$user->save();
	}
}