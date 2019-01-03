<?php

namespace App\Http\Controllers\Backend;

use App\Message;
use App\Product;
use App\Vigneron;
use App\Comment;
use App\User;
use Carbon\Carbon;
use App\Http\Requests;
use App\Http\Requests\CommentaireVigneronRequest;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Mail;
use Auth;

use Gloudemans\Shoppingcart\Facades\Cart;

class VigneronVigneronsController extends BackendController
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
        // permet de garder le middleware $this->middleware('auth') et donc la session de l'auth
        parent::__construct();
        $this->uploadPath = public_path(config('cms.image.directory'));
    }


    /**
     * Méthode fiche () le vigneron loggué qui a son user_id et qui doit compléter sa fiche
     *
     * * @param
     * @return view('admin.vignerons.vignerons.index', compact('vigneron', 'user'));
     **/
    public function fiche ($id)
    {
        $vigneron = Vigneron::where('user_id', $id)->first();

        return view('admin.vignerons.vignerons.fiche', compact('vigneron'));
    }

    /**
     * Méthode handleRequest () pour gérer d'une part l'insertion des donnés de la mise à jour du vigneron
     * et gérer d'autre part l'upload du visuel du reportage
     *
     * @param $request
     * @return $data
     **/
    public function handleRequest ($request)
    {
        $data = [
            'societe'               => $request->societe,
            'aliassociete'          => $this->enlevertouteslesmerdes($request->societe),
            'adresse'               => $request->adresse,
            'telephone'             => $request->telephone,
            'site'                  => $request->site,
            'latlong'               => $request->latlong,
            'sortevin'              => $request->sortevin,
            'qualitevin'            => $request->qualitevin,
            'actif'                 => $request->actif,
            'francevinicole'        => $request->francevinicole,
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
            'latlongregion'         => $request->latlong,
            'imagereportage'        => $request->imagereportage,
            'reportage'             => $request->reportage,
            'fiche'                 => $request->fiche,
            'video'                 => $request->video,
            'user_id'               => $request->user_id,
            'paye'                  => $request->paye,
            'created_at'            => Carbon::now(),
            'updated_at'            => Carbon::now(),
        ];

        dd($data);

        if ($request->hasFile('imagereportage'))
        {
            $width = config('cms.image.thumbnail.width');
            $height = config('cms.image.thumbnail.height');

            $image = $request->file('imagereportage');
            $fileName = $image->getClientOriginalName();
            $destination = $this->uploadPath;

            $successUploaded = $image->move($destination, $fileName);
            //$image->move($destination, $fileName);

            if ($successUploaded)
            {
                $extension      = $image->getClientOriginalExtension();
                $thumbnail      = str_replace(".{$extension}", "_thumb.{$extension}", $fileName);

                Image::make($destination . '/' . $fileName)
                    ->resize($width, $height)
                    ->save($destination . '/thumbs/' . $thumbnail);
            }

            $data['imagereportage'] = $fileName;
        }

        return $data;
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
     * Méthode update () pour mettre à jour le vigneron
     *
     * @param Requests\VigneronVigneronupdateRequest $request, $id
     * return redirect(route('admin.vignerons.option', compact('vigneron')))->with('message', "Votre fiche ". $data['societe'] . " a bien été mise à jour")
     **/
    public function update (Requests\VigneronVigneronupdateRequest $request, $id)
    {
        $vigneron = Vigneron::where('user_id', $id)->first();

        
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
                'actif'                 => 1,
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
                'paye'                  => 0,
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ];
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
                'actif'                 => 1,
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
                'paye'                  => 0,
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ];

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
                'actif'                 => 1,
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
                'paye'                  => 0,
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ];

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
                'actif'                 => 1,
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
                'paye'                  => 0,
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ];

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
                'actif'                 => 1,
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
                'paye'                  => 0,
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ];

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
                'actif'                 => 1,
                'francevinicole'        => "France",
                'departement'           => $request->departement,
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
                'indiceregion'          => $vigneron->indiceregion,
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
                'user_id'               => !empty($request->user_id) ? $request->user_id : NULL,
                'paye'                  => 0,
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ];

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
                'actif'                 => 1,
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
                'user_id'               => !empty($request->user_id) ? $request->user_id : NULL,
                'paye'                  => 0,
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ];

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
                'actif'                 => 1,
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
                'paye'                  => 0,
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ];

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
                'actif'                 => 1,
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
                'user_id'               => !empty($request->user_id) ? $request->user_id : NULL,
                'paye'                  => 0,
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ];

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
                'actif'                 => 1,
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
                'user_id'               => !empty($request->user_id) ? $request->user_id : NULL,
                'paye'                  => 0,
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ];

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
                'actif'                 => 1,
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
                'user_id'               => !empty($request->user_id) ? $request->user_id : NULL,
                'paye'                  => 0,
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ];

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
                'actif'                 => 1,
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
                'user_id'               => !empty($request->user_id) ? $request->user_id : NULL,
                'paye'                  => 0,
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ];

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
                'actif'                 => 1,
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
                'user_id'               => !empty($request->user_id) ? $request->user_id : NULL,
                'paye'                  => 0,
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ];

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
                'actif'                 => 1,
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
                'user_id'               => !empty($request->user_id) ? $request->user_id : NULL,
                'paye'                  => 0,
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ];

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
                'actif'                 => 1,
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
                'user_id'               => !empty($request->user_id) ? $request->user_id : NULL,
                'paye'                  => 0,
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ];

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
                'actif'                 => 1,
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
                'user_id'               => !empty($request->user_id) ? $request->user_id : NULL,
                'paye'                  => 0,
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ];

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
                'actif'                 => 1,
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
                'user_id'               => !empty($request->user_id) ? $request->user_id : NULL,
                'paye'                  => 0,
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ];

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
                'actif'                 => 1,
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
                'user_id'               => !empty($request->user_id) ? $request->user_id : NULL,
                'paye'                  => 0,
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ];

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
                'actif'                 => 1,
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
                'user_id'               => !empty($request->user_id) ? $request->user_id : NULL,
                'paye'                  => 0,
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ];

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
                'actif'                 => 1,
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
                'user_id'               => !empty($request->user_id) ? $request->user_id : NULL,
                'paye'                  => 0,
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ];

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
                'actif'                 => 1,
                'francevinicole'        => "France",
                'departement'           => $request->departement,
                'region'                => "gevrey-chambertin",
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
                'user_id'               => !empty($request->user_id) ? $request->user_id : NULL,
                'paye'                  => 0,
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ];

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
                'actif'                 => 1,
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
                'user_id'               => !empty($request->user_id) ? $request->user_id : NULL,
                'paye'                  => 0,
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ];

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
                'actif'                 => 1,
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
                'user_id'               => !empty($request->user_id) ? $request->user_id : NULL,
                'paye'                  => 0,
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ];

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
                'actif'                 => 1,
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
                'user_id'               => !empty($request->user_id) ? $request->user_id : NULL,
                'paye'                  => 0,
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ];

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
                'actif'                 => 1,
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
                'user_id'               => !empty($request->user_id) ? $request->user_id : NULL,
                'paye'                  => 0,
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ];

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
                'actif'                 => 1,
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
                'user_id'               => !empty($request->user_id) ? $request->user_id : NULL,
                'paye'                  => 0,
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ];

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
                'actif'                 => 1,
                'francevinicole'        => "France",
                'departement'           => $request->departement,
                'region'                => "aloxe-corton",
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
                'user_id'               => !empty($request->user_id) ? $request->user_id : NULL,
                'paye'                  => 0,
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ];

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
                'actif'                 => 1,
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
                'user_id'               => !empty($request->user_id) ? $request->user_id : NULL,
                'paye'                  => 0,
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ];

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
                'actif'                 => 1,
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
                'user_id'               => !empty($request->user_id) ? $request->user_id : NULL,
                'paye'                  => 0,
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ];

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
                'actif'                 => 1,
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
                'user_id'               => !empty($request->user_id) ? $request->user_id : NULL,
                'paye'                  => 0,
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ];

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
                'actif'                 => 1,
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
                'user_id'               => !empty($request->user_id) ? $request->user_id : NULL,
                'paye'                  => 0,
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ];

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
                'actif'                 => 1,
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
                'user_id'               => !empty($request->user_id) ? $request->user_id : NULL,
                'paye'                  => 0,
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ];

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
                'actif'                 => 1,
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
                'user_id'               => !empty($request->user_id) ? $request->user_id : NULL,
                'paye'                  => 0,
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ];

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
                'actif'                 => 1,
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
                'user_id'               => !empty($request->user_id) ? $request->user_id : NULL,
                'paye'                  => 0,
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ];

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
                'actif'                 => 1,
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
                'user_id'               => !empty($request->user_id) ? $request->user_id : NULL,
                'paye'                  => 0,
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ];

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
                'actif'                 => 1,
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
                'user_id'               => !empty($request->user_id) ? $request->user_id : NULL,
                'paye'                  => 0,
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ];

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
                'actif'                 => 1,
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
                'user_id'               => !empty($request->user_id) ? $request->user_id : NULL,
                'paye'                  => 0,
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ];

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
                'actif'                 => 1,
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
                'user_id'               => !empty($request->user_id) ? $request->user_id : NULL,
                'paye'                  => 0,
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ];

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
                'actif'                 => 1,
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
                'user_id'               => !empty($request->user_id) ? $request->user_id : NULL,
                'paye'                  => 0,
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ];

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
                'actif'                 => 1,
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
                'user_id'               => !empty($request->user_id) ? $request->user_id : NULL,
                'paye'                  => 0,
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ];

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
                'actif'                 => 1,
                'francevinicole'        => "France",
                'departement'           => $request->departement,
                'region'                => "cotes-du-rhone-septentrional",
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
                'communevinicole'       => "Côtes du Rhône Septentrional",
                'aliascommunevinicole'  => "cotes-du-rhone-septentrional",
                'localitevinicole'      => "Côtes du Rhône Septentrional",
                'aliaslocalitevinicole' => "cotes-du-rhone-septentrional",
                'zoom'                  => 9,
                'latlongregion'         => "44.7,5.2",
                'reportage'             => $request->reportage,
                'fiche'                 => $request->fiche,
                'video'                 => $request->video,
                'user_id'               => !empty($request->user_id) ? $request->user_id : NULL,
                'paye'                  => 0,
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ];

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
                'actif'                 => 1,
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
                'user_id'               => !empty($request->user_id) ? $request->user_id : NULL,
                'paye'                  => 0,
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ];

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
                'actif'                 => 1,
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
                'user_id'               => !empty($request->user_id) ? $request->user_id : NULL,
                'paye'                  => 0,
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ];

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
                'actif'                 => 1,
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
                'user_id'               => !empty($request->user_id) ? $request->user_id : NULL,
                'paye'                  => 0,
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ];

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
                'actif'                 => 1,
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
                'user_id'               => !empty($request->user_id) ? $request->user_id : NULL,
                'paye'                  => 0,
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ];

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
                'actif'                 => 1,
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
                'user_id'               => !empty($request->user_id) ? $request->user_id : NULL,
                'paye'                  => 0,
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ];

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
                'actif'                 => 1,
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
                'user_id'               => !empty($request->user_id) ? $request->user_id : NULL,
                'paye'                  => 0,
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ];

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
                'actif'                 => 1,
                'francevinicole'        => "France",
                'departement'           => $request->departement,
                'region'                => "sancerre-et-menetou-salon",
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
                'user_id'               => !empty($request->user_id) ? $request->user_id : NULL,
                'paye'                  => 0,
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ];

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
                'actif'                 => 1,
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
                'user_id'               => !empty($request->user_id) ? $request->user_id : NULL,
                'paye'                  => 0,
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ];

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
                'actif'                 => 1,
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
                'user_id'               => !empty($request->user_id) ? $request->user_id : NULL,
                'paye'                  => 0,
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ];

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
                'actif'                 => 1,
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
                'user_id'               => !empty($request->user_id) ? $request->user_id : NULL,
                'paye'                  => 0,
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ];

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
                'actif'                 => 1,
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
                'zoom'                  => 10,
                'latlongregion'         => "45.515,6.02",
                'reportage'             => $request->reportage,
                'fiche'                 => $request->fiche,
                'video'                 => $request->video,
                'user_id'               => !empty($request->user_id) ? $request->user_id : NULL,
                'paye'                  => 0,
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ];

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
                'actif'                 => 1,
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
                'user_id'               => !empty($request->user_id) ? $request->user_id : NULL,
                'paye'                  => 0,
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ];

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
                'actif'                 => 1,
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
                'user_id'               => !empty($request->user_id) ? $request->user_id : NULL,
                'paye'                  => 0,
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ];

        }

        // Request sans catégorie
        if ($request->region == "sanscategorie")
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
                'actif'                 => 1,
                'francevinicole'        => "France",
                'departement'           => $request->departement,
                'region'                => 'france',
                'indiceregion'          => '<i class="fa fa-street-view" aria-hidden="true"></i>
                                            <a href="/" data-toggle="tooltip" data-placement="top"
                                                aria-hidden="true" data-original-title="Voir les parcelles">
                                            <span style="font-weight:bold">France</span>
                                            </a>',
                'regionvinicole'        => 'France',
                'aliasregionvinicole'   => 'france',
                'communevinicole'       => 'France',
                'aliascommunevinicole'  => 'france',
                'localitevinicole'      => 'France',
                'aliaslocalitevinicole' => 'france',
                'zoom'                  => NULL,
                'latlongregion'         => NULL,
                'reportage'             => $request->reportage,
                'fiche'                 => $request->fiche,
                'video'                 => $request->video,
                'user_id'               => !empty($request->user_id) ? $request->user_id : NULL,
                'paye'                  => 0,
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ];
        }

        // On met par défaut le produit (option lisibilité et détail de votre activité) sur 1
        $data['product_id'] = 1;

        if ($request->hasFile('imagereportage'))
        {

            $width = config('cms.image.thumbnail.width');
            $height = config('cms.image.thumbnail.height');

            $image = $request->file('imagereportage');
            $fileName = $image->getClientOriginalName();
            $destination = $this->uploadPath;

            $successUploaded = $image->move($destination, $fileName);
            //$image->move($destination, $fileName);

            if ($successUploaded)
            {
                $extension      = $image->getClientOriginalExtension();
                $thumbnail      = str_replace(".{$extension}", "_thumb.{$extension}", $fileName);

                Image::make($destination . '/' . $fileName)
                    ->resize($width, $height)
                    ->save($destination . '/thumbs/' . $thumbnail);
            }
            $data['imagereportage'] = $fileName;

            // Si il ya une image, on met le produit sur 2 (option lisibilité, détail de votre activité et reportage)
            $data['product_id'] = 2;
        }

        $vigneron->update($data);

        $id = $vigneron->user_id;

        // On retrouve le product
        $product = Product::where('id', $vigneron->product_id)->first();

        return view('admin.vignerons.vignerons.option', compact('vigneron', 'id', 'product'));
    }

    /**
    	* Méthode option () pour afficher la vue option avec les nouvelles coordonnées du vigneron
    	*
    	* @param $id
    	* @return view('admin.vignerons.vignerons.option', compact('vigneron'));
    **/
    public function option ($id)
    {
        // On récupère l'identifiant unique lié à l'utilisateur/vigneron.
        $vigneron = Vigneron::where('user_id', $id)->first();

        dd($vigneron);

        return view('admin.vignerons.vignerons.option', compact('vigneron'));
    }

    /**
    	* Méthode devisreportage () pour envoyer une demande de devis à l'admin
    	*
    	* @param $id
    	* @return
    **/
    public function devisreportage ($id)
    {
        $vigneron = Vigneron::where('user_id', $id)->first();

        /*=============== ENVOI D'UN MAIL AU VIGNERON ET À L'ADMIN ==============*/
        // On créé le message pour les mails
        $message = Message::create([
            'name'          => $vigneron->societe,
            'email'         => $vigneron->email,
            'sujet'         => "Demande de devis pour un reportage",
            'role'          => 'vigneron',
            'contenu'       => "Répondre dans les 48 heures",
            'motdepasse'    => NULL,
            'user_id'       => $vigneron->user_id
        ]);

        // Envoi de 2 emails, 1 à la personne qui a payé la transaction et 1 à l'administration du site
        // au vigneron
        Mail::to($vigneron->email)->send(new \App\Mail\DevisreportageMail($message));
        // à l'admin
        Mail::to(env('TO_MAIL'))->send(new \App\Mail\DevisreportageMail($message));
        /*=============== ../ENVOI D'UN MAIL À L'INTÉRESSÉ ET L'ADMIN==============*/

        // Par prévention, on vide la carte en attendant de répondre au mail
        Cart::destroy();

        // On vide le remplissage du vigneron et son activation
        // $data = [
        //     'societe'               => $vigneron->societe,
        //     'aliassociete'          => $this->enlevertouteslesmerdes($vigneron->societe),
        //     'adresse'               => $vigneron->adresse,
        //     'telephone'             => $vigneron->telephone,
        //     'site'                  => $vigneron->site,
        //     'latlong'               => $vigneron->latlong,
        //     'sortevin'              => $vigneron->sortevin,
        //     'qualitevin'            => $vigneron->qualitevin,
        //     'actif'                 => 0,
        //     'francevinicole'        => "France",
        //     'departement'           => $vigneron->departement,
        //     'region'                => NULL,
        //     'regionvinicole'        => NULL,
        //     'aliasregionvinicole'   => NULL,
        //     'communevinicole'       => NULL,
        //     'aliascommunevinicole'  => NULL,
        //     'localitevinicole'      => NULL,
        //     'aliaslocalitevinicole' => NULL,
        //     'zoom'                  => 10,
        //     'latlongregion'         => $vigneron->latlong,
        //     'imagereportage'        => NULL,
        //     'reportage'             => '',
        //     'fiche'                 => '',
        //     'video'                 => '',
        //     'user_id'               => $vigneron->user_id,
        //     'created_at'            => Carbon::now(),
        //     'updated_at'            => Carbon::now(),
        // ];
        
        // On met en attente l'activation de la vidéo
        $vigneron['video'] = 0;

        // On met à jour la vidéo du vigneron
        $vigneron->save();

        // On redirige le vigneron vers une page de succès
        return redirect(route('admin.vignerons.succesenvoidevis', ['id' => $vigneron->user_id]));
    }

    /**
    	* Méthode succesenvoidevis () pour afficher la vue de succès de l'envoi de demande de devis
    	*
    	* @param $id
    	* @return
    **/
    public function succesenvoidevis ($id)
    {
        $vigneron = Vigneron::where('user_id', $id)->first();

        return view ('admin.vignerons.vignerons.succesenvoidevis', compact('vigneron'));
    }

    /**
    	* Méthode annulation () pour annuler l'envoi des données, notamment l'actif = 1 à mettre à 0
    	*
    	* @param $id
    	* @return
    **/
    public function annulation ($id)
    {
        $vigneron = Vigneron::where('user_id', $id)->first();

        $user_id = $vigneron->user_id;

        $data = [
            'societe'               => $vigneron->societe,
            'aliassociete'          => $this->enlevertouteslesmerdes($vigneron->societe),
            'adresse'               => $vigneron->adresse,
            'telephone'             => $vigneron->telephone,
            'site'                  => $vigneron->site,
            'latlong'               => $vigneron->latlong,
            'sortevin'              => $vigneron->sortevin,
            'qualitevin'            => $vigneron->qualitevin,
            'actif'                 => 0,
            'francevinicole'        => "France",
            'departement'           => $vigneron->departement,
            'region'                => $vigneron->region,
            'indiceregion'          => $vigneron->indiceregion,
            'regionvinicole'        => $vigneron->regionvinicole,
            'aliasregionvinicole'   => $vigneron->aliasregionvinicole,
            'communevinicole'       => $vigneron->communevinicole,
            'aliascommunevinicole'  => $vigneron->aliascommunevinicole,
            'localitevinicole'      => $vigneron->localitevinicole,
            'aliaslocalitevinicole' => $vigneron->aliaslocalitevinicole,
            'zoom'                  => $vigneron->zoom,
            'latlongregion'         => $vigneron->latlong,
            'imagereportage'        => NULL,
            'reportage'             => '',
            'fiche'                 => '',
            'video'                 => '',
            'user_id'               => $vigneron->user_id,
            'paye'                  => 0,
            'product_id'            => NULL,
            'created_at'            => Carbon::now(),
            'updated_at'            => Carbon::now(),
        ];

        $vigneron->update($data);

        // On détruit la carte au cas où il y en aurait 1
        Cart::destroy();

        // On redirige le vigneron vers une page de succès
        return view('admin.vignerons.vignerons.annule', compact('vigneron', 'id'));
    }

    /**
    	* Méthode annule () qui annule tout et remet tout à zéro
    	*
    	* @param $id
    	* @return view('admin.vignerons.vignerons.annule');
    **/
    public function annule ($id)
    {
        $vigneron = Vigneron::where('user_id', $id)->first();

        return view('admin.vignerons.vignerons.annule', compact('vigneron'));
    }

    /**
    	* Méthode recapitulatif () pour récapituler la commande
    	*
    	* @param $id
    	* @return
    **/
    public function recapitulatif (Request $request, $id)
    {
        // On récupère le vigneron
        $vigneron = Vigneron::where('user_id', $id)->first();

        // On récupère le product
        $product = Product::where('id', $vigneron->product_id)->first();

        $id = $vigneron->user_id;

        return view('admin.vignerons.vignerons.recapitulatif', compact('vigneron', 'id', 'product'));
    }

    /**
    	* Méthode panierajouter () pour ajouter un élément au panier
    	*
    	* @param
    	* @return
    **/
    public function panierajouter (Request $request, $id)
    {
        // On récupère le vigneron
        $vigneron = Vigneron::where('user_id', $id)->firstOrFail();

        // On définit les paramètres pour la carte :
        $id = $vigneron->user_id;
        $name = $request->produit;
        $qty = 1;
        $price = $request->pht;
        $options = [];

        // On créé le panier
        $panier = Cart::add($id, $name, $qty, $price, $options);

        // dd($panier);

        // On affiche la vue de confirmation de commande
        return redirect()->route('admin.vignerons.panier.confirme', compact('id', 'panier'));
    }

    /**
    	* Méthode panierconfirme () la commande est validée, on donne les 2 moyens de paiement Stripe et Paypal
    	*
    	* @param $id
    	* @return view('admin.vignerons.vignerons.panierconfirme', compact('vigneron', 'panier', 'id'));
    **/
    public function panierconfirme ($id)
    {
        // On récupère le vigneron
        $vigneron = Vigneron::where('user_id', $id)->firstOrFail();
        
        // L'id du vigneron
        $id = $vigneron->user_id;

        // Affiche le contenu du panier
        $panier = Cart::content();

        return view('admin.vignerons.vignerons.panierconfirme', compact('vigneron', 'panier', 'id'));
    }
    

    public function findItem ($id)
    {

//        $items = Cart::search(function ($cartItem, $rowId) use ($id) {
//            return $cartItem->id === intval($id);
//        });
//
//        return $items->first();
    }

    /**
    	* Méthode paniermiseajour () pour le traitement des + et - du panier par jQuery/Ajax
    	*
    	* @param
    	* @return
    **/
    public function paniermiseajour (Request $request, $id)
    {
        // On récupère le vigneron
        $vigneron = Vigneron::where('user_id', $id)->firstOrFail();

        // On récupère le panier
        $carte = Cart::content()->first();

        // On récupère les éléments essantiels de la carte
        $rowId = $carte->rowId;
        $qty = $request->qte;

        // $product = Product::where('name', $name)->get();

        // On met à jour la carte
        $panier = Cart::update($rowId, $qty);

        return redirect()->back()->with('success', 'Votre panier a été mis à jour avec succès.');
    }

    /**
    	* Méthode panierpaiement () pour payer la commande
    	*
    	* @param
    	* @return
    **/
    public function panierpaiement (Request $request, $id)
    {
        // On récupère le vigneron
        $vigneron = Vigneron::where('user_id', $id)->firstOrFail();

        // On récupère l'id du produit
        $product_id = $request->product_id;

        // On récupère le total du panier
        $carte = Cart::total();

        // On récupère le nom du produit et la quantité demandée
        $panier = Cart::content()->first();
        $produit = $panier->name;
        $qte = $panier->qty;

        return view('admin.vignerons.vignerons.panierpaiement', compact('vigneron', 'carte', 'produit', 'qte', 'product_id'));
    }

    /**
    	* Méthode messagevigneron () pour afficher la vue du formulaire d'envoi de mail des vignerons présents dans la liste
    	*
    	* @param $id
    	* @return
    **/
    public function messagevigneron ($id)
    {
        // On récupère l'id du vigneron
        $vigneron = Vigneron::findorFail($id);

        // On affiche le formulaire d'envoi du mail
        return view('admin.vignerons.messagevigneron', compact('vigneron'));
    }
    
    /**
    	* Méthode postmessagevigneron () pour envoyer le mail du vigneron
    	*
    	* @param
    	* @return
    **/
    public function postmessagevigneron (Requests\MessageVigneronRequest $request, $id)
    {
        // On récupère l'id du vigneron
        $vigneron = Vigneron::findorFail($id);

        $data = [
            'societe'   => $vigneron->societe,
            'email'     => $vigneron->email,
            'sujet'     => $request->sujet,
            'contenu'   => $request->contenu
        ];

        // On construit le message du mail à envoyer
        $message = Message::create([
            'name'          => $vigneron->societe,
            'email'         => $vigneron->email,
            'sujet'         => $request->sujet,
            'role'          => 'vigneron',
            'contenu'       => $request->contenu
        ]);

        // Envoi des emails à l'administration du site et au vigneron
        Mail::to($vigneron->email)->send(new \App\Mail\EnvoiMessageVigneron($message));

        return redirect()
            ->back()
            ->with('success', Auth::user()->name.", votre email adressé à " .$vigneron->societe. " est parvenu avec succès !");
    }

    /**
    	* Méthode commentairesvigneron () accès du vigneron à tous ses commentaires postés dans le front-end par les internautes laogués
    	*
    	* @param $id
        * @return view('admin.vignerons.vignerons.commentaires', compact('commentaires', 'compteCommentaires'));
        * @return abort(405)
    **/
    public function commentairesvigneron ($id)
    {
        // On met diffForHumans() en locale avec la classe 
        \Carbon\Carbon::setLocale('fr');

        // On récupère le user_id du vigneron par le modèle vigneron
        $vigneron = Vigneron::where('user_id', $id)->first();

        // On récupère l'id du vigneron par le vigneron
        $idvigneron = Vigneron::where('user_id', $vigneron->user_id)->first();

        // On définit si le vigneron a eu des commentaires ou pas
        $comment = Comment::where('vigneron_id', $vigneron->id)->first();
        
        // On récupère les commentaires
        $commentaires = Comment::where('vigneron_id', $vigneron->id)
                        ->orderBy('id', 'desc')
                        ->paginate(5);

        // On dénombre tous les commentaires
        $compteCommentaires = Comment::where('vigneron_id', $idvigneron->id)->count();

        return view('admin.vignerons.vignerons.commentaires', compact('commentaires', 'compteCommentaires'));
    }

     /**
    	* Méthode repondrecommentairevigneron () permet l'accès à la réponse du commentaire du vigneron
    	*
    	* @param $id
        * @return view('admin.vignerons.vignerons.commentaires', compact('commentaires', 'compteCommentaires'));
    **/
    public function repondrecommentairevigneron ($id)
    {
        // On met diffForHumans() en locale avec la classe 
        \Carbon\Carbon::setLocale('fr');

        // On récupère le commentaire du vigneron
        $commentaire = Comment::findOrFail($id);

        return view('admin.vignerons.vignerons.reponsecommentaire', compact('commentaire'));
    }

    /**
    	* Méthode updatecommentairevigneron () permet au vigneron de répondre au commentaire
        *
        * @param Request $request
    	* @param $id
        * @return view('admin.vignerons.vignerons.commentaires', compact('commentaires', 'compteCommentaires'));
    **/
    public function updatecommentairevigneron (CommentaireVigneronRequest $request, $id)
    {
        // On met diffForHumans() en locale avec la classe 
        \Carbon\Carbon::setLocale('fr');

        // On récupère le logué
        $user = Auth::user()->id;

        // On récupère le commentaire posté
        $commentaire = Comment::findOrFail($id);

        // On récupère l'email de l'internaute
        $internaute = $commentaire->user_email;

        // On récupère les données du commentaire
        $data = [
            'body'          => NULL,
            'name'          => $commentaire->name,
            'imageprofil'   => $commentaire->imageprofil,
            'vigneron_id'   => $commentaire->vigneron_id,
            'reponse'       => $request->reponse,
            'created_at'    => $commentaire->created_at,
            'updated_at'    => Carbon::now()
        ];

        // On créé un nouveau commentaire dans la BDD
        $commentaire = Comment::create($data);

        // On construit le message du mail à envoyer
        $message = Message::create([
            'name'          => $commentaire->vigneron->societe,
            'email'         => $commentaire->vigneron->email,
            'sujet'         => "Réponse au commentaire d'un internaute",
            'role'          => 'internaute',
            'commentaire'   => 1,
            'contenu'       => $request->reponse,
        ]);
        
        // Envoi des emails à l'administration du site et à l'internaute
        Mail::to(env('TO_MAIL'))->send(new \App\Mail\ReponseCommentaireVigneron($message));
        Mail::to($internaute)->send(new \App\Mail\ReponseCommentaireVigneron($message));

        // On retourne aux commentaires
        return redirect(route('admin.vignerons.commentaires', $user))
        ->with(
            'message', "Votre réponse au commentaire de ". $commentaire->name . " a bien été envoyée !
            Nous nos réservons 48 heures pour définitivement l'accréditer."
        );
        
    }


}
