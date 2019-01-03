<?php

namespace App\Http\Controllers\Cartes;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Pub;
use App\Remplace1;
use App\Remplace2;
use App\Remplace3;
use App\Vigneron;

class BourgogneController extends Controller
{

    public function index()
    {
        $header = "Vineapolis | Bourgogne";
        $cheminpub = asset('img/filemanager/annonceurs/').'/';

        $cheminremplace1 = asset('img/remplace1').'/';
        $cheminremplace2 = asset('img/remplace2').'/';
        $cheminremplace3 = asset('img/remplace3').'/';

        $image9 = Pub::where('id', 9)->first();
        $image10 = Pub::where('id', 10)->first();
        $image11 = Pub::where('id', 11)->first();
        $image12 = Pub::where('id', 12)->first();
        $image13 = Pub::where('id', 13)->first();
        $image14 = Pub::where('id', 14)->first();
        $image15 = Pub::where('id', 15)->first();
        $image16 = Pub::where('id', 16)->first();

        $imageremplace1 = Remplace1::inRandomOrder()->first();
        $imageremplace2 = Remplace2::inRandomOrder()->first();
        $imageremplace3 = Remplace3::inRandomOrder()->first();

        return view("cartes.bourgogne", compact(
            'header',
            'cheminpub',
            'cheminremplace1',
            'cheminremplace2',
            'cheminremplace3',
            'image9',
            'image10',
            'image11',
            'image12',
            'image13',
            'image14',
            'image15',
            'image16',
            'imageremplace1',
            'imageremplace2',
            'imageremplace3'
        ));
    }

    public function chablis ()
    {
        $header = "Vineapolis | Chablis";
        $cheminpub = asset('img/filemanager/annonceurs/').'/';

        $cheminremplace1 = asset('img/remplace1').'/';
        $cheminremplace2 = asset('img/remplace2').'/';
        $cheminremplace3 = asset('img/remplace3').'/';

        $image65 = Pub::where('id', 65)->first();
        $image66 = Pub::where('id', 66)->first();
        $image67 = Pub::where('id', 67)->first();
        $image68 = Pub::where('id', 68)->first();
        $image69 = Pub::where('id', 69)->first();
        $image70 = Pub::where('id', 70)->first();
        $image71 = Pub::where('id', 71)->first();
        $image72 = Pub::where('id', 72)->first();

        $imageremplace1 = Remplace1::inRandomOrder()->first();
        $imageremplace2 = Remplace2::inRandomOrder()->first();
        $imageremplace3 = Remplace3::inRandomOrder()->first();

        return view("cartes.chablis", compact(
            'header',
            'cheminpub',
            'cheminremplace1',
            'cheminremplace2',
            'cheminremplace3',
            'image65',
            'image66',
            'image67',
            'image68',
            'image69',
            'image70',
            'image71',
            'image72',
            'imageremplace1',
            'imageremplace2',
            'imageremplace3'
        ));
    }

    public function grandscrusdechablis ()
    {
        $header = "Vineapolis | Chablis Grands Crus";
        $cheminpub = asset('img/filemanager/annonceurs/').'/';

        $cheminremplace1 = asset('img/remplace1').'/';

        $image97  = Pub::where('id', 97)->first();
        $image98  = Pub::where('id', 98)->first();
        $image99  = Pub::where('id', 99)->first();
        $image100 = Pub::where('id', 100)->first();
        $image101 = Pub::where('id', 101)->first();
        $image102 = Pub::where('id', 102)->first();
        $image103 = Pub::where('id', 103)->first();
        $image104 = Pub::where('id', 104)->first();

        $imageremplace1 = Remplace1::inRandomOrder()->first();
        $imageremplace2 = Remplace1::inRandomOrder()->first();
        $imageremplace3 = Remplace1::inRandomOrder()->first();
        $imageremplace4 = Remplace1::inRandomOrder()->first();

        // On va chercher les vignerons des Grands Crus de Chablis
        $vins = Vigneron::where('aliaslocalitevinicole', 'grands-crus-de-chablis')->get();

        // On ramène les lat, long et niveau de zoom des Grands Crus de Chablis
        $vinzoom = Vigneron::where('aliaslocalitevinicole', 'grands-crus-de-chablis')->first();

        return view("cartes.grands-crus-de-chablis", compact(
            'header',
            'cheminpub',
            'cheminremplace1',
            'cheminremplace2',
            'cheminremplace3',
            'image97',
            'image98',
            'image99',
            'image100',
            'image101',
            'image102',
            'image103',
            'image104',
            'imageremplace1',
            'imageremplace2',
            'imageremplace3',
            'imageremplace4',
            'vins',
            'vinzoom'
        ));
    }

