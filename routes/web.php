<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'CategoryController@index')->name('home');

Route::get('catalogo', 'CategoryController@index')->name('productos');

Route::get('categoria/{id}','CategoryController@categoria');

Route::get('detalle-producto', function () {
    return view('detalle');
})->name('detalle');

Route::get('haz-contacto', 'CategoryController@contacto')->name('contacto');