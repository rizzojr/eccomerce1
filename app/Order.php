<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

    protected $fillable = [
        'orderNumber','guest_ipaddress','paymentType','status',
    ];

    //relationships
    public function customer(){
        return $this->belongsTo('App\Customer');
    }
    public function cart(){
        return $this->belongsToMany('App\Cart');
    }
    
}
