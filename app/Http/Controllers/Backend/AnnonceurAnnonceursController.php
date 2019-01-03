<?php
namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\User;
use App\Line;
use App\Panier;
use App\Paiement;
use App\Facture;
use App\Annonceur;
use App\Pub;
use Carbon\Carbon;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Mail;
use App\Message;
use Auth;

use Gloudemans\Shoppingcart\Facades\Cart;

class AnnonceurAnnonceursController extends BackendController
{
    // Le chemin vers le téléversement du visuel du reportage
    protected $uploadPath;

    // Le nombre d'annonceurs par page
    protected $limit = 10;

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
     * Affiche les pages de réservation du choix des annonces.
     *
     * @return view('admin.annonceurs.choixannonce')
     */
    public function choixannonce (Request $request, $id)
    {
        // On récupère l'annonceur
        $annonceur = Annonceur::findOrFail($id);

        // Le choix des régions
        if ($request->optradio == 1) return redirect()->route('admin.annonceurs.choixannonce.national', $id);
        elseif ($request->optradio == 2) return redirect()->route('admin.annonceurs.choixannonce.regional', $id);
        elseif ($request->optradio == 3) return redirect()->route('admin.annonceurs.choixannonce.local', $id);
        elseif ($request->optradio == 4) return redirect()->route('admin.annonceurs.choixannonce.communal', $id);

        // Les choix directs
        // France
        elseif ($request->region === 'france') return redirect()->route('admin.annonceurs.choixannonce.national', $id);

        // Les autres choix 
        // Alsace
        elseif ($request->region === 'alsace') return redirect()->route('admin.annonceurs.choixannonce.alsace', $id);

        // Armagnac
        elseif ($request->region === 'armagnac') return redirect()->route('admin.annonceurs.choixannonce.armagnac', $id);

        // Auvergne
        elseif ($request->region === 'auvergne') return redirect()->route('admin.annonceurs.choixannonce.auvergne', $id);

        // Beaujolais
        elseif ($request->region === 'beaujolais') return redirect()->route('admin.annonceurs.choixannonce.beaujolais', $id);

        // Bordeaux
        elseif ($request->region === 'bordeaux') return redirect()->route('admin.annonceurs.choixannonce.bordeaux', $id);
        // Médoc
        elseif ($request->region === 'medoc') return redirect()->route('admin.annonceurs.choixannonce.medoc', $id);
        // Margaux
        elseif ($request->region === 'margaux') return redirect()->route('admin.annonceurs.choixannonce.margaux', $id);
        // Moulis et Listrac
        elseif ($request->region === 'moulis-listrac') return redirect()->route('admin.annonceurs.choixannonce.moulislistrac', $id);
        // Moulis et Listrac
        elseif ($request->region === 'pauillac') return redirect()->route('admin.annonceurs.choixannonce.pauillac', $id);
        // Saint-Estèphe
        elseif ($request->region === 'saint-estephe') return redirect()->route('admin.annonceurs.choixannonce.saintestephe', $id);
        // Saint-Julien
        elseif ($request->region === 'saint-julien') return redirect()->route('admin.annonceurs.choixannonce.saintjulien', $id);
        // Pessac-Léognan
        elseif ($request->region === 'pessac-leognan') return redirect()->route('admin.annonceurs.choixannonce.pessacleognan', $id);
        // Pomerol
        elseif ($request->region === 'pomerol') return redirect()->route('admin.annonceurs.choixannonce.pomerol', $id);
        // Saint-Emilion
        elseif ($request->region === 'saint-emilion') return redirect()->route('admin.annonceurs.choixannonce.saintemilion', $id);
        // Sauternes-Barsac
        elseif ($request->region === 'sauternes-et-barsac') return redirect()->route('admin.annonceurs.choixannonce.sauternesbarsac', $id);

        // Bourgogne
        elseif ($request->region === 'bourgogne') return redirect()->route('admin.annonceurs.choixannonce.bourgogne', $id);
        // Beaune et Côtes de Beaune
        elseif ($request->region === 'beaune-et-cotes-de-beaune') return redirect()->route('admin.annonceurs.choixannonce.beauneetcotesdebeaune', $id);
        // Chablis
        elseif ($request->region === 'chablis') return redirect()->route('admin.annonceurs.choixannonce.chablis', $id);
        // Côtes de Nuits
        elseif ($request->region === 'cote-de-nuits') return redirect()->route('admin.annonceurs.choixannonce.cotesdenuits', $id);
        // Grands Crus de Chablis
        elseif ($request->region === 'grands-crus-de-chablis') return redirect()->route('admin.annonceurs.choixannonce.grandscrusdechablis', $id);
        // Chambolle-Musigny et Morey-Saint-Denis
        elseif ($request->region === 'chambolle-musigny-morey-saint-denis') return redirect()->route('admin.annonceurs.choixannonce.chambollemusignymoreysaintdenis', $id);
        // Gevrey-Chambertin
        elseif ($request->region === 'gevrey-chambertin') return redirect()->route('admin.annonceurs.choixannonce.gevreychambertin', $id);
        // Nuits-Saint-Georges
        elseif ($request->region === 'nuits-saint-georges') return redirect()->route('admin.annonceurs.choixannonce.nuitssaintgeorges', $id);
        // Vosne-Romanée
        elseif ($request->region === 'vosne-romanee') return redirect()->route('admin.annonceurs.choixannonce.vosneromanee', $id);
        // Vougeot
        elseif ($request->region === 'vougeot') return redirect()->route('admin.annonceurs.choixannonce.vougeot', $id);
        // 1ers crus et Grands Crus de Beaune
        elseif ($request->region === '1ers-crus-et-grands-crus-de-beaune') return redirect()->route('admin.annonceurs.choixannonce.1erscrusetgrandscrusdebeaune', $id);
        // Aloxe-Corton
        elseif ($request->region === 'aloxe-corton') return redirect()->route('admin.annonceurs.choixannonce.aloxecorton', $id);
        // Chassagne-Montrachet
        elseif ($request->region === 'chassagne-montrachet') return redirect()->route('admin.annonceurs.choixannonce.chassagnemontrachet', $id);
        // Vougeot
        elseif ($request->region === 'pommard') return redirect()->route('admin.annonceurs.choixannonce.pommard', $id);
        // Puligny-Montrachet
        elseif ($request->region === 'puligny-montrachet') return redirect()->route('admin.annonceurs.choixannonce.pulignymontrachet', $id);
        // Volnay
        elseif ($request->region === 'volnay') return redirect()->route('admin.annonceurs.choixannonce.volnay', $id);
        // Côte Chalonnaise et Couchoise
        elseif ($request->region === 'cote-chalonnaise-et-couchoise') return redirect()->route('admin.annonceurs.choixannonce.cotechalonnaiseetcouchoise', $id);
        // Mâcon
        elseif ($request->region === 'macon') return redirect()->route('admin.annonceurs.choixannonce.macon', $id);

        // Bugey
        elseif ($request->region === 'bugey') return redirect()->route('admin.annonceurs.choixannonce.bugey', $id);

        // Champagne
        elseif ($request->region === 'champagne') return redirect()->route('admin.annonceurs.choixannonce.champagne', $id);
        // Vallée de la Marne
        elseif ($request->region === 'vallee-de-la-marne') return redirect()->route('admin.annonceurs.choixannonce.valleedelamarne', $id);
        // Montagne de Reims et de la Côte des Blancs
        elseif ($request->region === 'montagne-de-reims-et-cote-des-blancs') return redirect()->route('admin.annonceurs.choixannonce.montagnedereimsetcotedesblancs', $id);

        // Cognac
        elseif ($request->region === 'cognac') return redirect()->route('admin.annonceurs.choixannonce.cognac', $id);

        // Corse
        elseif ($request->region === 'corse') return redirect()->route('admin.annonceurs.choixannonce.corse', $id);

        // Côtes du Rhône Méridional
        elseif ($request->region === 'cotes-du-rhone-meridional') return redirect()->route('admin.annonceurs.choixannonce.cotesdurhonemeridional', $id);
        // Saint-Peray et Cornas
        elseif ($request->region === 'saint-peray-et-cornas') return redirect()->route('admin.annonceurs.choixannonce.saintperayetcornas', $id);

        // Côtes du Rhône Septentrional
        elseif ($request->region === 'cotes-du-rhone-septentrional') return redirect()->route('admin.annonceurs.choixannonce.cotesdurhoneseptentrional', $id);

        // Jura
        elseif ($request->region === 'jura') return redirect()->route('admin.annonceurs.choixannonce.jura', $id);

        // Languedoc-Roussillon
        elseif ($request->region === 'languedoc-roussillon') return redirect()->route('admin.annonceurs.choixannonce.languedocroussillon', $id);

        // Loire
        elseif ($request->region === 'loire') return redirect()->route('admin.annonceurs.choixannonce.loire', $id);
        // Pouilly
        elseif ($request->region === 'pouilly') return redirect()->route('admin.annonceurs.choixannonce.pouilly', $id);
        // Quincy et Reuilly
        elseif ($request->region === 'quincy-et-reuilly') return redirect()->route('admin.annonceurs.choixannonce.quincyetreuilly', $id);
        // Sancerre et Menetou-Salon
        elseif ($request->region === 'sancerre-et-menetou-salon') return redirect()->route('admin.annonceurs.choixannonce.sancerreetmenetousalon', $id);
        // Saumur-Champigny
        elseif ($request->region === 'saumur-champigny') return redirect()->route('admin.annonceurs.choixannonce.saumurchampigny', $id);

        // Lorraine
        elseif ($request->region === 'lorraine') return redirect()->route('admin.annonceurs.choixannonce.lorraine', $id);

        // Provence
        elseif ($request->region === 'provence') return redirect()->route('admin.annonceurs.choixannonce.provence', $id);

        // Savoie
        elseif ($request->region === 'savoie') return redirect()->route('admin.annonceurs.choixannonce.savoie', $id);

        // Sud-Ouest
        elseif ($request->region === 'sud-ouest') return redirect()->route('admin.annonceurs.choixannonce.sudouest', $id);

        // Aveyron
        elseif ($request->region === 'aveyron') return redirect()->route('admin.annonceurs.choixannonce.aveyron', $id);

        // Le choix personnalisé
        elseif ($request->optradio == 5) return redirect()->route('admin.annonceurs.envoiemail', $id);

        // On redirige avec un message d'erreur si il n'y a pas de choix
        else return redirect()->back()->with('error', "$annonceur->societe, vous devez faire un choix.");

    }

