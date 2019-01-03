<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use barryvdh\dompdf;
use App\Pedef;
use Carbon\Carbon;
use App\User;
use App\Vigneron;
use App\Annonceur;

use Barryvdh\DomPDF\Facade as PDF;

class CreerFactureController extends BackendController
{
    
    // Le nombre d'annonceurs par page
    protected $limit = 10;

    /**
     * Affiche la page de création d'une facture.
     *
     * @return view('admin.creerfacture.index');
    */
    public function index ()
    {
        return view('admin.creerfacture.index');
    }

    /**
     * Pour afficher toutes les factures
     *
     * @return view('admin.creerfacture.touteslesfactures');
    */
    public function touteslesfactures ()
    {
         // Carbon::setLocale('fr');
        // On ramène les factures
        $factures = Pedef::latest()
            ->filter(request('term'))
            ->paginate($this->limit);
        
        // On compte les factures
        $comptefactures = Pedef::count();

        return view('admin.creerfacture.touteslesfactures', compact('factures', 'comptefactures'));
    }

    /**
    * Méthode creerPDF () pour créer des PDFS 
    *
    * @param Request $request
    * @param $id
    * return $pedef->download("Facture-$societe-$date.pdf");
    **/
    public function creerPDF (Request $request)
    {
        // On créé un random pour l'identiteunique
        $randomidentite = "admin_".rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9);

        // On récupère le user
        $user = User::where('name', $request->name)->first();

        // Du coup, on récupère les vignerons et les annonceurs
        $vigneron = Vigneron::where('user_id', $user->id)->first();
        $annonceur = Annonceur::where('user_id', $user->id)->first();
        
        // On créé les varaibles de la pub et des prix
        if ($request->pub === "1") $pub = "option lisibilité et détail de votre activité";
        if ($request->pub === "1") $prixHT = "25.00";
        if ($request->pub === "2") $pub = "option lisibilité, détail de votre activité et reportage";
        if ($request->pub === "2") $prixHT = "40.00";

        if ($request->pub === "3") $pub = "region de France, annonce en haut, tout à gauche et d'un format de (191px) x (238px)";
        if ($request->pub === "3") $prixHT = "3990.00";
        if ($request->pub === "4") $pub = "region de France, annonce en haut, 2ème à gauche et d'un format de (191px) x (238px)";
        if ($request->pub === "4") $prixHT = "3990.00";
        if ($request->pub === "5") $pub = "region de France, annonce au milieu, tout à gauche et d'un format de (191px) x (238px)";
        if ($request->pub === "5") $prixHT = "3990.00";
        if ($request->pub === "6") $pub = "region de France, annonce au milieu, 2ème à gauche et d'un format de (191px) x (238px)";
        if ($request->pub === "6") $prixHT = "3990.00";
        if ($request->pub === "7") $pub = "region de France, annonce en bas à gauche et d'un format de (382px) x (440px)";
        if ($request->pub === "7") $prixHT = "7990.00";
        if ($request->pub === "8") $pub = "region de France, annonce en haut à droite et d'un format de (382px) x (238px)";
        if ($request->pub === "8") $prixHT = "5490.00";
        if ($request->pub === "9") $pub = "5490.00";
        if ($request->pub === "9") $prixHT = "region de France, annonce au milieu à droite et d'un format de (382px) x (238px)";
        if ($request->pub === "10") $pub = "region de France, annonce en bas à droite et d'un format de (382px) x (440px)";
        if ($request->pub === "10") $prixHT = "7990.00";

        if ($request->pub === "315") $pub = "region d'Alsace, annonce en haut, tout à gauche et d'un format de (191px) x (238px)";
        if ($request->pub === "315") $prixHT = "790.00";
        if ($request->pub === "316") $pub = "region d'Alsace, annonce à gauche, le 1er au milieu et d'un format de (191px) x (238px)";
        if ($request->pub === "316") $prixHT = "790.00";
        if ($request->pub === "317") $pub = "region d'Alsace, annonce à gauche, le 2nd au milieu et d'un format de (191px) x (238px)";
        if ($request->pub === "317") $prixHT = "790.00";
        if ($request->pub === "318") $pub = "region d'Alsace, annonce en bas, tout à gauche et d'un format de (191px) x (238px)";
        if ($request->pub === "318") $prixHT = "790.00";
        if ($request->pub === "319") $pub = "region d'Alsace, annonce en haut, tout à droite et d'un format de (191px) x (238px)";
        if ($request->pub === "319") $prixHT = "790.00";
        if ($request->pub === "320") $pub = "region d'Alsace, annonce à droite, le 1er au milieu et d'un format de (191px) x (238px)";
        if ($request->pub === "320") $prixHT = "790.00";
        if ($request->pub === "321") $pub = "region d'Alsace, annonce à droite, le 2nd au milieu et d'un format de (191px) x (238px)";
        if ($request->pub === "321") $prixHT = "790.00";
        if ($request->pub === "322") $pub = "region d'Alsace, annonce en bas, tout à droite et d'un format de (191px) x (238px)";
        if ($request->pub === "322") $prixHT = "790.00";

        if ($request->pub === "395") $pub = "region l'Armagnac, annonce en haut, tout à gauche et d'un format de (191px) x (238px)";
        if ($request->pub === "395") $prixHT = "790.00";
        if ($request->pub === "396") $pub = "region l'Armagnac, annonce à gauche, le 1er au milieu et d'un format de (191px) x (238px)";
        if ($request->pub === "396") $prixHT = "790.00";
        if ($request->pub === "397") $pub = "region l'Armagnac, annonce à gauche, le 2nd au milieu et d'un format de (191px) x (238px)";
        if ($request->pub === "397") $prixHT = "790.00";
        if ($request->pub === "398") $pub = "region l'Armagnac, annonce en bas, tout à gauche et d'un format de (191px) x (238px)";
        if ($request->pub === "398") $prixHT = "790.00";
        if ($request->pub === "399") $pub = "region l'Armagnac, annonce en haut, tout à droite et d'un format de (991px) x (238px)";
        if ($request->pub === "399") $prixHT = "790.00";
        if ($request->pub === "400") $pub = "region l'Armagnac, annonce à droite, le 1er au milieu et d'un format de (191px) x (238px)";
        if ($request->pub === "400") $prixHT = "790.00";
        if ($request->pub === "401") $pub = "region l'Armagnac, annonce à droite, le 2nd au milieu et d'un format de (191px) x (238px)";
        if ($request->pub === "401") $prixHT = "790.00";
        if ($request->pub === "402") $pub = "region l'Armagnac, annonce en bas, tout à droite et d'un format de (191px) x (238px)";
        if ($request->pub === "402") $prixHT = "790.00";

        if ($request->pub === "411") $pub = "region l'Auvergne, annonce en haut, tout à gauche et d'un format de (191px) x (238px)";
        if ($request->pub === "411") $prixHT = "790.00";
        if ($request->pub === "412") $pub = "region l'Auvergne, annonce à gauche, le 1er au milieu et d'un format de (191px) x (238px)";
        if ($request->pub === "412") $prixHT = "790.00";
        if ($request->pub === "413") $pub = "region l'Auvergne, annonce à gauche, le 2nd au milieu et d'un format de (191px) x (238px)";
        if ($request->pub === "413") $prixHT = "790.00";
        if ($request->pub === "414") $pub = "region l'Auvergne, annonce en bas, tout à gauche et d'un format de (191px) x (238px)";
        if ($request->pub === "414") $prixHT = "790.00";
        if ($request->pub === "415") $pub = "region l'Auvergne, annonce en haut, tout à droite et d'un format de (991px) x (238px)";
        if ($request->pub === "415") $prixHT = "790.00";
        if ($request->pub === "416") $pub = "region l'Auvergne, annonce à droite, le 1er au milieu et d'un format de (191px) x (238px)";
        if ($request->pub === "416") $prixHT = "790.00";
        if ($request->pub === "417") $pub = "region l'Auvergne, annonce à droite, le 2nd au milieu et d'un format de (191px) x (238px)";
        if ($request->pub === "417") $prixHT = "790.00";
        if ($request->pub === "418") $pub = "region l'Auvergne, annonce en bas, tout à droite et d'un format de (191px) x (238px)";
        if ($request->pub === "418") $prixHT = "790.00";

        if ($request->pub === "371") $pub = "region du Beaujolais, annonce en haut, tout à gauche et d'un format de (191px) x (238px)";
        if ($request->pub === "371") $prixHT = "790.00";
        if ($request->pub === "372") $pub = "region du Beaujolais, annonce à gauche, le 1er au milieu et d'un format de (191px) x (438px)";
        if ($request->pub === "372") $prixHT = "790.00";
        if ($request->pub === "373") $pub = "region du Beaujolais, annonce à gauche, le 2nd au milieu et d'un format de (191px) x (238px)";
        if ($request->pub === "373") $prixHT = "790.00";
        if ($request->pub === "374") $pub = "region du Beaujolais, annonce en bas, tout à gauche et d'un format de (191px) x (238px)";
        if ($request->pub === "374") $prixHT = "790.00";
        if ($request->pub === "375") $pub = "region du Beaujolais, annonce en haut, tout à droite et d'un format de (991px) x (238px)";
        if ($request->pub === "375") $prixHT = "790.00";
        if ($request->pub === "376") $pub = "region du Beaujolais, annonce à droite, le 1er au milieu et d'un format de (191px) x (238px)";
        if ($request->pub === "376") $prixHT = "790.00";
        if ($request->pub === "377") $pub= "region du Beaujolais, annonce à droite, le 2nd au milieu et d'un format de (191px) x (238px)";
        if ($request->pub === "377") $prixHT = "790.00";
        if ($request->pub === "378") $pub = "region du Beaujolais, annonce en bas, tout à droite et d'un format de (191px) x (238px)";
        if ($request->pub === "378") $prixHT = "790.00";

        if ($request->pub === "19") $pub = "region de Bordeaux, annonce en haut, tout à gauche et d'un format de (191px) x (238px)";
        if ($request->pub === "19") $prixHT = "2990.00";
        if ($request->pub === "20") $pub = "region de Bordeaux, annonce en haut, 2ème à gauche et d'un format de (191px) x (238px)";
        if ($request->pub === "20") $prixHT = "2990.00";
        if ($request->pub === "21") $pub = "region de Bordeaux, annonce au milieu, tout à gauche et d'un format de (191px) x (238px)";
        if ($request->pub === "21") $prixHT = "2990.00";
        if ($request->pub === "22") $pub = "region de Bordeaux, annonce au milieu, 2ème à gauche et d'un format de (191px) x (238px)";
        if ($request->pub === "22") $prixHT = "2990.00";
        if ($request->pub === "23") $pub = "region de Bordeaux, annonce en bas à gauche et d'un format de (382px) x (440px)";
        if ($request->pub === "23") $prixHT = "3990.00";
        if ($request->pub === "24") $pub = "region de Bordeaux, annonce en haut à droite et d'un format de (382px) x (238px)";
        if ($request->pub === "24") $prixHT = "3490.00";
        if ($request->pub === "25") $pub = "region de Bordeaux, annonce au milieu à droite et d'un format de (382px) x (238px)";
        if ($request->pub === "25") $prixHT = "3490.00";
        if ($request->pub === "26") $pub = "region de Bordeaux, annonce en bas à droite et d'un format de (382px) x (440px)";
        if ($request->pub === "26") $prixHT = "3990.00";

        if ($request->pub === "203") $pub = "region du Médoc, annonce en haut, tout à gauche et d'un format de (191px) x (238px)";
        if ($request->pub === "203") $prixHT = "790.00";
        if ($request->pub === "204") $pub = "region du Médoc, annonce à gauche, le 1er au milieu et d'un format de (191px) x (438px)";
        if ($request->pub === "204") $prixHT = "790.00";
        if ($request->pub === "205") $pub = "region du Médoc, annonce à gauche, le 2nd au milieu et d'un format de (191px) x (238px)";
        if ($request->pub === "205") $prixHT = "790.00";
        if ($request->pub === "206") $pub = "region du Médoc, annonce en bas, tout à gauche et d'un format de (191px) x (238px)";
        if ($request->pub === "206") $prixHT = "790.00";
        if ($request->pub === "207") $pub = "region du Médoc, annonce en haut, tout à droite et d'un format de (991px) x (238px)";
        if ($request->pub === "207") $prixHT = "790.00";
        if ($request->pub === "208") $pub = "region du Médoc, annonce à droite, le 1er au milieu et d'un format de (191px) x (238px)";
        if ($request->pub === "208") $prixHT = "790.00";
        if ($request->pub === "209") $pub= "region du Médoc, annonce à droite, le 2nd au milieu et d'un format de (191px) x (238px)";
        if ($request->pub === "209") $prixHT = "790.00";
        if ($request->pub === "210") $pub = "region du Médoc, annonce en bas, tout à droite et d'un format de (191px) x (238px)";
        if ($request->pub === "210") $prixHT = "790.00";

