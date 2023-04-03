<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SoccerTeam extends Model
{
    use HasFactory;

    protected $fillable = [
        'soccer_league_id',
        'name',
    ];

    public function soccerLeague()
    {
        return $this->belongsTo(SoccerLeague::class);
    }
}
