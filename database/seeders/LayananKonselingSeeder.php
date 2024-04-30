<?php

namespace Database\Seeders;

use App\Models\LayananKonseling;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LayananKonselingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
            LayananKonseling::create([
                'jenis_layanan' => 'PROFESSIONAL KONSELING',
                'namaPengalaman' => 'Relationship Konseling'
            ]);
            LayananKonseling::create([
                'jenis_layanan' => 'PROFESSIONAL KONSELING',
                'namaPengalaman' => 'Quality Gender'
            ]);
            LayananKonseling::create([
                'jenis_layanan' => 'PEERS KONSELING',
                'namaPengalaman' => 'Peers Konseling'
            ]);
            // LayananKonseling::create([
            //     'jenis_layanan' => 'PEERS KONSELING',
            //     'namaPengalaman' => 'Quality Gender'
            // ]);
        
    }
}
