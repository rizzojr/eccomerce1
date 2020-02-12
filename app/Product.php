<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //fillable fields
    protected $fillable = [
        'name','category_id', 'brand_id','description','price','image', 'phone',
    ];
    
    //relationships
    public function brand(){
       return $this->belongsTo('App\Brand');
    }
    public function category(){
      return $this->belongsTo('App\Category');
    }   
    public function cart(){
      return $this->hasMany('App\Cart');
    }
}