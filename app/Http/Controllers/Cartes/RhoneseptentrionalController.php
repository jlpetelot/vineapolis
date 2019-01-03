<?php

namespace App\Http\Controllers\Cartes;

use App\Http\Controllers\Controller;

use App\Pub;
use App\Remplace1;
use App\Remplace2;
use App\Remplace3;
use App\Vigneron;

class RhoneseptentrionalController extends Controller
{

    public function index()
    {
        $header = "Vineapolis | Côtes du Rhône Septentrional";
        $cheminpub = asset('img/filemanager/annonceurs/').'/';

        $cheminremplace1 = asset('img/remplace1').'/';
        $cheminremplace2 = asset('img/remplace2').'/';
        $cheminremplace3 = asset('img/remplace3').'/';

        $image41 = Pub::where('id', 41)->first();
        $image42 = Pub::where('id', 42)->first();
        $image43 = Pub::where('id', 43)->first();
        $image44 = Pub::where('id', 44)->first();
        $image45 = Pub::where('id', 45)->first();
        $image46 = Pub::where('id', 46)->first();
        $image47 = Pub::where('id', 47)->first();
        $image48 = Pub::where('id', 48)->first();

        $imageremplace1 = Remplace1::inRandomOrder()->first();
        $imageremplace2 = Remplace2::inRandomOrder()->first();
        $imageremplace3 = Remplace3::inRandomOrder()->first();

        return view("cartes.rhoneseptentrional", compact(
            'header',
            'cheminpub',
            'cheminremplace1',
            'cheminremplace2',
            'cheminremplace3',
            'image41',
            'image42',
            'image43',
            'image44',
            'image45',
            'image46',
            'image47',
            'image48',
            'imageremplace1',
            'imageremplace2',
            'imageremplace3'
        ));
    }

    public function saintperaycornas()
    {
        $header = "Vineapolis | Vins de Saint-Peray et Cornas";
        $cheminpub = asset('img/filemanager/annonceurs/').'/';

        $cheminremplace1 = asset('img/remplace1').'/';
        $cheminremplace2 = asset('img/remplace2').'/';
        $cheminremplace3 = asset('img/remplace3').'/';

        $image441 = Pub::where('id', 441)->first();
        $image442 = Pub::where('id', 442)->first();
        $image443 = Pub::where('id', 443)->first();
        $image444 = Pub::where('id', 444)->first();
        $image445 = Pub::where('id', 445)->first();
        $image446 = Pub::where('id', 446)->first();
        $image447 = Pub::where('id', 447)->first();
        $image448 = Pub::where('id', 448)->first();

        $imageremplace1 = Remplace1::inRandomOrder()->first();
        $imageremplace2 = Remplace1::inRandomOrder()->first();
        $imageremplace3 = Remplace1::inRandomOrder()->first();
        $imageremplace4 = Remplace1::inRandomOrder()->first();

        // On va chercher les vignerons des Vins de Saint-Peray et Cornas
        $vins = Vigneron::where('aliaslocalitevinicole', 'saint-peray-et-cornas')->get();

        // On ramène les lat, long et niveau de zoom des Vins de Saint-Peray et Cornas
        $vinzoom = Vigneron::where('aliaslocalitevinicole', 'saint-peray-et-cornas')->first();

        return view("cartes.saintperaycornas", compact(
            'header',
            'cheminpub',
            'cheminremplace1',
            'cheminremplace2',
            'cheminremplace3',
            'image441',
            'image442',
            'image443',
            'image444',
            'image445',
            'image446',
            'image447',
            'image448',
            'imageremplace1',
            'imageremplace2',
            'imageremplace3',
            'imageremplace4',
            'vins',
            'vinzoom'
        ));
    }

}
