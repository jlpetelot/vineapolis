<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfilTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // On remet la table à zéro
        DB::table('profils')->truncate();

        $date = Carbon::now();

        DB::table('profils')->insert([
            [
                'contenu'       => "Un profil",
                'user_id'       => 1,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
        ]);
    }
}
