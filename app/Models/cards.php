<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class cards extends Model
{
    public function player()
    {
        return $this->belongsTo(Players::class);
    }
}
