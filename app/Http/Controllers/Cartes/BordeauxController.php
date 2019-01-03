<?php

namespace App\Http\Controllers\Cartes;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Pub;
use App\Remplace1;
use App\Remplace2;
use App\Remplace3;
use App\Vigneron;

class BordeauxController extends Controller
{

    public function index()
    {
        $header = "Vineapolis | Bordeaux";
        $cheminpub = asset('img/filemanager/annonceurs/').'/';

        $cheminremplace1 = asset('img/remplace1').'/';
        $cheminremplace2 = asset('img/remplace2').'/';
        $cheminremplace3 = asset('img/remplace3').'/';

        $image17 = Pub::where('id', 17)->first();
        $image18 = Pub::where('id', 18)->first();
        $image19 = Pub::where('id', 19)->first();
        $image20 = Pub::where('id', 20)->first();
        $image21 = Pub::where('id', 21)->first();
        $image22 = Pub::where('id', 22)->first();
        $image23 = Pub::where('id', 23)->first();
        $image24 = Pub::where('id', 24)->first();

        $imageremplace1 = Remplace1::inRandomOrder()->first();
        $imageremplace2 = Remplace2::inRandomOrder()->first();
        $imageremplace3 = Remplace3::inRandomOrder()->first();

        return view("cartes.bordeaux", compact(
            'header',
            'cheminpub',
            'cheminremplace1',
            'cheminremplace2',
            'cheminremplace3',
            'image17',
            'image18',
            'image19',
            'image20',
            'image21',
            'image22',
            'image23',
            'image24',
            'imageremplace1',
            'imageremplace2',
            'imageremplace3'
        ));
    }

    public function medoc ()
    {
        $header = "Vineapolis | Vins du Médoc";
        $cheminpub = asset('img/filemanager/annonceurs/').'/';

        $cheminremplace1 = asset('img/remplace1').'/';
        $cheminremplace2 = asset('img/remplace2').'/';
        $cheminremplace3 = asset('img/remplace3').'/';

        $image201 = Pub::where('id', 201)->first();
        $image202 = Pub::where('id', 202)->first();
        $image203 = Pub::where('id', 203)->first();
        $image204 = Pub::where('id', 204)->first();
        $image205 = Pub::where('id', 205)->first();
        $image206 = Pub::where('id', 206)->first();
        $image207 = Pub::where('id', 207)->first();
        $image208 = Pub::where('id', 208)->first();

        $imageremplace1 = Remplace1::inRandomOrder()->first();
        $imageremplace2 = Remplace2::inRandomOrder()->first();
        $imageremplace3 = Remplace3::inRandomOrder()->first();

        return view("cartes.medoc", compact(
            'header',
            'cheminpub',
            'cheminremplace1',
            'cheminremplace2',
            'cheminremplace3',
            'image201',
            'image202',
            'image203',
            'image204',
            'image205',
            'image206',
            'image207',
            'image208',
            'imageremplace1',
            'imageremplace2',
            'imageremplace3'
        ));
    }

    public function margaux ()
    {
        $header = "Vineapolis | Vins de Margaux";
        $cheminpub = asset('img/filemanager/annonceurs/').'/';
        
        $cheminremplace1 = asset('img/remplace1').'/';
        $cheminremplace2 = asset('img/remplace2').'/';
        $cheminremplace3 = asset('img/remplace3').'/';

        $image209 = Pub::where('id', 209)->first();
        $image210 = Pub::where('id', 210)->first();
        $image211 = Pub::where('id', 211)->first();
        $image212 = Pub::where('id', 212)->first();
        $image213 = Pub::where('id', 213)->first();
        $image214 = Pub::where('id', 214)->first();
        $image215 = Pub::where('id', 215)->first();
        $image216 = Pub::where('id', 216)->first();

        $imageremplace1 = Remplace1::inRandomOrder()->first();
        $imageremplace2 = Remplace1::inRandomOrder()->first();
        $imageremplace3 = Remplace1::inRandomOrder()->first();
        $imageremplace4 = Remplace1::inRandomOrder()->first();

        // On va chercher les vignerons de Margaux
        $vins = Vigneron::where('aliaslocalitevinicole', 'margaux')->get();

        // On ramène les lat, long et niveau de zoom de Margaux
        $vinzoom = Vigneron::where('aliaslocalitevinicole', 'margaux')->first();

        return view("cartes.margaux", compact(
            'header',
            'cheminpub',
            'cheminpub',
            'cheminremplace1',
            'cheminremplace2',
            'cheminremplace3',
            'image209',
            'image210',
            'image211',
            'image212',
            'image213',
            'image214',
            'image215',
            'image216',
            'imageremplace1',
            'imageremplace2',
            'imageremplace3',
            'imageremplace4',
            'vins',
            'vinzoom'
        ));
    }