    public function cotedenuits ()
    {
        $header = "Vineapolis | Côtes de Nuits";
        $cheminpub = asset('img/filemanager/annonceurs/').'/';

        $cheminremplace1 = asset('img/remplace1').'/';
        $cheminremplace2 = asset('img/remplace2').'/';
        $cheminremplace3 = asset('img/remplace3').'/';

        $image81 = Pub::where('id', 81)->first();
        $image82 = Pub::where('id', 82)->first();
        $image83 = Pub::where('id', 83)->first();
        $image84 = Pub::where('id', 84)->first();
        $image85 = Pub::where('id', 85)->first();
        $image86 = Pub::where('id', 86)->first();
        $image87 = Pub::where('id', 87)->first();
        $image88 = Pub::where('id', 88)->first();

        $imageremplace1 = Remplace1::inRandomOrder()->first();
        $imageremplace2 = Remplace2::inRandomOrder()->first();
        $imageremplace3 = Remplace3::inRandomOrder()->first();

        return view("cartes.cotedenuits", compact(
            'header',
            'cheminpub',
            'cheminremplace1',
            'cheminremplace2',
            'cheminremplace3',
            'image81',
            'image82',
            'image83',
            'image84',
            'image85',
            'image86',
            'image87',
            'image88',
            'imageremplace1',
            'imageremplace2',
            'imageremplace3'
        ));
    }

    public function gevreychambertin ()
    {
        $header = "Vineapolis | Gevrey-Chambertin";
        $cheminpub = asset('img/filemanager/annonceurs/').'/';

        $cheminremplace1 = asset('img/remplace1').'/';
        $cheminremplace2 = asset('img/remplace2').'/';
        $cheminremplace3 = asset('img/remplace3').'/';

        $image113 = Pub::where('id', 113)->first();
        $image114 = Pub::where('id', 114)->first();
        $image115 = Pub::where('id', 115)->first();
        $image116 = Pub::where('id', 116)->first();
        $image117 = Pub::where('id', 117)->first();
        $image118 = Pub::where('id', 118)->first();
        $image119 = Pub::where('id', 119)->first();
        $image120 = Pub::where('id', 120)->first();

        $imageremplace1 = Remplace1::inRandomOrder()->first();
        $imageremplace2 = Remplace1::inRandomOrder()->first();
        $imageremplace3 = Remplace1::inRandomOrder()->first();
        $imageremplace4 = Remplace1::inRandomOrder()->first();

        // On va chercher les vignerons de Gevrey-Chambertin
        $vins = Vigneron::where('aliaslocalitevinicole', 'gevrey-chambertin')->get();

        // On ramène les lat, long et niveau de zoom de Gevrey-Chambertin
        $vinzoom = Vigneron::where('aliaslocalitevinicole', 'gevrey-chambertin')->first();

        return view("cartes.gevreychambertin", compact(
            'header',
            'cheminpub',
            'cheminremplace1',
            'cheminremplace2',
            'cheminremplace3',
            'image113',
            'image114',
            'image115',
            'image116',
            'image117',
            'image118',
            'image119',
            'image120',
            'imageremplace1',
            'imageremplace2',
            'imageremplace3',
            'imageremplace4',
            'vins',
            'vinzoom'
        ));
    }

