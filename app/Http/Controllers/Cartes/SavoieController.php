<?php

namespace App\Http\Controllers\Cartes;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Pub;
use App\Remplace1;
use App\Vigneron;

class SavoieController extends Controller
{

    public function index()
    {
        $header = "Vineapolis | Vins de Savoie";
        $cheminpub = asset('img/filemanager/annonceurs/').'/';

        $cheminremplace1 = asset('img/remplace1').'/';
        $cheminremplace2 = asset('img/remplace2').'/';
        $cheminremplace3 = asset('img/remplace3').'/';

        $image417 = Pub::where('id', 417)->first();
        $image418 = Pub::where('id', 418)->first();
        $image419 = Pub::where('id', 419)->first();
        $image420 = Pub::where('id', 420)->first();
        $image421 = Pub::where('id', 421)->first();
        $image422 = Pub::where('id', 422)->first();
        $image423 = Pub::where('id', 423)->first();
        $image424 = Pub::where('id', 424)->first();

        $imageremplace1 = Remplace1::inRandomOrder()->first();
        $imageremplace2 = Remplace1::inRandomOrder()->first();
        $imageremplace3 = Remplace1::inRandomOrder()->first();
        $imageremplace4 = Remplace1::inRandomOrder()->first();

        // On va chercher les vignerons des Vins de Savoie
        $vins = Vigneron::where('aliaslocalitevinicole', 'savoie')->get();

        // On ramène les lat, long et niveau de zoom des Vins de Savoie
        $vinzoom = Vigneron::where('aliaslocalitevinicole', 'savoie')->first();

        return view("cartes.savoie", compact(
            'header',
            'cheminpub',
            'cheminremplace1',
            'cheminremplace2',
            'cheminremplace3',
            'image417',
            'image418',
            'image419',
            'image420',
            'image421',
            'image422',
            'image423',
            'image424',
            'imageremplace1',
            'imageremplace2',
            'imageremplace3',
            'imageremplace4',
            'vins',
            'vinzoom'
        ));
    }

}
