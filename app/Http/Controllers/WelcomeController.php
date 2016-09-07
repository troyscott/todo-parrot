<?php

namespace Todoparrot\Http\Controllers;

use Illuminate\Http\Request;

use Todoparrot\Http\Requests;

class WelcomeController extends Controller
{
	
	
	public function index()
	{
	
		// $monolog = \Log::getMonolog();
		// $items = ['Pack luggage', 'Go to airport', 'Arrive in San Juan'];
		// $monolog->pushHandler(new \Monolog\Handler\FirePHPHandler());
		// $monolog->addInfo('Log Message', array('items' => $items));
		
		\Debugbar::info('Welcome Controller - index');
		
		// Output as html to browser
		// dd($items);
		// Output to laravel.log
		//\Log::debug($items);
		
		return view('home.welcome')->with('name', 'San Juan Vacation');
		
	}
	
	
}
