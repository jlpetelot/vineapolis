<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class RegionvinicolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // On remet la table à zéro
        DB::table('regionvinicoles')->truncate();

        $date = Carbon::now();

        DB::table('regionvinicoles')->insert([
            [
                'region'     => "Alsace",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'region'     => "Armagnac",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'region'     => "Auvergne",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'region'     => "Beaujolais",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'region'     => "Bordeaux",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'region'     => "Bourgogne",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'region'     => "Bugey",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'region'     => "Champagne",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'region'     => "Cognac",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'region'     => "Corse",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'region'     => "Côtes du Rhône Méridional",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'region'     => "Côtes du Rhône Septentrional",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'region'     => "Jura",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'region'     => "Languedoc-Roussillon",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'region'     => "Loire",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'region'     => "Lorraine",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'region'     => "Provence",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'region'     => "Savoie",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'region'     => "Sud-Ouest",
                'created_at' => $date,
                'updated_at' => $date
            ],
        ]);
    }
}
