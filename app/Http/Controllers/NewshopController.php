<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewshopController extends Controller
{
   public function index(){

   	return view('front-end.home.home');
   }

   public function CategoryProduct(){
   	
   	return view('front-end.category.category-cntent');
   }
}


