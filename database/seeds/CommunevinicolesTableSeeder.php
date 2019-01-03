<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class CommunevinicolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // On remet la table à zéro
        DB::table('communevinicoles')->truncate();

        $date = Carbon::now();

        DB::table('communevinicoles')->insert([
            [
                'commune'    => "Aveyron",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'commune'    => "Beaune et des Côtes de Beaune",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'commune'    => "Chablis",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'commune'    => "Champagnes Montagne de Reims et Côte des Blancs",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'commune'    => "Champagnes de la Vallee de la Marne",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'commune'    => "Côte Chalonnaise et Couchoise",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'commune'    => "Côte de Nuits",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'commune'    => "Mâcon",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'commune'    => "Médoc",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'commune'    => "Pessac-Léognan",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'commune'    => "Pomerol",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'commune'    => "Pouilly",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'commune'    => "Quincy et Reuilly",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'commune'    => "Saint-Peray et Cornas",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'commune'    => "Sancerre et Menetou-Salon",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'commune'    => "Saint-Émilion",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'commune'    => "Saumur-Champigny",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'commune'    => "Sauternes et Barsac",
                'created_at' => $date,
                'updated_at' => $date
            ],
        ]);
    }
}
