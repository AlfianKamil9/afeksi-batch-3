<?php

namespace Database\Seeders;

use App\Models\PaketLayananNonProfessional;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaketLayananNonProfessionalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $paket = [
            [
                'layanan_nonProfessionals_id' => 1,
                'nama_paket' => 'Paket Dasar',
                'harga' => '100000',
                'deskripsi_paket' => 'Fokus terhadap permasalahan parenting',
                'deskripsi_singkat' => 'Sesi konseling individu dengan seorang konselor berlisensi yang berspesialisasi dalam parenting.',
                'durasi' => 60,
                'jumlah_sesi' =>1,
                'deskripsi_durasi' => 'Durasi: 60 menit',
            ],
            [
                'layanan_nonProfessionals_id' => 1,
                'nama_paket' => 'Paket Premium',
                'harga' => '150000',
                'deskripsi_paket' => 'Membantu peran orang tua dalam menghadapi tumbuh kembang anak',
                'deskripsi_singkat' => 'Sesi Mentoring dalam kelompok dengan peserta lain yang memiliki minat dalam isu Parenting..',
                'durasi' => 75,
                'jumlah_sesi' =>1,
                'deskripsi_durasi' => 'Durasi 75 menit',
            ],
            [
                'layanan_nonProfessionals_id' => 1,
                'nama_paket' => 'Paket Platinum',
                'harga' => '200000',
                'deskripsi_paket' => 'Akses ke 4 sesi Parenting selama sebulan (satu sesi per minggu).',
                'deskripsi_singkat' => 'Sesi konseling dengan seorang konselor berlisensi yang berpengalaman dalam mendukung Parenting.',
                'durasi' => 90,
                'jumlah_sesi' => 4,
                'deskripsi_durasi' => 'Durasi 90 menit',
            ],
            [
                'layanan_nonProfessionals_id' => 2,
                'nama_paket' => 'Paket Dasar',
                'harga' => '100000',
                'deskripsi_paket' => 'Fokus terhadap permasalahan parenting',
                'deskripsi_singkat' => 'Sesi konseling individu dengan seorang konselor berlisensi yang berspesialisasi dalam premarriage.',
                'durasi' => 60,
                'jumlah_sesi' => 1,
                'deskripsi_durasi' => 'Durasi: 60 menit',
            ],
            [
                'layanan_nonProfessionals_id' => 2,
                'nama_paket' => 'Paket Premium',
                'harga' => '150000',
                'deskripsi_paket' => 'Membantu peran orang tua dalam menghadapi tumbuh kembang anak',
                'deskripsi_singkat' => 'Sesi Mentoring dalam kelompok dengan peserta lain yang memiliki minat dalam isu Premarriage..',
                'durasi' => 75,
                'jumlah_sesi' =>1,
                'deskripsi_durasi' => 'Durasi 75 menit',
            ],
            [
                'layanan_nonProfessionals_id' => 2,
                'nama_paket' => 'Paket Platinum',
                'harga' => '200000',
                'deskripsi_paket' => 'Akses ke 4 sesi Parenting selama sebulan (satu sesi per minggu).',
                'deskripsi_singkat' => 'Sesi konseling dengan seorang konselor berlisensi yang berpengalaman dalam mendukung Premarriage.',
                'durasi' => 90,
                'jumlah_sesi' => 4,
                'deskripsi_durasi' => 'Durasi 90 menit',
            ],
            [
                'layanan_nonProfessionals_id' => 3,
                'nama_paket' => 'Sesi Konseling Individu',
                'harga' => '95000',
                'deskripsi_singkat' => 'Sesi konseling individu dengan seorang konselor berlisensi.',
                'deskripsi_paket' => 'Fokus pada pemahaman masalah pribadi yang memengaruhi hubungan.',
                'durasi' => 60,
                'jumlah_sesi' => 1,
                'deskripsi_durasi' => 'Durasi: 60 menit',
            ],
            [
                'layanan_nonProfessionals_id' => 3,
                'nama_paket' => 'Sesi Konseling Pasangan',
                'harga' => '175000',
                'deskripsi_singkat' => 'Sesi konseling pasangan dengan seorang konselor berlisensi.',
                'deskripsi_paket' => 'Membantu pasangan dalam memecahkan konflik dan memperbaiki hubungan.',
                'durasi' => 75,
                'deskripsi_durasi' => 'Durasi: 75 menit',
                'jumlah_sesi' => 1,
            ],
            [
                'layanan_nonProfessionals_id' => 3,
                'nama_paket' => 'Sesi Kelompok Relationship Mahasiswa',
                'harga' => '60000',
                'deskripsi_singkat' => 'Sesi konseling dalam kelompok dengan mahasiswa lain yang menghadapi masalah hubungan serupa.',
                'deskripsi_paket' => 'Diskusi terbuka dan berbagi pengalaman.',
                'durasi' => 90,
                'jumlah_sesi' => 1,
                'deskripsi_durasi' => 'Durasi: 90 menit',
            ],
            [
                'layanan_nonProfessionals_id' => 3,
                'nama_paket' => 'Paket Bulanan Relationship Mahasiswa',
                'harga' => '350000',
                'deskripsi_singkat' => 'Sesi konseling dengan mahasiswa yang menghadapi masalah dalam hubungan dengan konselor berlisensi.',
                'deskripsi_paket' => 'Fleksibilitas untuk memilih sesi individu, sesi pasangan, atau sesi kelompok.',
                'durasi' => 60,
                'jumlah_sesi' => 4,
                'deskripsi_durasi' => 'Akses ke 4 sesi Konseling Relationship selama sebulan (satu sesi per minggu).',
            ],
        ];
        foreach ($paket as $data) {
            PaketLayananNonProfessional::create($data);
        }
    }
}