    public function moulislistrac ()
    {
        $header = "Vineapolis | Vins de Moulis et Listrac";
        $cheminpub = asset('img/filemanager/annonceurs/').'/';
        
        $cheminremplace1 = asset('img/remplace1').'/';
        $cheminremplace2 = asset('img/remplace2').'/';
        $cheminremplace3 = asset('img/remplace3').'/';

        $image217 = Pub::where('id', 217)->first();
        $image218 = Pub::where('id', 218)->first();
        $image219 = Pub::where('id', 219)->first();
        $image220 = Pub::where('id', 220)->first();
        $image221 = Pub::where('id', 221)->first();
        $image222 = Pub::where('id', 222)->first();
        $image223 = Pub::where('id', 223)->first();
        $image224 = Pub::where('id', 224)->first();

        $imageremplace1 = Remplace1::inRandomOrder()->first();
        $imageremplace2 = Remplace1::inRandomOrder()->first();
        $imageremplace3 = Remplace1::inRandomOrder()->first();
        $imageremplace4 = Remplace1::inRandomOrder()->first();

        // On va chercher les vignerons de Moulis-Listrac
        $vins = Vigneron::where('aliaslocalitevinicole', 'moulis-listrac')->get();

        // On ramène les lat, long et niveau de zoom de Moulis-Listrac
        $vinzoom = Vigneron::where('aliaslocalitevinicole', 'moulis-listrac')->first();

        return view("cartes.moulislistrac", compact(
            'header',
            'cheminpub',
            'cheminremplace1',
            'cheminremplace2',
            'cheminremplace3',
            'image217',
            'image218',
            'image219',
            'image220',
            'image221',
            'image222',
            'image223',
            'image224',
            'imageremplace1',
            'imageremplace2',
            'imageremplace3',
            'imageremplace4',
            'vins',
            'vinzoom'
        ));
    }

    public function pauillac ()
    {
        $header = "Vineapolis | Vins de Pauilac";
        $cheminpub = asset('img/filemanager/annonceurs/').'/';
        
        $cheminremplace1 = asset('img/remplace1').'/';
        $cheminremplace2 = asset('img/remplace2').'/';
        $cheminremplace3 = asset('img/remplace3').'/';

        $image225 = Pub::where('id', 225)->first();
        $image226 = Pub::where('id', 226)->first();
        $image227 = Pub::where('id', 227)->first();
        $image228 = Pub::where('id', 228)->first();
        $image229 = Pub::where('id', 229)->first();
        $image230 = Pub::where('id', 230)->first();
        $image231 = Pub::where('id', 231)->first();
        $image232 = Pub::where('id', 232)->first();

        $imageremplace1 = Remplace1::inRandomOrder()->first();
        $imageremplace2 = Remplace1::inRandomOrder()->first();
        $imageremplace3 = Remplace1::inRandomOrder()->first();
        $imageremplace4 = Remplace1::inRandomOrder()->first();

        // On va chercher les vignerons de Pauillac
        $vins = Vigneron::where('localitevinicole', 'pauillac')->get();

        // On ramène les lat, long et niveau de zoom de Pauillac
        $vinzoom = Vigneron::where('aliaslocalitevinicole', 'pauillac')->first();

        return view("cartes.pauillac", compact(
            'header',
            'cheminpub',
            'cheminremplace1',
            'cheminremplace2',
            'cheminremplace3',
            'image225',
            'image226',
            'image227',
            'image228',
            'image229',
            'image230',
            'image231',
            'image232',
            'imageremplace1',
            'imageremplace2',
            'imageremplace3',
            'imageremplace4',
            'vins',
            'vinzoom'
        ));
    }

