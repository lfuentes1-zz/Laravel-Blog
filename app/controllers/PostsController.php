<?php

class PostsController extends \BaseController {

	public function __construct()
	{
		parent::__construct(); //ensures that the parent constructor is not destroyed

		// $this->beforeFilter('auth'); this auth filter will protect every action in this controller, add filters
		// $this->beforeFilter('auth', array('only' => array('create', 'store'))); //adding filters, option one
		$this->beforeFilter('auth', array('except' => array('index', 'show'))); //adding filters, option two
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//Show a list of all posts
		// $perPage = Input::get('...'); user selects how many items to show per page and $perPage goes into paginate($perPage)
		// return View::make('posts.index')->with('posts', Post::paginate(5));
		// return View::make('posts.index')->Post::with('user')->orderBy('create_at', 'desc')->get();
		$posts = Post::with('user')->orderBy('created_at', 'desc')->paginate(5);
		return View::make('posts.index')->with('posts', $posts);
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
			Log::error('Failed to find a specific record', array(404, "title: " . $title));
			App::abort(404);  //this goes directly to the missing method in global.php
			//Previous option:  Improved with above line
			// Session::flash('errorMessage', "The post you are trying to access does not exist!");
			//return Redirect::action('PostsController@index');
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
			Log::error('Failed to find a specific record', array(404, "title: " . $title));
			App::abort(404);  //this goes directly to the missing method in global.php
			//Previous option:  Improved with line above
			// Session::flash('errorMessage', "The post you are trying to access does not exist!");
			// return Redirect::action('PostsController@index');
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
		//Show a form for editing a specific post
		$post = Post::find($id);
		return View::make('posts.edit')->with('post', $post);
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
				Log::info('Post successfully saved', array("post: " . $post));
				Session::flash('successMessage', 'Post successfully saved!');
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
			$result = $post->delete();
			
			if ($result) //successful deletion
			{
				Log::info('Post successfully deleted.', array("post: " . $post));
				Session::flash('successMessage', 'Post successfully deleted!');
			} else {
				Log::info('Error in deleting post.', array("post: " . $post));
				Session::flash('errorMessage', 'Error in deleting post!');
			}
	
		return Redirect::route('posts.index');
	}
}