{{-- Anything you want on every page of your app will go in here --}}
<!DOCTYPE html>
<html>
<head>
	<title>Welcome to Letty's Blog!</title>
	{{-- First, include bootstrap --}}
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	{{-- Second, Link tag for custom CSS goes here --}}
	<link rel="stylesheet" type="text/css" href="/css/main.css">
	@yield ('top-script')
</head>
<body>
	
	<div class="container-fluid">
		<header class="row">
			@if (Auth::user())
				<a class="btn btn-default pull-right" href="{{{ action('HomeController@getLogout') }}}"
			 		role="button">Logout</a>
			@endif
			@if (!Auth::user())		
				<a class="btn btn-default pull-right" href="{{{ action('HomeController@getLogin') }}}"
			 		role="button">Login</a>
			@endif
        </header>
		<div class="form-group">
			{{ Form::open(array('method'=>'GET')) }}
	  			{{ $errors->first('search', '<span class="help-block">:message</span>') }}
	  			{{ Form::label('search', 'Search') }}
	  			{{ Form::text('search', null, array('placeholder' => 'search for a post', 'class' => 'form-control')) }}
	  			<button class="btn btn-default pull-right" role="button">Search</button>
			{{ Form::close() }}
   		</div> 

		<nav class="row navigation-bar">
            @include('partials.nav-bar')
        </nav>
 
        <main class="row page-content center-block">
	        {{-- yield is a placeholder --}}

			@if (Session::has('successMessage'))
			    <div class="alert alert-success">{{{ Session::get('successMessage') }}}</div>
			@endif
			@if (Session::has('errorMessage'))
			    <div class="alert alert-danger">{{{ Session::get('errorMessage') }}}</div>
			@endif

	        @yield('content')
    	</main>
    </div>

	<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
	<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	{{-- Second, <script type="/js/bootstrap.min.js"></script> --}}
	<script type="text/javascript" src="/js/main.js"></script>
	{{-- Fourth, @yield('bottom-script') --}}
</body>
</html>