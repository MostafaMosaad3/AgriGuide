<?php

namespace Database\Seeders;

use App\Models\MemberShip_level;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class membership_levels_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        MemberShip_level::create([
            'id'=>'1' ,
            'name'=>'Trial' ,
            'Feature 1' =>'Subscribed to current level' ,
            'Feature 2' =>'Three attempts to access features from higher levels.' ,
            'Price'=>'Free'
        ]);


        MemberShip_level::create([
            'id'=>'2' ,
            'name'=>'Basic' ,
            'Feature 1' =>'Post questions' ,
            'Feature 2' =>'Organize tasks effectively' ,
            'Feature 3' =>'Edit task details as needed' ,
            'Feature 4' =>'Receive timely notifications' ,
            'Price'=>'50EG/Month'
        ]);

        MemberShip_level::create([
            'id'=>'3' ,
            'name'=>'Premium' ,
            'Feature 1' =>'Live chat with our experts for personalized support' ,
            'Feature 2' =>'Gain insights through direct interaction' ,
            'Price'=>'100EG/Month'
        ]);

        MemberShip_level::create([
            'id'=>'4' ,
            'name'=>'Enterprise' ,
            'Feature 1' =>'Measure soil water percentage accurately.' ,
            'Feature 2' =>'Customize watering schedules based on plant requirements' ,
            'Price'=>'150EG/Month'
        ]);

    }
}
