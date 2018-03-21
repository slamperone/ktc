<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['id','nombre','sku','desc','fabricante','categoria','fichaTecnica','foto'];
}
