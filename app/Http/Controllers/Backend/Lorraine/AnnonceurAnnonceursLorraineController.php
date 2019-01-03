<?php

namespace App\Http\Controllers\Backend\Lorraine;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\User;
use App\Annonceur;
use App\Pub;

class AnnonceurAnnonceursLorraineController extends BackendController
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
     * Affiche la page de réservation de la Lorraine.
     *
     * @param Pub $pubs
     * @param $id
     * @return view('admin.annonceurs.choixannonce')
    */
    public function lorraine (Request $request, $id)
    {
        // On récupère l'annonceur
        $annonceur = Annonceur::findOrFail($id);

        // On récupère les pubs
        $pubs = Pub::findOrFail([377,378,379,380,381,382,383,384]);

        // On retourne la vue
        return view('admin.annonceurs.choixannonce.lorraine.index', compact('annonceur', 'pubs'));
    }

    /**
     * Valide le choix de la pub de la Lorraine.
     *
     * @param Requests\DisponibleAnnonceurRequest $request
     * @param $id
     * 
     * @return view('admin.annonceurs.choixannonce.bordeaux.validation', compact('annonceur', 'pub'));
    */
    public function validationlorraine (Requests\DisponibleAnnonceurRequest $request, $id)
    { 
        // On récupère l'annonceur
        $annonceur = Annonceur::findOrFail($id);

        // On récupère le choix de la pub lorraine
        if ($request->disponible == 1) $pub = Pub::findOrFail(377);
        if ($request->disponible == 2) $pub = Pub::findOrFail(381);
        if ($request->disponible == 3) $pub = Pub::findOrFail(378);
        if ($request->disponible == 4) $pub = Pub::findOrFail(382);
        if ($request->disponible == 5) $pub = Pub::findOrFail(379);
        if ($request->disponible == 6) $pub = Pub::findOrFail(383);
        if ($request->disponible == 7) $pub = Pub::findOrFail(380);
        if ($request->disponible == 8) $pub = Pub::findOrFail(384);

        return view('admin.annonceurs.choixannonce.lorraine.validation', compact('annonceur', 'pub'));
    }
}
