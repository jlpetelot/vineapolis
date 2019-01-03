<?php

namespace App\Http\Controllers\Backend\Jura;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\User;
use App\Annonceur;
use App\Pub;

class AnnonceurAnnonceursJuraController extends BackendController
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
     * Affiche la page de réservation du choix Jura.
     *
     * @param Pub $pubs
     * @param $id
     * @return view('admin.annonceurs.choixannonce.jura.index', compact('annonceur', 'pubs'));
    */
    public function jura (Request $request, $id)
    {
        // On récupère l'annonceur
        $annonceur = Annonceur::findOrFail($id);

        // On récupère les pubs
        $pubs = Pub::findOrFail([353,354,355,356,357,358,359,360]);

        // On retourne la vue
        return view('admin.annonceurs.choixannonce.jura.index', compact('annonceur', 'pubs'));
    }

    /**
     * Valide le choix de la pub de Jura.
     *
     * @param Requests\DisponibleAnnonceurRequest $request
     * @param $id
     * 
     * @return view('admin.annonceurs.choixannonce.jura.validation', compact('annonceur', 'pub'));
    */
    public function validationjura (Requests\DisponibleAnnonceurRequest $request, $id)
    { 
        // On récupère l'annonceur
        $annonceur = Annonceur::findOrFail($id);

        // On récupère le choix de la pub en Jura
        if ($request->disponible == 1) $pub = Pub::findOrFail(353);
        if ($request->disponible == 2) $pub = Pub::findOrFail(357);
        if ($request->disponible == 3) $pub = Pub::findOrFail(354);
        if ($request->disponible == 4) $pub = Pub::findOrFail(358);
        if ($request->disponible == 5) $pub = Pub::findOrFail(355);
        if ($request->disponible == 6) $pub = Pub::findOrFail(359);
        if ($request->disponible == 7) $pub = Pub::findOrFail(356);
        if ($request->disponible == 8) $pub = Pub::findOrFail(360);

        return view('admin.annonceurs.choixannonce.jura.validation', compact('annonceur', 'pub'));
    }
}
