<?php

use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->insert([
            'tag'=>'branding'
        ]);
        DB::table('tags')->insert([
            'tag'=>'identity'
        ]);
        DB::table('tags')->insert([
            'tag'=>'video'
        ]);
        DB::table('tags')->insert([
            'tag'=>'design'
        ]);
        DB::table('tags')->insert([
            'tag'=>'inspiration'
        ]);
        DB::table('tags')->insert([
            'tag'=>'web design'
        ]);
        DB::table('tags')->insert([
            'tag'=>'photography'
        ]);
    }
}
