<?php

namespace App\Http\Controllers\Cartes;

use App\Http\Controllers\Controller;
use App\Pub;
use App\Remplace1;
use App\Vigneron;

class ProvenceController extends Controller
{

    public function index()
    {
        $header = "Vineapolis | Vins de Provence";
        $cheminpub = asset('img/filemanager/annonceurs/').'/';

        $cheminremplace1 = asset('img/remplace1').'/';
        $cheminremplace2 = asset('img/remplace2').'/';
        $cheminremplace3 = asset('img/remplace3').'/';

        $image433 = Pub::where('id', 433)->first();
        $image434 = Pub::where('id', 434)->first();
        $image435 = Pub::where('id', 435)->first();
        $image436 = Pub::where('id', 436)->first();
        $image437 = Pub::where('id', 437)->first();
        $image438 = Pub::where('id', 438)->first();
        $image439 = Pub::where('id', 439)->first();
        $image440 = Pub::where('id', 440)->first();

        $imageremplace1 = Remplace1::inRandomOrder()->first();
        $imageremplace2 = Remplace1::inRandomOrder()->first();
        $imageremplace3 = Remplace1::inRandomOrder()->first();
        $imageremplace4 = Remplace1::inRandomOrder()->first();

        // On va chercher les vignerons des Vins de Provence
        $vins = Vigneron::where('aliaslocalitevinicole', 'provence')->get();

        // On ramène les lat, long et niveau de zoom des Vins de Provence
        $vinzoom = Vigneron::where('aliaslocalitevinicole', 'provence')->first();

        return view("cartes.provence", compact(
            'header',
            'cheminpub',
            'cheminremplace1',
            'cheminremplace2',
            'cheminremplace3',
            'image433',
            'image434',
            'image435',
            'image436',
            'image437',
            'image438',
            'image439',
            'image440',
            'imageremplace1',
            'imageremplace2',
            'imageremplace3',
            'imageremplace4',
            'vins',
            'vinzoom'
        ));
    }

}
