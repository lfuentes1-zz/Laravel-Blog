@extends('layouts.master')

@section('create-content')
<form action="{{{ action('PostsController@store') }}}" method="POST">
  <div class="form-group">
    <label for="post-title">Post Title</label>
    <input type="text" name="post-title" class="form-control" value="{{{ Input::old('post-title') }}}" placeholder="post title">
  </div>
  <div class="form-group">
    <label for="post-body">Body</label>
    <textarea class="form-control" name="post-body" rows="3" placeholder="post body">{{{ Input::old('post-body') }}}</textarea>
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>
@stop