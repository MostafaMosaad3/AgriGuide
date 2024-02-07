<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'id'=>'1' ,
            'name'=>'soil'
        ]) ;

        Category::create([
            'id'=>'2' ,
            'name'=>'crops'
        ]) ;

        Category::create([
            'id'=>'3' ,
            'name'=>'fertilizers'
        ]) ;

        Category::create([
            'id'=>'4' ,
            'name'=>'sunlight'
        ]) ;

        Category::create([
            'id'=>'5' ,
            'name'=>'watering'
        ]) ;
    }
}
