{{-- Anything you want on every page of your app will go in here --}}
<!DOCTYPE html>
<html>
<head>
	<title>This is Blog</title>

	{{-- <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css"> --}}

	{{-- @yield ('top-script') --}}
	{{-- Link tag for bootstrap --}}
</head>
<body>
	{{-- yield is a placeholder --}}
	@yield('content') 
	{{-- script tage for jQuery and Bootstrap --}}
	{{-- <script type="/js/jquery.min.js"></script> --}}
	{{-- <script type="/js/bootstrap.min.js"></script> --}}
	{{-- @yield('bottom-script') --}}
</body>
</html>