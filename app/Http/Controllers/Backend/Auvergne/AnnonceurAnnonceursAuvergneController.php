<?php

namespace App\Http\Controllers\Backend\Auvergne;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\User;
use App\Annonceur;
use App\Pub;

class AnnonceurAnnonceursAuvergneController extends BackendController
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
     * Affiche la page de réservation du choix de l'Auvergne.
     *
     * @param Pub $pubs
     * @param $id
     * @return view('admin.annonceurs.choixannonce.armagnac.index', compact('annonceur', 'pubs'));
    */
    public function auvergne (Request $request, $id)
    {
       // On récupère l'annonceur
       $annonceur = Annonceur::findOrFail($id);

       // On récupère les pubs
       $pubs = Pub::findOrFail([409,410,411,412,413,414,415,416]);

       // On retourne la vue
       return view('admin.annonceurs.choixannonce.auvergne.index', compact('annonceur', 'pubs'));
    }

    /**
     * Valide le choix de la pub de l'Auvergne.
     *
     * @param Requests\DisponibleAnnonceurRequest $request
     * @param $id
     * 
     * @return view('admin.annonceurs.choixannonce.auvergne.validation', compact('annonceur', 'pub'));
    */
    public function validationauvergne (Requests\DisponibleAnnonceurRequest $request, $id)
    { 
        // On récupère l'annonceur
        $annonceur = Annonceur::findOrFail($id);

        // On récupère le choix de la pub en Auvergne
        if ($request->disponible == 1) $pub = Pub::findOrFail(409);
        if ($request->disponible == 2) $pub = Pub::findOrFail(413);
        if ($request->disponible == 3) $pub = Pub::findOrFail(410);
        if ($request->disponible == 4) $pub = Pub::findOrFail(414);
        if ($request->disponible == 5) $pub = Pub::findOrFail(411);
        if ($request->disponible == 6) $pub = Pub::findOrFail(415);
        if ($request->disponible == 7) $pub = Pub::findOrFail(412);
        if ($request->disponible == 8) $pub = Pub::findOrFail(416);

        return view('admin.annonceurs.choixannonce.auvergne.validation', compact('annonceur', 'pub'));
    }
}
