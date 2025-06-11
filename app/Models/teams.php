<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class teams extends Model
{
    public function players()
{
    return $this->hasMany(Players::class, 'team_id');
}

}
