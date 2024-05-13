<?php

namespace Database\Seeders;

use App\Models\RatingKonselor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class RatingKonselorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      RatingKonselor::create([
        'user_id' => '1',
        'konselor_id' => 10,
        'tanggal_rating' => '2024-5-7',
        'rating' => '5',
        'review' => "Sangat Membantu"
      ]);
      RatingKonselor::create([
        'user_id' => '1',
        'konselor_id' => 11,
        'tanggal_rating' => '2024-5-8',
        'rating' => '4',
        'review' => "Sangat Membantu"
      ]);
      RatingKonselor::create([
        'user_id' => '1',
        'konselor_id' => 12,
        'tanggal_rating' => '2024-5-9',
        'rating' => '5',
        'review' => "Sangat Membantu"
      ]);
      RatingKonselor::create([
        'user_id' => '1',
        'konselor_id' => 13,
        'tanggal_rating' => '2024-5-10',
        'rating' => '5',
        'review' => "Sangat Membantu"
      ]);

    
    }
}
