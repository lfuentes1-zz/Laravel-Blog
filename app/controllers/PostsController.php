<?php

class PostsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//Show a list of all posts
		return View::make('posts.index')->with('posts', Post::paginate(5));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		// Show a form for creating post
		return View::make('posts.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$post = new Post();
		return $this->validateAndSave($post);
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//Show a specific post
		try {
			$post = Post::findOrFail($id);
			return View::make('posts.show')->with('post', $post);
		} catch (Exception $e)
		{
			return "Not Found";
			// return Redirect::action('PostsController@index');
			// I can also redirect back somewhere - index or something else
		}
	}

	public function findByTitle($title)
	{
		//Show a specific post by title
		try {
			$post = Post::where('title', '=', $title)->firstOrFail();

			return View::make('posts.show')->with('post', $post);
		} catch (Exception $e)
		{
			return "Record not found";
			// I can also redirect back somewhere - index or something else
		}
	}	


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//need ID to send along with all the information
		return ('Show a form for editing a specific post');
	}

	/**
	 * Validate for before saving.
	 *
	 * @param  object  $post
	 * @return Response
	 */
	protected function validateAndSave ($post)
	{
		//create the validator 
		$validator = Validator::make(Input::all(), Post::$rules);


		if ($validator->fails()) {
        	// validation failed, redirect to the post create page with validation errors and old inputs
			return Redirect::back()->withInput()->withErrors($validator);
    	} else {
			// Save the new post
			$post->title = Input::get('post-title');
			$post->body = Input::get('post-body');
			$post->category_id = 1;
			$post->user_id = 1;
			// $post->user_id = User::first();
			// $post->user_id = User::all()->random();
    
			if ($post->save()) {  //true returns true or false
				return Redirect::route('posts.index');
			} else {
				return Redirect::back()->withInput();
			}
	    }
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//Update a specific post
		$post = Post::find($id);
		return $this->validateAndSave($post);

		// View::make('posts.create')->with('post', $post);
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//Delete a specific post
		$post = Post::find($id);
		$post->delete();
		
		return Redirect::route('posts.index');
	}


}
