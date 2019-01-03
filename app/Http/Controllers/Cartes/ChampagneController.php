<?php

namespace App\Http\Controllers\Cartes;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Pub;
use App\Remplace1;
use App\Remplace2;
use App\Remplace3;
use App\Vigneron;

class ChampagneController extends Controller
{

    public function index()
    {
        $header = "Vineapolis | Champagne";
        $cheminpub = asset('img/filemanager/annonceurs/').'/';

        $cheminremplace1 = asset('img/remplace1').'/';
        $cheminremplace2 = asset('img/remplace2').'/';
        $cheminremplace3 = asset('img/remplace3').'/';

        $image25 = Pub::where('id', 25)->first();
        $image26 = Pub::where('id', 26)->first();
        $image27 = Pub::where('id', 27)->first();
        $image28 = Pub::where('id', 28)->first();
        $image29 = Pub::where('id', 29)->first();
        $image30 = Pub::where('id', 30)->first();
        $image31 = Pub::where('id', 31)->first();
        $image32 = Pub::where('id', 32)->first();

        $imageremplace1 = Remplace1::inRandomOrder()->first();
        $imageremplace2 = Remplace2::inRandomOrder()->first();
        $imageremplace3 = Remplace3::inRandomOrder()->first();

        return view("cartes.champagne", compact(
            'header',
            'cheminpub',
            'cheminremplace1',
            'cheminremplace2',
            'cheminremplace3',
            'image25',
            'image26',
            'image27',
            'image28',
            'image29',
            'image30',
            'image31',
            'image32',
            'imageremplace1',
            'imageremplace2',
            'imageremplace3'
        ));
    }

    public function montagnedereims ()
    {
        $header = "Vineapolis | Champagnes Montagne-de-Reims";
        $cheminpub = asset('img/filemanager/annonceurs/').'/';

        $cheminremplace1 = asset('img/remplace1').'/';
        $cheminremplace2 = asset('img/remplace2').'/';
        $cheminremplace3 = asset('img/remplace3').'/';

        $image297 = Pub::where('id', 297)->first();
        $image298 = Pub::where('id', 298)->first();
        $image299 = Pub::where('id', 299)->first();
        $image300 = Pub::where('id', 300)->first();
        $image301 = Pub::where('id', 301)->first();
        $image302 = Pub::where('id', 302)->first();
        $image303 = Pub::where('id', 303)->first();
        $image304 = Pub::where('id', 304)->first();

        $imageremplace1 = Remplace1::inRandomOrder()->first();
        $imageremplace2 = Remplace1::inRandomOrder()->first();
        $imageremplace3 = Remplace1::inRandomOrder()->first();
        $imageremplace4 = Remplace1::inRandomOrder()->first();

        // On va chercher les vignerons des Champagnes Montagne-de-Reims
        $vins = Vigneron::where('aliaslocalitevinicole', 'montagne-de-reims-et-cote-des-blancs')->get();

        // On ramène les lat, long et niveau de zoom des Champagnes Montagne-de-Reims
        $vinzoom = Vigneron::where('aliaslocalitevinicole', 'montagne-de-reims-et-cote-des-blancs')->first();

        return view("cartes.montagnedereims", compact(
            'header',
            'cheminpub',
            'cheminremplace1',
            'cheminremplace2',
            'cheminremplace3',
            'image297',
            'image298',
            'image299',
            'image300',
            'image301',
            'image302',
            'image303',
            'image304',
            'imageremplace1',
            'imageremplace2',
            'imageremplace3',
            'imageremplace4',
            'vins',
            'vinzoom'
        ));
    }

    public function valleemarne ()
    {
        $header = "Vineapolis | Champagnes de la Vallee de la Marne";
        $cheminpub = asset('img/filemanager/annonceurs/').'/';

        $cheminremplace1 = asset('img/remplace1').'/';
        $cheminremplace2 = asset('img/remplace2').'/';
        $cheminremplace3 = asset('img/remplace3').'/';

        $image305 = Pub::where('id', 305)->first();
        $image306 = Pub::where('id', 306)->first();
        $image307 = Pub::where('id', 307)->first();
        $image308 = Pub::where('id', 308)->first();
        $image309 = Pub::where('id', 309)->first();
        $image310 = Pub::where('id', 310)->first();
        $image311 = Pub::where('id', 311)->first();
        $image312 = Pub::where('id', 312)->first();

        $imageremplace1 = Remplace1::inRandomOrder()->first();
        $imageremplace2 = Remplace1::inRandomOrder()->first();
        $imageremplace3 = Remplace1::inRandomOrder()->first();
        $imageremplace4 = Remplace1::inRandomOrder()->first();

        // On va chercher les vignerons des Champagnes de la Vallee de la Marne
        $vins = Vigneron::where('aliaslocalitevinicole', 'vallee-de-la-marne')->get();

        // On ramène les lat, long et niveau de zoom des Champagnes de la Vallee de la Marne
        $vinzoom = Vigneron::where('aliaslocalitevinicole', 'vallee-de-la-marne')->first();

        return view("cartes.valleemarne", compact(
            'header',
            'cheminpub',
            'cheminremplace1',
            'cheminremplace2',
            'cheminremplace3',
            'image305',
            'image306',
            'image307',
            'image308',
            'image309',
            'image310',
            'image311',
            'image312',
            'imageremplace1',
            'imageremplace2',
            'imageremplace3',
            'imageremplace4',
            'vins',
            'vinzoom'
        ));
    }

}
