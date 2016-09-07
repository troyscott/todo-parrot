<?php

namespace Todoparrot\Http\Controllers;

use Illuminate\Http\Request;

use Todoparrot\Http\Requests;

class WelcomeController extends Controller
{
	
	public function index()
	{
	
		$items = [
			'items' => [
				'Pack luggage',
				'Go to airport',
				'Arrive in San Juan'
			]
		];	
		dd($items);
		
		return view('welcome');
		
	}
	
	
}
