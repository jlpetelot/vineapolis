<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnnonceursTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // On remet la table à zéro
        DB::table('annonceurs')->truncate();

        $date = Carbon::now();

        DB::table('annonceurs')->insert([
            [
                'societe'           => "Test Annonceur",
                'email'             => "test@annonceur.fr",
                'adresse'           => "15, rue du Test Annonceur - 80000 Blagnac",
                'telephone'         => "00 00 00 00 00",
                'annonce'           => '191x238.jpg',
                'urlsite'           => "testannonceursite.com",
                'actif'             => 1,
                'paye'              => 1,
                'user_id'           => 4,
                'created_at'        => $date,
                'updated_at'        => $date,
            ]
        ]);
    }
}
