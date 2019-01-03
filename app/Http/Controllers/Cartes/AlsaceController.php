<?php

namespace App\Http\Controllers\Cartes;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Pub;
use App\Remplace1;
use App\Vigneron;

class AlsaceController extends Controller
{

    public function index()
    {
        $header = "Vineapolis | Vins d'Alsace";
        $cheminpub = asset('img/filemanager/annonceurs/').'/';
        
        $cheminremplace1 = asset('img/remplace1').'/';
        $cheminremplace2 = asset('img/remplace2').'/';
        $cheminremplace3 = asset('img/remplace3').'/';

        $image313 = Pub::where('id', 313)->first();
        $image314 = Pub::where('id', 314)->first();
        $image315 = Pub::where('id', 315)->first();
        $image316 = Pub::where('id', 316)->first();
        $image317 = Pub::where('id', 317)->first();
        $image318 = Pub::where('id', 318)->first();
        $image319 = Pub::where('id', 319)->first();
        $image320 = Pub::where('id', 320)->first();

        $imageremplace1 = Remplace1::inRandomOrder()->first();
        $imageremplace2 = Remplace1::inRandomOrder()->first();
        $imageremplace3 = Remplace1::inRandomOrder()->first();
        $imageremplace4 = Remplace1::inRandomOrder()->first();

        // On va chercher les vignerons de l'Alsace
        $vins = Vigneron::where('aliaslocalitevinicole', 'alsace')->get();

        // On ramène les lat, long et niveau de zoom de l'Alsace
        $vinzoom = Vigneron::where('aliaslocalitevinicole', 'alsace')->first();

        return view("cartes.alsace", compact(
            'header',
            'cheminpub',
            'cheminremplace1',
            'cheminremplace2',
            'cheminremplace3',
            'image313',
            'image314',
            'image315',
            'image316',
            'image317',
            'image318',
            'image319',
            'image320',
            'imageremplace1',
            'imageremplace2',
            'imageremplace3',
            'imageremplace4',
            'vins',
            'vinzoom'
        ));
    }

}
