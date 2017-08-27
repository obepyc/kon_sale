<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class CabinetController extends Controller
{
	public function index(){

		return view('cabinet.index', ['user' => Auth::user()]); 
	}
}
