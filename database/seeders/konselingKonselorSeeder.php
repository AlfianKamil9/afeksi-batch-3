<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class konselingKonselorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('konselor_konseling_pivot')->insert([
            'konseling_id' => 1, 
            'konselor_id' => 1,
        ]);
        DB::table('konselor_konseling_pivot')->insert([
            'konseling_id' => 1, 
            'konselor_id' => 3,
        ]);
        DB::table('konselor_konseling_pivot')->insert([
            'konseling_id' => 2, 
            'konselor_id' => 2,
        ]);
        DB::table('konselor_konseling_pivot')->insert([
            'konseling_id' => 2, 
            'konselor_id' => 4,
        ]);
    }
}
