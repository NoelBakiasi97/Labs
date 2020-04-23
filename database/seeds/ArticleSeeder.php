<?php

use Illuminate\Database\Seeder;

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
            'text'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla.'
        ]);
        DB::table('articles')->insert([
            'img'=>'card-2.jpg',
            'title'=>'PROJECTS ONLINE',
            'text'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla.'
        ]);
        DB::table('articles')->insert([
            'img'=>'card-3.jpg',
            'title'=>'SMART MARKETING',
            'text'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla.'
        ]);
        DB::table('articles')->insert([
            'img'=>'card-1.jpg',
            'title'=>'LAST 3',
            'text'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla.'
        ]);
        DB::table('articles')->insert([
            'img'=>'card-2.jpg',
            'title'=>'LAST 3',
            'text'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla.'
        ]);
        DB::table('articles')->insert([
            'img'=>'card-3.jpg',
            'title'=>'LAST 3',
            'text'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla.'
        ]);
    }
}
