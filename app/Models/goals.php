<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class goals extends Model
{
    public function goalscorer()
    {
        return $this->belongsTo(Players::class, 'goalscorer_id');
    }
    public function assister()
    {
        return $this->belongsTo(Players::class, 'assist_id');
    }
}
