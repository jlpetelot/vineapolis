<?php

namespace App\Http\Controllers\Backend\Touslesvins;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\User;
use App\Annonceur;
use App\Pub;

class AnnonceurAnnonceursTouslesvinsController extends BackendController
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
     * Affiche la page de réservation du choix de Tous les vins.
    *
    * @param Pub $pubs
    * @param $id
    * @return view('admin.annonceurs.choixannonce')
    */
    public function touslesvins (Request $request, $id)
    {
    // On récupère l'annonceur
    $annonceur = Annonceur::findOrFail($id);

        // On récupère les pubs
        $pubs = Pub::findOrFail([73,74,75,76,77,78,79,80]);

        // On retourne la vue
        return view('admin.annonceurs.choixannonce.touslesvins.index', compact('annonceur', 'pubs'));
    }

    /**
     * Valide le choix de la pub du de Tous les vins.
     *
     * @param Requests\DisponibleAnnonceurRequest $request
     * @param $id
     * 
     * @return view('admin.annonceurs.choixannonce.touslesvins.validation', compact('annonceur', 'pub'));
    */
    public function validationtouslesvins (Requests\DisponibleAnnonceurRequest $request, $id)
    { 
        // On récupère l'annonceur
        $annonceur = Annonceur::findOrFail($id);

        // On récupère le choix de la pub du Sud-Ouest
        if ($request->disponible == 1) $pub = Pub::findOrFail(73);
        if ($request->disponible == 2) $pub = Pub::findOrFail(77);
        if ($request->disponible == 3) $pub = Pub::findOrFail(74);
        if ($request->disponible == 4) $pub = Pub::findOrFail(78);
        if ($request->disponible == 5) $pub = Pub::findOrFail(75);
        if ($request->disponible == 6) $pub = Pub::findOrFail(79);
        if ($request->disponible == 7) $pub = Pub::findOrFail(76);
        if ($request->disponible == 8) $pub = Pub::findOrFail(80);

        return view('admin.annonceurs.choixannonce.touslesvins.validation', compact('annonceur', 'pub'));
    }
    

}