    /**
     * Affiche la page de réservation du choix régional.
     *
     * @param Pub $pubs
     * @param $id
     * @return view('admin.annonceurs.choixannonce')
    */
    public function regional ($id)
    {
        // On récupère l'annonceur
        $annonceur = Annonceur::findOrFail($id);

        // On retourne la vue
        return view('admin.annonceurs.choixannonce.regional', compact('annonceur'));
    }

    /**
    * !!!! CETTE PAGE RENVOIT AUX CONTÔLEURS RÉGIONNAUX : BOURGOGNE, BORDEAUX, ETC. !!!!
     * Affiche la page de réservation du choix régional.
     * 
     * @param Pub $pubs
     * @param $id
     * @return view('admin.annonceurs.choixannonce')
    */
    public function regionalchoix (Requests\ChoixAnnonceurRequest $request, $id)
    {
        // On récupère l'annonceur
        $annonceur = Annonceur::findOrFail($id);

        if ($request->choix == 1) return redirect()->route('admin.annonceurs.choixannonce.bordeaux', $id);
        elseif ($request->choix == 2) return redirect()->route('admin.annonceurs.choixannonce.bourgogne', $id);
        elseif ($request->choix == 3) return redirect()->route('admin.annonceurs.choixannonce.champagne', $id);
        elseif ($request->choix == 4) return redirect()->route('admin.annonceurs.choixannonce.cotesdurhoneseptentrional', $id);
        elseif ($request->choix == 5) return redirect()->route('admin.annonceurs.choixannonce.loire', $id);
        elseif ($request->choix == 6) return redirect()->route('admin.annonceurs.choixannonce.sudouest', $id);
    }

