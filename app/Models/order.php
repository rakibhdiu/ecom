<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    public function user(){
        return $this->belongsTo(user::class);
    }
}
