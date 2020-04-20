<?php

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'role'=>'admin'
        ]);
        DB::table('roles')->insert([
            'role'=>'ceo'
        ]);
        DB::table('roles')->insert([
            'role'=>'redacteur'
        ]);
        DB::table('roles')->insert([
            'role'=>'webmaster'
        ]);
        DB::table('roles')->insert([
            'role'=>'utilisateur'
        ]);
        DB::table('roles')->insert([
            'role'=>'designer'
        ]);
        DB::table('roles')->insert([
            'role'=>'developper'
        ]);
        DB::table('roles')->insert([
            'role'=>'community manager'
        ]);
    }
}
