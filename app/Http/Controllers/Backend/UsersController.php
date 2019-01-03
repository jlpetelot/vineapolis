<?php

namespace App\Http\Controllers\Backend;

use App\Line;
use Modepasse;
use App\Paiement;
use App\Panier;
use App\Pedef;
use App\Product;
use App\User;
use App\Facture;
use App\Annonceur;
use App\Pub;
use App\Vigneron;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Hash;
use barryvdh\dompdf;
use Illuminate\Support\Facades\Mail;
use App\Message;

use Barryvdh\DomPDF\Facade as PDF;


class UsersController extends BackendController
{

    // Le nombre d'utilisateurs par page
    protected $limit = 10;

    // Le chemin vers le téléversement du visuel du profil
    protected $uploadPath;

    // Le chemin de l'image profil
    protected $chemin;

    /**
     * Méthode __construct () pour le chemin du visuel du profil
     *
     * @return void
     **/
    public function __construct ()
    {
        // permet de garder le middleware $this->middleware('auth') et donc la session de l'auth
        parent::__construct();
        $this->uploadPath = public_path(config('cms.image.directory2'));
        $this->chemin = "backend/img/avatar/";
    }

    /**
     * Méthode utilisateurs () pour ramener tous les utilisateurs
     *
     * @param
     * @return view('admin.users.index', compact('users'));
    **/
    public function utilisateurs ()
    {
        $users = User::orderBy('id')->paginate($this->limit);
        $compteUsers = User::count();

        return view('admin.users.index', compact('users', 'compteUsers'));
    }

    /**
     * Méthode create () pour créer un nouveau utilisateur
     * On injecte le modèle user en paramètre
     *
     * @param User $user
     * @return view('admin.vignerons.create', compact('vigneron')
     **/
    public function create(User $user)
    {
        return view('admin.users.create', compact('user'));
    }

