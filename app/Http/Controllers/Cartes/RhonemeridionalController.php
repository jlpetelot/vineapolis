<?php

namespace App\Http\Controllers\Cartes;

use App\Http\Controllers\Controller;

use App\Pub;
use App\Remplace1;
use App\Vigneron;

class RhonemeridionalController extends Controller
{

    public function index()
    {
        $header = "Vineapolis | Côtes du Rhône Méridional";
        $cheminpub = asset('img/filemanager/annonceurs/').'/';

        $cheminremplace1 = asset('img/remplace1').'/';
        $cheminremplace2 = asset('img/remplace2').'/';
        $cheminremplace3 = asset('img/remplace3').'/';

        $image257 = Pub::where('id', 257)->first();
        $image258 = Pub::where('id', 258)->first();
        $image259 = Pub::where('id', 259)->first();
        $image260 = Pub::where('id', 140)->first();
        $image261 = Pub::where('id', 261)->first();
        $image262 = Pub::where('id', 262)->first();
        $image263 = Pub::where('id', 263)->first();
        $image264 = Pub::where('id', 264)->first();

        $imageremplace1 = Remplace1::inRandomOrder()->first();
        $imageremplace2 = Remplace1::inRandomOrder()->first();
        $imageremplace3 = Remplace1::inRandomOrder()->first();
        $imageremplace4 = Remplace1::inRandomOrder()->first();

        // On va chercher les vignerons de Bugey
        $vins = Vigneron::where('aliaslocalitevinicole', 'cotes-du-rhone-meridional')->get();

        // On ramène les lat, long et niveau de zoom de la région de Bugey
        $vinzoom = Vigneron::where('aliaslocalitevinicole', 'cotes-du-rhone-meridional')->first();

        return view("cartes.rhonemeridional", compact(
            'header',
            'cheminpub',
            'cheminremplace1',
            'cheminremplace2',
            'cheminremplace3',
            'image257',
            'image258',
            'image259',
            'image260',
            'image261',
            'image262',
            'image263',
            'image264',
            'imageremplace1',
            'imageremplace2',
            'imageremplace3',
            'imageremplace4',
            'vins',
            'vinzoom'
        ));
    }

}
