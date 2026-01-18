<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class ReserveringSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('meldingen')->insert([
            [
                'kamer_id' => '1',
                'titel' => 'Lekkende kraan',
                'prioriteit' => 'hoog',
                'gerapporteerd_op' => date('Y-m-d'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'kamer_id' => '2',
                'titel' => 'Kapotte lamp',
                'prioriteit' => 'gemiddeld',
                'gerapporteerd_op' => date('Y-m-d'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'kamer_id' => '3',
                'titel' => 'Vlek in tapijt',
                'prioriteit' => 'laag',
                'gerapporteerd_op' => date('Y-m-d'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