    /**
     * Affiche la page de réservation du choix local.
     *
     * @param Pub $pubs
     * @param $id
     * @return view('admin.annonceurs.choixannonce')
    */
    public function local ($id)
    {
        // On récupère l'annonceur
        $annonceur = Annonceur::findOrFail($id);

        // On retourne la vue
        return view('admin.annonceurs.choixannonce.local', compact('annonceur'));
    }

    /**
    * !!!! CETTE PAGE RENVOIT AUX CONTÔLEURS LOCAUX : BEAUNE ET CÔTES DE BEAUNE, CHABLIS, ETC. !!!!
     * Affiche la page de réservation du choix local.
     * 
     * @param Pub $pubs
     * @param $id
     * @return view('admin.annonceurs.choixannonce')
    */
    public function localchoix (Requests\ChoixAnnonceurRequest $request, $id)
    {
       // On récupère l'annonceur
       $annonceur = Annonceur::findOrFail($id);

        if ($request->choix == 1) return redirect()->route('admin.annonceurs.choixannonce.beauneetcotesdebeaune', $id);
        elseif ($request->choix == 2) return redirect()->route('admin.annonceurs.choixannonce.chablis', $id);
        elseif ($request->choix == 3) return redirect()->route('admin.annonceurs.choixannonce.cotesdenuits', $id);
        elseif ($request->choix == 4) return redirect()->route('admin.annonceurs.choixannonce.medoc', $id);
    }

