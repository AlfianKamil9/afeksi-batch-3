<?php

namespace Database\Seeders;

use App\Models\profesional_konseling;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProfesionalKonselingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
            profesional_konseling::create([
                'jenis_layanan' => 'PROFESSIONAL KONSELING',
                'namaPengalaman' => 'Relationship Konseling'
            ]);
            profesional_konseling::create([
                'jenis_layanan' => 'PROFESSIONAL KONSELING',
                'namaPengalaman' => 'Quality Gender'
            ]);
            profesional_konseling::create([
                'jenis_layanan' => 'PEERS KONSELING',
                'namaPengalaman' => 'Peers Konseling'
            ]);
            // profesional_konseling::create([
            //     'jenis_layanan' => 'PEERS KONSELING',
            //     'namaPengalaman' => 'Quality Gender'
            // ]);
        
    }
}
