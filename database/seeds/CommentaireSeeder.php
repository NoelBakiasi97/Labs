<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class CommentaireSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('commentaires')->insert([
            'comment'=>"Wow what a great site! I'm amazed at how professional this looks and  j'ai perdu l'inspi mdr smah",
            'article_id'=>2,
            'user_id'=>3,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('commentaires')->insert([
            'comment'=>"Wow what a great site! I'm amazed at how professional this looks and  j'ai perdu l'inspi mdr smah",
            'article_id'=>3,
            'user_id'=>4,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
