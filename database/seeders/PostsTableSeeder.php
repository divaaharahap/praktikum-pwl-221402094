<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory;
use DB;


class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts  =[];
        $faker = Factory::create();

        for($i = 1; $i<= 10; $i++){
            $posts[]= [
                'title' => $faker -> title($gender = 'male'|'female'),
                'excerpt' => $faker -> sentence,
                'image' => $faker -> imageURL,
                'content' => $faker -> paragraph,
                'author_id' => mt_rand(1,10)
            ];
        }
        DB ::table('posts')->insert($posts);
    }
    }