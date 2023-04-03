<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SoccerLeague extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'summary',
        'prefix',
    ];

    public function soccerTeams()
    {
        return $this->hasMany(SoccerTeam::class);
    }
}
