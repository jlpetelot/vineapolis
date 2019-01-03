<?php

namespace App\Http\Controllers\Cartes;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Pub;
use App\Remplace1;
use App\Vigneron;

class CognacController extends Controller
{

    public function index()
    {
        $header = "Vineapolis | Cognac";
        $cheminpub = asset('img/filemanager/annonceurs/').'/';

        $cheminremplace1 = asset('img/remplace1').'/';
        $cheminremplace2 = asset('img/remplace2').'/';
        $cheminremplace3 = asset('img/remplace3').'/';

        $image385 = Pub::where('id', 385)->first();
        $image386 = Pub::where('id', 386)->first();
        $image387 = Pub::where('id', 387)->first();
        $image388 = Pub::where('id', 388)->first();
        $image389 = Pub::where('id', 389)->first();
        $image390 = Pub::where('id', 390)->first();
        $image391 = Pub::where('id', 391)->first();
        $image392 = Pub::where('id', 392)->first();

        $imageremplace1 = Remplace1::inRandomOrder()->first();
        $imageremplace2 = Remplace1::inRandomOrder()->first();
        $imageremplace3 = Remplace1::inRandomOrder()->first();
        $imageremplace4 = Remplace1::inRandomOrder()->first();

        // On va chercher les vignerons de Cognac
        $vins = Vigneron::where('aliaslocalitevinicole', 'cognac')->get();

        // On ramène les lat, long et niveau de zoom de Cognac
        $vinzoom = Vigneron::where('aliaslocalitevinicole', 'cognac')->first();

        return view("cartes.cognac", compact(
            'header',
            'cheminpub',
            'cheminremplace1',
            'cheminremplace2',
            'cheminremplace3',
            'image385',
            'image386',
            'image387',
            'image388',
            'image389',
            'image390',
            'image391',
            'image392',
            'imageremplace1',
            'imageremplace2',
            'imageremplace3',
            'imageremplace4',
            'vins',
            'vinzoom'
        ));
    }

}
