<!DOCTYPE html>
<html>
<head>
	<title>Welcome to Letty's Site!</title>
	{{-- First, include bootstrap --}}
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	{{-- Second, Link tag for custom CSS goes here --}}
	<link rel="stylesheet" type="text/css" href="/css/main.css">
	@yield ('top-script')
</head>
<body>

	<div class="container-fluid">
		<header class="row navigation-bar">
            @include('partials.nav-bar')
        </header>
        <main class="row page-content center-block">
	        {{-- yield is a placeholder --}}
	        @yield('content')
    	</main>
    	<footer>
    		@include('partials.footer-nav-bar')
    	</footer>
    </div>

	<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
	<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

	{{-- Second, <script type="/js/bootstrap.min.js"></script> --}}
	<script type="text/javascript" src="/js/main.js"></script>

</body>
</html>