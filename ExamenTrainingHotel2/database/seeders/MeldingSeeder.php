<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class MeldingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('reserveringen')->insert([
            [
                'kamer_id' => '4',
                'gast_naam' => 'Jan de Vries',
                'email' => 'jan.devries@example.com',
                'telefoon' => '0612345678',
                'check_in' => date('Y-m-d'),
                'check_out' => date('Y-m-d'),
                'speciale_verzoeken' => 'Extra kussen',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'kamer_id' => '5',
                'gast_naam' => 'Sara Jansen',
                'email' => 'sara.jansen@example.com',
                'telefoon' => '0687654321',
                'check_in' => date('Y-m-d'),
                'check_out' => date('Y-m-d'),
                'speciale_verzoeken' => 'Kinderbedje',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
