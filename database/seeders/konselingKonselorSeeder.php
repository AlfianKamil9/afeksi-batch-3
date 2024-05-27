<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
        DB::table('konselor_konseling_pivot')->insert([
            'konseling_id' => 4,
            'konselor_id' => 3,
        ]);
        DB::table('konselor_konseling_pivot')->insert([
            'konseling_id' => 4,
            'konselor_id' => 2,
        ]);
        DB::table('konselor_konseling_pivot')->insert([
            'konseling_id' => 5,
            'konselor_id' => 4,
        ]);
        DB::table('konselor_konseling_pivot')->insert([
            'konseling_id' => 5,
            'konselor_id' => 1,
        ]);
        DB::table('konselor_konseling_pivot')->insert([
            'konseling_id' => 6,
            'konselor_id' => 1,
        ]);
        DB::table('konselor_konseling_pivot')->insert([
            'konseling_id' => 6,
            'konselor_id' => 3,
        ]);
    }
}
