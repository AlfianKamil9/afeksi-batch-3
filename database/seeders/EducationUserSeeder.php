<?php

namespace Database\Seeders;

use App\Models\UserEducation;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EducationUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        UserEducation::create([
            'user_id' => 14, 
            'instansi' => 'Universitas Airlangga', 
            'jurusan' => 'Psikologi',
            'jenjang' => 'Strata I', 
            'ipk' => 3.78, 
            'tahun' => 2020
        ]);
        UserEducation::create([
            'user_id' => 11, 
            'instansi' => 'Universitas Airlangga', 
            'jurusan' => 'Psikologi',
            'jenjang' => 'Strata I', 
            'ipk' => 3.85, 
            'tahun' => 2019
        ]);
        UserEducation::create([
            'user_id' => 14, 
            'instansi' => 'Universitas Gajah Mada', 
            'jurusan' => 'Psikologi',
            'jenjang' => 'Strata II', 
            'ipk' => 3.78, 
            'tahun' => 2023
        ]);
        UserEducation::create([
            'user_id' => 12, 
            'instansi' => 'Universitas Indonesia', 
            'jurusan' => 'Psikologi',
            'jenjang' => 'Strata I', 
            'ipk' => 3.85, 
            'tahun' => 2020
        ]);
        UserEducation::create([
            'user_id' => 13, 
            'instansi' => 'Universitas Airlangga', 
            'jurusan' => 'Psikologi',
            'jenjang' => 'Strata I', 
            'ipk' => 3.75, 
            'tahun' => 2019
        ]);
         UserEducation::create([
            'user_id' => 13, 
            'instansi' => 'Universitas Indonesia', 
            'jurusan' => 'Psikologi',
            'jenjang' => 'Strata II', 
            'ipk' => 3.85, 
            'tahun' => 2021
        ]);
    }
}