    /**
     * Affiche la page de réservation du choix communal.
     *
     * @param Pub $pubs
     * @param $id
     * @return view('admin.annonceurs.choixannonce.comunal', compact('annonceur'));
    */
    public function communal ($id)
    {
        //// On récupère l'annonceur
        $annonceur = Annonceur::findOrFail($id);

        // // On définit le chemin vers l'image admin des pubs
        // $chemin = asset('backend/img/');

        // // On récupère les pubs concernées
        // $pubs = Pub::findOrFail([313,393,409,369,209,217,225,233,241,265,273,281,289,97,121,113]);

        // On retourne la vue
        return view('admin.annonceurs.choixannonce.communal', compact('annonceur'));
    }

     /**
    * !!!! CETTE PAGE RENVOIT AUX CONTÔLEURS COMMUAUX !!!!
     * Affiche la page de réservation du choix communal.
     * 
     * @param Pub $pubs
     * @param $id
     * @return view('admin.annonceurs.choixannonce')
    */
    public function communalchoix (Requests\ChoixAnnonceurRequest $request, $id)
    {
       // On récupère l'annonceur
       $annonceur = Annonceur::findOrFail($id);

        if ($request->choix == 1) return redirect()->route('admin.annonceurs.choixannonce.alsace', $id);
        elseif ($request->choix == 2) return redirect()->route('admin.annonceurs.choixannonce.armagnac', $id);
        elseif ($request->choix == 3) return redirect()->route('admin.annonceurs.choixannonce.auvergne', $id);
        elseif ($request->choix == 4) return redirect()->route('admin.annonceurs.choixannonce.beaujolais', $id);
        elseif ($request->choix == 5) return redirect()->route('admin.annonceurs.choixannonce.margaux', $id);
        elseif ($request->choix == 6) return redirect()->route('admin.annonceurs.choixannonce.moulislistrac', $id);
        elseif ($request->choix == 7) return redirect()->route('admin.annonceurs.choixannonce.pauillac', $id);
        elseif ($request->choix == 8) return redirect()->route('admin.annonceurs.choixannonce.saintestephe', $id);
        elseif ($request->choix == 9) return redirect()->route('admin.annonceurs.choixannonce.saintjulien', $id);
        elseif ($request->choix == 10) return redirect()->route('admin.annonceurs.choixannonce.pessacleognan', $id);
        elseif ($request->choix == 11) return redirect()->route('admin.annonceurs.choixannonce.pomerol', $id);
        elseif ($request->choix == 12) return redirect()->route('admin.annonceurs.choixannonce.saintemilion', $id);
        elseif ($request->choix == 13) return redirect()->route('admin.annonceurs.choixannonce.sauternesbarsac', $id);
        elseif ($request->choix == 14) return redirect()->route('admin.annonceurs.choixannonce.grandscrusdechablis', $id);
        elseif ($request->choix == 15) return redirect()->route('admin.annonceurs.choixannonce.chambollemusignymoreysaintdenis', $id);
        elseif ($request->choix == 16) return redirect()->route('admin.annonceurs.choixannonce.gevreychambertin', $id);
        elseif ($request->choix == 17) return redirect()->route('admin.annonceurs.choixannonce.nuitssaintgeorges', $id);
        elseif ($request->choix == 18) return redirect()->route('admin.annonceurs.choixannonce.vosneromanee', $id);
        elseif ($request->choix == 19) return redirect()->route('admin.annonceurs.choixannonce.vougeot', $id);
        elseif ($request->choix == 20) return redirect()->route('admin.annonceurs.choixannonce.1erscrusetgrandscrusdebeaune', $id);
        elseif ($request->choix == 21) return redirect()->route('admin.annonceurs.choixannonce.aloxecorton', $id);
        elseif ($request->choix == 22) return redirect()->route('admin.annonceurs.choixannonce.chassagnemontrachet', $id);
        elseif ($request->choix == 23) return redirect()->route('admin.annonceurs.choixannonce.pommard', $id);
        elseif ($request->choix == 24) return redirect()->route('admin.annonceurs.choixannonce.pulignymontrachet', $id);
        elseif ($request->choix == 25) return redirect()->route('admin.annonceurs.choixannonce.volnay', $id);
        elseif ($request->choix == 26) return redirect()->route('admin.annonceurs.choixannonce.cotechalonnaiseetcouchoise', $id);
        elseif ($request->choix == 27) return redirect()->route('admin.annonceurs.choixannonce.macon', $id);
        elseif ($request->choix == 28) return redirect()->route('admin.annonceurs.choixannonce.bugey', $id);
        elseif ($request->choix == 29) return redirect()->route('admin.annonceurs.choixannonce.valleedelamarne', $id);
        elseif ($request->choix == 30) return redirect()->route('admin.annonceurs.choixannonce.montagnedereimsetcotedesblancs', $id);
        elseif ($request->choix == 31) return redirect()->route('admin.annonceurs.choixannonce.cognac', $id);
        elseif ($request->choix == 32) return redirect()->route('admin.annonceurs.choixannonce.corse', $id);
        elseif ($request->choix == 33) return redirect()->route('admin.annonceurs.choixannonce.cotesdurhonemeridional', $id);
        elseif ($request->choix == 34) return redirect()->route('admin.annonceurs.choixannonce.saintperayetcornas', $id);
        elseif ($request->choix == 35) return redirect()->route('admin.annonceurs.choixannonce.jura', $id);
        elseif ($request->choix == 36) return redirect()->route('admin.annonceurs.choixannonce.languedocroussillon', $id);
        elseif ($request->choix == 37) return redirect()->route('admin.annonceurs.choixannonce.pouilly', $id);
        elseif ($request->choix == 38) return redirect()->route('admin.annonceurs.choixannonce.quincyetreuilly', $id);
        elseif ($request->choix == 39) return redirect()->route('admin.annonceurs.choixannonce.sancerreetmenetousalon', $id);
        elseif ($request->choix == 40) return redirect()->route('admin.annonceurs.choixannonce.saumurchampigny', $id);
        elseif ($request->choix == 41) return redirect()->route('admin.annonceurs.choixannonce.lorraine', $id);
        elseif ($request->choix == 42) return redirect()->route('admin.annonceurs.choixannonce.provence', $id);
        elseif ($request->choix == 43) return redirect()->route('admin.annonceurs.choixannonce.savoie', $id);
        elseif ($request->choix == 44) return redirect()->route('admin.annonceurs.choixannonce.aveyron', $id);
       
        // On redirige avec un message d'erreur si il n'y a pas de choix
        else return redirect()->back()->with('error', "$annonceur->societe, vous devez faire un choix.");
    }

