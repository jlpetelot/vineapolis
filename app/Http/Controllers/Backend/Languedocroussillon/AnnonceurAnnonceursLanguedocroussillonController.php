<?php

namespace App\Http\Controllers\Backend\Languedocroussillon;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\User;
use App\Annonceur;
use App\Pub;

class AnnonceurAnnonceursLanguedocroussillonController extends BackendController
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
     * Affiche la page de réservation du choix du Languedoc-Roussillon.
     *
     * @param Pub $pubs
     * @param $id
     * @return view('admin.annonceurs.choixannonce.languedocroussillon.index', compact('annonceur', 'pubs'));
    */
    public function languedocroussillon (Request $request, $id)
    {
        // On récupère l'annonceur
        $annonceur = Annonceur::findOrFail($id);

        // On récupère les pubs
        $pubs = Pub::findOrFail([361,362,363,364,365,366,367,368]);

        // On retourne la vue
        return view('admin.annonceurs.choixannonce.languedocroussillon.index', compact('annonceur', 'pubs'));
    }

    /**
     * Valide le choix de la pub du Languedoc-Roussillon.
     *
     * @param Requests\DisponibleAnnonceurRequest $request
     * @param $id
     * 
     * @return view('admin.annonceurs.choixannonce.languedocroussillon.validation', compact('annonceur', 'pub'));
    */
    public function validationlanguedocroussillon (Requests\DisponibleAnnonceurRequest $request, $id)
    { 
        // On récupère l'annonceur
        $annonceur = Annonceur::findOrFail($id);

        // On récupère le choix de la pub en Jura
        if ($request->disponible == 1) $pub = Pub::findOrFail(361);
        if ($request->disponible == 2) $pub = Pub::findOrFail(365);
        if ($request->disponible == 3) $pub = Pub::findOrFail(362);
        if ($request->disponible == 4) $pub = Pub::findOrFail(366);
        if ($request->disponible == 5) $pub = Pub::findOrFail(363);
        if ($request->disponible == 6) $pub = Pub::findOrFail(367);
        if ($request->disponible == 7) $pub = Pub::findOrFail(364);
        if ($request->disponible == 8) $pub = Pub::findOrFail(368);

        return view('admin.annonceurs.choixannonce.languedocroussillon.validation', compact('annonceur', 'pub'));
    }
}
