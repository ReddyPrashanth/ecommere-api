<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    public function categories(){
        return $this->belongsToMany('App\Models\Category');
    }

    public function productDetails(){
        return $this->hasMany('App\Models\ProductDetail');
    }
}