    public function chambollemusigny ()
    {
        $header = "Vineapolis | Chambolle-Musigny";
        $cheminpub = asset('img/filemanager/annonceurs/').'/';

        $cheminremplace1 = asset('img/remplace1').'/';
        $cheminremplace2 = asset('img/remplace2').'/';
        $cheminremplace3 = asset('img/remplace3').'/';

        $image121 = Pub::where('id', 121)->first();
        $image122 = Pub::where('id', 122)->first();
        $image123 = Pub::where('id', 123)->first();
        $image124 = Pub::where('id', 124)->first();
        $image125 = Pub::where('id', 125)->first();
        $image126 = Pub::where('id', 126)->first();
        $image127 = Pub::where('id', 127)->first();
        $image128 = Pub::where('id', 128)->first();

        $imageremplace1 = Remplace1::inRandomOrder()->first();
        $imageremplace2 = Remplace1::inRandomOrder()->first();
        $imageremplace3 = Remplace1::inRandomOrder()->first();
        $imageremplace4 = Remplace1::inRandomOrder()->first();

        // On va chercher les vignerons de Chambolle-Musigny
        $vins = Vigneron::where('aliaslocalitevinicole', 'chambolle-musigny-morey-saint-denis')->get();

        // On ramène les lat, long et niveau de zoom de Chambolle-Musigny
        $vinzoom = Vigneron::where('aliaslocalitevinicole', 'chambolle-musigny-morey-saint-denis')->first();

        return view("cartes.chambollemusigny", compact(
            'header',
            'cheminpub',
            'cheminremplace1',
            'cheminremplace2',
            'cheminremplace3',
            'image121',
            'image122',
            'image123',
            'image124',
            'image125',
            'image126',
            'image127',
            'image128',
            'imageremplace1',
            'imageremplace2',
            'imageremplace3',
            'imageremplace4',
            'vins',
            'vinzoom'
        ));
    }

    public function cotechalonnaise ()
    {
        $header = "Vineapolis | Côte Chalonnaise";
        $cheminpub = asset('img/filemanager/annonceurs/').'/';

        $cheminremplace1 = asset('img/remplace1').'/';
        $cheminremplace2 = asset('img/remplace2').'/';
        $cheminremplace3 = asset('img/remplace3').'/';

        $image89 = Pub::where('id', 89)->first();
        $image90 = Pub::where('id', 90)->first();
        $image91 = Pub::where('id', 91)->first();
        $image92 = Pub::where('id', 92)->first();
        $image93 = Pub::where('id', 93)->first();
        $image94 = Pub::where('id', 94)->first();
        $image95 = Pub::where('id', 95)->first();
        $image96 = Pub::where('id', 96)->first();

        $imageremplace1 = Remplace1::inRandomOrder()->first();
        $imageremplace2 = Remplace1::inRandomOrder()->first();
        $imageremplace3 = Remplace1::inRandomOrder()->first();
        $imageremplace4 = Remplace1::inRandomOrder()->first();

        // On va chercher les vignerons de Côte Chalonnaise
        $vins = Vigneron::where('aliaslocalitevinicole', 'cote-chalonnaise-et-couchoise')->get();

        // On ramène les lat, long et niveau de zoom de Côte Chalonnaise
        $vinzoom = Vigneron::where('aliaslocalitevinicole', 'cote-chalonnaise-et-couchoise')->first();

        return view("cartes.cotechalonnaise", compact(
            'header',
            'cheminpub',
            'cheminremplace1',
            'cheminremplace2',
            'cheminremplace3',
            'image89',
            'image90',
            'image91',
            'image92',
            'image93',
            'image94',
            'image95',
            'image96',
            'imageremplace1',
            'imageremplace2',
            'imageremplace3',
            'imageremplace4',
            'vins',
            'vinzoom'
        ));
    }