        if ($request->pub === "211") $pub = "region de Margaux, annonce en haut, tout à gauche et d'un format de (191px) x (238px)";
        if ($request->pub === "211") $prixHT = "790.00";
        if ($request->pub === "212") $pub = "region de Margaux, annonce à gauche, le 1er au milieu et d'un format de (191px) x (438px)";
        if ($request->pub === "212") $prixHT = "790.00";
        if ($request->pub === "213") $pub = "region de Margaux, annonce à gauche, le 2nd au milieu et d'un format de (191px) x (238px)";
        if ($request->pub === "213") $prixHT = "790.00";
        if ($request->pub === "214") $pub = "region de Margaux, annonce en bas, tout à gauche et d'un format de (191px) x (238px)";
        if ($request->pub === "214") $prixHT = "790.00";
        if ($request->pub === "215") $pub = "region de Margaux, annonce en haut, tout à droite et d'un format de (991px) x (238px)";
        if ($request->pub === "215") $prixHT = "790.00";
        if ($request->pub === "216") $pub = "region de Margaux, annonce à droite, le 1er au milieu et d'un format de (191px) x (238px)";
        if ($request->pub === "216") $prixHT = "790.00";
        if ($request->pub === "217") $pub= "region de Margaux, annonce à droite, le 2nd au milieu et d'un format de (191px) x (238px)";
        if ($request->pub === "217") $prixHT = "790.00";
        if ($request->pub === "218") $pub = "region de Margaux, annonce en bas, tout à droite et d'un format de (191px) x (238px)";
        if ($request->pub === "218") $prixHT = "790.00";

        if ($request->pub === "219") $pub = "region de Moulis-Listrac, annonce en haut, tout à gauche et d'un format de (191px) x (238px)";
        if ($request->pub === "219") $prixHT = "790.00";
        if ($request->pub === "220") $pub = "region de Moulis-Listrac, annonce à gauche, le 1er au milieu et d'un format de (191px) x (438px)";
        if ($request->pub === "220") $prixHT = "790.00";
        if ($request->pub === "221") $pub = "region de Moulis-Listrac, annonce à gauche, le 2nd au milieu et d'un format de (211px) x (238px)";
        if ($request->pub === "221") $prixHT = "790.00";
        if ($request->pub === "222") $pub = "region de Moulis-Listrac, annonce en bas, tout à gauche et d'un format de (191px) x (238px)";
        if ($request->pub === "222") $prixHT = "790.00";
        if ($request->pub === "223") $pub = "region de Moulis-Listrac, annonce en haut, tout à droite et d'un format de (993px) x (238px)";
        if ($request->pub === "223") $prixHT = "790.00";
        if ($request->pub === "224") $pub = "region de Moulis-Listrac, annonce à droite, le 1er au milieu et d'un format de (191px) x (238px)";
        if ($request->pub === "224") $prixHT = "790.00";
        if ($request->pub === "225") $pub= "region de Moulis-Listrac, annonce à droite, le 2nd au milieu et d'un format de (191px) x (268px)";
        if ($request->pub === "225") $prixHT = "790.00";
        if ($request->pub === "226") $pub = "region de Moulis-Listrac, annonce en bas, tout à droite et d'un format de (191px) x (238px)";
        if ($request->pub === "226") $prixHT = "790.00";

        if ($request->pub === "227") $pub = "region de Pauillac, annonce en haut, tout à gauche et d'un format de (191px) x (238px)";
        if ($request->pub === "227") $prixHT = "790.00";
        if ($request->pub === "228") $pub = "region de Pauillac, annonce à gauche, le 1er au milieu et d'un format de (191px) x (438px)";
        if ($request->pub === "228") $prixHT = "790.00";
        if ($request->pub === "229") $pub = "region de Pauillac, annonce à gauche, le 2nd au milieu et d'un format de (291px) x (238px)";
        if ($request->pub === "229") $prixHT = "790.00";
        if ($request->pub === "230") $pub = "region de Pauillac, annonce en bas, tout à gauche et d'un format de (191px) x (238px)";
        if ($request->pub === "230") $prixHT = "790.00";
        if ($request->pub === "231") $pub = "region de Pauillac, annonce en haut, tout à droite et d'un format de (993px) x (238px)";
        if ($request->pub === "231") $prixHT = "790.00";
        if ($request->pub === "232") $pub = "region de Pauillac, annonce à droite, le 1er au milieu et d'un format de (191px) x (238px)";
        if ($request->pub === "232") $prixHT = "790.00";
        if ($request->pub === "233") $pub= "region de Pauillac, annonce à droite, le 2nd au milieu et d'un format de (191px) x (268px)";
        if ($request->pub === "233") $prixHT = "790.00";
        if ($request->pub === "234") $pub = "region de Pauillac, annonce en bas, tout à droite et d'un format de (191px) x (238px)";
        if ($request->pub === "234") $prixHT = "790.00";

        if ($request->pub === "235") $pub = "region de Saint-Estèphe, annonce en haut, tout à gauche et d'un format de (191px) x (238px)";
        if ($request->pub === "235") $prixHT = "790.00";
        if ($request->pub === "236") $pub = "region de Saint-Estèphe, annonce à gauche, le 1er au milieu et d'un format de (191px) x (438px)";
        if ($request->pub === "236") $prixHT = "790.00";
        if ($request->pub === "237") $pub = "region de Saint-Estèphe, annonce à gauche, le 2nd au milieu et d'un format de (371px) x (238px)";
        if ($request->pub === "237") $prixHT = "790.00";
        if ($request->pub === "238") $pub = "region de Saint-Estèphe, annonce en bas, tout à gauche et d'un format de (191px) x (238px)";
        if ($request->pub === "238") $prixHT = "790.00";
        if ($request->pub === "239") $pub = "region de Saint-Estèphe, annonce en haut, tout à droite et d'un format de (993px) x (238px)";
        if ($request->pub === "239") $prixHT = "790.00";
        if ($request->pub === "240") $pub = "region de Saint-Estèphe, annonce à droite, le 1er au milieu et d'un format de (191px) x (238px)";
        if ($request->pub === "240") $prixHT = "790.00";
        if ($request->pub === "241") $pub = "region de Saint-Estèphe, annonce à droite, le 2nd au milieu et d'un format de (191px) x (268px)";
        if ($request->pub === "241") $prixHT = "790.00";
        if ($request->pub === "242") $pub = "region de Saint-Estèphe, annonce en bas, tout à droite et d'un format de (191px) x (238px)";
        if ($request->pub === "242") $prixHT = "790.00";

        if ($request->pub === "243") $pub = "region de Saint-Julien, annonce en haut, tout à gauche et d'un format de (191px) x (238px)";
        if ($request->pub === "243") $prixHT = "790.00";
        if ($request->pub === "244") $pub = "region de Saint-Julien, annonce à gauche, le 1er au milieu et d'un format de (191px) x (438px)";
        if ($request->pub === "244") $prixHT = "790.00";
        if ($request->pub === "245") $pub = "region de Saint-Julien, annonce à gauche, le 2nd au milieu et d'un format de (451px) x (238px)";
        if ($request->pub === "245") $prixHT = "790.00";
        if ($request->pub === "246") $pub = "region de Saint-Julien, annonce en bas, tout à gauche et d'un format de (191px) x (246px)";
        if ($request->pub === "246") $prixHT = "790.00";
        if ($request->pub === "247") $pub = "region de Saint-Julien, annonce en haut, tout à droite et d'un format de (993px) x (238px)";
        if ($request->pub === "247") $prixHT = "790.00";
        if ($request->pub === "248") $pub = "region de Saint-Julien, annonce à droite, le 1er au milieu et d'un format de (191px) x (238px)";
        if ($request->pub === "248") $prixHT = "790.00";
        if ($request->pub === "249") $pub = "region de Saint-Julien, annonce à droite, le 2nd au milieu et d'un format de (991px) x (268px)";
        if ($request->pub === "249") $prixHT = "790.00";
        if ($request->pub === "250") $pub = "region de Saint-Julien, annonce en bas, tout à droite et d'un format de (191px) x (238px)";
        if ($request->pub === "250") $prixHT = "790.00";

        if ($request->pub === "267") $pub = "region de Pessac-Léognan, annonce en haut, tout à gauche et d'un format de (191px) x (238px)";
        if ($request->pub === "267") $prixHT = "790.00";
        if ($request->pub === "268") $pub = "region de Pessac-Léognan, annonce à gauche, le 1er au milieu et d'un format de (191px) x (438px)";
        if ($request->pub === "268") $prixHT = "790.00";
        if ($request->pub === "269") $pub = "region de Pessac-Léognan, annonce à gauche, le 2nd au milieu et d'un format de (691px) x (238px)";
        if ($request->pub === "269") $prixHT = "790.00";
        if ($request->pub === "270") $pub = "region de Pessac-Léognan, annonce en bas, tout à gauche et d'un format de (191px) x (270px)";
        if ($request->pub === "270") $prixHT = "790.00";
        if ($request->pub === "271") $pub = "region de Pessac-Léognan, annonce en haut, tout à droite et d'un format de (993px) x (238px)";
        if ($request->pub === "271") $prixHT = "790.00";
        if ($request->pub === "272") $pub = "region de Pessac-Léognan, annonce à droite, le 1er au milieu et d'un format de (191px) x (238px)";
        if ($request->pub === "272") $prixHT = "790.00";
        if ($request->pub === "273") $pub = "region de Pessac-Léognan, annonce à droite, le 2nd au milieu et d'un format de (991px) x (268px)";
        if ($request->pub === "273") $prixHT = "790.00";
        if ($request->pub === "274") $pub = "region de Pessac-Léognan, annonce en bas, tout à droite et d'un format de (191px) x (238px)";
        if ($request->pub === "274") $prixHT = "790.00";

        if ($request->pub === "275") $pub = "region de Pomerol, annonce en haut, tout à gauche et d'un format de (191px) x (238px)";
        if ($request->pub === "275") $prixHT = "790.00";
        if ($request->pub === "276") $pub = "region de Pomerol, annonce à gauche, le 1er au milieu et d'un format de (191px) x (438px)";
        if ($request->pub === "276") $prixHT = "790.00";
        if ($request->pub === "277") $pub = "region de Pomerol, annonce à gauche, le 2nd au milieu et d'un format de (771px) x (238px)";
        if ($request->pub === "277") $prixHT = "790.00";
        if ($request->pub === "278") $pub = "region de Pomerol, annonce en bas, tout à gauche et d'un format de (191px) x (278px)";
        if ($request->pub === "278") $prixHT = "790.00";
        if ($request->pub === "279") $pub = "region de Pomerol, annonce en haut, tout à droite et d'un format de (993px) x (238px)";
        if ($request->pub === "279") $prixHT = "790.00";
        if ($request->pub === "280") $pub = "region de Pomerol, annonce à droite, le 1er au milieu et d'un format de (191px) x (238px)";
        if ($request->pub === "280") $prixHT = "790.00";
        if ($request->pub === "281") $pub = "region de Pomerol, annonce à droite, le 2nd au milieu et d'un format de (991px) x (268px)";
        if ($request->pub === "281") $prixHT = "790.00";
        if ($request->pub === "282") $pub = "region de Pomerol, annonce en bas, tout à droite et d'un format de (191px) x (238px)";
        if ($request->pub === "282") $prixHT = "790.00";
        
