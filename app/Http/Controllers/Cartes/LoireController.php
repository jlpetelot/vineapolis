<?php

namespace App\Http\Controllers\Cartes;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Pub;
use App\Remplace1;
use App\Remplace2;
use App\Remplace3;
use App\Vigneron;

class LoireController extends Controller
{

    public function index()
    {
        $header = "Vineapolis | Vins de Loire";
        $cheminpub = asset('img/filemanager/annonceurs/').'/';

        $cheminremplace1 = asset('img/remplace1').'/';
        $cheminremplace2 = asset('img/remplace2').'/';
        $cheminremplace3 = asset('img/remplace3').'/';

        $image33 = Pub::where('id', 33)->first();
        $image34 = Pub::where('id', 34)->first();
        $image35 = Pub::where('id', 35)->first();
        $image36 = Pub::where('id', 36)->first();
        $image37 = Pub::where('id', 37)->first();
        $image38 = Pub::where('id', 38)->first();
        $image39 = Pub::where('id', 39)->first();
        $image40 = Pub::where('id', 40)->first();

        $imageremplace1 = Remplace1::inRandomOrder()->first();
        $imageremplace2 = Remplace2::inRandomOrder()->first();
        $imageremplace3 = Remplace3::inRandomOrder()->first();

        return view("cartes.loire", compact(
            'header',
            'cheminpub',
            'cheminremplace1',
            'cheminremplace2',
            'cheminremplace3',
            'image33',
            'image34',
            'image35',
            'image36',
            'image37',
            'image38',
            'image39',
            'image40',
            'imageremplace1',
            'imageremplace2',
            'imageremplace3'
        ));
    }

    public function pouilly ()
    {
        $header = "Vineapolis | Vins de Pouilly";
        $cheminpub = asset('img/filemanager/annonceurs/').'/';

        $cheminremplace1 = asset('img/remplace1').'/';
        $cheminremplace2 = asset('img/remplace2').'/';
        $cheminremplace3 = asset('img/remplace3').'/';

        $image321 = Pub::where('id', 321)->first();
        $image322 = Pub::where('id', 322)->first();
        $image323 = Pub::where('id', 323)->first();
        $image324 = Pub::where('id', 324)->first();
        $image325 = Pub::where('id', 325)->first();
        $image326 = Pub::where('id', 326)->first();
        $image327 = Pub::where('id', 327)->first();
        $image328 = Pub::where('id', 328)->first();

        $imageremplace1 = Remplace1::inRandomOrder()->first();
        $imageremplace2 = Remplace1::inRandomOrder()->first();
        $imageremplace3 = Remplace1::inRandomOrder()->first();
        $imageremplace4 = Remplace1::inRandomOrder()->first();

        // On va chercher les vignerons de Pouilly
        $vins = Vigneron::where('aliaslocalitevinicole', 'pouilly')->get();

        // On ramène les lat, long et niveau de zoom de Pouilly
        $vinzoom = Vigneron::where('aliaslocalitevinicole', 'pouilly')->first();

        return view("cartes.pouilly", compact(
            'header',
            'cheminpub',
            'cheminremplace1',
            'cheminremplace2',
            'cheminremplace3',
            'image321',
            'image322',
            'image323',
            'image324',
            'image325',
            'image326',
            'image327',
            'image328',
            'imageremplace1',
            'imageremplace2',
            'imageremplace3',
            'imageremplace4',
            'vins',
            'vinzoom'
        ));
    }

    public function quincyreuilly ()
    {
        $header = "Vineapolis | Vins de Quincy et Reuilly";
        $cheminpub = asset('img/filemanager/annonceurs/').'/';

        $cheminremplace1 = asset('img/remplace1').'/';
        $cheminremplace2 = asset('img/remplace2').'/';
        $cheminremplace3 = asset('img/remplace3').'/';

        $image329 = Pub::where('id', 329)->first();
        $image330 = Pub::where('id', 330)->first();
        $image331 = Pub::where('id', 331)->first();
        $image332 = Pub::where('id', 332)->first();
        $image333 = Pub::where('id', 333)->first();
        $image334 = Pub::where('id', 334)->first();
        $image335 = Pub::where('id', 335)->first();
        $image336 = Pub::where('id', 336)->first();

        $imageremplace1 = Remplace1::inRandomOrder()->first();
        $imageremplace2 = Remplace1::inRandomOrder()->first();
        $imageremplace3 = Remplace1::inRandomOrder()->first();
        $imageremplace4 = Remplace1::inRandomOrder()->first();

        // On va chercher les vignerons de Quincy et Reuilly
        $vins = Vigneron::where('aliaslocalitevinicole', 'quincy-et-reuilly')->get();

        // On ramène les lat, long et niveau de zoom de Quincy et Reuilly
        $vinzoom = Vigneron::where('aliaslocalitevinicole', 'quincy-et-reuilly')->first();

        return view("cartes.quincy", compact(
            'header',
            'cheminpub',
            'cheminremplace1',
            'cheminremplace2',
            'cheminremplace3',
            'image329',
            'image330',
            'image331',
            'image332',
            'image333',
            'image334',
            'image335',
            'image336',
            'imageremplace1',
            'imageremplace2',
            'imageremplace3',
            'imageremplace4',
            'vins',
            'vinzoom'
        ));
    }

