{{-- Browser:  /posts  --}}

@extends('layouts.master')

@section('content')

	<a class="btn btn-default pull-right" href="{{{ action('PostsController@create') }}}" role="button">New Post</a>

	@foreach ($posts as $post)
		<h1><a href="{{{ action('PostsController@findByTitle', $post->title) }}}">{{{ $post->title }}}</a></h1>
		<p>{{{ "user: " . $post->user_id }}}</span></p>
		<p>{{{ $post->body }}}</p>
		<p>{{{ "categories:  " . $post->category_id }}}</p>
		{{-- <p><span class="glyphicon glyphicon-time">{{{ "created: " . $post->created_at->diffForHumans() }}}</span></p> --}}
		<p><span class="glyphicon glyphicon-time">{{{ "created: " . $post->updated_at->format('l, F jS Y @ h:i:s A') }}}
		<p><span class="glyphicon glyphicon-time">{{{ "last updated: " . $post->updated_at->format('l, F jS Y @ h:i:s A') }}}
	@endforeach

	<div class="pagination-links">{{ $posts->links() }}</div>


@stop



