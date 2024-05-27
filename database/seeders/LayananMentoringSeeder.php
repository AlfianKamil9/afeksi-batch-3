<?php

namespace Database\Seeders;

use App\Models\LayananMentoring;
use Illuminate\Database\Seeder;

class LayananMentoringSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $layanan = [
            // [
            //     'tipe_layanan' => 'KONSELING',
            //     'nama_layanan' => 'Peers Counseling',
            //     'slug' => 'peers-counseling'
            // ],
            [
                'tipe_layanan' => 'MENTORING',
                'nama_layanan' => 'Parenting Mentoring',
                'slug' => 'parenting-mentoring',
            ],
            [
                'tipe_layanan' => 'MENTORING',
                'nama_layanan' => 'Pre Marriage Mentoring',
                'slug' => 'pre-marriage-mentoring',
            ],
            [
                'tipe_layanan' => 'MENTORING',
                'nama_layanan' => 'Relationship Mentoring',
                'slug' => 'relationship-mentoring',
            ],
        ];
        foreach ($layanan as $data) {
            LayananMentoring::create($data);
        }
    }
}
