<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //user
        $this->call(RolesSeeder::class);
        $this->call(LayananMentoringSeeder::class);
        $this->call(LayananKonselingSeeder::class);
        $this->call(PaketLayananMentoringSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(GuestStarSeeder::class);
        $this->call(EventCategorySeeder::class);
        $this->call(EventSeeder::class);
        $this->call(KonselorsSeeder::class);
        $this->call(EventMaterialSessionSeeder::class);
        $this->call(categoryEbookSeeder::class);
        $this->call(EbookSeeder::class);
        $this->call(EcourseSeeder::class);
        $this->call(InternshipSeeder::class);
        $this->call(ArtikelSeeder::class);
        $this->call(bankSeeder::class);
        $this->call(VoucherSeeder::class);
        $this->call(PaketLayananProfessionalKonselingSeeder::class);
        $this->call(PsikologMentoringSeeder::class);
        $this->call(mentoringPsikologPivotSeeder::class);
        $this->call(konselingKonselorSeeder::class);
        $this->call(EducationUserSeeder::class);
        $this->call(TestimonialInternshipSeeder::class);
        $this->call(RatingKonselorSeeder::class);
        $this->call(MyEbookSeeder::class);
        $this->call(MyMentoringSeeder::class);

    }
}
