@extends('layouts.master')

@section('resume-content')
	<h1>You have reached my resume page!</h1>
	<a href="{{{ action('HomeController@showPortfolio') }}}">Go To Portfolio</a>
@stop