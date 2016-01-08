@extends('layouts.master')


@section('portfolio-content')
<div class="container-fluid">

	<div class="row">
		<section class="col-xs-6 col-sm-3 col-md-3">
			left-column
			<a href="{{{ action('HomeController@showResume') }}}">Go To Resume</a>
		</section>

		<section class="col-xs-12 col-sm-9 col-md-9">
			<section class="row">
			right-column top-row this should be the nav-bar in partials
			</section>
			<section class="row">
			right-column bottom-row
			</section class="row">
			nav-bar footer should be placed here and in the partials
			<section>
			</section>
		</section>
	</div> <!-- row -->
</div> <!-- container-fluid -->
@stop