<?php

namespace App\Http\Controllers\Backend\Alsace;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\User;
use App\Annonceur;
use App\Pub;

class AnnonceurAnnonceursAlsaceController extends BackendController
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
     * Affiche la page de réservation du choix de l'Alsace.
     *
     * @param Pub $pubs
     * @param $id
     * @return view('admin.annonceurs.choixannonce')
    */
    public function alsace (Request $request, $id)
    {
       // On récupère l'annonceur
       $annonceur = Annonceur::findOrFail($id);

       // On récupère les pubs
       $pubs = Pub::findOrFail([313,314,315,316,317,318,319,320]);

       // On retourne la vue
       return view('admin.annonceurs.choixannonce.alsace.index', compact('annonceur', 'pubs'));
    }

    /**
     * Valide le choix de la pub d'Alsace.
     *
     * @param Requests\DisponibleAnnonceurRequest $request
     * @param $id
     * 
     * @return view('admin.annonceurs.choixannonce.bordeaux.validation', compact('annonceur', 'pub'));
    */
    public function validationalsace (Requests\DisponibleAnnonceurRequest $request, $id)
    { 
        // On récupère l'annonceur
        $annonceur = Annonceur::findOrFail($id);

        // On récupère le choix de la pub à Bordeaux
        if ($request->disponible == 1) $pub = Pub::findOrFail(313);
        if ($request->disponible == 2) $pub = Pub::findOrFail(317);
        if ($request->disponible == 3) $pub = Pub::findOrFail(314);
        if ($request->disponible == 4) $pub = Pub::findOrFail(318);
        if ($request->disponible == 5) $pub = Pub::findOrFail(315);
        if ($request->disponible == 6) $pub = Pub::findOrFail(319);
        if ($request->disponible == 7) $pub = Pub::findOrFail(316);
        if ($request->disponible == 8) $pub = Pub::findOrFail(320);

        return view('admin.annonceurs.choixannonce.alsace.validation', compact('annonceur', 'pub'));
    }

}
