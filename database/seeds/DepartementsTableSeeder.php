<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class DepartementsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /// On remet la table à zéro
        DB::table('departements')->truncate();

        $date = Carbon::now();

        DB::table('departements')->insert([
            [
                'lieu'       => "Ain",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'lieu'       => "Aisne",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'lieu'       => "Allier",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'lieu'       => "Alpes-de-Haute-Provence",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'lieu'       => "Hautes-Alpes",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'lieu'       => "Alpes-Maritimes",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'lieu'       => "Ardèche",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'lieu'       => "Ardennes",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'lieu'       => "Ariège",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'lieu'       => "Aube",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'lieu'       => "Aude",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'lieu'       => "Aveyron",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'lieu'       => "Bouches-du-Rhône",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'lieu'       => "Calvados",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'lieu'       => "Cantal",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'lieu'       => "Charente",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'lieu'       => "Charente-Maritime",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'lieu'       => "Cher",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'lieu'       => "Corrèze",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'lieu'       => "Corse",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'lieu'       => "Côte-d'Or",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'lieu'       => "Côtes-d'Armor",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'lieu'       => "Creuse",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'lieu'       => "Dordogne",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'lieu'       => "Doubs",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'lieu'       => "Drôme",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'lieu'       => "Eure",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'lieu'       => "Eure-et-Loire",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'lieu'       => "Finistère",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'lieu'       => "Gard",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'lieu'       => "Haute-Garonne",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'lieu'       => "Gers",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'lieu'       => "Gironde",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'lieu'       => "Hérault",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'lieu'       => "Ille-et-Vilaine",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'lieu'       => "Indre",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'lieu'       => "Indre-et-Loire",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'lieu'       => "Isère",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'lieu'       => "Jura",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'lieu'       => "Landes",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'lieu'       => "Loire-et-Cher",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'lieu'       => "Loire",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'lieu'       => "Haute-Loire",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'lieu'       => "Loire-Atlantique",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'lieu'       => "Loiret",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'lieu'       => "Lot",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'lieu'       => "Lot-et-Garonne",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'lieu'       => "Lozère",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'lieu'       => "Maine-et-Loire",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'lieu'       => "Manche",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'lieu'       => "Marne",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'lieu'       => "Haute-Marne",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'lieu'       => "Mayenne",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'lieu'       => "Meurthe-et-Moselle",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'lieu'       => "Meuse",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'lieu'       => "Morbihan",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'lieu'       => "Moselle",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'lieu'       => "Nièvre",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'lieu'       => "Nord",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'lieu'       => "Oise",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'lieu'       => "Orne",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'lieu'       => "Pas-de-Calais",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'lieu'       => "Puy-de-Dôme",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'lieu'       => "Pyrénées-Atlantiques",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'lieu'       => "Hautes-Pyrénées",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'lieu'       => "Pyrénées-Orientales",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'lieu'       => "Bas-Rhin",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'lieu'       => "Haut-Rhin",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'lieu'       => "Rhône",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'lieu'       => "Haute-Saône",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'lieu'       => "Saône-et-Loire",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'lieu'       => "Sarthe",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'lieu'       => "Savoie",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'lieu'       => "Haute-Savoie",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'lieu'       => "Paris",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'lieu'       => "Seine-Maritime",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'lieu'       => "Seine-et-Marne",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'lieu'       => "Yvelines",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'lieu'       => "Deux-Sèvres",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'lieu'       => "Sommes",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'lieu'       => "Tarn",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'lieu'       => "Tarn-et-Garonne",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'lieu'       => "Var",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'lieu'       => "Vaucluse",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'lieu'       => "Vendée",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'lieu'       => "Vienne",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'lieu'       => "Haute-Vienne",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'lieu'       => "Vosges",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'lieu'       => "Yonne",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'lieu'       => "Territoire de Belfort",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'lieu'       => "Essonne",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'lieu'       => "Hauts-de-Seine",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'lieu'       => "Seine-Saint-Denis",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'lieu'       => "Val-de-Marne",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'lieu'       => "Val-d'Oise",
                'created_at' => $date,
                'updated_at' => $date
            ],
        ]);
    }
}
