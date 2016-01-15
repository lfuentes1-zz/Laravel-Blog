@extends('layouts.master')

@section('content')
  {{ Form::model($post, array('action' => array('PostsController@update', $post->id), 'method' => 'PUT')) }}
  {{ Form::token() }}

    <div class="form-group">
      {{ $errors->first('post-title', '<span class="help-block">:message</span>') }}
      {{ Form::label('post-title', 'Title') }}
      {{ Form::text('post-title', null, array('placeholder' => 'title', 'class' => 'form-control')) }}
    </div> 

    <div class="form-group">
      {{ $errors->first('post-body', '<span class="help-block">:message</span>') }}
      {{ Form::label('post-body', 'Body') }}
      {{ Form::textarea('post-body', null, array('placeholder' => 'body', 'class' => 'form-control')) }}
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

    <button type="submit" class="btn btn-default">Update</button>
  {{ Form::close() }}
@stop


   

    