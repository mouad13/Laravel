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




}
