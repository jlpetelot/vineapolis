<?php

namespace App\Http\Controllers\Backend;

use App\Message;
use App\User;
use App\Vigneron;
use App\Panier;
use App\Paiement;
use App\Line;
use App\Facture;
use App\Product;
use App\Paiementpaypal;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Crypt;
use Intervention\Image\Facades\Image;
use App\Comment;
use Auth;

class VigneronsController extends BackendController
{
    // Le nombre de vignerons par page
    protected $limit = 10;

    // Le chemin vers le téléversement du visuel du reportage
    protected $uploadPath;

    /**
     * Méthode __construct () pour le chemin du visuel du reportage
     *
     * @return void
     **/
    public function __construct ()
    {
       // permet de garder le middleware $this->middleware('auth') et donc la session de l'auth
       parent::__construct();
       $this->uploadPath = public_path(config('cms.image.directory'));
    }

    /**
     * Méthode all () pour ramener tous les vignerons avec le module de recherche
     *
     * @return view('admin.vignerons.index', compact('vignerons', 'compteVignerons'));
     **/
    public function all ()
    {
        // On récupère l'id du logué pour empêcher les petits malins d'utiliser l'admin administrateur
        if (Auth::user()->role == "administrateur")
        {
            // On affiche les derniers vignerons entrés en dernier lorsqu'ils seront créés
            // on se sert du scopFilter présent dans le modèle Vigneron.php
            // pour rechercher les vignerons par leur nom de société
            // puis on pagine

            // Carbon::setLocale('fr');
            $vignerons = Vigneron::orderBy('id', 'desc')
            ->filter(request('term'))
            ->paginate($this->limit);

            // On compte les vignerons
            $compteVignerons = Vigneron::count();
            return view('admin.vignerons.index', compact('vignerons', 'compteVignerons', 'user'));
        }
        else
        {
            return abort('401');
        }
    }

    /**
     * Méthode create () pour créer un nouveau vigneron
     * On injecte le modèle Vigneron en paramètre
     *
     * @param Vigneron $vigneron
     * @return view('admin.vignerons.create', compact('vigneron')
     **/
    public function create (Vigneron $vigneron)
    {
        // On récupère l'id du logué pour empêcher les petits malins d'utiliser l'admin administrateur
        if (Auth::user()->role == "administrateur") return view('admin.vignerons.create', compact('vigneron'));
        else return abort('401');
    }

    /**
     * Méthode store () pour enregistrer les vignerons dans la BDD
     * On a créé un request VigneronRequest (app/Http/Requests/VigneronRequest.php)
     * pour gérer la validation et ajouté use App\Http\Requests; pour le fonctionnement
     * et passer Requests\VigneronRequest $reques en paramètre plutôt que Request $request normalement
     *
     * @param Requests\VigneronRequest $request
     * @return redirect('admin');
     **/
    public function store (Requests\VigneronRequest $request)
    {
        $data = $this->handleRequest($request);

        Vigneron::create($data);

        return redirect(route('admin.all'))->with('message', "Le vigneron ". $data['societe'] . " a bien été créé");
    }

