<?php

namespace Database\Seeders;

use App\Models\Comment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Comment::create([
            'id'=>'1' ,
            'user_id'=> '10' ,
            'question_id'=>'1' ,
            'body'=> 'Soil is essential for agriculture as it provides a medium for plant growth, nutrients , water retention, and support for plant roots. Healthy soil is crucial for successful crop production.'
        ]) ;

        Comment::create([
            'id'=>'2' ,
            'user_id'=> '10' ,
            'question_id'=>'3' ,
            'body'=> 'Soil fertility can be improved by adding organic matter (compost, manure),using cover crops, rotating crops, and applying appropriate fertilizers.'
        ]) ;

        Comment::create([
            'id'=>'3' ,
            'user_id'=> '9' ,
            'question_id'=>'2' ,
            'body'=> 'Soil consists of mineral particles, organic matter, water, and air.The mineral particles include sand, silt, and clay.'
        ]) ;

        Comment::create([
            'id'=>'4' ,
            'user_id'=> '6' ,
            'question_id'=>'5' ,
            'body'=> 'Fertilizers provide essential nutrients to crops, such as nitrogen, phosphorus, and potassium,which are necessary for their growth and development. They enhance soil fertility and improve yield'
        ]) ;

        Comment::create([
            'id'=>'5' ,
            'user_id'=> '7' ,
            'question_id'=>'6' ,
            'body'=> 'Cover crops are plants grown to protect and enrich the soil. They help prevent erosion,suppress weeds, and improve soil fertility by adding organic matter when they are incorporated into the soil.'
        ]) ;

        Comment::create([
            'id'=>'6' ,
            'user_id'=> '8' ,
            'question_id'=>'10' ,
            'body'=> 'Common crop diseases include fungal, bacterial, and viral infections.Examples include rust, blight, wilt, and mosaic viruses'
        ]);
    }
}
