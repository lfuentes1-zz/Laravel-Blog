{{-- Browser:  /posts/{post}  --}}

@extends('layouts.master')

@section('showOne-content')

<h1>{{{ $post->title }}}</h1>
{{{ $post->body }}}
{{{ $post->category_id }}}
<p>{{{ $post->user_id }}}</p>

@stop
