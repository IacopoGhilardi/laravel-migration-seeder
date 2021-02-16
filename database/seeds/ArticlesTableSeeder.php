<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Article;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        //
        for ($i = 0; $i < 10; $i++) { 
            $article = new Article;

            $article->title = $faker->sentence($nbWords = 3, $variableNbWords = true);
            $article->subtitle = $faker->sentence($nbWords = 10, $variableNbWords = true);
            $article->author = $faker->name();
            $article->text = $faker->realText(500);
            $article->publication_date = $faker->dateTime($max = 'now', $timezone = 'GMT');
            $article->save();
        }
        


    }
}
