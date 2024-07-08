<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Article;

class ArticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('vi');
        for($i=0; $i < 50; $i++) {
            Article::create([
                'title' => 'Bài viết số ' .$i,
                'content' => $faker->text,
                'author' => 'hieuhm'
            ]);
        }
    }
}
