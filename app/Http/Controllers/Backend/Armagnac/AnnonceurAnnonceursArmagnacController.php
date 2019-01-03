<?php

namespace App\Http\Controllers\Backend\Armagnac;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\User;
use App\Annonceur;
use App\Pub;

class AnnonceurAnnonceursArmagnacController extends BackendController
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
     * Affiche la page de réservation du choix de l'Armagnac.
     *
     * @param Pub $pubs
     * @param $id
     * @return view('admin.annonceurs.choixannonce')
    */
    public function armagnac (Request $request, $id)
    {
       // On récupère l'annonceur
       $annonceur = Annonceur::findOrFail($id);

       // On récupère les pubs
       $pubs = Pub::findOrFail([393,394,395,396,397,398,399,400]);

       // On retourne la vue
       return view('admin.annonceurs.choixannonce.armagnac.index', compact('annonceur', 'pubs'));
    }

    /**
     * Valide le choix de la pub de l'Armagnac.
     *
     * @param Requests\DisponibleAnnonceurRequest $request
     * @param $id
     * 
     * @return view('admin.annonceurs.choixannonce.armagnac.validation', compact('annonceur', 'pub'));
    */
    public function validationarmagnac (Requests\DisponibleAnnonceurRequest $request, $id)
    { 
        // On récupère l'annonceur
        $annonceur = Annonceur::findOrFail($id);

        // On récupère le choix de la pub à Bordeaux
        if ($request->disponible == 1) $pub = Pub::findOrFail(393);
        if ($request->disponible == 2) $pub = Pub::findOrFail(397);
        if ($request->disponible == 3) $pub = Pub::findOrFail(394);
        if ($request->disponible == 4) $pub = Pub::findOrFail(398);
        if ($request->disponible == 5) $pub = Pub::findOrFail(395);
        if ($request->disponible == 6) $pub = Pub::findOrFail(399);
        if ($request->disponible == 7) $pub = Pub::findOrFail(396);
        if ($request->disponible == 8) $pub = Pub::findOrFail(400);

        return view('admin.annonceurs.choixannonce.armagnac.validation', compact('annonceur', 'pub'));
    }
}