    /**
     * Store le choix.
     *
     * @param Requests\DisponibleAnnonceurRequest $request
     * @return \Illuminate\Http\Response
    */
    public function storeannonce (Request $request, $id)
    {   
        // On récupère l'annonceur
        $annonceur = Annonceur::findOrFail($id);

        // On vérifie les données
        $request->validate([
            'urlsite' => 'required',
            'annonce' => 'mimes:jpg,jpeg'
        ]);
    
        if ($request->hasFile('annonce'))
        {
            $width = '191';
            $height = '238';
            $uploadPath = 'img/';

            $image = $request->file('annonce');
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

            // On créé des données $data
            $data = [
                'annonce' => $fileName,
                'urlsite' => $request->urlsite ? $request->urlsite : $annonceur->urlsite
            ];

            // On met à jour la table annonceurs
            $annonceur->update($data);

            // On récupère la pub choisie
            $pub = Pub::where('id', $request->choixpub)->first();

            // On créé de nouvelles données $data2
            $data2 = [
                'image'         => $fileName,
                'internet'      => $request->urlsite ? $request->urlsite : $annonceur->urlsite,
                'annonceur_id'  => $annonceur->id,
                'actif'         => 0,
                'updated_at'    => Carbon::now()
            ];

            // On met à jour la table pubs
            $pub->update($data2);

            return view('admin.annonceurs.choixannonce.annoncetelechargee', compact('annonceur', 'pub'));
        }
        else
        {
            return redirect()->back()->with('error-message', "Vous n'avez pas rempli les données requises");
        }
    }

