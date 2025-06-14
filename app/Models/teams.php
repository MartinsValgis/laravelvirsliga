<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class teams extends Model
{
    public function players()
    {
        return $this->hasMany(Players::class, 'team_id');
    }
    public function homeMatches()
    {
        return $this->hasMany(Matches::class, 'home_team_id');
    }

    public function awayMatches()
    {
        return $this->hasMany(Matches::class, 'away_team_id');
    }
}
