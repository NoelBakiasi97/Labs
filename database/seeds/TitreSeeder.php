<?php

use Illuminate\Database\Seeder;

class TitreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('titres')->insert([
            'titreClients'=>'WHAT OUR [ CLIENTS ] SAY',
            'titreServices'=>'GET IN [ THE LAB ] AND SEE THE SERVICES',
            'titreTeam'=>'GET IN [ THE LAB ] AND MEET THE TEAM',
            'titreStandout'=>'Are you ready to [ stand ] out?',
            'titreContact'=>'CONTACT [ US ]',
            'titreFeatures'=>'GET IN [ THE LAB ] AND DISCOVER THE WORLD'
        ]);
    }
}
