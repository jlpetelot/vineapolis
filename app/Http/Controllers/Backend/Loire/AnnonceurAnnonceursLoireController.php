<?php

namespace App\Http\Controllers\Backend\Loire;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\User;
use App\Annonceur;
use App\Pub;

class AnnonceurAnnonceursLoireController extends BackendController
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
     * Affiche la page de réservation du choix de la Loire.
    *
    * @param Pub $pubs
    * @param $id
    * @return view('admin.annonceurs.choixannonce')
    */
    public function loire (Request $request, $id)
    {
        // On récupère le l'annonceur
        $annonceur = Annonceur::findOrFail($id);

        // On récupère les pubs
        $pubs = Pub::findOrFail([33,34,35,36,37,38,39,40]);

        // On retourne la vue
        return view('admin.annonceurs.choixannonce.loire.index', compact('annonceur', 'pubs'));
    }

    /**
     * Valide le choix de la pub de la Loire.
    *
    * @param Requests\DisponibleAnnonceurRequest $request
    * @param $id
    * 
    * @return view('admin.annonceurs.choixannonce.loire.validation', compact('annonceur', 'pub'));
    */
    public function validationloire (Requests\DisponibleAnnonceurRequest $request, $id)
    { 
        // On récupère le l'annonceur
        $annonceur = Annonceur::findOrFail($id);

        // On récupère le choix de la pub de la Loire
        if ($request->disponible == 1) $pub = Pub::findOrFail(33);
        if ($request->disponible == 2) $pub = Pub::findOrFail(34);
        if ($request->disponible == 3) $pub = Pub::findOrFail(38);
        if ($request->disponible == 4) $pub = Pub::findOrFail(35);
        if ($request->disponible == 5) $pub = Pub::findOrFail(36);
        if ($request->disponible == 6) $pub = Pub::findOrFail(39);
        if ($request->disponible == 7) $pub = Pub::findOrFail(37);
        if ($request->disponible == 8) $pub = Pub::findOrFail(40);

        return view('admin.annonceurs.choixannonce.loire.validation', compact('annonceur', 'pub'));
    }

    /**
     * Affiche la page de réservation du choix de Pouilly.
    *
    * @param Pub $pubs
    * @param $id
    * @return view('admin.annonceurs.choixannonce')
    */
    public function pouilly (Request $request, $id)
    {
        // On récupère le l'annonceur
        $annonceur = Annonceur::findOrFail($id);

        // On récupère les pubs
        $pubs = Pub::findOrFail([321,322,323,324,325,326,327,328]);

        // On retourne la vue
        return view('admin.annonceurs.choixannonce.loire.pouilly.index', compact('annonceur', 'pubs'));
    }

    /**
     * Valide le choix de la pub de Pouilly.
    *
    * @param Requests\DisponibleAnnonceurRequest $request
    * @param $id
    * 
    * @return view('admin.annonceurs.choixannonce.pouilly.validation', compact('annonceur', 'pub'));
    */
    public function validationpouilly (Requests\DisponibleAnnonceurRequest $request, $id)
    { 
        // On récupère le l'annonceur
        $annonceur = Annonceur::findOrFail($id);

        // On récupère le choix de la pub de Pouilly
        if ($request->disponible == 1) $pub = Pub::findOrFail(321);
        if ($request->disponible == 2) $pub = Pub::findOrFail(325);
        if ($request->disponible == 3) $pub = Pub::findOrFail(322);
        if ($request->disponible == 4) $pub = Pub::findOrFail(326);
        if ($request->disponible == 5) $pub = Pub::findOrFail(323);
        if ($request->disponible == 6) $pub = Pub::findOrFail(327);
        if ($request->disponible == 7) $pub = Pub::findOrFail(324);
        if ($request->disponible == 8) $pub = Pub::findOrFail(328);

        return view('admin.annonceurs.choixannonce.loire.pouilly.validation', compact('annonceur', 'pub'));
    }

    /**
     * Affiche la page de réservation du choix de Quincy et Reuilly.
    *
    * @param Pub $pubs
    * @param $id
    * @return view('admin.annonceurs.choixannonce')
    */
    public function quincyetreuilly (Request $request, $id)
    {
        // On récupère le l'annonceur
        $annonceur = Annonceur::findOrFail($id);

        // On récupère les pubs
        $pubs = Pub::findOrFail([329,330,331,332,333,334,335,336]);

        // On retourne la vue
        return view('admin.annonceurs.choixannonce.loire.quincyetreuilly.index', compact('annonceur', 'pubs'));
    }

    /**
     * Valide le choix de la pub de Quincy et Reuilly.
    *
    * @param Requests\DisponibleAnnonceurRequest $request
    * @param $id
    * 
    * @return view('admin.annonceurs.choixannonce.quincyetreuilly.validation', compact('annonceur', 'pub'));
    */
    public function validationquincyetreuilly (Requests\DisponibleAnnonceurRequest $request, $id)
    { 
        // On récupère le l'annonceur
        $annonceur = Annonceur::findOrFail($id);

        // On récupère le choix de la pub de Quincy et Reuilly
        if ($request->disponible == 1) $pub = Pub::findOrFail(329);
        if ($request->disponible == 2) $pub = Pub::findOrFail(333);
        if ($request->disponible == 3) $pub = Pub::findOrFail(330);
        if ($request->disponible == 4) $pub = Pub::findOrFail(334);
        if ($request->disponible == 5) $pub = Pub::findOrFail(331);
        if ($request->disponible == 6) $pub = Pub::findOrFail(335);
        if ($request->disponible == 7) $pub = Pub::findOrFail(332);
        if ($request->disponible == 8) $pub = Pub::findOrFail(336);

        return view('admin.annonceurs.choixannonce.loire.quincyetreuilly.validation', compact('annonceur', 'pub'));
    }

    /**
     * Affiche la page de réservation du choix de Sancerre et Menetou-Salon.
    *
    * @param Pub $pubs
    * @param $id
    * @return view('admin.annonceurs.choixannonce')
    */
    public function sancerreetmenetousalon (Request $request, $id)
    {
        // On récupère le l'annonceur
        $annonceur = Annonceur::findOrFail($id);

        // On récupère les pubs
        $pubs = Pub::findOrFail([337,338,339,340,341,342,343,344]);

        // On retourne la vue
        return view('admin.annonceurs.choixannonce.loire.sancerreetmenetousalon.index', compact('annonceur', 'pubs'));
    }

    /**
     * Valide le choix de la pub de Sancerre et Menetou-Salon.
    *
    * @param Requests\DisponibleAnnonceurRequest $request
    * @param $id
    * 
    * @return view('admin.annonceurs.choixannonce.sancerreetmenetousalon.validation', compact('annonceur', 'pub'));
    */
    public function validationsancerreetmenetousalon (Requests\DisponibleAnnonceurRequest $request, $id)
    { 
        // On récupère le l'annonceur
        $annonceur = Annonceur::findOrFail($id);

        // On récupère le choix de la pub de Sancerre et Menetou-Salon
        if ($request->disponible == 1) $pub = Pub::findOrFail(337);
        if ($request->disponible == 2) $pub = Pub::findOrFail(341);
        if ($request->disponible == 3) $pub = Pub::findOrFail(338);
        if ($request->disponible == 4) $pub = Pub::findOrFail(342);
        if ($request->disponible == 5) $pub = Pub::findOrFail(339);
        if ($request->disponible == 6) $pub = Pub::findOrFail(343);
        if ($request->disponible == 7) $pub = Pub::findOrFail(340);
        if ($request->disponible == 8) $pub = Pub::findOrFail(344);

        return view('admin.annonceurs.choixannonce.loire.sancerreetmenetousalon.validation', compact('annonceur', 'pub'));
    }

    /**
     * Affiche la page de réservation du choix de Saumur-Champigny.
    *
    * @param Pub $pubs
    * @param $id
    * @return view('admin.annonceurs.choixannonce')
    */
    public function saumurchampigny (Request $request, $id)
    {
        // On récupère le l'annonceur
        $annonceur = Annonceur::findOrFail($id);

        // On récupère les pubs
        $pubs = Pub::findOrFail([345,346,347,348,349,350,351,352]);

        // On retourne la vue
        return view('admin.annonceurs.choixannonce.loire.saumurchampigny.index', compact('annonceur', 'pubs'));
    }

    /**
     * Valide le choix de la pub de Saumur-Champigny.
    *
    * @param Requests\DisponibleAnnonceurRequest $request
    * @param $id
    * 
    * @return view('admin.annonceurs.choixannonce.saumurchampigny.validation', compact('annonceur', 'pub'));
    */
    public function validationsaumurchampigny (Requests\DisponibleAnnonceurRequest $request, $id)
    { 
        // On récupère le l'annonceur
        $annonceur = Annonceur::findOrFail($id);

        // On récupère le choix de la pub de Saumur-Champigny
        if ($request->disponible == 1) $pub = Pub::findOrFail(345);
        if ($request->disponible == 2) $pub = Pub::findOrFail(349);
        if ($request->disponible == 3) $pub = Pub::findOrFail(346);
        if ($request->disponible == 4) $pub = Pub::findOrFail(350);
        if ($request->disponible == 5) $pub = Pub::findOrFail(347);
        if ($request->disponible == 6) $pub = Pub::findOrFail(351);
        if ($request->disponible == 7) $pub = Pub::findOrFail(348);
        if ($request->disponible == 8) $pub = Pub::findOrFail(352);

        return view('admin.annonceurs.choixannonce.loire.saumurchampigny.validation', compact('annonceur', 'pub'));
    }
}