    public function beauneetcotesdebeaune ()
    {
        $header = "Vineapolis | Vins de Beaune et Côtes de Beaune";
        $cheminpub = asset('img/filemanager/annonceurs/').'/';

        $cheminremplace1 = asset('img/remplace1').'/';
        $cheminremplace2 = asset('img/remplace2').'/';
        $cheminremplace3 = asset('img/remplace3').'/';

        $image57 = Pub::where('id', 57)->first();
        $image58 = Pub::where('id', 58)->first();
        $image59 = Pub::where('id', 59)->first();
        $image60 = Pub::where('id', 60)->first();
        $image61 = Pub::where('id', 61)->first();
        $image62 = Pub::where('id', 62)->first();
        $image63 = Pub::where('id', 63)->first();
        $image64 = Pub::where('id', 64)->first();

        $imageremplace1 = Remplace1::inRandomOrder()->first();
        $imageremplace2 = Remplace2::inRandomOrder()->first();
        $imageremplace3 = Remplace3::inRandomOrder()->first();

        return view("cartes.beauneetcotesdebeaune", compact(
            'header',
            'cheminpub',
            'cheminremplace1',
            'cheminremplace2',
            'cheminremplace3',
            'image57',
            'image58',
            'image59',
            'image60',
            'image61',
            'image62',
            'image63',
            'image64',
            'imageremplace1',
            'imageremplace2',
            'imageremplace3'
        ));
    }

    public function beaune ()
    {
        $header = "Vineapolis | 1ers crus et Grands Crus de Beaune";
        $cheminpub = asset('img/filemanager/annonceurs/').'/';

        $cheminremplace1 = asset('img/remplace1').'/';
        $cheminremplace2 = asset('img/remplace2').'/';
        $cheminremplace3 = asset('img/remplace3').'/';

        $image161 = Pub::where('id', 161)->first();
        $image162 = Pub::where('id', 162)->first();
        $image163 = Pub::where('id', 163)->first();
        $image164 = Pub::where('id', 140)->first();
        $image165 = Pub::where('id', 165)->first();
        $image166 = Pub::where('id', 166)->first();
        $image167 = Pub::where('id', 167)->first();
        $image168 = Pub::where('id', 168)->first();

        $imageremplace1 = Remplace1::inRandomOrder()->first();
        $imageremplace2 = Remplace1::inRandomOrder()->first();
        $imageremplace3 = Remplace1::inRandomOrder()->first();
        $imageremplace4 = Remplace1::inRandomOrder()->first();

        // On va chercher les vignerons des Vins et Grands Crus de Beaune
        $vins = Vigneron::where('aliaslocalitevinicole', '1ers-crus-et-grands-crus-de-beaune')->get();

        // On ramène les lat, long et niveau de zoom des Vins et Grands Crus de Beaune
        $vinzoom = Vigneron::where('aliaslocalitevinicole', '1ers-crus-et-grands-crus-de-beaune')->first();

        return view("cartes.beaune", compact(
            'header',
            'cheminpub',
            'cheminremplace1',
            'cheminremplace2',
            'cheminremplace3',
            'image161',
            'image162',
            'image163',
            'image164',
            'image165',
            'image166',
            'image167',
            'image168',
            'imageremplace1',
            'imageremplace2',
            'imageremplace3',
            'imageremplace4',
            'vins',
            'vinzoom'
        ));
    }

