<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use barryvdh\dompdf;
use App\Pedef;
use App\Facture;
use Carbon\Carbon;
use App\User;
use App\Vigneron;
use App\Annonceur;
use App\Line;

use Barryvdh\DomPDF\Facade as PDF;

class FacturesController extends BackendController
{
    // Le nombre d'annonceurs par page
    protected $limit = 10;

    /**
     * Pour afficher toutes les factures
     *
     * @return view('admin.factures.index');
    */
    public function index ()
    {
        // On met diffForHumans() en locale avec la classe 
        \Carbon\Carbon::setLocale('fr');

        // On ramène les factures    
        $factures = Facture::latest()
            ->filter(request('term'))
            ->paginate($this->limit);
        
        // On compte les factures
        $comptefactures = Facture::count();

        return view('admin.factures.index', compact('factures', 'comptefactures'));
    }

    /**
    * Méthode store () pour enregistrer la création des PDFS 
    *
    * @param Request $request
    * @param $id
    * return $pedef->download("Facture-$societe-$date.pdf");
    **/
    public function show ($id)
    {
        // On récupère la facture
        $facture = Facture::findOrfail($id);
        // dd($facture);
        // On met diffForHumans() en locale avec la classe 
        \Carbon\Carbon::setLocale('fr');

        return view('admin.factures.show', compact('facture'));
    }
}
