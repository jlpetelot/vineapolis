<?php

namespace App\Http\Controllers\Backend\Bordeaux;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\User;
use App\Annonceur;
use App\Pub;

class AnnonceurAnnonceursBordeauxController extends BackendController
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
     * Affiche la page de réservation du choix Bordeaux.
     *
     * @param Pub $pubs
     * @param $id
     * @return view('admin.annonceurs.choixannonce')
    */
    public function bordeaux (Request $request, $id)
    {
        // On récupère le logué
        $annonceur = Annonceur::findOrFail($id);

        // On récupère les pubs
        $pubs = Pub::findOrFail([17,18,19,20,21,22,23,24]);

        // On retourne la vue
        return view('admin.annonceurs.choixannonce.bordeaux.index', compact('annonceur', 'pubs'));
    }

    /**
     * Valide le choix de la pub de Bordeaux.
     *
     * @param Requests\DisponibleAnnonceurRequest $request
     * @param $id
     * 
     * @return view('admin.annonceurs.choixannonce.bordeaux.validation', compact('annonceur', 'pub'));
    */
    public function validationbordeaux (Requests\DisponibleAnnonceurRequest $request, $id)
    { 
        // On récupère le logué
        $annonceur = Annonceur::findOrFail($id);

        // On récupère le choix de la pub à Bordeaux
        if ($request->disponible == 1) $pub = Pub::findOrFail(17);
        if ($request->disponible == 2) $pub = Pub::findOrFail(18);
        if ($request->disponible == 3) $pub = Pub::findOrFail(22);
        if ($request->disponible == 4) $pub = Pub::findOrFail(19);
        if ($request->disponible == 5) $pub = Pub::findOrFail(20);
        if ($request->disponible == 6) $pub = Pub::findOrFail(23);
        if ($request->disponible == 7) $pub = Pub::findOrFail(21);
        if ($request->disponible == 8) $pub = Pub::findOrFail(24);

        return view('admin.annonceurs.choixannonce.bordeaux.validation', compact('annonceur', 'pub'));
    }

    /**
     * Affiche la page de réservation du Médoc.
     *
     * @param Pub $pubs
     * @param $id
     * @return view('admin.annonceurs.choixannonce')
    */
    public function medoc (Request $request, $id)
    {
        // On récupère l'annonceur
       $annonceur = Annonceur::findOrFail($id);

        // On récupère les pubs
        $pubs = Pub::findOrFail([201,202,203,204,205,206,207,208]);

        // On retourne la vue
        return view('admin.annonceurs.choixannonce.bordeaux.medoc.index', compact('annonceur', 'pubs'));
    }

    /**
     * Valide le choix du Médoc.
     *
     * @param Requests\DisponibleAnnonceurRequest $request
     * @param $id
     * 
     * @return view('admin.annonceurs.choixannonce.bordeaux.validation', compact('annonceur', 'pub'));
    */
    public function validationmedoc (Requests\DisponibleAnnonceurRequest $request, $id)
    { 
       // On récupère l'annonceur
       $annonceur = Annonceur::findOrFail($id);

        // On récupère le choix de la pub en Médoc
        if ($request->disponible == 1) $pub = Pub::findOrFail(201);
        if ($request->disponible == 2) $pub = Pub::findOrFail(202);
        if ($request->disponible == 3) $pub = Pub::findOrFail(206);
        if ($request->disponible == 4) $pub = Pub::findOrFail(203);
        if ($request->disponible == 5) $pub = Pub::findOrFail(204);
        if ($request->disponible == 6) $pub = Pub::findOrFail(207);
        if ($request->disponible == 7) $pub = Pub::findOrFail(205);
        if ($request->disponible == 8) $pub = Pub::findOrFail(208);

        return view('admin.annonceurs.choixannonce.bordeaux.validation', compact('annonceur', 'pub'));
    }

     /**
     * Affiche la page de réservation de Margaux.
     *
     * @param Pub $pubs
     * @param $id
     * @return view('admin.annonceurs.choixannonce.bordeaux.margaux.index', compact('annonceur', 'pubs'));
    */
    public function margaux (Request $request, $id)
    {
        // On récupère l'annonceur
       $annonceur = Annonceur::findOrFail($id);

        // On récupère les pubs
        $pubs = Pub::findOrFail([209,210,211,212,213,214,215,216]);

        // On retourne la vue
        return view('admin.annonceurs.choixannonce.bordeaux.margaux.index', compact('annonceur', 'pubs'));
    }

     /**
     * Valide le choix du Médoc.
     *
     * @param Requests\DisponibleAnnonceurRequest $request
     * @param $id
     * 
     * @return view('admin.annonceurs.choixannonce.bordeaux.validation', compact('annonceur', 'pub'));
    */
    public function validationmargaux (Requests\DisponibleAnnonceurRequest $request, $id)
    { 
       // On récupère l'annonceur
       $annonceur = Annonceur::findOrFail($id);

        // On récupère le choix de la pub en Médoc
        if ($request->disponible == 1) $pub = Pub::findOrFail(209);
        if ($request->disponible == 2) $pub = Pub::findOrFail(213);
        if ($request->disponible == 3) $pub = Pub::findOrFail(210);
        if ($request->disponible == 4) $pub = Pub::findOrFail(214);
        if ($request->disponible == 5) $pub = Pub::findOrFail(211);
        if ($request->disponible == 6) $pub = Pub::findOrFail(215);
        if ($request->disponible == 7) $pub = Pub::findOrFail(212);
        if ($request->disponible == 8) $pub = Pub::findOrFail(216);

        return view('admin.annonceurs.choixannonce.bordeaux.validation', compact('annonceur', 'pub'));
    }

    /**
     * Affiche la page de réservation de Moulis et Listrac.
     *
     * @param Pub $pubs
     * @param $id
     * @return view('admin.annonceurs.choixannonce.bordeaux.moulislistrac.index', compact('annonceur', 'pubs'));
    */
    public function moulislistrac (Request $request, $id)
    {
        // On récupère l'annonceur
       $annonceur = Annonceur::findOrFail($id);

        // On récupère les pubs
        $pubs = Pub::findOrFail([217,218,219,220,221,222,223,224]);

        // On retourne la vue
        return view('admin.annonceurs.choixannonce.bordeaux.moulislistrac.index', compact('annonceur', 'pubs'));
    }

     /**
     * Valide le choix de Moulis et Listrac.
     *
     * @param Requests\DisponibleAnnonceurRequest $request
     * @param $id
     * 
     * @return view('admin.annonceurs.choixannonce.moulislistrac.validation', compact('annonceur', 'pub'));
    */
    public function validationmoulislistrac (Requests\DisponibleAnnonceurRequest $request, $id)
    { 
       // On récupère l'annonceur
       $annonceur = Annonceur::findOrFail($id);

        // On récupère le choix de la pub en Médoc
        if ($request->disponible == 1) $pub = Pub::findOrFail(217);
        if ($request->disponible == 2) $pub = Pub::findOrFail(221);
        if ($request->disponible == 3) $pub = Pub::findOrFail(218);
        if ($request->disponible == 4) $pub = Pub::findOrFail(222);
        if ($request->disponible == 5) $pub = Pub::findOrFail(219);
        if ($request->disponible == 6) $pub = Pub::findOrFail(223);
        if ($request->disponible == 7) $pub = Pub::findOrFail(220);
        if ($request->disponible == 8) $pub = Pub::findOrFail(214);

        return view('admin.annonceurs.choixannonce.bordeaux.validation', compact('annonceur', 'pub'));
    }

    /**
     * Affiche la page de réservation de pauillac.
     *
     * @param Pub $pubs
     * @param $id
     * @return view('admin.annonceurs.choixannonce.bordeaux.pauillac.index', compact('annonceur', 'pubs'));
    */
    public function pauillac (Request $request, $id)
    {
        // On récupère l'annonceur
       $annonceur = Annonceur::findOrFail($id);

        // On récupère les pubs
        $pubs = Pub::findOrFail([225,226,227,228,229,220,231,232]);

        // On retourne la vue
        return view('admin.annonceurs.choixannonce.bordeaux.pauillac.index', compact('annonceur', 'pubs'));
    }

     /**
     * Valide le choix de pauillac.
     *
     * @param Requests\DisponibleAnnonceurRequest $request
     * @param $id
     * 
     * @return view('admin.annonceurs.choixannonce.pauillac.validation', compact('annonceur', 'pub'));
    */
    public function validationpauillac (Requests\DisponibleAnnonceurRequest $request, $id)
    { 
       // On récupère l'annonceur
       $annonceur = Annonceur::findOrFail($id);

        // On récupère le choix de la pub en Médoc
        if ($request->disponible == 1) $pub = Pub::findOrFail(225);
        if ($request->disponible == 2) $pub = Pub::findOrFail(229);
        if ($request->disponible == 3) $pub = Pub::findOrFail(226);
        if ($request->disponible == 4) $pub = Pub::findOrFail(230);
        if ($request->disponible == 5) $pub = Pub::findOrFail(227);
        if ($request->disponible == 6) $pub = Pub::findOrFail(231);
        if ($request->disponible == 7) $pub = Pub::findOrFail(228);
        if ($request->disponible == 8) $pub = Pub::findOrFail(232);

        return view('admin.annonceurs.choixannonce.bordeaux.pauillac.validation', compact('annonceur', 'pub'));
    }

    /**
     * Affiche la page de réservation de Saint-Estèphe.
     *
     * @param Pub $pubs
     * @param $id
     * @return view('admin.annonceurs.choixannonce.bordeaux.saintestephe.index', compact('annonceur', 'pubs'));
    */
    public function saintestephe (Request $request, $id)
    {
        // On récupère l'annonceur
       $annonceur = Annonceur::findOrFail($id);

        // On récupère les pubs
        $pubs = Pub::findOrFail([233,234,235,236,237,238,239,240]);

        // On retourne la vue
        return view('admin.annonceurs.choixannonce.bordeaux.saintestephe.index', compact('annonceur', 'pubs'));
    }

     /**
     * Valide le choix de Saint-Estèphe.
     *
     * @param Requests\DisponibleAnnonceurRequest $request
     * @param $id
     * 
     * @return view('admin.annonceurs.choixannonce.saintestephe.validation', compact('annonceur', 'pub'));
    */
    public function validationsaintestephe (Requests\DisponibleAnnonceurRequest $request, $id)
    { 
       // On récupère l'annonceur
       $annonceur = Annonceur::findOrFail($id);

        // On récupère le choix de la pub en saintestephe
        if ($request->disponible == 1) $pub = Pub::findOrFail(233);
        if ($request->disponible == 2) $pub = Pub::findOrFail(237);
        if ($request->disponible == 3) $pub = Pub::findOrFail(234);
        if ($request->disponible == 4) $pub = Pub::findOrFail(238);
        if ($request->disponible == 5) $pub = Pub::findOrFail(235);
        if ($request->disponible == 6) $pub = Pub::findOrFail(239);
        if ($request->disponible == 7) $pub = Pub::findOrFail(236);
        if ($request->disponible == 8) $pub = Pub::findOrFail(240);

        return view('admin.annonceurs.choixannonce.bordeaux.saintestephe.validation', compact('annonceur', 'pub'));
    }

    /**
     * Affiche la page de réservation de Saint-Julien.
     *
     * @param Pub $pubs
     * @param $id
     * @return view('admin.annonceurs.choixannonce.bordeaux.saintjulien.index', compact('annonceur', 'pubs'));
    */
    public function saintjulien (Request $request, $id)
    {
        // On récupère l'annonceur
       $annonceur = Annonceur::findOrFail($id);

        // On récupère les pubs
        $pubs = Pub::findOrFail([241,242,243,244,245,246,247,248]);

        // On retourne la vue
        return view('admin.annonceurs.choixannonce.bordeaux.saintjulien.index', compact('annonceur', 'pubs'));
    }

    /**
     * Valide le choix de Saint-Julien.
     *
     * @param Requests\DisponibleAnnonceurRequest $request
     * @param $id
     * 
     * @return view('admin.annonceurs.choixannonce.saintjulien.validation', compact('annonceur', 'pub'));
    */
    public function validationsaintjulien (Requests\DisponibleAnnonceurRequest $request, $id)
    { 
       // On récupère l'annonceur
       $annonceur = Annonceur::findOrFail($id);

        // On récupère le choix de la pub en saintejulien
        if ($request->disponible == 1) $pub = Pub::findOrFail(241);
        if ($request->disponible == 2) $pub = Pub::findOrFail(245);
        if ($request->disponible == 3) $pub = Pub::findOrFail(242);
        if ($request->disponible == 4) $pub = Pub::findOrFail(246);
        if ($request->disponible == 5) $pub = Pub::findOrFail(243);
        if ($request->disponible == 6) $pub = Pub::findOrFail(247);
        if ($request->disponible == 7) $pub = Pub::findOrFail(244);
        if ($request->disponible == 8) $pub = Pub::findOrFail(248);

        return view('admin.annonceurs.choixannonce.bordeaux.saintjulien.validation', compact('annonceur', 'pub'));
    }

    /**
     * Affiche la page de réservation de Pessac-Léognan.
     *
     * @param Pub $pubs
     * @param $id
     * @return view('admin.annonceurs.choixannonce.bordeaux.pessacleognan.index', compact('annonceur', 'pubs'));
    */
    public function pessacleognan (Request $request, $id)
    {
        // On récupère l'annonceur
       $annonceur = Annonceur::findOrFail($id);

        // On récupère les pubs
        $pubs = Pub::findOrFail([265,266,267,268,269,270,271,272]);

        // On retourne la vue
        return view('admin.annonceurs.choixannonce.bordeaux.pessacleognan.index', compact('annonceur', 'pubs'));
    }

    /**
     * Valide le choix de Pessac-Léognan.
     *
     * @param Requests\DisponibleAnnonceurRequest $request
     * @param $id
     * 
     * @return view('admin.annonceurs.choixannonce.pessacleognan.validation', compact('annonceur', 'pub'));
    */
    public function validationpessacleognan (Requests\DisponibleAnnonceurRequest $request, $id)
    { 
       // On récupère l'annonceur
       $annonceur = Annonceur::findOrFail($id);

        // On récupère le choix de la pub en pessacleognan
        if ($request->disponible == 1) $pub = Pub::findOrFail(265);
        if ($request->disponible == 2) $pub = Pub::findOrFail(269);
        if ($request->disponible == 3) $pub = Pub::findOrFail(266);
        if ($request->disponible == 4) $pub = Pub::findOrFail(270);
        if ($request->disponible == 5) $pub = Pub::findOrFail(267);
        if ($request->disponible == 6) $pub = Pub::findOrFail(271);
        if ($request->disponible == 7) $pub = Pub::findOrFail(268);
        if ($request->disponible == 8) $pub = Pub::findOrFail(272);

        return view('admin.annonceurs.choixannonce.bordeaux.pessacleognan.validation', compact('annonceur', 'pub'));
    }

    /**
     * Affiche la page de réservation de Pomerol.
     *
     * @param Pub $pubs
     * @param $id
     * @return view('admin.annonceurs.choixannonce.bordeaux.pomerol.index', compact('annonceur', 'pubs'));
    */
    public function pomerol (Request $request, $id)
    {
        // On récupère l'annonceur
       $annonceur = Annonceur::findOrFail($id);

        // On récupère les pubs
        $pubs = Pub::findOrFail([273,274,275,276,277,278,279,280]);

        // On retourne la vue
        return view('admin.annonceurs.choixannonce.bordeaux.pomerol.index', compact('annonceur', 'pubs'));
    }

    /**
     * Valide le choix de Pomerol.
     *
     * @param Requests\DisponibleAnnonceurRequest $request
     * @param $id
     * 
     * @return view('admin.annonceurs.choixannonce.pomerol.validation', compact('annonceur', 'pub'));
    */
    public function validationpomerol (Requests\DisponibleAnnonceurRequest $request, $id)
    { 
       // On récupère l'annonceur
       $annonceur = Annonceur::findOrFail($id);

        // On récupère le choix de la pub en pomerol
        if ($request->disponible == 1) $pub = Pub::findOrFail(273);
        if ($request->disponible == 2) $pub = Pub::findOrFail(277);
        if ($request->disponible == 3) $pub = Pub::findOrFail(274);
        if ($request->disponible == 4) $pub = Pub::findOrFail(278);
        if ($request->disponible == 5) $pub = Pub::findOrFail(275);
        if ($request->disponible == 6) $pub = Pub::findOrFail(279);
        if ($request->disponible == 7) $pub = Pub::findOrFail(276);
        if ($request->disponible == 8) $pub = Pub::findOrFail(280);

        return view('admin.annonceurs.choixannonce.bordeaux.pomerol.validation', compact('annonceur', 'pub'));
    }

    /**
     * Affiche la page de réservation de Saint-Emilion.
     *
     * @param Pub $pubs
     * @param $id
     * @return view('admin.annonceurs.choixannonce.bordeaux.saintemilion.index', compact('annonceur', 'pubs'));
    */
    public function saintemilion (Request $request, $id)
    {
        // On récupère l'annonceur
       $annonceur = Annonceur::findOrFail($id);

        // On récupère les pubs
        $pubs = Pub::findOrFail([281,282,283,284,285,286,287,288]);

        // On retourne la vue
        return view('admin.annonceurs.choixannonce.bordeaux.saintemilion.index', compact('annonceur', 'pubs'));
    }

    /**
     * Valide le choix de Saint-Emilion.
     *
     * @param Requests\DisponibleAnnonceurRequest $request
     * @param $id
     * 
     * @return view('admin.annonceurs.choixannonce.saintemilion.validation', compact('annonceur', 'pub'));
    */
    public function validationsaintemilion (Requests\DisponibleAnnonceurRequest $request, $id)
    { 
       // On récupère l'annonceur
       $annonceur = Annonceur::findOrFail($id);

        // On récupère le choix de la pub en pomerol
        if ($request->disponible == 1) $pub = Pub::findOrFail(281);
        if ($request->disponible == 2) $pub = Pub::findOrFail(285);
        if ($request->disponible == 3) $pub = Pub::findOrFail(282);
        if ($request->disponible == 4) $pub = Pub::findOrFail(286);
        if ($request->disponible == 5) $pub = Pub::findOrFail(283);
        if ($request->disponible == 6) $pub = Pub::findOrFail(287);
        if ($request->disponible == 7) $pub = Pub::findOrFail(284);
        if ($request->disponible == 8) $pub = Pub::findOrFail(288);

        return view('admin.annonceurs.choixannonce.bordeaux.saintemilion.validation', compact('annonceur', 'pub'));
    }

    /**
     * Affiche la page de réservation de Sauternes-Barsac.
     *
     * @param Pub $pubs
     * @param $id
     * @return view('admin.annonceurs.choixannonce.bordeaux.sauternesbarsac.index', compact('annonceur', 'pubs'));
    */
    public function sauternesbarsac (Request $request, $id)
    {
        // On récupère l'annonceur
       $annonceur = Annonceur::findOrFail($id);

        // On récupère les pubs
        $pubs = Pub::findOrFail([289,290,291,292,293,294,295,296]);

        // On retourne la vue
        return view('admin.annonceurs.choixannonce.bordeaux.sauternesbarsac.index', compact('annonceur', 'pubs'));
    }

    /**
     * Valide le choix de Sauternes-Barsac.
     *
     * @param Requests\DisponibleAnnonceurRequest $request
     * @param $id
     * 
     * @return view('admin.annonceurs.choixannonce.sauternesbarsac.validation', compact('annonceur', 'pub'));
    */
    public function validationsauternesbarsac (Requests\DisponibleAnnonceurRequest $request, $id)
    { 
       // On récupère l'annonceur
       $annonceur = Annonceur::findOrFail($id);

        // On récupère le choix de la pub en pomerol
        if ($request->disponible == 1) $pub = Pub::findOrFail(289);
        if ($request->disponible == 2) $pub = Pub::findOrFail(293);
        if ($request->disponible == 3) $pub = Pub::findOrFail(290);
        if ($request->disponible == 4) $pub = Pub::findOrFail(294);
        if ($request->disponible == 5) $pub = Pub::findOrFail(291);
        if ($request->disponible == 6) $pub = Pub::findOrFail(295);
        if ($request->disponible == 7) $pub = Pub::findOrFail(292);
        if ($request->disponible == 8) $pub = Pub::findOrFail(296);

        return view('admin.annonceurs.choixannonce.bordeaux.sauternesbarsac.validation', compact('annonceur', 'pub'));
    }

}