    public function sancerremenetou ()
    {
        $header = "Vineapolis | Vins de Sancerre et Menetou-Salon";
        $cheminpub = asset('img/filemanager/annonceurs/').'/';

        $cheminremplace1 = asset('img/remplace1').'/';
        $cheminremplace2 = asset('img/remplace2').'/';
        $cheminremplace3 = asset('img/remplace3').'/';

        $image337 = Pub::where('id', 337)->first();
        $image338 = Pub::where('id', 338)->first();
        $image339 = Pub::where('id', 339)->first();
        $image340 = Pub::where('id', 340)->first();
        $image341 = Pub::where('id', 341)->first();
        $image342 = Pub::where('id', 342)->first();
        $image343 = Pub::where('id', 343)->first();
        $image344 = Pub::where('id', 344)->first();

        $imageremplace1 = Remplace1::inRandomOrder()->first();
        $imageremplace2 = Remplace1::inRandomOrder()->first();
        $imageremplace3 = Remplace1::inRandomOrder()->first();
        $imageremplace4 = Remplace1::inRandomOrder()->first();

        // On va chercher les vignerons de Sancerre et Menetou-Salon
        $vins = Vigneron::where('aliaslocalitevinicole', 'sancerre-et-menetou-salon')->get();

        // On ramène les lat, long et niveau de zoom de Sancerre et Menetou-Salon
        $vinzoom = Vigneron::where('aliaslocalitevinicole', 'sancerre-et-menetou-salon')->first();

        return view("cartes.sancerre", compact(
            'header',
            'cheminpub',
            'cheminremplace1',
            'cheminremplace2',
            'cheminremplace3',
            'image337',
            'image338',
            'image339',
            'image340',
            'image341',
            'image342',
            'image343',
            'image344',
            'imageremplace1',
            'imageremplace2',
            'imageremplace3',
            'imageremplace4',
            'vins',
            'vinzoom'
        ));
    }

    public function saumurchampigny ()
    {
        $header = "Vineapolis | Vins de Saumur-Champigny";
        $cheminpub = asset('img/filemanager/annonceurs/').'/';

        $cheminremplace1 = asset('img/remplace1').'/';
        $cheminremplace2 = asset('img/remplace2').'/';
        $cheminremplace3 = asset('img/remplace3').'/';

        $image345 = Pub::where('id', 345)->first();
        $image346 = Pub::where('id', 346)->first();
        $image347 = Pub::where('id', 347)->first();
        $image348 = Pub::where('id', 348)->first();
        $image349 = Pub::where('id', 349)->first();
        $image350 = Pub::where('id', 350)->first();
        $image351 = Pub::where('id', 351)->first();
        $image352 = Pub::where('id', 352)->first();

        $imageremplace1 = Remplace1::inRandomOrder()->first();
        $imageremplace2 = Remplace1::inRandomOrder()->first();
        $imageremplace3 = Remplace1::inRandomOrder()->first();
        $imageremplace4 = Remplace1::inRandomOrder()->first();

        // On va chercher les vignerons de Saumur-Champigny
        $vins = Vigneron::where('aliaslocalitevinicole', 'saumur-champigny')->get();

        // On ramène les lat, long et niveau de zoom de Saumur-Champigny
        $vinzoom = Vigneron::where('aliaslocalitevinicole', 'saumur-champigny')->first();

        return view("cartes.saumurchampigny", compact(
            'header',
            'cheminpub',
            'cheminremplace1',
            'cheminremplace2',
            'cheminremplace3',
            'image345',
            'image346',
            'image347',
            'image348',
            'image349',
            'image350',
            'image351',
            'image352',
            'imageremplace1',
            'imageremplace2',
            'imageremplace3',
            'imageremplace4',
            'vins',
            'vinzoom'
        ));
    }

}
