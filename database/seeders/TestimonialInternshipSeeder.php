<?php

namespace Database\Seeders;

use App\Models\testimonial_internship;
use Illuminate\Database\Seeder;

class TestimonialInternshipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $oldTestimonials = [
            [
                'nama' => 'Bimo Setyo',
                'posisi' => 'IT Intern',
                'foto' => 'bimo-transformed.png',
                'testimoni' => 'Banyak insight yang saya dapat selama intern sebagai Staff IT di Afeksi dengan belajar berkordinasi dengan beberapa diisi dan belajar membangun startup dari nol.',
            ],
            [
                'nama' => 'Bimo Setyo',
                'posisi' => 'IT Intern',
                'foto' => 'bimo-transformed.png',
                'testimoni' => 'Banyak insight yang saya dapat selama intern sebagai Staff IT di Afeksi dengan belajar berkordinasi dengan beberapa diisi dan belajar membangun startup dari nol.',
            ],
            [
                'nama' => 'Octavia Syeira',
                'posisi' => 'Innovator Program Intern',
                'foto' => 'octi-transformed.png',
                'testimoni' => 'Magang di Afeksi telah membuka berbagai kesempatan bagi saya untuk terjun langsung dalam mengeksekusi suatu program/event.',
            ],
            [
                'nama' => 'Octavia Syeira',
                'posisi' => 'Innovator Program Intern',
                'foto' => 'octi-transformed.png',
                'testimoni' => 'Magang di Afeksi telah membuka berbagai kesempatan bagi saya untuk terjun langsung dalam mengeksekusi suatu program/event.',
            ],
            [
                'nama' => 'Elisabeth Desanti',
                'posisi' => 'IT Intern',
                'foto' => 'santi-transformed.png',
                'testimoni' => 'Internship di Afeksi seruu bgt. Kita sering banget brainstroming bareng & dapat ilmu baru. Sebelumnya belum pernah pakai figma, sekarang jadi paham dan seneng bisa nambah portofolio. Thank u Afeksi',
            ],
            [
                'nama' => 'Elisabeth Desanti',
                'posisi' => 'IT Intern',
                'foto' => 'santi-transformed.png',
                'testimoni' => 'Internship di Afeksi seruu bgt. Kita sering banget brainstroming bareng & dapat ilmu baru. Sebelumnya belum pernah pakai figma, sekarang jadi paham dan seneng bisa nambah portofolio. Thank u Afeksi',
            ],
        ];
        foreach ($oldTestimonials as $testimonial) {
            testimonial_internship::create($testimonial);
        }
    }
}
