<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class mentoringPsikologPivotSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('psikolog_mentoring_pivot')->insert([
            'mentoring_id' => 1 ,
            'psikolog_id' =>6,
        ]);
        DB::table('psikolog_mentoring_pivot')->insert([
            'mentoring_id' => 1 ,
            'psikolog_id' =>1,
        ]);
        DB::table('psikolog_mentoring_pivot')->insert([
            'mentoring_id' => 2 ,
            'psikolog_id' =>2,
        ]);
        DB::table('psikolog_mentoring_pivot')->insert([
            'mentoring_id' => 2,
            'psikolog_id' =>4,
        ]);
        DB::table('psikolog_mentoring_pivot')->insert([
            'mentoring_id' => 3 ,
            'psikolog_id' =>3,
        ]);
        DB::table('psikolog_mentoring_pivot')->insert([
            'mentoring_id' => 3 ,
            'psikolog_id' =>5,
        ]);
// ------------------------------------------
        DB::table('konselor_topics')->insert([
            'jenis_topic' => 'Relationship',
            'konselor_id' => 3,
        ]);
        DB::table('konselor_topics')->insert([
            'jenis_topic' => 'Relationship',
            'konselor_id' => 1,
        ]);
        DB::table('konselor_topics')->insert([
            'jenis_topic' => 'Relationship',
            'konselor_id' => 4,
        ]);
        DB::table('konselor_topics')->insert([
            'jenis_topic' => 'Kesetaraan',
            'konselor_id' => 4,
        ]);
        DB::table('konselor_topics')->insert([
            'jenis_topic' => 'Kesetaraan',
            'konselor_id' => 2,
        ]);
        DB::table('konselor_topics')->insert([
            'jenis_topic' => 'Family Issue',
            'konselor_id' => 4,
        ]);
        DB::table('konselor_topics')->insert([
            'jenis_topic' => 'Kesehatan',
            'konselor_id' => 2,
        ]);

    }
}
