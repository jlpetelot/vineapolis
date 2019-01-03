<?php

namespace App\Http\Controllers\Backend\Cognac;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\User;
use App\Annonceur;
use App\Pub;

class AnnonceurAnnonceursCognacController extends BackendController
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
     * Affiche la page de réservation du choix Cognac.
     *
     * @param Pub $pubs
     * @param $id
     * @return view('admin.annonceurs.choixannonce.cognac.index', compact('annonceur', 'pubs'));
    */
    public function cognac (Request $request, $id)
    {
        // On récupère l'annonceur
        $annonceur = Annonceur::findOrFail($id);

        // On récupère les pubs
        $pubs = Pub::findOrFail([385,386,387,388,389,390,391,392]);

        // On retourne la vue
        return view('admin.annonceurs.choixannonce.cognac.index', compact('annonceur', 'pubs'));
    }

    /**
     * Valide le choix de la pub de Cognac.
     *
     * @param Requests\DisponibleAnnonceurRequest $request
     * @param $id
     * 
     * @return view('admin.annonceurs.choixannonce.cognac.validation', compact('annonceur', 'pub'));
    */
    public function validationcognac (Requests\DisponibleAnnonceurRequest $request, $id)
    { 
        // On récupère l'annonceur
        $annonceur = Annonceur::findOrFail($id);

        // On récupère le choix de la pub en Cognace
        if ($request->disponible == 1) $pub = Pub::findOrFail(385);
        if ($request->disponible == 2) $pub = Pub::findOrFail(389);
        if ($request->disponible == 3) $pub = Pub::findOrFail(386);
        if ($request->disponible == 4) $pub = Pub::findOrFail(390);
        if ($request->disponible == 5) $pub = Pub::findOrFail(387);
        if ($request->disponible == 6) $pub = Pub::findOrFail(391);
        if ($request->disponible == 7) $pub = Pub::findOrFail(388);
        if ($request->disponible == 8) $pub = Pub::findOrFail(392);

        return view('admin.annonceurs.choixannonce.cognac.validation', compact('annonceur', 'pub'));
    }
}
