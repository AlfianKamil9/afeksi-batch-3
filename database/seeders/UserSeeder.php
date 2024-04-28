<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [[
            'nama' => 'Azura Syahreza',
            'jenisKelamin' => 'Laki-laki',
            'password' => 'Password123',
            'email' => 'azura@gmail.com',
            'umur' => 20,
            'no_whatsapp' => '081234335459',
            'role_id' => 3,
            'avatar' => null

        ],
        [
            'nama' => 'Super Admin',
            'jenisKelamin' => 'Perempuan',
            'password' => 'superadmin123',
            'email' => 'superadmin.afeksi@gmail.com',
            'umur' => 19,
            'no_whatsapp' => '081234335457',
            'role_id' => 3,
            'avatar' => null
        ],
        [
            'nama' => 'Administrator',
            'jenisKelamin' => 'Perempuan',
            'password' => 'admin123',
            'email' => 'admin.afeksidn@gmail.com',
            'umur' => 10,
            'no_whatsapp' => '081234335457',
            'role_id' => 2,
            'avatar' => null
        ],
        [
            'nama' => 'Najwa Shihab S.Psi',
            'jenisKelamin' => 'Perempuan',
            'password' => 'psikolognajwa',
            'email' => 'psikolog.najwa@gmail.com',
            'umur' => 30,
            'no_whatsapp' => '081234335457',
            'role_id' => 5,
            'avatar' => null
        ],
        [
            'nama' => 'Maudy Ayunda S.Psi',
            'jenisKelamin' => 'Perempuan',
            'password' => 'psikologmaudy',
            'email' => 'psikolog.maudy@gmail.com',
            'umur' => 30,
            'no_whatsapp' => '081234335457',
            'role_id' => 5,
            'avatar' => null
        ],
        [
            'nama' => 'Taylor Swift S.Psi',
            'jenisKelamin' => 'Perempuan',
            'password' => 'psikologtaylor',
            'email' => 'psikolog.taylor@gmail.com',
            'umur' => 30,
            'no_whatsapp' => '081234335457',
            'role_id' => 5,
            'avatar' => null
        ],
        [
            'nama' => 'Gayatri S.Psi',
            'jenisKelamin' => 'Perempuan',
            'password' => 'psikologgayatri',
            'email' => 'psikolog.gayatri@gmail.com',
            'umur' => 30,
            'no_whatsapp' => '081234335457',
            'role_id' => 5,
            'avatar' => null
        ],
        [
            'nama' => 'Bunga Citra S.Psi',
            'jenisKelamin' => 'Perempuan',
            'password' => 'psikologbunga',
            'email' => 'psikolog.bunga@gmail.com',
            'umur' => 30,
            'no_whatsapp' => '081234335457',
            'role_id' => 5,
            'avatar' => null
        ],
        [
            'nama' => 'Elda Fitri S.Psi',
            'jenisKelamin' => 'Perempuan',
            'password' => 'psikologelda',
            'email' => 'psikolog.elda@gmail.com',
            'umur' => 30,
            'no_whatsapp' => '081234335457',
            'role_id' => 5,
            'avatar' => null
        ],
        [
            'nama' => 'Safitri S.Psi',
            'jenisKelamin' => 'Perempuan',
            'password' => 'psikologsafitri',
            'email' => 'psikolog.safitri@gmail.com',
            'umur' => 30,
            'no_whatsapp' => '081234335457',
            'role_id' => 5,
            'avatar' => null
        ],
        [
            'nama' => 'Kanya S.Psi',
            'jenisKelamin' => 'Perempuan',
            'password' => 'konselorkanya',
            'email' => 'konselor.kanya@gmail.com',
            'umur' => 30,
            'no_whatsapp' => '081234335457',
            'role_id' => 4,
            'avatar' => null
        ],
        [
            'nama' => 'Aziza S.Psi',
            'jenisKelamin' => 'Perempuan',
            'password' => 'konseloraziza',
            'email' => 'konselor.aziza@gmail.com',
            'umur' => 30,
            'no_whatsapp' => '081234335457',
            'role_id' => 4,
            'avatar' => null
        ],
        [
            'nama' => 'Alexa S.Psi',
            'jenisKelamin' => 'Perempuan',
            'password' => 'konseloralexa',
            'email' => 'konselor.alexa@gmail.com',
            'umur' => 30,
            'no_whatsapp' => '081234335457',
            'role_id' => 4,
            'avatar' => null
        ],
        [
            'nama' => 'Kezia S.Psi',
            'jenisKelamin' => 'Perempuan',
            'password' => 'konselorkezia',
            'email' => 'konselor.kezia@gmail.com',
            'umur' => 30,
            'no_whatsapp' => '081234335457',
            'role_id' => 4,
            'avatar' => null
        ]
    ];

        for ($i=0; $i < 14; $i++) {
            User::create([
                "nama" => $data[$i]['nama'],
                "jenisKelamin" => $data[$i]['jenisKelamin'],
                "password" => $data[$i]["password"],
                "email" => $data[$i]["email"],
                "umur" => $data[$i]["umur"],
                "no_whatsapp" => $data[$i]["no_whatsapp"],
                "role_id" => $data[$i]["role_id"],
                "avatar" => $data[$i]["avatar"],
            ]);
        }
    }
}