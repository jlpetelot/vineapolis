<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Remplace2sTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // On remet la table à zéro
        DB::table('remplace2s')->truncate();

        $date = Carbon::now();

        $image1 = '01.jpg';
        $image2 = '02.jpg';
        $image3 = '03.jpg';
        $image4 = '04.jpg';
        $image5 = '05.jpg';
        $image6 = '06.jpg';
        $image7 = '07.jpg';
        $image8 = '08.jpg';
        $image9 = '09.jpg';
        $image10 = '10.jpg';

        DB::table('remplace2s')->insert([
            [
                'image'         => $image1,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'image'         => $image2,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'image'         => $image3,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'image'         => $image4,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'image'         => $image5,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'image'         => $image6,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'image'         => $image7,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'image'         => $image8,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'image'         => $image9,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'image'         => $image10,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
        ]);
    }
}
