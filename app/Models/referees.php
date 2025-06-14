<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class referees extends Model
{
    public function matches()
    {
        return $this->hasMany(Matches::class, 'referee_id');
    }
}
