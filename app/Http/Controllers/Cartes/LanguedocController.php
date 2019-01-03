<?php

namespace App\Http\Controllers\Cartes;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Pub;
use App\Remplace1;
use App\Vigneron;

class LanguedocController extends Controller
{

    public function index()
    {
        $header = "Vineapolis | Vins du Languedoc-Roussillon";
        $cheminpub = asset('img/filemanager/annonceurs/').'/';

        $cheminremplace1 = asset('img/remplace1').'/';
        $cheminremplace2 = asset('img/remplace2').'/';
        $cheminremplace3 = asset('img/remplace3').'/';

        $image361 = Pub::where('id', 361)->first();
        $image362 = Pub::where('id', 362)->first();
        $image363 = Pub::where('id', 363)->first();
        $image364 = Pub::where('id', 364)->first();
        $image365 = Pub::where('id', 365)->first();
        $image366 = Pub::where('id', 366)->first();
        $image367 = Pub::where('id', 367)->first();
        $image368 = Pub::where('id', 368)->first();

        $imageremplace1 = Remplace1::inRandomOrder()->first();
        $imageremplace2 = Remplace1::inRandomOrder()->first();
        $imageremplace3 = Remplace1::inRandomOrder()->first();
        $imageremplace4 = Remplace1::inRandomOrder()->first();

        // On va chercher les vignerons du Languedoc-Roussillon
        $vins = Vigneron::where('aliaslocalitevinicole', 'languedoc-roussillon')->get();

        // On ramène les lat, long et niveau de zoom du Languedoc-Roussillon
        $vinzoom = Vigneron::where('aliaslocalitevinicole', 'languedoc-roussillon')->first();

        return view("cartes.languedoc", compact(
            'header',
            'cheminpub',
            'cheminremplace1',
            'cheminremplace2',
            'cheminremplace3',
            'image361',
            'image362',
            'image363',
            'image364',
            'image365',
            'image366',
            'image367',
            'image368',
            'imageremplace1',
            'imageremplace2',
            'imageremplace3',
            'imageremplace4',
            'vins',
            'vinzoom'
        ));
    }

}
