<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class players extends Model
{
    public function team()
{
    return $this->belongsTo(Teams::class, 'team_id');
}

}
