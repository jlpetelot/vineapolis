<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class SortedevinsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // On remet la table à zéro
        DB::table('sortedevins')->truncate();

        $date = Carbon::now();

        DB::table('sortedevins')->insert([
            [
                'sorte'      => "rouge",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'sorte'      => "blanc",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'sorte'      => "rosé",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'sorte'      => "rouge blanc",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'sorte'      => "rouge rosé",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'sorte'      => "blanc rosé",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'sorte'      => "rouge rosé blanc",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'sorte'      => "rouge rosé pétillant",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'sorte'      => "rosé blanc pétillant",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'sorte'      => "rouge pétillant",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'sorte'      => "rosé pétillant",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'sorte'      => "blanc pétillant",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'sorte'      => "rouge rosé blanc pétillant",
                'created_at' => $date,
                'updated_at' => $date
            ],
        ]);
    }
}
