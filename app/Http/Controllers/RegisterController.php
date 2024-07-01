<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Validation\ValidatesRequests;

class RegisterController extends Controller
{
	//

	use ValidatesRequests;

	public function index(){
		return view('auth.register');
	}



	public function store(Request $request){

		#Validación de datos
		$this->validate($request, [
			'name' 		=> 'required|max:30',
			'phone' 	=> 'required|',
			'adress' 	=> 'required|max:50',
			'email' 	=> 'required|max:20|email|unique:users',
			'password' 	=> 'required|min:5|confirmed|symbol'
		]);


		#Guardar en BD
		/**
		 * Por default agregamos el tipo de usuario como 0 (cliente)
		 * el usuario tipo 1 es tipo administrador
		 */
		User::create([
			'name' 		=> $request->name,
			'phone' 	=> $request->phone,
			'adress' 	=> $request->adress,
			'email' 	=> $request->email,
			'password' 	=> Hash::make($request->password),
			'type' 		=> 0
		]);

		#loguear
		auth()->attempt($request->only('email', 'password'));

		#redirigir a home
		return redirect()->route('home');

	}
}
