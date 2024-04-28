<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PsikologMentoring;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PsikologMentoringSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PsikologMentoring::create([
            'user_id' => 4,
            'profile' => "Psikolog Spesialis Parenting Mentoring", 
            'deskripsi' => "test"
        ]);

        PsikologMentoring::create([
            'user_id' => 5,
            'profile' => "Psikolog Spesialis Pre-Marriage Mentoring", 
            'deskripsi' => "test"
        ]);

        PsikologMentoring::create([
            'user_id' => 9,
            'profile' => "Psikolog Spesialis Relationship Mentoring", 
            'deskripsi' => "test"
        ]);
        
        PsikologMentoring::create([
            'user_id' => 10,
            'profile' => "Psikolog Spesialis Relationship Mentoring", 
            'deskripsi' => "test"
        ]);
        
        PsikologMentoring::create([
            'user_id' => 6,
            'profile' => "Psikolog Spesialis Pre-Marriage Mentoring", 
            'deskripsi' => "test"
        ]);

        PsikologMentoring::create([
          'user_id' => 8,
            'profile' => "Psikolog Spesialis Relationship Mentoring", 
            'deskripsi' => "test"
        ]);

        PsikologMentoring::create([
           'user_id' => 7,
            'profile' => "Psikolog Spesialis Parenting Mentoring", 
            'deskripsi' => "test"
        ]);
    }
}
