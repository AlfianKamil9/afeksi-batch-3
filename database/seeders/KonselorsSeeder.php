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
            'nama' => "Alex Cruis S.Psi.", 
            'pendidikan' => "Sarjana ITB", 
            'avatar' => "alex.png", 
            'profile' => "Konselor Spesialis Relationship", 
            'deskripsi' => "test"
        ]);

        Konselor::create([
            'nama' => "Cania Cruis S.Psi.", 
            'pendidikan' => "Sarjana ITS", 
            'avatar' => "alex.png", 
            'profile' => "Konselor Spesialis Equality Gender", 
            'deskripsi' => "test"
        ]);

        Konselor::create([
            'nama' => "Kanya Kenzia S.Psi.", 
            'pendidikan' => "Sarjana UNAIR", 
            'avatar' => "alex.png", 
            'profile' => "Konselor Spesialis Relationship", 
            'deskripsi' => "test"
        ]);

        Konselor::create([
            'nama' => "Aziza Florinta S.Psi.", 
            'pendidikan' => "Sarjana UNAIR", 
            'avatar' => "alex.png", 
            'profile' => "Konselor Spesialis Family Issue", 
            'deskripsi' => "test"
        ]);

    }
}