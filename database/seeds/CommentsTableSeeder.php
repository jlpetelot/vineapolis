<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Faker\Factory;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // On remet la table à zéro
        DB::table('comments')->truncate();

        $faker = Factory::create();

        DB::table('comments')->insert([
            [
                'body'          => $faker->paragraphs(rand(1 ,3), true),
                'name'          => "Jean-Luc Petelot",
                'imageprofil'   => "fastzibon-150x150.gif",
                'vigneron_id'   => 61,
                'user_email'    => "jlpetelot@madinici.org",
                'created_at'    => Carbon::now()->subDays(3),
                'updated_at'    => NULL
            ],
            [
                'body'          => $faker->paragraphs(rand(1 ,3), true),
                'name'          => "Dominique Gourault",
                'imageprofil'   => "avatar-homme.jpg",
                'vigneron_id'   => 61,
                'user_email'    => "d.gourault@sirius-group.fr",
                'created_at'    => Carbon::now()->subDays(2),
                'updated_at'    => NULL
            ],
            [
                'body'          => $faker->paragraphs(rand(1 ,3), true),
                'name'          => "Kevin Van Noort",
                'imageprofil'   => "kevin-128x128.jpg",
                'vigneron_id'   => 61,
                'user_email'    => "kevin@ordim-immo.com",
                'created_at'    => Carbon::now()->subDays(1),
                'updated_at'    => NULL
            ],
            [
                'body'          => $faker->paragraphs(rand(1 ,3), true),
                'name'          => "Annonceur Annonceur",
                'imageprofil'   => "user2-160x160.jpg",
                'vigneron_id'   => 61,
                'user_email'    => "annonceur@gmail.com",
                'created_at'    => Carbon::now()->subHours(23),
                'updated_at'    => NULL
            ],
            [
                'body'          => $faker->paragraphs(rand(1 ,3), true),
                'name'          => "Internaute Internaute",
                'imageprofil'   => "user8-128x128.jpg",
                'vigneron_id'   => 61,
                'user_email'    => "internaute@gmail.com",
                'created_at'    => Carbon::now()->subHours(17),
                'updated_at'    => NULL
            ],
            [
                'body'          => $faker->paragraphs(rand(1 ,3), true),
                'name'          => "Antoine Véronique",
                'imageprofil'   => "user7-128x128.jpg",
                'vigneron_id'   => 61,
                'user_email'    => "vinpetillant.veroniqueantoine@gmail.com",
                'created_at'    => Carbon::now(),
                'updated_at'    => NULL
            ],
        ]);
    }
}