    public function aloxecorton ()
    {
        $header = "Vineapolis | Aloxe-Corton";
        $cheminpub = asset('img/filemanager/annonceurs/').'/';

        $cheminremplace1 = asset('img/remplace1').'/';
        $cheminremplace2 = asset('img/remplace2').'/';
        $cheminremplace3 = asset('img/remplace3').'/';

        $image153 = Pub::where('id', 153)->first();
        $image154 = Pub::where('id', 154)->first();
        $image155 = Pub::where('id', 155)->first();
        $image156 = Pub::where('id', 156)->first();
        $image157 = Pub::where('id', 157)->first();
        $image158 = Pub::where('id', 158)->first();
        $image159 = Pub::where('id', 159)->first();
        $image160 = Pub::where('id', 160)->first();

        $imageremplace1 = Remplace1::inRandomOrder()->first();
        $imageremplace2 = Remplace1::inRandomOrder()->first();
        $imageremplace3 = Remplace1::inRandomOrder()->first();
        $imageremplace4 = Remplace1::inRandomOrder()->first();

        // On va chercher les vignerons d'Aloxe-Corton
        $vins = Vigneron::where('aliaslocalitevinicole', 'aloxe-corton')->get();

        // On ramène les lat, long et niveau de zoom d'Aloxe-Corton
        $vinzoom = Vigneron::where('aliaslocalitevinicole', 'aloxe-corton')->first();

        return view("cartes.aloxecorton", compact(
            'header',
            'cheminpub',
            'cheminremplace1',
            'cheminremplace2',
            'cheminremplace3',
            'image153',
            'image154',
            'image155',
            'image156',
            'image157',
            'image158',
            'image159',
            'image160',
            'imageremplace1',
            'imageremplace2',
            'imageremplace3',
            'imageremplace4',
            'vins',
            'vinzoom'
        ));
    }

    public function chassagnemontrachet ()
    {
        $header = "Vineapolis | Chassagne-Montrachet";
        $cheminpub = asset('img/filemanager/annonceurs/').'/';

        $cheminremplace1 = asset('img/remplace1').'/';
        $cheminremplace2 = asset('img/remplace2').'/';
        $cheminremplace3 = asset('img/remplace3').'/';

        $image193 = Pub::where('id', 193)->first();
        $image194 = Pub::where('id', 194)->first();
        $image195 = Pub::where('id', 195)->first();
        $image196 = Pub::where('id', 196)->first();
        $image197 = Pub::where('id', 197)->first();
        $image198 = Pub::where('id', 198)->first();
        $image199 = Pub::where('id', 199)->first();
        $image200 = Pub::where('id', 200)->first();

        $imageremplace1 = Remplace1::inRandomOrder()->first();
        $imageremplace2 = Remplace1::inRandomOrder()->first();
        $imageremplace3 = Remplace1::inRandomOrder()->first();
        $imageremplace4 = Remplace1::inRandomOrder()->first();

        // On va chercher les vignerons de Chassagne-Montrachet
        $vins = Vigneron::where('aliaslocalitevinicole', 'chassagne-montrachet')->get();

        // On ramène les lat, long et niveau de zoom de Chassagne-Montrachet
        $vinzoom = Vigneron::where('aliaslocalitevinicole', 'chassagne-montrachet')->first();

        return view("cartes.chassagnemontrachet", compact(
            'header',
            'cheminpub',
            'cheminremplace1',
            'cheminremplace2',
            'cheminremplace3',
            'image193',
            'image194',
            'image195',
            'image196',
            'image199',
            'image197',
            'image198',
            'image200',
            'imageremplace1',
            'imageremplace2',
            'imageremplace3',
            'imageremplace4',
            'vins',
            'vinzoom'
        ));
    }

