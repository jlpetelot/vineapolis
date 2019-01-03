<?php

namespace App\Http\Controllers;

use App\Pub;
use App\Remplace1;
use App\Remplace2;
use App\Remplace3;

class IndexController extends Controller
{

    public function index()
    {
        $header = "Vineapolis | Bienvenue";

        $cheminpub = asset('img/filemanager/annonceurs/').'/';
        
        $cheminremplace1 = asset('img/remplace1').'/';
        $cheminremplace2 = asset('img/remplace2').'/';
        $cheminremplace3 = asset('img/remplace3').'/';

        $image1 = Pub::where('id', 1)->first();
        $image2 = Pub::where('id', 2)->first();
        $image3 = Pub::where('id', 3)->first();
        $image4 = Pub::where('id', 4)->first();
        $image5 = Pub::where('id', 5)->first();
        $image6 = Pub::where('id', 6)->first();
        $image7 = Pub::where('id', 7)->first();
        $image8 = Pub::where('id', 8)->first();

        $imageremplace1 = Remplace1::inRandomOrder()->first();
        $imageremplace2 = Remplace2::inRandomOrder()->first();
        $imageremplace3 = Remplace3::inRandomOrder()->first();

        return view("index", compact(
            'header',
            'cheminpub',
            'cheminremplace1',
            'cheminremplace2',
            'cheminremplace3',
            'image1',
            'image2',
            'image3',
            'image4',
            'image5',
            'image6',
            'image7',
            'image8',
            'imageremplace1',
            'imageremplace2',
            'imageremplace3'
        ));
    }

}
