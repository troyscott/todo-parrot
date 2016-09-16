<?php

namespace Todoparrot\Http\Controllers;
use Illuminate\Http\Request;
use Todoparrot\Http\Requests;

class AboutController extends Controller
{
    
	
	public function create()
	{
		
		return view('about.contact');	
		
	}
	
	
	public function store()
	{
		return view('about.contact');	
	}
}