    public function pommard ()
    {
        $header = "Vineapolis | Pommard";
        $cheminpub = asset('img/filemanager/annonceurs/').'/';

        $cheminremplace1 = asset('img/remplace1').'/';
        $cheminremplace2 = asset('img/remplace2').'/';
        $cheminremplace3 = asset('img/remplace3').'/';

        $image169 = Pub::where('id', 169)->first();
        $image170 = Pub::where('id', 170)->first();
        $image171 = Pub::where('id', 171)->first();
        $image172 = Pub::where('id', 140)->first();
        $image173 = Pub::where('id', 173)->first();
        $image174 = Pub::where('id', 174)->first();
        $image175 = Pub::where('id', 175)->first();
        $image176 = Pub::where('id', 176)->first();

        $imageremplace1 = Remplace1::inRandomOrder()->first();
        $imageremplace2 = Remplace1::inRandomOrder()->first();
        $imageremplace3 = Remplace1::inRandomOrder()->first();
        $imageremplace4 = Remplace1::inRandomOrder()->first();

        // On va chercher les vignerons de Pommard
        $vins = Vigneron::where('aliaslocalitevinicole', 'pommard')->get();

        // On ramène les lat, long et niveau de zoom de Pommard
        $vinzoom = Vigneron::where('aliaslocalitevinicole', 'pommard')->first();

        return view("cartes.pommard", compact(
            'header',
            'cheminpub',
            'cheminremplace1',
            'cheminremplace2',
            'cheminremplace3',
            'image169',
            'image170',
            'image171',
            'image172',
            'image173',
            'image174',
            'image175',
            'image176',
            'imageremplace1',
            'imageremplace2',
            'imageremplace3',
            'imageremplace4',
            'vins',
            'vinzoom'
        ));
    }

    public function pulignymontrachet ()
    {
        $header = "Vineapolis | Puligny-Montrachet";
        $cheminpub = asset('img/filemanager/annonceurs/').'/';

        $cheminremplace1 = asset('img/remplace1').'/';
        $cheminremplace2 = asset('img/remplace2').'/';
        $cheminremplace3 = asset('img/remplace3').'/';

        $image185 = Pub::where('id', 185)->first();
        $image186 = Pub::where('id', 186)->first();
        $image187 = Pub::where('id', 187)->first();
        $image188 = Pub::where('id', 188)->first();
        $image189 = Pub::where('id', 189)->first();
        $image190 = Pub::where('id', 190)->first();
        $image191 = Pub::where('id', 191)->first();
        $image192 = Pub::where('id', 192)->first();

        $imageremplace1 = Remplace1::inRandomOrder()->first();
        $imageremplace2 = Remplace1::inRandomOrder()->first();
        $imageremplace3 = Remplace1::inRandomOrder()->first();
        $imageremplace4 = Remplace1::inRandomOrder()->first();

        // On va chercher les vignerons de Puligny-Montrachet
        $vins = Vigneron::where('aliaslocalitevinicole', 'puligny-montrachet')->get();

        // On ramène les lat, long et niveau de zoom de Puligny-Montrachet
        $vinzoom = Vigneron::where('aliaslocalitevinicole', 'puligny-montrachet')->first();

        return view("cartes.pulignymontrachet", compact(
            'header',
            'cheminpub',
            'cheminremplace1',
            'cheminremplace2',
            'cheminremplace3',
            'image185',
            'image186',
            'image187',
            'image188',
            'image190',
            'image189',
            'image191',
            'image192',
            'imageremplace1',
            'imageremplace2',
            'imageremplace3',
            'imageremplace4',
            'vins',
            'vinzoom'
        ));
    }

    public function volnay ()
    {
        $header = "Vineapolis | Volnay";
        $cheminpub = asset('img/filemanager/annonceurs/').'/';

        $cheminremplace1 = asset('img/remplace1').'/';
        $cheminremplace2 = asset('img/remplace2').'/';
        $cheminremplace3 = asset('img/remplace3').'/';

        $image177 = Pub::where('id', 177)->first();
        $image178 = Pub::where('id', 178)->first();
        $image179 = Pub::where('id', 179)->first();
        $image180 = Pub::where('id', 180)->first();
        $image181 = Pub::where('id', 181)->first();
        $image182 = Pub::where('id', 182)->first();
        $image183 = Pub::where('id', 183)->first();
        $image184 = Pub::where('id', 184)->first();

        $imageremplace1 = Remplace1::inRandomOrder()->first();
        $imageremplace2 = Remplace1::inRandomOrder()->first();
        $imageremplace3 = Remplace1::inRandomOrder()->first();
        $imageremplace4 = Remplace1::inRandomOrder()->first();

        // On va chercher les vignerons de Volnay
        $vins = Vigneron::where('localitevinicole', 'volnay')->get();

        // On ramène les lat, long et niveau de zoom de Volnay
        $vinzoom = Vigneron::where('aliaslocalitevinicole', 'volnay')->first();

        return view("cartes.volnay", compact(
            'header',
            'cheminpub',
            'cheminremplace1',
            'cheminremplace2',
            'cheminremplace3',
            'image177',
            'image178',
            'image179',
            'image180',
            'image181',
            'image182',
            'image183',
            'image184',
            'imageremplace1',
            'imageremplace2',
            'imageremplace3',
            'imageremplace4',
            'vins',
            'vinzoom'
        ));
    }

