<?php

namespace App\Http\Controllers;

use App\Pub;
use App\Remplace1;
use App\Vigneron;

use Illuminate\Http\Request;

class TouslesvinsController extends Controller
{

    /**
     * Méthode recherche () pour la recherche des vignerons
     *
     * @return view('touslesvins');
     **/
    public function recherche  ()
    {
        $header = "Vineapolis | Tous les vins";
        $cheminpub = asset('img/pubs').'/';

        $cheminremplace1 = asset('img/remplace1').'/';

        $image73 = Pub::where('id', 73)->first();
        $image74 = Pub::where('id', 74)->first();
        $image75 = Pub::where('id', 75)->first();
        $image76 = Pub::where('id', 76)->first();
        $image77 = Pub::where('id', 77)->first();
        $image78 = Pub::where('id', 78)->first();
        $image79 = Pub::where('id', 79)->first();
        $image80 = Pub::where('id', 80)->first();

        $imageremplace1 = Remplace1::inRandomOrder()->first();
        $imageremplace2 = Remplace1::inRandomOrder()->first();
        $imageremplace3 = Remplace1::inRandomOrder()->first();
        $imageremplace4 = Remplace1::inRandomOrder()->first();

        // On ramène tous les vignerons
        // $vignerons = Vigneron::all();

        return view('touslesvins', compact(
            'header',
            'cheminpub',
            'cheminremplace1',
            'image73',
            'image74',
            'image75',
            'image76',
            'image77',
            'image78',
            'image79',
            'image80',
            'imageremplace1',
            'imageremplace2',
            'imageremplace3',
            'imageremplace4'
        ));
    }

}
