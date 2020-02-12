<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //
    protected $fillable = [
        'guest_ipaddress','fname','sname', 'email','country','city','street','postalcode', 'phone',
    ];

    //relationships
    public function order(){
        return $this->hasMany('App\Order');
      }

      public function cart(){
        return $this->hasMany('App\Cart');
      }
}
