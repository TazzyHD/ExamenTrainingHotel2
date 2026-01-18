<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class KamerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('kamers')->insert([
            [
                'kamer_nummer' => '101',
                'status' => 'beschikbaar',
                'type' => 'Eenpersoons',
                'laatst_geklaard_op' => date('Y-m-d'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'kamer_nummer' => '102',
                'status' => 'schoonmaak',
                'type' => 'Tweepersoons',
                'laatst_geklaard_op' => date('Y-m-d'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'kamer_nummer' => '201',
                'status' => 'bezet',
                'type' => 'Suite',
                'laatst_geklaard_op' => date('Y-m-d'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'kamer_nummer' => '202',
                'status' => 'beschikbaar',
                'type' => 'Deluxe',
                'laatst_geklaard_op' => date('Y-m-d'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
