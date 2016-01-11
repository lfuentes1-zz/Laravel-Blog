@extends('layouts.master')

@section('create-content')
<form action="{{{ action('PostsController@store') }}}" method="POST">
  <div class="form-group">
    <label for="post-title">Title</label>
    <input type="text" name="post-title" class="form-control" value="{{{ Input::old('post-title') }}}" placeholder="title">
  </div>
  <div class="form-group">
    <label for="post-body">Body</label>
    <textarea class="form-control" name="post-body" rows="3" placeholder="body">{{{ Input::old('post-body') }}}</textarea>
  </div>
  <div class="form-group">
    <label for="post-category">Category</label>

	<select class="form-control">
	  <option value="volvo">PHP/Laravel</option>
	  <option value="saab">JavaScript/jQuery</option>
	  <option value="mercedes">APIs</option>
	  <option value="audi">Developer Tools</option>
	</select>

  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>
@stop

