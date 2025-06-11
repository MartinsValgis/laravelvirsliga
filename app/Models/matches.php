<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class matches extends Model
{
    public function homeTeam()
{
    return $this->belongsTo(Teams::class, 'home_team_id');
}

public function awayTeam()
{
    return $this->belongsTo(Teams::class, 'away_team_id');
}
}

