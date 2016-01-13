@extends('layouts.master')

@section('content')
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
      	  <option value="php-laravel">PHP/Laravel</option>
      	  <option value="js-jquery">JavaScript/jQuery</option>
      	  <option value="apis">APIs</option>
      	  <option value="dev-tool">Developer Tools</option>
      	</select>

    </div>
    {{ $errors->first('post-title', '<span class="help-block">:message</span>') }}
    {{ $errors->first('post-body', '<span class="help-block">:message</span>') }}

    <button type="submit" class="btn btn-default">Submit</button>
  </form>
@stop