    /**
     * Méthode handleRequest () pour gérer d'une part l'insertion des donnés de la création du vigneron
     * et gérer d'autre part l'upload du visuel du reportage
     *
     * @param $request
     * @return $data
     **/
    public function handleRequest ($request)
    {
        // Request Alsace
        if ($request->region == "alsace")
        {
            $data = [
                'societe'               => $request->societe,
                'aliassociete'          => $this->enlevertouteslesmerdes($request->societe),
                'adresse'               => $request->adresse,
                'telephone'             => $request->telephone,
                'site'                  => $request->site,
                'email'                 => $request->email ? $request->email : NULL,
                'latlong'               => $request->latlong,
                'sortevin'              => $request->sortevin,
                'qualitevin'            => $request->qualitevin,
                'actif'                 => !empty($request->actif) ? 1 : 0,
                'francevinicole'        => "France",
                'departement'           => $request->departement,
                'region'                => "alsace",
                'indiceregion'          => '<i class="fa fa-street-view" aria-hidden="true"></i>
                                            <a href="/" data-toggle="tooltip" data-placement="top"
                                                aria-hidden="true" data-original-title="Voir les parcelles">
                                            <span style="font-weight:bold">France</span>
                                            </a>
                                            <i class="fa fa-street-view" aria-hidden="true"></i>
                                            <a href="/france/alsace" data-toggle="tooltip" data-placement="top"
                                                aria-hidden="true" data-original-title="Voir les parcelles">
                                                <span style="font-weight:bold">Alsace</span>
                                            </a>',
                'regionvinicole'        => "Alsace",
                'aliasregionvinicole'   => "alsace",
                'communevinicole'       => "Alsace",
                'aliascommunevinicole'  => "alsace",
                'localitevinicole'      => "Alsace",
                'aliaslocalitevinicole' => "alsace",
                'zoom'                  => 9,
                'latlongregion'         => "48.1,7.2",
                'reportage'             => $request->reportage,
                'fiche'                 => $request->fiche,
                'video'                 => $request->video,
                'user_id'               => !empty($request->user_id) ? $request->user_id : NULL,
                'paye'                  => !empty($request->paye) ? $request->paye : 0,
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ];

            return $data;
        }

        // Request Armagnac
        if ($request->region == "armagnac")
        {
            $data = [
                'societe'               => $request->societe,
                'aliassociete'          => $this->enlevertouteslesmerdes($request->societe),
                'adresse'               => $request->adresse,
                'telephone'             => $request->telephone,
                'site'                  => $request->site,
                'email'                 => $request->email ? $request->email : NULL,
                'latlong'               => $request->latlong,
                'sortevin'              => $request->sortevin,
                'qualitevin'            => $request->qualitevin,
                'actif'                 => !empty($request->actif) ? 1 : 0,
                'francevinicole'        => "France",
                'departement'           => $request->departement,
                'region'                => "armagnac",
                'indiceregion'          => '<i class="fa fa-street-view" aria-hidden="true"></i>
                                            <a href="/" data-toggle="tooltip" data-placement="top"
                                                aria-hidden="true" data-original-title="Voir les parcelles">
                                            <span style="font-weight:bold">France</span>
                                            </a>
                                            <i class="fa fa-street-view" aria-hidden="true"></i>
                                            <a href="/france/armagnac" data-toggle="tooltip" data-placement="top"
                                                aria-hidden="true" data-original-title="Voir les parcelles">
                                                <span style="font-weight:bold">Armagnac</span>
                                            </a>',
                'regionvinicole'        => "Armagnac",
                'aliasregionvinicole'   => "armagnac",
                'communevinicole'       => "Armagnac",
                'aliascommunevinicole'  => "armagnac",
                'localitevinicole'      => "Armagnac",
                'aliaslocalitevinicole' => "armagnac",
                'zoom'                  => 10,
                'latlongregion'         => "44,0.1",
                'reportage'             => $request->reportage,
                'fiche'                 => $request->fiche,
                'video'                 => $request->video,
                'user_id'               => !empty($request->user_id) ? $request->user_id : NULL,
                'paye'                  => !empty($request->paye) ? $request->paye : 0,
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ];

            return $data;
        }

        // Request Auvergne
        if ($request->region == "auvergne")
        {
            $data = [
                'societe'               => $request->societe,
                'aliassociete'          => $this->enlevertouteslesmerdes($request->societe),
                'adresse'               => $request->adresse,
                'telephone'             => $request->telephone,
                'site'                  => $request->site,
                'email'                 => $request->email ? $request->email : NULL,
                'latlong'               => $request->latlong,
                'sortevin'              => $request->sortevin,
                'qualitevin'            => $request->qualitevin,
                'actif'                 => !empty($request->actif) ? 1 : 0,
                'francevinicole'        => "France",
                'departement'           => $request->departement,
                'region'                => "auvergne",
                'indiceregion'          => '<i class="fa fa-street-view" aria-hidden="true"></i>
                                            <a href="/" data-toggle="tooltip" data-placement="top"
                                                aria-hidden="true" data-original-title="Voir les parcelles">
                                            <span style="font-weight:bold">France</span>
                                            </a>
                                            <i class="fa fa-street-view" aria-hidden="true"></i>
                                            <a href="/france/auvergne" data-toggle="tooltip" data-placement="top"
                                                aria-hidden="true" data-original-title="Voir les parcelles">
                                                <span style="font-weight:bold">Auvergne</span>
                                            </a>',
                'regionvinicole'        => "Auvergne",
                'aliasregionvinicole'   => "auvergne",
                'communevinicole'       => "Auvergne",
                'aliascommunevinicole'  => "auvergne",
                'localitevinicole'      => "Auvergne",
                'aliaslocalitevinicole' => "auvergne",
                'zoom'                  => 9,
                'latlongregion'         => "45.70,3.16",
                'reportage'             => $request->reportage,
                'fiche'                 => $request->fiche,
                'video'                 => $request->video,
                'user_id'               => !empty($request->user_id) ? $request->user_id : NULL,
                'paye'                  => !empty($request->paye) ? $request->paye : 0,
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ];

            return $data;
        }

        // Request Beaujolais
        if ($request->region == "beaujolais")
        {
            $data = [
                'societe'               => $request->societe,
                'aliassociete'          => $this->enlevertouteslesmerdes($request->societe),
                'adresse'               => $request->adresse,
                'telephone'             => $request->telephone,
                'site'                  => $request->site,
                'email'                 => $request->email ? $request->email : NULL,
                'latlong'               => $request->latlong,
                'sortevin'              => $request->sortevin,
                'qualitevin'            => $request->qualitevin,
                'actif'                 => !empty($request->actif) ? 1 : 0,
                'francevinicole'        => "France",
                'departement'           => $request->departement,
                'region'                => "beaujolais",
                'indiceregion'          => '<i class="fa fa-street-view" aria-hidden="true"></i>
                                            <a href="/" data-toggle="tooltip" data-placement="top"
                                                aria-hidden="true" data-original-title="Voir les parcelles">
                                            <span style="font-weight:bold">France</span>
                                            </a>
                                            <i class="fa fa-street-view" aria-hidden="true"></i>
                                            <a href="/france/beaujolais" data-toggle="tooltip" data-placement="top"
                                                aria-hidden="true" data-original-title="Voir les parcelles">
                                                <span style="font-weight:bold">Beaujolais</span>
                                            </a>',
                'regionvinicole'        => "Beaujolais",
                'aliasregionvinicole'   => "beaujolais",
                'communevinicole'       => "Beaujolais",
                'aliascommunevinicole'  => "beaujolais",
                'localitevinicole'      => "Beaujolais",
                'aliaslocalitevinicole' => "beaujolais",
                'zoom'                  => 9,
                'latlongregion'         => "46.2,4.7",
                'reportage'             => $request->reportage,
                'fiche'                 => $request->fiche,
                'video'                 => $request->video,
                'user_id'               => !empty($request->user_id) ? $request->user_id : NULL,
                'paye'                  => !empty($request->paye) ? $request->paye : 0,
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ];

            return $data;
        }

        // Request Bordeaux
        if ($request->region == "bordeaux")
        {
            $data = [
                'societe'               => $request->societe,
                'aliassociete'          => $this->enlevertouteslesmerdes($request->societe),
                'adresse'               => $request->adresse,
                'telephone'             => $request->telephone,
                'site'                  => $request->site,
                'email'                 => $request->email ? $request->email : NULL,
                'latlong'               => $request->latlong,
                'sortevin'              => $request->sortevin,
                'qualitevin'            => $request->qualitevin,
                'actif'                 => !empty($request->actif) ? 1 : 0,
                'francevinicole'        => "France",
                'departement'           => $request->departement,
                'region'                => "bordeaux",
                'indiceregion'          => '<i class="fa fa-street-view" aria-hidden="true"></i>
                                            <a href="/" data-toggle="tooltip" data-placement="top"
                                                aria-hidden="true" data-original-title="Voir les parcelles">
                                                <span style="font-weight:bold">France</span>
                                            </a>
                                            <i class="fa fa-street-view" aria-hidden="true"></i>
                                            <a href="/france/bordeaux" data-toggle="tooltip" data-placement="top"
                                                aria-hidden="true" data-original-title="Voir les parcelles">
                                                <span style="font-weight:bold">Bordeaux</span>
                                            </a>',
                'regionvinicole'        => "Bordeaux",
                'aliasregionvinicole'   => "bordeaux",
                'communevinicole'       => "Bordeaux",
                'aliascommunevinicole'  => "bordeaux",
                'localitevinicole'      => "Bordeaux",
                'aliaslocalitevinicole' => "bordeaux",
                'zoom'                  => 9,
                'latlongregion'         => "44.62,0",
                'reportage'             => $request->reportage,
                'fiche'                 => $request->fiche,
                'video'                 => $request->video,
                'user_id'               => !empty($request->user_id) ? $request->user_id : NULL,
                'paye'                  => !empty($request->paye) ? $request->paye : 0,
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ];

            return $data;
        }

        // Request Médoc
        if ($request->region == "medoc")
        {
            $data = [
                'societe'               => $request->societe,
                'aliassociete'          => $this->enlevertouteslesmerdes($request->societe),
                'adresse'               => $request->adresse,
                'telephone'             => $request->telephone,
                'site'                  => $request->site,
                'email'                 => $request->email ? $request->email : NULL,
                'latlong'               => $request->latlong,
                'sortevin'              => $request->sortevin,
                'qualitevin'            => $request->qualitevin,
                'actif'                 => !empty($request->actif) ? 1 : 0,
                'francevinicole'        => "France",
                'departement'           => $request->departement,
                'region'                => "medoc",
                'indiceregion'          => '<i class="fa fa-street-view" aria-hidden="true"></i>
                                            <a href="/" data-toggle="tooltip" data-placement="top"
                                                aria-hidden="true" data-original-title="Voir les parcelles">
                                                <span style="font-weight:bold">France</span>
                                            </a>
                                            <i class="fa fa-street-view" aria-hidden="true"></i>
                                            <a href="/france/bordeaux" data-toggle="tooltip" data-placement="top"
                                                aria-hidden="true" data-original-title="Voir les parcelles">
                                                <span style="font-weight:bold">Bordeaux</span>
                                            </a>
                                            <i class="fa fa-street-view" aria-hidden="true"></i>
                                            <a href="/france/bordeaux/medoc" data-toggle="tooltip" data-placement="top"
                                                aria-hidden="true" data-original-title="Voir les parcelles">
                                                <span style="font-weight:bold">Médoc</span>
                                            </a>',
                'regionvinicole'        => "Bordeaux",
                'aliasregionvinicole'   => "bordeaux",
                'communevinicole'       => "Médoc",
                'aliascommunevinicole'  => "medoc",
                'localitevinicole'      => "Médoc",
                'aliaslocalitevinicole' => "medoc",
                'zoom'                  => 10,
                'latlongregion'         => "45.2,-0.8",
                'reportage'             => $request->reportage,
                'fiche'                 => $request->fiche,
                'video'                 => $request->video,
                'paye'                  => !empty($request->paye) ? $request->paye : 0,
                'user_id'               => !empty($request->user_id) ? $request->user_id : NULL,
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ];

            return $data;
        }

        // Request Margaux
        if ($request->region == "margaux")
        {
            $data = [
                'societe'               => $request->societe,
                'aliassociete'          => $this->enlevertouteslesmerdes($request->societe),
                'adresse'               => $request->adresse,
                'telephone'             => $request->telephone,
                'site'                  => $request->site,
                'email'                 => $request->email ? $request->email : NULL,
                'latlong'               => $request->latlong,
                'sortevin'              => $request->sortevin,
                'qualitevin'            => $request->qualitevin,
                'actif'                 => !empty($request->actif) ? 1 : 0,
                'francevinicole'        => "France",
                'departement'           => $request->departement,
                'region'                => "margaux",
                'indiceregion'          => '<i class="fa fa-street-view" aria-hidden="true"></i>
                                        <a href="/" data-toggle="tooltip" data-placement="top"
                                            aria-hidden="true" data-original-title="Voir les parcelles">
                                            <span style="font-weight:bold">France</span>
                                        </a>
                                        <i class="fa fa-street-view" aria-hidden="true"></i>
                                        <a href="/france/bordeaux" data-toggle="tooltip" data-placement="top"
                                            aria-hidden="true" data-original-title="Voir les parcelles">
                                            <span style="font-weight:bold">Bordeaux</span>
                                        </a>
                                        <i class="fa fa-street-view" aria-hidden="true"></i>
                                        <a href="/france/bordeaux/medoc" data-toggle="tooltip" data-placement="top"
                                            aria-hidden="true" data-original-title="Voir les parcelles">
                                            <span style="font-weight:bold">Médoc</span>
                                        </a>
                                        <i class="fa fa-street-view" aria-hidden="true"></i>
                                        <a href="/france/bordeaux/medoc/margaux" data-toggle="tooltip" data-placement="top"
                                            aria-hidden="true" data-original-title="Voir les parcelles">
                                            <span style="font-weight:bold">Margaux</span>
                                        </a>',
                'regionvinicole'        => "Bordeaux",
                'aliasregionvinicole'   => "bordeaux",
                'communevinicole'       => "Médoc",
                'aliascommunevinicole'  => "medoc",
                'localitevinicole'      => "Margaux",
                'aliaslocalitevinicole' => "margaux",
                'zoom'                  => 11,
                'latlongregion'         => "45.04,-0.7",
                'reportage'             => $request->reportage,
                'fiche'                 => $request->fiche,
                'video'                 => $request->video,
                'paye'                  => !empty($request->paye) ? $request->paye : 0,
                'user_id'               => !empty($request->user_id) ? $request->user_id : NULL,
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ];

            return $data;
        }

        // Request Moulis et Listrac
        if ($request->region == "moulis-listrac")
        {
            $data = [
                'societe'               => $request->societe,
                'aliassociete'          => $this->enlevertouteslesmerdes($request->societe),
                'adresse'               => $request->adresse,
                'telephone'             => $request->telephone,
                'site'                  => $request->site,
                'email'                 => $request->email ? $request->email : NULL,
                'latlong'               => $request->latlong,
                'sortevin'              => $request->sortevin,
                'qualitevin'            => $request->qualitevin,
                'actif'                 => !empty($request->actif) ? 1 : 0,
                'francevinicole'        => "France",
                'departement'           => $request->departement,
                'region'                => "moulis-listrac",
                'indiceregion'          => '<i class="fa fa-street-view" aria-hidden="true"></i>
                                            <a href="/" data-toggle="tooltip" data-placement="top"
                                                aria-hidden="true" data-original-title="Voir les parcelles">
                                                <span style="font-weight:bold">France</span>
                                            </a>
                                            <i class="fa fa-street-view" aria-hidden="true"></i>
                                            <a href="/france/bordeaux" data-toggle="tooltip" data-placement="top"
                                                aria-hidden="true" data-original-title="Voir les parcelles">
                                                <span style="font-weight:bold">Bordeaux</span>
                                            </a>
                                            <i class="fa fa-street-view" aria-hidden="true"></i>
                                            <a href="/france/bordeaux/medoc" data-toggle="tooltip" data-placement="top"
                                                aria-hidden="true" data-original-title="Voir les parcelles">
                                                <span style="font-weight:bold">Médoc</span>
                                            </a>
                                            <i class="fa fa-street-view" aria-hidden="true"></i>
                                            <a href="/france/bordeaux/medoc/moulis-listrac" data-toggle="tooltip" data-placement="top"
                                                aria-hidden="true" data-original-title="Voir les parcelles">
                                                <span style="font-weight:bold">Moulis et Listrac</span>
                                            </a>',
                'regionvinicole'        => "Bordeaux",
                'aliasregionvinicole'   => "bordeaux",
                'communevinicole'       => "Médoc",
                'aliascommunevinicole'  => "medoc",
                'localitevinicole'      => "Moulis et Listrac",
                'aliaslocalitevinicole' => "moulis-listrac",
                'zoom'                  => 11,
                'latlongregion'         => "45.065,-0.8",
                'reportage'             => $request->reportage,
                'fiche'                 => $request->fiche,
                'video'                 => $request->video,
                'user_id'               => !empty($request->user_id) ? $request->user_id : NULL,
                'paye'                  => !empty($request->paye) ? $request->paye : 0,
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ];

            return $data;
        }

        // Request Pauillac
        if ($request->region == "pauillac")
        {
            $data = [
                'societe'               => $request->societe,
                'aliassociete'          => $this->enlevertouteslesmerdes($request->societe),
                'adresse'               => $request->adresse,
                'telephone'             => $request->telephone,
                'site'                  => $request->site,
                'email'                 => $request->email ? $request->email : NULL,
                'latlong'               => $request->latlong,
                'sortevin'              => $request->sortevin,
                'qualitevin'            => $request->qualitevin,
                'actif'                 => !empty($request->actif) ? 1 : 0,
                'francevinicole'        => "France",
                'departement'           => $request->departement,
                'region'                => "pauillac",
                'indiceregion'          => '<i class="fa fa-street-view" aria-hidden="true"></i>
                                            <a href="/" data-toggle="tooltip" data-placement="top"
                                                aria-hidden="true" data-original-title="Voir les parcelles">
                                                <span style="font-weight:bold">France</span>
                                            </a>
                                            <i class="fa fa-street-view" aria-hidden="true"></i>
                                            <a href="/france/bordeaux" data-toggle="tooltip" data-placement="top"
                                                aria-hidden="true" data-original-title="Voir les parcelles">
                                                <span style="font-weight:bold">Bordeaux</span>
                                            </a>
                                            <i class="fa fa-street-view" aria-hidden="true"></i>
                                            <a href="/france/bordeaux/medoc" data-toggle="tooltip" data-placement="top"
                                                aria-hidden="true" data-original-title="Voir les parcelles">
                                                <span style="font-weight:bold">Médoc</span>
                                            </a>
                                            <i class="fa fa-street-view" aria-hidden="true"></i>
                                            <a href="/france/bordeaux/medoc/pauillac" data-toggle="tooltip" data-placement="top"
                                                aria-hidden="true" data-original-title="Voir les parcelles">
                                                <span style="font-weight:bold">Pauillac</span>
                                            </a>',
                'regionvinicole'        => "Bordeaux",
                'aliasregionvinicole'   => "bordeaux",
                'communevinicole'       => "Médoc",
                'aliascommunevinicole'  => "medoc",
                'localitevinicole'      => "Pauillac",
                'aliaslocalitevinicole' => "pauillac",
                'zoom'                  => 11,
                'latlongregion'         => "45.2,-0.8",
                'reportage'             => $request->reportage,
                'fiche'                 => $request->fiche,
                'video'                 => $request->video,
                'paye'                  => !empty($request->paye) ? $request->paye : 0,
                'user_id'               => !empty($request->user_id) ? $request->user_id : NULL,
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ];

            return $data;
        }

        // Request Saint-Estèphe
        if ($request->region == "saint-estephe")
        {
            $data = [
                'societe'               => $request->societe,
                'aliassociete'          => $this->enlevertouteslesmerdes($request->societe),
                'adresse'               => $request->adresse,
                'telephone'             => $request->telephone,
                'site'                  => $request->site,
                'email'                 => $request->email ? $request->email : NULL,
                'latlong'               => $request->latlong,
                'sortevin'              => $request->sortevin,
                'qualitevin'            => $request->qualitevin,
                'actif'                 => !empty($request->actif) ? 1 : 0,
                'francevinicole'        => "France",
                'departement'           => $request->departement,
                'region'                => "saint-estephe",
                'indiceregion'          => '<i class="fa fa-street-view" aria-hidden="true"></i>
                                            <a href="/" data-toggle="tooltip" data-placement="top"
                                                aria-hidden="true" data-original-title="Voir les parcelles">
                                                <span style="font-weight:bold">France</span>
                                            </a>
                                            <i class="fa fa-street-view" aria-hidden="true"></i>
                                            <a href="/france/bordeaux" data-toggle="tooltip" data-placement="top"
                                                aria-hidden="true" data-original-title="Voir les parcelles">
                                                <span style="font-weight:bold">Bordeaux</span>
                                            </a>
                                            <i class="fa fa-street-view" aria-hidden="true"></i>
                                            <a href="/france/bordeaux/medoc" data-toggle="tooltip" data-placement="top"
                                                aria-hidden="true" data-original-title="Voir les parcelles">
                                                <span style="font-weight:bold">Médoc</span>
                                            </a>
                                            <i class="fa fa-street-view" aria-hidden="true"></i>
                                            <a href="/france/bordeaux/medoc/saint-estephe" data-toggle="tooltip" data-placement="top"
                                                aria-hidden="true" data-original-title="Voir les parcelles">
                                                <span style="font-weight:bold">Saint-Estèphe</span>
                                            </a>',
                'regionvinicole'        => "Bordeaux",
                'aliasregionvinicole'   => "bordeaux",
                'communevinicole'       => "Médoc",
                'aliascommunevinicole'  => "medoc",
                'localitevinicole'      => "Saint-Estèphe",
                'aliaslocalitevinicole' => "saint-estephe",
                'zoom'                  => 11,
                'latlongregion'         => "45.25,-0.78",
                'reportage'             => $request->reportage,
                'fiche'                 => $request->fiche,
                'video'                 => $request->video,
                'paye'                  => !empty($request->paye) ? $request->paye : 0,
                'user_id'               => !empty($request->user_id) ? $request->user_id : NULL,
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ];

            return $data;
        }

        // Request Saint-Julien
        if ($request->region == "saint-julien")
        {
            $data = [
                'societe'               => $request->societe,
                'aliassociete'          => $this->enlevertouteslesmerdes($request->societe),
                'adresse'               => $request->adresse,
                'telephone'             => $request->telephone,
                'site'                  => $request->site,
                'email'                 => $request->email ? $request->email : NULL,
                'latlong'               => $request->latlong,
                'sortevin'              => $request->sortevin,
                'qualitevin'            => $request->qualitevin,
                'actif'                 => !empty($request->actif) ? 1 : 0,
                'francevinicole'        => "France",
                'departement'           => $request->departement,
                'region'                => "saint-julien",
                'indiceregion'          => '<i class="fa fa-street-view" aria-hidden="true"></i>
                                            <a href="/" data-toggle="tooltip" data-placement="top"
                                                aria-hidden="true" data-original-title="Voir les parcelles">
                                                <span style="font-weight:bold">France</span>
                                            </a>
                                            <i class="fa fa-street-view" aria-hidden="true"></i>
                                            <a href="/france/bordeaux" data-toggle="tooltip" data-placement="top"
                                                aria-hidden="true" data-original-title="Voir les parcelles">
                                                <span style="font-weight:bold">Bordeaux</span>
                                            </a>
                                            <i class="fa fa-street-view" aria-hidden="true"></i>
                                            <a href="/france/bordeaux/medoc" data-toggle="tooltip" data-placement="top"
                                                aria-hidden="true" data-original-title="Voir les parcelles">
                                                <span style="font-weight:bold">Médoc</span>
                                            </a>
                                            <i class="fa fa-street-view" aria-hidden="true"></i>
                                            <a href="/france/bordeaux/medoc/saint-julien" data-toggle="tooltip" data-placement="top"
                                                aria-hidden="true" data-original-title="Voir les parcelles">
                                                <span style="font-weight:bold">Saint-Julien</span>
                                            </a>',
                'regionvinicole'        => "Bordeaux",
                'aliasregionvinicole'   => "bordeaux",
                'communevinicole'       => "Médoc",
                'aliascommunevinicole'  => "medoc",
                'localitevinicole'      => "Saint-Julien",
                'aliaslocalitevinicole' => "saint-julien",
                'zoom'                  => 12,
                'latlongregion'         => "45.14,-0.75",
                'reportage'             => $request->reportage,
                'fiche'                 => $request->fiche,
                'video'                 => $request->video,
                'paye'                  => !empty($request->paye) ? $request->paye : 0,
                'user_id'               => !empty($request->user_id) ? $request->user_id : NULL,
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ];

            return $data;
        }

        // Request Pessac-Léognan
        if ($request->region == "pessac-leognan")
        {
            $data = [
                'societe'               => $request->societe,
                'aliassociete'          => $this->enlevertouteslesmerdes($request->societe),
                'adresse'               => $request->adresse,
                'telephone'             => $request->telephone,
                'site'                  => $request->site,
                'email'                 => $request->email ? $request->email : NULL,
                'latlong'               => $request->latlong,
                'sortevin'              => $request->sortevin,
                'qualitevin'            => $request->qualitevin,
                'actif'                 => !empty($request->actif) ? 1 : 0,
                'francevinicole'        => "France",
                'departement'           => $request->departement,
                'region'                => "pessac-leognan",
                'indiceregion'          => '<i class="fa fa-street-view" aria-hidden="true"></i>
                                            <a href="/" data-toggle="tooltip" data-placement="top"
                                                aria-hidden="true" data-original-title="Voir les parcelles">
                                                <span style="font-weight:bold">France</span>
                                            </a>
                                            <i class="fa fa-street-view" aria-hidden="true"></i>
                                            <a href="/france/bordeaux" data-toggle="tooltip" data-placement="top"
                                                aria-hidden="true" data-original-title="Voir les parcelles">
                                                <span style="font-weight:bold">Bordeaux</span>
                                            </a>
                                            <i class="fa fa-street-view" aria-hidden="true"></i>
                                            <a href="/france/bordeaux/pessac-leognan" data-toggle="tooltip" data-placement="top"
                                                aria-hidden="true" data-original-title="Voir les parcelles">
                                                <span style="font-weight:bold">Pessac-Léognan</span>
                                            </a>',
                'regionvinicole'        => "Bordeaux",
                'aliasregionvinicole'   => "bordeaux",
                'communevinicole'       => "Pessac-Léognan",
                'aliascommunevinicole'  => "pessac-leognan",
                'localitevinicole'      => "Pessac-Léognan",
                'aliaslocalitevinicole' => "pessac-leognan",
                'zoom'                  => 12,
                'latlongregion'         => "44.72,-0.55",
                'reportage'             => $request->reportage,
                'fiche'                 => $request->fiche,
                'video'                 => $request->video,
                'paye'                  => !empty($request->paye) ? $request->paye : 0,
                'user_id'               => !empty($request->user_id) ? $request->user_id : NULL,
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ];

            return $data;
        }

        // Request Pomerol
        if ($request->region == "pomerol")
        {
            $data = [
                'societe'               => $request->societe,
                'aliassociete'          => $this->enlevertouteslesmerdes($request->societe),
                'adresse'               => $request->adresse,
                'telephone'             => $request->telephone,
                'site'                  => $request->site,
                'email'                 => $request->email ? $request->email : NULL,
                'latlong'               => $request->latlong,
                'sortevin'              => $request->sortevin,
                'qualitevin'            => $request->qualitevin,
                'actif'                 => !empty($request->actif) ? 1 : 0,
                'francevinicole'        => "France",
                'departement'           => $request->departement,
                'region'                => "pomerol",
                'indiceregion'          => '<i class="fa fa-street-view" aria-hidden="true"></i>
                                            <a href="/" data-toggle="tooltip" data-placement="top"
                                                aria-hidden="true" data-original-title="Voir les parcelles">
                                                <span style="font-weight:bold">France</span>
                                            </a>
                                            <i class="fa fa-street-view" aria-hidden="true"></i>
                                            <a href="/france/bordeaux" data-toggle="tooltip" data-placement="top"
                                                aria-hidden="true" data-original-title="Voir les parcelles">
                                                <span style="font-weight:bold">Bordeaux</span>
                                            </a>
                                            <i class="fa fa-street-view" aria-hidden="true"></i>
                                            <a href="/france/bordeaux/pomerol" data-toggle="tooltip" data-placement="top"
                                                aria-hidden="true" data-original-title="Voir les parcelles">
                                                <span style="font-weight:bold">Pomerol</span>
                                            </a>',
                'regionvinicole'        => "Bordeaux",
                'aliasregionvinicole'   => "bordeaux",
                'communevinicole'       => "Pomerol",
                'aliascommunevinicole'  => "pomerol",
                'localitevinicole'      => "Pomerol",
                'aliaslocalitevinicole' => "pomerol",
                'zoom'                  => 12,
                'latlongregion'         => "45.066,-0.78",
                'reportage'             => $request->reportage,
                'fiche'                 => $request->fiche,
                'video'                 => $request->video,
                'paye'                  => !empty($request->paye) ? $request->paye : 0,
                'user_id'               => !empty($request->user_id) ? $request->user_id : NULL,
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ];

            return $data;
        }

        // Request Saint-Émilion
        if ($request->region == "saint-emilion")
        {
            $data = [
                'societe'               => $request->societe,
                'aliassociete'          => $this->enlevertouteslesmerdes($request->societe),
                'adresse'               => $request->adresse,
                'telephone'             => $request->telephone,
                'site'                  => $request->site,
                'email'                 => $request->email ? $request->email : NULL,
                'latlong'               => $request->latlong,
                'sortevin'              => $request->sortevin,
                'qualitevin'            => $request->qualitevin,
                'actif'                 => !empty($request->actif) ? 1 : 0,
                'francevinicole'        => "France",
                'departement'           => $request->departement,
                'region'                => "saint-emilion",
                'indiceregion'          => '<i class="fa fa-street-view" aria-hidden="true"></i>
                                            <a href="/" data-toggle="tooltip" data-placement="top"
                                                aria-hidden="true" data-original-title="Voir les parcelles">
                                                <span style="font-weight:bold">France</span>
                                            </a>
                                            <i class="fa fa-street-view" aria-hidden="true"></i>
                                            <a href="/france/bordeaux" data-toggle="tooltip" data-placement="top"
                                                aria-hidden="true" data-original-title="Voir les parcelles">
                                                <span style="font-weight:bold">Bordeaux</span>
                                            </a>
                                            <i class="fa fa-street-view" aria-hidden="true"></i>
                                            <a href="/france/bordeaux/saint-emilion" data-toggle="tooltip" data-placement="top"
                                                aria-hidden="true" data-original-title="Voir les parcelles">
                                                <span style="font-weight:bold">Saint-Émilion</span>
                                            </a>',
                'regionvinicole'        => "Bordeaux",
                'aliasregionvinicole'   => "bordeaux",
                'communevinicole'       => "Saint-Émilion",
                'aliascommunevinicole'  => "saint-emilion",
                'localitevinicole'      => "Saint-Émilion",
                'aliaslocalitevinicole' => "saint-emilion",
                'zoom'                  => 11,
                'latlongregion'         => "44.87,-0.19",
                'reportage'             => $request->reportage,
                'fiche'                 => $request->fiche,
                'video'                 => $request->video,
                'paye'                  => !empty($request->paye) ? $request->paye : 0,
                'user_id'               => !empty($request->user_id) ? $request->user_id : NULL,
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ];

            return $data;
        }
        
        // Request Sauternes et Barsac
        if ($request->region == "sauternes-et-barsac")
        {
            $data = [
                'societe'               => $request->societe,
                'aliassociete'          => $this->enlevertouteslesmerdes($request->societe),
                'adresse'               => $request->adresse,
                'telephone'             => $request->telephone,
                'site'                  => $request->site,
                'email'                 => $request->email ? $request->email : NULL,
                'latlong'               => $request->latlong,
                'sortevin'              => $request->sortevin,
                'qualitevin'            => $request->qualitevin,
                'actif'                 => !empty($request->actif) ? 1 : 0,
                'francevinicole'        => "France",
                'departement'           => $request->departement,
                'region'                => "sauternes-et-barsac",
                'indiceregion'          => '<i class="fa fa-street-view" aria-hidden="true"></i>
                                            <a href="/" data-toggle="tooltip" data-placement="top"
                                                aria-hidden="true" data-original-title="Voir les parcelles">
                                                <span style="font-weight:bold">France</span>
                                            </a>
                                            <i class="fa fa-street-view" aria-hidden="true"></i>
                                            <a href="/france/bordeaux" data-toggle="tooltip" data-placement="top"
                                                aria-hidden="true" data-original-title="Voir les parcelles">
                                                <span style="font-weight:bold">Bordeaux</span>
                                            </a>
                                            <i class="fa fa-street-view" aria-hidden="true"></i>
                                            <a href="/france/bordeaux/sauternes-barsac" data-toggle="tooltip" data-placement="top"
                                                aria-hidden="true" data-original-title="Voir les parcelles">
                                                <span style="font-weight:bold">Sauternes et Barsac</span>
                                            </a>',
                'regionvinicole'        => "Bordeaux",
                'aliasregionvinicole'   => "bordeaux",
                'communevinicole'       => "Sauternes et Barsac",
                'aliascommunevinicole'  => "sauternes-et-barsac",
                'localitevinicole'      => "Sauternes et Barsac",
                'aliaslocalitevinicole' => "sauternes-et-barsac",
                'zoom'                  => 12,
                'latlongregion'         => "44.53,-0.345",
                'reportage'             => $request->reportage,
                'fiche'                 => $request->fiche,
                'video'                 => $request->video,
                'paye'                  => !empty($request->paye) ? $request->paye : 0,
                'user_id'               => !empty($request->user_id) ? $request->user_id : NULL,
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ];

            return $data;
        }

        // Request Bourgogne
        if ($request->region == "bourgogne")
        {
            $data = [
                'societe'               => $request->societe,
                'aliassociete'          => $this->enlevertouteslesmerdes($request->societe),
                'adresse'               => $request->adresse,
                'telephone'             => $request->telephone,
                'site'                  => $request->site,
                'email'                 => $request->email ? $request->email : NULL,
                'latlong'               => $request->latlong,
                'sortevin'              => $request->sortevin,
                'qualitevin'            => $request->qualitevin,
                'actif'                 => !empty($request->actif) ? 1 : 0,
                'francevinicole'        => "France",
                'departement'           => $request->departement,
                'region'                => "bourgogne",
                'indiceregion'          => '<i class="fa fa-street-view" aria-hidden="true"></i>
                                            <a href="/" data-toggle="tooltip" data-placement="top"
                                                aria-hidden="true" data-original-title="Voir les parcelles">
                                            <span style="font-weight:bold">France</span>
                                            </a>
                                            <i class="fa fa-street-view" aria-hidden="true"></i>
                                            <a href="/france/bourgogne" data-toggle="tooltip" data-placement="top"
                                                aria-hidden="true" data-original-title="Voir les parcelles">
                                                <span style="font-weight:bold">Bourgogne</span>
                                            </a>',
                'regionvinicole'        => "Bourgogne",
                'aliasregionvinicole'   => "bourgogne",
                'communevinicole'       => "Bourgogne",
                'aliascommunevinicole'  => "bourgogne",
                'localitevinicole'      => "Bourgogne",
                'aliaslocalitevinicole' => "bourgogne",
                'zoom'                  => 9,
                'latlongregion'         => "47.5,4.1",
                'reportage'             => $request->reportage,
                'fiche'                 => $request->fiche,
                'video'                 => $request->video,
                'paye'                  => !empty($request->paye) ? $request->paye : 0,
                'user_id'               => !empty($request->user_id) ? $request->user_id : NULL,
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ];

            return $data;
        }

        // Request Chablis
        if ($request->region == "chablis")
        {
            $data = [
                'societe'               => $request->societe,
                'aliassociete'          => $this->enlevertouteslesmerdes($request->societe),
                'adresse'               => $request->adresse,
                'telephone'             => $request->telephone,
                'site'                  => $request->site,
                'email'                 => $request->email ? $request->email : NULL,
                'latlong'               => $request->latlong,
                'sortevin'              => $request->sortevin,
                'qualitevin'            => $request->qualitevin,
                'actif'                 => !empty($request->actif) ? 1 : 0,
                'francevinicole'        => "France",
                'departement'           => $request->departement,
                'region'                => "chablis",
                'indiceregion'          => '<i class="fa fa-street-view" aria-hidden="true"></i>
                                            <a href="/" data-toggle="tooltip" data-placement="top"
                                                aria-hidden="true" data-original-title="Voir les parcelles">
                                            <span style="font-weight:bold">France</span>
                                            </a>
                                            <i class="fa fa-street-view" aria-hidden="true"></i>
                                            <a href="/france/bourgogne" data-toggle="tooltip" data-placement="top"
                                                aria-hidden="true" data-original-title="Voir les parcelles">
                                                <span style="font-weight:bold">Bourgogne</span>
                                            </a>
                                            <i class="fa fa-street-view" aria-hidden="true"></i>
                                            <a href="/france/bourgogne/chablis" data-toggle="tooltip" data-placement="top"
                                                aria-hidden="true" data-original-title="Voir les parcelles">
                                                <span style="font-weight:bold">Chablis</span>
                                            </a>',
                'regionvinicole'        => "Bourgogne",
                'aliasregionvinicole'   => "bourgogne",
                'communevinicole'       => "Chablis",
                'aliascommunevinicole'  => "chablis",
                'localitevinicole'      => "Chablis",
                'aliaslocalitevinicole' => "chablis",
                'zoom'                  => 11,
                'latlongregion'         => "47.81,3.8",
                'reportage'             => $request->reportage,
                'fiche'                 => $request->fiche,
                'video'                 => $request->video,
                'paye'                  => !empty($request->paye) ? $request->paye : 0,
                'user_id'               => !empty($request->user_id) ? $request->user_id : NULL,
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ];

            return $data;
        }

        // Request Grands Crus de Chablis
        if ($request->region == "grands-crus-de-chablis")
        {
            $data = [
                'societe'               => $request->societe,
                'aliassociete'          => $this->enlevertouteslesmerdes($request->societe),
                'adresse'               => $request->adresse,
                'telephone'             => $request->telephone,
                'site'                  => $request->site,
                'email'                 => $request->email ? $request->email : NULL,
                'latlong'               => $request->latlong,
                'sortevin'              => $request->sortevin,
                'qualitevin'            => $request->qualitevin,
                'actif'                 => !empty($request->actif) ? 1 : 0,
                'francevinicole'        => "France",
                'departement'           => $request->departement,
                'region'                => "grands-crus-de-chablis",
                'indiceregion'          => '<i class="fa fa-street-view" aria-hidden="true"></i>
                                            <a href="/" data-toggle="tooltip" data-placement="top"
                                                aria-hidden="true" data-original-title="Voir les parcelles">
                                            <span style="font-weight:bold">France</span>
                                            </a>
                                            <i class="fa fa-street-view" aria-hidden="true"></i>
                                            <a href="/france/bourgogne" data-toggle="tooltip" data-placement="top"
                                                aria-hidden="true" data-original-title="Voir les parcelles">
                                                <span style="font-weight:bold">Bourgogne</span>
                                            </a>
                                            <i class="fa fa-street-view" aria-hidden="true"></i>
                                            <a href="/france/bourgogne/chablis" data-toggle="tooltip" data-placement="top"
                                                aria-hidden="true" data-original-title="Voir les parcelles">
                                                <span style="font-weight:bold">Chablis</span>
                                            </a>
                                            <i class="fa fa-street-view" aria-hidden="true"></i>
                                            <a href="/france/bourgogne/chablis/grands-crus-de-chablis" data-toggle="tooltip" data-placement="top"
                                                aria-hidden="true" data-original-title="Voir les parcelles">
                                                <span style="font-weight:bold">Grands Crus de Chablis</span>
                                            </a>',
                'regionvinicole'        => "Bourgogne",
                'aliasregionvinicole'   => "bourgogne",
                'communevinicole'       => "Chablis",
                'aliascommunevinicole'  => "chablis",
                'localitevinicole'      => "Grands Crus de Chablis",
                'aliaslocalitevinicole' => "grands-crus-de-chablis",
                'zoom'                  => 14,
                'latlongregion'         => "47.8,3.8",
                'reportage'             => $request->reportage,
                'fiche'                 => $request->fiche,
                'video'                 => $request->video,
                'paye'                  => !empty($request->paye) ? $request->paye : 0,
                'user_id'               => !empty($request->user_id) ? $request->user_id : NULL,
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ];

            return $data;
        }

        // Request Côte de Nuits
        if ($request->region == "cote-de-nuits")
        {
            $data = [
                'societe'               => $request->societe,
                'aliassociete'          => $this->enlevertouteslesmerdes($request->societe),
                'adresse'               => $request->adresse,
                'telephone'             => $request->telephone,
                'site'                  => $request->site,
                'email'                 => $request->email ? $request->email : NULL,
                'latlong'               => $request->latlong,
                'sortevin'              => $request->sortevin,
                'qualitevin'            => $request->qualitevin,
                'actif'                 => !empty($request->actif) ? 1 : 0,
                'francevinicole'        => "France",
                'departement'           => $request->departement,
                'region'                => "cote-de-nuits",
                'indiceregion'          => 'Côte de Nuits
                                            <i class="fa fa-street-view" aria-hidden="true"></i>
                                            <a href="/" data-toggle="tooltip" data-placement="top"
                                                aria-hidden="true" data-original-title="Voir les parcelles">
                                            <span style="font-weight:bold">France</span>
                                            </a>
                                            <i class="fa fa-street-view" aria-hidden="true"></i>
                                            <a href="/france/bourgogne" data-toggle="tooltip" data-placement="top"
                                                aria-hidden="true" data-original-title="Voir les parcelles">
                                                <span style="font-weight:bold">Bourgogne</span>
                                            </a>
                                            <i class="fa fa-street-view" aria-hidden="true"></i>
                                            <a href="/france/bourgogne/cote-de-nuits" data-toggle="tooltip" data-placement="top"
                                                aria-hidden="true" data-original-title="Voir les parcelles">
                                                <span style="font-weight:bold">Côte de Nuits</span>
                                            </a>',
                'regionvinicole'        => "Bourgogne",
                'aliasregionvinicole'   => "bourgogne",
                'communevinicole'       => "Côte de Nuits",
                'aliascommunevinicole'  => "cote-de-nuits",
                'localitevinicole'      => "Côte de Nuits",
                'aliaslocalitevinicole' => "cote-de-nuits",
                'zoom'                  => 11,
                'latlongregion'         => "47.18,4.95",
                'reportage'             => $request->reportage,
                'fiche'                 => $request->fiche,
                'video'                 => $request->video,
                'paye'                  => !empty($request->paye) ? $request->paye : 0,
                'user_id'               => !empty($request->user_id) ? $request->user_id : NULL,
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ];

            return $data;
        }
 
        // Request Chambolle-Musigny et Morey-Saint-Denis
        if ($request->region == "chambolle-musigny-morey-saint-denis")
        {
            $data = [
                'societe'               => $request->societe,
                'aliassociete'          => $this->enlevertouteslesmerdes($request->societe),
                'adresse'               => $request->adresse,
                'telephone'             => $request->telephone,
                'site'                  => $request->site,
                'email'                 => $request->email ? $request->email : NULL,
                'latlong'               => $request->latlong,
                'sortevin'              => $request->sortevin,
                'qualitevin'            => $request->qualitevin,
                'actif'                 => !empty($request->actif) ? 1 : 0,
                'francevinicole'        => "France",
                'departement'           => $request->departement,
                'region'                => "chambolle-musigny-morey-saint-denis",
                'indiceregion'          => '<i class="fa fa-street-view" aria-hidden="true"></i>
                                            <a href="/" data-toggle="tooltip" data-placement="top"
                                                aria-hidden="true" data-original-title="Voir les parcelles">
                                            <span style="font-weight:bold">France</span>
                                            </a>
                                            <i class="fa fa-street-view" aria-hidden="true"></i>
                                            <a href="/france/bourgogne" data-toggle="tooltip" data-placement="top"
                                                aria-hidden="true" data-original-title="Voir les parcelles">
                                                <span style="font-weight:bold">Bourgogne</span>
                                            </a>
                                            <i class="fa fa-street-view" aria-hidden="true"></i>
                                            <a href="/france/bourgogne/cote-de-nuits" data-toggle="tooltip" data-placement="top"
                                                aria-hidden="true" data-original-title="Voir les parcelles">
                                                <span style="font-weight:bold">Côte de Nuits</span>
                                            </a>
                                            <i class="fa fa-street-view" aria-hidden="true"></i>
                                            <a href="/france/bourgogne/cote-de-nuits/chambolle-musigny" data-toggle="tooltip" data-placement="top"
                                                aria-hidden="true" data-original-title="Voir les parcelles">
                                                <span style="font-weight:bold">Chambolle-Musigny</span>
                                            </a>',
                'regionvinicole'        => "Bourgogne",
                'aliasregionvinicole'   => "bourgogne",
                'communevinicole'       => "Côte de Nuits",
                'aliascommunevinicole'  => "cote-de-nuits",
                'localitevinicole'      => "Chambolle-Musigny et Morey-Saint-Denis",
                'aliaslocalitevinicole' => "chambolle-musigny-morey-saint-denis",
                'zoom'                  => 11,
                'latlongregion'         => "47.18,4.95",
                'reportage'             => $request->reportage,
                'fiche'                 => $request->fiche,
                'video'                 => $request->video,
                'paye'                  => !empty($request->paye) ? $request->paye : 0,
                'user_id'               => !empty($request->user_id) ? $request->user_id : NULL,
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ];

            return $data;
        }

        // Request Gevrey-Chambertin
        if ($request->region == "gevrey-chambertin")
        {
            $data = [
                'societe'               => $request->societe,
                'aliassociete'          => $this->enlevertouteslesmerdes($request->societe),
                'adresse'               => $request->adresse,
                'telephone'             => $request->telephone,
                'site'                  => $request->site,
                'email'                 => $request->email ? $request->email : NULL,
                'latlong'               => $request->latlong,
                'sortevin'              => $request->sortevin,
                'qualitevin'            => $request->qualitevin,
                'actif'                 => !empty($request->actif) ? 1 : 0,
                'francevinicole'        => "France",
                'departement'           => $request->departement,
                'region'                => "gevrey-chambertin",
                                            'indiceregion'          => '<i class="fa fa-street-view" aria-hidden="true"></i>
                                            <a href="/" data-toggle="tooltip" data-placement="top"
                                                aria-hidden="true" data-original-title="Voir les parcelles">
                                            <span style="font-weight:bold">France</span>
                                            </a>
                                            <i class="fa fa-street-view" aria-hidden="true"></i>
                                            <a href="/france/bourgogne" data-toggle="tooltip" data-placement="top"
                                                aria-hidden="true" data-original-title="Voir les parcelles">
                                                <span style="font-weight:bold">Bourgogne</span>
                                            </a>
                                            <i class="fa fa-street-view" aria-hidden="true"></i>
                                            <a href="/france/bourgogne/cote-de-nuits" data-toggle="tooltip" data-placement="top"
                                                aria-hidden="true" data-original-title="Voir les parcelles">
                                                <span style="font-weight:bold">Côte de Nuits</span>
                                            </a>
                                            <i class="fa fa-street-view" aria-hidden="true"></i>
                                            <a href="/france/bourgogne/cote-de-nuits/gevrey-chambertin" data-toggle="tooltip" data-placement="top"
                                                aria-hidden="true" data-original-title="Voir les parcelles">
                                                <span style="font-weight:bold">Gevrey-Chambertin</span>
                                            </a>',
                'regionvinicole'        => "Bourgogne",
                'aliasregionvinicole'   => "bourgogne",
                'communevinicole'       => "Côte de Nuits",
                'aliascommunevinicole'  => "cote-de-nuits",
                'localitevinicole'      => "Gevrey-Chambertin",
                'aliaslocalitevinicole' => "gevrey-chambertin",
                'zoom'                  => 11,
                'latlongregion'         => "47.18,4.95",
                'reportage'             => $request->reportage,
                'fiche'                 => $request->fiche,
                'video'                 => $request->video,
                'paye'                  => !empty($request->paye) ? $request->paye : 0,
                'user_id'               => !empty($request->user_id) ? $request->user_id : NULL,
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ];

            return $data;
        }

        // Request Nuits-Saint-Georges
        if ($request->region == "nuits-saint-georges")
        {
            $data = [
                'societe'               => $request->societe,
                'aliassociete'          => $this->enlevertouteslesmerdes($request->societe),
                'adresse'               => $request->adresse,
                'telephone'             => $request->telephone,
                'site'                  => $request->site,
                'email'                 => $request->email ? $request->email : NULL,
                'latlong'               => $request->latlong,
                'sortevin'              => $request->sortevin,
                'qualitevin'            => $request->qualitevin,
                'actif'                 => !empty($request->actif) ? 1 : 0,
                'francevinicole'        => "France",
                'departement'           => $request->departement,
                'region'                => "nuits-saint-georges",
                'indiceregion'          => '<i class="fa fa-street-view" aria-hidden="true"></i>
                                            <a href="/" data-toggle="tooltip" data-placement="top"
                                                aria-hidden="true" data-original-title="Voir les parcelles">
                                            <span style="font-weight:bold">France</span>
                                            </a>
                                            <i class="fa fa-street-view" aria-hidden="true"></i>
                                            <a href="/france/bourgogne" data-toggle="tooltip" data-placement="top"
                                                aria-hidden="true" data-original-title="Voir les parcelles">
                                                <span style="font-weight:bold">Bourgogne</span>
                                            </a>
                                            <i class="fa fa-street-view" aria-hidden="true"></i>
                                            <a href="/france/bourgogne/cote-de-nuits" data-toggle="tooltip" data-placement="top"
                                                aria-hidden="true" data-original-title="Voir les parcelles">
                                                <span style="font-weight:bold">Côte de Nuits</span>
                                            </a>
                                            <i class="fa fa-street-view" aria-hidden="true"></i>
                                            <a href="/france/bourgogne/cote-de-nuits/nuits-saint-georges" data-toggle="tooltip" data-placement="top"
                                                aria-hidden="true" data-original-title="Voir les parcelles">
                                                <span style="font-weight:bold">Nuits-Saint-Georges</span>
                                            </a>',
                'regionvinicole'        => "Bourgogne",
                'aliasregionvinicole'   => "bourgogne",
                'communevinicole'       => "Côte de Nuits",
                'aliascommunevinicole'  => "cote-de-nuits",
                'localitevinicole'      => "Nuits-Saint-Georges",
                'aliaslocalitevinicole' => "nuits-saint-georges",
                'zoom'                  => 11,
                'latlongregion'         => "47.18,4.95",
                'reportage'             => $request->reportage,
                'fiche'                 => $request->fiche,
                'video'                 => $request->video,
                'paye'                  => !empty($request->paye) ? $request->paye : 0,
                'user_id'               => !empty($request->user_id) ? $request->user_id : NULL,
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ];

            return $data;
        }

        // Request Vosne-Romanée
        if ($request->region == "vosne-romanee")
        {
            $data = [
                'societe'               => $request->societe,
                'aliassociete'          => $this->enlevertouteslesmerdes($request->societe),
                'adresse'               => $request->adresse,
                'telephone'             => $request->telephone,
                'site'                  => $request->site,
                'email'                 => $request->email ? $request->email : NULL,
                'latlong'               => $request->latlong,
                'sortevin'              => $request->sortevin,
                'qualitevin'            => $request->qualitevin,
                'actif'                 => !empty($request->actif) ? 1 : 0,
                'francevinicole'        => "France",
                'departement'           => $request->departement,
                'region'                => "vosne-romanee",
                'indiceregion'          => '<i class="fa fa-street-view" aria-hidden="true"></i>
                                            <a href="/" data-toggle="tooltip" data-placement="top"
                                                aria-hidden="true" data-original-title="Voir les parcelles">
                                            <span style="font-weight:bold">France</span>
                                            </a>
                                            <i class="fa fa-street-view" aria-hidden="true"></i>
                                            <a href="/france/bourgogne" data-toggle="tooltip" data-placement="top"
                                                aria-hidden="true" data-original-title="Voir les parcelles">
                                                <span style="font-weight:bold">Bourgogne</span>
                                            </a>
                                            <i class="fa fa-street-view" aria-hidden="true"></i>
                                            <a href="/france/bourgogne/cote-de-nuits" data-toggle="tooltip" data-placement="top"
                                                aria-hidden="true" data-original-title="Voir les parcelles">
                                                <span style="font-weight:bold">Côte de Nuits</span>
                                            </a>
                                            <i class="fa fa-street-view" aria-hidden="true"></i>
                                            <a href="/france/bourgogne/cote-de-nuits/vosne-romanee" data-toggle="tooltip" data-placement="top"
                                                aria-hidden="true" data-original-title="Voir les parcelles">
                                                <span style="font-weight:bold">Vosne-Romanée</span>
                                            </a>',
                'regionvinicole'        => "Bourgogne",
                'aliasregionvinicole'   => "bourgogne",
                'communevinicole'       => "Côtes de Nuits",
                'aliascommunevinicole'  => "cote-de-nuits",
                'localitevinicole'      => "Vosne-Romanée",
                'aliaslocalitevinicole' => "vosne-romanee",
                'zoom'                  => 11,
                'latlongregion'         => "47.18,4.95",
                'reportage'             => $request->reportage,
                'fiche'                 => $request->fiche,
                'video'                 => $request->video,
                'paye'                  => !empty($request->paye) ? $request->paye : 0,
                'user_id'               => !empty($request->user_id) ? $request->user_id : NULL,
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ];

            return $data;
        }

        // Request Vougeot
        if ($request->region == "vougeot")
        {
            $data = [
                'societe'               => $request->societe,
                'aliassociete'          => $this->enlevertouteslesmerdes($request->societe),
                'adresse'               => $request->adresse,
                'telephone'             => $request->telephone,
                'site'                  => $request->site,
                'email'                 => $request->email ? $request->email : NULL,
                'latlong'               => $request->latlong,
                'sortevin'              => $request->sortevin,
                'qualitevin'            => $request->qualitevin,
                'actif'                 => !empty($request->actif) ? 1 : 0,
                'francevinicole'        => "France",
                'departement'           => $request->departement,
                'region'                => "vougeot",
                'indiceregion'          => '<i class="fa fa-street-view" aria-hidden="true"></i>
                                            <a href="/" data-toggle="tooltip" data-placement="top"
                                                aria-hidden="true" data-original-title="Voir les parcelles">
                                            <span style="font-weight:bold">France</span>
                                            </a>
                                            <i class="fa fa-street-view" aria-hidden="true"></i>
                                            <a href="/france/bourgogne" data-toggle="tooltip" data-placement="top"
                                                aria-hidden="true" data-original-title="Voir les parcelles">
                                                <span style="font-weight:bold">Bourgogne</span>
                                            </a>
                                            <i class="fa fa-street-view" aria-hidden="true"></i>
                                            <a href="/france/bourgogne/cote-de-nuits" data-toggle="tooltip" data-placement="top"
                                                aria-hidden="true" data-original-title="Voir les parcelles">
                                                <span style="font-weight:bold">Côte de Nuits</span>
                                            </a>
                                            <i class="fa fa-street-view" aria-hidden="true"></i>
                                            <a href="/france/bourgogne/cote-de-nuits/vougeot" data-toggle="tooltip" data-placement="top"
                                                aria-hidden="true" data-original-title="Voir les parcelles">
                                                <span style="font-weight:bold">Vougeot</span>
                                            </a>',
                'regionvinicole'        => "Bourgogne",
                'aliasregionvinicole'   => "bourgogne",
                'communevinicole'       => "Côtes de Nuits",
                'aliascommunevinicole'  => "cote-de-nuits",
                'localitevinicole'      => "Vougeot",
                'aliaslocalitevinicole' => "vougeot",
                'zoom'                  => 11,
                'latlongregion'         => "47.18,4.95",
                'reportage'             => $request->reportage,
                'fiche'                 => $request->fiche,
                'video'                 => $request->video,
                'paye'                  => !empty($request->paye) ? $request->paye : 0,
                'user_id'               => !empty($request->user_id) ? $request->user_id : NULL,
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ];

            return $data;
        }

        // Request Beaune et Côtes de Beaune
        if ($request->region == "beaune-et-cotes-de-beaune")
        {
            $data = [
                'societe'               => $request->societe,
                'aliassociete'          => $this->enlevertouteslesmerdes($request->societe),
                'adresse'               => $request->adresse,
                'telephone'             => $request->telephone,
                'site'                  => $request->site,
                'email'                 => $request->email ? $request->email : NULL,
                'latlong'               => $request->latlong,
                'sortevin'              => $request->sortevin,
                'qualitevin'            => $request->qualitevin,
                'actif'                 => !empty($request->actif) ? 1 : 0,
                'francevinicole'        => "France",
                'departement'           => $request->departement,
                'region'                => "beaune-et-cotes-de-beaune",
                'indiceregion'          => '<i class="fa fa-street-view" aria-hidden="true"></i>
                                            <a href="/" data-toggle="tooltip" data-placement="top"
                                                aria-hidden="true" data-original-title="Voir les parcelles">
                                            <span style="font-weight:bold">France</span>
                                            </a>
                                            <i class="fa fa-street-view" aria-hidden="true"></i>
                                            <a href="/france/bourgogne" data-toggle="tooltip" data-placement="top"
                                                aria-hidden="true" data-original-title="Voir les parcelles">
                                                <span style="font-weight:bold">Bourgogne</span>
                                            </a>
                                            <i class="fa fa-street-view" aria-hidden="true"></i>
                                            <a href="/france/bourgogne/beaune-et-cotes-de-beaune" data-toggle="tooltip" data-placement="top"
                                                aria-hidden="true" data-original-title="Voir les parcelles">
                                                <span style="font-weight:bold">Beaune et Côtes de Beaune</span>
                                            </a>',
                'regionvinicole'        => "Bourgogne",
                'aliasregionvinicole'   => "bourgogne",
                'communevinicole'       => "Beaune et Côtes de Beaune",
                'aliascommunevinicole'  => "beaune-et-cotes-de-beaune",
                'localitevinicole'      => "Beaune et Côtes de Beaune",
                'aliaslocalitevinicole' => "beaune-et-cotes-de-beaune",
                'zoom'                  => 12,
                'latlongregion'         => "46.98,4.8",
                'reportage'             => $request->reportage,
                'fiche'                 => $request->fiche,
                'video'                 => $request->video,
                'paye'                  => !empty($request->paye) ? $request->paye : 0,
                'user_id'               => !empty($request->user_id) ? $request->user_id : NULL,
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ];

            return $data;
        }

        // Request 1ers crus et Grands Crus de Beaune
        if ($request->region == "1ers-crus-et-grands-crus-de-beaune")
        {
            $data = [
                'societe'               => $request->societe,
                'aliassociete'          => $this->enlevertouteslesmerdes($request->societe),
                'adresse'               => $request->adresse,
                'telephone'             => $request->telephone,
                'site'                  => $request->site,
                'email'                 => $request->email ? $request->email : NULL,
                'latlong'               => $request->latlong,
                'sortevin'              => $request->sortevin,
                'qualitevin'            => $request->qualitevin,
                'actif'                 => !empty($request->actif) ? 1 : 0,
                'francevinicole'        => "France",
                'departement'           => $request->departement,
                'region'                => "1ers-crus-et-grands-crus-de-beaune",
                'indiceregion'          => '<i class="fa fa-street-view" aria-hidden="true"></i>
                                            <a href="/" data-toggle="tooltip" data-placement="top"
                                                aria-hidden="true" data-original-title="Voir les parcelles">
                                            <span style="font-weight:bold">France</span>
                                            </a>
                                            <i class="fa fa-street-view" aria-hidden="true"></i>
                                            <a href="/france/bourgogne" data-toggle="tooltip" data-placement="top"
                                                aria-hidden="true" data-original-title="Voir les parcelles">
                                                <span style="font-weight:bold">Bourgogne</span>
                                            </a>
                                            <i class="fa fa-street-view" aria-hidden="true"></i>
                                            <a href="/france/bourgogne/beaune-et-cotes-de-beaune" data-toggle="tooltip" data-placement="top"
                                                aria-hidden="true" data-original-title="Voir les parcelles">
                                                <span style="font-weight:bold">Beaune et Côtes de Beaune</span>
                                            </a>
                                            <i class="fa fa-street-view" aria-hidden="true"></i>
                                            <a href="/france/bourgogne/beaune-et-cotes-de-beaune/1ers-crus-et-grands-crus" data-toggle="tooltip" data-placement="top"
                                                aria-hidden="true" data-original-title="Voir les parcelles">
                                                <span style="font-weight:bold">1ers crus et Grands Crus</span>
                                            </a>',
                'regionvinicole'        => "Bourgogne",
                'aliasregionvinicole'   => "bourgogne",
                'communevinicole'       => "Beaune et Côtes de Beaune",
                'aliascommunevinicole'  => "beaune-et-cotes-de-beaune",
                'localitevinicole'      => "1ers crus et Grands Crus de Beaune",
                'aliaslocalitevinicole' => "1ers-crus-et-grands-crus-de-beaune",
                'zoom'                  => 12,
                'latlongregion'         => "46.98,4.8",
                'reportage'             => $request->reportage,
                'fiche'                 => $request->fiche,
                'video'                 => $request->video,
                'paye'                  => !empty($request->paye) ? $request->paye : 0,
                'user_id'               => !empty($request->user_id) ? $request->user_id : NULL,
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ];

            return $data;
        }

        // Request Aloxe-Corton
        if ($request->region == "aloxe-corton")
        {
            $data = [
                'societe'               => $request->societe,
                'aliassociete'          => $this->enlevertouteslesmerdes($request->societe),
                'adresse'               => $request->adresse,
                'telephone'             => $request->telephone,
                'site'                  => $request->site,
                'email'                 => $request->email ? $request->email : NULL,
                'latlong'               => $request->latlong,
                'sortevin'              => $request->sortevin,
                'qualitevin'            => $request->qualitevin,
                'actif'                 => !empty($request->actif) ? 1 : 0,
                'francevinicole'        => "France",
                'departement'           => $request->departement,
                'region'                => "aloxe-corton",
                                            'indiceregion'          => '<i class="fa fa-street-view" aria-hidden="true"></i>
                                            <a href="/" data-toggle="tooltip" data-placement="top"
                                                aria-hidden="true" data-original-title="Voir les parcelles">
                                            <span style="font-weight:bold">France</span>
                                            </a>
                                            <i class="fa fa-street-view" aria-hidden="true"></i>
                                            <a href="/france/bourgogne" data-toggle="tooltip" data-placement="top"
                                                aria-hidden="true" data-original-title="Voir les parcelles">
                                                <span style="font-weight:bold">Bourgogne</span>
                                            </a>
                                            <i class="fa fa-street-view" aria-hidden="true"></i>
                                            <a href="/france/bourgogne/beaune-et-cotes-de-beaune" data-toggle="tooltip" data-placement="top"
                                                aria-hidden="true" data-original-title="Voir les parcelles">
                                                <span style="font-weight:bold">Beaune et Côtes de Beaune</span>
                                            </a>
                                            <i class="fa fa-street-view" aria-hidden="true"></i>
                                            <a href="/france/bourgogne/beaune-et-cotes-de-beaune/aloxe-corton" data-toggle="tooltip" data-placement="top"
                                                aria-hidden="true" data-original-title="Voir les parcelles">
                                                <span style="font-weight:bold">Aloxe-Corton</span>
                                            </a>',
                'regionvinicole'        => "Bourgogne",
                'aliasregionvinicole'   => "bourgogne",
                'communevinicole'       => "Beaune et Côtes de Beaune",
                'aliascommunevinicole'  => "beaune-et-cotes-de-beaune",
                'localitevinicole'      => "Aloxe-Corton",
                'aliaslocalitevinicole' => "aloxe-corton",
                'zoom'                  => 12,
                'latlongregion'         => "46.98,4.8",
                'reportage'             => $request->reportage,
                'fiche'                 => $request->fiche,
                'video'                 => $request->video,
                'paye'                  => !empty($request->paye) ? $request->paye : 0,
                'user_id'               => !empty($request->user_id) ? $request->user_id : NULL,
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ];

            return $data;
        }

        // Request Chassagne-Montrachet
        if ($request->region == "chassagne-montrachet")
        {
            $data = [
                'societe'               => $request->societe,
                'aliassociete'          => $this->enlevertouteslesmerdes($request->societe),
                'adresse'               => $request->adresse,
                'telephone'             => $request->telephone,
                'site'                  => $request->site,
                'email'                 => $request->email ? $request->email : NULL,
                'latlong'               => $request->latlong,
                'sortevin'              => $request->sortevin,
                'qualitevin'            => $request->qualitevin,
                'actif'                 => !empty($request->actif) ? 1 : 0,
                'francevinicole'        => "France",
                'departement'           => $request->departement,
                'region'                => "chassagne-montrachet",
                'indiceregion'          => '<i class="fa fa-street-view" aria-hidden="true"></i>
                                            <a href="/" data-toggle="tooltip" data-placement="top"
                                                aria-hidden="true" data-original-title="Voir les parcelles">
                                            <span style="font-weight:bold">France</span>
                                            </a>
                                            <i class="fa fa-street-view" aria-hidden="true"></i>
                                            <a href="/france/bourgogne" data-toggle="tooltip" data-placement="top"
                                                aria-hidden="true" data-original-title="Voir les parcelles">
                                                <span style="font-weight:bold">Bourgogne</span>
                                            </a>
                                            <i class="fa fa-street-view" aria-hidden="true"></i>
                                            <a href="/france/bourgogne/beaune-et-cotes-de-beaune" data-toggle="tooltip" data-placement="top"
                                                aria-hidden="true" data-original-title="Voir les parcelles">
                                                <span style="font-weight:bold">Beaune et Côtes de Beaune</span>
                                            </a>
                                            <i class="fa fa-street-view" aria-hidden="true"></i>
                                            <a href="/france/bourgogne/beaune-et-cotes-de-beaune/chassagne-montrachet" data-toggle="tooltip" data-placement="top"
                                                aria-hidden="true" data-original-title="Voir les parcelles">
                                                <span style="font-weight:bold">Chassagne-Montrachet</span>
                                            </a>',
                'regionvinicole'        => "Bourgogne",
                'aliasregionvinicole'   => "bourgogne",
                'communevinicole'       => "Beaune et Côtes de Beaune",
                'aliascommunevinicole'  => "beaune-et-cotes-de-beaune",
                'localitevinicole'      => "Chassagne-Montrachet",
                'aliaslocalitevinicole' => "chassagne-montrachet",
                'zoom'                  => 12,
                'latlongregion'         => "46.98,4.8",
                'reportage'             => $request->reportage,
                'fiche'                 => $request->fiche,
                'video'                 => $request->video,
                'paye'                  => !empty($request->paye) ? $request->paye : 0,
                'user_id'               => !empty($request->user_id) ? $request->user_id : NULL,
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ];

            return $data;
        }

        // Request Pommard
        if ($request->region == "pommard")
        {
            $data = [
                'societe'               => $request->societe,
                'aliassociete'          => $this->enlevertouteslesmerdes($request->societe),
                'adresse'               => $request->adresse,
                'telephone'             => $request->telephone,
                'site'                  => $request->site,
                'email'                 => $request->email ? $request->email : NULL,
                'latlong'               => $request->latlong,
                'sortevin'              => $request->sortevin,
                'qualitevin'            => $request->qualitevin,
                'actif'                 => !empty($request->actif) ? 1 : 0,
                'francevinicole'        => "France",
                'departement'           => $request->departement,
                'region'                => "pommard",
                'indiceregion'          => '<i class="fa fa-street-view" aria-hidden="true"></i>
                                            <a href="/" data-toggle="tooltip" data-placement="top"
                                                aria-hidden="true" data-original-title="Voir les parcelles">
                                            <span style="font-weight:bold">France</span>
                                            </a>
                                            <i class="fa fa-street-view" aria-hidden="true"></i>
                                            <a href="/france/bourgogne" data-toggle="tooltip" data-placement="top"
                                                aria-hidden="true" data-original-title="Voir les parcelles">
                                                <span style="font-weight:bold">Bourgogne</span>
                                            </a>
                                            <i class="fa fa-street-view" aria-hidden="true"></i>
                                            <a href="/france/bourgogne/beaune-et-cotes-de-beaune" data-toggle="tooltip" data-placement="top"
                                                aria-hidden="true" data-original-title="Voir les parcelles">
                                                <span style="font-weight:bold">Beaune et Côtes de Beaune</span>
                                            </a>
                                            <i class="fa fa-street-view" aria-hidden="true"></i>
                                            <a href="/france/bourgogne/beaune-et-cotes-de-beaune/pommard" data-toggle="tooltip" data-placement="top"
                                                aria-hidden="true" data-original-title="Voir les parcelles">
                                                <span style="font-weight:bold">Pommard</span>
                                            </a>',
                'regionvinicole'        => "Bourgogne",
                'aliasregionvinicole'   => "bourgogne",
                'communevinicole'       => "Beaune et Côtes de Beaune",
                'aliascommunevinicole'  => "beaune-et-cotes-de-beaune",
                'localitevinicole'      => "Pommard",
                'aliaslocalitevinicole' => "pommard",
                'zoom'                  => 12,
                'latlongregion'         => "46.98,4.8",
                'reportage'             => $request->reportage,
                'fiche'                 => $request->fiche,
                'video'                 => $request->video,
                'paye'                  => !empty($request->paye) ? $request->paye : 0,
                'user_id'               => !empty($request->user_id) ? $request->user_id : NULL,
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ];

            return $data;
        }

        // Request Puligny-Montrachet
        if ($request->region == "puligny-montrachet")
        {
            $data = [
                'societe'               => $request->societe,
                'aliassociete'          => $this->enlevertouteslesmerdes($request->societe),
                'adresse'               => $request->adresse,
                'telephone'             => $request->telephone,
                'site'                  => $request->site,
                'email'                 => $request->email ? $request->email : NULL,
                'latlong'               => $request->latlong,
                'sortevin'              => $request->sortevin,
                'qualitevin'            => $request->qualitevin,
                'actif'                 => !empty($request->actif) ? 1 : 0,
                'francevinicole'        => "France",
                'departement'           => $request->departement,
                'region'                => "puligny-montrachet",
                'indiceregion'          => '<i class="fa fa-street-view" aria-hidden="true"></i>
                                            <a href="/" data-toggle="tooltip" data-placement="top"
                                                aria-hidden="true" data-original-title="Voir les parcelles">
                                            <span style="font-weight:bold">France</span>
                                            </a>
                                            <i class="fa fa-street-view" aria-hidden="true"></i>
                                            <a href="/france/bourgogne" data-toggle="tooltip" data-placement="top"
                                                aria-hidden="true" data-original-title="Voir les parcelles">
                                                <span style="font-weight:bold">Bourgogne</span>
                                            </a>
                                            <i class="fa fa-street-view" aria-hidden="true"></i>
                                            <a href="/france/bourgogne/beaune-et-cotes-de-beaune" data-toggle="tooltip" data-placement="top"
                                                aria-hidden="true" data-original-title="Voir les parcelles">
                                                <span style="font-weight:bold">Beaune et Côtes de Beaune</span>
                                            </a>
                                            <i class="fa fa-street-view" aria-hidden="true"></i>
                                            <a href="/france/bourgogne/beaune-et-cotes-de-beaune/puligny-montrachet" data-toggle="tooltip" data-placement="top"
                                                aria-hidden="true" data-original-title="Voir les parcelles">
                                                <span style="font-weight:bold">Puligny-Montrachet</span>
                                            </a>',
                'regionvinicole'        => "Bourgogne",
                'aliasregionvinicole'   => "bourgogne",
                'communevinicole'       => "Beaune et Côtes de Beaune",
                'aliascommunevinicole'  => "beaune-et-cotes-de-beaune",
                'localitevinicole'      => "Puligny-Montrachet",
                'aliaslocalitevinicole' => "puligny-montrachet",
                'zoom'                  => 12,
                'latlongregion'         => "46.98,4.8",
                'reportage'             => $request->reportage,
                'fiche'                 => $request->fiche,
                'video'                 => $request->video,
                'paye'                  => !empty($request->paye) ? $request->paye : 0,
                'user_id'               => !empty($request->user_id) ? $request->user_id : NULL,
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ];

            return $data;
        }

        // Request Volnay
        if ($request->region == "volnay")
        {
            $data = [
                'societe'               => $request->societe,
                'aliassociete'          => $this->enlevertouteslesmerdes($request->societe),
                'adresse'               => $request->adresse,
                'telephone'             => $request->telephone,
                'site'                  => $request->site,
                'email'                 => $request->email ? $request->email : NULL,
                'latlong'               => $request->latlong,
                'sortevin'              => $request->sortevin,
                'qualitevin'            => $request->qualitevin,
                'actif'                 => !empty($request->actif) ? 1 : 0,
                'francevinicole'        => "France",
                'departement'           => $request->departement,
                'region'                => "volnay",
                'indiceregion'          => '<i class="fa fa-street-view" aria-hidden="true"></i>
                                            <a href="/" data-toggle="tooltip" data-placement="top"
                                                aria-hidden="true" data-original-title="Voir les parcelles">
                                            <span style="font-weight:bold">France</span>
                                            </a>
                                            <i class="fa fa-street-view" aria-hidden="true"></i>
                                            <a href="/france/bourgogne" data-toggle="tooltip" data-placement="top"
                                                aria-hidden="true" data-original-title="Voir les parcelles">
                                                <span style="font-weight:bold">Bourgogne</span>
                                            </a>
                                            <i class="fa fa-street-view" aria-hidden="true"></i>
                                            <a href="/france/bourgogne/beaune-et-cotes-de-beaune" data-toggle="tooltip" data-placement="top"
                                                aria-hidden="true" data-original-title="Voir les parcelles">
                                                <span style="font-weight:bold">Beaune et Côtes de Beaune</span>
                                            </a>
                                            <i class="fa fa-street-view" aria-hidden="true"></i>
                                            <a href="/france/bourgogne/beaune-et-cotes-de-beaune/volnay" data-toggle="tooltip" data-placement="top"
                                                aria-hidden="true" data-original-title="Voir les parcelles">
                                                <span style="font-weight:bold">Volnay</span>
                                            </a>',
                'regionvinicole'        => "Bourgogne",
                'aliasregionvinicole'   => "bourgogne",
                'communevinicole'       => "Beaune et Côtes de Beaune",
                'aliascommunevinicole'  => "beaune-et-cotes-de-beaune",
                'localitevinicole'      => "Volnay",
                'aliaslocalitevinicole' => "volnay",
                'zoom'                  => 12,
                'latlongregion'         => "46.98,4.8",
                'reportage'             => $request->reportage,
                'fiche'                 => $request->fiche,
                'video'                 => $request->video,
                'paye'                  => !empty($request->paye) ? $request->paye : 0,
                'user_id'               => !empty($request->user_id) ? $request->user_id : NULL,
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ];

            return $data;
        }

        // Request Côte Chalonnaise et Couchoise
        if ($request->region == "cote-chalonnaise-et-couchoise")
        {
            $data = [
                'societe'               => $request->societe,
                'aliassociete'          => $this->enlevertouteslesmerdes($request->societe),
                'adresse'               => $request->adresse,
                'telephone'             => $request->telephone,
                'site'                  => $request->site,
                'email'                 => $request->email ? $request->email : NULL,
                'latlong'               => $request->latlong,
                'sortevin'              => $request->sortevin,
                'qualitevin'            => $request->qualitevin,
                'actif'                 => !empty($request->actif) ? 1 : 0,
                'francevinicole'        => "France",
                'departement'           => $request->departement,
                'region'                => "cote-chalonnaise-et-couchoise",
                'indiceregion'          => '<i class="fa fa-street-view" aria-hidden="true"></i>
                                            <a href="/" data-toggle="tooltip" data-placement="top"
                                                aria-hidden="true" data-original-title="Voir les parcelles">
                                            <span style="font-weight:bold">France</span>
                                            </a>
                                            <i class="fa fa-street-view" aria-hidden="true"></i>
                                            <a href="/france/bourgogne" data-toggle="tooltip" data-placement="top"
                                                aria-hidden="true" data-original-title="Voir les parcelles">
                                                <span style="font-weight:bold">Bourgogne</span>
                                            </a>
                                            <i class="fa fa-street-view" aria-hidden="true"></i>
                                            <a href="/france/bourgogne/cote-chalonnaise-et-couchoise" data-toggle="tooltip" data-placement="top"
                                                aria-hidden="true" data-original-title="Voir les parcelles">
                                                <span style="font-weight:bold">Côte Chalonnaise et Couchoise</span>
                                            </a>',
                'regionvinicole'        => "Bourgogne",
                'aliasregionvinicole'   => "bourgogne",
                'communevinicole'       => "Côte Chalonnaise et Couchoise",
                'aliascommunevinicole'  => "cote-chalonnaise-et-couchoise",
                'localitevinicole'      => "Côte Chalonnaise et Couchoise",
                'aliaslocalitevinicole' => "cote-chalonnaise-et-couchoise",
                'zoom'                  => 10,
                'latlongregion'         => "46.6,4.4",
                'reportage'             => $request->reportage,
                'fiche'                 => $request->fiche,
                'video'                 => $request->video,
                'paye'                  => !empty($request->paye) ? $request->paye : 0,
                'user_id'               => !empty($request->user_id) ? $request->user_id : NULL,
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ];

            return $data;
        }

        // Request Mâcon
        if ($request->region == "macon")
        {
            $data = [
                'societe'               => $request->societe,
                'aliassociete'          => $this->enlevertouteslesmerdes($request->societe),
                'adresse'               => $request->adresse,
                'telephone'             => $request->telephone,
                'site'                  => $request->site,
                'email'                 => $request->email ? $request->email : NULL,
                'latlong'               => $request->latlong,
                'sortevin'              => $request->sortevin,
                'qualitevin'            => $request->qualitevin,
                'actif'                 => !empty($request->actif) ? 1 : 0,
                'francevinicole'        => "France",
                'departement'           => $request->departement,
                'region'                => "macon",
                'indiceregion'          => '<i class="fa fa-street-view" aria-hidden="true"></i>
                                            <a href="/" data-toggle="tooltip" data-placement="top"
                                                aria-hidden="true" data-original-title="Voir les parcelles">
                                            <span style="font-weight:bold">France</span>
                                            </a>
                                            <i class="fa fa-street-view" aria-hidden="true"></i>
                                            <a href="/france/bourgogne" data-toggle="tooltip" data-placement="top"
                                                aria-hidden="true" data-original-title="Voir les parcelles">
                                                <span style="font-weight:bold">Bourgogne</span>
                                            </a>
                                            <i class="fa fa-street-view" aria-hidden="true"></i>
                                            <a href="/france/bourgogne/macon" data-toggle="tooltip" data-placement="top"
                                                aria-hidden="true" data-original-title="Voir les parcelles">
                                                <span style="font-weight:bold">Mâcon</span>
                                            </a>',
                'regionvinicole'        => "Bourgogne",
                'aliasregionvinicole'   => "bourgogne",
                'communevinicole'       => "Mâcon",
                'aliascommunevinicole'  => "macon",
                'localitevinicole'      => "Mâcon",
                'aliaslocalitevinicole' => "macon",
                'zoom'                  => 10,
                'latlongregion'         => "46.5,4.74",
                'reportage'             => $request->reportage,
                'fiche'                 => $request->fiche,
                'video'                 => $request->video,
                'paye'                  => !empty($request->paye) ? $request->paye : 0,
                'user_id'               => !empty($request->user_id) ? $request->user_id : NULL,
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ];

            return $data;
        }

        // Request Bugey
        if ($request->region == "bugey")
        {
            $data = [
                'societe'               => $request->societe,
                'aliassociete'          => $this->enlevertouteslesmerdes($request->societe),
                'adresse'               => $request->adresse,
                'telephone'             => $request->telephone,
                'site'                  => $request->site,
                'email'                 => $request->email ? $request->email : NULL,
                'latlong'               => $request->latlong,
                'sortevin'              => $request->sortevin,
                'qualitevin'            => $request->qualitevin,
                'actif'                 => !empty($request->actif) ? 1 : 0,
                'francevinicole'        => "France",
                'departement'           => $request->departement,
                'region'                => "bugey",
                'indiceregion'          => '<i class="fa fa-street-view" aria-hidden="true"></i>
                                            <a href="/" data-toggle="tooltip" data-placement="top"
                                                aria-hidden="true" data-original-title="Voir les parcelles">
                                            <span style="font-weight:bold">France</span>
                                            </a>
                                            <i class="fa fa-street-view" aria-hidden="true"></i>
                                            <a href="/france/bugey" data-toggle="tooltip" data-placement="top"
                                                aria-hidden="true" data-original-title="Voir les parcelles">
                                                <span style="font-weight:bold">Bugey</span>
                                            </a>',
                'regionvinicole'        => "Bugey",
                'aliasregionvinicole'   => "bugey",
                'communevinicole'       => "Bugey",
                'aliascommunevinicole'  => "bugey",
                'localitevinicole'      => "Bugey",
                'aliaslocalitevinicole' => "bugey",
                'zoom'                  => 10,
                'latlongregion'         => "46,5.5",
                'reportage'             => $request->reportage,
                'fiche'                 => $request->fiche,
                'video'                 => $request->video,
                'paye'                  => !empty($request->paye) ? $request->paye : 0,
                'user_id'               => !empty($request->user_id) ? $request->user_id : NULL,
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ];

            return $data;
        }

        // Request Champagne
        if ($request->region == "champagne")
        {
            $data = [
                'societe'               => $request->societe,
                'aliassociete'          => $this->enlevertouteslesmerdes($request->societe),
                'adresse'               => $request->adresse,
                'telephone'             => $request->telephone,
                'site'                  => $request->site,
                'email'                 => $request->email ? $request->email : NULL,
                'latlong'               => $request->latlong,
                'sortevin'              => $request->sortevin,
                'qualitevin'            => $request->qualitevin,
                'actif'                 => !empty($request->actif) ? 1 : 0,
                'francevinicole'        => "France",
                'departement'           => $request->departement,
                'region'                => "champagne",
                'indiceregion'          => '<i class="fa fa-street-view" aria-hidden="true"></i>
                                            <a href="/" data-toggle="tooltip" data-placement="top"
                                                aria-hidden="true" data-original-title="Voir les parcelles">
                                            <span style="font-weight:bold">France</span>
                                            </a>
                                            <i class="fa fa-street-view" aria-hidden="true"></i>
                                            <a href="/france/champagne" data-toggle="tooltip" data-placement="top"
                                                aria-hidden="true" data-original-title="Voir les parcelles">
                                                <span style="font-weight:bold">Champagne</span>
                                            </a>',
                'regionvinicole'        => "Champagne",
                'aliasregionvinicole'   => "champagne",
                'communevinicole'       => "Champagne",
                'aliascommunevinicole'  => "champagne",
                'localitevinicole'      => "Champagne",
                'aliaslocalitevinicole' => "champagne",
                'zoom'                  => 9,
                'latlongregion'         => "49,4",
                'reportage'             => $request->reportage,
                'fiche'                 => $request->fiche,
                'video'                 => $request->video,
                'paye'                  => !empty($request->paye) ? $request->paye : 0,
                'user_id'               => !empty($request->user_id) ? $request->user_id : NULL,
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ];

            return $data;
        }

        // Request De la Vallée de la Marne
        if ($request->region == "vallee-de-la-marne")
        {
            $data = [
                'societe'               => $request->societe,
                'aliassociete'          => $this->enlevertouteslesmerdes($request->societe),
                'adresse'               => $request->adresse,
                'telephone'             => $request->telephone,
                'site'                  => $request->site,
                'email'                 => $request->email ? $request->email : NULL,
                'latlong'               => $request->latlong,
                'sortevin'              => $request->sortevin,
                'qualitevin'            => $request->qualitevin,
                'actif'                 => !empty($request->actif) ? 1 : 0,
                'francevinicole'        => "France",
                'departement'           => $request->departement,
                'region'                => "vallee-de-la-marne",
                'indiceregion'          => '<i class="fa fa-street-view" aria-hidden="true"></i>
                                            <a href="/" data-toggle="tooltip" data-placement="top"
                                                aria-hidden="true" data-original-title="Voir les parcelles">
                                            <span style="font-weight:bold">France</span>
                                            </a>
                                            <i class="fa fa-street-view" aria-hidden="true"></i>
                                            <a href="/france/champagne" data-toggle="tooltip" data-placement="top"
                                                aria-hidden="true" data-original-title="Voir les parcelles">
                                                <span style="font-weight:bold">Champagne</span>
                                            </a>
                                            <i class="fa fa-street-view" aria-hidden="true"></i>
                                            <a href="/france/champagne/vallee-de-la-marne" data-toggle="tooltip" data-placement="top"
                                                aria-hidden="true" data-original-title="Voir les parcelles">
                                                <span style="font-weight:bold">De la Vallée de la Marne</span>
                                            </a>',
                'regionvinicole'        => "Champagne",
                'aliasregionvinicole'   => "champagne",
                'communevinicole'       => "De la Vallée de la Marne",
                'aliascommunevinicole'  => "vallee-de-la-marne",
                'localitevinicole'      => "De la Vallée de la Marne",
                'aliaslocalitevinicole' => "vallee-de-la-marne",
                'zoom'                  => 10,
                'latlongregion'         => "49,3.5",
                'reportage'             => $request->reportage,
                'fiche'                 => $request->fiche,
                'video'                 => $request->video,
                'paye'                  => !empty($request->paye) ? $request->paye : 0,
                'user_id'               => !empty($request->user_id) ? $request->user_id : NULL,
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ];

            return $data;
        }

        // Request De la Montagne de Reims et Côte des Blancs
        if ($request->region == "montagne-de-reims-et-cote-des-blancs")
        {
            $data = [
                'societe'               => $request->societe,
                'aliassociete'          => $this->enlevertouteslesmerdes($request->societe),
                'adresse'               => $request->adresse,
                'telephone'             => $request->telephone,
                'site'                  => $request->site,
                'email'                 => $request->email ? $request->email : NULL,
                'latlong'               => $request->latlong,
                'sortevin'              => $request->sortevin,
                'qualitevin'            => $request->qualitevin,
                'actif'                 => !empty($request->actif) ? 1 : 0,
                'francevinicole'        => "France",
                'departement'           => $request->departement,
                'region'                => "montagne-de-reims-et-cote-des-blancs",
                'indiceregion'          => '<i class="fa fa-street-view" aria-hidden="true"></i>
                                            <a href="/" data-toggle="tooltip" data-placement="top"
                                                aria-hidden="true" data-original-title="Voir les parcelles">
                                            <span style="font-weight:bold">France</span>
                                            </a>
                                            <i class="fa fa-street-view" aria-hidden="true"></i>
                                            <a href="/france/champagne" data-toggle="tooltip" data-placement="top"
                                                aria-hidden="true" data-original-title="Voir les parcelles">
                                                <span style="font-weight:bold">Champagne</span>
                                            </a>
                                            <i class="fa fa-street-view" aria-hidden="true"></i>
                                            <a href="/france/champagne/montagne-de-reims-et-cote-des-blancs" data-toggle="tooltip" data-placement="top"
                                                aria-hidden="true" data-original-title="Voir les parcelles">
                                                <span style="font-weight:bold">De la Montagne de Reims et Côte des Blancs</span>
                                            </a>',
                'regionvinicole'        => "Champagne",
                'aliasregionvinicole'   => "champagne",
                'communevinicole'       => "De la Montagne de Reims et Côte des Blancs",
                'aliascommunevinicole'  => "montagne-de-reims-et-cote-des-blancs",
                'localitevinicole'      => "De la Montagne de Reims et Côte des Blancs",
                'aliaslocalitevinicole' => "montagne-de-reims-et-cote-des-blancs",
                'zoom'                  => 10,
                'latlongregion'         => "48.9,3.8",
                'reportage'             => $request->reportage,
                'fiche'                 => $request->fiche,
                'video'                 => $request->video,
                'paye'                  => !empty($request->paye) ? $request->paye : 0,
                'user_id'               => !empty($request->user_id) ? $request->user_id : NULL,
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ];

            return $data;
        }

        // Request Cognac
        if ($request->region == "cognac")
        {
            $data = [
                'societe'               => $request->societe,
                'aliassociete'          => $this->enlevertouteslesmerdes($request->societe),
                'adresse'               => $request->adresse,
                'telephone'             => $request->telephone,
                'site'                  => $request->site,
                'email'                 => $request->email ? $request->email : NULL,
                'latlong'               => $request->latlong,
                'sortevin'              => $request->sortevin,
                'qualitevin'            => $request->qualitevin,
                'actif'                 => !empty($request->actif) ? 1 : 0,
                'francevinicole'        => "France",
                'departement'           => $request->departement,
                'region'                => "cognac",
                                            'indiceregion'          => '<i class="fa fa-street-view" aria-hidden="true"></i>
                                            <a href="/" data-toggle="tooltip" data-placement="top"
                                                aria-hidden="true" data-original-title="Voir les parcelles">
                                            <span style="font-weight:bold">France</span>
                                            </a>
                                            <i class="fa fa-street-view" aria-hidden="true"></i>
                                            <a href="/france/cognac" data-toggle="tooltip" data-placement="top"
                                                aria-hidden="true" data-original-title="Voir les parcelles">
                                                <span style="font-weight:bold">Cognac</span>
                                            </a>',
                'regionvinicole'        => "Cognac",
                'aliasregionvinicole'   => "cognac",
                'communevinicole'       => "Cognac",
                'aliascommunevinicole'  => "cognac",
                'localitevinicole'      => "Cognac",
                'aliaslocalitevinicole' => "cognac",
                'zoom'                  => 10,
                'latlongregion'         => "45.7,-0.06",
                'reportage'             => $request->reportage,
                'fiche'                 => $request->fiche,
                'video'                 => $request->video,
                'paye'                  => !empty($request->paye) ? $request->paye : 0,
                'user_id'               => !empty($request->user_id) ? $request->user_id : NULL,
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ];

            return $data;
        }

        // Request Corse
        if ($request->region == "corse")
        {
            $data = [
                'societe'               => $request->societe,
                'aliassociete'          => $this->enlevertouteslesmerdes($request->societe),
                'adresse'               => $request->adresse,
                'telephone'             => $request->telephone,
                'site'                  => $request->site,
                'email'                 => $request->email ? $request->email : NULL,
                'latlong'               => $request->latlong,
                'sortevin'              => $request->sortevin,
                'qualitevin'            => $request->qualitevin,
                'actif'                 => !empty($request->actif) ? 1 : 0,
                'francevinicole'        => "France",
                'departement'           => $request->departement,
                'region'                => "corse",
                'indiceregion'          => '<i class="fa fa-street-view" aria-hidden="true"></i>
                                            <a href="/" data-toggle="tooltip" data-placement="top"
                                                aria-hidden="true" data-original-title="Voir les parcelles">
                                            <span style="font-weight:bold">France</span>
                                            </a>
                                            <i class="fa fa-street-view" aria-hidden="true"></i>
                                            <a href="/france/corse" data-toggle="tooltip" data-placement="top"
                                                aria-hidden="true" data-original-title="Voir les parcelles">
                                                <span style="font-weight:bold">Corse</span>
                                            </a>',
                'regionvinicole'        => "Corse",
                'aliasregionvinicole'   => "corse",
                'communevinicole'       => "Corse",
                'aliascommunevinicole'  => "corse",
                'localitevinicole'      => "Corse",
                'aliaslocalitevinicole' => "corse",
                'zoom'                  => 9,
                'latlongregion'         => "42.15,9.3",
                'reportage'             => $request->reportage,
                'fiche'                 => $request->fiche,
                'video'                 => $request->video,
                'paye'                  => !empty($request->paye) ? $request->paye : 0,
                'user_id'               => !empty($request->user_id) ? $request->user_id : NULL,
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ];

            return $data;
        }

        // Request Côtes du Rhône Méridional
        if ($request->region == "cotes-du-rhone-meridional")
        {
            $data = [
                'societe'               => $request->societe,
                'aliassociete'          => $this->enlevertouteslesmerdes($request->societe),
                'adresse'               => $request->adresse,
                'telephone'             => $request->telephone,
                'site'                  => $request->site,
                'email'                 => $request->email ? $request->email : NULL,
                'latlong'               => $request->latlong,
                'sortevin'              => $request->sortevin,
                'qualitevin'            => $request->qualitevin,
                'actif'                 => !empty($request->actif) ? 1 : 0,
                'francevinicole'        => "France",
                'departement'           => $request->departement,
                'region'                => "cotes-du-rhone-meridional",
                'indiceregion'          => '<i class="fa fa-street-view" aria-hidden="true"></i>
                                            <a href="/" data-toggle="tooltip" data-placement="top"
                                                aria-hidden="true" data-original-title="Voir les parcelles">
                                            <span style="font-weight:bold">France</span>
                                            </a>
                                            <i class="fa fa-street-view" aria-hidden="true"></i>
                                            <a href="/france/cotes-du-rhone-meridional" data-toggle="tooltip" data-placement="top"
                                                aria-hidden="true" data-original-title="Voir les parcelles">
                                                <span style="font-weight:bold">Côtes du Rhône Méridional</span>
                                            </a>',
                'regionvinicole'        => "Côtes du Rhône Méridional",
                'aliasregionvinicole'   => "cotes-du-rhone-meridional",
                'communevinicole'       => "Côtes du Rhône Méridional",
                'aliascommunevinicole'  => "cotes-du-rhone-meridional",
                'localitevinicole'      => "Côtes du Rhône Méridional",
                'aliaslocalitevinicole' => "cotes-du-rhone-meridional",
                'zoom'                  =>  9,
                'latlongregion'         => '44.05,4.83',
                'reportage'             => $request->reportage,
                'fiche'                 => $request->fiche,
                'video'                 => $request->video,
                'paye'                  => !empty($request->paye) ? $request->paye : 0,
                'user_id'               => !empty($request->user_id) ? $request->user_id : NULL,
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ];

            return $data;
        }

        // Request Côtes du Rhône Septentrional
        if ($request->region == "cotes-du-rhone-septentrional")
        {
            $data = [
                'societe'               => $request->societe,
                'aliassociete'          => $this->enlevertouteslesmerdes($request->societe),
                'adresse'               => $request->adresse,
                'telephone'             => $request->telephone,
                'site'                  => $request->site,
                'email'                 => $request->email ? $request->email : NULL,
                'latlong'               => $request->latlong,
                'sortevin'              => $request->sortevin,
                'qualitevin'            => $request->qualitevin,
                'actif'                 => !empty($request->actif) ? 1 : 0,
                'francevinicole'        => "France",
                'departement'           => $request->departement,
                'region'                => "cotes-du-rhone-septentrional",
                'indiceregion'          => '',
                'regionvinicole'        => "Côtes du Rhône Septentrional",
                'aliasregionvinicole'   => "cotes-du-rhone-septentrional",
                'communevinicole'       => "Côtes du Rhône Septentrional",
                'aliascommunevinicole'  => "cotes-du-rhone-septentrional",
                'localitevinicole'      => "Côtes du Rhône Septentrional",
                'aliaslocalitevinicole' => "cotes-du-rhone-septentrional",
                'zoom'                  => 9,
                'latlongregion'         => "44.7,5.2",
                'reportage'             => $request->reportage,
                'fiche'                 => $request->fiche,
                'video'                 => $request->video,
                'paye'                  => !empty($request->paye) ? $request->paye : 0,
                'user_id'               => !empty($request->user_id) ? $request->user_id : NULL,
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ];

            return $data;
        }

        // Request Saint-Peray et Cornas
        if ($request->region == "saint-peray-et-cornas")
        {
            $data = [
                'societe'               => $request->societe,
                'aliassociete'          => $this->enlevertouteslesmerdes($request->societe),
                'adresse'               => $request->adresse,
                'telephone'             => $request->telephone,
                'site'                  => $request->site,
                'email'                 => $request->email ? $request->email : NULL,
                'latlong'               => $request->latlong,
                'sortevin'              => $request->sortevin,
                'qualitevin'            => $request->qualitevin,
                'actif'                 => !empty($request->actif) ? 1 : 0,
                'francevinicole'        => "France",
                'departement'           => $request->departement,
                'region'                => "saint-peray-et-cornas",
                'indiceregion'          => '<i class="fa fa-street-view" aria-hidden="true"></i>
                                            <a href="/" data-toggle="tooltip" data-placement="top"
                                                aria-hidden="true" data-original-title="Voir les parcelles">
                                            <span style="font-weight:bold">France</span>
                                            </a>
                                            <i class="fa fa-street-view" aria-hidden="true"></i>
                                            <a href="/france/cotes-du-rhone-septentrional" data-toggle="tooltip" data-placement="top"
                                                aria-hidden="true" data-original-title="Voir les parcelles">
                                                <span style="font-weight:bold">Côtes du Rhône Septentrional</span>
                                            </a>
                                            <i class="fa fa-street-view" aria-hidden="true"></i>
                                            <a href="/france/cotes-du-rhone-septentrional/saint-peray-cornas" data-toggle="tooltip" data-placement="top"
                                                aria-hidden="true" data-original-title="Voir les parcelles">
                                                <span style="font-weight:bold">Saint-Peray et Cornas</span>
                                            </a>',
                'regionvinicole'        => "Côtes du Rhône Septentrional",
                'aliasregionvinicole'   => "cotes-du-rhone-septentrional",
                'communevinicole'       => "Saint-Peray et Cornas",
                'aliascommunevinicole'  => "saint-peray-et-cornas",
                'localitevinicole'      => "Saint-Peray et Cornas",
                'aliaslocalitevinicole' => "saint-peray-et-cornas",
                'zoom'                  => 11,
                'latlongregion'         => "44.8,4.7",
                'reportage'             => $request->reportage,
                'fiche'                 => $request->fiche,
                'video'                 => $request->video,
                'paye'                  => !empty($request->paye) ? $request->paye : 0,
                'user_id'               => !empty($request->user_id) ? $request->user_id : NULL,
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ];

            return $data;
        }

        // Request Jura
        if ($request->region == "jura")
        {
            $data = [
                'societe'               => $request->societe,
                'aliassociete'          => $this->enlevertouteslesmerdes($request->societe),
                'adresse'               => $request->adresse,
                'telephone'             => $request->telephone,
                'site'                  => $request->site,
                'email'                 => $request->email ? $request->email : NULL,
                'latlong'               => $request->latlong,
                'sortevin'              => $request->sortevin,
                'qualitevin'            => $request->qualitevin,
                'actif'                 => !empty($request->actif) ? 1 : 0,
                'francevinicole'        => "France",
                'departement'           => $request->departement,
                'region'                => "jura",
                'indiceregion'          => '<i class="fa fa-street-view" aria-hidden="true"></i>
                                            <a href="/" data-toggle="tooltip" data-placement="top"
                                                aria-hidden="true" data-original-title="Voir les parcelles">
                                            <span style="font-weight:bold">France</span>
                                            </a>
                                            <i class="fa fa-street-view" aria-hidden="true"></i>
                                            <a href="/france/jura" data-toggle="tooltip" data-placement="top"
                                                aria-hidden="true" data-original-title="Voir les parcelles">
                                                <span style="font-weight:bold">Jura</span>
                                            </a>',
                'regionvinicole'        => "Jura",
                'aliasregionvinicole'   => "jura",
                'communevinicole'       => "Jura",
                'aliascommunevinicole'  => "jura",
                'localitevinicole'      => "Jura",
                'aliaslocalitevinicole' => "jura",
                'zoom'                  => 10,
                'latlongregion'         => "47,5.82",
                'reportage'             => $request->reportage,
                'fiche'                 => $request->fiche,
                'video'                 => $request->video,
                'paye'                  => !empty($request->paye) ? $request->paye : 0,
                'user_id'               => !empty($request->user_id) ? $request->user_id : NULL,
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ];

            return $data;
        }

        // Request Languedoc-Roussillon
        if ($request->region == "languedoc-roussillon")
        {
            $data = [
                'societe'               => $request->societe,
                'aliassociete'          => $this->enlevertouteslesmerdes($request->societe),
                'adresse'               => $request->adresse,
                'telephone'             => $request->telephone,
                'site'                  => $request->site,
                'email'                 => $request->email ? $request->email : NULL,
                'latlong'               => $request->latlong,
                'sortevin'              => $request->sortevin,
                'qualitevin'            => $request->qualitevin,
                'actif'                 => !empty($request->actif) ? 1 : 0,
                'francevinicole'        => "France",
                'departement'           => $request->departement,
                'region'                => "languedoc-roussillon",
                'indiceregion'          => '<i class="fa fa-street-view" aria-hidden="true"></i>
                                            <a href="/" data-toggle="tooltip" data-placement="top"
                                                aria-hidden="true" data-original-title="Voir les parcelles">
                                            <span style="font-weight:bold">France</span>
                                            </a>
                                            <i class="fa fa-street-view" aria-hidden="true"></i>
                                            <a href="/france/languedoc-roussillon" data-toggle="tooltip" data-placement="top"
                                                aria-hidden="true" data-original-title="Voir les parcelles">
                                                <span style="font-weight:bold">Languedoc-Roussillon</span>
                                            </a>',
                'regionvinicole'        => "Languedoc-Roussillon",
                'aliasregionvinicole'   => "languedoc-roussillon",
                'communevinicole'       => "Languedoc-Roussillon",
                'aliascommunevinicole'  => "languedoc-roussillon",
                'localitevinicole'      => "Languedoc-Roussillon",
                'aliaslocalitevinicole' => "languedoc-roussillon",
                'zoom'                  => 9,
                'latlongregion'         => "42.48,3",
                'reportage'             => $request->reportage,
                'fiche'                 => $request->fiche,
                'video'                 => $request->video,
                'paye'                  => !empty($request->paye) ? $request->paye : 0,
                'user_id'               => !empty($request->user_id) ? $request->user_id : NULL,
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ];

            return $data;
        }

        // Request Loire
        if ($request->region == "loire")
        {
            $data = [
                'societe'               => $request->societe,
                'aliassociete'          => $this->enlevertouteslesmerdes($request->societe),
                'adresse'               => $request->adresse,
                'telephone'             => $request->telephone,
                'site'                  => $request->site,
                'email'                 => $request->email ? $request->email : NULL,
                'latlong'               => $request->latlong,
                'sortevin'              => $request->sortevin,
                'qualitevin'            => $request->qualitevin,
                'actif'                 => !empty($request->actif) ? 1 : 0,
                'francevinicole'        => "France",
                'departement'           => $request->departement,
                'region'                => "loire",
                'indiceregion'          => '<i class="fa fa-street-view" aria-hidden="true"></i>
                                            <a href="/" data-toggle="tooltip" data-placement="top"
                                                aria-hidden="true" data-original-title="Voir les parcelles">
                                            <span style="font-weight:bold">France</span>
                                            </a>
                                            <i class="fa fa-street-view" aria-hidden="true"></i>
                                            <a href="/france/loire" data-toggle="tooltip" data-placement="top"
                                                aria-hidden="true" data-original-title="Voir les parcelles">
                                                <span style="font-weight:bold">Loire</span>
                                            </a>',
                'regionvinicole'        => "Loire",
                'aliasregionvinicole'   => "loire",
                'communevinicole'       => "Loire",
                'aliascommunevinicole'  => "loire",
                'localitevinicole'      => "Loire",
                'aliaslocalitevinicole' => "loire",
                'zoom'                  => 9,
                'latlongregion'         => "46.9,0.64",
                'reportage'             => $request->reportage,
                'fiche'                 => $request->fiche,
                'video'                 => $request->video,
                'paye'                  => !empty($request->paye) ? $request->paye : 0,
                'user_id'               => !empty($request->user_id) ? $request->user_id : NULL,
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ];

            return $data;
        }

        // Request Pouilly
        if ($request->region === "pouilly")
        {
            $data = [
                'societe'               => $request->societe,
                'aliassociete'          => $this->enlevertouteslesmerdes($request->societe),
                'adresse'               => $request->adresse,
                'telephone'             => $request->telephone,
                'site'                  => $request->site,
                'email'                 => $request->email ? $request->email : NULL,
                'latlong'               => $request->latlong,
                'sortevin'              => $request->sortevin,
                'qualitevin'            => $request->qualitevin,
                'actif'                 => !empty($request->actif) ? 1 : 0,
                'francevinicole'        => "France",
                'departement'           => $request->departement,
                'region'                => "pouilly",
                'indiceregion'          => '<i class="fa fa-street-view" aria-hidden="true"></i>
                                            <a href="/" data-toggle="tooltip" data-placement="top"
                                                aria-hidden="true" data-original-title="Voir les parcelles">
                                            <span style="font-weight:bold">France</span>
                                            </a>
                                            <i class="fa fa-street-view" aria-hidden="true"></i>
                                            <a href="/france/loire" data-toggle="tooltip" data-placement="top"
                                                aria-hidden="true" data-original-title="Voir les parcelles">
                                                <span style="font-weight:bold">Loire</span>
                                            </a>
                                            <i class="fa fa-street-view" aria-hidden="true"></i>
                                            <a href="/france/loire/pouilly" data-toggle="tooltip" data-placement="top"
                                                aria-hidden="true" data-original-title="Voir les parcelles">
                                                <span style="font-weight:bold">Pouilly</span>
                                            </a>',
                'regionvinicole'        => "Loire",
                'aliasregionvinicole'   => "loire",
                'communevinicole'       => "Pouilly",
                'aliascommunevinicole'  => "pouilly",
                'localitevinicole'      => "Pouilly",
                'aliaslocalitevinicole' => "pouilly",
                'zoom'                  => 12,
                'latlongregion'         => "47.28,2.9",
                'reportage'             => $request->reportage,
                'fiche'                 => $request->fiche,
                'video'                 => $request->video,
                'paye'                  => !empty($request->paye) ? $request->paye : 0,
                'user_id'               => !empty($request->user_id) ? $request->user_id : NULL,
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ];

            return $data;
        }

        // Request Quincy et Reuilly
        if ($request->region == "quincy-et-reuilly")
        {
            $data = [
                'societe'               => $request->societe,
                'aliassociete'          => $this->enlevertouteslesmerdes($request->societe),
                'adresse'               => $request->adresse,
                'telephone'             => $request->telephone,
                'site'                  => $request->site,
                'email'                 => $request->email ? $request->email : NULL,
                'latlong'               => $request->latlong,
                'sortevin'              => $request->sortevin,
                'qualitevin'            => $request->qualitevin,
                'actif'                 => !empty($request->actif) ? 1 : 0,
                'francevinicole'        => "France",
                'departement'           => $request->departement,
                'region'                => "quincy-et-reuilly",
                'indiceregion'          => '<i class="fa fa-street-view" aria-hidden="true"></i>
                                            <a href="/" data-toggle="tooltip" data-placement="top"
                                                aria-hidden="true" data-original-title="Voir les parcelles">
                                            <span style="font-weight:bold">France</span>
                                            </a>
                                            <i class="fa fa-street-view" aria-hidden="true"></i>
                                            <a href="/france/loire" data-toggle="tooltip" data-placement="top"
                                                aria-hidden="true" data-original-title="Voir les parcelles">
                                                <span style="font-weight:bold">Loire</span>
                                            </a>
                                            <i class="fa fa-street-view" aria-hidden="true"></i>
                                            <a href="/france/loire/quincy-reuilly" data-toggle="tooltip" data-placement="top"
                                                aria-hidden="true" data-original-title="Voir les parcelles">
                                                <span style="font-weight:bold">Quincy et Reuilly</span>
                                            </a>',
                'regionvinicole'        => "Loire",
                'aliasregionvinicole'   => "loire",
                'communevinicole'       => "Quincy et Reuilly",
                'aliascommunevinicole'  => "quincy-et-reuilly",
                'localitevinicole'      => "Quincy et Reuilly",
                'aliaslocalitevinicole' => "quincy-et-reuilly",
                'zoom'                  => 11,
                'latlongregion'         => "47.08,2.04",
                'reportage'             => $request->reportage,
                'fiche'                 => $request->fiche,
                'video'                 => $request->video,
                'paye'                  => !empty($request->paye) ? $request->paye : 0,
                'user_id'               => !empty($request->user_id) ? $request->user_id : NULL,
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ];

            return $data;
        }

        // Request Sancerre et Menetou-Salon
        if ($request->region == "sancerre-et-menetou-salon")
        {
            $data = [
                'societe'               => $request->societe,
                'aliassociete'          => $this->enlevertouteslesmerdes($request->societe),
                'adresse'               => $request->adresse,
                'telephone'             => $request->telephone,
                'site'                  => $request->site,
                'email'                 => $request->email ? $request->email : NULL,
                'latlong'               => $request->latlong,
                'sortevin'              => $request->sortevin,
                'qualitevin'            => $request->qualitevin,
                'actif'                 => !empty($request->actif) ? 1 : 0,
                'francevinicole'        => "France",
                'departement'           => $request->departement,
                'region'                => "sancerre-et-menetou-salon",
                                            'indiceregion'          => '<i class="fa fa-street-view" aria-hidden="true"></i>
                                            <a href="/" data-toggle="tooltip" data-placement="top"
                                                aria-hidden="true" data-original-title="Voir les parcelles">
                                            <span style="font-weight:bold">France</span>
                                            </a>
                                            <i class="fa fa-street-view" aria-hidden="true"></i>
                                            <a href="/france/loire" data-toggle="tooltip" data-placement="top"
                                                aria-hidden="true" data-original-title="Voir les parcelles">
                                                <span style="font-weight:bold">Loire</span>
                                            </a>
                                            <i class="fa fa-street-view" aria-hidden="true"></i>
                                            <a href="/france/loire/sancerre-menetou-salon" data-toggle="tooltip" data-placement="top"
                                                aria-hidden="true" data-original-title="Voir les parcelles">
                                                <span style="font-weight:bold">Sancerre et Menetou-Salon</span>
                                            </a>',
                'regionvinicole'        => "Loire",
                'aliasregionvinicole'   => "loire",
                'communevinicole'       => "Sancerre et Menetou-Salon",
                'aliascommunevinicole'  => "sancerre-et-menetou-salon",
                'localitevinicole'      => "Sancerre et Menetou-Salon",
                'aliaslocalitevinicole' => "sancerre-et-menetou-salon",
                'zoom'                  => 13,
                'latlongregion'         => "47.338,2.8",
                'reportage'             => $request->reportage,
                'fiche'                 => $request->fiche,
                'video'                 => $request->video,
                'paye'                  => !empty($request->paye) ? $request->paye : 0,
                'user_id'               => !empty($request->user_id) ? $request->user_id : NULL,
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ];

            return $data;
        }

        // Request Saumur-Champigny
        if ($request->region == "saumur-champigny")
        {
            $data = [
                'societe'               => $request->societe,
                'aliassociete'          => $this->enlevertouteslesmerdes($request->societe),
                'adresse'               => $request->adresse,
                'telephone'             => $request->telephone,
                'site'                  => $request->site,
                'email'                 => $request->email ? $request->email : NULL,
                'latlong'               => $request->latlong,
                'sortevin'              => $request->sortevin,
                'qualitevin'            => $request->qualitevin,
                'actif'                 => !empty($request->actif) ? 1 : 0,
                'francevinicole'        => "France",
                'departement'           => $request->departement,
                'region'                => "saumur-champigny",
                'indiceregion'          => '<i class="fa fa-street-view" aria-hidden="true"></i>
                                            <a href="/" data-toggle="tooltip" data-placement="top"
                                                aria-hidden="true" data-original-title="Voir les parcelles">
                                            <span style="font-weight:bold">France</span>
                                            </a>
                                            <i class="fa fa-street-view" aria-hidden="true"></i>
                                            <a href="/france/loire" data-toggle="tooltip" data-placement="top"
                                                aria-hidden="true" data-original-title="Voir les parcelles">
                                                <span style="font-weight:bold">Loire</span>
                                            </a>
                                            <i class="fa fa-street-view" aria-hidden="true"></i>
                                            <a href="/france/loire/saumur-champigny" data-toggle="tooltip" data-placement="top"
                                                aria-hidden="true" data-original-title="Voir les parcelles">
                                                <span style="font-weight:bold">Saumur-Champigny</span>
                                            </a>',
                'regionvinicole'        => "Loire",
                'aliasregionvinicole'   => "loire",
                'communevinicole'       => "Saumur-Champigny",
                'aliascommunevinicole'  => "saumur-champigny",
                'localitevinicole'      => "Saumur-Champigny",
                'aliaslocalitevinicole' => "saumur-champigny",
                'zoom'                  => 12,
                'latlongregion'         => "47.224,-0.06",
                'reportage'             => $request->reportage,
                'fiche'                 => $request->fiche,
                'video'                 => $request->video,
                'paye'                  => !empty($request->paye) ? $request->paye : 0,
                'user_id'               => !empty($request->user_id) ? $request->user_id : NULL,
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ];

            return $data;
        }

        // Request Lorraine
        if ($request->region == "lorraine")
        {
            $data = [
                'societe'               => $request->societe,
                'aliassociete'          => $this->enlevertouteslesmerdes($request->societe),
                'adresse'               => $request->adresse,
                'telephone'             => $request->telephone,
                'site'                  => $request->site,
                'email'                 => $request->email ? $request->email : NULL,
                'latlong'               => $request->latlong,
                'sortevin'              => $request->sortevin,
                'qualitevin'            => $request->qualitevin,
                'actif'                 => !empty($request->actif) ? 1 : 0,
                'francevinicole'        => "France",
                'departement'           => $request->departement,
                'region'                => "lorraine",
                'indiceregion'          => '<i class="fa fa-street-view" aria-hidden="true"></i>
                                            <a href="/" data-toggle="tooltip" data-placement="top"
                                                aria-hidden="true" data-original-title="Voir les parcelles">
                                            <span style="font-weight:bold">France</span>
                                            </a>
                                            <i class="fa fa-street-view" aria-hidden="true"></i>
                                            <a href="/france/lorraine" data-toggle="tooltip" data-placement="top"
                                                aria-hidden="true" data-original-title="Voir les parcelles">
                                                <span style="font-weight:bold">Lorraine</span>
                                            </a>',
                'regionvinicole'        => "Lorraine",
                'aliasregionvinicole'   => "lorraine",
                'communevinicole'       => "Lorraine",
                'aliascommunevinicole'  => "lorraine",
                'localitevinicole'      => "Lorraine",
                'aliaslocalitevinicole' => "lorraine",
                'zoom'                  => 11,
                'latlongregion'         => "49.062,5.63",
                'reportage'             => $request->reportage,
                'fiche'                 => $request->fiche,
                'video'                 => $request->video,
                'paye'                  => !empty($request->paye) ? $request->paye : 0,
                'user_id'               => !empty($request->user_id) ? $request->user_id : NULL,
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ];

            return $data;
        }

        // Request Provence
        if ($request->region == "provence")
        {
            $data = [
                'societe'               => $request->societe,
                'aliassociete'          => $this->enlevertouteslesmerdes($request->societe),
                'adresse'               => $request->adresse,
                'telephone'             => $request->telephone,
                'site'                  => $request->site,
                'email'                 => $request->email ? $request->email : NULL,
                'latlong'               => $request->latlong,
                'sortevin'              => $request->sortevin,
                'qualitevin'            => $request->qualitevin,
                'actif'                 => !empty($request->actif) ? 1 : 0,
                'francevinicole'        => "France",
                'departement'           => $request->departement,
                'region'                => "provence",
                'indiceregion'          => '<i class="fa fa-street-view" aria-hidden="true"></i>
                                            <a href="/" data-toggle="tooltip" data-placement="top"
                                                aria-hidden="true" data-original-title="Voir les parcelles">
                                            <span style="font-weight:bold">France</span>
                                            </a>
                                            <i class="fa fa-street-view" aria-hidden="true"></i>
                                            <a href="/france/provence" data-toggle="tooltip" data-placement="top"
                                                aria-hidden="true" data-original-title="Voir les parcelles">
                                                <span style="font-weight:bold">Provence</span>
                                            </a>',
                'regionvinicole'        => "Provence",
                'aliasregionvinicole'   => "provence",
                'communevinicole'       => "Provence",
                'aliascommunevinicole'  => "provence",
                'localitevinicole'      => "Provence",
                'aliaslocalitevinicole' => "provence",
                'zoom'                  => 9,
                'latlongregion'         => "43.175,5.77",
                'reportage'             => $request->reportage,
                'fiche'                 => $request->fiche,
                'video'                 => $request->video,
                'paye'                  => !empty($request->paye) ? $request->paye : 0,
                'user_id'               => !empty($request->user_id) ? $request->user_id : NULL,
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ];

            return $data;
        }

        // Request Savoie
        if ($request->region == "savoie")
        {
            $data = [
                'societe'               => $request->societe,
                'aliassociete'          => $this->enlevertouteslesmerdes($request->societe),
                'adresse'               => $request->adresse,
                'telephone'             => $request->telephone,
                'site'                  => $request->site,
                'email'                 => $request->email ? $request->email : NULL,
                'latlong'               => $request->latlong,
                'sortevin'              => $request->sortevin,
                'qualitevin'            => $request->qualitevin,
                'actif'                 => !empty($request->actif) ? 1 : 0,
                'francevinicole'        => "France",
                'departement'           => $request->departement,
                'region'                => "savoie",
                'indiceregion'          => '<i class="fa fa-street-view" aria-hidden="true"></i>
                                            <a href="/" data-toggle="tooltip" data-placement="top"
                                                aria-hidden="true" data-original-title="Voir les parcelles">
                                            <span style="font-weight:bold">France</span>
                                            </a>
                                            <i class="fa fa-street-view" aria-hidden="true"></i>
                                            <a href="/france/savoie" data-toggle="tooltip" data-placement="top"
                                                aria-hidden="true" data-original-title="Voir les parcelles">
                                                <span style="font-weight:bold">Savoie</span>
                                            </a>',
                'regionvinicole'        => "Savoie",
                'aliasregionvinicole'   => "savoie",
                'communevinicole'       => "Savoie",
                'aliascommunevinicole'  => "savoie",
                'localitevinicole'      => "Savoie",
                'aliaslocalitevinicole' => "savoie",
                'zoom'                  => 9,
                'latlongregion'         => "45.515,6.02",
                'reportage'             => $request->reportage,
                'fiche'                 => $request->fiche,
                'video'                 => $request->video,
                'paye'                  => !empty($request->paye) ? $request->paye : 0,
                'user_id'               => !empty($request->user_id) ? $request->user_id : NULL,
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ];

            return $data;
        }

        // Request Sud-Ouest
        if ($request->region == "sud-ouest")
        {
            $data = [
                'societe'               => $request->societe,
                'aliassociete'          => $this->enlevertouteslesmerdes($request->societe),
                'adresse'               => $request->adresse,
                'telephone'             => $request->telephone,
                'site'                  => $request->site,
                'email'                 => $request->email ? $request->email : NULL,
                'latlong'               => $request->latlong,
                'sortevin'              => $request->sortevin,
                'qualitevin'            => $request->qualitevin,
                'actif'                 => !empty($request->actif) ? 1 : 0,
                'francevinicole'        => "France",
                'departement'           => $request->departement,
                'region'                => "sud-ouest",
                'indiceregion'          => '<i class="fa fa-street-view" aria-hidden="true"></i>
                                            <a href="/" data-toggle="tooltip" data-placement="top"
                                                aria-hidden="true" data-original-title="Voir les parcelles">
                                            <span style="font-weight:bold">France</span>
                                            </a>
                                            <i class="fa fa-street-view" aria-hidden="true"></i>
                                            <a href="/france/sud-ouest" data-toggle="tooltip" data-placement="top"
                                                aria-hidden="true" data-original-title="Voir les parcelles">
                                                <span style="font-weight:bold">Sud-Ouest</span>
                                            </a>',
                'regionvinicole'        => "Sud-Ouest",
                'aliasregionvinicole'   => "sud-ouest",
                'communevinicole'       => "Sud-Ouest",
                'aliascommunevinicole'  => "sud-ouest",
                'localitevinicole'      => "Sud-Ouest",
                'aliaslocalitevinicole' => "sud-ouest",
                'zoom'                  => 9,
                'latlongregion'         => "44.06,0.665",
                'reportage'             => $request->reportage,
                'fiche'                 => $request->fiche,
                'video'                 => $request->video,
                'paye'                  => !empty($request->paye) ? $request->paye : 0,
                'user_id'               => !empty($request->user_id) ? $request->user_id : NULL,
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ];

            return $data;
        }

        // Request Aveyron
        if ($request->region == "aveyron")
        {
            $data = [
                'societe'               => $request->societe,
                'aliassociete'          => $this->enlevertouteslesmerdes($request->societe),
                'adresse'               => $request->adresse,
                'telephone'             => $request->telephone,
                'site'                  => $request->site,
                'email'                 => $request->email ? $request->email : NULL,
                'latlong'               => $request->latlong,
                'sortevin'              => $request->sortevin,
                'qualitevin'            => $request->qualitevin,
                'actif'                 => !empty($request->actif) ? 1 : 0,
                'francevinicole'        => "France",
                'departement'           => $request->departement,
                'region'                => "aveyron",
                'indiceregion'          => '<i class="fa fa-street-view" aria-hidden="true"></i>
                                            <a href="/" data-toggle="tooltip" data-placement="top"
                                                aria-hidden="true" data-original-title="Voir les parcelles">
                                            <span style="font-weight:bold">France</span>
                                            </a>
                                            <i class="fa fa-street-view" aria-hidden="true"></i>
                                            <a href="/france/sud-ouest" data-toggle="tooltip" data-placement="top"
                                                aria-hidden="true" data-original-title="Voir les parcelles">
                                                <span style="font-weight:bold">Sud-Ouest</span>
                                            </a>
                                            <i class="fa fa-street-view" aria-hidden="true"></i>
                                            <a href="/france/sud-ouest/aveyron" data-toggle="tooltip" data-placement="top"
                                                aria-hidden="true" data-original-title="Voir les parcelles">
                                                <span style="font-weight:bold">Aveyron</span>
                                            </a>',
                'regionvinicole'        => "Sud-Ouest",
                'aliasregionvinicole'   => "sud-ouest",
                'communevinicole'       => "Aveyron",
                'aliascommunevinicole'  => "aveyron",
                'localitevinicole'      => "Aveyron",
                'aliaslocalitevinicole' => "aveyron",
                'zoom'                  => 10,
                'latlongregion'         => "44.64,2.555",
                'reportage'             => $request->reportage,
                'fiche'                 => $request->fiche,
                'video'                 => $request->video,
                'paye'                  => !empty($request->paye) ? $request->paye : 0,
                'user_id'               => !empty($request->user_id) ? $request->user_id : NULL,
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ];

            return $data;
        }

        // Request Suisse
        if ($request->region == "suisse")
        {
            $data = [
                'societe'               => $request->societe,
                'aliassociete'          => $this->enlevertouteslesmerdes($request->societe),
                'adresse'               => $request->adresse,
                'telephone'             => $request->telephone,
                'site'                  => $request->site,
                'email'                 => $request->email ? $request->email : NULL,
                'latlong'               => $request->latlong,
                'sortevin'              => $request->sortevin,
                'qualitevin'            => $request->qualitevin,
                'actif'                 => !empty($request->actif) ? 1 : 0,
                'francevinicole'        => "Suisse",
                'departement'           => $request->departement,
                'region'                => 'suisse',
                'indiceregion'          => '<i class="fa fa-street-view" aria-hidden="true"></i>
                                            <a href="/" data-toggle="tooltip" data-placement="top"
                                                aria-hidden="true" data-original-title="Voir les parcelles">
                                            <span style="font-weight:bold">Suisse</span>
                                            </a>',
                'regionvinicole'        => 'Suisse',
                'aliasregionvinicole'   => 'suisse',
                'communevinicole'       => 'Suisse',
                'aliascommunevinicole'  => 'suisse',
                'localitevinicole'      => 'Suisse',
                'aliaslocalitevinicole' => 'suisse',
                'zoom'                  => 10,
                'latlongregion'         => NULL,
                'reportage'             => $request->reportage,
                'fiche'                 => $request->fiche,
                'video'                 => $request->video,
                'paye'                  => !empty($request->paye) ? $request->paye : 0,
                'user_id'               => !empty($request->user_id) ? $request->user_id : NULL,
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ];

            return $data;
        }

        // Request Luxembourg
        if ($request->region == "luxembourg")
        {
            $data = [
                'societe'               => $request->societe,
                'aliassociete'          => $this->enlevertouteslesmerdes($request->societe),
                'adresse'               => $request->adresse,
                'telephone'             => $request->telephone,
                'site'                  => $request->site,
                'email'                 => $request->email ? $request->email : NULL,
                'latlong'               => $request->latlong,
                'sortevin'              => $request->sortevin,
                'qualitevin'            => $request->qualitevin,
                'actif'                 => !empty($request->actif) ? 1 : 0,
                'francevinicole'        => "Luxembourg",
                'departement'           => $request->departement,
                'region'                => 'luxembourg',
                'indiceregion'          => '<i class="fa fa-street-view" aria-hidden="true"></i>
                                            <a href="/" data-toggle="tooltip" data-placement="top"
                                                aria-hidden="true" data-original-title="Voir les parcelles">
                                            <span style="font-weight:bold">Luxembourg</span>
                                            </a>',
                'regionvinicole'        => 'Luxembourg',
                'aliasregionvinicole'   => 'luxembourg',
                'communevinicole'       => 'Luxembourg',
                'aliascommunevinicole'  => 'luxembourg',
                'localitevinicole'      => 'Luxembourg',
                'aliaslocalitevinicole' => 'luxembourg',
                'zoom'                  => 10,
                'latlongregion'         => NULL,
                'reportage'             => $request->reportage,
                'fiche'                 => $request->fiche,
                'video'                 => $request->video,
                'paye'                  => !empty($request->paye) ? $request->paye : 0,
                'user_id'               => !empty($request->user_id) ? $request->user_id : NULL,
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ];

            return $data;
        }

        // Dans aucun de ces cas
        else
        {
            $data = [
                'societe'               => $request->societe,
                'aliassociete'          => $this->enlevertouteslesmerdes($request->societe),
                'adresse'               => $request->adresse,
                'telephone'             => $request->telephone,
                'site'                  => $request->site,
                'email'                 => $request->email ? $request->email : NULL,
                'latlong'               => $request->latlong,
                'sortevin'              => $request->sortevin,
                'qualitevin'            => $request->qualitevin,
                'actif'                 => !empty($request->actif) ? 1 : 0,
                'francevinicole'        => "France",
                'departement'           => $request->departement,
                'region'                => $request->region,
                'indiceregion'          => $request->indiceregion,
                'regionvinicole'        => $request->regionvinicole,
                'aliasregionvinicole'   => $this->enlevertouteslesmerdes($request->regionvinicole),
                'communevinicole'       => $request->communevinicole,
                'aliascommunevinicole'  => $this->enlevertouteslesmerdes($request->communevinicole),
                'localitevinicole'      => $request->localitevinicole,
                'aliaslocalitevinicole' => $this->enlevertouteslesmerdes($request->localitevinicole),
                'zoom'                  => $request->zoom,
                'latlongregion'         => $request->latlongregion,
                'reportage'             => $request->reportage,
                'fiche'                 => $request->fiche,
                'video'                 => $request->video,
                'paye'                  => !empty($request->paye) ? $request->paye : 0,
                'user_id'               => !empty($request->user_id) ? $request->user_id : NULL,
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ];

            return $data;
        }
    }

