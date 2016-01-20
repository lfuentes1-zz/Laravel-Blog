@extends('layouts.master')

@section('content')
  {{ Form::open(array('action' => 'PostsController@store')) }}
  {{ Form::token() }}

    {{-- <div class="form-group">
      <label for="post-title">Title</label>
      <input type="text" name="post-title" class="form-control" value="{{{ Input::old('post-title') }}}" placeholder="title">
    </div> --}}

    <div class="form-group">
      {{ $errors->first('post-title', '<span class="help-block">:message</span>') }}
      {{ Form::label('post-title', 'Title') }}
      {{ Form::text('post-title', null, array('placeholder' => 'title', 'class' => 'form-control')) }}
    </div> 

    {{-- <div class="form-group">
      <label for="post-body">Body</label>
      <textarea class="form-control" name="post-body" rows="3" placeholder="body">{{{ Input::old('post-body') }}}</textarea>
    </div> --}}

    <div class="form-group">
      {{ $errors->first('post-body', '<span class="help-block">:message</span>') }}
      {{ Form::label('post-body', 'Body') }}
      {{ Form::textarea('post-body', null, array('placeholder' => 'body', 'class' => 'form-control')) }}
    </div> 

    <div class="form-group">
      <label for="post-category">Category</label>

        <select class="form-control" multiple>
          <option value="php-laravel">PHP/Laravel</option>
          <option value="js-jquery">JavaScript/jQuery</option>
          <option value="apis">APIs</option>
          <option value="dev-tool">Developer Tools</option>
        </select>
    </div>

    <button type="submit" class="btn btn-default">Submit</button>
  {{ Form::close() }}
@stop