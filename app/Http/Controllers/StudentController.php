<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
    	//return  'Hello from controller';
    	$name = 'Hora krishsna Roy';
    	$age ='24';
    	$profession='Baker';
    	/*
    	return view('home' , compact('name','age','profession'));

    	*/
    	/*with
    	return view('home')
    	              ->with('name',$name)
    	              ->with('age',$age)
    	              ->with('profession',$profession);

    	*/
    	 /*Array */
    	 
    	 return view('home', [
    	 	
    	 		'name'      =>$name,
    	 		'age'       =>$age,
    	 		'profession'=>$profession

    	 ]);             
    	
    }
    public function add(){
    	return view('about');
    }
}