    /**
     * Ajoute au panier pour les annonceurs
     *
     * @param Requests\DisponibleAnnonceurRequest $request
     * @return redirect()->route('admin.annonceurs.panier.confirme', compact('annonceur', 'pub', 'panier'));
    */

    public function panierajouter (Request $request, $id)
    {
        // On récupère le logué
        $annonceur = Annonceur::findOrFail($id);
        
        // On récupère la pub
        $pub = Pub::where('annonceur_id', $annonceur->id)->first();

        // On définit les paramètres pour la carte :
        $id = $annonceur->id;
        $name = $annonceur->societe;
        $qty = 1;
        $price = $request->prix;
        $options = [];

        // On créé le panier
        $panier = Cart::add($id, $name, $qty, $price, $options);

        return redirect()->route('admin.annonceurs.panier.confirme', compact('annonceur', 'pub', 'panier'));
    }

    /**
    	* Méthode panierconfirme () la commande est validée, on donne les 2 moyens de paiement Stripe et Paypal
    	*
    	* @param $id
    	* @return view('admin.vignerons.vignerons.panierconfirme', compact('vigneron', 'panier', 'id'));
    **/
    public function panierconfirme ($id)
    {   
        // On récupère le logué
        $annonceur = Annonceur::findOrFail($id);

        // On récupère la pub
        $pub = Pub::where('annonceur_id', $annonceur->id)
        ->orderBy('updated_at', 'desc')
        ->first();

        // Affiche le contenu du panier
        $panier = Cart::content();

        return view('admin.annonceurs.panierconfirme', compact('annonceur', 'pub', 'panier'));
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
        $annonceur = Annonceur::findOrFail($id);

        // On récupère le panier
        $carte = Cart::content()->first();
        
        // On récupère les éléments essantiels de la carte
        $rowId = $carte->rowId;
        $qty = $request->qte;
        
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
        $annonceur = Annonceur::findOrFail($id);

        // On récupère la pub
        $pub = Pub::where('annonceur_id', $annonceur->id)
        ->orderBy('updated_at', 'desc')
        ->first();

        // On récupère l'id du produit
        $product_id = $pub->product_id;

        // On récupère le total du panier
        $carte = $request->price;
        
        // On récupère le nom du produit
        $produit = "$pub->categorie" .' '. "$pub->label". ' ' . "$pub->format";
        
        // On récupère la quantité demandée
        $panier = Cart::content()->first();
        $qte = $panier->qty;

        return view('admin.annonceurs.panierpaiement', compact('annonceur', 'carte', 'produit', 'qte', 'product_id'));
    }

