<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Authenticatable;

class AuthController extends Controller
{
	public function registration(Request $request){

		if(!empty($request->input())){

			$this->validate($request, [
				'password' => 'required',
				'login' => 'required|unique:users',
				'password-rep' => 'required|same:password',
				]);

			$user_data = $request->input();

			return view('auth.registration', ['data' => $user_data]);
		}

		return view('auth.registration');
	}

	public function regUser(Request $request){

		$this->validate($request, [
			'name' => 'required',
			'password' => 'required',
			'login' => 'required|unique:users',
			'email' => 'required|unique:users',
			'password_confirmed' => 'required|same:password',
			]);

		$data = User::create([
			'login'=> strtolower($request->login), 
			'password'=> hash("sha256", $request->password),
			'email'=> $request->email,
			'name'=> $request->name,
			'surname'=> $request->surname,
			'role'=> 'User'
			]);

		return Redirect::route('main_page');
	}

	public function signin(Request $request){


		$user=User::where('login', strtolower($request->login))->where('password', hash("sha256", $request->password))->first();
		
		if($user !== null){
			$auth = Auth::loginUsingId($user->id);
			return back();
		}
		
		return back()->with('message', 'Логин и\или пароль не совпадают');
	}

	public function logout(){
		Auth::logout();
		return back();
	}
}