        if ($request->pub === "283") $pub = "region de Saint-Émilion, annonce en haut, tout à gauche et d'un format de (191px) x (238px)";
        if ($request->pub === "283") $prixHT = "790.00";
        if ($request->pub === "284") $pub = "region de Saint-Émilion, annonce à gauche, le 1er au milieu et d'un format de (191px) x (438px)";
        if ($request->pub === "284") $prixHT = "790.00";
        if ($request->pub === "285") $pub = "region de Saint-Émilion, annonce à gauche, le 2nd au milieu et d'un format de (861px) x (238px)";
        if ($request->pub === "285") $prixHT = "790.00";
        if ($request->pub === "286") $pub = "region de Saint-Émilion, annonce en bas, tout à gauche et d'un format de (191px) x (287px)";
        if ($request->pub === "286") $prixHT = "790.00";
        if ($request->pub === "287") $pub = "region de Saint-Émilion, annonce en haut, tout à droite et d'un format de (993px) x (238px)";
        if ($request->pub === "287") $prixHT = "790.00";
        if ($request->pub === "288") $pub = "region de Saint-Émilion, annonce à droite, le 1er au milieu et d'un format de (181px) x (238px)";
        if ($request->pub === "288") $prixHT = "790.00";
        if ($request->pub === "289") $pub = "region de Saint-Émilion, annonce à droite, le 2nd au milieu et d'un format de (991px) x (268px)";
        if ($request->pub === "289") $prixHT = "790.00";
        if ($request->pub === "290") $pub = "region de Saint-Émilion, annonce en bas, tout à droite et d'un format de (191px) x (238px)";
        if ($request->pub === "290") $prixHT = "790.00";

        if ($request->pub === "291") $pub = "region de Sauternes, annonce en haut, tout à gauche et d'un format de (191px) x (231px)";
        if ($request->pub === "291") $prixHT = "790.00";
        if ($request->pub === "292") $pub = "region de Sauternes, annonce à gauche, le 1er au milieu et d'un format de (191px) x (438px)";
        if ($request->pub === "292") $prixHT = "790.00";
        if ($request->pub === "293") $pub = "region de Sauternes, annonce à gauche, le 2nd au milieu et d'un format de (861px) x (238px)";
        if ($request->pub === "293") $prixHT = "790.00";
        if ($request->pub === "294") $pub = "region de Sauternes, annonce en bas, tout à gauche et d'un format de (191px) x (287px)";
        if ($request->pub === "294") $prixHT = "790.00";
        if ($request->pub === "295") $pub = "region de Sauternes, annonce en haut, tout à droite et d'un format de (993px) x (238px)";
        if ($request->pub === "295") $prixHT = "790.00";
        if ($request->pub === "296") $pub = "region de Sauternes, annonce à droite, le 1er au milieu et d'un format de (181px) x (238px)";
        if ($request->pub === "296") $prixHT = "790.00";
        if ($request->pub === "297") $pub = "region de Sauternes, annonce à droite, le 2nd au milieu et d'un format de (991px) x (268px)";
        if ($request->pub === "297") $prixHT = "790.00";
        if ($request->pub === "298") $pub = "region de Sauternes, annonce en bas, tout à droite et d'un format de (191px) x (238px)";
        if ($request->pub === "298") $prixHT = "790.00";

        if ($request->pub === "11") $pub = "region de Bourgogne, annonce en haut, tout à gauche et d'un format de (191px) x (238px)";
        if ($request->pub === "11") $prixHT = "2990.00";
        if ($request->pub === "12") $pub = "region de Bourgogne, annonce en haut, 2ème à gauche et d'un format de (191px) x (238px)";
        if ($request->pub === "12") $prixHT = "2990.00";
        if ($request->pub === "13") $pub = "region de Bourgogne, annonce au milieu, tout à gauche et d'un format de (191px) x (238px)";
        if ($request->pub === "13") $prixHT = "2990.00";
        if ($request->pub === "14") $pub = "region de Bourgogne, annonce au milieu, 2ème à gauche et d'un format de (191px) x (238px)";
        if ($request->pub === "14") $prixHT = "2990.00";
        if ($request->pub === "15") $pub = "region de Bourgogne, annonce en bas à gauche et d'un format de (382px) x (440px)";
        if ($request->pub === "15") $prixHT = "3990.00";
        if ($request->pub === "16") $pub = "region de Bourgogne, annonce en haut à droite et d'un format de (382px) x (238px)";
        if ($request->pub === "16") $prixHT = "3490.00";
        if ($request->pub === "17") $pub = "region de Bourgogne, annonce au milieu à droite et d'un format de (382px) x (238px)";
        if ($request->pub === "17") $prixHT = "3490.00";
        if ($request->pub === "18") $pub = "region de Bourgogne, annonce en bas à droite et d'un format de (382px) x (440px)";
        if ($request->pub === "18") $prixHT = "3990.00";

        if ($request->pub === "67") $pub = "region de Chablis, annonce en haut, tout à gauche et d'un format de (191px) x (238px)";
        if ($request->pub === "67") $prixHT = "990.00";
        if ($request->pub === "68") $pub = "region de Chablis, annonce en haut, 2ème à gauche et d'un format de (191px) x (238px)";
        if ($request->pub === "68") $prixHT = "990.00";
        if ($request->pub === "69") $pub = "region de Chablis, annonce au milieu, tout à gauche et d'un format de (191px) x (238px)";
        if ($request->pub === "69") $prixHT = "990.00";
        if ($request->pub === "70") $pub = "region de Chablis, annonce au milieu, 2ème à gauche et d'un format de (191px) x (238px)";
        if ($request->pub === "70") $prixHT = "990.00";
        if ($request->pub === "71") $pub = "region de Chablis, annonce en bas à gauche et d'un format de (382px) x (440px)";
        if ($request->pub === "71") $prixHT = "2990.00";
        if ($request->pub === "72") $pub = "region de Chablis, annonce en haut à droite et d'un format de (382px) x (238px)";
        if ($request->pub === "72") $prixHT = "1990.00";
        if ($request->pub === "73") $pub = "region de Chablis, annonce au milieu à droite et d'un format de (382px) x (238px)";
        if ($request->pub === "73") $prixHT = "1990.00";
        if ($request->pub === "74") $pub = "region de Chablis, annonce en bas à droite et d'un format de (382px) x (440px)";
        if ($request->pub === "74") $prixHT = "2990.00";

        if ($request->pub === "99") $pub = "region des Grands Crus de Chablis, annonce en haut, tout à gauche et d'un format de (191px) x (231px)";
        if ($request->pub === "99") $prixHT = "790.00";
        if ($request->pub === "100") $pub = "region des Grands Crus de Chablis, annonce à gauche, le 1er au milieu et d'un format de (191px) x (438px)";
        if ($request->pub === "100") $prixHT = "790.00";
        if ($request->pub === "101") $pub = "region des Grands Crus de Chablis, annonce à gauche, le 2nd au milieu et d'un format de (861px) x (238px)";
        if ($request->pub === "101") $prixHT = "790.00";
        if ($request->pub === "102") $pub = "region des Grands Crus de Chablis, annonce en bas, tout à gauche et d'un format de (191px) x (287px)";
        if ($request->pub === "102") $prixHT = "790.00";
        if ($request->pub === "103") $pub = "region des Grands Crus de Chablis, annonce en haut, tout à droite et d'un format de (993px) x (238px)";
        if ($request->pub === "103") $prixHT = "790.00";
        if ($request->pub === "104") $pub = "region des Grands Crus de Chablis, annonce à droite, le 1er au milieu et d'un format de (181px) x (238px)";
        if ($request->pub === "104") $prixHT = "790.00";
        if ($request->pub === "105") $pub = "region des Grands Crus de Chablis, annonce à droite, le 2nd au milieu et d'un format de (991px) x (268px)";
        if ($request->pub === "105") $prixHT = "790.00";
        if ($request->pub === "106") $pub = "region des Grands Crus de Chablis, annonce en bas, tout à droite et d'un format de (191px) x (238px)";
        if ($request->pub === "106") $prixHT = "790.00";

        if ($request->pub === "83") $pub = "region des Côtes de Nuits, annonce en haut, tout à gauche et d'un format de (191px) x (238px)";
        if ($request->pub === "83") $prixHT = "990.00";
        if ($request->pub === "84") $pub = "region des Côtes de Nuits, annonce en haut, 2ème à gauche et d'un format de (191px) x (238px)";
        if ($request->pub === "84") $prixHT = "990.00";
        if ($request->pub === "85") $pub = "region des Côtes de Nuits, annonce au milieu, tout à gauche et d'un format de (191px) x (238px)";
        if ($request->pub === "85") $prixHT = "990.00";
        if ($request->pub === "86") $pub = "region des Côtes de Nuits, annonce au milieu, 2ème à gauche et d'un format de (191px) x (238px)";
        if ($request->pub === "86") $prixHT = "990.00";
        if ($request->pub === "87") $pub = "region des Côtes de Nuits, annonce en bas à gauche et d'un format de (382px) x (440px)";
        if ($request->pub === "87") $prixHT = "2990.00";
        if ($request->pub === "88") $pub = "region des Côtes de Nuits, annonce en haut à droite et d'un format de (382px) x (238px)";
        if ($request->pub === "88") $prixHT = "1990.00";
        if ($request->pub === "89") $pub = "region des Côtes de Nuits, annonce au milieu à droite et d'un format de (382px) x (238px)";
        if ($request->pub === "89") $prixHT = "1990.00";
        if ($request->pub === "90") $pub = "region des Côtes de Nuits, annonce en bas à droite et d'un format de (382px) x (440px)";
        if ($request->pub === "90") $prixHT = "2990.00";

        if ($request->pub === "123") $pub = "region de Chambolle-Musigny et Morey-Saint-Denis, annonce en haut, tout à gauche et d'un format de (191px) x (231px)";
        if ($request->pub === "123") $prixHT = "790.00";
        if ($request->pub === "124") $pub = "region de Chambolle-Musigny et Morey-Saint-Denis, annonce à gauche, le 1er au milieu et d'un format de (191px) x (438px)";
        if ($request->pub === "124") $prixHT = "790.00";
        if ($request->pub === "125") $pub = "region de Chambolle-Musigny et Morey-Saint-Denis, annonce à gauche, le 2nd au milieu et d'un format de (861px) x (238px)";
        if ($request->pub === "125") $prixHT = "790.00";
        if ($request->pub === "126") $pub = "region de Chambolle-Musigny et Morey-Saint-Denis, annonce en bas, tout à gauche et d'un format de (191px) x (287px)";
        if ($request->pub === "126") $prixHT = "790.00";
        if ($request->pub === "127") $pub = "region de Chambolle-Musigny et Morey-Saint-Denis, annonce en haut, tout à droite et d'un format de (993px) x (238px)";
        if ($request->pub === "127") $prixHT = "790.00";
        if ($request->pub === "128") $pub = "region de Chambolle-Musigny et Morey-Saint-Denis, annonce à droite, le 1er au milieu et d'un format de (181px) x (238px)";
        if ($request->pub === "128") $prixHT = "790.00";
        if ($request->pub === "129") $pub = "region de Chambolle-Musigny et Morey-Saint-Denis, annonce à droite, le 2nd au milieu et d'un format de (991px) x (268px)";
        if ($request->pub === "129") $prixHT = "790.00";
        if ($request->pub === "130") $pub = "region de Chambolle-Musigny et Morey-Saint-Denis, annonce en bas, tout à droite et d'un format de (191px) x (238px)";
        if ($request->pub === "130") $prixHT = "790.00";

