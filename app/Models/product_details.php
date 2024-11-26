<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class product_details extends Model
{
    public function product(){
        return $this->belongsTo(product::class);
    }
}
