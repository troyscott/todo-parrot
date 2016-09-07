<?php

namespace Todoparrot\Http\Controllers;

use Illuminate\Http\Request;

use Todoparrot\Http\Requests;

class WelcomeController extends Controller
{
	
	
	public function index()
	{
		
		\Debugbar::info('Welcome Controller - index');
	
		$lists = array('Vacation Planning' , 'Grocery Shopping', 'Camping Trip');		
		return view('home.welcome')->with('lists', $lists);
		
	}
	
	
}
