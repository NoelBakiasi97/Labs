<?php

use Illuminate\Database\Seeder;

class CategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'categorie'=>'Vestibulum maximus'
        ]);
        DB::table('categories')->insert([
            'categorie'=>'Nisi eu lobortis pharetra'
        ]);
        DB::table('categories')->insert([
            'categorie'=>'Orci quam accumsan'
        ]);
        DB::table('categories')->insert([
            'categorie'=>'Auguen pharetra massa'
        ]);
        DB::table('categories')->insert([
            'categorie'=>'Tellus ut nulla'
        ]);
        DB::table('categories')->insert([
            'categorie'=>'Etiam egestas viverra'
        ]);
    }
}