        if ($request->pub === "115") $pub = "region de Gevrey-Chambertin, annonce en haut, tout à gauche et d'un format de (191px) x (231px)";
        if ($request->pub === "115") $prixHT = "790.00";
        if ($request->pub === "116") $pub = "region de Gevrey-Chambertin, annonce à gauche, le 1er au milieu et d'un format de (191px) x (438px)";
        if ($request->pub === "116") $prixHT = "790.00";
        if ($request->pub === "117") $pub = "region de Gevrey-Chambertin, annonce à gauche, le 2nd au milieu et d'un format de (861px) x (238px)";
        if ($request->pub === "117") $prixHT = "790.00";
        if ($request->pub === "118") $pub = "region de Gevrey-Chambertin, annonce en bas, tout à gauche et d'un format de (191px) x (287px)";
        if ($request->pub === "118") $prixHT = "790.00";
        if ($request->pub === "119") $pub = "region de Gevrey-Chambertin, annonce en haut, tout à droite et d'un format de (993px) x (238px)";
        if ($request->pub === "119") $prixHT = "790.00";
        if ($request->pub === "120") $pub = "region de Gevrey-Chambertin, annonce à droite, le 1er au milieu et d'un format de (101px) x (238px)";
        if ($request->pub === "120") $prixHT = "790.00";
        if ($request->pub === "121") $pub = "region de Gevrey-Chambertin, annonce à droite, le 2nd au milieu et d'un format de (991px) x (268px)";
        if ($request->pub === "121") $prixHT = "790.00";
        if ($request->pub === "122") $pub = "region de Gevrey-Chambertin, annonce en bas, tout à droite et d'un format de (191px) x (238px)";
        if ($request->pub === "122") $prixHT = "790.00";

        if ($request->pub === "147") $pub = "region de Nuits-Saint-Georges, annonce en haut, tout à gauche et d'un format de (191px) x (231px)";
        if ($request->pub === "147") $prixHT = "790.00";
        if ($request->pub === "148") $pub = "region de Nuits-Saint-Georges, annonce à gauche, le 1er au milieu et d'un format de (191px) x (438px)";
        if ($request->pub === "148") $prixHT = "790.00";
        if ($request->pub === "149") $pub = "region de Nuits-Saint-Georges, annonce à gauche, le 2nd au milieu et d'un format de (861px) x (238px)";
        if ($request->pub === "149") $prixHT = "790.00";
        if ($request->pub === "150") $pub = "region de Nuits-Saint-Georges, annonce en bas, tout à gauche et d'un format de (191px) x (287px)";
        if ($request->pub === "150") $prixHT = "790.00";
        if ($request->pub === "151") $pub = "region de Nuits-Saint-Georges, annonce en haut, tout à droite et d'un format de (993px) x (238px)";
        if ($request->pub === "151") $prixHT = "790.00";
        if ($request->pub === "152") $pub = "region de Nuits-Saint-Georges, annonce à droite, le 1er au milieu et d'un format de (101px) x (238px)";
        if ($request->pub === "152") $prixHT = "790.00";
        if ($request->pub === "153") $pub = "region de Nuits-Saint-Georges, annonce à droite, le 2nd au milieu et d'un format de (991px) x (268px)";
        if ($request->pub === "153") $prixHT = "790.00";
        if ($request->pub === "154") $pub = "region de Nuits-Saint-Georges, annonce en bas, tout à droite et d'un format de (191px) x (238px)";
        if ($request->pub === "154") $prixHT = "790.00";

        if ($request->pub === "139") $pub = "region de Vosne-Romanée, annonce en haut, tout à gauche et d'un format de (191px) x (231px)";
        if ($request->pub === "139") $prixHT = "790.00";
        if ($request->pub === "140") $pub = "region de Vosne-Romanée, annonce à gauche, le 1er au milieu et d'un format de (191px) x (430px)";
        if ($request->pub === "140") $prixHT = "790.00";
        if ($request->pub === "141") $pub = "region de Vosne-Romanée, annonce à gauche, le 2nd au milieu et d'un format de (861px) x (238px)";
        if ($request->pub === "141") $prixHT = "790.00";
        if ($request->pub === "142") $pub = "region de Vosne-Romanée, annonce en bas, tout à gauche et d'un format de (191px) x (287px)";
        if ($request->pub === "142") $prixHT = "790.00";
        if ($request->pub === "143") $pub = "region de Vosne-Romanée, annonce en haut, tout à droite et d'un format de (993px) x (238px)";
        if ($request->pub === "143") $prixHT = "790.00";
        if ($request->pub === "144") $pub = "region de Vosne-Romanée, annonce à droite, le 1er au milieu et d'un format de (101px) x (238px)";
        if ($request->pub === "144") $prixHT = "790.00";
        if ($request->pub === "145") $pub = "region de Vosne-Romanée, annonce à droite, le 2nd au milieu et d'un format de (991px) x (268px)";
        if ($request->pub === "145") $prixHT = "790.00";
        if ($request->pub === "146") $pub = "region de Vosne-Romanée, annonce en bas, tout à droite et d'un format de (191px) x (238px)";
        if ($request->pub === "146") $prixHT = "790.00";

        if ($request->pub === "131") $pub = "region de Vougeot, annonce en haut, tout à gauche et d'un format de (191px) x (231px)";
        if ($request->pub === "131") $prixHT = "790.00";
        if ($request->pub === "132") $pub = "region de Vougeot, annonce à gauche, le 1er au milieu et d'un format de (191px) x (430px)";
        if ($request->pub === "132") $prixHT = "790.00";
        if ($request->pub === "133") $pub = "region de Vougeot, annonce à gauche, le 2nd au milieu et d'un format de (861px) x (238px)";
        if ($request->pub === "133") $prixHT = "790.00";
        if ($request->pub === "134") $pub = "region de Vougeot, annonce en bas, tout à gauche et d'un format de (191px) x (287px)";
        if ($request->pub === "134") $prixHT = "790.00";
        if ($request->pub === "135") $pub = "region de Vougeot, annonce en haut, tout à droite et d'un format de (993px) x (238px)";
        if ($request->pub === "135") $prixHT = "790.00";
        if ($request->pub === "136") $pub = "region de Vougeot, annonce à droite, le 1er au milieu et d'un format de (101px) x (238px)";
        if ($request->pub === "136") $prixHT = "790.00";
        if ($request->pub === "137") $pub = "region de Vougeot, annonce à droite, le 2nd au milieu et d'un format de (991px) x (268px)";
        if ($request->pub === "137") $prixHT = "790.00";
        if ($request->pub === "138") $pub = "region de Vougeot, annonce en bas, tout à droite et d'un format de (191px) x (238px)";
        if ($request->pub === "138") $prixHT = "790.00";

        if ($request->pub === "59") $pub = "region de Beaune et Côtes de Beaune, annonce en haut, tout à gauche et d'un format de (191px) x (238px)";
        if ($request->pub === "59") $prixHT = "990.00";
        if ($request->pub === "60") $pub = "region de Beaune et Côtes de Beaune, annonce en haut, 2ème à gauche et d'un format de (191px) x (238px)";
        if ($request->pub === "60") $prixHT = "990.00";
        if ($request->pub === "61") $pub = "region de Beaune et Côtes de Beaune, annonce au milieu, tout à gauche et d'un format de (191px) x (238px)";
        if ($request->pub === "61") $prixHT = "990.00";
        if ($request->pub === "62") $pub = "region de Beaune et Côtes de Beaune, annonce au milieu, 2ème à gauche et d'un format de (191px) x (238px)";
        if ($request->pub === "62") $prixHT = "990.00";
        if ($request->pub === "63") $pub = "region de Beaune et Côtes de Beaune, annonce en bas à gauche et d'un format de (382px) x (440px)";
        if ($request->pub === "63") $prixHT = "2990.00";
        if ($request->pub === "64") $pub = "region de Beaune et Côtes de Beaune, annonce en haut à droite et d'un format de (382px) x (238px)";
        if ($request->pub === "64") $prixHT = "1990.00";
        if ($request->pub === "65") $pub = "region de Beaune et Côtes de Beaune, annonce au milieu à droite et d'un format de (382px) x (238px)";
        if ($request->pub === "65") $prixHT = "1990.00";
        if ($request->pub === "66") $pub = "region de Beaune et Côtes de Beaune, annonce en bas à droite et d'un format de (382px) x (440px)";
        if ($request->pub === "66") $prixHT = "2990.00";

        if ($request->pub === "163") $pub = "region des 1ers crus et Grands Crus de Beaune, annonce en haut, tout à gauche et d'un format de (191px) x (231px)";
        if ($request->pub === "163") $prixHT = "790.00";
        if ($request->pub === "164") $pub = "region des 1ers crus et Grands Crus de Beaune, annonce à gauche, le 1er au milieu et d'un format de (191px) x (430px)";
        if ($request->pub === "164") $prixHT = "790.00";
        if ($request->pub === "165") $pub = "region des 1ers crus et Grands Crus de Beaune, annonce à gauche, le 2nd au milieu et d'un format de (861px) x (238px)";
        if ($request->pub === "165") $prixHT = "790.00";
        if ($request->pub === "166") $pub = "region des 1ers crus et Grands Crus de Beaune, annonce en bas, tout à gauche et d'un format de (191px) x (287px)";
        if ($request->pub === "166") $prixHT = "790.00";
        if ($request->pub === "167") $pub = "region des 1ers crus et Grands Crus de Beaune, annonce en haut, tout à droite et d'un format de (993px) x (238px)";
        if ($request->pub === "167") $prixHT = "790.00";
        if ($request->pub === "168") $pub = "region des 1ers crus et Grands Crus de Beaune, annonce à droite, le 1er au milieu et d'un format de (101px) x (238px)";
        if ($request->pub === "168") $prixHT = "790.00";
        if ($request->pub === "169") $pub = "region des 1ers crus et Grands Crus de Beaune, annonce à droite, le 2nd au milieu et d'un format de (991px) x (268px)";
        if ($request->pub === "169") $prixHT = "790.00";
        if ($request->pub === "170") $pub = "region des 1ers crus et Grands Crus de Beaune, annonce en bas, tout à droite et d'un format de (191px) x (238px)";
        if ($request->pub === "170") $prixHT = "790.00";

        if ($request->pub === "155") $pub = "region d'Aloxe-Corton, annonce en haut, tout à gauche et d'un format de (191px) x (231px)";
        if ($request->pub === "155") $prixHT = "790.00";
        if ($request->pub === "156") $pub = "region d'Aloxe-Corton, annonce à gauche, le 1er au milieu et d'un format de (191px) x (430px)";
        if ($request->pub === "156") $prixHT = "790.00";
        if ($request->pub === "157") $pub = "region d'Aloxe-Corton, annonce à gauche, le 2nd au milieu et d'un format de (861px) x (238px)";
        if ($request->pub === "157") $prixHT = "790.00";
        if ($request->pub === "158") $pub = "region d'Aloxe-Corton, annonce en bas, tout à gauche et d'un format de (191px) x (287px)";
        if ($request->pub === "158") $prixHT = "790.00";
        if ($request->pub === "159") $pub = "region d'Aloxe-Corton, annonce en haut, tout à droite et d'un format de (993px) x (238px)";
        if ($request->pub === "159") $prixHT = "790.00";
        if ($request->pub === "160") $pub = "region d'Aloxe-Corton, annonce à droite, le 1er au milieu et d'un format de (101px) x (238px)";
        if ($request->pub === "160") $prixHT = "790.00";
        if ($request->pub === "161") $pub = "region d'Aloxe-Corton, annonce à droite, le 2nd au milieu et d'un format de (991px) x (268px)";
        if ($request->pub === "161") $prixHT = "790.00";
        if ($request->pub === "162") $pub = "region d'Aloxe-Corton, annonce en bas, tout à droite et d'un format de (191px) x (238px)";
        if ($request->pub === "162") $prixHT = "790.00";

        if ($request->pub === "195") $pub = "region de Chassagne-Montrachet, annonce en haut, tout à gauche et d'un format de (191px) x (231px)";
        if ($request->pub === "195") $prixHT = "790.00";
        if ($request->pub === "196") $pub = "region de Chassagne-Montrachet, annonce à gauche, le 1er au milieu et d'un format de (191px) x (430px)";
        if ($request->pub === "196") $prixHT = "790.00";
        if ($request->pub === "197") $pub = "region de Chassagne-Montrachet, annonce à gauche, le 2nd au milieu et d'un format de (861px) x (238px)";
        if ($request->pub === "197") $prixHT = "790.00";
        if ($request->pub === "198") $pub = "region de Chassagne-Montrachet, annonce en bas, tout à gauche et d'un format de (191px) x (287px)";
        if ($request->pub === "198") $prixHT = "790.00";
        if ($request->pub === "199") $pub = "region de Chassagne-Montrachet, annonce en haut, tout à droite et d'un format de (993px) x (238px)";
        if ($request->pub === "199") $prixHT = "790.00";
        if ($request->pub === "200") $pub = "region de Chassagne-Montrachet, annonce à droite, le 1er au milieu et d'un format de (101px) x (238px)";
        if ($request->pub === "200") $prixHT = "790.00";
        if ($request->pub === "201") $pub = "region de Chassagne-Montrachet, annonce à droite, le 2nd au milieu et d'un format de (991px) x (268px)";
        if ($request->pub === "201") $prixHT = "790.00";
        if ($request->pub === "202") $pub = "region de Chassagne-Montrachet, annonce en bas, tout à droite et d'un format de (191px) x (238px)";
        if ($request->pub === "202") $prixHT = "790.00";

