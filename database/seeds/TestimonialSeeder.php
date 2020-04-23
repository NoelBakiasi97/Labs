<?php

use Illuminate\Database\Seeder;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('testimonials')->insert([
            'testimonial'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.',
            'img'=>'av1.jpg',
            'name'=>'Michael Smith',
            'function'=>'CEO company'
        ]);
        DB::table('testimonials')->insert([
            'testimonial'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.',
            'img'=>'av2.jpg',
            'name'=>'Michael Smith',
            'function'=>'CEO company'
        ]);
        DB::table('testimonials')->insert([
            'testimonial'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.',
            'img'=>'av3.jpg',
            'name'=>'Michael Smith',
            'function'=>'CEO company'
        ]);
        DB::table('testimonials')->insert([
            'testimonial'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.',
            'img'=>'av1.jpg',
            'name'=>'Michael Smith',
            'function'=>'CEO company'
        ]);
        DB::table('testimonials')->insert([
            'testimonial'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.',
            'img'=>'av2.jpg',
            'name'=>'Michael Smith',
            'function'=>'CEO company'
        ]);
        DB::table('testimonials')->insert([
            'testimonial'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.',
            'img'=>'av3.jpg',
            'name'=>'Michael Smith',
            'function'=>'CEO company'
        ]);
        DB::table('testimonials')->insert([
            'testimonial'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.',
            'img'=>'av1.jpg',
            'name'=>'Michael Smith',
            'function'=>'CEO company'
        ]);
    }
}
