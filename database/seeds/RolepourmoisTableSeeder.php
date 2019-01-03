<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolepourmoiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // On remet la table à zéro
        DB::table('rolepourmois')->truncate();

        $date = Carbon::now();

        DB::table('rolepourmois')->insert([
            [
                'role'          => "super administrateur",
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'role'          => "administrateur",
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'role'          => "rédacteur",
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'role'          => "abonné",
                'created_at'    => $date,
                'updated_at'    => $date
            ],
        ]);
    }
}