    /**
     * Méthode enlevertouteslesmerdes (), qui, comme son nom l'indique, enlève toutes les merdes
     * des chaînes de caractères pour créer des alias et des urls propres
     *
     * @param $text
     * @return $text
     **/
    public function enlevertouteslesmerdes ($text)
    {
        $caracteres = [
            'a', 'Á' => 'a', 'Â' => 'a', 'Ä' => 'a', 'à' => 'a', 'á' => 'a', 'â' => 'a', 'ä' => 'a', '@' => 'a',
            'È' => 'e', 'É' => 'e', 'Ê' => 'e', 'Ë' => 'e', 'è' => 'e', 'é' => 'e', 'ê' => 'e', 'ë' => 'e', '€' => 'e',
            'Ì' => 'i', 'Í' => 'i', 'Î' => 'i', 'Ï' => 'i', 'ì' => 'i', 'í' => 'i', 'î' => 'i', 'ï' => 'i',
            'Ò' => 'o', 'Ó' => 'o', 'Ô' => 'o', 'Ö' => 'o', 'ò' => 'o', 'ó' => 'o', 'ô' => 'o', 'ö' => 'o',
            'Ù' => 'u', 'Ú' => 'u', 'Û' => 'u', 'Ü' => 'u', 'ù' => 'u', 'ú' => 'u', 'û' => 'u', 'ü' => 'u', 'µ' => 'u',
            'Œ' => 'oe', 'œ' => 'oe',
            '$' => 's'
        ];
        $text = strtr($text, $caracteres);
        $text = preg_replace('#[^A-Za-z0-9]+#', '-', $text);
        $text = trim($text, '-');
        $text = strtolower($text);

        return $text;
    }

