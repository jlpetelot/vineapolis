<?php

namespace App\Http\Controllers\Backend\Sudouest;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\User;
use App\Annonceur;
use App\Pub;

class AnnonceurAnnonceursSudouestController extends BackendController
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
     * Affiche la page de réservation du choix Sud-Ouest.
    *
    * @param Pub $pubs
    * @param $id
    * @return view('admin.annonceurs.choixannonce')
    */
    public function sudouest (Request $request, $id)
    {
    // On récupère l'annonceur
    $annonceur = Annonceur::findOrFail($id);

        // On récupère les pubs
        $pubs = Pub::findOrFail([49,50,51,52,53,54,55,56]);

        // On retourne la vue
        return view('admin.annonceurs.choixannonce.sudouest.index', compact('annonceur', 'pubs'));
    }


    /**
     * Valide le choix de la pub du Sud-Ouest.
     *
     * @param Requests\DisponibleAnnonceurRequest $request
     * @param $id
     * 
     * @return view('admin.annonceurs.choixannonce.sudouest.validation', compact('annonceur', 'pub'));
    */
    public function validationsudouest (Requests\DisponibleAnnonceurRequest $request, $id)
    { 
        // On récupère l'annonceur
        $annonceur = Annonceur::findOrFail($id);

        // On récupère le choix de la pub du Sud-Ouest
        if ($request->disponible == 1) $pub = Pub::findOrFail(49);
        if ($request->disponible == 2) $pub = Pub::findOrFail(50);
        if ($request->disponible == 3) $pub = Pub::findOrFail(54);
        if ($request->disponible == 4) $pub = Pub::findOrFail(51);
        if ($request->disponible == 5) $pub = Pub::findOrFail(52);
        if ($request->disponible == 6) $pub = Pub::findOrFail(55);
        if ($request->disponible == 7) $pub = Pub::findOrFail(53);
        if ($request->disponible == 8) $pub = Pub::findOrFail(56);

        return view('admin.annonceurs.choixannonce.sudouest.validation', compact('annonceur', 'pub'));
    }

    /**
     * Affiche la page de réservation du choix Aveyron.
    *
    * @param Pub $pubs
    * @param $id
    * @return view('admin.annonceurs.choixannonce')
    */
    public function aveyron (Request $request, $id)
    {
    // On récupère l'annonceur
    $annonceur = Annonceur::findOrFail($id);

        // On récupère les pubs
        $pubs = Pub::findOrFail([401,402,403,404,405,406,407,408]);

        // On retourne la vue
        return view('admin.annonceurs.choixannonce.sudouest.aveyron.index', compact('annonceur', 'pubs'));
    }


    /**
     * Valide le choix de la pub du Aveyron.
     *
     * @param Requests\DisponibleAnnonceurRequest $request
     * @param $id
     * 
     * @return view('admin.annonceurs.choixannonce.aveyron.validation', compact('annonceur', 'pub'));
    */
    public function validationaveyron (Requests\DisponibleAnnonceurRequest $request, $id)
    { 
        // On récupère l'annonceur
        $annonceur = Annonceur::findOrFail($id);

        // On récupère le choix de la pub de l'Aveyron
        if ($request->disponible == 1) $pub = Pub::findOrFail(401);
        if ($request->disponible == 2) $pub = Pub::findOrFail(402);
        if ($request->disponible == 3) $pub = Pub::findOrFail(403);
        if ($request->disponible == 4) $pub = Pub::findOrFail(404);
        if ($request->disponible == 5) $pub = Pub::findOrFail(405);
        if ($request->disponible == 6) $pub = Pub::findOrFail(406);
        if ($request->disponible == 7) $pub = Pub::findOrFail(407);
        if ($request->disponible == 8) $pub = Pub::findOrFail(408);

        return view('admin.annonceurs.choixannonce.sudouest.aveyron.validation', compact('annonceur', 'pub'));
    }

}
