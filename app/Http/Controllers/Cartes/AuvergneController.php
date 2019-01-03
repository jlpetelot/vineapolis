<?php

namespace App\Http\Controllers\Cartes;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Pub;
use App\Remplace1;
use App\Vigneron;

class AuvergneController extends Controller
{

    public function index()
    {
        $header = "Vineapolis | Vins d'Auvergne";
        $cheminpub = asset('img/filemanager/annonceurs/').'/';
        
        $cheminremplace1 = asset('img/remplace1').'/';
        $cheminremplace2 = asset('img/remplace2').'/';
        $cheminremplace3 = asset('img/remplace3').'/';

        $image409 = Pub::where('id', 409)->first();
        $image410 = Pub::where('id', 410)->first();
        $image411 = Pub::where('id', 411)->first();
        $image412 = Pub::where('id', 412)->first();
        $image413 = Pub::where('id', 413)->first();
        $image414 = Pub::where('id', 414)->first();
        $image415 = Pub::where('id', 415)->first();
        $image416 = Pub::where('id', 416)->first();

        $imageremplace1 = Remplace1::inRandomOrder()->first();
        $imageremplace2 = Remplace1::inRandomOrder()->first();
        $imageremplace3 = Remplace1::inRandomOrder()->first();
        $imageremplace4 = Remplace1::inRandomOrder()->first();

        // On va chercher les vignerons des Vins d'Auvergne
        $vins = Vigneron::where('aliaslocalitevinicole', 'auvergne')->get();

        // On ramène les lat, long et niveau de zoom des Vins d'Auvergne
        $vinzoom = Vigneron::where('aliaslocalitevinicole', 'auvergne')->first();

        return view("cartes.auvergne", compact(
            'header',
            'cheminpub',
            'cheminremplace1',
            'cheminremplace2',
            'cheminremplace3',
            'image409',
            'image410',
            'image411',
            'image412',
            'image413',
            'image414',
            'image415',
            'image416',
            'imageremplace1',
            'imageremplace2',
            'imageremplace3',
            'imageremplace4',
            'vins',
            'vinzoom'
        ));
    }

}
