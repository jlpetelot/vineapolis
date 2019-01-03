<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaniersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // On met la table à zéro
        DB::table('paniers')->truncate();
    }
}