    /**
     * Annule les choix et remet ajour les tables.
     *
     * @param $id
     * @return \Illuminate\Http\Response
    */
    public function annulation ($id)
    {
        // On récupère l'annonceur
        $annonceur = Annonceur::findOrFail($id);

        // On récupère la pub
        $pub = Pub::where('annonceur_id', $annonceur->id)->first();
        
        // On met à jour les données de l'annonceur
        $data = [
            'annonce'   => NULL,
            'paye'      => 0
        ];
        
        // On sauvegarde
        $annonceur->update($data);

        // On regarde quelle image de remplacement remettre dans la table pubs à la colonne image
        if ($pub->label === "en haut, 2ème à gauche") {
            $data2 = ['image' => rand(1,26).'.jpg', 'internet' => '#', 'annonceur_id' => NULL, 'actif' => 0];
        }
        elseif ($pub->label === "en haut, tout à gauche") {
            $data2 = ['image' => rand(1,26).'.jpg', 'internet' => '#', 'annonceur_id' => NULL, 'actif' => 0];
        }
        elseif ($pub->label === "au milieu, tout à gauche") {
            $data2 = ['image' => rand(1,26).'.jpg', 'internet' => '#', 'annonceur_id' => NULL, 'actif' => 0];
        }
        elseif ($pub->label === "au milieu, 2ème à gauche") {
            $data2 = ['image' => rand(1,26).'.jpg', 'internet' => '#', 'annonceur_id' => NULL, 'actif' => 0];
        }
        elseif ($pub->label === "en haut, tout à gauche") {
            $data2 = ['image' => rand(1,26).'.jpg', 'internet' => '#', 'annonceur_id' => NULL, 'actif' => 0];
        }
        elseif ($pub->label === "à gauche, le 1er au milieu") {
            $data2 = ['image' => rand(1,26).'.jpg', 'internet' => '#', 'annonceur_id' => NULL, 'actif' => 0];
        }
        elseif ($pub->label === "à gauche, le 2nd au milieu") {
            $data2 = ['image' => rand(1,26).'.jpg', 'internet' => '#', 'annonceur_id' => NULL, 'actif' => 0];
        }
        elseif ($pub->label === "en bas, tout à gauche") {
            $data2 = ['image' => rand(1,26).'.jpg', 'internet' => '#', 'annonceur_id' => NULL, 'actif' => 0];
        }
        elseif ($pub->label === "en haut, tout à droite") {
            $data2 = ['image' => rand(1,26).'.jpg', 'internet' => '#', 'annonceur_id' => NULL, 'actif' => 0];
            $pub->update($data2);
        }
        elseif ($pub->label === "à droite, le 1er au milieu") {
            $data2 = ['image' => rand(1,26).'.jpg', 'internet' => '#', 'annonceur_id' => NULL, 'actif' => 0];
        }
        elseif ($pub->label === "à droite, le 2nd au milieu") {
            $data2 = ['image' => rand(1,26).'.jpg', 'internet' => '#', 'annonceur_id' => NULL, 'actif' => 0];
        }
        elseif ($pub->label === "en bas, tout à droite") {
            $data2 = ['image' => rand(1,26).'.jpg', 'internet' => '#', 'annonceur_id' => NULL, 'actif' => 0];
        }

        elseif ($pub->label === "en haut à droite") {
            $data2 = ['image' => rand(27,38).'.jpg', 'internet' => '#', 'annonceur_id' => NULL, 'actif' => 0];
        }
        elseif ($pub->label === "au milieu à droite") {
            $data2 = ['image' => rand(27,38).'.jpg', 'internet' => '#', 'annonceur_id' => NULL, 'actif' => 0];
        }

        elseif ($pub->label === "en bas à gauche") {
            $data2 = ['image' => rand(39,45).'.jpg', 'internet' => '#', 'annonceur_id' => NULL, 'actif' => 0];
        }
        elseif ($pub->label === "en bas à droite") {
             $data2 = ['image' => rand(39,45).'.jpg', 'internet' => '#', 'annonceur_id' => NULL, 'actif' => 0];
        }

        // on sauvegarde les données
        $pub->update($data2);

        // On détruit la carte au cas où il y en aurait 1
        Cart::destroy();

        // On retourne la vue
        return view('admin.annonceurs.annule', compact('annonceur'));
    }

    /**
     * Méthode envoimail () pour afficher la vue de l'envoi d'un message à l'administration
     *
     * @param $id
     * @return view('admin.annonceurs.envoimail', compact('user'));
    **/
    public function envoimail ($id)
    {
        // On récupère le logué
        $user = User::findOrFail($id);

        return view('admin.annonceurs.envoimail', compact('user'));
    }

