<?php

namespace Todoparrot\Http\Controllers;

use Illuminate\Http\Request;

use Todoparrot\Http\Requests;

class WelcomeController extends Controller
{
	
	
	public function index()
	{
		
		\Debugbar::info('Welcome Controller - index');
	
		$data = array('name' => 'My Trip', 'date' => date('2016-09-02'));		
		return view('home.welcome')->with($data);
		
	}
	
	
}
