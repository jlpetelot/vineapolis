<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class ZoomsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // On remet la table à zéro
        DB::table('zooms')->truncate();

        $date = Carbon::now();

        DB::table('zooms')->insert([
            [
                'niveau'     => "8",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'niveau'     => "9",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'niveau'     => "10",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'niveau'     => "11",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'niveau'     => "12",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'niveau'     => "13",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'niveau'     => "14",
                'created_at' => $date,
                'updated_at' => $date
            ],
        ]);
    }
}
