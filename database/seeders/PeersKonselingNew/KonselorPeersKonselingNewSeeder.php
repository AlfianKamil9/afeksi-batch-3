<?php

namespace Database\Seeders\PeersKonselingNew;

use App\Models\Peers\PeersKonselor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KonselorPeersKonselingNewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'nama_konselor' => "PSIKOLOG 1",
                'profile_konselor' => "PROFILE PSIKOLOG 1",
                'instagram' => "PROFILE INSTAGRAM"
            ],
            [
                'nama_konselor' => "PSIKOLOG 2",
                'profile_konselor' => "PROFILE PSIKOLOG 2",
                'instagram' => "PROFILE INSTAGRAM"
            ]
        ];

        foreach ($data as $value) {
            PeersKonselor::create($value);
        }
    }
}
