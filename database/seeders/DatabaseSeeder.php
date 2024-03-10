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
        $this->call(membership_levels_Seeder::class);
        $this->call(UserSeeder::class);
        $this->call(QuestionSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(PostSeeder::class);
        $this->call(CommentSeeder::class);
        $this->call(ServiceSeeder::class);
        $this->call(SoilSeeder::class);
        $this->call(CropSeeder::class);
        $this->call(DiseaseSeeder::class);
        $this->call(CropDiseaseSeeder::class);


    }
}
