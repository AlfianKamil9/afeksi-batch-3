<?php

namespace Database\Seeders;

use App\Models\RolesUser;
use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = ['superadmin', 'admin', 'user', 'konselor', 'psikolog', 'writter'];

        foreach ($data as $key => $val) {
            RolesUser::create([
                'roles' => $val,
            ]);
        }

    }
}
