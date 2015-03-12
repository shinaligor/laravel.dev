<?php

use Illuminate\Database\Seeder;
use \App\Post;


class PostsSeeder extends Seeder
{
  public function run()
  {
    $faker = Faker\Factory::create();
    for ($i = 0; $i<20; $i++)
    {
      Post::create([
       'title' => $faker->sentence(2),
        'body' => $faker->paragraph(20),
          'preview'=> $faker->imageUrl(200, 200),
            'author'=> $faker->name

      ]);
    }
  }
 }