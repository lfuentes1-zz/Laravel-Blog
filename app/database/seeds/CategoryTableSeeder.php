<?php

class CategoryTableSeeder extends Seeder {
	
	public function run()
	{
		$category = new Category();
		$category->category = 'PHP/Laravel';
		$category->save();

		$category2 = new Category();
		$category2->category = 'JavaScript/jQuery';
		$category2->save();

		$category3 = new Category();
		$category3->category = 'APIs';
		$category3->save();
	
		$category4 = new Category();
		$category4->category = 'Developer Tools';
		$category4->save();
	}

}