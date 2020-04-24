<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(HeaderSeeder::class);
        $this->call(CarouselSeeder::class);
        $this->call(AboutSeeder::class);
        $this->call(ServiceSeeder::class);
        $this->call(TestimonialSeeder::class);
        $this->call(StandoutSeeder::class);
        $this->call(TitreSeeder::class);
        $this->call(ContactSeeder::class);
        $this->call(FooterSeeder::class);
        $this->call(CategorieSeeder::class);
        $this->call(TagSeeder::class);
        $this->call(ArticleSeeder::class);
        $this->call(CommentaireSeeder::class);
    }
}
