<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $image1 = public_path('public/storage/user/1.png');

        User::create([
            'id' => '1' ,
           'name'=>'Mosaad' ,
            'email'=> 'Mosaad@gmail.com' ,
            'password'=> bcrypt('password') ,
            'thumbnail'=> url('storage/user/1.png') ,
            'is_admin'=>'1' ,
            'membership_level_id'=>'4'
        ] ,

        User::create([
            'id' => '2' ,
            'name'=>'Omar' ,
            'email'=> 'Omar@gmail.com' ,
            'password'=> 'password' ,
            'thumbnail'=> url('storage/user/2.png') ,
            'is_admin'=>'1' ,
            'membership_level_id'=>'3'
        ]) ,

        User::create([
            'id'=>'3' ,
            'name'=>'Mohamed' ,
            'email'=> 'Mohamed@gmail.com' ,
            'password'=> 'password' ,
            'thumbnail'=> url('storage/user/3.png') ,
            'is_admin'=>'1' ,
            'membership_level_id'=>'3'
        ])  ,

        User::create([
            'id'=>'4' ,
            'name'=>'Ahmad' ,
            'email'=> 'Ahmad@gmail.com' ,
            'password'=> 'password' ,
            'thumbnail'=> url('storage/user/4.jpg') ,
            'is_admin'=>'1' ,
            'membership_level_id'=>'2'
        ]) ,

        User::create([
            'id'=>'5' ,
            'name'=>'Sayed' ,
            'email'=> 'Sayed@gmail.com' ,
            'password'=> 'password' ,
            'thumbnail'=> url('storage/user/5.png') ,
            'is_admin'=>'1' ,
            'membership_level_id'=>'2'
        ] ),

        User::create([
            'id'=>'6' ,
            'name'=>'Nora' ,
            'email'=> 'Nora@gmail.com' ,
            'password'=> 'password' ,
            'thumbnail'=> url('storage/user/6.png') ,
            'membership_level_id'=>'1'
        ]),

        User::create([
            'id'=>'7' ,
            'name'=>'Ward' ,
            'email'=> 'Ward@gmail.com' ,
            'password'=> 'password' ,
            'thumbnail'=> url('storage/user/7.png') ,
            'membership_level_id'=>'1'
        ])   ,

        User::create([
            'id'=>'8' ,
            'name'=>'Walaa' ,
            'email'=> 'Walaa@gmail.com' ,
            'password'=> 'password' ,
            'thumbnail'=> url('storage/user/8.png') ,
            'membership_level_id'=>'1'
        ]) ,

        User::create([
            'id'=>'9' ,
            'name'=>'Hager' ,
            'email'=> 'Hager@gmail.com' ,
            'password'=> 'password' ,
            'thumbnail'=> url('storage/user/9.png') ,
            'membership_level_id'=>'1'
        ])  ,

        User::create([
            'id'=>'10' ,
            'name'=>'Menna' ,
            'email'=> 'Menna@gmail.com' ,
            'password'=> 'password' ,
            'thumbnail'=> url('storage/user/10.jpg') ,
            'membership_level_id'=>'1'
        ]) ,

        User::create([
            'id'=>'11' ,
            'name'=>'Dina' ,
            'email'=> 'Dina@gmail.com' ,
            'password'=> 'password' ,
            'thumbnail'=> url('storage/user/11.jpg') ,
            'membership_level_id'=>'1'
        ])
        );
    }
}
