<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class TachesSeeder extends Seeder
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

        $date = Carbon::tomorrow();
        $datePlus = Carbon::create(2018, 6, 01, 00);

        DB::table('taches')->insert([
            [
                'contenu'       => "Tournage la Doucette début juin",
                'delai'         => $date,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'contenu'       => "Site responsive sur tous les écrans ",
                'delai'         => $datePlus,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'contenu'       => "1er mailing vigneron ",
                'delai'         => $datePlus,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
        ]);
    }
}
