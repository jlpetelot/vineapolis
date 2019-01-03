<?php

namespace App\Http\Controllers\Backend\Bugey;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\User;
use App\Annonceur;
use App\Pub;

class AnnonceurAnnonceursBugeyController extends BackendController
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
     * Affiche la page de réservation du choix Bugey.
     *
     * @param Pub $pubs
     * @param $id
     * @return view('admin.annonceurs.choixannonce')
    */
    public function bugey (Request $request, $id)
    {
        // On récupère l'annonceur
        $annonceur = Annonceur::findOrFail($id);

        // On récupère les pubs
        $pubs = Pub::findOrFail([249,250,251,252,253,254,255,256]);

        // On retourne la vue
        return view('admin.annonceurs.choixannonce.bugey.index', compact('annonceur', 'pubs'));
    }

    /**
     * Valide le choix de la pub de Bugey.
     *
     * @param Requests\DisponibleAnnonceurRequest $request
     * @param $id
     * 
     * @return view('admin.annonceurs.choixannonce.bordeaux.validation', compact('annonceur', 'pub'));
    */
    public function validationbugey (Requests\DisponibleAnnonceurRequest $request, $id)
    { 
        // On récupère l'annonceur
        $annonceur = Annonceur::findOrFail($id);

        // On récupère le choix de la pub en Bugey
        if ($request->disponible == 1) $pub = Pub::findOrFail(249);
        if ($request->disponible == 2) $pub = Pub::findOrFail(253);
        if ($request->disponible == 3) $pub = Pub::findOrFail(250);
        if ($request->disponible == 4) $pub = Pub::findOrFail(254);
        if ($request->disponible == 5) $pub = Pub::findOrFail(251);
        if ($request->disponible == 6) $pub = Pub::findOrFail(255);
        if ($request->disponible == 7) $pub = Pub::findOrFail(252);
        if ($request->disponible == 8) $pub = Pub::findOrFail(256);

        return view('admin.annonceurs.choixannonce.bugey.validation', compact('annonceur', 'pub'));
    }
}