    public function macon ()
    {
        $header = "Vineapolis | Mâcon";
        $cheminpub = asset('img/filemanager/annonceurs/').'/';

        $cheminremplace1 = asset('img/remplace1').'/';
        $cheminremplace2 = asset('img/remplace2').'/';
        $cheminremplace3 = asset('img/remplace3').'/';

        $image105 = Pub::where('id', 105)->first();
        $image106 = Pub::where('id', 106)->first();
        $image107 = Pub::where('id', 107)->first();
        $image108 = Pub::where('id', 108)->first();
        $image109 = Pub::where('id', 109)->first();
        $image110 = Pub::where('id', 110)->first();
        $image111 = Pub::where('id', 111)->first();
        $image112 = Pub::where('id', 112)->first();

        $imageremplace1 = Remplace1::inRandomOrder()->first();
        $imageremplace2 = Remplace1::inRandomOrder()->first();
        $imageremplace3 = Remplace1::inRandomOrder()->first();
        $imageremplace4 = Remplace1::inRandomOrder()->first();

        // On va chercher les vignerons du Mâconnais
        $vins = Vigneron::where('localitevinicole', 'macon')->get();

        // On ramène les lat, long et niveau de zoom du Mâconnais
        $vinzoom = Vigneron::where('aliaslocalitevinicole', 'macon')->first();

        return view("cartes.macon", compact(
            'header',
            'cheminpub',
            'cheminremplace1',
            'cheminremplace2',
            'cheminremplace3',
            'image105',
            'image106',
            'image107',
            'image108',
            'image109',
            'image110',
            'image111',
            'image112',
            'imageremplace1',
            'imageremplace2',
            'imageremplace3',
            'imageremplace4',
            'vins',
            'vinzoom'
        ));
    }

    public function vougeot ()
    {
        $header = "Vineapolis | Vougeot";
        $cheminpub = asset('img/filemanager/annonceurs/').'/';

        $cheminremplace1 = asset('img/remplace1').'/';
        $cheminremplace2 = asset('img/remplace2').'/';
        $cheminremplace3 = asset('img/remplace3').'/';

        $image129 = Pub::where('id', 129)->first();
        $image130 = Pub::where('id', 130)->first();
        $image131 = Pub::where('id', 131)->first();
        $image132 = Pub::where('id', 132)->first();
        $image133 = Pub::where('id', 133)->first();
        $image134 = Pub::where('id', 134)->first();
        $image135 = Pub::where('id', 135)->first();
        $image136 = Pub::where('id', 136)->first();

        $imageremplace1 = Remplace1::inRandomOrder()->first();
        $imageremplace2 = Remplace1::inRandomOrder()->first();
        $imageremplace3 = Remplace1::inRandomOrder()->first();
        $imageremplace4 = Remplace1::inRandomOrder()->first();

        // On va chercher les vignerons de Vougeot
        $vins = Vigneron::where('aliaslocalitevinicole', 'vougeot')->get();

        // On ramène les lat, long et niveau de zoom de Vougeot
        $vinzoom = Vigneron::where('aliaslocalitevinicole', 'vougeot')->first();

        return view("cartes.vougeot", compact(
            'header',
            'cheminpub',
            'cheminremplace1',
            'cheminremplace2',
            'cheminremplace3',
            'image129',
            'image130',
            'image131',
            'image132',
            'image133',
            'image134',
            'image135',
            'image136',
            'imageremplace1',
            'imageremplace2',
            'imageremplace3',
            'imageremplace4',
            'vins',
            'vinzoom'
        ));
    }

