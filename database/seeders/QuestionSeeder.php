<?php

namespace Database\Seeders;

use App\Models\Question;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Question::create([
            'id'=>'1' ,
            'user_id'=>'6' ,
            'likes' =>'7' ,
            'body'=>'Why is soil important in agriculture?' ,
            'image' =>url('storage/question/1.png')
        ]) ;

        Question::create([
            'id'=>'2' ,
            'likes' =>'5' ,
            'user_id'=>'7' ,
            'body'=>'What are the primary components of soil?'
        ]) ;

        Question::create([
            'id'=>'3' ,
            'likes' =>'12' ,
            'user_id'=>'8' ,
            'body'=>'How can soil fertility be improved?'
        ]) ;

        Question::create([
            'id'=>'4' ,
            'user_id'=>'9' ,
            'likes' =>'10' ,
            'body'=>'What are cover crops, and why are they important?' ,
            'image' =>url('storage/question/2.png')

        ])  ;

        Question::create([
            'id'=>'5' ,
            'likes' =>'3' ,
            'user_id'=>'10' ,
            'body'=>'How do crops benefit from fertilizers?'
        ]) ;

        Question::create([
            'id'=>'6' ,
            'user_id'=>'11' ,
            'body'=>'What are the common types of crop diseases?'
        ]);

        Question::create([
            'id'=>'7' ,
            'user_id'=>'6' ,
            'body'=>'How can farmers control crop diseases?'
        ]);

        Question::create([
            'id'=>'8' ,
            'user_id'=>'7' ,
            'body'=>'What are the signs of nutrient deficiency in crops?'
        ])  ;

        Question::create([
            'id'=>'9' ,
            'user_id'=>'8' ,
            'body'=>'What are organic farming practices?'
        ]);

        Question::create([
            'id'=>'10' ,
            'user_id'=>'9' ,
            'body'=>'How can farmers conserve water in agriculture?'
        ]);

        Question::create([
            'id'=>'11' ,
            'user_id'=>'10' ,
            'body'=>'What is sustainable agriculture?'
        ]);
    }
}