        if ($request->pub === "171") $pub = "region de Pommard, annonce en haut, tout à gauche et d'un format de (191px) x (231px)";
        if ($request->pub === "171") $prixHT = "790.00";
        if ($request->pub === "172") $pub = "region de Pommard, annonce à gauche, le 1er au milieu et d'un format de (191px) x (430px)";
        if ($request->pub === "172") $prixHT = "790.00";
        if ($request->pub === "173") $pub = "region de Pommard, annonce à gauche, le 2nd au milieu et d'un format de (861px) x (238px)";
        if ($request->pub === "173") $prixHT = "790.00";
        if ($request->pub === "174") $pub = "region de Pommard, annonce en bas, tout à gauche et d'un format de (191px) x (287px)";
        if ($request->pub === "174") $prixHT = "790.00";
        if ($request->pub === "175") $pub = "region de Pommard, annonce en haut, tout à droite et d'un format de (993px) x (238px)";
        if ($request->pub === "175") $prixHT = "790.00";
        if ($request->pub === "176") $pub = "region de Pommard, annonce à droite, le 1er au milieu et d'un format de (101px) x (238px)";
        if ($request->pub === "176") $prixHT = "790.00";
        if ($request->pub === "177") $pub = "region de Pommard, annonce à droite, le 2nd au milieu et d'un format de (991px) x (268px)";
        if ($request->pub === "177") $prixHT = "790.00";
        if ($request->pub === "178") $pub = "region de Pommard, annonce en bas, tout à droite et d'un format de (191px) x (238px)";
        if ($request->pub === "178") $prixHT = "790.00";

        if ($request->pub === "187") $pub = "region de Puligny-Montrachet, annonce en haut, tout à gauche et d'un format de (191px) x (231px)";
        if ($request->pub === "187") $prixHT = "790.00";
        if ($request->pub === "188") $pub = "region de Puligny-Montrachet, annonce à gauche, le 1er au milieu et d'un format de (191px) x (430px)";
        if ($request->pub === "188") $prixHT = "790.00";
        if ($request->pub === "189") $pub = "region de Puligny-Montrachet, annonce à gauche, le 2nd au milieu et d'un format de (861px) x (238px)";
        if ($request->pub === "189") $prixHT = "790.00";
        if ($request->pub === "190") $pub = "region de Puligny-Montrachet, annonce en bas, tout à gauche et d'un format de (191px) x (287px)";
        if ($request->pub === "190") $prixHT = "790.00";
        if ($request->pub === "191") $pub = "region de Puligny-Montrachet, annonce en haut, tout à droite et d'un format de (993px) x (238px)";
        if ($request->pub === "191") $prixHT = "790.00";
        if ($request->pub === "192") $pub = "region de Puligny-Montrachet, annonce à droite, le 1er au milieu et d'un format de (101px) x (238px)";
        if ($request->pub === "192") $prixHT = "790.00";
        if ($request->pub === "193") $pub = "region de Puligny-Montrachet, annonce à droite, le 2nd au milieu et d'un format de (991px) x (268px)";
        if ($request->pub === "193") $prixHT = "790.00";
        if ($request->pub === "194") $pub = "region de Puligny-Montrachet, annonce en bas, tout à droite et d'un format de (191px) x (238px)";
        if ($request->pub === "194") $prixHT = "790.00";

        if ($request->pub === "179") $pub = "region de Volnay, annonce en haut, tout à gauche et d'un format de (191px) x (231px)";
        if ($request->pub === "179") $prixHT = "790.0079";
        if ($request->pub === "180") $pub = "region de Volnay, annonce à gauche, le 1er au milieu et d'un format de (191px) x (430px)";
        if ($request->pub === "180") $prixHT = "790.00";
        if ($request->pub === "181") $pub = "region de Volnay, annonce à gauche, le 2nd au milieu et d'un format de (861px) x (238px)";
        if ($request->pub === "181") $prixHT = "790.00";
        if ($request->pub === "182") $pub = "region de Volnay, annonce en bas, tout à gauche et d'un format de (191px) x (287px)";
        if ($request->pub === "182") $prixHT = "790.00";
        if ($request->pub === "183") $pub = "region de Volnay, annonce en haut, tout à droite et d'un format de (993px) x (238px)";
        if ($request->pub === "183") $prixHT = "790.00";
        if ($request->pub === "184") $pub = "region de Volnay, annonce à droite, le 1er au milieu et d'un format de (101px) x (238px)";
        if ($request->pub === "184") $prixHT = "790.00";
        if ($request->pub === "185") $pub = "region de Volnay, annonce à droite, le 2nd au milieu et d'un format de (991px) x (268px)";
        if ($request->pub === "185") $prixHT = "790.00";
        if ($request->pub === "186") $pub = "region de Volnay, annonce en bas, tout à droite et d'un format de (191px) x (238px)";
        if ($request->pub === "186") $prixHT = "790.00";

        if ($request->pub === "91") $pub = "region de la Côte Chalonnaise et Couchoise, annonce en haut, tout à gauche et d'un format de (191px) x (231px)";
        if ($request->pub === "91") $prixHT = "790.00";
        if ($request->pub === "92") $pub = "region de la Côte Chalonnaise et Couchoise, annonce à gauche, le 1er au milieu et d'un format de (191px) x (430px)";
        if ($request->pub === "92") $prixHT = "790.00";
        if ($request->pub === "93") $pub = "region de la Côte Chalonnaise et Couchoise, annonce à gauche, le 2nd au milieu et d'un format de (861px) x (238px)";
        if ($request->pub === "93") $prixHT = "790.00";
        if ($request->pub === "94") $pub = "region de la Côte Chalonnaise et Couchoise, annonce en bas, tout à gauche et d'un format de (191px) x (287px)";
        if ($request->pub === "94") $prixHT = "790.00";
        if ($request->pub === "95") $pub = "region de la Côte Chalonnaise et Couchoise, annonce en haut, tout à droite et d'un format de (993px) x (238px)";
        if ($request->pub === "95") $prixHT = "790.00";
        if ($request->pub === "96") $pub = "region de la Côte Chalonnaise et Couchoise, annonce à droite, le 1er au milieu et d'un format de (101px) x (238px)";
        if ($request->pub === "96") $prixHT = "790.00";
        if ($request->pub === "97") $pub = "region de la Côte Chalonnaise et Couchoise, annonce à droite, le 2nd au milieu et d'un format de (991px) x (268px)";
        if ($request->pub === "97") $prixHT = "790.00";
        if ($request->pub === "98") $pub = "region de la Côte Chalonnaise et Couchoise, annonce en bas, tout à droite et d'un format de (191px) x (238px)";
        if ($request->pub === "98") $prixHT = "790.00";

        if ($request->pub === "107") $pub = "region de Mâcon, annonce en haut, tout à gauche et d'un format de (191px) x (231px)";
        if ($request->pub === "107") $prixHT = "790.00";
        if ($request->pub === "108") $pub = "region de Mâcon, annonce à gauche, le 1er au milieu et d'un format de (191px) x (430px)";
        if ($request->pub === "108") $prixHT = "790.00";
        if ($request->pub === "109") $pub = "region de Mâcon, annonce à gauche, le 2nd au milieu et d'un format de (861px) x (238px)";
        if ($request->pub === "109") $prixHT = "790.00";
        if ($request->pub === "110") $pub = "region de Mâcon, annonce en bas, tout à gauche et d'un format de (191px) x (287px)";
        if ($request->pub === "110") $prixHT = "790.00";
        if ($request->pub === "111") $pub = "region de Mâcon, annonce en haut, tout à droite et d'un format de (993px) x (238px)";
        if ($request->pub === "111") $prixHT = "790.00";
        if ($request->pub === "112") $pub = "region de Mâcon, annonce à droite, le 1er au milieu et d'un format de (101px) x (238px)";
        if ($request->pub === "112") $prixHT = "790.00";
        if ($request->pub === "113") $pub = "region de Mâcon, annonce à droite, le 2nd au milieu et d'un format de (991px) x (268px)";
        if ($request->pub === "113") $prixHT = "790.00";
        if ($request->pub === "114") $pub = "region de Mâcon, annonce en bas, tout à droite et d'un format de (191px) x (238px)";
        if ($request->pub === "114") $prixHT = "790.00";

        if ($request->pub === "251") $pub = "region de Bugey, annonce en haut, tout à gauche et d'un format de (191px) x (231px)";
        if ($request->pub === "251") $prixHT = "790.00";
        if ($request->pub === "252") $pub = "region de Bugey, annonce à gauche, le 1er au milieu et d'un format de (191px) x (430px)";
        if ($request->pub === "252") $prixHT = "790.00";
        if ($request->pub === "253") $pub = "region de Bugey, annonce à gauche, le 2nd au milieu et d'un format de (861px) x (238px)";
        if ($request->pub === "253") $prixHT = "790.00";
        if ($request->pub === "254") $pub = "region de Bugey, annonce en bas, tout à gauche et d'un format de (191px) x (287px)";
        if ($request->pub === "254") $prixHT = "790.00";
        if ($request->pub === "255") $pub = "region de Bugey, annonce en haut, tout à droite et d'un format de (993px) x (238px)";
        if ($request->pub === "255") $prixHT = "790.00";
        if ($request->pub === "256") $pub = "region de Bugey, annonce à droite, le 1er au milieu et d'un format de (101px) x (238px)";
        if ($request->pub === "256") $prixHT = "790.00";
        if ($request->pub === "257") $pub = "region de Bugey, annonce à droite, le 2nd au milieu et d'un format de (991px) x (268px)";
        if ($request->pub === "257") $prixHT = "790.00";
        if ($request->pub === "258") $pub = "region de Bugey, annonce en bas, tout à droite et d'un format de (191px) x (238px)";
        if ($request->pub === "258") $prixHT = "790.00";

        if ($request->pub === "27") $pub = "region de Champagne, annonce en haut, tout à gauche et d'un format de (191px) x (238px)";
        if ($request->pub === "27") $prixHT = "2990.00";
        if ($request->pub === "28") $pub = "region de Champagne, annonce en haut, 2ème à gauche et d'un format de (191px) x (238px)";
        if ($request->pub === "28") $prixHT = "2990.00";
        if ($request->pub === "29") $pub = "region de Champagne, annonce au milieu, tout à gauche et d'un format de (191px) x (238px)";
        if ($request->pub === "29") $prixHT = "2990.00";
        if ($request->pub === "30") $pub = "region de Champagne, annonce au milieu, 2ème à gauche et d'un format de (191px) x (238px)";
        if ($request->pub === "30") $prixHT = "2990.00";
        if ($request->pub === "31") $pub = "region de Champagne, annonce en bas à gauche et d'un format de (382px) x (440px)";
        if ($request->pub === "31") $prixHT = "3990.00";
        if ($request->pub === "32") $pub = "region de Champagne, annonce en haut à droite et d'un format de (382px) x (238px)";
        if ($request->pub === "32") $prixHT = "3490.00";
        if ($request->pub === "33") $pub = "region de Champagne, annonce au milieu à droite et d'un format de (382px) x (238px)";
        if ($request->pub === "33") $prixHT = "3490.00";
        if ($request->pub === "34") $pub = "region de Champagne, annonce en bas à droite et d'un format de (382px) x (440px)";
        if ($request->pub === "34") $prixHT = "3990.00";

