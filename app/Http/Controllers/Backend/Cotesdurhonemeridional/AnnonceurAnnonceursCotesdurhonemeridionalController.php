<?php

namespace App\Http\Controllers\Backend\Cotesdurhonemeridional;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\User;
use App\Annonceur;
use App\Pub;

class AnnonceurAnnonceursCotesdurhonemeridionalController extends BackendController
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
     * Affiche la page de réservation du choix des Côtes du Rhône Méridional.
     *
     * @param Pub $pubs
     * @param $id
     * @return view('admin.annonceurs.choixannonce.cotesdurhonemeridional.index', compact('annonceur', 'pubs'));
    */
    public function cotesdurhonemeridional (Request $request, $id)
    {
        // On récupère l'annonceur
        $annonceur = Annonceur::findOrFail($id);

        // On récupère les pubs
        $pubs = Pub::findOrFail([257,258,259,260,261,262,263,264]);

        // On retourne la vue
        return view('admin.annonceurs.choixannonce.cotesdurhonemeridional.index', compact('annonceur', 'pubs'));
    }

    /**
     * Valide le choix de la pub de des Côtes du Rhône Méridional.
     *
     * @param Requests\DisponibleAnnonceurRequest $request
     * @param $id
     * 
     * @return view('admin.annonceurs.choixannonce.cotesdurhonemeridional.validation', compact('annonceur', 'pub'));
    */
    public function validationcotesdurhonemeridional (Requests\DisponibleAnnonceurRequest $request, $id)
    { 
        // On récupère l'annonceur
        $annonceur = Annonceur::findOrFail($id);

        // On récupère le choix de la pub en Cognace
        if ($request->disponible == 1) $pub = Pub::findOrFail(257);
        if ($request->disponible == 2) $pub = Pub::findOrFail(261);
        if ($request->disponible == 3) $pub = Pub::findOrFail(258);
        if ($request->disponible == 4) $pub = Pub::findOrFail(262);
        if ($request->disponible == 5) $pub = Pub::findOrFail(259);
        if ($request->disponible == 6) $pub = Pub::findOrFail(263);
        if ($request->disponible == 7) $pub = Pub::findOrFail(260);
        if ($request->disponible == 8) $pub = Pub::findOrFail(264);

        return view('admin.annonceurs.choixannonce.cotesdurhonemeridional.validation', compact('annonceur', 'pub'));
    }
}
