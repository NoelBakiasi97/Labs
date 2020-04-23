<?php

use Illuminate\Database\Seeder;

class StandoutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('standouts')->insert([
            'text'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est.'
        ]);
    }
}
