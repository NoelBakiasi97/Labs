<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'=>'noel',
            'email'=>'noel@mail.com',
            'password'=>Hash::make('lolzzz1997'),
            'role_id'=>'1',
            'img'=>'avatar4.jpg',
            'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla.'
        ]);
        DB::table('users')->insert([
            'name'=>'Olivier',
            'email'=>'ceo@mail.com',
            'password'=>Hash::make('lolzzz1997'),
            'role_id'=>'2',
            'img'=>'avatar4.jpg',
            'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla.'
        ]);
        DB::table('users')->insert([
            'name'=>'User',
            'email'=>'user@mail.com',
            'password'=>Hash::make('lolzzz1997'),
            'role_id'=>'4',
            'img'=>'avatar1.jpg',
            'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla.'
        ]);
        DB::table('users')->insert([
            'name'=>'Editor',
            'email'=>'redacteur@mail.com',
            'password'=>Hash::make('lolzzz1997'),
            'role_id'=>'5',
            'img'=>'avatar5.jpg',
            'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla.'
        ]);
        DB::table('users')->insert([
            'name'=>'Manager',
            'email'=>'manager@mail.com',
            'password'=>Hash::make('lolzzz1997'),
            'role_id'=>'8',
            'img'=>'avatar2.jpg',
            'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla.'
        ]);
    }
}
