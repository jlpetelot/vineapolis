<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VigneronsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // On remet la table à zéro
        DB::table('vignerons')->truncate();

        $date = Carbon::now();

        $chaine = base64_encode(random_bytes(10));

        DB::table('vignerons')->insert([
            [
                'societe'               => "Cognac Remy Couillebaud",
                'aliassociete'          => "cognac-remy-couillebaud",
                'adresse'               => "RN 141 Malvieille, 16290 Moulidars",
                'telephone'             => "05 45 90 91 27",
                'site'                  => "http://www.cognac-couillebaud.com",
                'email'                 => "cognac.couillebaud@wanadoo.fr",
                'latlong'               => "45.683638,-0.057678",
                'sortevin'              => "blanc",
                'qualitevin'            => "Cognac Vieille Réserve",
                'actif'                 => 0,
                'departement'           => "Charente",
                'francevinicole'        => "France",
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
                'zoom'                  => "10",
                'latlongregion'         => "45.7,-0.06",
                'reportage'             => "",
                'imagereportage'        => "",
                'fiche'                 => "",
                'video'                 => NULL,
                'user_id'               => NULL,
                'product_id'            => NULL,
                'paye' 				    => 0,
                'created_at'            => $date,
                'updated_at'            => $date,
            ],
            [
                'societe'               => "Domaine de Pellehaut",
                'aliassociete'          => "domaine-de-pellehaut",
                'adresse'               => "32250 Montréal du Gers",
                'telephone'             => "05.62.29.48.79",
                'site'                  => "http://www.pellehaut.com/",
                'email'                 => "contact@pellehaut.com ",
                'latlong'               => "43.972128,0.1749093",
                'sortevin'              => "rouge rosé blanc",
                'qualitevin'            => "Médaille d'or 2014",
                'actif'                 => 0,
                'departement'           => "Gers",
                'francevinicole'        => "France",
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
                'zoom'                  => "10",
                'latlongregion'         => "44,0.1",
                'reportage'             => "",
                'imagereportage'        => "",
                'fiche'                 => "",
                'video'                 => NULL,
                'user_id'               => NULL,
                'product_id'            => NULL,
                'paye' 				    => 0,
                'created_at'            => $date,
                'updated_at'            => $date,
            ],
            [
                'societe'               => "Producteurs Du Haut Bugey",
                'aliassociete'          => "producteurs-du-haut-bugey",
                'adresse'               => "1080, avenue du Général Andréa, 01100 Arbent",
                'telephone'             => "09 62 57 39 50",
                'site'                  => "",
                'email'                 => "",
                'latlong'               => "46.2827788,5.6771565",
                'sortevin'              => "rouge rosé blanc",
                'qualitevin'            => "",
                'actif'                 => 0,
                'departement'           => "Ain",
                'francevinicole'        => "France",
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
                'zoom'                  => "10",
                'latlongregion'         => "46,5.5",
                'reportage'             => "",
                'imagereportage'        => "",
                'fiche'                 => "",
                'video'                 => NULL,
                'user_id'               => NULL,
                'product_id'            => NULL,
                'paye' 				    => 0,
                'created_at'            => $date,
                'updated_at'            => $date,
            ],
            [
                'societe'               => "Desserrieres Henri",
                'aliassociete'          => "desserrieres-henri",
                'adresse'               => "139, grande rue, 01150 Saint-Sorlin en Bugey",
                'telephone'             => "04 74 35 82 48",
                'site'                  => "",
                'email'                 => "",
                'latlong'               => "45.8839138,5.3699074",
                'sortevin'              => "rouge rosé blanc",
                'qualitevin'            => "",
                'actif'                 => 0,
                'departement'           => "Ain",
                'francevinicole'        => "France",
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
                'zoom'                  => "10",
                'latlongregion'         => "46,5.5",
                'reportage'             => "",
                'imagereportage'        => "",
                'fiche'                 => "",
                'video'                 => NULL,
                'user_id'               => NULL,
                'product_id'            => NULL,
                'paye' 				    => 0,
                'created_at'            => $date,
                'updated_at'            => $date,
            ],
            [
                'societe'               => "Pellerin Jean Christophe",
                'aliassociete'          => "pellerin-jean-christophe",
                'adresse'               => "Lieu-dit Perrozan, 01150 Saint-Sorlin en Bugey",
                'telephone'             => "04 74 35 87 69",
                'site'                  => "",
                'email'                 => "pellerin.jch@wanadoo.fr",
                'latlong'               => "45.8851427,5.3405142",
                'sortevin'              => "rouge rosé blanc",
                'qualitevin'            => "",
                'actif'                 => 0,
                'departement'           => "Ain",
                'francevinicole'        => "France",
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
                'zoom'                  => "10",
                'latlongregion'         => "46,5.5",
                'reportage'             => "",
                'imagereportage'        => "",
                'fiche'                 => "",
                'video'                 => NULL,
                'user_id'               => NULL,
                'product_id'            => NULL,
                'paye' 				    => 0,
                'created_at'            => $date,
                'updated_at'            => $date,
            ],
            [
                'societe'               => "Philippe Christian",
                'aliassociete'          => "philippe-christian",
                'adresse'               => "Grande Rue, 01150 Saint-Sorlin en Bugey",
                'telephone'             => "04 74 35 80 52",
                'site'                  => "",
                'email'                 => "philippe.christian@cegetel.net",
                'latlong'               => "45.8883658,5.3667348",
                'sortevin'              => "rouge rosé blanc",
                'qualitevin'            => "",
                'actif'                 => 0,
                'departement'           => "Ain",
                'francevinicole'        => "France",
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
                'zoom'                  => "10",
                'latlongregion'         => "46,5.5",
                'reportage'             => "",
                'imagereportage'        => "",
                'fiche'                 => "",
                'video'                 => NULL,
                'user_id'               => NULL,
                'product_id'            => NULL,
                'paye' 				    => 0,
                'created_at'            => $date,
                'updated_at'            => $date,
            ],
            [
                'societe'               => "Domaine Duport Schwab",
                'aliassociete'          => "domaine-duport-schwab",
                'adresse'               => "46, Grande Rue, 01150 Vaux-en-Bugey",
                'telephone'             => "09 61 29 22 65",
                'site'                  => "",
                'email'                 => "earl.duport@orange.fr",
                'latlong'               => "45.9280252,5.3519051",
                'sortevin'              => "rouge rosé blanc",
                'qualitevin'            => "",
                'actif'                 => 0,
                'departement'           => "Ain",
                'francevinicole'        => "France",
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
                'zoom'                  => "10",
                'latlongregion'         => "46,5.5",
                'reportage'             => "",
                'imagereportage'        => "",
                'fiche'                 => "",
                'video'                 => NULL,
                'user_id'               => NULL,
                'product_id'            => NULL,
                'paye' 				    => 0,
                'created_at'            => $date,
                'updated_at'            => $date,
            ],
            [
                'societe'               => "Maison Tissot",
                'aliassociete'          => "maison-tissot",
                'adresse'               => "42, Quai du Buizin, 01150 Vaux-en-Bugey",
                'telephone'             => "06 70 65 96 52",
                'site'                  => "",
                'email'                 => "tissot.bugey@gmail.com",
                'latlong'               => "45.928251,5.3525913",
                'sortevin'              => "rouge rosé blanc",
                'qualitevin'            => "",
                'actif'                 => 0,
                'departement'           => "Ain",
                'francevinicole'        => "France",
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
                'zoom'                  => "10",
                'latlongregion'         => "46,5.5",
                'reportage'             => "",
                'imagereportage'        => "",
                'fiche'                 => "",
                'video'                 => NULL,
                'user_id'               => NULL,
                'product_id'            => NULL,
                'paye' 				    => 0,
                'created_at'            => $date,
                'updated_at'            => $date,
            ],
            [
                'societe'               => "Folliat Roland",
                'aliassociete'          => "folliat-roland",
                'adresse'               => "85, Chemin de la Tour, 01160 Saint-Martin-du-Mont",
                'telephone'             => "04 74 35 50 96",
                'site'                  => "",
                'email'                 => "",
                'latlong'               => "46.1155267,5.3365128",
                'sortevin'              => "rouge",
                'qualitevin'            => "",
                'actif'                 => 0,
                'departement'           => "Ain",
                'francevinicole'        => "France",
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
                'zoom'                  => "10",
                'latlongregion'         => "46,5.5",
                'reportage'             => "",
                'imagereportage'        => "",
                'fiche'                 => "",
                'video'                 => NULL,
                'user_id'               => NULL,
                'product_id'            => NULL,
                'paye' 				    => 0,
                'created_at'            => $date,
                'updated_at'            => $date,
            ],
            [
                'societe'               => "Antoine Véronique",
                'aliassociete'          => "antoine-veronique",
                'adresse'               => "281, En Reculet, 01250 Bohas-Meyriat-Rignat",
                'telephone'             => "06 67 13 00 86",
                'site'                  => "",
                'email'                 => "vinpetillant.veroniqueantoine@gmail.com",
                'latlong'               => "46.1380036,5.3533319",
                'sortevin'              => "rouge",
                'qualitevin'            => "",
                'actif'                 => 1,
                'departement'           => "Ain",
                'francevinicole'        => "France",
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
                'zoom'                  => "10",
                'latlongregion'         => "46,5.5",
                'reportage'             => "",
                'imagereportage'        => "",
                'fiche'                 => "",
                'video'                 => NULL,
                'user_id'               => 6,
                'product_id'            => NULL,
                'paye' 				    => 1,
                'created_at'            => $date,
                'updated_at'            => $date,
            ],
            [
                'societe'               => "Domaine de la Bélière",
                'aliassociete'          => "domaine-de-la-beliere",
                'adresse'               => "120, chemin de la Ravat, 01250 Bohas-Meyriat-Rignat",
                'telephone'             => "06 80 15 27 93",
                'site'                  => "http://www.cerdon-domainedelabeliere.fr",
                'email'                 => "",
                'latlong'               => "46.1430222,5.3671157",
                'sortevin'              => "rouge blanc",
                'qualitevin'            => "",
                'actif'                 => 0,
                'departement'           => "Ain",
                'francevinicole'        => "France",
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
                'zoom'                  => "10",
                'latlongregion'         => "46,5.5",
                'reportage'             => "",
                'imagereportage'        => "",
                'fiche'                 => "",
                'video'                 => NULL,
                'user_id'               => NULL,
                'product_id'            => NULL,
                'paye' 				    => 0,
                'created_at'            => $date,
                'updated_at'            => $date,
            ],
            [
                'societe'               => "Collomb Claude",
                'aliassociete'          => "collomb-claude",
                'adresse'               => "Massignieu Belmont, 01260 Belmont-Luthézieu",
                'telephone'             => "04 79 87 33 62",
                'site'                  => "",
                'email'                 => "ccollomb01@orange.fr",
                'latlong'               => "45.883333,5.6478113",
                'sortevin'              => "rouge rosé blanc",
                'qualitevin'            => "",
                'actif'                 => 0,
                'departement'           => "Ain",
                'francevinicole'        => "France",
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
                'zoom'                  => "10",
                'latlongregion'         => "46,5.5",
                'reportage'             => "",
                'imagereportage'        => "",
                'fiche'                 => "",
                'video'                 => NULL,
                'user_id'               => NULL,
                'product_id'            => NULL,
                'paye' 				    => 0,
                'created_at'            => $date,
                'updated_at'            => $date,
            ],
            [
                'societe'               => "Domaine D'Andert",
                'aliassociete'          => "domaine-d-andert",
                'adresse'               => "289, rue Chapelle, 01300 Andert et Condon",
                'telephone'             => "04 79 81 17 18",
                'site'                  => "",
                'email'                 => "",
                'latlong'               => "45.7823041,5.6469064",
                'sortevin'              => "rouge rosé blanc",
                'qualitevin'            => "",
                'actif'                 => 0,
                'departement'           => "Ain",
                'francevinicole'        => "France",
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
                'zoom'                  => "10",
                'latlongregion'         => "46,5.5",
                'reportage'             => "",
                'imagereportage'        => "",
                'fiche'                 => "",
                'video'                 => NULL,
                'user_id'               => NULL,
                'product_id'            => NULL,
                'paye' 				    => 0,
                'created_at'            => $date,
                'updated_at'            => $date,
            ],
            [
                'societe'               => "Cave Martin Barbaz",
                'aliassociete'          => "cave-martin-barbaz",
                'adresse'               => "73, Chemin de Thieux, 01300 Izieu",
                'telephone'             => "06 81 54 38 95",
                'site'                  => "",
                'email'                 => "",
                'latlong'               => "45.653657,5.6426104",
                'sortevin'              => "rouge rosé blanc",
                'qualitevin'            => "",
                'actif'                 => 0,
                'departement'           => "Ain",
                'francevinicole'        => "France",
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
                'zoom'                  => "10",
                'latlongregion'         => "46,5.5",
                'reportage'             => "",
                'imagereportage'        => "",
                'fiche'                 => "",
                'video'                 => NULL,
                'user_id'               => NULL,
                'product_id'            => NULL,
                'paye' 				    => 0,
                'created_at'            => $date,
                'updated_at'            => $date,
            ],
            [
                'societe'               => "Maison Angelot",
                'aliassociete'          => "maison-angelot",
                'adresse'               => "121, rue du Lavoir, 01300 Marignieu",
                'telephone'             => "04 79 42 18 84",
                'site'                  => "https://www.maison-angelot.fr/",
                'email'                 => "",
                'latlong'               => "45.7965958,5.7199264",
                'sortevin'              => "rouge rosé blanc pétillant",
                'qualitevin'            => "",
                'actif'                 => 0,
                'departement'           => "Ain",
                'francevinicole'        => "France",
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
                'zoom'                  => "10",
                'latlongregion'         => "46,5.5",
                'reportage'             => "",
                'imagereportage'        => "",
                'fiche'                 => "",
                'video'                 => NULL,
                'user_id'               => NULL,
                'product_id'            => NULL,
                'paye' 				    => 0,
                'created_at'            => $date,
                'updated_at'            => $date,
            ],
            [
                'societe'               => "Caveau Quinard",
                'aliassociete'          => "caveau-quinard",
                'adresse'               => "201, Lit au Roi, 01300 Massignieu-de-Rives",
                'telephone'             => "04 79 42 10 18",
                'site'                  => "http://www.caveauquinard.fr/",
                'email'                 => "",
                'latlong'               => "45.7556677,5.7628647",
                'sortevin'              => "rouge rosé blanc pétillant",
                'qualitevin'            => "Roussette du Bugey",
                'actif'                 => 0,
                'departement'           => "Ain",
                'francevinicole'        => "France",
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
                'zoom'                  => "10",
                'latlongregion'         => "46,5.5",
                'reportage'             => "",
                'imagereportage'        => "",
                'fiche'                 => "",
                'video'                 => NULL,
                'user_id'               => NULL,
                'product_id'            => NULL,
                'paye' 				    => 0,
                'created_at'            => $date,
                'updated_at'            => $date,
            ],
            [
                'societe'               => "Caveau Dufour",
                'aliassociete'          => "caveau-dufour",
                'adresse'               => "257, Montée Bourg, 01300 Massignieu-de-Rives",
                'telephone'             => "04 79 42 19 98",
                'site'                  => "http://www.caveau-dufour.fr/",
                'email'                 => "",
                'latlong'               => "45.7541759,5.7623671",
                'sortevin'              => "rouge rosé blanc pétillant",
                'qualitevin'            => "Roussette du Bugey",
                'actif'                 => 0,
                'departement'           => "Ain",
                'francevinicole'        => "France",
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
                'zoom'                  => "10",
                'latlongregion'         => "46,5.5",
                'reportage'             => "",
                'imagereportage'        => "",
                'fiche'                 => "",
                'video'                 => NULL,
                'user_id'               => NULL,
                'product_id'            => NULL,
                'paye' 				    => 0,
                'created_at'            => $date,
                'updated_at'            => $date,
            ],
            [
                'societe'               => "Vivier Georges",
                'aliassociete'          => "vivier-georges",
                'adresse'               => "204, impasse Terrasses, 01300 Parves-et-Nattages",
                'telephone'             => "04 79 36 90 25",
                'site'                  => "",
                'email'                 => "",
                'latlong'               => "45.723635,5.7498923",
                'sortevin'              => "",
                'qualitevin'            => "",
                'actif'                 => 0,
                'departement'           => "Ain",
                'francevinicole'        => "France",
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
                'zoom'                  => "10",
                'latlongregion'         => "46,5.5",
                'reportage'             => "",
                'imagereportage'        => "",
                'fiche'                 => "",
                'video'                 => NULL,
                'user_id'               => NULL,
                'product_id'            => NULL,
                'paye' 				    => 0,
                'created_at'            => $date,
                'updated_at'            => $date,
            ],
            [
                'societe'               => "Perdrix Philippe",
                'aliassociete'          => "perdrix-philippe",
                'adresse'               => "Domaine de Villeneuve, 01300 Saint-Benoît",
                'telephone'             => "04 74 39 74 24",
                'site'                  => "http://www.vin-perdrixphilippe.com/",
                'email'                 => "",
                'latlong'               => "45.7090753,5.5749628",
                'sortevin'              => "rouge rosé blanc pétillant",
                'qualitevin'            => "Roussette du Bugey",
                'actif'                 => 0,
                'departement'           => "Ain",
                'francevinicole'        => "France",
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
                'zoom'                  => "10",
                'latlongregion'         => "46,5.5",
                'reportage'             => "",
                'imagereportage'        => "",
                'fiche'                 => "",
                'video'                 => NULL,
                'user_id'               => NULL,
                'product_id'            => NULL,
                'paye' 				    => 0,
                'created_at'            => $date,
                'updated_at'            => $date,
            ],
            [
                'societe'               => "Roux Jean-Jacques",
                'aliassociete'          => "roux-jean-jacques",
                'adresse'               => "Chatonod, 01300 Saint-Champ",
                'telephone'             => "04 79 42 17 66",
                'site'                  => "",
                'email'                 => "",
                'latlong'               => "45.789693,5.7226823",
                'sortevin'              => "",
                'qualitevin'            => "",
                'actif'                 => 0,
                'departement'           => "Ain",
                'francevinicole'        => "France",
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
                'zoom'                  => "10",
                'latlongregion'         => "46,5.5",
                'reportage'             => "",
                'imagereportage'        => "",
                'fiche'                 => "",
                'video'                 => NULL,
                'user_id'               => NULL,
                'product_id'            => NULL,
                'paye' 				    => 0,
                'created_at'            => $date,
                'updated_at'            => $date,
            ],
            [
                'societe'               => "Domaine l'abbe dîne",
                'aliassociete'          => "domaine-l-abbe-dine",
                'adresse'               => "1bis, chemin Louise Michel, 84350 Courthézon",
                'telephone'             => "06 12 66 99 50",
                'site'                  => "",
                'email'                 => "domainelabbedine@wanadoo.fr",
                'latlong'               => "44.082744,4.8759933",
                'sortevin'              => "rouge blanc",
                'qualitevin'            => "Châteauneuf-du-Pape",
                'actif'                 => 0,
                'departement'           => "Vaucluse",
                'francevinicole'        => "France",
                'region'                => "cotes-du-rhone-meridional",
                'indiceregion'          => NULL,
                'regionvinicole'        => "Côtes du Rhône Méridional",
                'aliasregionvinicole'   => "cotes-du-rhone-meridional",
                'communevinicole'       => "Côtes du Rhône Méridional",
                'aliascommunevinicole'  => "cotes-du-rhone-meridional",
                'localitevinicole'      => "Côtes du Rhône Méridional",
                'aliaslocalitevinicole' => "cotes-du-rhone-meridional",
                'zoom'                  => "9",
                'latlongregion'         => '44.05,4.83',
                'reportage'             => "",
                'imagereportage'        => "",
                'fiche'                 => "",
                'video'                 => NULL,
                'user_id'               => NULL,
                'product_id'            => NULL,
                'paye' 				    => 0,
                'created_at'            => $date,
                'updated_at'            => $date,
            ],
            [
                'societe'               => "Domaine de la Destinée",
                'aliassociete'          => "domaine-de-la-destinee",
                'adresse'               => "215, Chemin de la Gironde, 84100 Orange",
                'telephone'             => "04 90 11 06 85",
                'site'                  => "https://www.ladestinee.com/",
                'email'                 => "domaine@ladestinee.com",
                'latlong'               => "44.1070094,4.8211205",
                'sortevin'              => "rouge rosé blanc",
                'qualitevin'            => "Châteauneuf-du-Pape",
                'actif'                 => 0,
                'departement'           => "Vaucluse",
                'francevinicole'        => "France",
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
                'zoom'                  => "9",
                'latlongregion'         => '44.05,4.83',
                'reportage'             => "",
                'imagereportage'        => "",
                'fiche'                 => "",
                'video'                 => NULL,
                'user_id'               => NULL,
                'product_id'            => NULL,
                'paye' 				    => 0,
                'created_at'            => $date,
                'updated_at'            => $date,
            ],
            [
                'societe'               => "Vignobles Mayard",
                'aliassociete'          => "vignobles-mayard",
                'adresse'               => "24, avenue Baron Le Roy, BP 16, 84231 Châteauneuf-du-Pape Cédex",
                'telephone'             => "+33 (0)4 90 83 70 16",
                'site'                  => "http://www.vignobles-mayard.fr",
                'email'                 => "contact@vignobles-mayard.fr",
                'latlong'               => "44.0553861,4.8313781",
                'sortevin'              => "rouge rosé blanc",
                'qualitevin'            => "Châteauneuf-du-Pape",
                'actif'                 => 0,
                'departement'           => "Vaucluse",
                'francevinicole'        => "France",
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
                'zoom'                  => "9",
                'latlongregion'         => '44.05,4.83',
                'reportage'             => "",
                'imagereportage'        => "",
                'fiche'                 => "",
                'video'                 => NULL,
                'user_id'               => NULL,
                'product_id'            => NULL,
                'paye' 				    => 0,
                'created_at'            => $date,
                'updated_at'            => $date,
            ],
            [
                'societe'               => "Domaine de l'Arnesque",
                'aliassociete'          => "domaine-de-l-arnesque",
                'adresse'               => "Traverse de Monsieur Ode, 84150 Jonquières",
                'telephone'             => "04 90 40 32 84",
                'site'                  => "",
                'email'                 => "arnesque@arnesque.com",
                'latlong'               => "44.1173646,4.9029269",
                'sortevin'              => "rouge",
                'qualitevin'            => "Châteauneuf-du-Pape",
                'actif'                 => 0,
                'departement'           => "Vaucluse",
                'francevinicole'        => "France",
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
                'zoom'                  => "9",
                'latlongregion'         => '44.05,4.83',
                'reportage'             => "",
                'imagereportage'        => "",
                'fiche'                 => "",
                'video'                 => NULL,
                'user_id'               => NULL,
                'product_id'            => NULL,
                'paye' 				    => 0,
                'created_at'            => $date,
                'updated_at'            => $date,
            ],
            [
                'societe'               => "Château Rocher-Calon",
                'aliassociete'          => "chateau-rocher-calon",
                'adresse'               => "Vignobles Lagardère - Négrit, 33570 Montagne",
                'telephone'             => "05 57 74 61 63",
                'site'                  => "http://www.vignobles-lagardere.com/",
                'email'                 => "vignobleslagardere@wanadoo.fr",
                'latlong'               => "44.937588,-0.1469577",
                'sortevin'              => "rouge",
                'qualitevin'            => "Montagne Saint-Emilion",
                'actif'                 => 0,
                'departement'           => "Gironde",
                'francevinicole'        => "France",
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
                'zoom'                  => "11",
                'latlongregion'         => "44.87,-0.19",
                'reportage'             => "",
                'imagereportage'        => "",
                'fiche'                 => "",
                'video'                 => NULL,
                'user_id'               => NULL,
                'product_id'            => NULL,
                'paye' 				    => 0,
                'created_at'            => $date,
                'updated_at'            => $date,
            ],
            [
                'societe'               => "Château Barbot-Gallet",
                'aliassociete'          => "chateau-barbot-gallet",
                'adresse'               => "33490 Saint-Germain-Des-Graves",
                'telephone'             => "05 56 76 41 80",
                'site'                  => "http://chateaubarbotgallet.fr/",
                'email'                 => "chateaubarbotgallet@wanadoo.fr",
                'latlong'               => "44.6245487,-0.2502739",
                'sortevin'              => "rouge rosé",
                'qualitevin'            => "Côtes de Bordeaux",
                'actif'                 => 0,
                'departement'           => "Gironde",
                'francevinicole'        => "France",
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
                'zoom'                  => '10',
                'latlongregion'         => '44.6245487,-0.2502739',
                'reportage'             => "",
                'imagereportage'        => "",
                'fiche'                 => "",
                'video'                 => NULL,
                'user_id'               => NULL,
                'product_id'            => NULL,
                'paye' 				    => 0,
                'created_at'            => $date,
                'updated_at'            => $date,
            ],
            [
                'societe'               => "Héritage de Négrit",
                'aliassociete'          => "heritage-de-negrit",
                'adresse'               => "Vignobles Lagardère - Négrit, 33570 Montagne",
                'telephone'             => "05 57 74 61 63",
                'site'                  => "http://www.vignobles-lagardere.com/",
                'email'                 => "",
                'latlong'               => "44.937588,-0.1469577",
                'sortevin'              => "rouge",
                'qualitevin'            => "Montagne Saint-Emilion",
                'actif'                 => 0,
                'departement'           => "Gironde",
                'francevinicole'        => "France",
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
                'zoom'                  => "11",
                'latlongregion'         => "44.87,-0.19",
                'reportage'             => "",
                'imagereportage'        => "",
                'fiche'                 => "",
                'video'                 => NULL,
                'user_id'               => NULL,
                'product_id'            => NULL,
                'paye' 				    => 0,
                'created_at'            => $date,
                'updated_at'            => $date,
            ],
            [
                'societe'               => "Domaine Pinson Frères",
                'aliassociete'          => "domaine-pinson-freres",
                'adresse'               => "5, Quai Voltaire, 89800 Chablis",
                'telephone'             => "03 86 42 10 26",
                'site'                  => "http://www.domaine-pinson.com/",
                'email'                 => "contact@domaine-pinson.com",
                'latlong'               => "47.8147003,3.8015909",
                'sortevin'              => "blanc",
                'qualitevin'            => "Chablis Grand Cru",
                'actif'                 => 0,
                'departement'           => "Yonne",
                'francevinicole'        => "France",
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
                'communevinicole'       => "chablis",
                'aliascommunevinicole'  => "chablis",
                'localitevinicole'      => "Grands Crus de Chablis",
                'aliaslocalitevinicole' => "grands-crus-de-chablis",
                'zoom'                  => "14",
                'latlongregion'         => "47.8,3.8",
                'reportage'             => "",
                'imagereportage'        => "",
                'fiche'                 => "",
                'video'                 => NULL,
                'user_id'               => NULL,
                'product_id'            => NULL,
                'paye' 				    => 0,
                'created_at'            => $date,
                'updated_at'            => $date,
            ],
            [
                'societe'               => "Domaine des Vignes du Maynes",
                'aliassociete'          => "domaine-des-vignes-du-maynes",
                'adresse'               => "Rue des Moines, Sagy-le-Haut, 71260 Cruzille",
                'telephone'             => "(+33) 03 85 33 20 15",
                'site'                  => "http://www.vignes-du-maynes.com/",
                'latlong'               => "46.5036606,4.7953499",
                'email'                 => "info@vignes-du-maynes.com",
                'sortevin'              => "rouge blanc",
                'qualitevin'            => "Mâcon Cruzille",
                'actif'                 => 0,
                'departement'           => "Saône-et-Loire",
                'francevinicole'        => "France",
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
                'zoom'                  => "10",
                'latlongregion'         => "46.5,4.74",
                'reportage'             => "",
                'imagereportage'        => "",
                'fiche'                 => "",
                'video'                 => NULL,
                'user_id'               => NULL,
                'product_id'            => NULL,
                'paye' 				    => 0,
                'created_at'            => $date,
                'updated_at'            => $date,
            ],
            [
                'societe'               => "Domaine Rebourseau",
                'aliassociete'          => "domaine-rebourseau",
                'adresse'               => "10, Place du Monument, 21220 Gevrey-Chambertin",
                'telephone'             => "+33(0)3 80 51 88 94",
                'site'                  => "https://www.domaine-rebourseau.fr",
                'latlong'               => "47.2259847,4.9728874",
                'email'                 => "domaine@rebourseau.com",
                'sortevin'              => "rouge",
                'qualitevin'            => "Grand Cru",
                'actif'                 => 0,
                'departement'           => "Côte d'Or",
                'francevinicole'        => "France",
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
                'zoom'                  => "11",
                'latlongregion'         => "47.18,4.95",
                'reportage'             => "",
                'imagereportage'        => "",
                'fiche'                 => "",
                'video'                 => NULL,
                'user_id'               => NULL,
                'product_id'            => NULL,
                'paye' 				    => 0,
                'created_at'            => $date,
                'updated_at'            => $date,
            ],
            [
                'societe'               => "Domaine Jacques Frédéric Mugnier",
                'aliassociete'          => "domaine-jacques-frederic-mugnier",
                'adresse'               => "Château de Chambolle-Musigny, 21220 Chambolle-Musigny",
                'telephone'             => "03 80 62 85 39",
                'site'                  => "http://mugnier.fr",
                'email'                 => "info@mugnier.fr",
                'latlong'               => "47.1856986,4.9496704",
                'sortevin'              => "rouge",
                'qualitevin'            => "Musigny Grand Cru",
                'actif'                 => 0,
                'departement'           => "Côte d'Or",
                'francevinicole'        => "France",
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
                'zoom'                  => "10",
                'latlongregion'         => "47.18,4.95",
                'reportage'             => "",
                'imagereportage'        => "",
                'fiche'                 => "",
                'video'                 => NULL,
                'user_id'               => NULL,
                'product_id'            => NULL,
                'paye' 				    => 0,
                'created_at'            => $date,
                'updated_at'            => $date,
            ],
            [
                'societe'               => "Domaine Christian Confuron et Fils",
                'aliassociete'          => "domaine-christian-confuron-et-fils",
                'adresse'               => "rue du Vieux Château, 21640 Vougeot",
                'telephone'             => "03 80 62 86 80",
                'site'                  => "http://www.domaine-christian-confuron.com/fr",
                'email'                 => "contact@domaine-christian-confuron.com",
                'latlong'               => "47.178508,4.9620423",
                'sortevin'              => "rouge blanc",
                'qualitevin'            => "Clos Vougeot Grand Cru",
                'actif'                 => 0,
                'departement'           => "Côte d'Or",
                'francevinicole'        => "France",
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
                'communevinicole'       => "Côte de Nuits",
                'aliascommunevinicole'  => "cote-de-nuits",
                'localitevinicole'      => "Vougeot",
                'aliaslocalitevinicole' => "vougeot",
                'zoom'                  => "11",
                'latlongregion'         => "47.18,4.95",
                'reportage'             => "",
                'imagereportage'        => "",
                'fiche'                 => "",
                'video'                 => NULL,
                'user_id'               => NULL,
                'product_id'            => NULL,
                'paye' 				    => 0,
                'created_at'            => $date,
                'updated_at'            => $date,
            ],
            [
                'societe'               => "Domaine Armelle et Bernard Rion",
                'aliassociete'          => "domaine-armelle-et-bernard-rion",
                'adresse'               => "8, Route Nationale, 21700 Vosne-Romanée",
                'telephone'             => "+33 3 80 61 05 31",
                'site'                  => "http://www.domainerion.fr/bienvenue",
                'email'                 => "rion@domainerion.fr",
                'latlong'               => "47.154674,4.9566363",
                'sortevin'              => "rouge blanc",
                'qualitevin'            => "Vosne-Romanée 1er Cru",
                'actif'                 => 0,
                'departement'           => "Côte d'Or",
                'francevinicole'        => "France",
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
                'communevinicole'       => "Côte de Nuits",
                'aliascommunevinicole'  => "cote-de-nuits",
                'localitevinicole'      => "Vosne-Romanée",
                'aliaslocalitevinicole' => "vosne-romanee",
                'zoom'                  => "11",
                'latlongregion'         => "47.18,4.95",
                'reportage'             => "",
                'imagereportage'        => "",
                'fiche'                 => "",
                'video'                 => NULL,
                'user_id'               => NULL,
                'product_id'            => NULL,
                'paye' 				    => 0,
                'created_at'            => $date,
                'updated_at'            => $date,
            ],
            [
                'societe'               => "Domaine Georges Chicotot",
                'aliassociete'          => "domaine-georges-chicotot",
                'adresse'               => "15, rue du Général de Gaulle, 21700 Nuits-Saint-Georges",
                'telephone'             => "+33 (0)3 80 61 19 33",
                'site'                  => "http://www.domaine-chicotot.com/",
                'email'                 => "chicotot@aol.com",
                'latlong'               => "47.134061,4.9456443",
                'sortevin'              => "rouge",
                'qualitevin'            => "Nuits-Saint-Georges 1er Cru",
                'actif'                 => 0,
                'departement'           => "Côte d'Or",
                'francevinicole'        => "France",
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
                'zoom'                  => "11",
                'latlongregion'         => "47.18,4.95",
                'reportage'             => "",
                'imagereportage'        => "",
                'fiche'                 => "",
                'video'                 => NULL,
                'user_id'               => NULL,
                'product_id'            => NULL,
                'paye' 				    => 0,
                'created_at'            => $date,
                'updated_at'            => $date,
            ],
            [
                'societe'               => "Domaine Joël Remy",
                'aliassociete'          => "domaine-joel-remy",
                'adresse'               => "4, rue du Paradis - Sainte-Marie-La-Blanche, 21200 Beaune",
                'telephone'             => "(+33) 03 80 26 60 80",
                'site'                  => "http://www.domaineremy.com/fr/",
                'email'                 => "domaine.remy@wanadoo.fr",
                'latlong'               => "46.9750502,4.8912805",
                'sortevin'              => "rouge blanc",
                'qualitevin'            => "Beaune 1er Cru",
                'actif'                 => 0,
                'departement'           => "Côte d'Or",
                'francevinicole'        => "France",
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
                'zoom'                  => "12",
                'latlongregion'         => '46.98,4.8',
                'reportage'             => "",
                'imagereportage'        => "",
                'fiche'                 => "",
                'video'                 => NULL,
                'user_id'               => NULL,
                'product_id'            => NULL,
                'paye' 				    => 0,
                'created_at'            => $date,
                'updated_at'            => $date,
            ],
            [
                'societe'               => "Domaine Philippe Girard",
                'aliassociete'          => "domaine-philippe-girard",
                'adresse'               => "37, rue Général Leclerc, 21420 Savigny-lès-Beaune",
                'telephone'             => "03 80 21 57 97",
                'site'                  => "http://www.domaine-philippe-girard.com/",
                'email'                 => "contact@domaine-philippe-girard.com",
                'latlong'               => "47.0615164,4.8196841",
                'sortevin'              => "rouge blanc",
                'qualitevin'            => "Corton Grand Cru",
                'actif'                 => 0,
                'departement'           => "Côte d'Or",
                'francevinicole'        => "France",
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
                'zoom'                  => "12",
                'latlongregion'         => "46.98,4.8",
                'reportage'             => "",
                'imagereportage'        => "",
                'fiche'                 => "",
                'video'                 => NULL,
                'user_id'               => NULL,
                'product_id'            => NULL,
                'paye' 				    => 0,
                'created_at'            => $date,
                'updated_at'            => $date,
            ],
            [
                'societe'               => "Domaine Pascal Mure",
                'aliassociete'          => "domaine-pascal-mure",
                'adresse'               => "2, Grande rue, 21190 Volnay",
                'telephone'             => "03.80.21.61.15",
                'site'                  => "https://www.domaine-mure.com/",
                'email'                 => "contact@domaine-mure.com",
                'latlong'               => "46.999192,4.7827433",
                'sortevin'              => "rouge",
                'qualitevin'            => "Volnay 1er Cru",
                'actif'                 => 0,
                'departement'           => "Côte d'Or",
                'francevinicole'        => "France",
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
                'zoom'                  => "12",
                'latlongregion'         => "46.98,4.8",
                'reportage'             => "",
                'imagereportage'        => "",
                'fiche'                 => "",
                'video'                 => NULL,
                'user_id'               => NULL,
                'product_id'            => NULL,
                'paye' 				    => 0,
                'created_at'            => $date,
                'updated_at'            => $date,
            ],
            [
                'societe'               => "Domaine Moissenet-Bonnard",
                'aliassociete'          => "domaine-moissenet-bonnard",
                'adresse'               => "4, rue des jardins, 21630 pommard",
                'telephone'             => "03 80 24 62 34",
                'site'                  => "http://www.moissenet-bonnard.com/",
                'email'                 => "jean-louis@moissenet-bonnard.com",
                'latlong'               => "47.0078165,4.7948817",
                'sortevin'              => "rouge blanc",
                'qualitevin'            => "",
                'actif'                 => 0,
                'departement'           => "Côte d'Or",
                'francevinicole'        => "France",
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
                'zoom'                  => "12",
                'latlongregion'         => "46.98,4.8",
                'reportage'             => "",
                'imagereportage'        => "",
                'fiche'                 => "",
                'video'                 => NULL,
                'user_id'               => NULL,
                'product_id'            => NULL,
                'paye' 				    => 0,
                'created_at'            => $date,
                'updated_at'            => $date,
            ],
            [
                'societe'               => "Caveau de Puligny-Montrachet",
                'aliassociete'          => "caveau-de-puligny-montrachet",
                'adresse'               => "1, rue de Poiseul, 21190 Puligny-Montrachet",
                'telephone'             => "+33 (0)3 80 21 96 78",
                'site'                  => "http://www.caveau-puligny.com/",
                'email'                 => "julien@caveaupuligny.fr",
                'latlong'               => "46.9456234,4.7500125",
                'sortevin'              => "blanc",
                'qualitevin'            => "",
                'actif'                 => 0,
                'departement'           => "Côte d'Or",
                'francevinicole'        => "France",
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
                'zoom'                  => "12",
                'latlongregion'         => "46.98,4.8",
                'reportage'             => "",
                'imagereportage'        => "",
                'fiche'                 => "",
                'video'                 => NULL,
                'user_id'               => NULL,
                'product_id'            => NULL,
                'paye' 				    => 0,
                'created_at'            => $date,
                'updated_at'            => $date,
            ],
            [
                'societe'               => "Domaine Fernand & Laurent Pillot",
                'aliassociete'          => "domaine-fernand-&-laurent-pillot",
                'adresse'               => "2, place des Noyers, 21190 Chassagne-Montrachet",
                'telephone'             => "03 80 21 99 83",
                'site'                  => "http://www.vinpillot.com/",
                'email'                 => "contact@vinpillot.com",
                'latlong'               => "46.9288366,4.7377531",
                'sortevin'              => "rouge blanc",
                'qualitevin'            => "Chassagne-Montrachet 1ers Crus",
                'actif'                 => 0,
                'departement'           => "Côte d'Or",
                'francevinicole'        => "France",
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
                'zoom'                  => "12",
                'latlongregion'         => "46.98,4.8",
                'reportage'             => "",
                'imagereportage'        => "",
                'fiche'                 => "",
                'video'                 => NULL,
                'user_id'               => NULL,
                'product_id'            => NULL,
                'paye' 				    => 0,
                'created_at'            => $date,
                'updated_at'            => $date,
            ],
            [
                'societe'               => "Domaine Michel Goubard & Fils",
                'aliassociete'          => "domaine-michel-goubard-&-fils",
                'adresse'               => "6, rue de Bassevelle, 71390 Saint-Désert",
                'telephone'             => "03 85 47 91 06",
                'site'                  => "http://www.bourgogne-goubard.com/",
                'email'                 => "",
                'latlong'               => "46.754349,4.6987113",
                'sortevin'              => "rouge blanc",
                'qualitevin'            => "Givry 1er Cru",
                'actif'                 => 0,
                'departement'           => "Saône-et-Loire",
                'francevinicole'        => "France",
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
                'zoom'                  => "10",
                'latlongregion'         => "46.6,4.4",
                'reportage'             => "",
                'imagereportage'        => "",
                'fiche'                 => "",
                'video'                 => NULL,
                'user_id'               => NULL,
                'product_id'            => NULL,
                'paye' 				    => 0,
                'created_at'            => $date,
                'updated_at'            => $date,
            ],
            [
                'societe'               => "Château Durfort-Vivens",
                'aliassociete'          => "chateau-durfort-viven",
                'adresse'               => "3, rue du General de Gaulle, 33460 Margaux",
                'telephone'             => "05 57 88 31 02",
                'site'                  => "http://www.durfort-vivens.fr/",
                'email'                 => "",
                'latlong'               => "45.0398934,-0.6770425",
                'sortevin'              => "rouge",
                'qualitevin'            => "Margaux Grand Cru classé",
                'actif'                 => 0,
                'departement'           => "Gironde",
                'francevinicole'        => "France",
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
                'zoom'                  => "11",
                'latlongregion'         => "45.04,-0.7",
                'reportage'             => "",
                'imagereportage'        => "",
                'fiche'                 => "",
                'video'                 => NULL,
                'user_id'               => NULL,
                'product_id'            => NULL,
                'paye' 				    => 1,
                'created_at'            => $date,
                'updated_at'            => $date,
            ],
            [
                'societe'               => "Château Lestage-Darquier",
                'aliassociete'          => "chateau-lestage-darquier",
                'adresse'               => "42, chemin de Giron, 33480 Moulis en Médoc",
                'telephone'             => "05 56 58 18 16",
                'site'                  => "http://www.chateaulestagedarquier.com/",
                'email'                 => "",
                'latlong'               => "45.0771254,-0.7792001",
                'sortevin'              => "rouge",
                'qualitevin'            => "",
                'actif'                 => 0,
                'departement'           => "Gironde",
                'francevinicole'        => "France",
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
                'localitevinicole'      => "Moulis-Listrac",
                'aliaslocalitevinicole' => "moulis-listrac",
                'zoom'                  => "11",
                'latlongregion'         => "45.065,-0.8",
                'reportage'             => "",
                'imagereportage'        => "",
                'fiche'                 => "",
                'video'                 => NULL,
                'user_id'               => NULL,
                'product_id'            => NULL,
                'paye' 				    => 0,
                'created_at'            => $date,
                'updated_at'            => $date,
            ],
            [
                'societe'               => "Château Latour",
                'aliassociete'          => "chateau=latour",
                'adresse'               => "27 route des Châteaux, 33250 Pauillac",
                'telephone'             => "+33 5 56 73 19 80",
                'site'                  => "http://www.chateau-latour.com",
                'latlong'               => "45.17650,-0.744925",
                'email'                 => "contact@chateau-latour.com",
                'sortevin'              => "rouge",
                'qualitevin'            => "Château Latour | Premier Grand Cru Classé à Pauillac",
                'actif'                 => 0,
                'departement'           => "Gironde",
                'francevinicole'        => "France",
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
                'zoom'                  => "11",
                'latlongregion'         => "45.2,-0.8",
                'reportage'             => "",
                'imagereportage'        => "",
                'fiche'                 => "",
                'video'                 => NULL,
                'user_id'               => NULL,
                'product_id'            => NULL,
                'paye' 				    => 0,
                'created_at'            => $date,
                'updated_at'            => $date,
            ],
            [
                'societe'               => "Château Laffitte Carcasset",
                'aliassociete'          => "chateau-laffitte-carcasset",
                'adresse'               => "Laffitte Carcasset, 33180 Saint-Estèphe",
                'telephone'             => "05 56 59 34 32",
                'site'                  => "http://www.laffittecarcasset.com/",
                'email'                 => "",
                'latlong'               => "45.2522747,-0.7827754",
                'sortevin'              => "rouge",
                'qualitevin'            => "",
                'actif'                 => 0,
                'departement'           => "Gironde",
                'francevinicole'        => "France",
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
                'zoom'                  => "11",
                'latlongregion'         => "45.25,-0.78",
                'reportage'             => "",
                'imagereportage'        => "",
                'fiche'                 => "",
                'video'                 => NULL,
                'user_id'               => NULL,
                'product_id'            => NULL,
                'paye' 				    => 0,
                'created_at'            => $date,
                'updated_at'            => $date,
            ],
            [
                'societe'               => "Château Saint-Pierre",
                'aliassociete'          => "chateau-saint-pierre",
                'adresse'               => "33 250 Saint-Julien Beychevelle",
                'telephone'             => "+33 (0)5 56 59 08 18",
                'site'                  => "http://www.domaines-henri-martin.com/fr/chateau-saint-pierre/",
                'latlong'               => "45.1488856,-0.7441523",
                'email'                 => "contact@domaines-martin.com",
                'sortevin'              => "rouge",
                'qualitevin'            => "Château Saint-Pierre 4ème Grand Cru Classé en 1855",
                'actif'                 => 0,
                'departement'           => "Gironde",
                'francevinicole'        => "France",
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
                'zoom'                  => "12",
                'latlongregion'         => "45.14,-0.75",
                'reportage'             => "",
                'imagereportage'        => "",
                'fiche'                 => "",
                'video'                 => NULL,
                'user_id'               => NULL,
                'product_id'            => NULL,
                'paye' 				    => 0,
                'created_at'            => $date,
                'updated_at'            => $date,
            ],
            [
                'societe'               => "Château Beychevelle",
                'aliassociete'          => "chateau-beychevelle",
                'adresse'               => "33250 Saint-Julien-Beychevelle",
                'telephone'             => "05 56 73 20 70",
                'site'                  => "http://beychevelle.com/",
                'email'                 => "beychevelle@beychevelle.com",
                'latlong'               => "45.14423,-0.7375767",
                'sortevin'              => "rouge",
                'qualitevin'            => "Grands crus classés",
                'actif'                 => 0,
                'departement'           => "Gironde",
                'francevinicole'        => "France",
                'region'                => "saint-julien",
                'indiceregion'          => NULL,
                'regionvinicole'        => "Bordeaux",
                'aliasregionvinicole'   => "bordeaux",
                'communevinicole'       => "Médoc",
                'aliascommunevinicole'  => "medoc",
                'localitevinicole'      => "Saint-Julien",
                'aliaslocalitevinicole' => "saint-julien",
                'zoom'                  => "12",
                'latlongregion'         => "45.14,-0.75",
                'reportage'             => "",
                'imagereportage'        => "",
                'fiche'                 => "",
                'video'                 => NULL,
                'user_id'               => NULL,
                'product_id'            => NULL,
                'paye'                  => 0,
                'created_at'            => $date,
                'updated_at'            => $date,
            ],
            [
                'societe'               => "Château Lafargue",
                'aliassociete'          => "chateau-lafargue",
                'adresse'               => "5, Impasse de Domy, 33650 Martillac",
                'telephone'             => "05 56 72 72 30",
                'site'                  => "http://www.chateau-lafargue.com/",
                'email'                 => "",
                'latlong'               => "44.7190343,-0.5534829",
                'sortevin'              => "rouge blanc",
                'qualitevin'            => "",
                'actif'                 => 0,
                'departement'           => "Gironde",
                'francevinicole'        => "France",
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
                'zoom'                  => "12",
                'latlongregion'         => "44.72,-0.55",
                'reportage'             => "",
                'imagereportage'        => "",
                'fiche'                 => "",
                'video'                 => NULL,
                'user_id'               => NULL,
                'product_id'            => NULL,
                'paye'                  => 0,
                'created_at'            => $date,
                'updated_at'            => $date,
            ],
            [
                'societe'               => "Grand Poujeaux",
                'aliassociete'          => "grand-poujeaux",
                'adresse'               => "42, chemin de Giron, 33480 Moulis en Médoc",
                'telephone'             => "+33 5 56 58 02 55",
                'site'                  => "http://chateaudutruchgrandpoujeaux.com/",
                'email'                 => "contact@chateaudutruch.com",
                'latlong'               => "45.0771301,-0.7615616",
                'sortevin'              => "rouge",
                'qualitevin'            => "",
                'actif'                 => 0,
                'departement'           => "Gironde",
                'francevinicole'        => "France",
                'region'                => "pomerol",
                'indiceregion'          => NULL,
                'regionvinicole'        => "Bordeaux",
                'aliasregionvinicole'   => "bordeaux",
                'communevinicole'       => "Pomerol",
                'aliascommunevinicole'  => "pomerol",
                'localitevinicole'      => "Pomerol",
                'aliaslocalitevinicole' => "pomerol",
                'zoom'                  => "12",
                'latlongregion'         => "45.066,-0.78",
                'reportage'             => "",
                'imagereportage'        => "",
                'fiche'                 => "",
                'video'                 => NULL,
                'user_id'               => NULL,
                'product_id'            => NULL,
                'paye'                  => 0,
                'created_at'            => $date,
                'updated_at'            => $date,
            ],
            [
                'societe'               => "Château Gros Caillou",
                'aliassociete'          => "chateau-gros-caillou",
                'adresse'               => "Saint-Sulpice de Faleyrens, 33330 Saint-Émilion",
                'telephone'             => "05 57 24 74 91",
                'site'                  => "http://www.chateau-gros-caillou.com/",
                'email'                 => "",
                'latlong'               => "44.86781,-0.1897387",
                'sortevin'              => "rouge",
                'qualitevin'            => "Saint-Émilion Grand Cru",
                'actif'                 => 0,
                'departement'           => "Gironde",
                'francevinicole'        => "France",
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
                'zoom'                  => "11",
                'latlongregion'         => "44.87,-0.19",
                'reportage'             => "",
                'imagereportage'        => "",
                'fiche'                 => "",
                'video'                 => NULL,
                'user_id'               => NULL,
                'product_id'            => NULL,
                'paye'                  => 0,
                'created_at'            => $date,
                'updated_at'            => $date,
            ],
            [
                'societe'               => "La Maison du Vigneron de Sauternes",
                'aliassociete'          => "la-maison-du-vigneron-de-sauternes",
                'adresse'               => "2, Rue Principale, 33210 Sauternes",
                'telephone'             => "+33 5 57 31 00 89",
                'site'                  => "http://www.maisonduvigneron-sauternes.fr/",
                'email'                 => "lamaisonduvigneron@orange.fr",
                'latlong'               => "44.5313371,-0.3447629",
                'sortevin'              => "blanc",
                'qualitevin'            => "",
                'actif'                 => 0,
                'departement'           => "Gironde",
                'francevinicole'        => "France",
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
                'zoom'                  => "11",
                'latlongregion'         => "44.53,-0.345",
                'reportage'             => "",
                'imagereportage'        => "",
                'fiche'                 => "",
                'video'                 => NULL,
                'user_id'               => NULL,
                'product_id'            => NULL,
                'paye'                  => 0,
                'created_at'            => $date,
                'updated_at'            => $date,
            ],
            [
                'societe'               => "Champagne Delaunois",
                'aliassociete'          => "champagne-delaunois",
                'adresse'               => "16, Rue Valmy, 51500 Rilly la Montagne",
                'telephone'             => "03 26 03 40 53",
                'site'                  => "http://www.champagne-delaunois.fr/",
                'email'                 => "",
                'latlong'               => "49.1648793,4.0485887",
                'sortevin'              => "blanc rosé",
                'qualitevin'            => "Médaille d'or 2016",
                'actif'                 => 0,
                'departement'           => "Marne",
                'francevinicole'        => "France",
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
                'zoom'                  => "10",
                'latlongregion'         => "48.9,3.8",
                'reportage'             => "",
                'imagereportage'        => "",
                'fiche'                 => "",
                'video'                 => NULL,
                'user_id'               => NULL,
                'product_id'            => NULL,
                'paye'                  => 0,
                'created_at'            => $date,
                'updated_at'            => $date,
            ],
            [
                'societe'               => "Champagne Jean Marniquet",
                'aliassociete'          => "champagne-jean-marniquet",
                'adresse'               => "6 - 12, rue Pasteur, 51160 Avenay Val d'Or",
                'telephone'             => "03 26 52 32 36",
                'site'                  => "http://www.champagne-marniquet.fr/",
                'email'                 => "",
                'latlong'               => "49.0815128,3.8366367",
                'sortevin'              => "blanc rosé",
                'qualitevin'            => "1ers Crus",
                'actif'                 => 0,
                'departement'           => "Marne",
                'francevinicole'        => "France",
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
                'zoom'                  => "10",
                'latlongregion'         => "49,3.5",
                'reportage'             => "",
                'imagereportage'        => "",
                'fiche'                 => "",
                'video'                 => NULL,
                'user_id'               => NULL,
                'product_id'            => NULL,
                'paye'                  => 0,
                'created_at'            => $date,
                'updated_at'            => $date,
            ],
            [
                'societe'               => "Grand Cru Florimont",
                'aliassociete'          => "grand-cru-florimont",
                'adresse'               => "12, avenue de la Foire-Aux-Vins, 68012 Colmar Cédex",
                'telephone'             => "(33) 03 89 20 16 20",
                'site'                  => "http://www.vinsalsace.com/fr/",
                'email'                 => "civa@civa.fr",
                'latlong'               => "48.103354,7.2945563",
                'sortevin'              => "blanc",
                'qualitevin'            => "Grands Crus",
                'actif'                 => 0,
                'departement'           => "Haut-Rhin",
                'francevinicole'        => "France",
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
                'zoom'                  => "9",
                'latlongregion'         => "48.103354,7.2945563",
                'reportage'             => "",
                'imagereportage'        => "",
                'fiche'                 => "",
                'video'                 => NULL,
                'user_id'               => NULL,
                'product_id'            => NULL,
                'paye'                  => 0,
                'created_at'            => $date,
                'updated_at'            => $date,
            ],
            [
                'societe'               => "Domaine Lebrun",
                'aliassociete'          => "domaine-lebrun",
                'adresse'               => "5, rue des Tours - Les Berthiers, 58150 Saint-Andelain",
                'telephone'             => "+33 (0) 3 86 39 02 93",
                'site'                  => "http://domainelebrun.com",
                'email'                 => "",
                'latlong'               => "47.308353,2.9476198",
                'sortevin'              => "blanc",
                'qualitevin'            => "",
                'actif'                 => 0,
                'departement'           => "Nièvre",
                'francevinicole'        => "France",
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
                'zoom'                  => "12",
                'latlongregion'         => "47.28,2.9",
                'reportage'             => "",
                'imagereportage'        => "",
                'fiche'                 => "",
                'video'                 => NULL,
                'user_id'               => NULL,
                'product_id'            => NULL,
                'paye' 				    => 0,
                'created_at'            => $date,
                'updated_at'            => $date,
            ],
            [
                'societe'               => "Domaine de Reuilly",
                'aliassociete'          => "domaine-de-reuilly",
                'adresse'               => "20, route d'Issoudun, 36260 Reuilly",
                'telephone'             => "02 54 49 35 54",
                'site'                  => "",
                'email'                 => "",
                'latlong'               => "47.0801536,2.040541",
                'sortevin'              => "blanc",
                'qualitevin'            => "",
                'actif'                 => 0,
                'departement'           => "Indre",
                'francevinicole'        => "France",
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
                'zoom'                  => "11",
                'latlongregion'         => "47.08,2.04",
                'reportage'             => "",
                'imagereportage'        => "",
                'fiche'                 => "",
                'video'                 => NULL,
                'user_id'               => NULL,
                'product_id'            => NULL,
                'paye' 				    => 0,
                'created_at'            => $date,
                'updated_at'            => $date,
            ],
            [
                'societe'               => "Domaine André Neveu",
                'aliassociete'          => "domaine-andre-neveu",
                'adresse'               => "5, rue des Tours - Chavignol, 18300 Sancerre",
                'telephone'             => "02 48 54 04 48",
                'site'                  => "https://www.andre-neveu.fr/",
                'latlong'               => "47.3379851,2.8039323",
                'email'                 => "info@andre-neveu.fr",
                'sortevin'              => "rouge blanc rosé",
                'qualitevin'            => "",
                'actif'                 => 0,
                'departement'           => "Cher",
                'francevinicole'        => "France",
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
                'zoom'                  => "13",
                'latlongregion'         => "47.338,2.8",
                'reportage'             => "",
                'imagereportage'        => "",
                'fiche'                 => "",
                'video'                 => NULL,
                'user_id'               => NULL,
                'product_id'            => NULL,
                'paye' 				    => 0,
                'created_at'            => $date,
                'updated_at'            => $date,
            ],
            [
                'societe'               => "Domaine des Ellettes",
                'aliassociete'          => "domaine-des-ellettes",
                'adresse'               => "16, chemin des Dars, 49400 Varrains",
                'telephone'             => "06 11 70 59 98",
                'site'                  => "http://www.domainedesellettes.com/",
                'email'                 => "",
                'latlong'               => "47.2235313,-0.0600406",
                'sortevin'              => "rouge rosé blanc",
                'qualitevin'            => "Saumur-Champigny Vieilles Vignes",
                'actif'                 => 0,
                'departement'           => "Maine-et-Loire",
                'francevinicole'        => "France",
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
                'zoom'                  => "12",
                'latlongregion'         => "47.224,-0.06",
                'reportage'             => "",
                'imagereportage'        => "",
                'fiche'                 => "",
                'video'                 => NULL,
                'user_id'               => NULL,
                'product_id'            => NULL,
                'paye' 				    => 0,
                'created_at'            => $date,
                'updated_at'            => $date,
            ],
            [
                'societe'               => "Domaine Horde",
                'aliassociete'          => "domaine-horde",
                'adresse'               => "14, rue du Port, 39600 Port-Lesney",
                'telephone'             => "03 84 73 89 24",
                'site'                  => "http://www.domaine-horde.com/",
                'email'                 => "yves.horde39@orange.fr",
                'latlong'               => "47.004842,5.821959",
                'sortevin'              => "rouge blanc",
                'qualitevin'            => "Vin Jaune",
                'actif'                 => 0,
                'departement'           => "Jura",
                'francevinicole'        => "France",
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
                'zoom'                  => "10",
                'latlongregion'         => "47,5.82",
                'reportage'             => "",
                'imagereportage'        => "",
                'fiche'                 => "",
                'video'                 => NULL,
                'user_id'               => NULL,
                'product_id'            => NULL,
                'paye' 				    => 0,
                'created_at'            => $date,
                'updated_at'            => $date,
            ],
            [
                'societe'               => "Terres des Templiers",
                'aliassociete'          => "terres-des-templiers",
                'adresse'               => "Route du Mas Reig, 66650 Banyuls-sur-Mer",
                'telephone'             => "04 68 98 36 70",
                'site'                  => "http://www.terresdestempliers.fr",
                'email'                 => "",
                'latlong'               => "42.477407,3.1131299",
                'sortevin'              => "rouge rosé blanc",
                'qualitevin'            => "Collioure",
                'actif'                 => 0,
                'departement'           => "Pyrénées-Orientales",
                'francevinicole'        => "France",
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
                'zoom'                  => "8",
                'latlongregion'         => "42.48,3",
                'reportage'             => "",
                'imagereportage'        => "",
                'fiche'                 => "",
                'video'                 => NULL,
                'user_id'               => NULL,
                'product_id'            => NULL,
                'paye' 				    => 0,
                'created_at'            => $date,
                'updated_at'            => $date,
            ],
            [
                'societe'               => "Domaine des Chers",
                'aliassociete'          => "domaine-des-chers",
                'adresse'               => "Les Chers, 69840 Juliénas",
                'telephone'             => "(33 4) 74 04 42 00",
                'site'                  => "https://www.domaine-des-chers.fr/",
                'email'                 => "",
                'latlong'               => "46.238945,4.714486",
                'sortevin'              => "rouge",
                'qualitevin'            => "",
                'actif'                 => 0,
                'departement'           => "Rhône",
                'francevinicole'        => "France",
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
                'zoom'                  => "9",
                'latlongregion'         => "46.2,4.7",
                'reportage'             => "",
                'imagereportage'        => "",
                'fiche'                 => "",
                'video'                 => NULL,
                'user_id'               => NULL,
                'product_id'            => NULL,
                'paye' 				    => 0,
                'created_at'            => $date,
                'updated_at'            => $date,
            ],
            [
                'societe'               => "Domaine de Muzy",
                'aliassociete'          => "domaine-de-muzy",
                'adresse'               => "3, rue de Muzy, 55160 Combres sous les Côtes",
                'telephone'             => "03 29 87 37 81",
                'site'                  => "http://www.domainedemuzy.fr/",
                'email'                 => "info@domainedemuzy.fr",
                'latlong'               => "49.0620777,5.6268779",
                'sortevin'              => "rouge rosé blanc",
                'qualitevin'            => "Mirabelle",
                'actif'                 => 0,
                'departement'           => "Meuse",
                'francevinicole'        => "France",
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
                'zoom'                  => "11",
                'latlongregion'         => "49.062,5.63",
                'reportage'             => "",
                'imagereportage'        => "",
                'fiche'                 => "",
                'video'                 => NULL,
                'user_id'               => NULL,
                'product_id'            => NULL,
                'paye' 				    => 0,
                'created_at'            => $date,
                'updated_at'            => $date,
            ],
            [
                'societe'               => "Jean-Marc Viguier",
                'aliassociete'          => "jean-marc-viguier",
                'adresse'               => "Les Buis, 12140 Entraygues-sur-Truyère",
                'telephone'             => "+3 35 65 44 50 45",
                'site'                  => "",
                'email'                 => "",
                'latlong'               => "44.643890,2.555000",
                'sortevin'              => "rouge blanc",
                'qualitevin'            => "",
                'actif'                 => 0,
                'departement'           => "Aveyron",
                'francevinicole'        => "France",
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
                'zoom'                  => "10",
                'latlongregion'         => "44.64,2.555",
                'reportage'             => "",
                'imagereportage'        => "",
                'fiche'                 => "",
                'video'                 => NULL,
                'user_id'               => NULL,
                'product_id'            => NULL,
                'paye' 				    => 0,
                'created_at'            => $date,
                'updated_at'            => $date,
            ],
            [
                'societe'               => "La Bavoisine",
                'aliassociete'          => "la-bavoisine",
                'adresse'               => "3, bis rue du Centurion, 63670 La Roche Blanche",
                'telephone'             => "04 73 79 44 42",
                'site'                  => "http://www.persilier-vins.com/",
                'latlong'               => "45.706405,3.154159",
                'email'                 => "",
                'sortevin'              => "rouge rosé blanc",
                'qualitevin'            => "",
                'actif'                 => 0,
                'departement'           => "Puy-de-Dôme",
                'francevinicole'        => "France",
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
                'zoom'                  => "9",
                'latlongregion'         => "45.70,3.16",
                'reportage'             => "",
                'imagereportage'        => "",
                'fiche'                 => "",
                'video'                 => NULL,
                'user_id'               => NULL,
                'product_id'            => NULL,
                'paye' 				    => 0,
                'created_at'            => $date,
                'updated_at'            => $date,
            ],
            [
                'societe'               => "André et Michel Quenard",
                'aliassociete'          => "andre-et-michel-quenard",
                'adresse'               => "1327, route du Coteau de Torméry, 73800 Chignin Cédex 210",
                'telephone'             => "+33 (0)4.79.28.12.75",
                'site'                  => "http://www.am-quenard.fr/",
                'email'                 => "contact@am-quenard.fr",
                'latlong'               => "45.514997,6.0172946",
                'sortevin'              => "rouge rosé blanc",
                'qualitevin'            => "",
                'actif'                 => 0,
                'departement'           => "Savoie",
                'francevinicole'        => "France",
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
                'zoom'                  => "10",
                'latlongregion'         => "45.515,6.02",
                'reportage'             => "",
                'imagereportage'        => "",
                'fiche'                 => "",
                'video'                 => NULL,
                'user_id'               => NULL,
                'product_id'            => NULL,
                'paye' 				    => 0,
                'created_at'            => $date,
                'updated_at'            => $date,
            ],
            [
                'societe'               => "Domaine Antoine Arena",
                'aliassociete'          => "domaine-antoine-arena",
                'adresse'               => "Lieu-dit Morta Majo, D81, 20253 Patrimonio",
                'telephone'             => "04 95 37 08 27",
                'site'                  => "",
                'email'                 => "",
                'latlong'               => "42.6977489,9.3516468",
                'sortevin'              => "rouge blanc",
                'qualitevin'            => "Vins biologiques de qualité",
                'actif'                 => 0,
                'departement'           => "Corse",
                'francevinicole'        => "France",
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
                'zoom'                  => "9",
                'latlongregion'         => "42.15,9.3",
                'reportage'             => "",
                'imagereportage'        => "",
                'fiche'                 => "",
                'video'                 => NULL,
                'user_id'               => NULL,
                'product_id'            => NULL,
                'paye' 				    => 0,
                'created_at'            => $date,
                'updated_at'            => $date,
            ],
            [
                'societe'               => "Domaine Ray-Jane",
                'aliassociete'          => "domaine-ray-jane",
                'adresse'               => "353, avenue du Bosquet, 83330 Le Castellet",
                'telephone'             => "04 94 98 64 08",
                'site'                  => "http://www.domaine-ray-jane.fr/",
                'email'                 => "domainerayjane@gmail.com",
                'latlong'               => "43.175262,5.7700183",
                'sortevin'              => "rouge rosé blanc",
                'qualitevin'            => "Viticulteur bio",
                'actif'                 => 0,
                'departement'           => "Var",
                'francevinicole'        => "France",
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
                'zoom'                  => "9",
                'latlongregion'         => "43.175,5.77",
                'reportage'             => "",
                'imagereportage'        => "",
                'fiche'                 => "",
                'video'                 => NULL,
                'user_id'               => NULL,
                'product_id'            => NULL,
                'paye' 				    => 0,
                'created_at'            => $date,
                'updated_at'            => $date,
            ],
            [
                'societe'               => "Domaine du Biguet",
                'aliassociete'          => "domaine-du-biguet",
                'adresse'               => "Toulaud, 07130 Saint-Peray",
                'telephone'             => "04 75 40 49 44",
                'site'                  => "http://www.domainedubiguet.fr/",
                'latlong'               => "44.9166029,4.8079548",
                'email'                 => "",
                'sortevin'              => "rouge blanc",
                'qualitevin'            => "",
                'actif'                 => 0,
                'departement'           => "Ardèche",
                'francevinicole'        => "France",
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
                'zoom'                  => "11",
                'latlongregion'         => "44.8,4.7",
                'reportage'             => "",
                'imagereportage'        => "",
                'fiche'                 => "",
                'video'                 => NULL,
                'user_id'               => NULL,
                'product_id'            => NULL,
                'paye' 				    => 0,
                'created_at'            => $date,
                'updated_at'            => $date,
            ],
            [
                'societe'               => "Château Pichon Longueville Comtesse de Lalande",
                'aliassociete'          => "chateau-pichon-longueville-comtesse-de-lalande",
                'adresse'               => "Saint-Lambert 33250 Pauillac",
                'telephone'             => "05 56 59 19 40",
                'site'                  => "http://www.pichon-comtesse.com/",
                'latlong'               => "45.1761715,-0.7521635",
                'email'                 => "",
                'sortevin'              => "rouge",
                'qualitevin'            => "Pichon-Lalande",
                'actif'                 => 0,
                'departement'           => "Gironde",
                'francevinicole'        => "France",
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
                                            </a>',
                'regionvinicole'        => "Bordeaux",
                'aliasregionvinicole'   => "bordeaux",
                'communevinicole'       => "Médoc",
                'aliascommunevinicole'  => "medoc",
                'localitevinicole'      => "Pauillac",
                'aliaslocalitevinicole' => "pauillac",
                'zoom'                  => "10",
                'latlongregion'         => "45.2,-0.8",
                'reportage'             => "",
                'imagereportage'        => "",
                'fiche'                 => "",
                'video'                 => NULL,
                'user_id'               => NULL,
                'product_id'            => NULL,
                'paye' 				    => 0,
                'created_at'            => $date,
                'updated_at'            => $date,
            ],
        ]);
    }
}