    /**
     * Méthode edit () pour éditer un vigneron en passant les données dans le formulaire
     *
     * @param $id
     * @return view('admin.vignerons.edit', compact('vigneron'));
     **/
    public function edit ($id)
    {
        // On récupère l'id du logué pour empêcher les petits malins d'utiliser l'admin administrateur
        if (Auth::user()->role == "administrateur")
        {
            $vigneron = Vigneron::where('id', $id)->first();

            return view('admin.vignerons.edit', compact('vigneron', 'imageactuelle'));
        }
        else return abort('401');
    }

    /**
     * Méthode creerachat () pour créer ou mettre à jour un achat d'un vigneron déjà indentifié
     *
     * @param $id
     * @return view('admin.vignerons.creerachat', compact('vigneron'));
     **/
    public function creerachat ($id)
    {
        // On récupère l'id du logué pour empêcher les petits malins d'utiliser l'admin administrateur
        if (Auth::user()->role == "administrateur")
        {
            $vigneron = Vigneron::where('id', $id)->first();

            // On récupère les options 1 et 2 des products
            $option1 = Product::where('id', 1)->first();
            $option2 = Product::where('id', 2)->first();

            return view('admin.vignerons.creerachat', compact('vigneron', 'option1', 'option2'));
        }
        else return abort('401');
    }

