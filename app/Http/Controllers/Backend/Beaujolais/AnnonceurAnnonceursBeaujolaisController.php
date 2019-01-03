<?php

namespace App\Http\Controllers\Backend\Beaujolais;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\User;
use App\Annonceur;
use App\Pub;;

class AnnonceurAnnonceursBeaujolaisController extends BackendController
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

    /** Affiche la page de réservation du choix du Beaujolais.
    *
    * @param Pub $pubs
    * @param $id
    * @return view('admin.annonceurs.choixannonce.beaujolais.index', compact('annonceur', 'pubs'));
   */
   public function beaujolais (Request $request, $id)
   {
      // On récupère l'annonceur
      $annonceur = Annonceur::findOrFail($id);

      // On récupère les pubs
      $pubs = Pub::findOrFail([369,370,371,372,373,374,375,376]);

      // On retourne la vue
      return view('admin.annonceurs.choixannonce.beaujolais.index', compact('annonceur', 'pubs'));
   }

   /**
     * Valide le choix de la pub du Beaujolais.
     *
     * @param Requests\DisponibleAnnonceurRequest $request
     * @param $id
     * 
     * @return view('admin.annonceurs.choixannonce.beaujolais.validation', compact('annonceur', 'pub'));
    */
    public function validationbeaujolais (Requests\DisponibleAnnonceurRequest $request, $id)
    { 
        // On récupère l'annonceur
        $annonceur = Annonceur::findOrFail($id);

        // On récupère le choix de la pub en Auvergne
        if ($request->disponible == 1) $pub = Pub::findOrFail(369);
        if ($request->disponible == 2) $pub = Pub::findOrFail(373);
        if ($request->disponible == 3) $pub = Pub::findOrFail(370);
        if ($request->disponible == 4) $pub = Pub::findOrFail(374);
        if ($request->disponible == 5) $pub = Pub::findOrFail(371);
        if ($request->disponible == 6) $pub = Pub::findOrFail(375);
        if ($request->disponible == 7) $pub = Pub::findOrFail(372);
        if ($request->disponible == 8) $pub = Pub::findOrFail(376);

        return view('admin.annonceurs.choixannonce.beaujolais.validation', compact('annonceur', 'pub'));
    }
}