        if ($request->pub === "307") $pub = "region des Champagnes de la Vallée de la Marne, annonce en haut, tout à gauche et d'un format de (191px) x (231px)";
        if ($request->pub === "307") $prixHT = "790.00";
        if ($request->pub === "308") $pub = "region des Champagnes de la Vallée de la Marne, annonce à gauche, le 1er au milieu et d'un format de (191px) x (430px)";
        if ($request->pub === "308") $prixHT = "790.00";
        if ($request->pub === "309") $pub = "region des Champagnes de la Vallée de la Marne, annonce à gauche, le 2nd au milieu et d'un format de (861px) x (238px)";
        if ($request->pub === "309") $prixHT = "790.00";
        if ($request->pub === "310") $pub = "region des Champagnes de la Vallée de la Marne, annonce en bas, tout à gauche et d'un format de (191px) x (287px)";
        if ($request->pub === "310") $prixHT = "790.00";
        if ($request->pub === "311") $pub = "region des Champagnes de la Vallée de la Marne, annonce en haut, tout à droite et d'un format de (993px) x (238px)";
        if ($request->pub === "311") $prixHT = "790.00";
        if ($request->pub === "312") $pub = "region des Champagnes de la Vallée de la Marne, annonce à droite, le 1er au milieu et d'un format de (101px) x (238px)";
        if ($request->pub === "312") $prixHT = "790.00";
        if ($request->pub === "313") $pub = "region des Champagnes de la Vallée de la Marne, annonce à droite, le 2nd au milieu et d'un format de (991px) x (268px)";
        if ($request->pub === "313") $prixHT = "790.00";
        if ($request->pub === "314") $pub = "region des Champagnes de la Vallée de la Marne, annonce en bas, tout à droite et d'un format de (191px) x (238px)";
        if ($request->pub === "314") $prixHT = "790.00";

        if ($request->pub === "299") $pub = "region des Champagnes de la Montagne de Reims et Côte des Blancs, annonce en haut, tout à gauche et d'un format de (191px) x (231px)";
        if ($request->pub === "299") $prixHT = "790.00";
        if ($request->pub === "300") $pub = "region des Champagnes de la Montagne de Reims et Côte des Blancs, annonce à gauche, le 1er au milieu et d'un format de (191px) x (430px)";
        if ($request->pub === "300") $prixHT = "790.00";
        if ($request->pub === "301") $pub = "region des Champagnes de la Montagne de Reims et Côte des Blancs, annonce à gauche, le 2nd au milieu et d'un format de (861px) x (238px)";
        if ($request->pub === "301") $prixHT = "790.00";
        if ($request->pub === "302") $pub = "region des Champagnes de la Montagne de Reims et Côte des Blancs, annonce en bas, tout à gauche et d'un format de (191px) x (287px)";
        if ($request->pub === "302") $prixHT = "790.00";
        if ($request->pub === "303") $pub = "region des Champagnes de la Montagne de Reims et Côte des Blancs, annonce en haut, tout à droite et d'un format de (993px) x (238px)";
        if ($request->pub === "303") $prixHT = "790.00";
        if ($request->pub === "304") $pub = "region des Champagnes de la Montagne de Reims et Côte des Blancs, annonce à droite, le 1er au milieu et d'un format de (101px) x (238px)";
        if ($request->pub === "304") $prixHT = "790.00";
        if ($request->pub === "305") $pub = "region des Champagnes de la Montagne de Reims et Côte des Blancs, annonce à droite, le 2nd au milieu et d'un format de (991px) x (268px)";
        if ($request->pub === "305") $prixHT = "790.00";
        if ($request->pub === "306") $pub = "region des Champagnes de la Montagne de Reims et Côte des Blancs, annonce en bas, tout à droite et d'un format de (191px) x (238px)";
        if ($request->pub === "306") $prixHT = "790.00";

        if ($request->pub === "387") $pub = "region de Cognac, annonce en haut, tout à gauche et d'un format de (191px) x (231px)";
        if ($request->pub === "387") $prixHT = "790.00";
        if ($request->pub === "388") $pub = "region de Cognac, annonce à gauche, le 1er au milieu et d'un format de (191px) x (430px)";
        if ($request->pub === "388") $prixHT = "790.00";
        if ($request->pub === "389") $pub = "region de Cognac, annonce à gauche, le 2nd au milieu et d'un format de (861px) x (238px)";
        if ($request->pub === "389") $prixHT = "790.00";
        if ($request->pub === "390") $pub = "region de Cognac, annonce en bas, tout à gauche et d'un format de (191px) x (287px)";
        if ($request->pub === "390") $prixHT = "790.00";
        if ($request->pub === "391") $pub = "region de Cognac, annonce en haut, tout à droite et d'un format de (993px) x (238px)";
        if ($request->pub === "391") $prixHT = "790.00";
        if ($request->pub === "392") $pub = "region de Cognac, annonce à droite, le 1er au milieu et d'un format de (101px) x (238px)";
        if ($request->pub === "392") $prixHT = "790.00";
        if ($request->pub === "393") $pub = "region de Cognac, annonce à droite, le 2nd au milieu et d'un format de (991px) x (268px)";
        if ($request->pub === "393") $prixHT = "790.00";
        if ($request->pub === "394") $pub = "region de Cognac, annonce en bas, tout à droite et d'un format de (191px) x (238px)";
        if ($request->pub === "394") $prixHT = "790.00";

        if ($request->pub === "427") $pub = "region de la Corse, annonce en haut, tout à gauche et d'un format de (191px) x (231px)";
        if ($request->pub === "427") $prixHT = "790.00";
        if ($request->pub === "428") $pub = "region de la Corse, annonce à gauche, le 1er au milieu et d'un format de (191px) x (430px)";
        if ($request->pub === "428") $prixHT = "790.00";
        if ($request->pub === "429") $pub = "region de la Corse, annonce à gauche, le 2nd au milieu et d'un format de (861px) x (238px)";
        if ($request->pub === "429") $prixHT = "790.00";
        if ($request->pub === "430") $pub = "region de la Corse, annonce en bas, tout à gauche et d'un format de (191px) x (287px)";
        if ($request->pub === "430") $prixHT = "790.00";
        if ($request->pub === "431") $pub = "region de la Corse, annonce en haut, tout à droite et d'un format de (993px) x (238px)";
        if ($request->pub === "431") $prixHT = "790.00";
        if ($request->pub === "432") $pub = "region de la Corse, annonce à droite, le 1er au milieu et d'un format de (101px) x (238px)";
        if ($request->pub === "432") $prixHT = "790.00";
        if ($request->pub === "433") $pub = "region de la Corse, annonce à droite, le 2nd au milieu et d'un format de (991px) x (268px)";
        if ($request->pub === "433") $prixHT = "790.00";
        if ($request->pub === "434") $pub = "region de la Corse, annonce en bas, tout à droite et d'un format de (191px) x (238px)";
        if ($request->pub === "434") $prixHT = "790.00";

        if ($request->pub === "259") $pub = "region des Côtes du Rhône Méridional, annonce en haut, tout à gauche et d'un format de (191px) x (231px)";
        if ($request->pub === "259") $prixHT = "790.00";
        if ($request->pub === "260") $pub = "region des Côtes du Rhône Méridional, annonce à gauche, le 1er au milieu et d'un format de (191px) x (430px)";
        if ($request->pub === "260") $prixHT = "790.00";
        if ($request->pub === "261") $pub = "region des Côtes du Rhône Méridional, annonce à gauche, le 2nd au milieu et d'un format de (861px) x (238px)";
        if ($request->pub === "261") $prixHT = "790.00";
        if ($request->pub === "262") $pub = "region des Côtes du Rhône Méridional, annonce en bas, tout à gauche et d'un format de (191px) x (287px)";
        if ($request->pub === "262") $prixHT = "790.00";
        if ($request->pub === "263") $pub = "region des Côtes du Rhône Méridional, annonce en haut, tout à droite et d'un format de (993px) x (238px)";
        if ($request->pub === "263") $prixHT = "790.00";
        if ($request->pub === "264") $pub = "region des Côtes du Rhône Méridional, annonce à droite, le 1er au milieu et d'un format de (101px) x (238px)";
        if ($request->pub === "264") $prixHT = "790.00";
        if ($request->pub === "265") $pub = "region des Côtes du Rhône Méridional, annonce à droite, le 2nd au milieu et d'un format de (991px) x (268px)";
        if ($request->pub === "265") $prixHT = "790.00";
        if ($request->pub === "266") $pub = "region des Côtes du Rhône Méridional, annonce en bas, tout à droite et d'un format de (191px) x (238px)";
        if ($request->pub === "266") $prixHT = "790.00";

        if ($request->pub === "43") $pub = "region des Côtes du Rhône Septentrional, annonce en haut, tout à gauche et d'un format de (191px) x (238px)";
        if ($request->pub === "43") $prixHT = "2990.00";
        if ($request->pub === "44") $pub = "region des Côtes du Rhône Septentrional, annonce en haut, 2ème à gauche et d'un format de (191px) x (238px)";
        if ($request->pub === "44") $prixHT = "2990.00";
        if ($request->pub === "45") $pub = "region des Côtes du Rhône Septentrional, annonce au milieu, tout à gauche et d'un format de (191px) x (238px)";
        if ($request->pub === "45") $prixHT = "2990.00";
        if ($request->pub === "46") $pub = "region des Côtes du Rhône Septentrional, annonce au milieu, 2ème à gauche et d'un format de (191px) x (238px)";
        if ($request->pub === "46") $prixHT = "2990.00";
        if ($request->pub === "47") $pub = "region des Côtes du Rhône Septentrional, annonce en bas à gauche et d'un format de (382px) x (440px)";
        if ($request->pub === "47") $prixHT = "3990.00";
        if ($request->pub === "48") $pub = "region des Côtes du Rhône Septentrional, annonce en haut à droite et d'un format de (382px) x (238px)";
        if ($request->pub === "48") $prixHT = "3490.00";
        if ($request->pub === "49") $pub = "region des Côtes du Rhône Septentrional, annonce au milieu à droite et d'un format de (382px) x (238px)";
        if ($request->pub === "49") $prixHT = "3490.00";
        if ($request->pub === "50") $pub = "region des Côtes du Rhône Septentrional, annonce en bas à droite et d'un format de (382px) x (440px)";
        if ($request->pub === "50") $prixHT = "3990.00";

        if ($request->pub === "443") $pub = "region de Saint-Peray et Cornas, annonce en haut, tout à gauche et d'un format de (191px) x (231px)";
        if ($request->pub === "443") $prixHT = "790.00";
        if ($request->pub === "444") $pub = "region de Saint-Peray et Cornas, annonce à gauche, le 1er au milieu et d'un format de (191px) x (430px)";
        if ($request->pub === "444") $prixHT = "790.00";
        if ($request->pub === "445") $pub = "region de Saint-Peray et Cornas, annonce à gauche, le 2nd au milieu et d'un format de (861px) x (238px)";
        if ($request->pub === "445") $prixHT = "790.00";
        if ($request->pub === "446") $pub = "region de Saint-Peray et Cornas, annonce en bas, tout à gauche et d'un format de (191px) x (287px)";
        if ($request->pub === "446") $prixHT = "790.00";
        if ($request->pub === "447") $pub = "region de Saint-Peray et Cornas, annonce en haut, tout à droite et d'un format de (993px) x (238px)";
        if ($request->pub === "447") $prixHT = "790.00";
        if ($request->pub === "448") $pub = "region de Saint-Peray et Cornas, annonce à droite, le 1er au milieu et d'un format de (101px) x (238px)";
        if ($request->pub === "448") $prixHT = "790.00";
        if ($request->pub === "449") $pub = "region de Saint-Peray et Cornas, annonce à droite, le 2nd au milieu et d'un format de (991px) x (268px)";
        if ($request->pub === "449") $prixHT = "790.00";
        if ($request->pub === "450") $pub = "region de Saint-Peray et Cornas, annonce en bas, tout à droite et d'un format de (191px) x (238px)";
        if ($request->pub === "450") $prixHT = "790.00";

