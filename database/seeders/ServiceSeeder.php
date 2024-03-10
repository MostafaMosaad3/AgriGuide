<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Service::create([
            'id'=>'1' ,
            'name'=>'Soil Detection' ,
            'slug'=>'detect The type of the soil ',
            'image'=>url('storage/service/1.jpg')
        ]);

        Service::create([
            'id'=>'2' ,
            'name'=>'Suitable Plant' ,
            'slug'=>'The best plant rely on soil type ',
            'image'=>url('storage/service/2.jpg')
        ]);

        Service::create([
            'id'=>'3' ,
            'name'=>'Smart Sensor' ,
            'slug'=>'measure the amount af water',
            'image'=>url('storage/service/3.jpg')
        ]);

        Service::create([
            'id'=>'4' ,
            'name'=>'Disease Detection' ,
            'slug'=>'detect Pests and diseases that can hurt the plant ',
            'image'=>url('storage/service/1.jpg')
        ]);

        Service::create([
            'id'=>'5' ,
            'name'=>'Growing Tips' ,
            'slug'=>'include information on soil conditions, watering frequency, and other factors ',
            'image'=>url('storage/service/5.jpg')
        ]);

        Service::create([
            'id'=>'6' ,
            'name'=>'Consultation' ,
            'slug'=>'contact with one of our instructors ',
            'image'=>url('storage/service/6.jpg')
        ]);
    }
}
