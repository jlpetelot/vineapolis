<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class LocalitevinicolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // On remet la table à zéro
        DB::table('localitevinicoles')->truncate();

        $date = Carbon::now();

        DB::table('localitevinicoles')->insert([
            [
                'localite'   => "Aloxe-Corton",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'localite'   => "Alsace",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'localite'   => "Armagnac",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'region'     => "Auvergne",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'localite'   => "Aveyron",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'localite'   => "Bugey",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'localite'   => "Chambolle-Musigny",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'localite'   => "Champagnes Montagne-de-Reims",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'localite'   => "Champagnes de la Vallée de la Marne",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'localite'   => "Chassagne-Montrachet",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'localite'   => "Cognac",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'localite'   => "Corse",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'localite'   => "Côte Chalonnaise et Couchoise",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'localite'   => "Côtes du Rhône Méridional",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'localite'   => "Gevrey-Chambertin",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'localite'   => "Grands Crus de Chablis",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'localite'   => "Graves, Bordeaux supérieurs",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'localite'   => "Mâcon",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'localite'   => "Margaux",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'localite'   => "Moulis-Listrac",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'localite'   => "Nuits-Saint-Georges",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'localite'   => "Pauillac",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'localite'   => "Pessac-Léognan",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'localite'   => "Pomerol",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'localite'   => "Pommard",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'localite'   => "Pouilly",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'localite'   => "Puligny-Montrachet",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'localite'   => "Saint-Émilion",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'localite'   => "Saint-Estèphe",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'localite'   => "Saint-Julien",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'localite'   => "Sauternes et Barsac",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'localite'   => "Vins d'Auvergne",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'localite'   => "Vins du Beaujolais",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'localite'   => "Vins et Grands Crus de Beaune",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'localite'   => "Vins du Jura",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'localite'   => "Vins du Languedoc-Roussillon",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'localite'   => "Vins de Lorraine",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'localite'   => "Vins de Provence",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'localite'   => "Vins de Quincy et Reuilly",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'localite'   => "Vins de Saint-Peray et Cornas",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'localite'   => "Vins de Sancerre et Menetou-Salon",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'localite'   => "Vins de Saumur-Champigny",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'localite'   => "Vins de Savoie",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'localite'   => "Volnay",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'localite'   => "Vosne-Romanée",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'localite'   => "Vougeot",
                'created_at' => $date,
                'updated_at' => $date
            ],
        ]);
    }
}