    /**
     * Méthode updateachat () pour mettre à jour l'achat d'un vigneron déjà indentifié
     *
     * @param $id
     * @return view('admin.vignerons.updateachat', compact('vigneron'));
     **/
    public function updateachat (Requests\UpdateAchatVigneronRequest $request, $id)
    {   
        // On récupère l'id du logué pour empêcher les petits malins d'utiliser l'admin administrateur
        if (Auth::user()->role == "administrateur")
        {
            // On récupère le vigneron
            $vigneron = Vigneron::where('id', $id)->first();

            // Si la vidéo est cochée, on renvoit au mail
            if ($request->video === 'video') return redirect(route('admin.vignerons.message', $vigneron->id));

            // On met diffForHumans() en locale avec la classe 
            \Carbon\Carbon::setLocale('fr');

            // On vérifie qu'il n'y a pas eu d'achat effectué pour ce vigneron
            $achat = Facture::where('user_id', $vigneron->user_id)->first();
            // Si oui, message d'erreur
            if ($achat) return redirect()->back()->with('error', "Ce vigneron a déjà acheté une option !!");

            // Si il y a une image, c'est l'option 2
            if ($request->hasFile('imagereportage'))
            {
                $width = config('cms.image.thumbnail.width');
                $height = config('cms.image.thumbnail.height');
    
                $image = $request->file('imagereportage');
                $fileName = $image->getClientOriginalName();
                $destination = $this->uploadPath;
    
                $successUploaded = $image->move($destination, $fileName);
    
                if ($successUploaded)
                {
                    $extension      = $image->getClientOriginalExtension();
                    $thumbnail      = str_replace(".{$extension}", "_thumb.{$extension}", $fileName);
    
                    Image::make($destination . '/' . $fileName)
                        ->resize($width, $height)
                        ->save($destination . '/thumbs/' . $thumbnail);
                }

                // On récupère le produit
                $product = Product::where('id', 2)->first();

                // On créé un nouveau panier
                $panier = Panier::create([
                    'user_id'       => $vigneron->user_id,
                    'total'         => number_format($product->prix * $request->duree * 1.2, 2, '.', ''),
                    'created_at'    => Carbon::now(),
                    'updated_at'    => Carbon::now()->addYears($request->duree)
                ]);

                // On récupère le dernier panier
                $panier = Panier::orderBy('id', 'desc')->first();

                // On créé un nouveau paiement
                $paiement = Paiement::create([
                    'panier_id'     => $panier->id,
                    'data'          => json_encode("Administration"),
                    'type'          => "Administration",
                    'created_at'    => Carbon::now(),
                    'updated_at'    => Carbon::now()->addYears($request->duree)
                ]);

                // On créé une nouvelle ligne
                $line = Line::create([
                    'product_id'    => $product->id,
                    'panier_id'     => $panier->id,
                    'user_id'       => $vigneron->user_id,
                    'prix'          => number_format($product->prix * $request->duree, 2, '.', ''),
                    'qte'           => $request->duree,
                    'type'          => "Administration",
                    'created_at'    => Carbon::now(),
                    'updated_at'    => Carbon::now()->addYears($request->duree)
                ]);
                
                // On créé une nouvelle facture
                $facture = Facture::create([
                    'name'              => $vigneron->societe,
                    'adresse'           => !empty($vigneron->adresse) ? $vigneron->adresse : NULL,
                    'email'             => $vigneron->email,
                    'telephone'         => !empty($vigneron->telephone) ? $vigneron->telephone : NULL,
                    'identiteunique'    => "admin_".uniqid(),
                    'produit'           => $product->name,
                    'qte'               => $request->duree,
                    'duree'             => $request->duree,
                    'type'              => "Administration",
                    'prixHT'            => number_format($product->prix, 2, '.', ''),
                    'soustotalHT'       => number_format($product->prix * $request->duree, 2, '.', ''),
                    'tva'               => number_format($product->prix * $request->duree * 0.2, 2, '.', ''),
                    'totalTTC'          => number_format($product->prix * $request->duree * 1.2, 2, '.', ''),
                    'user_id'           => $vigneron->user_id,
                    'created_at'        => Carbon::now(),
                    'datefacture'       => Carbon::now(),
                    'updated_at'        => Carbon::now()->addYears($request->duree)
                ]);

                // On créé les données
                $data = [
                    'fiche'             => $request->fiche,
                    'imagereportage'    => !empty($fileName) ? $fileName : NULL,
                    'reportage'         => !empty($request->reportage) ? $request->reportage : NULL,
                    'actif'             => 1,
                    'paye'              => 1,
                    'product_id'        => $product->id
                ];
                
                // On enregistre les données pour le vigneron
                $vigneron->update($data);

                // On récupère la dernière facture
                $facture = Facture::orderBy('id', 'desc')->first();

                // On créé la nouvelle date pour le message et l'envoi du mail
                $nouvelledate = Carbon::now()->addYears($request->duree)->format('d-m-Y');

                /*=============== APRÈS LA TRANSACTION RÉUSSIE, ENVOI D'UN EMAIL À L'INTÉRESSÉ ==============*/
                // On créé le message pour les mails
                $message = Message::create([
                    'name'          => $facture->name,
                    'email'         => $facture->email,
                    'sujet'         => "$facture->name, l'option N°$product->id, $product->name est achetée.",
                    'role'          => 'vigneron',
                    'contenu'       => "Selon votre demande, l'option N°$product->id, $product->name a bien été échetée pour une dureé de $request->duree an(s). Plus de détails sur votre administration",
                    'motdepasse'    => NULL,
                    'user_id'       => $facture->user_id
                ]);

                // Envoi de l'email
                Mail::to($facture->email)->send(new \App\Mail\UpdateAchatVigneron($message));
                /*=============== ../APRÈS LA TRANSACTION RÉUSSIE, ENVOI D'UN EMAIL À L'INTÉRESSÉ ==============*/
                
                return redirect(route('admin.all'))->with('message', "L'option N°$product->id, $product->name du vigneron $vigneron->societe a bien été échetée pour une dureé de $request->duree an(s) !!");
            
            }


            else 
            {
                // Si il n'y a pas d'image c'est l'opton 1

                // On récupère le produit
                $product = Product::where('id', 1)->first();

                // On créé un nouveau panier
                $panier = Panier::create([
                    'user_id'       => $vigneron->user_id,
                    'total'         => number_format($product->prix * $request->duree * 1.2, 2, '.', ''),
                    'created_at'    => Carbon::now(),
                    'updated_at'    => Carbon::now()->addYears($request->duree)
                ]);

                // On récupère le dernier panier
                $panier = Panier::orderBy('id', 'desc')->first();

                // On créé un nouveau paiement
                 $paiement = Paiement::create([
                    'panier_id'     => $panier->id,
                    'data'          => json_encode("Administration"),
                    'type'          => "Administration",
                    'created_at'    => Carbon::now(),
                    'updated_at'    => Carbon::now()->addYears($request->duree)
                ]);

                // On créé une nouvelle ligne
                $line = Line::create([
                    'product_id'    => $product->id,
                    'panier_id'     => $panier->id,
                    'user_id'       => $vigneron->user_id,
                    'prix'          => number_format($product->prix * $request->duree, 2, '.', ''),
                    'qte'           => $request->duree,
                    'type'          => "Administration",
                    'created_at'    => Carbon::now(),
                    'updated_at'    => Carbon::now()->addYears($request->duree)
                ]);

                // On créé une nouvelle facture
                $facture = Facture::create([
                    'name'              => $vigneron->societe,
                    'adresse'           => !empty($vigneron->adresse) ? $vigneron->adresse : NULL,
                    'email'             => $vigneron->email,
                    'telephone'         => !empty($vigneron->telephone) ? $vigneron->telephone : NULL,
                    'identiteunique'    => "admin_".uniqid(),
                    'produit'           => $product->name,
                    'qte'               => $request->duree,
                    'duree'             => $request->duree,
                    'type'              => "Administration",
                    'prixHT'            => number_format($product->prix, 2, '.', ''),
                    'soustotalHT'       => number_format($product->prix * $request->duree, 2, '.', ''),
                    'tva'               => number_format($product->prix * $request->duree * 0.2, 2, '.', ''),
                    'totalTTC'          => number_format($product->prix * $request->duree * 1.2, 2, '.', ''),
                    'user_id'           => $vigneron->user_id,
                    'created_at'        => Carbon::now(),
                    'datefacture'       => Carbon::now(),
                    'updated_at'        => Carbon::now()->addYears($request->duree)
                ]);
              
                // On créé les données
                $data = [
                    'fiche'             => $request->fiche,
                    'actif'             => 1,
                    'paye'              => 1,
                    'product_id'        => $product->id
                ];
                
                // On enregistre les données pour le vigneron
                $vigneron->update($data);

                /*=============== APRÈS LA TRANSACTION RÉUSSIE, ENVOI D'UN EMAIL À L'INTÉRESSÉ ==============*/
                // On créé le message pour les mails
                $message = Message::create([
                    'name'          => $facture->name,
                    'email'         => $facture->email,
                    'sujet'         => "$facture->name, l'option N°$product->id, $product->name est achetée.",
                    'role'          => 'vigneron',
                    'contenu'       => "Selon votre demande, l'option N°$product->id, $product->name a bien été échetée pour une dureé de $request->duree an(s). Plus de détails sur votre administration",
                    'motdepasse'    => NULL,
                    'user_id'       => $facture->user_id
                ]);

                // Envoi de l'email
                Mail::to($facture->email)->send(new \App\Mail\UpdateAchatVigneron($message));
                /*=============== ../APRÈS LA TRANSACTION RÉUSSIE, ENVOI D'UN EMAIL À L'INTÉRESSÉ ==============*/
                            
                return redirect(route('admin.all'))->with('message', "L'option N°$product->id, $product->name du vigneron $vigneron->societe a bien été échetée pour une dureé de $request->duree an(s) !!");
            }

        }
        else return abort('401');
    }

