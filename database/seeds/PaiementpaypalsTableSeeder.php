<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaiementpaypalsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // On met la table à zéro
        DB::table('paiementpaypals')->truncate();
    }
}