    /**
     * Méthode store () pour enregistrer les users dans la BDD
     * On a créé un request UserRequest
     * pour gérer la validation et ajouté use App\Http\Requests; pour le fonctionnement
     * et passer Requests\VigneronRequest $request en paramètre plutôt que Request $request normalement
     *
     * @param Requests\VigneronRequest $request
     * @return redirect('admin');
     **/
    public function store(Requests\UserRequest $request)
    {
        // dd($request->created_at);

        $data = [
            'name'              => $request->name,
            'email'             => $request->email,
            'role'              => $request->role ? $request->role : 'internaute',
            'imageprofil'       => "avatar-neutre.jpg",
            'password'          => Hash::make($request->password),
            'created_at'        => Carbon::now()
        ];

        User::create($data);

        return redirect(route('admin.utilisateurs'))
            ->with('message', "L'administrateur ". $data['name'] . " a bien été créé");
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit ($id)
    {
        // On récupère l'utilisateur loggé
        $user = User::findorFail($id);

        if ($user->id === 1) abort(401);

         return view('admin.users.edit', compact('user'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update (Requests\UserUpadateRequest $request, $id)
    {
        // On récupère le loggué
        $user = User::findorFail($id);

        // On vérifie que l'ancien mot de passe est bon
        if ($request->old_password)
        {
            if (!Hash::check($request->old_password, $user->password))
            {
                return redirect()->back()->with('error-message', "Votre ancien mot de passe est invalide !");
            }
        }
        // S'il est bon, on passe les données
        $data = [
            'name'              => $request->name,
            'email'             => $request->email,
            'password'          => $request->new_password ? Hash::make($request->new_password) : $user->password,
            'qualite'           => $request->qualite,
            'role'              => $request->role,
            'imageprofil'       => "avatar-neutre.jpg",
            'created_at'        => $user->created_at,
            'updated_at'        => $request->updated_at ? $request->updated_at : Carbon::now(),
        ];

        // dd($data);

        $user->update($data);

        return redirect(route('admin.utilisateurs'))->with('message', "{$user->name} a bien été mis à jour !");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);

        if ($user->id === config('cms.default_user_id'))
        return redirect(route('admin.utilisateurs'))
        ->with('error-message', "L'administrateur pat défaut {$user->name} ne peut pas être supprimé !");

        else
        {
            $user->delete();

            return redirect(route('admin.utilisateurs'))->with('message', "{$user->name} a bien été supprimé !");
        }
    }

     /**
     * Méthode motdepasse () pour sauvegarder certians mots de passe en clair
     *
     * @return view('admin.users.profil', compact('user'));
     **/
    public function motdepasse ()
    {
        $users = User::orderBy('id')->paginate($this->limit);
        $compteUsers = User::count();

        return view('admin.users.motdepasse', compact('users', 'compteUsers'));

        // return view('admin.users.profil', compact('user', 'chemin'));
    }

    /**
     * Méthode profil () pour afficher la vue du profil
     *
     * @param $id
     * @return view('admin.users.profil', compact('user'));
     **/
    public function profil ($id)
    {
        // On récupère le loguué
        $user = User::findOrFail($id);

        // On passe la variable privée protected $uploadPath dans une variable $image
        $chemin = $this->chemin;

        return view('admin.users.profil', compact('user', 'chemin'));
    }


    /**
     * Méthode updateprofil () pour mettre à jour les profils
     *
     * @param Requests\UserUpdatProfilRequest $request, $id
     * return redirect(route('admin.vignerons.option', compact('vigneron')))->with('message', "Votre fiche ". $data['societe'] . " a bien été mise à jour")
     **/
    public function updateprofil (Requests\UserUpdatProfilRequest $request, $id)
    {
        $user = User::findOrFail($id);

        // On vérifie que l'ancien mot de passe est bon
        if ($request->old_password)
        {
            if (!Hash::check($request->old_password, $user->password))
            {
                return redirect()->back()->with('error-message', "Votre ancien mot de passe est invalide !");
            }
        }
        // S'il est bon, on passe les données
        $data = [
            'name'              => $user->name,
            'email'             => $user->email,
            'password'          => $request->new_password ? Hash::make($request->new_password) : $user->password,
            'role'              => $user->role,
            'created_at'        => $user->created_at,
            'updated_at'        => Carbon::now(),
        ];

        // dd($data['role']);
        $user->update($data);

        return redirect()->back()->with('message', "Votre mot de passe a bien été mis à jour !");

    }

    public function updateprofilimage (Requests\UserUpdateProfilImageRequest $request, $id)
    {
        $user = User::findOrFail($id);

        if ($request->avatarhomme == 1)
        {
            $request->imageprofil = "avatar-homme.jpg";
        }

        if ($request->avatarfemme == 1)
        {
            $request->imageprofil = "avatar-femme.jpg";;
        }

        if ($request->hasFile('imageprofil'))
        {
            $width = 215;
            $height = 215;

            $image = $request->file('imageprofil');
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

            $request->imageprofil = $fileName;
        }

        $data = [
            'name'              => $user->name,
            'email'             => $user->email,
            'password'          => $user->password,
            'role'              => $user->role,
            'imageprofil'       => $request->imageprofil,
            'created_at'        => $user->created_at,
            'updated_at'        => Carbon::now(),
        ];

        $user->update($data);
        return redirect()->back()->with('message-profil', "Votre avatar a bien été mis à jour !!");

    }

    /**
    	* Méthode statistiques () pour afficher les statistiques
    	*
    	* @param
    	* @return
    **/
    public function statistiques ($id)
    {
        $user = User::findOrFail($id);

        return view('admin.users.statistiques', compact('user'));
    }

    /**
     * Méthode achats () pour afficher les achats du vigneron
     *
     * @param $id
     * return view('admin.users.achats', compact('user','lines'))
     **/
    public function achats ($id)
    {
        // On récupère le loggué
        $user = User::findOrFail($id);

        // On récupère tous les achats du vigneron
        $lines = Line::where('user_id', $user->id)->orderBy('id', 'desc')->get();

        // On doit faire ça pour déterminer la condition d'affichage de la vue d'achats ou non
        $line = Line::orderBy('id', 'desc')->first();
        // Si il y a des achats, on retourne la vue achats
        if($line) return view('admin.users.achats', compact('user', 'lines'));
        // Si il n'y a aucun achat, on retourne la vue sans achats
        else return view('admin.users.pasdachats', compact('user'));
    }


    /**
     * Méthode achatsannonceur () pour afficher les achats de l'annonceur
     *
     * @param $id
     * return view('admin.users.achatsannonceur', compact('user','lines'))
     **/
    public function achatsannonceur ($id)
    {
        // On récupère le loggué
        $user = User::findOrFail($id);

        // On récupère toutes les factures du loggué
        $factures = Facture::orderBy('id', 'desc')->get();

        // On doit faire ça pour déterminer la condition d'affichage de la vue d'achats ou non
        $line = Line::orderBy('id', 'desc')->first();
        // Si il y a des achats, on retourne la vue achats
        if($line) return view('admin.users.achatsannonceur', compact('user', 'factures'));
        // Si il n'y a aucun achat, on retourne la vue sans achats
        else return view('admin.users.pasdachats', compact('user'));
    }

    /**
    	* Méthode detailsachat () pour afficher le détai d'un achat pour le vigneron
    	*
    	* @param $i (ici l'id correspond à l'id du panier)
    	* @return
    **/
    public function detailsachat ($id)
    {
        // On met diffForHumans() en locale avec la classe 
        \Carbon\Carbon::setLocale('fr');

        // On récupère la ligne
        $achat = Line::findOrFail($id);

        // On récupère l'id du user en fonction de l'id du panier
        $utilisateur = Line::where('id', $achat->id)->first();

        // On l'applique au vigneron
        $vigneron = Vigneron::where('user_id', $utilisateur->user_id)->first();

        // On récupère l'id de la transaction
        $pourlirejson = Paiement::where('panier_id', $achat->panier_id)->first();
        $lire = json_decode($pourlirejson->data);
        $charge = $lire->id;

        return view('admin.users.detailsachat', compact('vigneron','achat', 'charge'));
    }

    /**
    	* Méthode detailsachat () pour afficher le détail d'un achat pour l'annonceur
    	*
    	* @param $i (ici l'id correspond à l'id du panier)
    	* @return
    **/
    public function detailsachatannonceur ($id)
    {
        // On met diffForHumans() en locale avec la classe 
        \Carbon\Carbon::setLocale('fr');

        // On récupère l'annonceur
        $annonceur = Annonceur::findOrFail($id);

        // On récupère le user
        $user = User::where('id', $annonceur->user_id)->first();
       
        // On récupère les factures
        $achats = Facture::where('user_id', $user->id)->orderBy('id', 'desc')->get();

        // On compte les achats
        $nombreachats = Facture::count();

        return view('admin.users.detailsachatannonceur', compact('achats','annonceur', 'nombreachats'));
    }

    /**
    	* Méthode editdetailachatanonceur () pour afficher le détai d'un achat annonceur pour l'administrateur
    	*
    	* @param $i (ici l'id correspond à l'id du panier)
    	* @return
    **/
    public function editdetailachatanonceur ($id)
    {
        // On récupère la facture
        $facture = Facture::findorFail($id);

        // On met diffForHumans() en locale avec la classe 
        \Carbon\Carbon::setLocale('fr');

        // On récupère le user
        $user = User::where('id', $facture->user_id)->first();

        // On l'applique à l'annonceur
        $annonceur = Annonceur::where('user_id', $user->id)->first();

        return view('admin.annonceurs.editdetailachatanonceur', compact('annonceur', 'facture'));
    }

    /**
    	* Méthode udateachatannonceur () pour prolonger d'1 an la durée d'une annonce et mettre à jour les tables concernées
    	*
    	* @param $i (ici l'id correspond à l'id du panier)
    	* @return
    **/
    public function updateachatannonceur (Request $request, $id)
    {
        // On met diffForHumans() en locale avec la classe 
        \Carbon\Carbon::setLocale('fr');

        // On récupère la ligne d'achat concernée
        // $line = Line::findOrfail($id);
        $facture = Facture::findOrfail($id);

        // On créé un nouveau panier
        $panier = Panier::create([
            'user_id'       => $facture->user_id,
            'total'         => number_format($facture->totalTTC, 2, '.', ''),
            'created_at'    => $facture->updated_at,
            'updated_at'    => $facture->updated_at->addYears(1)
        ]);

        // On récupère le dernier panier
        $panier = Panier::orderBy('id', 'desc')->first();

        // On créé un nouveau paiement
        $paiement = Paiement::create([
            'panier_id'     => $panier->id,
            'data'          => json_encode("Administration"),
            'type'          => "Administration",
            'created_at'    => $facture->updated_at,
            'updated_at'    => $facture->updated_at->addYears(1)
        ]);
        
        // On récupère le produit
        $product = Product::where('name', $facture->produit)->first();

        // On créé une nouvelle ligne
        $line = Line::create([
            'product_id'    => $product->id,
            'panier_id'     => $panier->id,
            'user_id'       => $facture->user_id,
            'prix'          => $facture->prixHT,
            'qte'           => 1,
            'type'          => "Administration",
            'created_at'    => $facture->updated_at,
            'updated_at'    => $facture->updated_at->addYears(1)
        ]);

        // On créé une nouvelle facture
        $facture = Facture::create([
            'name'              => $facture->name,
            'adresse'           => !empty($facture->adresse) ? $facture->adresse : NULL,
            'email'             => $facture->email,
            'telephone'         => !empty($facture->telephone) ? $facture->telephone : NULL,
            'identiteunique'    => "admin_".uniqid(),
            'produit'           => $facture->produit,
            'qte'               => 1,
            'duree'             => 1,
            'type'              => "Administration",
            'prixHT'            => $facture->prixHT,
            'soustotalHT'       => $facture->soustotalHT,
            'tva'               => $facture->tva,
            'totalTTC'          => $facture->totalTTC,
            'user_id'           => $facture->user_id,
            'created_at'        => Carbon::now(),
            'datefacture'       => $facture->updated_at,
            'updated_at'        => $facture->updated_at->addYears(1)
        ]);

        // On créé la nouvelle date pour le message et l'envoi du mail
        $nouvelledate = $facture->updated_at->addYears(1)->format('d-m-Y');

        /*=============== APRÈS LA TRANSACTION RÉUSSIE, ENVOI D'UN EMAIL À L'INTÉRESSÉ ==============*/
        // On créé le message pour les mails
        $message = Message::create([
            'name'          => $facture->name,
            'email'         => $facture->email,
            'sujet'         => "$facture->name, votre annonce a été prolongée d'un an.",
            'role'          => 'annonceur',
            'contenu'       => "L'annonce $facture->produit a été prolongée d'1 an jusqu'au $nouvelledate.",
            'motdepasse'    => NULL,
            'user_id'       => $facture->user_id
        ]);

        // Envoi de l'email
        Mail::to($facture->email)->send(new \App\Mail\RenouvellementAchatannonceur($message));
        /*=============== ../APRÈS LA TRANSACTION RÉUSSIE, ENVOI D'UN EMAIL À L'INTÉRESSÉ ==============*/

        // On retourne aus détails des achats de cet annonceur
        return redirect()->back()->with('message', "La durée de l'annonce a bien été prolongée d'1 an !! 
        Une nouvelle facture vient d'être éditée, celle sous vos yeux. Et un email vient d'être adressé à l'annonceur $facture->name afin de l'avertir.");
    }

    /**
    	* Méthode detailachat () pour afficher le détai d'un achat vigneron pour l'administrateur
    	*
    	* @param $i (ici l'id correspond à l'id du panier)
    	* @return
    **/
    public function detailachat ($id)
    {
        // On met diffForHumans() en locale avec la classe 
        \Carbon\Carbon::setLocale('fr');

        // On récupère le vigneron
        $vigneron = Vigneron::findOrFail($id);

        // On l'applique au user courant
        $user = User::where('id', $vigneron->user_id)->first();

        // On récupère l'id du panier
        $panier = Panier::where('user_id', $user->id)->first();

        // On récupère la ligne
        $achat = Line::where('user_id', $user->id)->first();

        // On récupère l'id de la transaction
        $pourlirejson = Paiement::where('panier_id', $panier->id)->first();
        $lire = json_decode($pourlirejson->data);
        $charge = $lire->id;

        return view('admin.vignerons.detailachat', compact('vigneron', 'charge', 'achat'));
    }

    /**
    * Méthode telechargerPDF () pour créer des PDFS 
    *
    * @param Request $request
    * @param $id
    * return view('admin.users.achats', compact('user','lines'))
    **/
    public function telechargerPDF (Request $request, $id)
    {
        // On met diffForHumans() en locale avec la classe 
        \Carbon\Carbon::setLocale('fr');

        // On récupère la facture
        $facture = Facture::findOrFail($id);

        // On récupère le user
        $user = $facture->user_id;
                
        // On stocke les données dans la table pdfs
        $data = [
            'name'              => $facture->name,
            'adresse'           => $facture->adresse,
            'telephone'         => $facture->telephone,
            'email'             => $facture->email,
            'identiteunique'    => $facture->identiteunique,
            'produit'           => $facture->produit,
            'duree'             => $facture->qte,
            'qte'               => $facture->qte,
            'type'              => $facture->type,
            'prixHT'            => $facture->prixHT,
            'soustotalHT'       => $facture->soustotalHT,
            'tva'               => $facture->tva,
            'totalTTC'          => $facture->totalTTC,
            'user_id'           => $user,
            'created_at'        => $facture->created_at,
            'datefacture'       => $facture->datefacture,
            'updated_at'        => $facture->updated_at,
        ];

        Pedef::create($data);

        // On récupère le dernier pdf
        $achat = Pedef::orderBy('id', 'desc')->first();

        // On charge la vue du PDF
        $pedef = PDF::loadView('admin.factures.pdf', compact('achat'));

        // On téléverse le PDF
        // On met diffForHumans() en locale avec la classe
        \Carbon\Carbon::setLocale('fr');
        // On récupère la date au bon format
        $date = $achat->created_at->format('d/m/Y');
        // On transforme le nom de la société en alias
        $societe = $this->enlevertouteslesmerdes($request->societe);

        // On donne ici comme nom de PFD : Facture, mom de la société, date de la facture et extension PDF
        return $pedef->download("Facture-$societe-$date.pdf");
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
    * Méthode touslespedefs () pour éditer les PDFS 
    *
    * @param Request $request
    * @param $id
    * return $pedef->download("Facture-$societe-$date.pdf");
    **/
    public function touslespedefs ($id)
    {
        return "Obtenir";
    }
}
