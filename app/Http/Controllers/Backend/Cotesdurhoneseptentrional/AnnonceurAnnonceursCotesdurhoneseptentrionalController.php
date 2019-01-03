<?php

namespace App\Http\Controllers\Backend\Cotesdurhoneseptentrional;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\User;
use App\Annonceur;
use App\Pub;

class AnnonceurAnnonceursCotesdurhoneseptentrionalController extends Controller
{
    // Le chemin vers le téléversement du visuel du reportage
    protected $uploadPath;

    /**
     * Méthode __construct () pour le chemin du visuel du reportage
     *
     * @return void
    **/
    public function __construct ()
    {
        $this->uploadPath = 'img/filemanager/annonceurs/';
    }

    /**
     * Affiche la page de réservation du choix des Côtes du Rhône Septentrional.
     *
     * @param Pub $pubs
     * @param $id
     * @return view('admin.annonceurs.choixannonce.cotesdurhoneseptentrional.index', compact('annonceur', 'pubs'));
    */
    public function cotesdurhoneseptentrional (Request $request, $id)
    {
        // On récupère l'annonceur
        $annonceur = Annonceur::findOrFail($id);

        // On récupère les pubs
        $pubs = Pub::findOrFail([41,42,43,44,45,46,47,48]);

        // On retourne la vue
        return view('admin.annonceurs.choixannonce.cotesdurhoneseptentrional.index', compact('annonceur', 'pubs'));
    }

    /**
     * Valide le choix de la pub des Côtes du Rhône Septentrional.
     *
     * @param Requests\DisponibleAnnonceurRequest $request
     * @param $id
     * 
     * @return view('admin.annonceurs.choixannonce.champagne.validation', compact('annonceur', 'pub'));
    */
    public function validationcotesdurhoneseptentrional (Requests\DisponibleAnnonceurRequest $request, $id)
    { 
        // On récupère l'annonceur
        $annonceur = Annonceur::findOrFail($id);

        // On récupère le choix de la pub des Côtes du Rhône Septentrional
        if ($request->disponible == 1) $pub = Pub::findOrFail(41);
        if ($request->disponible == 2) $pub = Pub::findOrFail(42);
        if ($request->disponible == 3) $pub = Pub::findOrFail(46);
        if ($request->disponible == 4) $pub = Pub::findOrFail(43);
        if ($request->disponible == 5) $pub = Pub::findOrFail(44);
        if ($request->disponible == 6) $pub = Pub::findOrFail(47);
        if ($request->disponible == 7) $pub = Pub::findOrFail(45);
        if ($request->disponible == 8) $pub = Pub::findOrFail(48);

        return view('admin.annonceurs.choixannonce.cotesdurhoneseptentrional.validation', compact('annonceur', 'pub'));
    }

    /**
     * Affiche la page de réservation du de choix Saint-Peray et Cornas.
     *
     * @param Pub $pubs
     * @param $id
     * @return view('admin.annonceurs.choixannonce')
    */
    public function saintperayetcornas (Request $request, $id)
    {
        // On récupère l'annonceur
        $annonceur = Annonceur::findOrFail($id);

        // On récupère les pubs
        $pubs = Pub::findOrFail([441,442,443,444,445,446,447,448]);

        // On retourne la vue
        return view('admin.annonceurs.choixannonce.cotesdurhoneseptentrional.saintperayetcornas.index', compact('annonceur', 'pubs'));
    }

    /**
     * Valide le choix de lde a pub Saint-Peray et Cornas.
     *
     * @param Requests\DisponibleAnnonceurRequest $request
     * @param $id
     * 
     * @return view('admin.annonceurs.choixannonce.champagne.validation', compact('annonceur', 'pub'));
    */
    public function validationsaintperayetcornas (Requests\DisponibleAnnonceurRequest $request, $id)
    { 
        // On récupère l'annonceur
        $annonceur = Annonceur::findOrFail($id);

        // On récupère le choix de la pub à Saint-Peray et Cornas
        if ($request->disponible == 1) $pub = Pub::findOrFail(441);
        if ($request->disponible == 2) $pub = Pub::findOrFail(445);
        if ($request->disponible == 3) $pub = Pub::findOrFail(442);
        if ($request->disponible == 4) $pub = Pub::findOrFail(446);
        if ($request->disponible == 5) $pub = Pub::findOrFail(443);
        if ($request->disponible == 6) $pub = Pub::findOrFail(447);
        if ($request->disponible == 7) $pub = Pub::findOrFail(444);
        if ($request->disponible == 8) $pub = Pub::findOrFail(448);

        return view('admin.annonceurs.choixannonce.cotesdurhoneseptentrional.saintperayetcornas.validation', compact('annonceur', 'pub'));
    }
}
