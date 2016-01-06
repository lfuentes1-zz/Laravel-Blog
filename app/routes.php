<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
    $data = array (
        'name' => 'Codeup',
        'cohorts' => array (
            'Apollo',
            'Hampton'
            )
        );
	return View::make('hello', $data);
});

Route::get('/portfolio', function ()
{
	return "Welcome to Letty's Portfolio!";
});

Route::get('/resume', function ()
{
    return "Welcome to Letty's Resume!";
});

// Route::get('/sayhello/{name?}', function($name = '')
// {
// 	if ($name == '') {
// 	  	return "Hi, there!";
// 	}
//    return "Hello, $name!";
// });

Route::get('/sayhello/{name}', function($name)
{
    $data = array('name' => $name);
    return View::make('my-first-view')->with($data); //sending values to the view
});

// Create a route that responds to a GET request on the path /rolldice.
Route::get('/rolldice/{number}', function ($number)
{
	// Modify the route to take in a parameter named guess.
	//Someone will access the route by visiting http://blog.dev/rolldice/1, where 1 is their guess.
    // Add a view named roll-dice.php. Instead of just returning the random number, show the view and have it display the random number.
    // Modify the route and view so that you can display the guess in addition to the roll and also tell if the guess matches the roll.
    $random = rand(1, 6);
	$data = array('number' => $number, 'random' => $random);
    return View::make('roll-dice')->with($data); //sending values to the view
    // return View::make('roll-dice', $data); //another option
    // return View::make('roll-dice')->with('number', $number); //another option
});



