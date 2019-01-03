<?php

namespace App\Http\Controllers\Backend\Corse;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\User;
use App\Annonceur;
use App\Pub;

class AnnonceurAnnonceursCorseController extends BackendController
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
     * Affiche la page de réservation du choix Corse.
     *
     * @param Pub $pubs
     * @param $id
     * @return view('admin.annonceurs.choixannonce.corse.index', compact('annonceur', 'pubs'));
    */
    public function corse (Request $request, $id)
    {
        // On récupère l'annonceur
        $annonceur = Annonceur::findOrFail($id);

        // On récupère les pubs
        $pubs = Pub::findOrFail([425,426,427,428,429,430,431,432]);

        // On retourne la vue
        return view('admin.annonceurs.choixannonce.corse.index', compact('annonceur', 'pubs'));
    }

    /**
     * Valide le choix de la pub de Corse.
     *
     * @param Requests\DisponibleAnnonceurRequest $request
     * @param $id
     * 
     * @return view('admin.annonceurs.choixannonce.corse.validation', compact('annonceur', 'pub'));
    */
    public function validationcorse (Requests\DisponibleAnnonceurRequest $request, $id)
    { 
        // On récupère l'annonceur
        $annonceur = Annonceur::findOrFail($id);

        // On récupère le choix de la pub en Cognace
        if ($request->disponible == 1) $pub = Pub::findOrFail(425);
        if ($request->disponible == 2) $pub = Pub::findOrFail(429);
        if ($request->disponible == 3) $pub = Pub::findOrFail(426);
        if ($request->disponible == 4) $pub = Pub::findOrFail(430);
        if ($request->disponible == 5) $pub = Pub::findOrFail(427);
        if ($request->disponible == 6) $pub = Pub::findOrFail(431);
        if ($request->disponible == 7) $pub = Pub::findOrFail(428);
        if ($request->disponible == 8) $pub = Pub::findOrFail(432);

        return view('admin.annonceurs.choixannonce.corse.validation', compact('annonceur', 'pub'));
    }
}
