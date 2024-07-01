<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;

class LoginController extends Controller
{
	//
	use ValidatesRequests;

	public function index(){
		return view('auth.login');
	}



	public function store(Request $request){

		#Validación de datos
		$this->validate($request, [
			'email' 	=> 'required|max:20|email',
			'password' 	=> 'required'
		]);

		#Login
		if(!auth()->attempt($request->only('email', 'password')))
		{
			return back()->with('message', 'Los datos de sesión no son correctos');
		}

		#Redirigir a home
		return redirect()->route('home');
	}


}
