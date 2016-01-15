@extends('layouts.master')

@section('content')
  {{ Form::open(array('action' => 'HomeController@postLogin')) }}
  {{ Form::token() }}

    <div class="form-group">
      {{ $errors->first('username', '<span class="help-block">:message</span>') }}
      {{ Form::label('username', 'Username') }}
      {{ Form::text('username', null, array('placeholder' => 'username', 'class' => 'form-control')) }}
    </div> 

    <div class="form-group">
      {{ $errors->first('password', '<span class="help-block">:message</span>') }}
      {{ Form::label('password', 'Password') }}
      {{ Form::password('password', array('placeholder' => 'password', 'class' => 'form-control')) }}
    </div> 

    <button type="submit" class="btn btn-default">Login</button>
  {{ Form::close() }}
@stop