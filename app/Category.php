<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //fillable fields
    protected $fillable = [
        'name'
    ];
    
    //relationships
    public function product(){
        return $this->hasMany('App\Product');
    }
}
