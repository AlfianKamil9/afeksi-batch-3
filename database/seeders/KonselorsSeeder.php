<?php

namespace Database\Seeders;

use App\Models\Konselor;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KonselorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Konselor::create([
            'user_id' => 13,
            'profile' => "Konselor Spesialis Relationship", 
            'deskripsi' => "test"
        ]);

        Konselor::create([
            'user_id' => 11,
            'profile' => "Konselor Spesialis Equality Gender", 
            'deskripsi' => "test"
        ]);

        Konselor::create([
            'user_id' => 14,
            'profile' => "Konselor Spesialis Relationship", 
            'deskripsi' => "test"
        ]);

        Konselor::create([
            'user_id' => 12,
            'profile' => "Konselor Spesialis Family Issue", 
            'deskripsi' => "test"
        ]);

    }
}