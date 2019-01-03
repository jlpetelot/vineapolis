<?php

namespace App\Http\Controllers\Cartes;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Pub;
use App\Remplace1;
use App\Vigneron;

class JuraController extends Controller
{

    public function index()
    {
        $header = "Vineapolis | Vins du Jura";
        $cheminpub = asset('img/filemanager/annonceurs/').'/';

        $cheminremplace1 = asset('img/remplace1').'/';
        $cheminremplace2 = asset('img/remplace2').'/';
        $cheminremplace3 = asset('img/remplace3').'/';

        $image353 = Pub::where('id', 353)->first();
        $image354 = Pub::where('id', 354)->first();
        $image355 = Pub::where('id', 355)->first();
        $image356 = Pub::where('id', 356)->first();
        $image357 = Pub::where('id', 357)->first();
        $image358 = Pub::where('id', 358)->first();
        $image359 = Pub::where('id', 359)->first();
        $image360 = Pub::where('id', 360)->first();

        $imageremplace1 = Remplace1::inRandomOrder()->first();
        $imageremplace2 = Remplace1::inRandomOrder()->first();
        $imageremplace3 = Remplace1::inRandomOrder()->first();
        $imageremplace4 = Remplace1::inRandomOrder()->first();

        // On va chercher les vignerons du Jura
        $vins = Vigneron::where('aliaslocalitevinicole', 'jura')->get();

        // On ramène les lat, long et niveau de zoom du Jura
        $vinzoom = Vigneron::where('aliaslocalitevinicole', 'jura')->first();

        return view("cartes.jura", compact(
            'header',
            'cheminpub',
            'cheminremplace1',
            'cheminremplace2',
            'cheminremplace3',
            'image353',
            'image354',
            'image355',
            'image356',
            'image357',
            'image358',
            'image359',
            'image360',
            'imageremplace1',
            'imageremplace2',
            'imageremplace3',
            'imageremplace4',
            'vins',
            'vinzoom'
        ));
    }

}
