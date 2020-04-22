<?php

use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([  
            'icone' => 'flaticon-023-flask',  
            'title' => 'GET IN THE LAB',  
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',  
        ]);    
        DB::table('services')->insert([  
            'icone' => 'flaticon-011-compass',  
            'title' => 'PROJECTS ONLINE            ',  
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',   
        ]);    
        DB::table('services')->insert([  
            'icone' => 'flaticon-037-idea',  
            'title' => 'SMART MARKETING            ',  
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',   
        ]);    
        DB::table('services')->insert([  
            'icone' => 'flaticon-039-vector',  
            'title' => 'SOCIAL MEDIA',  
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',   
        ]);    
        DB::table('services')->insert([  
            'icone' => 'flaticon-036-brainstorming',  
            'title' => 'BRAINSTORMING',  
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',   
        ]);    
        DB::table('services')->insert([  
            'icone' => 'flaticon-026-search',  
            'title' => 'DOCUMENTED',  
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',   
        ]);    
        DB::table('services')->insert([  
            'icone' => 'flaticon-018-laptop-1',  
            'title' => 'RESPONSIVE',  
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',   
        ]);    
        DB::table('services')->insert([  
            'icone' => 'flaticon-043-sketch',  
            'title' => 'RETINA READY',  
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',   
        ]);    
        DB::table('services')->insert([  
            'icone' => 'flaticon-012-cube',  
            'title' => 'DOCUMENTED',  
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',  
        ]);    
        DB::table('services')->insert([  
            'icone' => 'flaticon-012-cube',  
            'title' => 'DOCUMENTED',  
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',  
        ]);    
        DB::table('services')->insert([  
            'icone' => 'flaticon-012-cube',  
            'title' => 'DOCUMENTED',  
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',  
        ]);    
        DB::table('services')->insert([  
            'icone' => 'flaticon-012-cube',  
            'title' => 'DOCUMENTED',  
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',  
        ]);    
    }
}
