<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class add_to_cart extends Model
{
    public function user(){
        return $this->belongsTo(user::class);
    }
    public function product(){
        return $this->belongsTo(product::class);
    }
}
