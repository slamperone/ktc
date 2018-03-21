<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;

class CategoryController extends Controller
{
    public function index(){
    	$categorias = Category::orderBy('nombre', 'asc')
                ->get();

    	$productos = $categorias;

    	return view('categorias',compact('categorias','productos'));
    }



    public function categoria($cual){
    	$categorias = Category::orderBy('nombre', 'asc')
                ->get();

    	$productos = Product::orderBy('id', 'asc')
                ->where('categoria',$cual)
                ->get();

        $id = $cual;

    	return view('productos',compact('categorias','productos','id'));
    }

    public function contacto(){
        $categorias = Category::orderBy('nombre', 'asc')
                ->get();

        $productos = $categorias;
        return view('contacto',compact('categorias'));
    }
}
