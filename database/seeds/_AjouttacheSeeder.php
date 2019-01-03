<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class TacheSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /// On remet la table à zéro
        DB::table('taches')->truncate();

        $date = Carbon::now();

        DB::table('taches')->insert([
            [
                'contenu'       => "Tournage la Doucette début juin",
                'deadline'      => "Urgent",
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'contenu'       => "Site responsive sur tous les écrans ",
                'deadline'      => "Deadline : 15 jours",
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'contenu'       => "1er mailing vigneron ",
                'deadline'      => "Deadline : 22 jours",
                'created_at'    => $date,
                'updated_at'    => $date
            ],
        ]);

    }
}
