<?php

namespace App\Http\Controllers\Cartes;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Pub;
use App\Remplace1;
use App\Vigneron;

class BeaujolaisController extends Controller
{

    public function index()
    {
        $header = "Vineapolis | Vins du Beaujolais";
        $cheminpub = asset('img/filemanager/annonceurs/').'/';
        
        $cheminremplace1 = asset('img/remplace1').'/';
        $cheminremplace2 = asset('img/remplace2').'/';
        $cheminremplace3 = asset('img/remplace3').'/';

        $image369 = Pub::where('id', 369)->first();
        $image370 = Pub::where('id', 370)->first();
        $image371 = Pub::where('id', 371)->first();
        $image372 = Pub::where('id', 372)->first();
        $image373 = Pub::where('id', 373)->first();
        $image374 = Pub::where('id', 374)->first();
        $image375 = Pub::where('id', 375)->first();
        $image376 = Pub::where('id', 376)->first();

        $imageremplace1 = Remplace1::inRandomOrder()->first();
        $imageremplace2 = Remplace1::inRandomOrder()->first();
        $imageremplace3 = Remplace1::inRandomOrder()->first();
        $imageremplace4 = Remplace1::inRandomOrder()->first();

        // On va chercher les vignerons du Beaujolais
        $vins = Vigneron::where('aliaslocalitevinicole', 'beaujolais')->get();

        // On ramène les lat, long et niveau de zoom du Beaujolais
        $vinzoom = Vigneron::where('aliaslocalitevinicole', 'beaujolais')->first();

        return view("cartes.beaujolais", compact(
            'header',
            'cheminpub',
            'cheminremplace1',
            'cheminremplace2',
            'cheminremplace3',
            'image369',
            'image370',
            'image371',
            'image372',
            'image373',
            'image374',
            'image375',
            'image376',
            'imageremplace1',
            'imageremplace2',
            'imageremplace3',
            'imageremplace4',
            'vins',
            'vinzoom'
        ));
    }

}
