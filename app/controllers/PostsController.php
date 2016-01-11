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
		return Post::all();
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
		// Store the new post
		$post = new Post();
		$post->title = Input::get('post-title');
		$post->body = Input::get('post-body');
		$post->category_id = 1;
		$post->user_id = 1;

		if ($post->save()) {  //true returns true or false
			return Redirect::route('posts.index');
		} else {
			return Redirect::back()->withInput();
		}
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
			return "not found";
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
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		return ('Update a specific post');
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		return ('Delete a specific post');
	}


}
