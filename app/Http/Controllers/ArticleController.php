<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
	//

	public function index(){

		#Extraer lista de clientes
		$users = User::select('id', 'name')
				->where('type', '=', 0)
				->get();


		#Crear estructura de datos
		$response = array();
		
		foreach($users as $user){
			$clients = [
				'clientId' => $user->id,
				'clientName' => $user->name
			];

			array_push($response , $clients);
		}
	   
		#Retornar datos a la vista
	   return view('article')->with('clients', $response);
	}
}