    public function vosne ()
    {
        $header = "Vineapolis | Vosne-Romanée";
        $cheminpub = asset('img/filemanager/annonceurs/').'/';

        $cheminremplace1 = asset('img/remplace1').'/';
        $cheminremplace2 = asset('img/remplace2').'/';
        $cheminremplace3 = asset('img/remplace3').'/';

        $image137 = Pub::where('id', 137)->first();
        $image138 = Pub::where('id', 138)->first();
        $image139 = Pub::where('id', 139)->first();
        $image140 = Pub::where('id', 140)->first();
        $image141 = Pub::where('id', 141)->first();
        $image142 = Pub::where('id', 142)->first();
        $image143 = Pub::where('id', 143)->first();
        $image144 = Pub::where('id', 144)->first();

        $imageremplace1 = Remplace1::inRandomOrder()->first();
        $imageremplace2 = Remplace1::inRandomOrder()->first();
        $imageremplace3 = Remplace1::inRandomOrder()->first();
        $imageremplace4 = Remplace1::inRandomOrder()->first();

        // On va chercher les vignerons de Vosne-Romanée
        $vins = Vigneron::where('aliaslocalitevinicole', 'vosne-romanee')->get();

        // On ramène les lat, long et niveau de zoom de Vosne-Romanée
        $vinzoom = Vigneron::where('aliaslocalitevinicole', 'vosne-romanee')->first();

        return view("cartes.vosne", compact(
            'header',
            'cheminpub',
            'cheminremplace1',
            'cheminremplace2',
            'cheminremplace3',
            'image137',
            'image138',
            'image139',
            'image140',
            'image141',
            'image142',
            'image143',
            'image144',
            'imageremplace1',
            'imageremplace2',
            'imageremplace3',
            'imageremplace4',
            'vins',
            'vinzoom'
        ));
    }

    public function nuitssaintgeorges ()
    {
        $header = "Vineapolis | Nuits-Saint-Georges";
        $cheminpub = asset('img/filemanager/annonceurs/').'/';

        $cheminremplace1 = asset('img/remplace1').'/';
        $cheminremplace2 = asset('img/remplace2').'/';
        $cheminremplace3 = asset('img/remplace3').'/';

        $image145 = Pub::where('id', 145)->first();
        $image146 = Pub::where('id', 146)->first();
        $image147 = Pub::where('id', 147)->first();
        $image148 = Pub::where('id', 148)->first();
        $image149 = Pub::where('id', 149)->first();
        $image150 = Pub::where('id', 150)->first();
        $image151 = Pub::where('id', 151)->first();
        $image152 = Pub::where('id', 152)->first();

        $imageremplace1 = Remplace1::inRandomOrder()->first();
        $imageremplace2 = Remplace1::inRandomOrder()->first();
        $imageremplace3 = Remplace1::inRandomOrder()->first();
        $imageremplace4 = Remplace1::inRandomOrder()->first();

        // On va chercher les vignerons de Nuits-Saint-Georges
        $vins = Vigneron::where('aliaslocalitevinicole', 'nuits-saint-georges')->get();

        // On ramène les lat, long et niveau de zoom de Nuits-Saint-Georges
        $vinzoom = Vigneron::where('aliaslocalitevinicole', 'nuits-saint-georges')->first();

        return view("cartes.nuits", compact(
            'header',
            'cheminpub',
            'cheminpub',
            'cheminremplace1',
            'cheminremplace2',
            'cheminremplace3',
            'image145',
            'image146',
            'image147',
            'image148',
            'image149',
            'image150',
            'image151',
            'image152',
            'imageremplace1',
            'imageremplace2',
            'imageremplace3',
            'imageremplace4',
            'vins',
            'vinzoom'
        ));
    }
}
