<?php

namespace App\Http\Controllers;

use \Illuminate\Http\Request;

class MainController extends Controller
{
    public function index() 
    {
    	return view('homepage');
	}

	public function addcomment(Request $request)
	{	
		
		$this->validate($request, [
			'text' => 'required',
			'desc' => 'required'
		]);

		dd($request->all());
	}
}
