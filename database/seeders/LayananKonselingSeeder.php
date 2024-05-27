<?php

namespace Database\Seeders;

use App\Models\LayananKonseling;
use Illuminate\Database\Seeder;

class LayananKonselingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        LayananKonseling::create([
            'tipe_layanan' => 'PROFESSIONAL KONSELING',
            'nama_layanan' => 'Relationship',
            'details' => 'Layanan Relationship membantu individu dan pasangan membangun hubungan yang sehat, harmonis, dan berkelanjutan. Layanan ini dirancang untuk memberikan pemahaman, dukungan, dan alat yang diperlukan untuk mengatasi masalah yang mungkin muncul dalam hubungan, serta memperkuat ikatan antarindividu dan pasangan.',
            'image' => 'layanan-konseling1.jpeg',
        ]);
        LayananKonseling::create([
            'tipe_layanan' => 'PROFESSIONAL KONSELING',
            'nama_layanan' => 'Quality Gender',
            'details' => 'Layanan Konseling Kesetaraan Gender di Afeksi adalah bagian integral dari produk kami yang bertujuan untuk membantu individu dan pasangan membangun hubungan yang sehat, seimbang, dan setara. Layanan ini menawarkan bimbingan profesional yang fokus pada isu-isu gender, dengan tujuan mempromosikan pemahaman yang lebih baik tentang peran dan tanggung jawab dalam hubungan.',
            'image' => 'layanan-konseling2.jpeg',
        ]);
        LayananKonseling::create([
            'tipe_layanan' => 'PEERS KONSELING',
            'nama_layanan' => 'Peers Konseling',
        ]);
        LayananKonseling::create([
            'tipe_layanan' => 'PROFESSIONAL KONSELING',
            'nama_layanan' => 'Education',
            'details' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.',
            'image' => 'layanan-konseling3.jpeg',
        ]);
        LayananKonseling::create([
            'tipe_layanan' => 'PROFESSIONAL KONSELING',
            'nama_layanan' => 'Health',
            'details' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.',
            'image' => 'layanan-konseling4.jpeg',
        ]);
        LayananKonseling::create([
            'tipe_layanan' => 'PROFESSIONAL KONSELING',
            'nama_layanan' => 'Family Issues',
            'details' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.',
            'image' => 'layanan-konseling5.jpeg',
        ]);

    }
}