    /**
     * Méthode miseajourchat () pour mettre à jour les données des achats que l'on a créés pour le vigneron
     *
     * @param $id
     * @return view('admin.vignerons.miseajourachat', compact('vigneron'));
     **/
    public function miseajourchat ($id)
    {
        // On récupère l'id du logué pour empêcher les petits malins d'utiliser l'admin administrateur
        if (Auth::user()->role == "administrateur")
        {
            $vigneron = Vigneron::where('id', $id)->first();

            return view('admin.vignerons.miseajourachat', compact('vigneron'));
        }
        else return abort('401');
    }

     /**
     * Méthode updatemiseajourachat() pour stocker les mettre à jour les données des achats que l'on a créés pour le vigneron
     *
     * @param $id
     * @return view('admin.vignerons.admin.updatemiseajourachat', compact('vigneron'));
     **/
    public function updatemiseajourachat (Requests\MiseajourAchatVigneronRequest $request, $id)
    { 
        // On récupère le vigneron
        $vigneron = Vigneron::findOrFail($id);

        // Si il y a une image, on téléverse l'image
        if ($request->hasFile('imagereportage'))
        {
            $width = config('cms.image.thumbnail.width');
            $height = config('cms.image.thumbnail.height');

            $image = $request->file('imagereportage');
            $fileName = $image->getClientOriginalName();
            $destination = $this->uploadPath;

            $successUploaded = $image->move($destination, $fileName);

            if ($successUploaded)
            {
                $extension      = $image->getClientOriginalExtension();
                $thumbnail      = str_replace(".{$extension}", "_thumb.{$extension}", $fileName);

                Image::make($destination . '/' . $fileName)
                    ->resize($width, $height)
                    ->save($destination . '/thumbs/' . $thumbnail);
            }

            $imagereportage = $fileName;
        }

        // On créé les données
        $data = [
            'fiche'             => $request->fiche,
            'reportage'         => $request->reportage,
            'imagereportage'    => !empty($imagereportage) ? $imagereportage : $vigneron->imagereportage,
        ];

        // On met à jour le vigneron
        $vigneron->update($data);

        return redirect(route('admin.all'))->with('message', "Les données d'achat du vigneron $vigneron->societe a bien été mises à jour !!");
    }



