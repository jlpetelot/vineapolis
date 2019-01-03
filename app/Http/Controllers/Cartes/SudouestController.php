<?php

namespace App\Http\Controllers\Cartes;

use App\Http\Controllers\Controller;

use App\Pub;
use App\Remplace1;
use App\Remplace2;
use App\Remplace3;
use App\Vigneron;

class SudouestController extends Controller
{

    public function index()
    {
        $header = "Vineapolis | Vins du Sud-Ouest";
        $cheminpub = asset('img/filemanager/annonceurs/').'/';

        $cheminremplace1 = asset('img/remplace1').'/';
        $cheminremplace2 = asset('img/remplace2').'/';
        $cheminremplace3 = asset('img/remplace3').'/';

        $image49 = Pub::where('id', 49)->first();
        $image50 = Pub::where('id', 50)->first();
        $image51 = Pub::where('id', 51)->first();
        $image52 = Pub::where('id', 52)->first();
        $image53 = Pub::where('id', 53)->first();
        $image54 = Pub::where('id', 54)->first();
        $image55 = Pub::where('id', 55)->first();
        $image56 = Pub::where('id', 56)->first();

        $imageremplace1 = Remplace1::inRandomOrder()->first();
        $imageremplace2 = Remplace2::inRandomOrder()->first();
        $imageremplace3 = Remplace3::inRandomOrder()->first();

        return view("cartes.sudouest", compact(
            'header',
            'cheminpub',
            'cheminremplace1',
            'cheminremplace2',
            'cheminremplace3',
            'image49',
            'image50',
            'image51',
            'image52',
            'image53',
            'image54',
            'image55',
            'image56',
            'imageremplace1',
            'imageremplace2',
            'imageremplace3'
        ));
    }

    public function aveyron()
    {
        $header = "Vineapolis | Vins de l'Aveyron";
        $cheminpub = asset('img/filemanager/annonceurs/').'/';

        $cheminremplace1 = asset('img/remplace1').'/';
        $cheminremplace2 = asset('img/remplace2').'/';
        $cheminremplace3 = asset('img/remplace3').'/';

        $image401 = Pub::where('id', 401)->first();
        $image402 = Pub::where('id', 402)->first();
        $image403 = Pub::where('id', 403)->first();
        $image404 = Pub::where('id', 404)->first();
        $image405 = Pub::where('id', 405)->first();
        $image406 = Pub::where('id', 406)->first();
        $image407 = Pub::where('id', 407)->first();
        $image408 = Pub::where('id', 408)->first();

        $imageremplace1 = Remplace1::inRandomOrder()->first();
        $imageremplace2 = Remplace1::inRandomOrder()->first();
        $imageremplace3 = Remplace1::inRandomOrder()->first();
        $imageremplace4 = Remplace1::inRandomOrder()->first();

        // On va chercher les vignerons de l'Aveyron
        $vins = Vigneron::where('aliaslocalitevinicole', 'aveyron')->get();

        // On ramène les lat, long et niveau de zoom de l'Aveyron
        $vinzoom = Vigneron::where('aliaslocalitevinicole', 'aveyron')->first();

        return view("cartes.aveyron", compact(
            'header',
            'cheminpub',
            'cheminremplace1',
            'cheminremplace2',
            'cheminremplace3',
            'image401',
            'image402',
            'image403',
            'image404',
            'image405',
            'image406',
            'image407',
            'image408',
            'imageremplace1',
            'imageremplace2',
            'imageremplace3',
            'imageremplace4',
            'vins',
            'vinzoom'
        ));
    }

}
