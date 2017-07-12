<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;

class ProductController extends Controller
{
    public function getAllProducts(){
    	$koko = Product::all();
    	dd($koko);    }

     public function getProduct($arg){
    	$koko = Product::where('id', $arg)->get();
    	dd($koko);
    }
}