        if ($request->pub === "355") $pub = "region du Jura, annonce en haut, tout à gauche et d'un format de (191px) x (231px)";
        if ($request->pub === "355") $prixHT = "790.00";
        if ($request->pub === "356") $pub = "region du Jura, annonce à gauche, le 1er au milieu et d'un format de (191px) x (430px)";
        if ($request->pub === "356") $prixHT = "790.00";
        if ($request->pub === "357") $pub = "region du Jura, annonce à gauche, le 2nd au milieu et d'un format de (861px) x (238px)";
        if ($request->pub === "357") $prixHT = "790.00";
        if ($request->pub === "358") $pub = "region du Jura, annonce en bas, tout à gauche et d'un format de (191px) x (287px)";
        if ($request->pub === "358") $prixHT = "790.00";
        if ($request->pub === "359") $pub = "region du Jura, annonce en haut, tout à droite et d'un format de (993px) x (238px)";
        if ($request->pub === "359") $prixHT = "790.00";
        if ($request->pub === "360") $pub = "region du Jura, annonce à droite, le 1er au milieu et d'un format de (101px) x (238px)";
        if ($request->pub === "360") $prixHT = "790.00";
        if ($request->pub === "361") $pub = "region du Jura, annonce à droite, le 2nd au milieu et d'un format de (991px) x (268px)";
        if ($request->pub === "361") $prixHT = "790.00";
        if ($request->pub === "362") $pub = "region du Jura, annonce en bas, tout à droite et d'un format de (191px) x (238px)";
        if ($request->pub === "362") $prixHT = "790.00";

        if ($request->pub === "363") $pub = "region du Languedoc-Roussillon, annonce en haut, tout à gauche et d'un format de (191px) x (231px)";
        if ($request->pub === "363") $prixHT = "790.00";
        if ($request->pub === "364") $pub = "region du Languedoc-Roussillon, annonce à gauche, le 1er au milieu et d'un format de (191px) x (430px)";
        if ($request->pub === "364") $prixHT = "790.00";
        if ($request->pub === "365") $pub = "region du Languedoc-Roussillon, annonce à gauche, le 2nd au milieu et d'un format de (861px) x (238px)";
        if ($request->pub === "365") $prixHT = "790.00";
        if ($request->pub === "366") $pub = "region du Languedoc-Roussillon, annonce en bas, tout à gauche et d'un format de (191px) x (287px)";
        if ($request->pub === "366") $prixHT = "790.00";
        if ($request->pub === "367") $pub = "region du Languedoc-Roussillon, annonce en haut, tout à droite et d'un format de (993px) x (238px)";
        if ($request->pub === "367") $prixHT = "790.00";
        if ($request->pub === "368") $pub = "region du Languedoc-Roussillon, annonce à droite, le 1er au milieu et d'un format de (101px) x (238px)";
        if ($request->pub === "368") $prixHT = "790.00";
        if ($request->pub === "369") $pub = "region du Languedoc-Roussillon, annonce à droite, le 2nd au milieu et d'un format de (991px) x (268px)";
        if ($request->pub === "369") $prixHT = "790.00";
        if ($request->pub === "370") $pub = "region du Languedoc-Roussillon, annonce en bas, tout à droite et d'un format de (191px) x (238px)";
        if ($request->pub === "370") $prixHT = "790.00";

        if ($request->pub === "35") $pub = "region de la Loire, annonce en haut, tout à gauche et d'un format de (191px) x (238px)";
        if ($request->pub === "35") $prixHT = "2990.00";
        if ($request->pub === "36") $pub = "region de la Loire, annonce en haut, 2ème à gauche et d'un format de (191px) x (238px)";
        if ($request->pub === "36") $prixHT = "2990.00";
        if ($request->pub === "37") $pub = "region de la Loire, annonce au milieu, tout à gauche et d'un format de (191px) x (238px)";
        if ($request->pub === "37") $prixHT = "2990.00";
        if ($request->pub === "38") $pub = "region de la Loire, annonce au milieu, 2ème à gauche et d'un format de (191px) x (238px)";
        if ($request->pub === "38") $prixHT = "2990.00";
        if ($request->pub === "39") $pub = "region de la Loire, annonce en bas à gauche et d'un format de (382px) x (440px)";
        if ($request->pub === "39") $prixHT = "3990.00";
        if ($request->pub === "40") $pub = "region de la Loire, annonce en haut à droite et d'un format de (382px) x (238px)";
        if ($request->pub === "40") $prixHT = "3490.00";
        if ($request->pub === "41") $pub = "region de la Loire, annonce au milieu à droite et d'un format de (382px) x (238px)";
        if ($request->pub === "41") $prixHT = "3490.00";
        if ($request->pub === "42") $pub = "region de la Loire, annonce en bas à droite et d'un format de (382px) x (440px)";
        if ($request->pub === "42") $prixHT = "3990.00";

        if ($request->pub === "323") $pub = "region de Pouilly, annonce en haut, tout à gauche et d'un format de (191px) x (231px)";
        if ($request->pub === "323") $prixHT = "790.00";
        if ($request->pub === "324") $pub = "region de Pouilly, annonce à gauche, le 1er au milieu et d'un format de (191px) x (430px)";
        if ($request->pub === "324") $prixHT = "790.00";
        if ($request->pub === "325") $pub = "region de Pouilly, annonce à gauche, le 2nd au milieu et d'un format de (861px) x (238px)";
        if ($request->pub === "325") $prixHT = "790.00";
        if ($request->pub === "326") $pub = "region de Pouilly, annonce en bas, tout à gauche et d'un format de (191px) x (287px)";
        if ($request->pub === "326") $prixHT = "790.00";
        if ($request->pub === "327") $pub = "region de Pouilly, annonce en haut, tout à droite et d'un format de (993px) x (238px)";
        if ($request->pub === "327") $prixHT = "790.00";
        if ($request->pub === "328") $pub = "region de Pouilly, annonce à droite, le 1er au milieu et d'un format de (101px) x (238px)";
        if ($request->pub === "328") $prixHT = "790.00";
        if ($request->pub === "329") $pub = "region de Pouilly, annonce à droite, le 2nd au milieu et d'un format de (991px) x (268px)";
        if ($request->pub === "329") $prixHT = "790.00";
        if ($request->pub === "330") $pub = "region de Pouilly, annonce en bas, tout à droite et d'un format de (191px) x (238px)";
        if ($request->pub === "330") $prixHT = "790.00";

        if ($request->pub === "331") $pub = "region de Quincy et Reuilly, annonce en haut, tout à gauche et d'un format de (191px) x (231px)";
        if ($request->pub === "331") $prixHT = "790.00";
        if ($request->pub === "332") $pub = "region de Quincy et Reuilly, annonce à gauche, le 1er au milieu et d'un format de (191px) x (430px)";
        if ($request->pub === "332") $prixHT = "790.00";
        if ($request->pub === "333") $pub = "region de Quincy et Reuilly, annonce à gauche, le 2nd au milieu et d'un format de (861px) x (238px)";
        if ($request->pub === "333") $prixHT = "790.00";
        if ($request->pub === "334") $pub = "region de Quincy et Reuilly, annonce en bas, tout à gauche et d'un format de (191px) x (287px)";
        if ($request->pub === "334") $prixHT = "790.00";
        if ($request->pub === "335") $pub = "region de Quincy et Reuilly, annonce en haut, tout à droite et d'un format de (993px) x (238px)";
        if ($request->pub === "335") $prixHT = "790.00";
        if ($request->pub === "336") $pub = "region de Quincy et Reuilly, annonce à droite, le 1er au milieu et d'un format de (101px) x (238px)";
        if ($request->pub === "336") $prixHT = "790.00";
        if ($request->pub === "337") $pub = "region de Quincy et Reuilly, annonce à droite, le 2nd au milieu et d'un format de (991px) x (268px)";
        if ($request->pub === "337") $prixHT = "790.00";
        if ($request->pub === "338") $pub = "region de Quincy et Reuilly, annonce en bas, tout à droite et d'un format de (191px) x (238px)";
        if ($request->pub === "338") $prixHT = "790.00";

        if ($request->pub === "339") $pub = "region de Sancerre et Menetou-Salon, annonce en haut, tout à gauche et d'un format de (191px) x (231px)";
        if ($request->pub === "339") $prixHT = "790.00";
        if ($request->pub === "340") $pub = "region de Sancerre et Menetou-Salon, annonce à gauche, le 1er au milieu et d'un format de (191px) x (430px)";
        if ($request->pub === "340") $prixHT = "790.00";
        if ($request->pub === "341") $pub = "region de Sancerre et Menetou-Salon, annonce à gauche, le 2nd au milieu et d'un format de (861px) x (238px)";
        if ($request->pub === "341") $prixHT = "790.00";
        if ($request->pub === "342") $pub = "region de Sancerre et Menetou-Salon, annonce en bas, tout à gauche et d'un format de (191px) x (287px)";
        if ($request->pub === "342") $prixHT = "790.00";
        if ($request->pub === "343") $pub = "region de Sancerre et Menetou-Salon, annonce en haut, tout à droite et d'un format de (993px) x (238px)";
        if ($request->pub === "343") $prixHT = "790.00";
        if ($request->pub === "344") $pub = "region de Sancerre et Menetou-Salon, annonce à droite, le 1er au milieu et d'un format de (101px) x (238px)";
        if ($request->pub === "344") $prixHT = "790.00";
        if ($request->pub === "345") $pub = "region de Sancerre et Menetou-Salon, annonce à droite, le 2nd au milieu et d'un format de (991px) x (268px)";
        if ($request->pub === "345") $prixHT = "790.00";
        if ($request->pub === "346") $pub = "region de Sancerre et Menetou-Salon, annonce en bas, tout à droite et d'un format de (191px) x (238px)";
        if ($request->pub === "346") $prixHT = "790.00";

        if ($request->pub === "347") $pub = "region de Saumur-Champigny, annonce en haut, tout à gauche et d'un format de (191px) x (231px)";
        if ($request->pub === "347") $prixHT = "790.00";
        if ($request->pub === "348") $pub = "region de Saumur-Champigny, annonce à gauche, le 1er au milieu et d'un format de (191px) x (430px)";
        if ($request->pub === "348") $prixHT = "790.00";
        if ($request->pub === "349") $pub = "region de Saumur-Champigny, annonce à gauche, le 2nd au milieu et d'un format de (861px) x (238px)";
        if ($request->pub === "349") $prixHT = "790.00";
        if ($request->pub === "350") $pub = "region de Saumur-Champigny, annonce en bas, tout à gauche et d'un format de (191px) x (287px)";
        if ($request->pub === "350") $prixHT = "790.00";
        if ($request->pub === "351") $pub = "region de Saumur-Champigny, annonce en haut, tout à droite et d'un format de (993px) x (238px)";
        if ($request->pub === "351") $prixHT = "790.00";
        if ($request->pub === "352") $pub = "region de Saumur-Champigny, annonce à droite, le 1er au milieu et d'un format de (101px) x (238px)";
        if ($request->pub === "352") $prixHT = "790.00";
        if ($request->pub === "353") $pub = "region de Saumur-Champigny, annonce à droite, le 2nd au milieu et d'un format de (991px) x (268px)";
        if ($request->pub === "353") $prixHT = "790.00";
        if ($request->pub === "354") $pub = "region de Saumur-Champigny, annonce en bas, tout à droite et d'un format de (191px) x (238px)";
        if ($request->pub === "354") $prixHT = "790.00";

        if ($request->pub === "379") $pub = "region de la Lorraine, annonce en haut, tout à gauche et d'un format de (191px) x (231px)";
        if ($request->pub === "379") $prixHT = "790.00";
        if ($request->pub === "380") $pub = "region de la Lorraine, annonce à gauche, le 1er au milieu et d'un format de (191px) x (430px)";
        if ($request->pub === "380") $prixHT = "790.00";
        if ($request->pub === "381") $pub = "region de la Lorraine, annonce à gauche, le 2nd au milieu et d'un format de (861px) x (238px)";
        if ($request->pub === "381") $prixHT = "790.00";
        if ($request->pub === "382") $pub = "region de la Lorraine, annonce en bas, tout à gauche et d'un format de (191px) x (287px)";
        if ($request->pub === "382") $prixHT = "790.00";
        if ($request->pub === "383") $pub = "region de la Lorraine, annonce en haut, tout à droite et d'un format de (993px) x (238px)";
        if ($request->pub === "383") $prixHT = "790.00";
        if ($request->pub === "384") $pub = "region de la Lorraine, annonce à droite, le 1er au milieu et d'un format de (101px) x (238px)";
        if ($request->pub === "384") $prixHT = "790.00";
        if ($request->pub === "385") $pub = "region de la Lorraine, annonce à droite, le 2nd au milieu et d'un format de (991px) x (268px)";
        if ($request->pub === "385") $prixHT = "790.00";
        if ($request->pub === "386") $pub = "region de la Lorraine, annonce en bas, tout à droite et d'un format de (191px) x (238px)";
        if ($request->pub === "386") $prixHT = "790.00";

