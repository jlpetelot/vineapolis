<?php

namespace App\Http\Controllers\Backend\Savoie;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\User;
use App\Annonceur;
use App\Pub;

class AnnonceurAnnonceursSavoieController extends BackendController
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
     * Affiche la page de réservation de la Savoie.
     *
     * @param Pub $pubs
     * @param $id
     * @return view('admin.annonceurs.choixannonce')
    */
    public function savoie (Request $request, $id)
    {
        // On récupère l'annonceur
        $annonceur = Annonceur::findOrFail($id);

        // On récupère les pubs
        $pubs = Pub::findOrFail([417,418,419,420,421,422,423,424]);

        // On retourne la vue
        return view('admin.annonceurs.choixannonce.savoie.index', compact('annonceur', 'pubs'));
    }

    /**
     * Valide le choix de la pub de la Savoie.
     *
     * @param Requests\DisponibleAnnonceurRequest $request
     * @param $id
     * 
     * return view('admin.annonceurs.choixannonce.savoie.validation', compact('annonceur', 'pub'));
    */
    public function validationsavoie (Requests\DisponibleAnnonceurRequest $request, $id)
    { 
        // On récupère l'annonceur
        $annonceur = Annonceur::findOrFail($id);

        // On récupère le choix de la pub de la Savoie
        if ($request->disponible == 1) $pub = Pub::findOrFail(417);
        if ($request->disponible == 2) $pub = Pub::findOrFail(421);
        if ($request->disponible == 3) $pub = Pub::findOrFail(418);
        if ($request->disponible == 4) $pub = Pub::findOrFail(422);
        if ($request->disponible == 5) $pub = Pub::findOrFail(419);
        if ($request->disponible == 6) $pub = Pub::findOrFail(423);
        if ($request->disponible == 7) $pub = Pub::findOrFail(420);
        if ($request->disponible == 8) $pub = Pub::findOrFail(424);

        return view('admin.annonceurs.choixannonce.savoie.validation', compact('annonceur', 'pub'));
    }
}
