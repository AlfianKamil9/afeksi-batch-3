<?php

namespace Database\Seeders;

use App\Models\LayananNonProfessional;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LayananNonProfessionalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $layanan = [
            // [
            //     'jenis_layanan' => 'KONSELING',
            //     'nama_layanan' => 'Peers Counseling',
            //     'slug' => 'peers-counseling'
            // ],
            [
                'jenis_layanan' => 'MENTORING',
                'nama_layanan' => 'Parenting Mentoring',
                'slug' => 'parenting-mentoring'
            ],
            [
                'jenis_layanan' => 'MENTORING',
                'nama_layanan' => 'Pre Marriage Mentoring',
                'slug' => 'pre-marriage-mentoring'
            ],
            [
                'jenis_layanan' => 'MENTORING',
                'nama_layanan' => 'Relationship Mentoring',
                'slug' => 'relationship-mentoring'
            ]
        ];
        foreach ($layanan as $data) {
            LayananNonProfessional::create($data);
        }
    }
}
