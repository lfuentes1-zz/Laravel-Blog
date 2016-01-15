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

Route::get('/', 'HomeController@showWelcome');

Route::get('/portfolio', 'HomeController@showPortfolio');  

Route::get('/resume', 'HomeController@showResume');

// Route::get('/sayhello/{name?}', function($name = '')
// {
// 	if ($name == '') {
// 	  	return "Hi, there!";
// 	}
//    return "Hello, $name!";
// });

// Route::get('/firstview/{name}', 'HomeController@showWelcome');

// Create a route that responds to a GET request on the path /rolldice.
// Route::get('/rolldice/{number}', 'HomeController@rollDice');

Route::get('/posts/title/{title}', 'PostsController@findByTitle');

Route::resource('/posts', 'PostsController'); //RESTful API (CRUD)

Route::get('login', 'HomeController@getLogin'); //show the form

Route::post('login', 'HomeController@postLogin'); //get the contents of the form

Route::get('logout', 'HomeController@getLogout'); //redirects

Route::resource('tags', 'TagsController');