    /**
     * Méthode envoimessage () pour envoyer le mail à l'adminsitration
     *
     * @param $id
     * @return view('admin.annonceurs.envoimail', compact('user'));
    **/
    public function envoimessage (Requests\AnnonceursAnnonceurRequest $request, $id)
    {
        // On récupère le logué
        $user = User::findOrFail($id);

        // On met diffForHumans() en locale avec la classe 
        \Carbon\Carbon::setLocale('fr');

        // On récolte les sujets
        if ($request->sujet == 1) $sujet = "Je souhaite une offre personnalisée";
        if ($request->sujet == 2) $sujet = "Je souhaite prolonger la durée de mon annonce";
        if ($request->sujet == 3) $sujet = "Je souhaite modifier mon annonce";
        if ($request->sujet == 4) $sujet = "Je souhaite changer d'annonce";
        if ($request->sujet == 5) $sujet = "Je souhaite acheter une autre annonce";
        if ($request->sujet == 6) $sujet = "J'aimerais obtenir un remboursement";
        if ($request->sujet == 7) $sujet = "Autre sujet";

        // On créé le message pour les mails
       $message = Message::create([
            'name'          => $user->name,
            'email'         => $user->email,
            'sujet'         => $sujet,
            'role'          => 'annonceur',
            'contenu'       => $request->contenu,
            'created_at'    => Carbon::now()
        ]);

     // Envoi des emails à l'administration du site et à l'annonceur
     Mail::to(env('TO_MAIL'))->send(new \App\Mail\MailAnnonceurAdmin($message));
     Mail::to($user->email)->send(new \App\Mail\MailAnnonceurAdmin($message));

        return redirect()->back()->with('message', "$user->name, votre email nous est parvenu avec succès. Nous y répondrons sous 48 heures.");
    }

    /**
    	* Méthode detailsachat () pour afficher le détai d'un achat pour l'annonceur
    	*
    	* @param $i (ici l'id correspond à l'id du panier)
    	* @return
    **/
    public function detailsachatannonceur ($id)
    {
        // On met diffForHumans() en locale avec la classe 
        \Carbon\Carbon::setLocale('fr');

        // On récupère la facture
        $facture = Facture::findOrFail($id);

        // On récupère le user en fonction de cette facture
        $user = User::where('id', $facture->user_id)->first();

        // On récupère la ligne
        $line = Line::where('user_id', $user->id)->first();

        // On récupère l'annonceur
        $annonceur = Annonceur::where('user_id', $user->id)->first();

        // On récupère l'id de la transaction
        $pourlirejson = Paiement::where('panier_id', $line->panier_id)->first();
        $lire = json_decode($pourlirejson->data);
        $charge = $lire->id;

        return view('admin.annonceurs.detailsachatannonceur', compact('user','facture', 'charge', 'annonceur'));
    }

     /**
    	* Méthode messageannonceur () pour afficher la vue du formulaire d'envoi de mail des annonceurs présents dans la liste
    	*
    	* @param $id
    	* @return
    **/
    public function messageannonceur ($id)
    {
        // On récupère l'id du annonceur
        $annonceur = Annonceur::findorFail($id);

        // On affiche le formulaire d'envoi du mail
        return view('admin.annonceurs.messageannonceur', compact('annonceur'));
    }

     /**
    	* Méthode postmessageannonceur () pour envoyer le mail de l'annonceur
    	*
    	* @param
    	* @return
    **/
    public function postmessageannonceur (Requests\MessageAnnonceurRequest $request, $id)
    {
        // On récupère l'id du annonceur
        $annonceur = Annonceur::findorFail($id);

        $data = [
            'societe'   => $annonceur->societe,
            'email'     => $annonceur->email,
            'sujet'     => $request->sujet,
            'contenu'   => $request->contenu
        ];

        // On construit le message du mail à envoyer
        $message = Message::create([
            'name'          => $annonceur->societe,
            'email'         => $annonceur->email,
            'sujet'         => $request->sujet,
            'role'          => 'annonceur',
            'contenu'       => $request->contenu
        ]);

        // Envoi des emails à l'administration du site et au annonceur
        Mail::to($annonceur->email)->send(new \App\Mail\EnvoiMessageAnnonceur($message));

        return redirect()
            ->back()
            ->with('success', Auth::user()->name.", l'email adressé à " .$annonceur->societe. " lui est parvenu avec succès !");
    }



}
