<?php

use Illuminate\Database\Seeder;

class CarouselSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('carousels')->insert([
            'imgCar'=>'01.jpg'
        ]);
        DB::table('carousels')->insert([
            'imgCar'=>'02.jpg'
        ]);
    }
}