    /**
     * Méthode update () pour mettre à jour un vigneron
     *
     * @param
     * @return redirect(route('admin.all'))->with('message', "Le vigneron ". $data['societe'] . " a bien été mis à jour");
     **/
    public function update (Requests\VigneronupdateRequest $request, $id)
    {
        if (Auth::user()->role == "administrateur")
        {
            $vigneron = Vigneron::findOrFail($id);

            $data = $this->handleRequest($request);
            $data['user_id'] = $vigneron->user_id;
    
            $vigneron->update($data);
    
            return redirect(route('admin.all'))->with('message', "Le vigneron ". $data['societe'] . " a bien été mis à jour");
        }
        else return abort('401');
    }


    /**
     * Méthode achatsvigneron () pour afficher les achats d'un vigneron qui a payé
     *
     * @param
     * @return redirect(route('admin.all'))->with('message', "Le vigneron ". $data['societe'] . " a bien été mis à jour");
     **/
    public function achatsvigneron ($id)
    {
        // On récupère le vigneron
        $vigneron = Vigneron::findOrFail($id);

        // On récupère le user qui correspond au vigneron
        $user = User::where('id', $vigneron->user_id)->first();

        // On récupère la ligne des achats
        $line = Line::where('user_id', $user->id)->get();

        return view('admin.vignerons.achatsvigneron', compact('vigneron', 'user', 'line'));
    }


