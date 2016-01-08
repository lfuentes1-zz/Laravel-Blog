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
	{{-- yield is a placeholder --}}
	@yield('resume-content') 
	@yield('portfolio-content')
	@yield('roll-dice-content')

	<div class="container-fluid">
        <header class="row">
            <div class="col-sm-10 col-sm-offset-1">
                @include('partials.nav-bar')
            </div>
        </header>
        
        <main class="row">
            <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
                @yield('content')
            </div>
        </main>
    </div>


	
	{{-- First, <script type="/js/jquery.min.js"></script> --}}
	{{-- Second, <script type="/js/bootstrap.min.js"></script> --}}
	{{-- Third, my custom javascript --}}
	{{-- Fourth, @yield('bottom-script') --}}
</body>
</html>