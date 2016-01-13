<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome ()
	{
		return Redirect::action('PostsController@index');

		// return View::make('welcome');  //this shows the welcome page
	}

	// public function rollDice($number)
	// {
	// 	// Modify the route to take in a parameter named guess.
	// 	//Someone will access the route by visiting http://blog.dev/rolldice/1, where 1 is their guess.
	//     // Add a view named roll-dice.php. Instead of just returning the random number, show the view and have it display the random number.
	//     // Modify the route and view so that you can display the guess in addition to the roll and also tell if the guess matches the roll.
	//     $random = rand(1, 6);
	// 	$data = array('number' => $number, 'random' => $random);
	//     return View::make('roll-dice')->with($data); //sending values to the view
	//     // return View::make('roll-dice', $data); //another option
	//     // return View::make('roll-dice')->with('number', $number); //another option
	// }

	public function showResume()
	{
		return View::make('resume');
	}

	public function showPortfolio()
	{
		return View::make('portfolio');
	}

	// public function showWelcome($name)
	// {
	// 	$data = array('name' => $name);
 //    	return View::make('my-first-view')->with($data); //sending values to the view
	// }

}
