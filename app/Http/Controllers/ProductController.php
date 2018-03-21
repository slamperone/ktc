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


    public function detalle($cual){

    	$categorias = Category::orderBy('nombre', 'asc')
                ->get();

        $producto = Product::leftjoin('manufacturer', 'products.fabricante', '=', 'manufacturer.id')
                ->leftjoin('categories', 'products.categoria', '=', 'categories.id')
                ->orderBy('products.id', 'asc')
                ->where('products.id',$cual)
                ->select('products.*', 'manufacturer.nombre AS marca', 'manufacturer.origen AS pais', 'categories.nombre AS categoria')
                ->get();


        return view('detalle',compact('categorias','producto'));
    }
}
