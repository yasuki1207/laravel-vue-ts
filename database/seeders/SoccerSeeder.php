<?php

namespace Database\Seeders;

use App\Models\Soccer;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SoccerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Soccer::insert([
            [
                'league' => 'J1',
                'summary' => '日本のサッカーリーグ1部',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'league' => 'J2',
                'summary' => '日本のサッカーリーグ2部',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'league' => 'J3',
                'summary' => '日本のサッカーリーグ3部',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
