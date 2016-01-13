<?php

class PostTableSeeder extends Seeder {
	
	public function run()
	{
		$user = User::firstOrFail();

		$post = new Post();
		$post->title = 'My First Post';
		$post->body = 'Post Description';
		$post->category_id = 1;
		$post->user_id = $user->id;

		$post->save();

		$post2 = new Post();
		$post2->title = 'My Second Post';
		$post2->body = 'Post Description2';
		$post2->category_id = 2;
		$post2->user_id = $user->id;

		if ($post2->save())
		{
			echo ("Your post was saved\n");
		}

		$post3 = new Post();
		$post3->title = 'My Third Post';
		$post3->body = 'Post Description3';
		$post3->category_id = 3;
		$post3->user_id = $user->id;

		$post3->save();


		$post4 = new Post();
		$post4->title = 'My Fourth Post';
		$post4->body = 'Post Description4';
		$post4->category_id = 4;
		$post4->user_id = $user->id;

		$post4->save();

	}
}