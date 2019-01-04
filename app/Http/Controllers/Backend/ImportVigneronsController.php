<?php

namespace App\Http\Controllers\Backend;

use App\Importvigneron;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ImportVigneronsController extends Controller
{

    // Le nombre de vignerons par page
    protected $limit = 10;

    /**
     * Méthode index () pour ramerner tous les vignerons avec le module de recherche
     *
     * @return view('admin.importvignerons.index', compact('vignerons', 'compteVignerons'));
     **/
    public function index ()
    {
        // On affiche les derniers vignerons entrés en dernier lorsqu'ils seront créés
        // on se sert du scopFilter présent dans le modèle ImportVigneron.php
        // pour rechercher les vignerons par leur nom de société
        // puis on pagine

        // Carbon::setLocale('fr');
        $vignerons = ImportVigneron::orderBy('id', 'asc')
            ->filter(request('term'))
            ->paginate($this->limit);

        // On compte les vignerons
        $compteVignerons = ImportVigneron::count();
        return view('admin.importvignerons.index', compact('vignerons', 'compteVignerons'));
    }


    /**
     * Méthode edit () pour éditer un vigneron import en passant les données dans le formulaire
     *
     * @param $id
     * @return view('admin.importvignerons.edit', compact('vigneron'));
     **/
    public function edit ($id)
    {
        $vigneron = ImportVigneron::where('id', $id)->first();

        return view('admin.importvignerons.edit', compact('vigneron'));
    }


    /**
     * Méthode update () pour mettre à jour un vigneron importation
     *
     * @param Request $request, $id
     * return redirect(route('admin.importvignerons.index'))->with('message', "Le statut vigneron ". $vigneron['societe'] . " a bien été mis à jour");
     **/
    public function update (Request $request, $id)
    {
        $vigneron = ImportVigneron::findOrFail($id);

        if ($request->statut == 1)
        {
            $vigneron['statut'] = 1;
            $vigneron->update();
            return redirect(route('admin.importvignerons.index'))->with('message', "Le statut vigneron ". $vigneron['societe'] . " est fait.");
        }
        else
        {
            return redirect(route('admin.importvignerons.index'))->with('error', "Le statut vigneron ". $vigneron['societe'] . " a été mis en échec.");
        }
    }


}
