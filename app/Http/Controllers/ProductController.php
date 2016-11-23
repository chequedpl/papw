<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
    	return view('product.create');
    }

    public function store(Request $request){
    	
    	\App\Product::create([

    		'name' => $request->Nombre,
    		'description' => $request->Descripcion,
    		'price' => $request->Precio,
    		'photo1' => $request->Foto1,
    		'idUser' => "1",
    		]);
    	

    }
}
