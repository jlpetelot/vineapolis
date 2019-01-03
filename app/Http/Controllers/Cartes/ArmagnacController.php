<?php

namespace App\Http\Controllers\Cartes;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Pub;
use App\Remplace1;
use App\Vigneron;

class ArmagnacController extends Controller
{

    public function index()
    {
        $header = "Vineapolis | Armagnac";
        $cheminpub = asset('img/filemanager/annonceurs/').'/';
        
        $cheminremplace1 = asset('img/remplace1').'/';
        $cheminremplace2 = asset('img/remplace2').'/';
        $cheminremplace3 = asset('img/remplace3').'/';

        $image393 = Pub::where('id', 393)->first();
        $image394 = Pub::where('id', 394)->first();
        $image395 = Pub::where('id', 395)->first();
        $image396 = Pub::where('id', 396)->first();
        $image397 = Pub::where('id', 397)->first();
        $image398 = Pub::where('id', 398)->first();
        $image399 = Pub::where('id', 399)->first();
        $image400 = Pub::where('id', 400)->first();

        $imageremplace1 = Remplace1::inRandomOrder()->first();
        $imageremplace2 = Remplace1::inRandomOrder()->first();
        $imageremplace3 = Remplace1::inRandomOrder()->first();
        $imageremplace4 = Remplace1::inRandomOrder()->first();

        // On va chercher les vignerons d'Armagnac
        $vins = Vigneron::where('aliaslocalitevinicole', 'armagnac')->get();

        // On ramène les lat, long et niveau de zoom d'Armagnac
        $vinzoom = Vigneron::where('aliaslocalitevinicole', 'armagnac')->first();

        return view("cartes.armagnac", compact(
            'header',
            'cheminpub',
            'cheminremplace1',
            'cheminremplace2',
            'cheminremplace3',
            'image393',
            'image394',
            'image395',
            'image396',
            'image397',
            'image398',
            'image399',
            'image400',
            'imageremplace1',
            'imageremplace2',
            'imageremplace3',
            'imageremplace4',
            'vins',
            'vinzoom'
        ));
    }

}
