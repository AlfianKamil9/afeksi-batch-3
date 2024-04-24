<?php

namespace Database\Seeders;

use App\Models\PaketProfesionalConseling;
use App\Models\profresional_conseling;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaketLayananProfessionalKonselingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $paket = [
            [
                'nama_paket' => 'Sesi Konseling Individu',
                'professional_conseling_id' => 1,
                'harga' => 95000,
                'durasi' => 60,
                'jumlah_sesi' => 1,
                'deskripsi_singkat' => 'Sesi konseling individu dengan seorang konselor berlisensi.',
                'deskripsi_paket' => 'Fokus pada pemahaman masalah pribadi yang memengaruhi hubungan.',
                'deskripsi_durasi' => 'Durasi: 60 menit',
            ],
            [
                'nama_paket' => 'Sesi Konseling Pasangan',
                'professional_conseling_id' => 1,
                'harga' => 175000,
                'jumlah_sesi' => 1,
                'durasi' => 75,
                'deskripsi_singkat' => 'Sesi konseling pasangan dengan seorang konselor berlisensi.',
                'deskripsi_paket' => 'Membantu pasangan dalam memecahkan konflik dan memperbaiki hubungan.',
                'deskripsi_durasi' => 'Durasi: 75 menit',
            ],
            [
                'nama_paket' => 'Sesi Kelompok Relationship Mahasiswa',
                'professional_conseling_id' => 1,
                'harga' => 60000,
                'jumlah_sesi' => 1,
                'durasi' => 90,
                'deskripsi_singkat' => 'Sesi konseling dalam kelompok dengan mahasiswa lain yang menghadapi masalah hubungan serupa.',
                'deskripsi_paket' => 'Diskusi terbuka dan berbagi pengalaman.',
                'deskripsi_durasi' => 'Durasi: 90 menit',
            ],
            [
                'nama_paket' => 'Sesi Konseling Individu',
                'professional_conseling_id' => 2,
                'harga' => 150000,
                'jumlah_sesi' => 1,
                'durasi' => 60,
                'deskripsi_singkat' => 'Sesi konseling individu dengan seorang konselor berlisensi yang berspesialisasi dalam isu kesetaraan gender.',
                'deskripsi_paket' => 'Diskusi mendalam tentang peran gender dalam kehidupan individu.',
                'deskripsi_durasi' => 'Durasi: 60 menit',
            ],
            [
                'nama_paket' => 'Sesi Konseling Pasangan',
                'professional_conseling_id' => 2,
                'harga' => 250000,
                'jumlah_sesi' => 1,
                'durasi' => 75,
                'deskripsi_singkat' => 'Sesi konseling pasangan dengan seorang konselor berlisensi yang berpengalaman dalam mendukung hubungan yang seimbang dan setara.',
                'deskripsi_paket' => 'Fokus pada pemahaman dan penerapan kesetaraan gender dalam hubungan.',
                'deskripsi_durasi' => 'Durasi: 75 menit',
            ],
            [
                'nama_paket' => 'Sesi Kelompok Kesetaraan Gender',
                'professional_conseling_id' => 2,
                'harga' => 75000,
                'jumlah_sesi' => 1,
                'durasi' => 90,
                'deskripsi_singkat' => 'Sesi konseling dalam kelompok dengan peserta lain yang memiliki minat dalam isu kesetaraan gender.',
                'deskripsi_paket' => 'Diskusi terbuka dan pembelajaran kolaboratif tentang kesetaraan gender.',
                'deskripsi_durasi' => 'Durasi: 90 menit',
            ],
            [
                'nama_paket' => 'Paket Bulanan Kesetaraan Gender',
                'professional_conseling_id' => 2,
                'harga' => 400000,
                'jumlah_sesi' => 4,
                'durasi' => 60,
                'deskripsi_singkat' => 'Sesi konseling dengan seorang konselor berlisensi yang berpengalaman dalam mendukung hubungan yang seimbang dan setara.',
                'deskripsi_paket' => 'Fleksibilitas untuk memilih sesi individu, sesi pasangan, atau sesi kelompok.',
                'deskripsi_durasi' => 'Akses ke 4 sesi Konseling Kesetaraan Gender selama sebulan (satu sesi per minggu).'

            ],
            // PEERS
            [
                'nama_paket' => 'Sesi Konseling Individu',
                'professional_conseling_id' => 3,
                'harga' => 95000,
                'durasi' => 60,
                'jumlah_sesi' => 1,
                'deskripsi_singkat' => 'Sesi konseling individu dengan seorang konselor berlisensi.',
                'deskripsi_paket' => 'Fokus pada pemahaman masalah pribadi yang memengaruhi hubungan.',
                'deskripsi_durasi' => 'Durasi: 60 menit',
            ],
            [
                'nama_paket' => 'Sesi Konseling Pasangan',
                'professional_conseling_id' => 3,
                'harga' => 175000,
                'jumlah_sesi' => 1,
                'durasi' => 75,
                'deskripsi_singkat' => 'Sesi konseling pasangan dengan seorang konselor berlisensi.',
                'deskripsi_paket' => 'Membantu pasangan dalam memecahkan konflik dan memperbaiki hubungan.',
                'deskripsi_durasi' => 'Durasi: 75 menit',
            ],
            [
                'nama_paket' => 'Sesi Kelompok Relationship Mahasiswa',
                'professional_conseling_id' => 3,
                'harga' => 60000,
                'jumlah_sesi' => 1,
                'durasi' => 90,
                'deskripsi_singkat' => 'Sesi konseling dalam kelompok dengan mahasiswa lain yang menghadapi masalah hubungan serupa.',
                'deskripsi_paket' => 'Diskusi terbuka dan berbagi pengalaman.',
                'deskripsi_durasi' => 'Durasi: 90 menit',
            ],
        //    [
        //         'nama_paket' => 'Sesi Konseling Individu',
        //         'professional_conseling_id' => 4,
        //         'harga' => 150000,
        //         'jumlah_sesi' => 1,
        //         'durasi' => 60,
        //         'deskripsi_singkat' => 'Sesi konseling individu dengan seorang konselor berlisensi yang berspesialisasi dalam isu kesetaraan gender.',
        //         'deskripsi_paket' => 'Diskusi mendalam tentang peran gender dalam kehidupan individu.',
        //         'deskripsi_durasi' => 'Durasi: 60 menit',
        //     ],
        //     [
        //         'nama_paket' => 'Sesi Konseling Pasangan',
        //         'professional_conseling_id' => 4,
        //         'harga' => 250000,
        //         'jumlah_sesi' => 1,
        //         'durasi' => 75,
        //         'deskripsi_singkat' => 'Sesi konseling pasangan dengan seorang konselor berlisensi yang berpengalaman dalam mendukung hubungan yang seimbang dan setara.',
        //         'deskripsi_paket' => 'Fokus pada pemahaman dan penerapan kesetaraan gender dalam hubungan.',
        //         'deskripsi_durasi' => 'Durasi: 75 menit',
        //     ],
        //     [
        //         'nama_paket' => 'Sesi Kelompok Kesetaraan Gender',
        //         'professional_conseling_id' => 4,
        //         'harga' => 75000,
        //         'jumlah_sesi' => 1,
        //         'durasi' => 90,
        //         'deskripsi_singkat' => 'Sesi konseling dalam kelompok dengan peserta lain yang memiliki minat dalam isu kesetaraan gender.',
        //         'deskripsi_paket' => 'Diskusi terbuka dan pembelajaran kolaboratif tentang kesetaraan gender.',
        //         'deskripsi_durasi' => 'Durasi: 90 menit',
        //     ],
        //     [
        //         'nama_paket' => 'Paket Bulanan Kesetaraan Gender',
        //         'professional_conseling_id' => 4,
        //         'harga' => 400000,
        //         'jumlah_sesi' => 4,
        //         'durasi' => 60,
        //         'deskripsi_singkat' => 'Sesi konseling dengan seorang konselor berlisensi yang berpengalaman dalam mendukung hubungan yang seimbang dan setara.',
        //         'deskripsi_paket' => 'Fleksibilitas untuk memilih sesi individu, sesi pasangan, atau sesi kelompok.',
        //         'deskripsi_durasi' => 'Akses ke 4 sesi Konseling Kesetaraan Gender selama sebulan (satu sesi per minggu).'

        //     ],

        ];
        foreach ($paket as $data) {
            PaketProfesionalConseling::create($data);
        }
    }
}
