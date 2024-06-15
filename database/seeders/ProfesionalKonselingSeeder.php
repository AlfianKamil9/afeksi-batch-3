<?php

namespace Database\Seeders;

use App\Models\profresional_conseling;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProfesionalKonselingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
            profresional_conseling::create([
                'jenis_layanan' => 'PROFESSIONAL KONSELING',
                'namaPengalaman' => 'Relationship Konseling'
            ]);
            profresional_conseling::create([
                'jenis_layanan' => 'PROFESSIONAL KONSELING',
                'namaPengalaman' => 'Quality Gender'
            ]);
            profresional_conseling::create([
                'jenis_layanan' => 'PEERS KONSELING',
                'namaPengalaman' => 'Peers Konseling'
            ]);
            // profresional_conseling::create([
            //     'jenis_layanan' => 'PEERS KONSELING',
            //     'namaPengalaman' => 'Quality Gender'
            // ]);
        
    }
}
