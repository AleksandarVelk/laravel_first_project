<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class WelcomeController extends Controller
{
   public function index()
   {
   		
   		$elements = Menu::all();
   		
		return view('welcome')->with('elements',$elements);

   }

   public function admin()
   {
   		
   		
   		

   }
	
	public function login()
    {

		return view('login');

    }   

}
