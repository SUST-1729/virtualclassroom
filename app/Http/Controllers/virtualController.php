<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class virtualController extends Controller
{
    public function index()
    {
    	//$title="index Page";
    	//return view('classroom.first',compact('title'));
		//return view('classroom.first')->with('title',$title);
		
		return view('classroom.index');
    }
    public function loggin()
    {
    	$title="Login Page";
    	//return view('classroom.first',compact('title'));
		return view('classroom.first')->with('title',$title);
		
		//return view('classroom.login');
    }
    public function classhome()
    {
    	$data=array(
    		'titles' => 'Cardinal Number',
    		'services' => ['first','second','third','forth']
    	);
    	return view('classroom.classhome')->with($data);
	}
	

	public function front2()
	{
		return view('classroom.front2');
	}
}
