<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    public function categories(){
        return $this->belongsTo(category::class);
    }
    public function product_details(){
        return $this->hasOne(product_details::class);
    }
    public function add_to_cart(){
        return $this->hasOne(add_to_cart::class);
    }
}
