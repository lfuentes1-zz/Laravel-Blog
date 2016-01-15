{{-- Browser:  /posts/{post}  --}}

@extends('layouts.master')

@section('content')

	{{ Form::open(array('action' => array('PostsController@destroy', $post->id), 'method' => 'DELETE')) }}
		<button class="btn btn-default pull-right">Delete</button>
	{{ Form::close() }}

	<a class="btn btn-default pull-right" href="{{{ action('PostsController@edit', $post->id) }}}" role="button">Edit Post</a>

	<a class="btn btn-default pull-right" href="{{{ action('PostsController@index') }}}" role="button">Back</a>

	<h1>{{{ $post->title }}}</h1>
	<p>{{{ "user: " . $post->user_id }}}</p>
	<p>{{{ $post->body }}}</p>
	<p>{{{ "categories:  " . $post->category_id }}}</p>
	<p><span class="glyphicon glyphicon-time">{{{ "created: " . $post->updated_at->format('l, F jS Y @ h:i:s A') }}}
	<p><span class="glyphicon glyphicon-time">{{{ "last updated: " . $post->updated_at->format('l, F jS Y @ h:i:s A') }}}

@stop