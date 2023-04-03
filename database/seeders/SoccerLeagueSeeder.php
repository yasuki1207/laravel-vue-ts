<?php

namespace Database\Seeders;

use App\Models\SoccerLeague;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SoccerLeagueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SoccerLeague::insert([
            [
                'name' => 'J1',
                'summary' => '日本のサッカーリーグ1部',
                'prefix' => 'j1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'J2',
                'summary' => '日本のサッカーリーグ2部',
                'prefix' => 'j2',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'J3',
                'summary' => '日本のサッカーリーグ3部',
                'prefix' => 'j3',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
