<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Custome;

class Customers extends Controller
{
	public function getAllCustomers(){
		$koko = Custome::all();
		dd($koko);
	}

	public function getCustomer($arg){
		$koko = Custome::where('id', $arg)->get();
		dd($koko);
	}

	public function addCustomer(Request $request){
		$query = $request->input('first_name');
		$nom = $request->input('last_name');
		$email = $request->input('email');
		dd($query,$nom,$email);
	}


}
