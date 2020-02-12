<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    //fillabes
    protected $fillable =[
        'guest_ipaddress','product_id','quantity','price'
    ];


      //relationships
      public function product(){
        return $this->belongsTo('App\Product');
      }
      public function order(){
          return $this->belongsToMany('App\Order');
      }
      public function customer(){
        return $this->belongsTo('App\Customer');
      }
}
