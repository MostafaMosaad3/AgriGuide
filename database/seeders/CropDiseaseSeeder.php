<?php

namespace Database\Seeders;

use App\Models\Crop;
use App\Models\Disease;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CropDiseaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $crops = Crop::all();
        $diseases = Disease::all();

        $crops->each(function ($crop) use ($diseases){
            $crop->diseases()->attach(
                $diseases->random(rand(3, 4))->pluck('id')->toArray()
            );
        });


    }
}
