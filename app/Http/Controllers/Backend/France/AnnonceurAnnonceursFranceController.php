<?php

namespace App\Http\Controllers\Backend\France;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\User;
use App\Annonceur;
use App\Pub;
use Carbon\Carbon;
use Intervention\Image\Facades\Image;

use Gloudemans\Shoppingcart\Facades\Cart;

class AnnonceurAnnonceursFranceController extends BackendController
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
        $this->uploadPath = 'img/';
    }

    /**
     * Affiche la page de réservation du choix national.
     *
     * @param Pub $pubs
     * @param $id
     * @return view('admin.annonceurs.choixannonce')
    */
    public function national (Pub $pubs, $id)
    {
        // On récupère le logué
        $annonceur = Annonceur::findOrFail($id);

        // On récupère les pubs
        $pubs = Pub::findOrFail([1,2,3,4,5,6,7,8]);

        // On retourne la vue
        return view('admin.annonceurs.choixannonce.france.index', compact('annonceur', 'pubs'));
    }

    public function validation (Requests\DisponibleAnnonceurRequest $request, $id)
    {
        // On récupère le logué
        $annonceur = Annonceur::findOrFail($id);

        // On récupère le choix de la pub nationale
        if ($request->disponible == 1) $pub = Pub::findOrFail(1);
        if ($request->disponible == 2) $pub = Pub::findOrFail(2);
        if ($request->disponible == 3) $pub = Pub::findOrFail(6);
        if ($request->disponible == 4) $pub = Pub::findOrFail(3);
        if ($request->disponible == 5) $pub = Pub::findOrFail(4);
        if ($request->disponible == 6) $pub = Pub::findOrFail(7);
        if ($request->disponible == 7) $pub = Pub::findOrFail(5);
        if ($request->disponible == 8) $pub = Pub::findOrFail(8);

        return view('admin.annonceurs.choixannonce.france.validation', compact('annonceur', 'pub'));
    }
}
