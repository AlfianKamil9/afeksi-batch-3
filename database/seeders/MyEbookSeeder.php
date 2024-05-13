<?php

namespace Database\Seeders;

use App\Models\MyEbook;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MyEbookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MyEbook::create([
            'user_id' => '13',
            'book_id' => '50'
        ]);
        MyEbook::create([
            'user_id' => '11',
            'book_id' => '55'
        ]);
        MyEbook::create([
            'user_id' => '14',
            'book_id' => '60'
        ]);
        MyEbook::create([
            'user_id' => '12',
            'book_id' => '65'
        ]);
    }
}
