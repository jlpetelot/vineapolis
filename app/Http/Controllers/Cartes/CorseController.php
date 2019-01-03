<?php

namespace App\Http\Controllers\Cartes;

use App\Http\Controllers\Controller;

use App\Pub;
use App\Remplace1;
use App\Vigneron;

class CorseController extends Controller
{

    public function index()
    {
        $header = "Vineapolis | Corse";
        $cheminpub = asset('img/filemanager/annonceurs/').'/';

        $cheminremplace1 = asset('img/remplace1').'/';
        $cheminremplace2 = asset('img/remplace2').'/';
        $cheminremplace3 = asset('img/remplace3').'/';

        $image425 = Pub::where('id', 425)->first();
        $image426 = Pub::where('id', 426)->first();
        $image427 = Pub::where('id', 427)->first();
        $image428 = Pub::where('id', 428)->first();
        $image429 = Pub::where('id', 429)->first();
        $image430 = Pub::where('id', 430)->first();
        $image431 = Pub::where('id', 431)->first();
        $image432 = Pub::where('id', 432)->first();

        $imageremplace1 = Remplace1::inRandomOrder()->first();
        $imageremplace2 = Remplace1::inRandomOrder()->first();
        $imageremplace3 = Remplace1::inRandomOrder()->first();
        $imageremplace4 = Remplace1::inRandomOrder()->first();

        // On va chercher les vignerons des Vins de Corse
        $vins = Vigneron::where('aliaslocalitevinicole', 'corse')->get();

        // On ramène les lat, long et niveau de zoom des Vins de Corse
        $vinzoom = Vigneron::where('aliaslocalitevinicole', 'corse')->first();

        return view("cartes.corse", compact(
            'header',
            'cheminpub',
            'cheminremplace1',
            'cheminremplace2',
            'cheminremplace3',
            'image425',
            'image426',
            'image427',
            'image428',
            'image429',
            'image430',
            'image431',
            'image432',
            'imageremplace1',
            'imageremplace2',
            'imageremplace3',
            'imageremplace4',
            'vins',
            'vinzoom'
        ));
    }

}
