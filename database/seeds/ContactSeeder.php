<?php

use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->insert([
            'text'=>'Cras ex mauris, ornare eget pretium sit amet, dignissim et turpis. Nunc nec maximus dui, vel suscipit dolor. Donec elementum velit a orci facilisis rutrum.',
            'adress'=>'Place de la minnoterie 10, 1080 Molenbeek, Bruxelles',
            'number'=>'0032489252525',
            'email'=>'hello@company.com'
        ]);
    }
}
