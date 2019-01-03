<?php

namespace App\Http\Controllers\Cartes;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Pub;
use App\Remplace1;
use App\Vigneron;

class BugeyController extends Controller
{

    public function index()
    {
        $header = "Vineapolis | Vins de Bugey";
        $cheminpub = asset('img/filemanager/annonceurs/').'/';

        $cheminremplace1 = asset('img/remplace1').'/';
        $cheminremplace2 = asset('img/remplace2').'/';
        $cheminremplace3 = asset('img/remplace3').'/';

        $image249 = Pub::where('id', 249)->first();
        $image250 = Pub::where('id', 250)->first();
        $image251 = Pub::where('id', 251)->first();
        $image252 = Pub::where('id', 140)->first();
        $image253 = Pub::where('id', 253)->first();
        $image254 = Pub::where('id', 254)->first();
        $image255 = Pub::where('id', 255)->first();
        $image256 = Pub::where('id', 256)->first();

        $imageremplace1 = Remplace1::inRandomOrder()->first();
        $imageremplace2 = Remplace1::inRandomOrder()->first();
        $imageremplace3 = Remplace1::inRandomOrder()->first();
        $imageremplace4 = Remplace1::inRandomOrder()->first();

        // On va chercher les vignerons de Bugey
        $vins = Vigneron::where('aliaslocalitevinicole', 'bugey')->get();

        // On ramène les lat, long et niveau de zoom de la région de Bugey
        $vinzoom = Vigneron::where('aliaslocalitevinicole', 'bugey')->first();

        return view("cartes.bugey", compact(
            'header',
            'cheminpub',
            'cheminremplace1',
            'cheminremplace2',
            'cheminremplace3',
            'image249',
            'image250',
            'image251',
            'image252',
            'image253',
            'image254',
            'image255',
            'image256',
            'imageremplace1',
            'imageremplace2',
            'imageremplace3',
            'imageremplace4',
            'vins',
            'vinzoom'
        ));
    }

}
