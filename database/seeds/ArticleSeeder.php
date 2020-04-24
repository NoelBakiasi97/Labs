<?php

use Illuminate\Database\Seeder;
use App\Article;
use App\Tag;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert([
            'img'=>'card-1.jpg',
            'title'=>'GET IN THE LAB',
            'text'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla.',
            'user_id'=>4,
            'categorie_id'=>1
        ]);
        DB::table('articles')->insert([
            'img'=>'card-2.jpg',
            'title'=>'PROJECTS ONLINE',
            'text'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla.',
            'user_id'=>4,
            'categorie_id'=>2
        ]);
        DB::table('articles')->insert([
            'img'=>'card-3.jpg',
            'title'=>'SMART MARKETING',
            'text'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla.',
            'user_id'=>4,
            'categorie_id'=>3
        ]);
        DB::table('articles')->insert([
            'img'=>'card-1.jpg',
            'title'=>'LAST 3',
            'text'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla.',
            'user_id'=>4,
            'categorie_id'=>4
        ]);
        DB::table('articles')->insert([
            'img'=>'card-2.jpg',
            'title'=>'LAST 3',
            'text'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla.',
            'user_id'=>4,
            'categorie_id'=>5
        ]);
        DB::table('articles')->insert([
            'img'=>'card-3.jpg',
            'title'=>'LAST 3',
            'text'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla.',
            'user_id'=>4,
            'categorie_id'=>6
        ]);

        DB::table('article_tag')->insert([
            'article_id'=>Article::inRandomOrder()->first()->id,
            'tag_id'=>Tag::inRandomOrder()->first()->id,
        ]);
        DB::table('article_tag')->insert([
            'article_id'=>Article::inRandomOrder()->first()->id,
            'tag_id'=>Tag::inRandomOrder()->first()->id,
        ]);
        DB::table('article_tag')->insert([
            'article_id'=>Article::inRandomOrder()->first()->id,
            'tag_id'=>Tag::inRandomOrder()->first()->id,
        ]);
        DB::table('article_tag')->insert([
            'article_id'=>Article::inRandomOrder()->first()->id,
            'tag_id'=>Tag::inRandomOrder()->first()->id,
        ]);
        DB::table('article_tag')->insert([
            'article_id'=>Article::inRandomOrder()->first()->id,
            'tag_id'=>Tag::inRandomOrder()->first()->id,
        ]);
        DB::table('article_tag')->insert([
            'article_id'=>Article::inRandomOrder()->first()->id,
            'tag_id'=>Tag::inRandomOrder()->first()->id,
        ]);
    }
}
