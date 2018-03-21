<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;

class ProductController extends Controller
{

	public function index(){
    	$productos = Product::orderBy('categoria', 'asc')
                ->get();
    	return view('productos',compact('productos'));
    }


    public function categoria($cual){

    	$categorias = Category::orderBy('nombre', 'desc')
                ->get();

    	$productos = Product::orderBy('categoria', 'asc')
                ->get();

    	return view('productos',compact('categorias','productos'));
    }
}