    public function saintestephe ()
    {
        $header = "Vineapolis | Vins de Saint-Estèphe";
        $cheminpub = asset('img/filemanager/annonceurs/').'/';
        
        $cheminremplace1 = asset('img/remplace1').'/';
        $cheminremplace2 = asset('img/remplace2').'/';
        $cheminremplace3 = asset('img/remplace3').'/';

        $image233 = Pub::where('id', 233)->first();
        $image234 = Pub::where('id', 234)->first();
        $image235 = Pub::where('id', 235)->first();
        $image236 = Pub::where('id', 236)->first();
        $image237 = Pub::where('id', 237)->first();
        $image238 = Pub::where('id', 238)->first();
        $image239 = Pub::where('id', 239)->first();
        $image240 = Pub::where('id', 240)->first();

        $imageremplace1 = Remplace1::inRandomOrder()->first();
        $imageremplace2 = Remplace1::inRandomOrder()->first();
        $imageremplace3 = Remplace1::inRandomOrder()->first();
        $imageremplace4 = Remplace1::inRandomOrder()->first();

        // On va chercher les vignerons de Saint-Estèphe
        $vins = Vigneron::where('aliaslocalitevinicole', 'saint-estephe')->get();

        // On ramène les lat, long et niveau de zoom de Saint-Estèphe
        $vinzoom = Vigneron::where('aliaslocalitevinicole', 'saint-estephe')->first();

        return view("cartes.saintestephe", compact(
            'header',
            'cheminpub',
            'cheminremplace1',
            'cheminremplace2',
            'cheminremplace3',
            'image233',
            'image234',
            'image235',
            'image236',
            'image237',
            'image238',
            'image239',
            'image240',
            'imageremplace1',
            'imageremplace2',
            'imageremplace3',
            'imageremplace4',
            'vins',
            'vinzoom'
        ));
    }

    public function saintjulien ()
    {
        $header = "Vineapolis | Vins de Saint-Julien";
        $cheminpub = asset('img/filemanager/annonceurs/').'/';
        
        $cheminremplace1 = asset('img/remplace1').'/';
        $cheminremplace2 = asset('img/remplace2').'/';
        $cheminremplace3 = asset('img/remplace3').'/';

        $image241 = Pub::where('id', 241)->first();
        $image242 = Pub::where('id', 242)->first();
        $image243 = Pub::where('id', 243)->first();
        $image244 = Pub::where('id', 244)->first();
        $image245 = Pub::where('id', 245)->first();
        $image246 = Pub::where('id', 246)->first();
        $image247 = Pub::where('id', 247)->first();
        $image248 = Pub::where('id', 248)->first();

        $imageremplace1 = Remplace1::inRandomOrder()->first();
        $imageremplace2 = Remplace1::inRandomOrder()->first();
        $imageremplace3 = Remplace1::inRandomOrder()->first();
        $imageremplace4 = Remplace1::inRandomOrder()->first();

        // On va chercher les vignerons de Saint-Julien
        $vins = Vigneron::where('aliaslocalitevinicole', 'saint-julien')->get();

        // On ramène les lat, long et niveai de zoom de la région de Saint-Julien
        $vinzoom = Vigneron::where('aliaslocalitevinicole', 'saint-julien')->first();

        return view("cartes.saintjulien", compact(
            'header',
            'cheminpub',
            'cheminremplace1',
            'cheminremplace2',
            'cheminremplace3',
            'image241',
            'image242',
            'image243',
            'image244',
            'image245',
            'image246',
            'image247',
            'image248',
            'imageremplace1',
            'imageremplace2',
            'imageremplace3',
            'imageremplace4',
            'vins',
            'vinzoom'
        ));
    }

