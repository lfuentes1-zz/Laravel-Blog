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
	return View::make('hello');
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
Route::get('/rolldice', function ()
{
    return View::make('roll-dice');
});