    /**
     * Méthode editimage () pour éditer l'mage d'un vigneron pour la mettre à jour
     *
     * @param $id
     * @return view('admin.vignerons.editimage', compact('vigneron'));
     **/

    public function editimage ($id)
    {
        $vigneron = Vigneron::where('id', $id)->first();

        return view('admin.vignerons.editimage', compact('vigneron'));
    }

    /**
     * Méthode updateimage () pour mettre à jour uniquement l'image du vigneron
     *
     * @param
     * @return redirect(route('admin.all'))->with('message', "Le vigneron ". $data['societe'] . " a bien été mis à jour");
     **/
    public function updateimage (Request $request, $id)
    {
        $vigneron = Vigneron::findOrFail($id);

        $data = $this->handleRequest($request);

//        $data['visuelfiche'] = $request->visuelfiche;

        $vigneron->update($data);

        return redirect(route('admin.all'))->with('message', "L'image du vigneron et le contenu ". $data['societe'] . " ont bien été mis à jour");
    }

    /**
     * Méthode destroy () pour supprimer un vigneron
     *
     * @param $id
     * @return redirect(route('all'));
     **/
    public function destroy ($id)
    {
        // On récupère l'id du logué pour empêcher les petits malins d'utiliser l'admin administrateur
        if (Auth::user()->role == "administrateur")
        {
            // On récupère le vigneron
            $vigneron = Vigneron::findOrFail($id);
        
            // On vérifie si il a au moins un panier
            $paniers = Panier::where('user_id', $vigneron->user_id)->get();
            // Si il y a au moins un panier, il y a aussi des paiements en fonction des paniers
            if ($paniers)
            {
                foreach ($paniers as $panier)
                {
                    $paiements = Paiement::where('panier_id', $panier->id)->get();
                    // On supprime les paiements
                    foreach ($paiements as $paiement)
                    {
                        $paiement->delete();
                    }
                    // on supprime les paniers
                    $panier->delete();
                }
            }

            // On vérifie si il a au moins une ligne
            $lines = Line::where('user_id', $vigneron->user_id)->get();
            // Si il a au moins une ligne, on supprime
            if ($lines) 
            {
                foreach ($lines as $line)
                {
                    // on supprime les lignes
                    $line->delete();
                }
            }

            // On vérifie si il y a au moins une facture
            $factures = Facture::where('user_id', $vigneron->user_id)->get();
            // Si il a au moins une facture, on supprime
            if ($factures ) 
            {
                foreach ($factures as $facture)
                {
                    // on supprime les factures
                    $facture->delete();
                }
            }

            // On vérifie si il y a au moins un PayPal
            $paypals = Paiementpaypal::where('user_id', $vigneron->user_id)->get();
            // Si il a au moins un paypal, on supprime
            if ($paypals) {
                foreach ($paypals as $paypal)
                {
                    // on supprime les paypal
                    $paypal>delete();
                }
            }

            // Enfin, on supprime le vigneron si celui-ci existe
            // On regarde si le vigneron est user
            $user = User::where('id', $vigneron->user_id)->first();
            if ($user) $user ->delete();
           
            // Enfin, on supprime le vigneron
            $vigneron->delete();
    
            return redirect(route('admin.all'))->with('message', "{$vigneron->societe} a bien été supprimé !");

        }
        else return abort('401');
    }


    /**
     * Méthode createidentifiant () affiche la vue de création de l'identifiant unique du vigneron
     *
     * @param $id
     * @return view('admin.vignerons.createutilisateur', compact('user'));
     **/
    public function createidentifiant ($id)
    {
        // On récupère l'id du logué pour empêcher les petits malins d'utiliser l'admin administrateur
        if (Auth::user()->role == "administrateur")
        {
            // On retrouve l'id du vigneron
            $vigneron = Vigneron::where('id', $id)->first();

            return view('admin.vignerons.createutilisateur', compact('vigneron'));
        }
        else return abort('401');
    }

    /**
    * Méthode storeidentifiant () enregistre le nouveau vigneron comme user et met à jour son user_id
     *
     * @param Requests\IdentifiantUniqueRequest $request
     * @return redirect()->route('admin.create.resultat', compact('vigneron'));
    **/
    public function storeidentifiant (Requests\IdentifiantUniqueRequest $request)
    {
        // On met diffForHumans() en locale avec la classe 
        \Carbon\Carbon::setLocale('fr');

        // On stocke les données reçues dans un tableau $data
        $data = [
            'name'          => $request->societe,
            'email'         => $request->email,
            'password'      => $request->password ? Hash::make($request->password) : NULL,
            'role'          => "vigneron",
            'imageprofil'   => 'avatar-neutre.jpg',
            'created_at'    => Carbon::now(),
            'updated_at'    => Carbon::now()
        ];

        // On récupère le vigneron qui correspond au nom du user :
        $vigneron = Vigneron::where('societe', $request->societe)->first();

        // On regarde si le vigneron n'a pas déjà de user_id
        if ($vigneron->user_id != NULL)
        {
            // Si oui, on affiche une erreur
            return redirect()->back()->with('error', "Ce vigneron est déjà accrédité !!");
        }

        // Sinon, on créé les données
        else
        {
            // On créé l'enregistrement dans la BDD
            User::create($data);

            // On récupère l'id du dernier user enregistré :
            $user = User::latest()->first();

            // On assigne la valeur de l'id du user à l'user_id du vigneron et on met actif sur 1 et payé sur 0
            $data = [
                'user_id'   => $user->id,
                'actif'     => 1,
                'paye'      => 0
            ];

            // On met à jour l'user_id du vigneron
            $vigneron->update($data);

            // On récupère l'id du vigneron
            $vigneron = $vigneron->id;

            // On récupère en clair le mot de passe du vigneron utilisateur
            $motdepasse = $request->password;

            // On créé le message pour les mails
            $message = Message::create([
                'name'          => $request->societe,
                'email'         => $request->email,
                'sujet'         => "Accréditation d'un vigneron",
                'role'          => 'vigneron',
                'contenu'       => "L'accréditation est acceptée.",
                'motdepasse'    => Crypt::encrypt($motdepasse),
                'user_id'       => $user->id
            ]);

            // Envoi des emails à l'administration du site et au vigneron
            Mail::to(env('TO_MAIL'))->send(new \App\Mail\MailIdentifiantUnique($message));
            Mail::to($request->email)->send(new \App\Mail\MailIdentifiantUnique($message));

            return redirect()->route('admin.create.resultat', compact('vigneron'));
        }

    }

    /**
    	* Méthode resultatidentifiant () pour afficher le résultat de l'indentifiant unique
    	*
    	* @param $id
    	* @return view('admin.vignerons.resultatutilisateur', compact('vigneron'));
    **/
    public function resultatidentifiant ($id)
    {
        // On récupère le vigneron
        $vigneron = Vigneron::findOrFail($id);

        return view('admin.vignerons.resultatutilisateur', compact('vigneron'));
    }

    /**
    	* Méthode activervideo () pour afficher la fenêtre d'activation de la vidéo dans l'admin adminsitrateur
    	*
    	* @param $id
    	* @return view('admin.vignerons.resultatutilisateur', compact('vigneron'));
    **/
    public function activervideo ($id)
    {
        // On récupère le vigneron
        $vigneron = Vigneron::findOrFail($id);
        
        // On retourne à la vue avec un message
       return view('admin.vignerons.activervideo', compact('vigneron'));
    }

    /**
    	* Méthode storevideo () pour activer la vidéo dans l'admin administrateur
    	*
    	* @param $id
    	* @return view('admin.vignerons.resultatutilisateur', compact('vigneron'));
    **/
    public function storevideo (Requests\ActivervideoVigneronRequest $request, $id)
    {
        // On récupère le vigneron
        $vigneron = Vigneron::findOrFail($id);
        
        $vigneron['video'] = $request->video;

        $vigneron->update();
        
        // On retourne à la vue avec un message
        return redirect(route('admin.all'))->with('message', 'La vidéo du vigneron '.$vigneron->societe.' a bien été mise à jour.');
    }

    /**
    	* Méthode activerpaiement () pour activer le paiement dans l'admin administrateur
    	*
    	* @param $id
    	* @return view('admin.vignerons.resultatutilisateur', compact('vigneron'));
    **/
    public function activerpaiement ($id)
    {
        // On récupère le vigneron
        $vigneron = Vigneron::findOrFail($id);

        $vigneron['paye'] = 1;

        $vigneron->update();
        
        // On retourne à la vue avec un message
       return redirect()->back()->with('message', 'Le paiement du vigneron '.$vigneron->societe.' a bien été activé.');
    }

    /**
     * Méthode comments () pour afficher les commentaires des vignerons
     *
     * @param $id
     * @return view('admin.vignerons.resultatutilisateur', compact('vigneron'));
    **/
    public function comments ()
    {
        // On met diffForHumans() en locale avec la classe 
        \Carbon\Carbon::setLocale('fr');

        // On récupère tous les commentaires des vignerons
        $commentaires = Comment::orderBy('created_at', 'desc')
        ->where('reponse', NULL)
        ->paginate(3);

        // On récupère toutes les réponses des vignerons
        $reponses = Comment::orderBy('created_at', 'desc')
        ->where('body', NULL)
        ->get();

        // On dénombre tous les vignerons
        $compteCommentaires = Comment::count();

        // On dénombre toutes les réponses du vigneron
        $compteReponses = Comment::where('body', NULL)->count();

        return view('admin.vignerons.commentaires', compact('commentaires', 'compteCommentaires', 'reponses', 'compteReponses'));
    }

    /**
     * Méthode destroycomment () pour supprimer un commentaire envoyé au vigneron
     *
     * @param $id
     * @return redirect(route('admin.comments'))->with('message')
     **/
    public function destroycomment ($id)
    {
        $commentaire = Comment::findOrFail($id);
        $commentaire->delete();

        return redirect(route('admin.comments'))->with('message', "Le commentaire envoyé par {$commentaire->name} a bien été supprimé !");
    }

    /**
     * Méthode editreponsecomment () pour éditer la réponse donnée au commentaire par le vigneron
     *
     * @param $id
     * @return redirect(route('admin.comments'))->with('message')
     **/
    public function editreponsecomment ($id)
    {   
        // On met diffForHumans() en locale avec la classe 
        \Carbon\Carbon::setLocale('fr');

        // On récupère le vigneron
        $commentaire = Comment::findOrFail($id);

        // On envoit à la vue
        return view('admin.vignerons.editreponsecomment', compact('commentaire'));
    }

    /**
     * Méthode destroyreponsecomment () pour supprimer la réponse donnée au commentaire par le vigneron
     *
     * @param $id
     * @return redirect(route('admin.comments'))->with('message')
    **/
    public function destroyreponsecomment ($id)
    {   
        // On met diffForHumans() en locale avec la classe 
        \Carbon\Carbon::setLocale('fr');

        // On récupère la réponse au commentaire
        $commentaire = Comment::findOrFail($id);

        $commentaire->delete();

        // On construit le message du mail à envoyer
        $message = Message::create([
            'name'          => $commentaire->vigneron->societe,
            'email'         => $commentaire->vigneron->email,
            'sujet'         => "Suppression d'un commentaire posté par un internaute",
            'role'          => 'vigneron',
            'contenu'       => "Le commentaire est définitivement supprimé",
            'commentaire'   => 1,
            'created_at'    => $commentaire->created_at,
            'updated_at'    => $commentaire->updated_at
        ]);
        
        // Envoi des emails à l'administration du site et au vigneron
        Mail::to(env('TO_MAIL'))->send(new \App\Mail\SuppressionReponseCommentaireVigneron($message));
        Mail::to($commentaire->vigneron->email)->send(new \App\Mail\SuppressionReponseCommentaireVigneron($message));

        // On retourne à tous les commentaires
        return redirect(route('admin.comments'))
        ->with('message', "Le commentaire du vigneron ". $commentaire->vigneron->societe . " a bien été supprimé. 
        Un email lui a été envoyé afin de l'informer.");
    }

    /**
     * Méthode envoyeremail () pour affichier la vue de l'envoi d'un message à l'administration
     *
     * @param $id
     * @return view('admin.vignerons.envoyeremail', compact('user'))
    **/
    public function envoyeremail ($id)
    {
        // On récupère le logué
        $user = User::findOrFail($id);

        return view('admin.vignerons.envoyeremail', compact('user'));
    }

    /**
     * Méthode envoimail () envoie le message à l'administration
     *
     * @param $id
     * @return redirect(route('admin.comments'))->with('message')
    **/
    public function envoimail (Requests\MailAdministrationVigneronRequest $request, $id)
    {
        // On met diffForHumans() en locale avec la classe 
        \Carbon\Carbon::setLocale('fr');

        // On récupère le logué
        $user = User::findOrFail($id);

        // On récupère les sélections des messages
        if ($request->sujet == 1) $sujet = "Étendre ma souscription.";
        if ($request->sujet == 2) $sujet = "Modifier ma souscription.";
        if ($request->sujet == 3) $sujet = "Devis pour un reportage.";
        if ($request->sujet == 4) $sujet = "Autre sujet.";

        // On construit le message du mail à envoyer à l'administration
        $message = Message::create([
            'name'          => $user->name,
            'email'         => $user->email,
            'sujet'         => $sujet,
            'role'          => 'vigneron',
            'contenu'       => $request->contenu,
            'created_at'    => Carbon::now(),
            'updated_at'    => Carbon::now(),
        ]);

        // Envoi de l'email à l'administration 
        Mail::to(env('TO_MAIL'))->send(new \App\Mail\MailVigneronAdmin($message));

        // On retourne à l'envoi des mails
        return redirect(route('admin.vignerons.envoyeremail', $user->id))
        ->with('message', $user->name .", votre message nous est parvenu avec succès. 
        Nous y répondrons dans les plus brefs délais.");

    }

}
