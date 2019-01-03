<?php

namespace App\Http\Controllers\Backend\Bourgogne;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\User;
use App\Annonceur;
use App\Pub;

class AnnonceurAnnonceursBourgogneController extends BackendController
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
     * Affiche la page de réservation du choix Bourgogne.
     *
     * @param Pub $pubs
     * @param $id
     * @return view('admin.annonceurs.choixannonce')
    */
    public function bourgogne (Request $request, $id)
    {
        // On récupère l'annonceur
        $annonceur = Annonceur::findOrFail($id);

        // On récupère les pubs
        $pubs = Pub::findOrFail([9,10,11,12,13,14,15,16]);

        // On retourne la vue
        return view('admin.annonceurs.choixannonce.bourgogne.index', compact('annonceur', 'pubs'));
    }

    /**
     * Valide le choix de la pub de Bourgogne.
     *
     * @param Requests\DisponibleAnnonceurRequest $request
     * @param $id
     * 
     * @return view('admin.annonceurs.choixannonce.bordeaux.validation', compact('annonceur', 'pub'));
    */
    public function validationbourgogne (Requests\DisponibleAnnonceurRequest $request, $id)
    { 
        // On récupère l'annonceur
        $annonceur = Annonceur::findOrFail($id);

        // On récupère le choix de la pub en Bourgogne
        if ($request->disponible == 1) $pub = Pub::findOrFail(9);
        if ($request->disponible == 2) $pub = Pub::findOrFail(10);
        if ($request->disponible == 3) $pub = Pub::findOrFail(14);
        if ($request->disponible == 4) $pub = Pub::findOrFail(11);
        if ($request->disponible == 5) $pub = Pub::findOrFail(12);
        if ($request->disponible == 6) $pub = Pub::findOrFail(15);
        if ($request->disponible == 7) $pub = Pub::findOrFail(13);
        if ($request->disponible == 8) $pub = Pub::findOrFail(16);

        return view('admin.annonceurs.choixannonce.bourgogne.validation', compact('annonceur', 'pub'));
    }

    /**
     * Affiche la page de réservation du choix Beaune et Côtes de Beaune
     *
     * @param Pub $pubs
     * @param $id
     * @return view('admin.annonceurs.choixannonce')
    */
    public function beauneetcotesdebeaune (Request $request, $id)
    {
        // On récupère l'annonceur
        $annonceur = Annonceur::findOrFail($id);

        // On récupère les pubs
        $pubs = Pub::findOrFail([57,58,59,60,61,62,63,64]);

        // On retourne la vue
        return view('admin.annonceurs.choixannonce.bourgogne.beauneetcotesdebeaune.index', compact('annonceur', 'pubs'));
    }


    /**
     * Valide le choix de Beaune et Côtes de Beaune.
     *
     * @param Requests\DisponibleAnnonceurRequest $request
     * @param $id
     * 
     * @return view('admin.annonceurs.choixannonce.bordeaux.validation', compact('annonceur', 'pub'));
    */
    public function validationbeauneetcotesdebeaune (Requests\DisponibleAnnonceurRequest $request, $id)
    { 
       // On récupère l'annonceur
       $annonceur = Annonceur::findOrFail($id);

        // On récupère le choix de la pub de Beaune et Côtes de Beaune
        if ($request->disponible == 1) $pub = Pub::findOrFail(57);
        if ($request->disponible == 2) $pub = Pub::findOrFail(58);
        if ($request->disponible == 3) $pub = Pub::findOrFail(62);
        if ($request->disponible == 4) $pub = Pub::findOrFail(59);
        if ($request->disponible == 5) $pub = Pub::findOrFail(60);
        if ($request->disponible == 6) $pub = Pub::findOrFail(63);
        if ($request->disponible == 7) $pub = Pub::findOrFail(61);
        if ($request->disponible == 8) $pub = Pub::findOrFail(64);

        return view('admin.annonceurs.choixannonce.bourgogne.beauneetcotesdebeaune.validation', compact('annonceur', 'pub'));
    }

    /**
     * Affiche la page de réservation de Chablis
     *
     * @param Pub $pubs
     * @param $id
     * @return view('admin.annonceurs.choixannonce')
    */
    public function chablis (Request $request, $id)
    {
        // On récupère l'annonceur
       $annonceur = Annonceur::findOrFail($id);

        // On récupère les pubs
        $pubs = Pub::findOrFail([65,66,67,68,69,70,71,72]);

        // On retourne la vue
        return view('admin.annonceurs.choixannonce.bourgogne.chablis.index', compact('annonceur', 'pubs'));
    }

    /**
     * Valide le choix de Chablis.
     *
     * @param Requests\DisponibleAnnonceurRequest $request
     * @param $id
     * 
     * @return view('admin.annonceurs.choixannonce.bordeaux.validation', compact('annonceur', 'pub'));
    */
    public function validationchablis (Requests\DisponibleAnnonceurRequest $request, $id)
    { 
        // On récupère l'annonceur
       $annonceur = Annonceur::findOrFail($id);

        // On récupère le choix de la pub de Chablis
        if ($request->disponible == 1) $pub = Pub::findOrFail(65);
        if ($request->disponible == 2) $pub = Pub::findOrFail(66);
        if ($request->disponible == 3) $pub = Pub::findOrFail(70);
        if ($request->disponible == 4) $pub = Pub::findOrFail(67);
        if ($request->disponible == 5) $pub = Pub::findOrFail(68);
        if ($request->disponible == 6) $pub = Pub::findOrFail(71);
        if ($request->disponible == 7) $pub = Pub::findOrFail(69);
        if ($request->disponible == 8) $pub = Pub::findOrFail(72);

        return view('admin.annonceurs.choixannonce.bourgogne.chablis.validation', compact('annonceur', 'pub'));
    }

    /**
     * Affiche la page de réservation de Côtes de Nuits
     *
     * @param Pub $pubs
     * @param $id
     * @return view('admin.annonceurs.choixannonce')
    */
    public function cotesdenuits (Request $request, $id)
    {
        // On récupère l'annonceur
       $annonceur = Annonceur::findOrFail($id);

        // On récupère les pubs
        $pubs = Pub::findOrFail([81,82,83,84,85,86,87,88]);

        // On retourne la vue
        return view('admin.annonceurs.choixannonce.bourgogne.cotesdenuits.index', compact('annonceur', 'pubs'));
    }

    /**
     * Valide le choix des Côtes de Nuits.
     *
     * @param Requests\DisponibleAnnonceurRequest $request
     * @param $id
     * 
     * @return view('admin.annonceurs.choixannonce.bordeaux.validation', compact('annonceur', 'pub'));
    */
    public function validationcotesdenuits (Requests\DisponibleAnnonceurRequest $request, $id)
    { 
       // On récupère l'annonceur
       $annonceur = Annonceur::findOrFail($id);

        // On récupère le choix de la pub des Côtes de Nuits
        if ($request->disponible == 1) $pub = Pub::findOrFail(81);
        if ($request->disponible == 2) $pub = Pub::findOrFail(82);
        if ($request->disponible == 3) $pub = Pub::findOrFail(86);
        if ($request->disponible == 4) $pub = Pub::findOrFail(83);
        if ($request->disponible == 5) $pub = Pub::findOrFail(84);
        if ($request->disponible == 6) $pub = Pub::findOrFail(87);
        if ($request->disponible == 7) $pub = Pub::findOrFail(85);
        if ($request->disponible == 8) $pub = Pub::findOrFail(88);

        return view('admin.annonceurs.choixannonce.bourgogne.cotesdenuits.validation', compact('annonceur', 'pub'));
    }

    /**
     * Affiche la page de réservation des Grands Crus de Chablis
     *
     * @param Pub $pubs
     * @param $id
     * @return view('admin.annonceurs.choixannonce.bourgogne.grandscrusdechablis.index', compact('annonceur', 'pubs'));
    */
    public function grandscrusdechablis (Request $request, $id)
    {
        // On récupère l'annonceur
       $annonceur = Annonceur::findOrFail($id);

        // On récupère les pubs
        $pubs = Pub::findOrFail([97,98,99,100,101,102,103,104]);

        // On retourne la vue
        return view('admin.annonceurs.choixannonce.bourgogne.grandscrusdechablis.index', compact('annonceur', 'pubs'));
    }

    /**
     * Valide le choix des Grands Crus de Chablis.
     *
     * @param Requests\DisponibleAnnonceurRequest $request
     * @param $id
     * 
     * @return view('admin.annonceurs.choixannonce.bourgogne.grandscrusdechablis.validation', compact('annonceur', 'pub'));
    */
    public function validationgrandscrusdechablis (Requests\DisponibleAnnonceurRequest $request, $id)
    { 
       // On récupère l'annonceur
       $annonceur = Annonceur::findOrFail($id);

        // On récupère le choix de la pub des Grands Crus de Chablis
        if ($request->disponible == 1) $pub = Pub::findOrFail(97);
        if ($request->disponible == 2) $pub = Pub::findOrFail(101);
        if ($request->disponible == 3) $pub = Pub::findOrFail(98);
        if ($request->disponible == 4) $pub = Pub::findOrFail(102);
        if ($request->disponible == 5) $pub = Pub::findOrFail(99);
        if ($request->disponible == 6) $pub = Pub::findOrFail(103);
        if ($request->disponible == 7) $pub = Pub::findOrFail(100);
        if ($request->disponible == 8) $pub = Pub::findOrFail(104);

        return view('admin.annonceurs.choixannonce.bourgogne.grandscrusdechablis.validation', compact('annonceur', 'pub'));
    }

    /**
     * Affiche la page de réservation de Chambolle-Musigny et Morey-Saint-Denis
     *
     * @param Pub $pubs
     * @param $id
     * @return view('admin.annonceurs.choixannonce.bourgogne.chambollemusignymoreysaintdenis.index', compact('annonceur', 'pubs'));
    */
    public function chambollemusignymoreysaintdenis (Request $request, $id)
    {
        // On récupère l'annonceur
       $annonceur = Annonceur::findOrFail($id);

        // On récupère les pubs
        $pubs = Pub::findOrFail([121,122,123,124,125,126,127,128]);

        // On retourne la vue
        return view('admin.annonceurs.choixannonce.bourgogne.chambollemusignymoreysaintdenis.index', compact('annonceur', 'pubs'));
    }

    /**
     * Valide le choix de Chambolle-Musigny et Morey-Saint-Denis.
     *
     * @param Requests\DisponibleAnnonceurRequest $request
     * @param $id
     * 
     * @return view('admin.annonceurs.choixannonce.bourgogne.chambollemusignymoreysaintdenis.validation', compact('annonceur', 'pub'));
    */
    public function validationchambollemusignymoreysaintdenis (Requests\DisponibleAnnonceurRequest $request, $id)
    { 
       // On récupère l'annonceur
       $annonceur = Annonceur::findOrFail($id);

        // On récupère le choix de la pub de Chambolle-Musigny et Morey-Saint-Denis
        if ($request->disponible == 1) $pub = Pub::findOrFail(121);
        if ($request->disponible == 2) $pub = Pub::findOrFail(125);
        if ($request->disponible == 3) $pub = Pub::findOrFail(122);
        if ($request->disponible == 4) $pub = Pub::findOrFail(126);
        if ($request->disponible == 5) $pub = Pub::findOrFail(123);
        if ($request->disponible == 6) $pub = Pub::findOrFail(127);
        if ($request->disponible == 7) $pub = Pub::findOrFail(124);
        if ($request->disponible == 8) $pub = Pub::findOrFail(128);

        return view('admin.annonceurs.choixannonce.bourgogne.chambollemusignymoreysaintdenis.validation', compact('annonceur', 'pub'));
    }

    /**
     * Affiche la page de réservation de Gevrey-Chambertin
     *
     * @param Pub $pubs
     * @param $id
     * @return view('admin.annonceurs.choixannonce.bourgogne.gevreychambertin.index', compact('annonceur', 'pubs'));
    */
    public function gevreychambertin (Request $request, $id)
    {
        // On récupère l'annonceur
       $annonceur = Annonceur::findOrFail($id);

        // On récupère les pubs
        $pubs = Pub::findOrFail([113,114,115,116,117,118,119,120]);

        // On retourne la vue
        return view('admin.annonceurs.choixannonce.bourgogne.gevreychambertin.index', compact('annonceur', 'pubs'));
    }

    /**
     * Valide le choix de Gevrey-Chambertin.
     *
     * @param Requests\DisponibleAnnonceurRequest $request
     * @param $id
     * 
     * @return view('admin.annonceurs.choixannonce.bourgogne.gevreychambertin.validation', compact('annonceur', 'pub'));
    */
    public function validationgevreychambertin (Requests\DisponibleAnnonceurRequest $request, $id)
    { 
       // On récupère l'annonceur
       $annonceur = Annonceur::findOrFail($id);

        // On récupère le choix de la pub en Gevrey-Chambertin
        if ($request->disponible == 1) $pub = Pub::findOrFail(113);
        if ($request->disponible == 2) $pub = Pub::findOrFail(117);
        if ($request->disponible == 3) $pub = Pub::findOrFail(114);
        if ($request->disponible == 4) $pub = Pub::findOrFail(118);
        if ($request->disponible == 5) $pub = Pub::findOrFail(116);
        if ($request->disponible == 6) $pub = Pub::findOrFail(119);
        if ($request->disponible == 7) $pub = Pub::findOrFail(116);
        if ($request->disponible == 8) $pub = Pub::findOrFail(120);

        return view('admin.annonceurs.choixannonce.bourgogne.gevreychambertin.validation', compact('annonceur', 'pub'));
    }

    /**
     * Affiche la page de réservation de Nuits-Saint-Georges
     *
     * @param Pub $pubs
     * @param $id
     * @return view('admin.annonceurs.choixannonce.bourgogne.nuitssaintgeorges.index', compact('annonceur', 'pubs'));
    */
    public function nuitssaintgeorges (Request $request, $id)
    {
        // On récupère l'annonceur
       $annonceur = Annonceur::findOrFail($id);

        // On récupère les pubs
        $pubs = Pub::findOrFail([145,146,147,148,149,150,151,152]);

        // On retourne la vue
        return view('admin.annonceurs.choixannonce.bourgogne.nuitssaintgeorges.index', compact('annonceur', 'pubs'));
    }

    /**
     * Valide le choix de Nuits-Saint-Georges.
     *
     * @param Requests\DisponibleAnnonceurRequest $request
     * @param $id
     * 
     * @return view('admin.annonceurs.choixannonce.bourgogne.nuitssaintgeorges.validation', compact('annonceur', 'pub'));
    */
    public function validationnuitssaintgeorges (Requests\DisponibleAnnonceurRequest $request, $id)
    { 
       // On récupère l'annonceur
       $annonceur = Annonceur::findOrFail($id);

        // On récupère le choix de la pub en Nuits-Saint-Georges
        if ($request->disponible == 1) $pub = Pub::findOrFail(145);
        if ($request->disponible == 2) $pub = Pub::findOrFail(149);
        if ($request->disponible == 3) $pub = Pub::findOrFail(146);
        if ($request->disponible == 4) $pub = Pub::findOrFail(150);
        if ($request->disponible == 5) $pub = Pub::findOrFail(147);
        if ($request->disponible == 6) $pub = Pub::findOrFail(151);
        if ($request->disponible == 7) $pub = Pub::findOrFail(148);
        if ($request->disponible == 8) $pub = Pub::findOrFail(152);

        return view('admin.annonceurs.choixannonce.bourgogne.nuitssaintgeorges.validation', compact('annonceur', 'pub'));
    }

    /**
     * Affiche la page de réservation de Vosne-Romanée
     *
     * @param Pub $pubs
     * @param $id
     * @return view('admin.annonceurs.choixannonce.bourgogne.vosneromanee.index', compact('annonceur', 'pubs'));
    */
    public function vosneromanee (Request $request, $id)
    {
        // On récupère l'annonceur
       $annonceur = Annonceur::findOrFail($id);

        // On récupère les pubs
        $pubs = Pub::findOrFail([137,138,139,140,141,142,143,144]);

        // On retourne la vue
        return view('admin.annonceurs.choixannonce.bourgogne.vosneromanee.index', compact('annonceur', 'pubs'));
    }

    /**
     * Valide le choix de Vosne-Romanée.
     *
     * @param Requests\DisponibleAnnonceurRequest $request
     * @param $id
     * 
     * @return view('admin.annonceurs.choixannonce.bourgogne.vosneromanee.validation', compact('annonceur', 'pub'));
    */
    public function validationvosneromanee (Requests\DisponibleAnnonceurRequest $request, $id)
    { 
       // On récupère l'annonceur
       $annonceur = Annonceur::findOrFail($id);

        // On récupère le choix de la pub en Vosne-Romanée
        if ($request->disponible == 1) $pub = Pub::findOrFail(137);
        if ($request->disponible == 2) $pub = Pub::findOrFail(141);
        if ($request->disponible == 3) $pub = Pub::findOrFail(138);
        if ($request->disponible == 4) $pub = Pub::findOrFail(142);
        if ($request->disponible == 5) $pub = Pub::findOrFail(139);
        if ($request->disponible == 6) $pub = Pub::findOrFail(143);
        if ($request->disponible == 7) $pub = Pub::findOrFail(140);
        if ($request->disponible == 8) $pub = Pub::findOrFail(144);

        return view('admin.annonceurs.choixannonce.bourgogne.vosneromanee.validation', compact('annonceur', 'pub'));
    }

    /**
     * Affiche la page de réservation de Vougeot
     *
     * @param Pub $pubs
     * @param $id
     * @return view('admin.annonceurs.choixannonce.bourgogne.vougeot.index', compact('annonceur', 'pubs'));
    */
    public function vougeot (Request $request, $id)
    {
        // On récupère l'annonceur
       $annonceur = Annonceur::findOrFail($id);

        // On récupère les pubs
        $pubs = Pub::findOrFail([129,130,131,132,133,134,135,136]);

        // On retourne la vue
        return view('admin.annonceurs.choixannonce.bourgogne.vougeot.index', compact('annonceur', 'pubs'));
    }

    /**
     * Valide le choix de Vougeot.
     *
     * @param Requests\DisponibleAnnonceurRequest $request
     * @param $id
     * 
     * @return view('admin.annonceurs.choixannonce.bourgogne.vougeot.validation', compact('annonceur', 'pub'));
    */
    public function validationvougeot (Requests\DisponibleAnnonceurRequest $request, $id)
    { 
       // On récupère l'annonceur
       $annonceur = Annonceur::findOrFail($id);

        // On récupère le choix de la pub en Vougeot
        if ($request->disponible == 1) $pub = Pub::findOrFail(129);
        if ($request->disponible == 2) $pub = Pub::findOrFail(133);
        if ($request->disponible == 3) $pub = Pub::findOrFail(130);
        if ($request->disponible == 4) $pub = Pub::findOrFail(134);
        if ($request->disponible == 5) $pub = Pub::findOrFail(131);
        if ($request->disponible == 6) $pub = Pub::findOrFail(135);
        if ($request->disponible == 7) $pub = Pub::findOrFail(132);
        if ($request->disponible == 8) $pub = Pub::findOrFail(136);

        return view('admin.annonceurs.choixannonce.bourgogne.vougeot.validation', compact('annonceur', 'pub'));
    }

    /**
     * Affiche la page de réservation des 1ers crus et Grands Crus de Beaune
     *
     * @param Pub $pubs
     * @param $id
     * @return view('admin.annonceurs.choixannonce.bourgogne.1erscrusetgrandscrusdebeaune.index', compact('annonceur', 'pubs'));
    */
    public function premierscrusetgrandscrusdebeaune (Request $request, $id)
    {
        // On récupère l'annonceur
       $annonceur = Annonceur::findOrFail($id);

        // On récupère les pubs
        $pubs = Pub::findOrFail([161,162,163,164,165,166,167,168]);

        // On retourne la vue
        return view('admin.annonceurs.choixannonce.bourgogne.1erscrusetgrandscrusdebeaune.index', compact('annonceur', 'pubs'));
    }

    /**
     * Valide le choix des 1ers crus et Grands Crus de Beaune.
     *
     * @param Requests\DisponibleAnnonceurRequest $request
     * @param $id
     * 
     * @return view('admin.annonceurs.choixannonce.bourgogne.1erscrusetgrandscrusdebeaune.validation', compact('annonceur', 'pub'));
    */
    public function validation1erscrusetgrandscrusdebeaune (Requests\DisponibleAnnonceurRequest $request, $id)
    { 
       // On récupère l'annonceur
       $annonceur = Annonceur::findOrFail($id);

        // On récupère le choix de la pub des 1ers crus et Grands Crus de Beaune
        if ($request->disponible == 1) $pub = Pub::findOrFail(161);
        if ($request->disponible == 2) $pub = Pub::findOrFail(165);
        if ($request->disponible == 3) $pub = Pub::findOrFail(162);
        if ($request->disponible == 4) $pub = Pub::findOrFail(166);
        if ($request->disponible == 5) $pub = Pub::findOrFail(163);
        if ($request->disponible == 6) $pub = Pub::findOrFail(167);
        if ($request->disponible == 7) $pub = Pub::findOrFail(164);
        if ($request->disponible == 8) $pub = Pub::findOrFail(168);

        return view('admin.annonceurs.choixannonce.bourgogne.1erscrusetgrandscrusdebeaune.validation', compact('annonceur', 'pub'));
    }

    /**
     * Affiche la page de réservation d'Aloxe-Corton
     *
     * @param Pub $pubs
     * @param $id
     * @return view('admin.annonceurs.choixannonce.bourgogne.aloxecorton.index', compact('annonceur', 'pubs'));
    */
    public function aloxecorton (Request $request, $id)
    {
        // On récupère l'annonceur
       $annonceur = Annonceur::findOrFail($id);

        // On récupère les pubs
        $pubs = Pub::findOrFail([153,154,155,156,157,158,159,160]);

        // On retourne la vue
        return view('admin.annonceurs.choixannonce.bourgogne.aloxecorton.index', compact('annonceur', 'pubs'));
    }

    /**
     * Valide le choix d'Aloxe-Corton.
     *
     * @param Requests\DisponibleAnnonceurRequest $request
     * @param $id
     * 
     * @return view('admin.annonceurs.choixannonce.bourgogne.aloxecorton.validation', compact('annonceur', 'pub'));
    */
    public function validationaloxecorton (Requests\DisponibleAnnonceurRequest $request, $id)
    { 
       // On récupère l'annonceur
       $annonceur = Annonceur::findOrFail($id);

        // On récupère le choix de la pub en Aloxe-Corton
        if ($request->disponible == 1) $pub = Pub::findOrFail(153);
        if ($request->disponible == 2) $pub = Pub::findOrFail(157);
        if ($request->disponible == 3) $pub = Pub::findOrFail(154);
        if ($request->disponible == 4) $pub = Pub::findOrFail(158);
        if ($request->disponible == 5) $pub = Pub::findOrFail(155);
        if ($request->disponible == 6) $pub = Pub::findOrFail(159);
        if ($request->disponible == 7) $pub = Pub::findOrFail(156);
        if ($request->disponible == 8) $pub = Pub::findOrFail(160);

        return view('admin.annonceurs.choixannonce.bourgogne.aloxecorton.validation', compact('annonceur', 'pub'));
    }

    /**
     * Affiche la page de réservation de Chassagne-Montrachet
     *
     * @param Pub $pubs
     * @param $id
     * @return view('admin.annonceurs.choixannonce.bourgogne.chassagnemontrachet.index', compact('annonceur', 'pubs'));
    */
    public function chassagnemontrachet (Request $request, $id)
    {
        // On récupère l'annonceur
       $annonceur = Annonceur::findOrFail($id);

        // On récupère les pubs
        $pubs = Pub::findOrFail([193,194,195,196,197,198,199,200]);

        // On retourne la vue
        return view('admin.annonceurs.choixannonce.bourgogne.chassagnemontrachet.index', compact('annonceur', 'pubs'));
    }

    /**
     * Valide le choix de Chassagne-Montrachet
     *
     * @param Requests\DisponibleAnnonceurRequest $request
     * @param $id
     * 
     * @return view('admin.annonceurs.choixannonce.bourgogne.chassagnemontrachet.validation', compact('annonceur', 'pub'));
    */
    public function validationchassagnemontrachet (Requests\DisponibleAnnonceurRequest $request, $id)
    { 
       // On récupère l'annonceur
       $annonceur = Annonceur::findOrFail($id);

        // On récupère le choix de la pub en Chassagne-Montrachet
        if ($request->disponible == 1) $pub = Pub::findOrFail(193);
        if ($request->disponible == 2) $pub = Pub::findOrFail(197);
        if ($request->disponible == 3) $pub = Pub::findOrFail(194);
        if ($request->disponible == 4) $pub = Pub::findOrFail(198);
        if ($request->disponible == 5) $pub = Pub::findOrFail(195);
        if ($request->disponible == 6) $pub = Pub::findOrFail(199);
        if ($request->disponible == 7) $pub = Pub::findOrFail(196);
        if ($request->disponible == 8) $pub = Pub::findOrFail(200);

        return view('admin.annonceurs.choixannonce.bourgogne.chassagnemontrachet.validation', compact('annonceur', 'pub'));
    }

    /**
     * Affiche la page de réservation de Pommard
     *
     * @param Pub $pubs
     * @param $id
     * @return view('admin.annonceurs.choixannonce.bourgogne.pommard.index', compact('annonceur', 'pubs'));
    */
    public function pommard (Request $request, $id)
    {
        // On récupère l'annonceur
       $annonceur = Annonceur::findOrFail($id);

        // On récupère les pubs
        $pubs = Pub::findOrFail([169,170,171,172,173,174,175,176]);

        // On retourne la vue
        return view('admin.annonceurs.choixannonce.bourgogne.pommard.index', compact('annonceur', 'pubs'));
    }

    /**
     * Valide le choix de Pommard.
     *
     * @param Requests\DisponibleAnnonceurRequest $request
     * @param $id
     * 
     * @return view('admin.annonceurs.choixannonce.bourgogne.pommard.validation', compact('annonceur', 'pub'));
    */
    public function validationpommard (Requests\DisponibleAnnonceurRequest $request, $id)
    { 
       // On récupère l'annonceur
       $annonceur = Annonceur::findOrFail($id);

        // On récupère le choix de la pub en Pommard
        if ($request->disponible == 1) $pub = Pub::findOrFail(169);
        if ($request->disponible == 2) $pub = Pub::findOrFail(173);
        if ($request->disponible == 3) $pub = Pub::findOrFail(170);
        if ($request->disponible == 4) $pub = Pub::findOrFail(174);
        if ($request->disponible == 5) $pub = Pub::findOrFail(171);
        if ($request->disponible == 6) $pub = Pub::findOrFail(175);
        if ($request->disponible == 7) $pub = Pub::findOrFail(172);
        if ($request->disponible == 8) $pub = Pub::findOrFail(176);

        return view('admin.annonceurs.choixannonce.bourgogne.pommard.validation', compact('annonceur', 'pub'));
    }

    /**
     * Affiche la page de réservation de Puligny-Montrachet
     *
     * @param Pub $pubs
     * @param $id
     * @return view('admin.annonceurs.choixannonce.bourgogne.pulignymontrachet.index', compact('annonceur', 'pubs'));
    */
    public function pulignymontrachet (Request $request, $id)
    {
        // On récupère l'annonceur
       $annonceur = Annonceur::findOrFail($id);

        // On récupère les pubs
        $pubs = Pub::findOrFail([185,186,187,188,189,190,191,192]);

        // On retourne la vue
        return view('admin.annonceurs.choixannonce.bourgogne.pulignymontrachet.index', compact('annonceur', 'pubs'));
    }

    /**
     * Valide le choix de Puligny-Montrachet
     *
     * @param Requests\DisponibleAnnonceurRequest $request
     * @param $id
     * 
     * @return view('admin.annonceurs.choixannonce.bourgogne.pulignymontrachet.validation', compact('annonceur', 'pub'));
    */
    public function validationpulignymontrachet (Requests\DisponibleAnnonceurRequest $request, $id)
    { 
       // On récupère l'annonceur
       $annonceur = Annonceur::findOrFail($id);

        // On récupère le choix de la pub en Puligny-Montrachet
        if ($request->disponible == 1) $pub = Pub::findOrFail(185);
        if ($request->disponible == 2) $pub = Pub::findOrFail(189);
        if ($request->disponible == 3) $pub = Pub::findOrFail(186);
        if ($request->disponible == 4) $pub = Pub::findOrFail(190);
        if ($request->disponible == 5) $pub = Pub::findOrFail(187);
        if ($request->disponible == 6) $pub = Pub::findOrFail(191);
        if ($request->disponible == 7) $pub = Pub::findOrFail(188);
        if ($request->disponible == 8) $pub = Pub::findOrFail(192);	

        return view('admin.annonceurs.choixannonce.bourgogne.pulignymontrachet.validation', compact('annonceur', 'pub'));
    }

    /**
     * Affiche la page de réservation de Volnay
     *
     * @param Pub $pubs
     * @param $id
     * @return view('admin.annonceurs.choixannonce.bourgogne.volnay.index', compact('annonceur', 'pubs'));
    */
    public function volnay (Request $request, $id)
    {
        // On récupère l'annonceur
       $annonceur = Annonceur::findOrFail($id);

        // On récupère les pubs
        $pubs = Pub::findOrFail([177,178,179,180,181,182,183,184]);

        // On retourne la vue
        return view('admin.annonceurs.choixannonce.bourgogne.volnay.index', compact('annonceur', 'pubs'));
    }

    /**
     * Valide le choix de Volnay.
     *
     * @param Requests\DisponibleAnnonceurRequest $request
     * @param $id
     * 
     * @return view('admin.annonceurs.choixannonce.bourgogne.volnay.validation', compact('annonceur', 'pub'));
    */
    public function validationvolnay (Requests\DisponibleAnnonceurRequest $request, $id)
    { 
       // On récupère l'annonceur
       $annonceur = Annonceur::findOrFail($id);

        // On récupère le choix de la pub en Volnay
        if ($request->disponible == 1) $pub = Pub::findOrFail(177);
        if ($request->disponible == 2) $pub = Pub::findOrFail(181);
        if ($request->disponible == 3) $pub = Pub::findOrFail(178);
        if ($request->disponible == 4) $pub = Pub::findOrFail(182);
        if ($request->disponible == 5) $pub = Pub::findOrFail(179);
        if ($request->disponible == 6) $pub = Pub::findOrFail(183);
        if ($request->disponible == 7) $pub = Pub::findOrFail(181);
        if ($request->disponible == 8) $pub = Pub::findOrFail(184);

        return view('admin.annonceurs.choixannonce.bourgogne.volnay.validation', compact('annonceur', 'pub'));
    }

    /**
     * Affiche la page de réservation de la Côte Chalonnaise et Couchoise
     *
     * @param Pub $pubs
     * @param $id
     * @return view('admin.annonceurs.choixannonce.bourgogne.cotechalonnaiseetcouchoise.index', compact('annonceur', 'pubs'));
    */
    public function cotechalonnaiseetcouchoise (Request $request, $id)
    {
        // On récupère l'annonceur
       $annonceur = Annonceur::findOrFail($id);

        // On récupère les pubs
        $pubs = Pub::findOrFail([89,90,91,92,93,94,95,96]);

        // On retourne la vue
        return view('admin.annonceurs.choixannonce.bourgogne.cotechalonnaiseetcouchoise.index', compact('annonceur', 'pubs'));
    }

    /**
     * Valide le choix de la Côte Chalonnaise et Couchoise.
     *
     * @param Requests\DisponibleAnnonceurRequest $request
     * @param $id
     * 
     * @return view('admin.annonceurs.choixannonce.bourgogne.cotechalonnaiseetcouchoise.validation', compact('annonceur', 'pub'));
    */
    public function validationcotechalonnaiseetcouchoise (Requests\DisponibleAnnonceurRequest $request, $id)
    { 
       // On récupère l'annonceur
       $annonceur = Annonceur::findOrFail($id);

        // On récupère le choix de la pub de la Côte Chalonnaise et Couchoise
        if ($request->disponible == 1) $pub = Pub::findOrFail(89);
        if ($request->disponible == 2) $pub = Pub::findOrFail(93);
        if ($request->disponible == 3) $pub = Pub::findOrFail(90);
        if ($request->disponible == 4) $pub = Pub::findOrFail(94);
        if ($request->disponible == 5) $pub = Pub::findOrFail(91);
        if ($request->disponible == 6) $pub = Pub::findOrFail(95);
        if ($request->disponible == 7) $pub = Pub::findOrFail(92);
        if ($request->disponible == 8) $pub = Pub::findOrFail(96);

        return view('admin.annonceurs.choixannonce.bourgogne.cotechalonnaiseetcouchoise.validation', compact('annonceur', 'pub'));
    }

     /**
     * Affiche la page de réservation de Mâcon
     *
     * @param Pub $pubs
     * @param $id
     * @return view('admin.annonceurs.choixannonce.bourgogne.macon.index', compact('annonceur', 'pubs'));
    */
    public function macon (Request $request, $id)
    {
        // On récupère l'annonceur
       $annonceur = Annonceur::findOrFail($id);

        // On récupère les pubs
        $pubs = Pub::findOrFail([105,106,107,108,109,110,111,112]);

        // On retourne la vue
        return view('admin.annonceurs.choixannonce.bourgogne.macon.index', compact('annonceur', 'pubs'));
    }

    /**
     * Valide le choix de Mâcon.
     *
     * @param Requests\DisponibleAnnonceurRequest $request
     * @param $id
     * 
     * @return view('admin.annonceurs.choixannonce.bourgogne.macon.validation', compact('annonceur', 'pub'));
    */
    public function validationmacon (Requests\DisponibleAnnonceurRequest $request, $id)
    { 
       // On récupère l'annonceur
       $annonceur = Annonceur::findOrFail($id);

        // On récupère le choix de la pub en Mâcon
        if ($request->disponible == 1) $pub = Pub::findOrFail(105);
        if ($request->disponible == 2) $pub = Pub::findOrFail(109);
        if ($request->disponible == 3) $pub = Pub::findOrFail(106);
        if ($request->disponible == 4) $pub = Pub::findOrFail(110);
        if ($request->disponible == 5) $pub = Pub::findOrFail(107);
        if ($request->disponible == 6) $pub = Pub::findOrFail(111);
        if ($request->disponible == 7) $pub = Pub::findOrFail(108);
        if ($request->disponible == 8) $pub = Pub::findOrFail(112);

        return view('admin.annonceurs.choixannonce.bourgogne.macon.validation', compact('annonceur', 'pub'));
    }

}
