<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QualitesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // On remet la table à zéro
        DB::table('qualites')->truncate();

        $date = Carbon::now();

        DB::table('qualites')->insert([
            [
                'qualite'       => "membre fondateur",
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'qualite'       => "collaborateur",
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'qualite'       => "hôte",
                'created_at'    => $date,
                'updated_at'    => $date
            ],
        ]);
    }
}
