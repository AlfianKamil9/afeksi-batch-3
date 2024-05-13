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
            'user_id' => '1',
            'book_id' => '1'
        ]);
        MyEbook::create([
            'user_id' => '1',
            'book_id' => '1'
        ]);
        MyEbook::create([
            'user_id' => '1',
            'book_id' => '2'
        ]);
        MyEbook::create([
            'user_id' => '1',
            'book_id' => '2'
        ]);
    }
}
