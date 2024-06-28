<?php

namespace Database\Seeders\PeersKonselingNew;

use App\Models\Peers\PeersPaket;
use Illuminate\Database\Seeder;

class PaketPeersKonselingNewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $paket = [
            [
                'nama_paket' => 'Paket Gratis',
                'headline_paket' => 'Paket Gratis dengan Syarat',
                'harga_paket' => 0,
                'durasi_paket' => 60,
                'deskripsi_paket' => 'Paket Ini Gratis Bro',
                'status_paket' => 'free'
            ], [
                'nama_paket' => 'Paket Single',
                'headline_paket' => 'Sesi konseling individu dengan seorang konselor berlisensi.',
                'harga_paket' => 95000,
                'durasi_paket' => 60,
                'deskripsi_paket' => 'Fokus pada pemahaman masalah pribadi yang memengaruhi hubungan.',
                'status_paket' => 'paid'
            ], [
                'nama_paket' => 'Paket Pasangan',
                'headline_paket' => 'Sesi konseling individu dengan seorang konselor berlisensi.',
                'harga_paket' => 175000,
                'durasi_paket' => 75,
                'deskripsi_paket' => 'Membantu pasangan dalam memecahkan konflik dan memperbaiki hubungan..',
                'status_paket' => 'paid'
            ]
        ];

        foreach ($paket as $data) {
            PeersPaket::create($data);
        }
    }
}
