<?php

namespace App\Http\Controllers;

use App\Category;

class CategoryController extends Controller
{
    public function index(){
    	$categorias = Category::all();
    	return view('productos',compact('categorias'));
    }
}