    public function pessacleognan ()
    {
        $header = "Vineapolis | Vins de Pessac-Léognan";
       $cheminpub = asset('img/filemanager/annonceurs/').'/';
        
        $cheminremplace1 = asset('img/remplace1').'/';
        $cheminremplace2 = asset('img/remplace2').'/';
        $cheminremplace3 = asset('img/remplace3').'/';

        $image265 = Pub::where('id', 265)->first();
        $image266 = Pub::where('id', 266)->first();
        $image267 = Pub::where('id', 267)->first();
        $image268 = Pub::where('id', 268)->first();
        $image269 = Pub::where('id', 269)->first();
        $image270 = Pub::where('id', 270)->first();
        $image271 = Pub::where('id', 271)->first();
        $image272 = Pub::where('id', 272)->first();

        $imageremplace1 = Remplace1::inRandomOrder()->first();
        $imageremplace2 = Remplace1::inRandomOrder()->first();
        $imageremplace3 = Remplace1::inRandomOrder()->first();
        $imageremplace4 = Remplace1::inRandomOrder()->first();

        // On va chercher les vignerons de Pessac-Léognan
        $vins = Vigneron::where('aliaslocalitevinicole', 'pessac-leognan')->get();

        // On ramène les lat, long et niveai de zoom de la région de Pessac-Léognan
        $vinzoom = Vigneron::where('aliaslocalitevinicole', 'pessac-leognan')->first();

        return view("cartes.pessacleognan", compact(
            'header',
            'cheminpub',
            'cheminremplace1',
            'cheminremplace2',
            'cheminremplace3',
            'image265',
            'image266',
            'image267',
            'image268',
            'image269',
            'image270',
            'image271',
            'image272',
            'imageremplace1',
            'imageremplace2',
            'imageremplace3',
            'imageremplace4',
            'vins',
            'vinzoom',
            'vinzoom'
        ));
    }

    public function pomerol ()
    {
        $header = "Vineapolis | Vins de Pomerol";
        $cheminpub = asset('img/filemanager/annonceurs/').'/';
        
        $cheminremplace1 = asset('img/remplace1').'/';
        $cheminremplace2 = asset('img/remplace2').'/';
        $cheminremplace3 = asset('img/remplace3').'/';

        $image273 = Pub::where('id', 273)->first();
        $image274 = Pub::where('id', 274)->first();
        $image275 = Pub::where('id', 275)->first();
        $image276 = Pub::where('id', 276)->first();
        $image277 = Pub::where('id', 277)->first();
        $image278 = Pub::where('id', 278)->first();
        $image279 = Pub::where('id', 279)->first();
        $image280 = Pub::where('id', 280)->first();

        $imageremplace1 = Remplace1::inRandomOrder()->first();
        $imageremplace2 = Remplace1::inRandomOrder()->first();
        $imageremplace3 = Remplace1::inRandomOrder()->first();
        $imageremplace4 = Remplace1::inRandomOrder()->first();

        // On va chercher les vignerons de Pomerol
        $vins = Vigneron::where('aliaslocalitevinicole', 'pomerol')->get();

        // On ramène les lat, long et niveai de zoom de la région de Pomerol
        $vinzoom = Vigneron::where('aliaslocalitevinicole', 'pomerol')->first();

        return view("cartes.pomerol", compact(
            'header',
            'cheminpub',
            'cheminremplace1',
            'cheminremplace2',
            'cheminremplace3',
            'image273',
            'image274',
            'image275',
            'image276',
            'image277',
            'image278',
            'image279',
            'image280',
            'imageremplace1',
            'imageremplace2',
            'imageremplace3',
            'imageremplace4',
            'vins',
            'vinzoom',
            'vinzoom'
        ));
    }

