<?php

namespace Database\Seeders;

use App\Models\MyMentoring;
use Illuminate\Database\Seeder;

class MyMentoringSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MyMentoring::create([
            'user_id' => '1',
            'mentoring_id' => '1',
            'transaksi_id' => '212',
            'tanggal_mentoring' => '2024-05-10',
            'waktu' => '08.00',
            'link' => 'url:wjhbawjdhwbd',
        ]);
        MyMentoring::create([
            'user_id' => '1',
            'mentoring_id' => '2',
            'transaksi_id' => '313',
            'tanggal_mentoring' => '2024-05-11',
            'waktu' => '08.00',
            'link' => 'url:wjhbawjdhwbd',
        ]);
        MyMentoring::create([
            'user_id' => '1',
            'mentoring_id' => '3',
            'transaksi_id' => '212',
            'tanggal_mentoring' => '2024-05-11',
            'waktu' => '09.00',
            'link' => 'url:wjhbawjdhwbd',
        ]);
        MyMentoring::create([
            'user_id' => '1',
            'mentoring_id' => '1',
            'transaksi_id' => '414',
            'tanggal_mentoring' => '2024-05-11',
            'waktu' => '11.00',
            'link' => 'url:wjhbawjdhwbd',
        ]);
        MyMentoring::create([
            'user_id' => '1',
            'mentoring_id' => '2',
            'transaksi_id' => '515',
            'tanggal_mentoring' => '2024-05-11',
            'waktu' => '14.00',
            'link' => 'url:wjhbawjdhwbd',
        ]);
    }
}
