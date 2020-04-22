<?php

use Illuminate\Database\Seeder;

class HeaderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('headers')->insert([
            'logo'=>'big-logo.png',
            'text'=>'Get your freebie template now!',
        ]);
    }
}