    public function saintemilion ()
    {
        $header = "Vineapolis | Vins de Saint-Émilion";
        $cheminpub = asset('img/filemanager/annonceurs/').'/';
        
        $cheminremplace1 = asset('img/remplace1').'/';
        $cheminremplace2 = asset('img/remplace2').'/';
        $cheminremplace3 = asset('img/remplace3').'/';

        $image281 = Pub::where('id', 281)->first();
        $image282 = Pub::where('id', 282)->first();
        $image283 = Pub::where('id', 283)->first();
        $image284 = Pub::where('id', 284)->first();
        $image285 = Pub::where('id', 285)->first();
        $image286 = Pub::where('id', 286)->first();
        $image287 = Pub::where('id', 287)->first();
        $image288 = Pub::where('id', 288)->first();

        $imageremplace1 = Remplace1::inRandomOrder()->first();
        $imageremplace2 = Remplace1::inRandomOrder()->first();
        $imageremplace3 = Remplace1::inRandomOrder()->first();
        $imageremplace4 = Remplace1::inRandomOrder()->first();

        // On va chercher les vignerons de Saint-Émilion
        $vins = Vigneron::where('aliaslocalitevinicole', 'saint-emilion')->get();

        // On ramène les lat, long et niveai de zoom de la région de Saint-Émilion
        $vinzoom = Vigneron::where('aliaslocalitevinicole', 'saint-emilion')->first();

        return view("cartes.saintemilion", compact(
            'header',
            'cheminpub',
            'cheminremplace1',
            'cheminremplace2',
            'cheminremplace3',
            'image281',
            'image282',
            'image283',
            'image284',
            'image285',
            'image286',
            'image287',
            'image288',
            'imageremplace1',
            'imageremplace2',
            'imageremplace3',
            'imageremplace4',
            'vins',
            'vinzoom',
            'vinzoom'
        ));
    }

    public function sauternes ()
    {
        $header = "Vineapolis | Vins de Sauternes";
        $cheminpub = asset('img/filemanager/annonceurs/').'/';
        
        $cheminremplace1 = asset('img/remplace1').'/';
        $cheminremplace2 = asset('img/remplace2').'/';
        $cheminremplace3 = asset('img/remplace3').'/';

        $image289 = Pub::where('id', 289)->first();
        $image290 = Pub::where('id', 290)->first();
        $image291 = Pub::where('id', 291)->first();
        $image292 = Pub::where('id', 292)->first();
        $image293 = Pub::where('id', 293)->first();
        $image294 = Pub::where('id', 294)->first();
        $image295 = Pub::where('id', 295)->first();
        $image296 = Pub::where('id', 296)->first();

        $imageremplace1 = Remplace1::inRandomOrder()->first();
        $imageremplace2 = Remplace1::inRandomOrder()->first();
        $imageremplace3 = Remplace1::inRandomOrder()->first();
        $imageremplace4 = Remplace1::inRandomOrder()->first();

        // On va chercher les vignerons de Sauternes et Barsac
        $vins = Vigneron::where('aliaslocalitevinicole', 'sauternes-et-barsac')->get();

        // On ramène les lat, long et niveai de zoom de la région de Sauternes et Barsac
        $vinzoom = Vigneron::where('aliaslocalitevinicole', 'sauternes-et-barsac')->first();

        return view("cartes.sauternes", compact(
            'header',
            'cheminpub',
            'cheminpub',
            'cheminremplace1',
            'cheminremplace2',
            'cheminremplace3',
            'image290',
            'image289',
            'image291',
            'image292',
            'image293',
            'image294',
            'image295',
            'image296',
            'imageremplace1',
            'imageremplace2',
            'imageremplace3',
            'imageremplace4',
            'vins',
            'vinzoom',
            'vinzoom'
        ));
    }

}
