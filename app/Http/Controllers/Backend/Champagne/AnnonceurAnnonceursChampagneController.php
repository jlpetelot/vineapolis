<?php

namespace App\Http\Controllers\Backend\Champagne;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\User;
use App\Annonceur;
use App\Pub;

class AnnonceurAnnonceursChampagneController extends BackendController
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
     * Affiche la page de réservation du choix Champagne.
     *
     * @param Pub $pubs
     * @param $id
     * @return view('admin.annonceurs.choixannonce')
    */
    public function champagne (Request $request, $id)
    {
        // On récupère l'annonceur
        $annonceur = Annonceur::findOrFail($id);

        // On récupère les pubs
        $pubs = Pub::findOrFail([25,26,27,28,29,30,31,32]);

        // On retourne la vue
        return view('admin.annonceurs.choixannonce.champagne.index', compact('annonceur', 'pubs'));
    }

    /**
     * Valide le choix de la pub de Champagne.
     *
     * @param Requests\DisponibleAnnonceurRequest $request
     * @param $id
     * 
     * @return view('admin.annonceurs.choixannonce.champagne.validation', compact('annonceur', 'pub'));
    */
    public function validationchampagne (Requests\DisponibleAnnonceurRequest $request, $id)
    { 
        // On récupère l'annonceur
        $annonceur = Annonceur::findOrFail($id);

        // On récupère le choix de la pub à Bordeaux
        if ($request->disponible == 1) $pub = Pub::findOrFail(25);
        if ($request->disponible == 2) $pub = Pub::findOrFail(26);
        if ($request->disponible == 3) $pub = Pub::findOrFail(30);
        if ($request->disponible == 4) $pub = Pub::findOrFail(27);
        if ($request->disponible == 5) $pub = Pub::findOrFail(28);
        if ($request->disponible == 6) $pub = Pub::findOrFail(31);
        if ($request->disponible == 7) $pub = Pub::findOrFail(29);
        if ($request->disponible == 8) $pub = Pub::findOrFail(32);

        return view('admin.annonceurs.choixannonce.champagne.validation', compact('annonceur', 'pub'));
    }

    /**
     * Affiche la page de réservation du choix de la Vallée de la Marne.
     *
     * @param Pub $pubs
     * @param $id
     * @return view('admin.annonceurs.choixannonce')
    */
    public function valleedelamarne (Request $request, $id)
    {
        // On récupère l'annonceur
        $annonceur = Annonceur::findOrFail($id);

        // On récupère les pubs
        $pubs = Pub::findOrFail([305,306,307,308,309,310,311,312]);

        // On retourne la vue
        return view('admin.annonceurs.choixannonce.champagne.valleedelamarne.index', compact('annonceur', 'pubs'));
    }

    /**
     * Valide le choix de la pub de Vallée de la Marne.
     *
     * @param Requests\DisponibleAnnonceurRequest $request
     * @param $id
     * 
     * @return view('admin.annonceurs.choixannonce.valleedelamarne.validation', compact('annonceur', 'pub'));
    */
    public function validationvalleedelamarne (Requests\DisponibleAnnonceurRequest $request, $id)
    { 
        // On récupère l'annonceur
        $annonceur = Annonceur::findOrFail($id);

        // On récupère le choix de la pub de la Vallée de la Marne
        if ($request->disponible == 1) $pub = Pub::findOrFail(305);
        if ($request->disponible == 2) $pub = Pub::findOrFail(309);
        if ($request->disponible == 3) $pub = Pub::findOrFail(306);
        if ($request->disponible == 4) $pub = Pub::findOrFail(310);
        if ($request->disponible == 5) $pub = Pub::findOrFail(307);
        if ($request->disponible == 6) $pub = Pub::findOrFail(311);
        if ($request->disponible == 7) $pub = Pub::findOrFail(308);
        if ($request->disponible == 8) $pub = Pub::findOrFail(312);

        return view('admin.annonceurs.choixannonce.champagne.valleedelamarne.validation', compact('annonceur', 'pub'));
    }

    /**
     * Affiche la page de réservation du choix de la Montagne de Reims et de la Côte des Blancs.
     *
     * @param Pub $pubs
     * @param $id
     * @return view('admin.annonceurs.choixannonce')
    */
    public function montagnedereimsetcotedesblancs (Request $request, $id)
    {
        // On récupère l'annonceur
        $annonceur = Annonceur::findOrFail($id);

        // On récupère les pubs
        $pubs = Pub::findOrFail([297,298,299,300,301,302,303,304]);

        // On retourne la vue
        return view('admin.annonceurs.choixannonce.champagne.montagnedereimsetcotedesblancs.index', compact('annonceur', 'pubs'));
    }

    /**
     * Valide le choix de la pub de la Montagne de Reims et de la Côte des Blancs.
     *
     * @param Requests\DisponibleAnnonceurRequest $request
     * @param $id
     * 
     * @return view('admin.annonceurs.choixannonce.montagnedereimsetcotedesblancs.validation', compact('annonceur', 'pub'));
    */
    public function validationmontagnedereimsetcotedesblancs (Requests\DisponibleAnnonceurRequest $request, $id)
    { 
        // On récupère l'annonceur
        $annonceur = Annonceur::findOrFail($id);

        // On récupère le choix de la pub de la Montagne de Reims et de la Côte des Blancs
        if ($request->disponible == 1) $pub = Pub::findOrFail(297);
        if ($request->disponible == 2) $pub = Pub::findOrFail(301);
        if ($request->disponible == 3) $pub = Pub::findOrFail(298);
        if ($request->disponible == 4) $pub = Pub::findOrFail(302);
        if ($request->disponible == 5) $pub = Pub::findOrFail(299);
        if ($request->disponible == 6) $pub = Pub::findOrFail(303);
        if ($request->disponible == 7) $pub = Pub::findOrFail(300);
        if ($request->disponible == 8) $pub = Pub::findOrFail(304);

        return view('admin.annonceurs.choixannonce.champagne.montagnedereimsetcotedesblancs.validation', compact('annonceur', 'pub'));
    }

}
