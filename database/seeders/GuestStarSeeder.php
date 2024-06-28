<?php

namespace Database\Seeders;

use App\Models\GuestStar;
use Illuminate\Database\Seeder;

class GuestStarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'nama' => 'Heraldha Savira, Dip. ABRSM, S.Psi',
                'profil' => 'Clinical Physcology Grads',
                'avatar' => 'mukcur.png',
            ],
            [
                'nama' => 'Christy MS',
                'profil' => 'Growth Mindset and Relationship Mentor',
                'avatar' => 'mukcur.png',
            ],
            [
                'nama' => 'Elni Nainggolan',
                'profil' => 'Sadar Sejak Dini Indonesia',
                'avatar' => 'mukcur.png',
            ],
            [
                'nama' => 'Nindy Rahmatul Asro S.Psi',
                'profil' => 'Counselor @utara.sc and Professional Public Speaker',
                'avatar' => 'mukcur.png',
            ],
            [
                'nama' => 'Devina Faustanisa Nursyah Wibowo',
                'profil' => 'TED x BU 2021 & Speaker and LPDP Awardee at Harvard University',
                'avatar' => 'mukcur.png',
            ],
        ];

        for ($i = 0; $i < 5; $i++) {
            GuestStar::create([
                'nama_psikolog' => $data[$i]['nama'],
                'profil' => $data[$i]['profil'],
                'avatar' => $data[$i]['avatar'],
            ]);
        }
    }
}
