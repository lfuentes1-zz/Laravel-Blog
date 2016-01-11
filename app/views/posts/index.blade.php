{{-- Browser:  /posts  --}}

@extends('layouts.master')

@section('showAll-content')

@foreach ($posts as $post)
	<h1>{{{ $post->title }}}</h1>
	{{{ $post->body }}}
	{{{ $post->category_id }}}
	<p>{{{ $post->user_id }}}</p>
@endforeach

@stop
