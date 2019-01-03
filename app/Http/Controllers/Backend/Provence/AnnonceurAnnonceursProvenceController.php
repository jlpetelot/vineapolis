<?php

namespace App\Http\Controllers\Backend\Provence;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\User;
use App\Annonceur;
use App\Pub;

class AnnonceurAnnonceursProvenceController extends BackendController
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
     * Affiche la page de réservation de la Provence.
     *
     * @param Pub $pubs
     * @param $id
     * @return view('admin.annonceurs.choixannonce')
    */
    public function provence (Request $request, $id)
    {
        // On récupère l'annonceur
        $annonceur = Annonceur::findOrFail($id);

        // On récupère les pubs
        $pubs = Pub::findOrFail([433,434,435,436,437,438,439,440]);

        // On retourne la vue
        return view('admin.annonceurs.choixannonce.provence.index', compact('annonceur', 'pubs'));
    }

    /**
     * Valide le choix de la pub de la Provence.
     *
     * @param Requests\DisponibleAnnonceurRequest $request
     * @param $id
     * 
     * @return view('admin.annonceurs.choixannonce.bordeaux.validation', compact('annonceur', 'pub'));
    */
    public function validationprovence (Requests\DisponibleAnnonceurRequest $request, $id)
    { 
        // On récupère l'annonceur
        $annonceur = Annonceur::findOrFail($id);

        // On récupère le choix de la pub de la Provence
        if ($request->disponible == 1) $pub = Pub::findOrFail(433);
        if ($request->disponible == 2) $pub = Pub::findOrFail(437);
        if ($request->disponible == 3) $pub = Pub::findOrFail(434);
        if ($request->disponible == 4) $pub = Pub::findOrFail(438);
        if ($request->disponible == 5) $pub = Pub::findOrFail(435);
        if ($request->disponible == 6) $pub = Pub::findOrFail(439);
        if ($request->disponible == 7) $pub = Pub::findOrFail(436);
        if ($request->disponible == 8) $pub = Pub::findOrFail(440);

        return view('admin.annonceurs.choixannonce.provence.validation', compact('annonceur', 'pub'));
    }
}