        if ($request->pub === "435") $pub = "region de la Provence, annonce en haut, tout à gauche et d'un format de (191px) x (231px)";
        if ($request->pub === "435") $prixHT = "790.00";
        if ($request->pub === "436") $pub = "region de la Provence, annonce à gauche, le 1er au milieu et d'un format de (191px) x (430px)";
        if ($request->pub === "436") $prixHT = "790.00";
        if ($request->pub === "437") $pub = "region de la Provence, annonce à gauche, le 2nd au milieu et d'un format de (861px) x (238px)";
        if ($request->pub === "437") $prixHT = "790.00";
        if ($request->pub === "438") $pub = "region de la Provence, annonce en bas, tout à gauche et d'un format de (191px) x (287px)";
        if ($request->pub === "438") $prixHT = "790.00";
        if ($request->pub === "439") $pub = "region de la Provence, annonce en haut, tout à droite et d'un format de (993px) x (238px)";
        if ($request->pub === "439") $prixHT = "790.00";
        if ($request->pub === "440") $pub = "region de la Provence, annonce à droite, le 1er au milieu et d'un format de (101px) x (238px)";
        if ($request->pub === "440") $prixHT = "790.00";
        if ($request->pub === "441") $pub = "region de la Provence, annonce à droite, le 2nd au milieu et d'un format de (991px) x (268px)";
        if ($request->pub === "441") $prixHT = "790.00";
        if ($request->pub === "442") $pub = "region de la Provence, annonce en bas, tout à droite et d'un format de (191px) x (238px)";
        if ($request->pub === "442") $prixHT = "790.00";

        if ($request->pub === "419") $pub = "region de la Savoie, annonce en haut, tout à gauche et d'un format de (191px) x (231px)";
        if ($request->pub === "419") $prixHT = "790.00";
        if ($request->pub === "420") $pub = "region de la Savoie, annonce à gauche, le 1er au milieu et d'un format de (191px) x (430px)";
        if ($request->pub === "420") $prixHT = "790.00";
        if ($request->pub === "421") $pub = "region de la Savoie, annonce à gauche, le 2nd au milieu et d'un format de (861px) x (238px)";
        if ($request->pub === "421") $prixHT = "790.00";
        if ($request->pub === "422") $pub = "region de la Savoie, annonce en bas, tout à gauche et d'un format de (191px) x (287px)";
        if ($request->pub === "422") $prixHT = "790.00";
        if ($request->pub === "423") $pub = "region de la Savoie, annonce en haut, tout à droite et d'un format de (993px) x (238px)";
        if ($request->pub === "423") $prixHT = "790.00";
        if ($request->pub === "424") $pub = "region de la Savoie, annonce à droite, le 1er au milieu et d'un format de (101px) x (238px)";
        if ($request->pub === "424") $prixHT = "790.00";
        if ($request->pub === "425") $pub = "region de la Savoie, annonce à droite, le 2nd au milieu et d'un format de (991px) x (268px)";
        if ($request->pub === "425") $prixHT = "790.00";
        if ($request->pub === "426") $pub = "region de la Savoie, annonce en bas, tout à droite et d'un format de (191px) x (238px)";
        if ($request->pub === "426") $prixHT = "790.00";

        if ($request->pub === "51") $pub = "region de la Loire, annonce en haut, tout à gauche et d'un format de (191px) x (238px)";
        if ($request->pub === "51") $prixHT = "2990.00";
        if ($request->pub === "52") $pub = "region de la Loire, annonce en haut, 2ème à gauche et d'un format de (191px) x (238px)";
        if ($request->pub === "52") $prixHT = "2990.00";
        if ($request->pub === "53") $pub = "region de la Loire, annonce au milieu, tout à gauche et d'un format de (191px) x (238px)";
        if ($request->pub === "53") $prixHT = "2990.00";
        if ($request->pub === "54") $pub = "region de la Loire, annonce au milieu, 2ème à gauche et d'un format de (191px) x (254px)";
        if ($request->pub === "54") $prixHT = "2990.00";
        if ($request->pub === "55") $pub = "region de la Loire, annonce en bas à gauche et d'un format de (562px) x (440px)";
        if ($request->pub === "55") $prixHT = "3990.00";
        if ($request->pub === "56") $pub = "region de la Loire, annonce en haut à droite et d'un format de (382px) x (238px)";
        if ($request->pub === "56") $prixHT = "3490.00";
        if ($request->pub === "57") $pub = "region de la Loire, annonce au milieu à droite et d'un format de (382px) x (238px)";
        if ($request->pub === "57") $prixHT = "3490.00";
        if ($request->pub === "58") $pub = "region de la Loire, annonce en bas à droite et d'un format de (382px) x (440px)";
        if ($request->pub === "58") $prixHT = "3990.00";

        if ($request->pub === "403") $pub = "region de l'Aveyron, annonce en haut, tout à gauche et d'un format de (191px) x (238px)";
        if ($request->pub === "403") $prixHT = "790.00";
        if ($request->pub === "404") $pub = "region de l'Aveyron, annonce à gauche, le 1er au milieu et d'un format de (191px) x (438px)";
        if ($request->pub === "404") $prixHT = "790.00";
        if ($request->pub === "405") $pub = "region de l'Aveyron, annonce à gauche, le 2nd au milieu et d'un format de (191px) x (238px)";
        if ($request->pub === "405") $prixHT = "790.00";
        if ($request->pub === "406") $pub = "region de l'Aveyron, annonce en bas, tout à gauche et d'un format de (191px) x (238px)";
        if ($request->pub === "406") $prixHT = "790.00";
        if ($request->pub === "407") $pub = "region de l'Aveyron, annonce en haut, tout à droite et d'un format de (991px) x (238px)";
        if ($request->pub === "407") $prixHT = "790.00";
        if ($request->pub === "408") $pub = "region de l'Aveyron, annonce à droite, le 1er au milieu et d'un format de (191px) x (238px)";
        if ($request->pub === "408") $prixHT = "790.00";
        if ($request->pub === "409") $pub = "region de l'Aveyron, annonce à droite, le 2nd au milieu et d'un format de (191px) x (238px)";
        if ($request->pub === "409") $prixHT = "790.00";
        if ($request->pub === "410") $pub = "region de l'Aveyron, annonce en bas, tout à droite et d'un format de (191px) x (238px)";
        if ($request->pub === "410") $prixHT = "790.00";

        if ($request->pub === "73") $pub = "Tous les vins, annonce en haut, tout à gauche et d'un format de (191px) x (231px)";
        if ($request->pub === "73") $prixHT = "1990.00";
        if ($request->pub === "74") $pub = "Tous les vins, annonce à gauche, le 1er au milieu et d'un format de (191px) x (430px)";
        if ($request->pub === "74") $prixHT = "1990.00";
        if ($request->pub === "75") $pub = "Tous les vins, annonce à gauche, le 2nd au milieu et d'un format de (861px) x (238px)";
        if ($request->pub === "75") $prixHT = "1990.00";
        if ($request->pub === "76") $pub = "Tous les vins, annonce en bas, tout à gauche et d'un format de (191px) x (287px)";
        if ($request->pub === "76") $prixHT = "1990.00";
        if ($request->pub === "77") $pub = "Tous les vins, annonce en haut, tout à droite et d'un format de (993px) x (238px)";
        if ($request->pub === "77") $prixHT = "1990.00";
        if ($request->pub === "78") $pub = "Tous les vins, annonce à droite, le 1er au milieu et d'un format de (101px) x (238px)";
        if ($request->pub === "78") $prixHT = "1990.00";
        if ($request->pub === "79") $pub = "Tous les vins, annonce à droite, le 2nd au milieu et d'un format de (991px) x (268px)";
        if ($request->pub === "79") $prixHT = "1990.00";
        if ($request->pub === "80") $pub = "Tous les vins, annonce en bas, tout à droite et d'un format de (191px) x (238px)";
        if ($request->pub === "80") $prixHT = "1990.00";

        // On créé la variable du type de paiement
        if ($request->type == 1) $type = "Carte bleue via Stripe";
        if ($request->type == 2) $type = "PayPal";
        if ($request->type == 3) $type = "Administration";

        $data = [
            'name'              => $request->name,
            'adresse'           => !empty($vigneron->adresse) ? $vigneron->adresse : $annonceur->adresse,
            'telephone'         => !empty($vigneron->telephone) ? $vigneron->telephone : $annonceur->telephone,
            'email'             => !empty($vigneron->email) ? $vigneron->email : $annonceur->email,
            'identiteunique'    => !empty($request->identiteunique) ? $request->identiteunique : $randomidentite,
            'produit'           => $pub,
            'datefacture'       => Carbon::now(),
            'duree'             => $request->qte,
            'qte'               => $request->qte,
            'type'              => $type,
            'prixHT'            => $prixHT,
            'soustotalHT'       => number_format($prixHT * $request->qte, 2, '.', ''),
            'tva'               => number_format($prixHT * $request->qte * 0.2 * $request->qte, 2, '.', ''),
            'totalTTC'          => number_format($prixHT * $request->qte * 1.2, 2, '.', ''),
            'user_id'           => $user->id
        ];

        // On créé un nouvel enregistrement dans la table pedefs
        Pedef::create($data);

        // On récupère le dernier pdf
        $achat = Pedef::orderBy('id', 'desc')->first();

        // On charge la vue du PDF
        $pedef = PDF::loadView('admin.creerfacture.pdf', compact('achat'));

        // On téléverse le PDF
        // On met diffForHumans() en locale avec la classe
        \Carbon\Carbon::setLocale('fr');

        // On transforme le nom de la société en alias
        $societe = $this->enlevertouteslesmerdes($request->societe);

        // On récupère la date au bon format
        $date = $achat->created_at->format('d/m/Y');

        // On donne ici comme nom de PFD : Facture, mom de la société, date de la facture et extension PDF
        return $pedef->download("Facture-$societe-$date.pdf");
    }

    /**
     * Méthode enlevertouteslesmerdes (), qui, comme son nom l'indique, enlève toutes les merdes
     * des chaînes de caractères pour créer des alias et des urls propres
     *
     * @param $text
     * @return $text
    **/
    public function enlevertouteslesmerdes ($text)
    {
        $caracteres = [
            'a', 'Á' => 'a', 'Â' => 'a', 'Ä' => 'a', 'à' => 'a', 'á' => 'a', 'â' => 'a', 'ä' => 'a', '@' => 'a',
            'È' => 'e', 'É' => 'e', 'Ê' => 'e', 'Ë' => 'e', 'è' => 'e', 'é' => 'e', 'ê' => 'e', 'ë' => 'e', '€' => 'e',
            'Ì' => 'i', 'Í' => 'i', 'Î' => 'i', 'Ï' => 'i', 'ì' => 'i', 'í' => 'i', 'î' => 'i', 'ï' => 'i',
            'Ò' => 'o', 'Ó' => 'o', 'Ô' => 'o', 'Ö' => 'o', 'ò' => 'o', 'ó' => 'o', 'ô' => 'o', 'ö' => 'o',
            'Ù' => 'u', 'Ú' => 'u', 'Û' => 'u', 'Ü' => 'u', 'ù' => 'u', 'ú' => 'u', 'û' => 'u', 'ü' => 'u', 'µ' => 'u',
            'Œ' => 'oe', 'œ' => 'oe',
            '$' => 's'
        ];
        $text = strtr($text, $caracteres);
        $text = preg_replace('#[^A-Za-z0-9]+#', '-', $text);
        $text = trim($text, '-');
        $text = strtolower($text);

        return $text;
    }
}
