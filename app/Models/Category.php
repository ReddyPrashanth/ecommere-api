<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    public function department(){
        return $this->belongsTo('App\Models\Department');
    }

    public function products(){
        return $this->belongsToMany('App\Models\Product');
    }
}
