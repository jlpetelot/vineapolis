<?php

namespace App\Http\Controllers\Cartes;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Pub;
use App\Remplace1;
use App\Vigneron;

class LorraineController extends Controller
{

    public function index()
    {
        $header = "Vineapolis | Vins de Lorraine";
        $cheminpub = asset('img/filemanager/annonceurs/').'/';

        $cheminremplace1 = asset('img/remplace1').'/';
        $cheminremplace2 = asset('img/remplace2').'/';
        $cheminremplace3 = asset('img/remplace3').'/';

        $image377 = Pub::where('id', 377)->first();
        $image378 = Pub::where('id', 378)->first();
        $image379 = Pub::where('id', 379)->first();
        $image380 = Pub::where('id', 380)->first();
        $image381 = Pub::where('id', 381)->first();
        $image382 = Pub::where('id', 382)->first();
        $image383 = Pub::where('id', 383)->first();
        $image384 = Pub::where('id', 384)->first();

        $imageremplace1 = Remplace1::inRandomOrder()->first();
        $imageremplace2 = Remplace1::inRandomOrder()->first();
        $imageremplace3 = Remplace1::inRandomOrder()->first();
        $imageremplace4 = Remplace1::inRandomOrder()->first();

        // On va chercher les vignerons de Lorraine
        $vins = Vigneron::where('aliaslocalitevinicole', 'lorraine')->get();

        // On ramène les lat, long et niveau de zoom de Lorraine
        $vinzoom = Vigneron::where('aliaslocalitevinicole', 'lorraine')->first();

        return view("cartes.lorraine", compact(
            'header',
            'cheminpub',
            'cheminremplace1',
            'cheminremplace2',
            'cheminremplace3',
            'image377',
            'image378',
            'image379',
            'image380',
            'image381',
            'image382',
            'image383',
            'image384',
            'imageremplace1',
            'imageremplace2',
            'imageremplace3',
            'imageremplace4',
            'vins',
            'vinzoom'
        ));
    }

}
