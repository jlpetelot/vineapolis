<?php

namespace App\Http\Controllers\Backend;

use App\Message;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\User;
use App\Panier;
use App\Line;
use App\Paiement;
use App\Product;
use App\Annonceur;
use App\Facture;
use App\Pub;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Carbon\Carbon;
use Illuminate\Support\Facades\Crypt;
use Auth;

class AnnonceursController extends BackendController
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

    public function index()
    {
        // Carbon::setLocale('fr');
        // On ramène les annonceurs
        $annonceurs = Annonceur::latest()
            ->filter(request('term'))
            ->paginate($this->limit);
        
        // On compte les annonceurs
        $compteannonceurs = Annonceur::count();

        return view('admin.annonceurs.index', compact('annonceurs', 'compteannonceurs'));
    }

     /**
     * Méthode create () pour créer un nouvel annonceur
     * On injecte le modèle Annonceur en paramètres
     *
     * @param Annonceur $annonceur
     * @return view('admin.annonceurs.create', compact('annonceur'));
     **/
    public function create (Annonceur $annonceur)
    {        
        // On récupère l'id du logué pour empêcher les petits malins d'utiliser l'admin administrateur
        if (Auth::user()->role == "administrateur") return view('admin.annonceurs.create', compact('annonceur'));
        else return abort('401');

    }

    /**
     * Méthode store () pour enregistrer les annonceurs, les pubs dans la BDD et créer un identifiant unique
     *
     * @param Requests\AnnonceurRequest
     * @return redirect('admin');
     **/
    public function store (Requests\AnnonceurCreateRequest $request)
    {
        // On met diffForHumans() en locale avec la classe 
        \Carbon\Carbon::setLocale('fr');

        // On vérifie que l'admin n'a pas sélectionné un séparateur
        if ($request->pub == "separateur1") return redirect()->back()->with('error', "$request->pub n'est pas un choix d'annonce mais un séparateur ! Choisissez un visuel d'annonce !!");
        elseif ($request->pub == "separateur2") return redirect()->back()->with('error', "$request->pub n'est pas un choix d'annonce mais un séparateur ! Choisissez un visuel d'annonce !!");
        elseif ($request->pub == "separateur3") return redirect()->back()->with('error', "$request->pub n'est pas un choix d'annonce mais un séparateur ! Choisissez un visuel d'annonce !!");
        elseif ($request->pub == "separateur4") return redirect()->back()->with('error', "$request->pub n'est pas un choix d'annonce mais un séparateur ! Choisissez un visuel d'annonce !!");
        elseif ($request->pub == "separateur5") return redirect()->back()->with('error', "$request->pub n'est pas un choix d'annonce mais un séparateur ! Choisissez un visuel d'annonce !!");
        elseif ($request->pub == "separateur6") return redirect()->back()->with('error', "$request->pub n'est pas un choix d'annonce mais un séparateur ! Choisissez un visuel d'annonce !!");
        elseif ($request->pub == "separateur7") return redirect()->back()->with('error', "$request->pub n'est pas un choix d'annonce mais un séparateur ! Choisissez un visuel d'annonce !!");
        elseif ($request->pub == "separateur8") return redirect()->back()->with('error', "$request->pub n'est pas un choix d'annonce mais un séparateur ! Choisissez un visuel d'annonce !!");
        elseif ($request->pub == "separateur9") return redirect()->back()->with('error', "$request->pub n'est pas un choix d'annonce mais un séparateur ! Choisissez un visuel d'annonce !!");
        elseif ($request->pub == "separateur10") return redirect()->back()->with('error', "$request->pub n'est pas un choix d'annonce mais un séparateur ! Choisissez un visuel d'annonce !!");
        elseif ($request->pub == "separateur11") return redirect()->back()->with('error', "$request->pub n'est pas un choix d'annonce mais un séparateur ! Choisissez un visuel d'annonce !!");
        elseif ($request->pub == "separateur12") return redirect()->back()->with('error', "$request->pub n'est pas un choix d'annonce mais un séparateur ! Choisissez un visuel d'annonce !!");
        elseif ($request->pub == "separateur13") return redirect()->back()->with('error', "$request->pub n'est pas un choix d'annonce mais un séparateur ! Choisissez un visuel d'annonce !!");
        elseif ($request->pub == "separateur14") return redirect()->back()->with('error', "$request->pub n'est pas un choix d'annonce mais un séparateur ! Choisissez un visuel d'annonce !!");
        elseif ($request->pub == "separateur15") return redirect()->back()->with('error', "$request->pub n'est pas un choix d'annonce mais un séparateur ! Choisissez un visuel d'annonce !!");
        elseif ($request->pub == "separateur16") return redirect()->back()->with('error', "$request->pub n'est pas un choix d'annonce mais un séparateur ! Choisissez un visuel d'annonce !!");
        elseif ($request->pub == "separateur17") return redirect()->back()->with('error', "$request->pub n'est pas un choix d'annonce mais un séparateur ! Choisissez un visuel d'annonce !!");
        elseif ($request->pub == "separateur18") return redirect()->back()->with('error', "$request->pub n'est pas un choix d'annonce mais un séparateur ! Choisissez un visuel d'annonce !!");
        elseif ($request->pub == "separateur19") return redirect()->back()->with('error', "$request->pub n'est pas un choix d'annonce mais un séparateur ! Choisissez un visuel d'annonce !!");
        elseif ($request->pub == "separateur20") return redirect()->back()->with('error', "$request->pub n'est pas un choix d'annonce mais un séparateur ! Choisissez un visuel d'annonce !!");
        elseif ($request->pub == "separateur21") return redirect()->back()->with('error', "$request->pub n'est pas un choix d'annonce mais un séparateur ! Choisissez un visuel d'annonce !!");
        elseif ($request->pub == "separateur22") return redirect()->back()->with('error', "$request->pub n'est pas un choix d'annonce mais un séparateur ! Choisissez un visuel d'annonce !!");

        // Si le champ pub est sélectionnée, mais que l'image n'est pas chargée, on renvoit à une erreur
        if ($request->pub != '') 
        {
            $validatedData = $request->validate([
                'image' => 'required'
            ]);
            
            // On vérifie également que le champ est disponible
            $annonce = Pub::where('product_id', $request->pub)->first();
            // Si elle est prise, on soulève une erreur
            if ($annonce->actif === 1)
            {
                $produit = Product::where('id', $annonce->product_id)->first();
                return redirect()->back()->with('error', "L'annonce $produit->name est indisponible ! Choisissez en une autre, svp.");
            }
        }

        // Si l'administrateur a posté une image
        if ($request->hasFile('image'))
        {
            $width = '200';
            $height = '200';

            $image = $request->file('image');
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

            // On créé un nouveau user dans la BDD
            User::create([
                'name'          => $request->societe,
                'email'         => $request->email,
                'role'          => "annonceur",
                'imageprofil'   => "avatar-neutre.jpg",
                'password'      => Hash::make('secret')
            ]);

            // On récupère le dernier user inscrit
            $user = User::orderBy('id', 'desc')->first();

            // On créé un nouvel annonceur
            $annonceur = Annonceur::create([
                'societe'       => $request->societe,
                'email'         => $request->email,
                'adresse'       => $request->adresse,
                'telephone'     => $request->telephone,
                'urlsite'       => $request->urlsite,
                'annonce'       => $fileName,
                'paye'          => 1,
                'actif'         => 1,
                'user_id'       => $user->id,
                'created_at'    => !empty($request->created_at) ? $request->created_at : Carbon::now(),
                'updated_at'    => Carbon::now()
            ]);

            // On récupère la pub concernée
            $pub = Pub::where('product_id', $request->pub)->first();

            // On créé les données de la pub pour la mettre à jour
            $data = [
                'image'         => $fileName,
                'internet'      => !empty($annonceur->urlsite) ? $annonceur->urlsite : NULL,
                'annonceur_id'  => $annonceur->id,
                'actif'         => 1
            ];
            // On enregistre les données
            $pub->update($data);

            // On créé le nouveau panier
            $panier = new Panier;
            $panier->user_id = $annonceur->user_id;
            $panier->total = number_format($pub->prix * 1.2, 2, '.', '');
            $panier->created_at = Carbon::now();
            $panier->updated_at = Carbon::now();
            // On enregistre les données
            $panier->save();

             // On récupère le dernier panier inséré
            $panier = Panier::orderBy('id', 'desc')->first();

            // On créé un nouveau paiement pour un an
            $paiement = new Paiement;
            $paiement->panier_id = $panier->id;
            $paiement->data = json_encode("Administration");
            $paiement->type = "Administration";
            $paiement->created_at = Carbon::now();
            $paiement->updated_at = Carbon::now()->addYears(1);
            // On enregistre les données
            $paiement->save();

            // On créé une nouvelle ligne pour la table lines
            $line = new Line;
            $line->product_id = $pub->product_id;
            $line->panier_id = $panier->id;
            $line->user_id = $annonceur->user_id;
            $line->prix = number_format($pub->prix, 2, '.', '');
            $line->qte = 1;
            $line->type = "Administration";
            $line->created_at = Carbon::now();
            $line->updated_at = Carbon::now()->addYears(1);
            // On enregistre les données
            $line->save();

            // On récupère le produit par la table Product pour créer une nouvelle facture
            $produit = Product::where('id', $request->pub)->first();

            // On créé une nouvelle facture pour la table factures
            $facture = new Facture;
            $facture->name = $annonceur->societe;
            $facture->adresse = $request->adresse;
            $facture->telephone = $request->telephone;
            $facture->email = $annonceur->email;
            $facture->identiteunique = "admin_".uniqid();
            $facture->produit = $produit->name;
            $facture->datefacture = Carbon::now();
            $facture->qte = 1;
            $facture->duree = 1;
            $facture->type = "Administration";
            $facture->prixHT = number_format($pub->prix, 2, '.', '');
            $facture->soustotalHT = number_format($pub->prix, 2, '.', '');
            $facture->tva = number_format($pub->prix * 0.2, 2, '.', '');
            $facture->totalTTC = number_format($pub->prix * 1.2, 2, '.', '');
            $facture->user_id = $annonceur->user_id;
            $facture->created_at = Carbon::now();
            $facture->updated_at = Carbon::now()->addYears(1);
            // On enregistre les données
            $facture->save();

            // On créé le message pour envoyer les mails
            $message = Message::create([
                'name'          => $annonceur->societe,
                'email'         => $annonceur->email,
                'sujet'         => "Création d'un nouvel annonceur : $annonceur->societe.",
                'role'          => 'annonceur',
                'contenu'       => "Bienvenue chez Vineapolis. Votre annonce $produit->name a été créée pour un an à partir de ce jour. 
                                    Plus de détails sur votre interface d'administration. Votre login est : « $annonceur->email »
                                    Et votre mot de passe en clair est : « secret »
                                    Nous vous conseillons de le modifiier dès votre arrivée sur l'administration.",
                'user_id'       =>  $user->id,
                'created_at'    => Carbon::now()
            ]);

            // Envoi des emails à l'administration du site et à l'annonceur
            Mail::to(env('TO_MAIL'))->send(new \App\Mail\CreationAnnonceur($message));
            Mail::to($annonceur->email)->send(new \App\Mail\CreationAnnonceur($message));

            // On retourne à la vue
            return redirect(route('admin.annonceurs'))->with('message', "L'annonceur $annonceur->societe ainsi que l'annonce associée ont bien été créées !");
        }

        else 
        {
            // On créé un nouveau user dans la BDD
            User::create([
                'name'          => $request->societe,
                'email'         => $request->email,
                'role'          => "annonceur",
                'imageprofil'   => "avatar-neutre.jpg",
                'password'      => Hash::make('secret')
            ]);

            // On récupère le dernier user inscrit
            $user = User::orderBy('id', 'desc')->first();

            // On créé un nouvel annonceur
            $annonceur = Annonceur::create([
                'societe'       => $request->societe,
                'email'         => $request->email,
                'adresse'       => $request->adresse,
                'telephone'     => $request->telephone,
                'urlsite'       => $request->urlsite,
                'actif'         => 1,
                'user_id'       => $user->id,
                'created_at'    => !empty($request->created_at) ? $request->created_at : Carbon::now(),
                'updated_at'    => Carbon::now()
            ]);

            // On créé le message pour envoyer les mails
            $message = Message::create([
                'name'          => $annonceur->societe,
                'email'         => $annonceur->email,
                'sujet'         => "Création d'un nouvel annonceur : $annonceur->societe.",
                'role'          => 'annonceur',
                'contenu'       => "Bienvenue chez Vineapolis. Votre login est : « $annonceur->email »
                                    Et votre mot de passe en clair est : « secret »
                                    Nous vous conseillons de le modifiier dès votre arrivée sur l'administration.",
                'user_id'       =>  $user->id,
                'created_at'    => Carbon::now()
            ]);

            // Envoi des emails à l'administration du site et à l'annonceur
            Mail::to(env('TO_MAIL'))->send(new \App\Mail\CreationAnnonceur($message));
            Mail::to($annonceur->email)->send(new \App\Mail\CreationAnnonceur($message));

            // On retourne à la vue
            return redirect(route('admin.annonceurs'))->with('message', "L'annonceur $annonceur->societe a bien été créée !");
        }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return view('admin.annonceurs.edit', compact('id','annonceur'));
    */
    public function edit (Annonceur $annonceur, $id)
    {
        // On récupère l'annnonceur 
        $annonceur = Annonceur::where('id', $id)->first();

        // On retourne la vue
        return view('admin.annonceurs.edit', compact('annonceur'));
    }

    /**
     * Méthode update () pour mettre à jour un annonceur
     *
     * @param Requests\AnnonceurupdateRequest $request
     * @param $id
     * @return redirect(route('admin.all'))->with('message', "Le vigneron ". $data['societe'] . " a bien été mis à jour");
     **/
    public function update (Request $request, $id)
    {
        // On met diffForHumans() en locale avec la classe 
        \Carbon\Carbon::setLocale('fr');

        // On vérifie que l'admin n'a pas sélectionné un séparateur
        if ($request->pub == "separateur1") return redirect()->back()->with('error', "$request->pub n'est pas un choix d'annonce mais un séparateur ! Choisissez un visuel d'annonce !!");
        elseif ($request->pub == "separateur2") return redirect()->back()->with('error', "$request->pub n'est pas un choix d'annonce mais un séparateur ! Choisissez un visuel d'annonce !!");
        elseif ($request->pub == "separateur3") return redirect()->back()->with('error', "$request->pub n'est pas un choix d'annonce mais un séparateur ! Choisissez un visuel d'annonce !!");
        elseif ($request->pub == "separateur4") return redirect()->back()->with('error', "$request->pub n'est pas un choix d'annonce mais un séparateur ! Choisissez un visuel d'annonce !!");
        elseif ($request->pub == "separateur5") return redirect()->back()->with('error', "$request->pub n'est pas un choix d'annonce mais un séparateur ! Choisissez un visuel d'annonce !!");
        elseif ($request->pub == "separateur6") return redirect()->back()->with('error', "$request->pub n'est pas un choix d'annonce mais un séparateur ! Choisissez un visuel d'annonce !!");
        elseif ($request->pub == "separateur7") return redirect()->back()->with('error', "$request->pub n'est pas un choix d'annonce mais un séparateur ! Choisissez un visuel d'annonce !!");
        elseif ($request->pub == "separateur8") return redirect()->back()->with('error', "$request->pub n'est pas un choix d'annonce mais un séparateur ! Choisissez un visuel d'annonce !!");
        elseif ($request->pub == "separateur9") return redirect()->back()->with('error', "$request->pub n'est pas un choix d'annonce mais un séparateur ! Choisissez un visuel d'annonce !!");
        elseif ($request->pub == "separateur10") return redirect()->back()->with('error', "$request->pub n'est pas un choix d'annonce mais un séparateur ! Choisissez un visuel d'annonce !!");
        elseif ($request->pub == "separateur11") return redirect()->back()->with('error', "$request->pub n'est pas un choix d'annonce mais un séparateur ! Choisissez un visuel d'annonce !!");
        elseif ($request->pub == "separateur12") return redirect()->back()->with('error', "$request->pub n'est pas un choix d'annonce mais un séparateur ! Choisissez un visuel d'annonce !!");
        elseif ($request->pub == "separateur13") return redirect()->back()->with('error', "$request->pub n'est pas un choix d'annonce mais un séparateur ! Choisissez un visuel d'annonce !!");
        elseif ($request->pub == "separateur14") return redirect()->back()->with('error', "$request->pub n'est pas un choix d'annonce mais un séparateur ! Choisissez un visuel d'annonce !!");
        elseif ($request->pub == "separateur15") return redirect()->back()->with('error', "$request->pub n'est pas un choix d'annonce mais un séparateur ! Choisissez un visuel d'annonce !!");
        elseif ($request->pub == "separateur16") return redirect()->back()->with('error', "$request->pub n'est pas un choix d'annonce mais un séparateur ! Choisissez un visuel d'annonce !!");
        elseif ($request->pub == "separateur17") return redirect()->back()->with('error', "$request->pub n'est pas un choix d'annonce mais un séparateur ! Choisissez un visuel d'annonce !!");
        elseif ($request->pub == "separateur18") return redirect()->back()->with('error', "$request->pub n'est pas un choix d'annonce mais un séparateur ! Choisissez un visuel d'annonce !!");
        elseif ($request->pub == "separateur19") return redirect()->back()->with('error', "$request->pub n'est pas un choix d'annonce mais un séparateur ! Choisissez un visuel d'annonce !!");
        elseif ($request->pub == "separateur20") return redirect()->back()->with('error', "$request->pub n'est pas un choix d'annonce mais un séparateur ! Choisissez un visuel d'annonce !!");
        elseif ($request->pub == "separateur21") return redirect()->back()->with('error', "$request->pub n'est pas un choix d'annonce mais un séparateur ! Choisissez un visuel d'annonce !!");
        elseif ($request->pub == "separateur22") return redirect()->back()->with('error', "$request->pub n'est pas un choix d'annonce mais un séparateur ! Choisissez un visuel d'annonce !!");

         // Si le champ pub est sélectionné, mais que l'image n'est pas chargée, on renvoit à une erreur
         if ($request->pub != '') 
         {
             $validatedData = $request->validate([
                 'image' => 'required'
             ]);
             
             // On vérifie également que le champ est disponible
             $annonce = Pub::where('product_id', $request->pub)->first();
             // Si elle est prise, on soulève une erreur
             if ($annonce->actif === 1)
             {
                 $produit = Product::where('id', $annonce->product_id)->first();
                 return redirect()->back()->with('error', "L'annonce $produit->name est indisponible ! Choisissez en une autre, svp.");
             }
         }

        // On récupère l'annonceur 
        $annonceur = Annonceur::findOrFail($id);

        // Si l'administrateur a posté une image
        if ($request->hasFile('image'))
        {
            $width = '200';
            $height = '200';

            $image = $request->file('image');
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

            // On récupère la pub concernée
            $pub = Pub::where('product_id', $request->pub)->first();

            // On créé les données de la pub pour la mettre à jour
            $data = [
                'image'         => $fileName,
                'internet'      => !empty($annonceur->urlsite) ? $annonceur->urlsite : NULL,
                'annonceur_id'  => $annonceur->id,
                'actif'         => 1
            ];
            // On enregistre les données
            $pub->update($data);

            // On créé le nouveau panier
            $panier = new Panier;
            $panier->user_id = $annonceur->user_id;
            $panier->total = number_format($pub->prix * 1.2, 2, '.', '');
            $panier->created_at = Carbon::now();
            $panier->updated_at = Carbon::now()->addYears(1);
            // On enregistre les données
            $panier->save();

             // On récupère le dernier panier inséré
            $panier = Panier::orderBy('id', 'desc')->first();

            // On créé un nouveau paiement pour un an
            $paiement = new Paiement;
            $paiement->panier_id = $panier->id;
            $paiement->data = json_encode("Administration");
            $paiement->type = "Administration";
            $paiement->created_at = Carbon::now();
            $paiement->updated_at = Carbon::now()->addYears(1);
            // On enregistre les données
            $paiement->save();

            // On créé une nouvelle ligne pour la table lines
            $line = new Line;
            $line->product_id = $pub->product_id;
            $line->panier_id = $panier->id;
            $line->user_id = $annonceur->user_id;
            $line->prix = number_format($pub->prix, 2, '.', '');
            $line->qte = 1;
            $line->type = "Administration";
            $line->created_at = Carbon::now();
            $line->updated_at = Carbon::now()->addYears(1);
            // On enregistre les données
            $line->save();

            // On récupère le produit par la table Line
            $produitavenir = Line::where('product_id', $request->pub)->first();

            // Puis par la table products
            $produit = Product::where('id', $produitavenir->product_id)->first();

            // On créé une nouvelle facture pour la table factures
            $facture = new Facture;
            $facture->name = $annonceur->societe;
            $facture->adresse = $request->adresse;
            $facture->telephone = $request->telephone;
            $facture->email = $annonceur->email;
            $facture->identiteunique = "admin_".uniqid();
            $facture->produit = $produit->name;
            $facture->qte = 1;
            $facture->duree = 1;
            $facture->type = "Administration";
            $facture->prixHT = number_format($pub->prix, 2, '.', '');
            $facture->soustotalHT = number_format($pub->prix, 2, '.', '');
            $facture->tva = number_format($pub->prix * 0.2, 2, '.', '');
            $facture->totalTTC = number_format($pub->prix * 1.2, 2, '.', '');
            $facture->user_id = $annonceur->user_id;
            $facture->created_at = Carbon::now();
            $facture->datefacture = Carbon::now();
            $facture->updated_at = Carbon::now()->addYears(1);
            // On enregistre les données
            $facture->save();

            // On met à jour l'annonceur en précisant qu'il a payé et qu'il est actif
            $data4 = [
                'adresse'       => $request->adresse,
                'telephone'     => $request->telephone,
                'urlsite'       => $request->urlsite,
                'actif'         => $request->actif,
                'updated_at'    => $request->updated_at,
                'annonce'       => $pub->image,
                'actif'         => 1,
                'paye'          => 1
            ];
            // On met à jour les données
            $annonceur->update($data4);

            // On créé le message pour envoyer les mails
            $message = Message::create([
                'name'          => $annonceur->societe,
                'email'         => $annonceur->email,
                'sujet'         => "Mise à jour de l'annonceur : $annonceur->societe.",
                'role'          => 'annonceur',
                'contenu'       => "Votre nouvelle annonce a été créée pour un an à partir de ce jour. 
                                    Plus de détails sur votre interface d'administration.",
                'created_at'    => Carbon::now()
            ]);

            // Envoi des emails à l'administration du site et à l'annonceur
            Mail::to(env('TO_MAIL'))->send(new \App\Mail\MiseAJourAnnonceur($message));
            Mail::to($annonceur->email)->send(new \App\Mail\MiseAJourAnnonceur($message));

            // On retourne à la vue
            return redirect(route('admin.annonceurs'))->with('message', "L'annonceur $annonceur->societe a bien été créée !");
        }
        
        $data = [
            'adresse'       => $request->adresse,
            'telephone'     => $request->telephone,
            'urlsite'       => $request->urlsite,
            'actif'         => $request->actif,
            'paye'          => 1,
            'actif'         => 1,
            'updated_at'    => $request->updated_at
        ];

        // // On met à jour l'annonceur
        $annonceur->update($data);

        // // On retourne à la vue
        return redirect(route('admin.annonceurs'))->with('message', "L'annonceur ". $annonceur->societe . " a bien été mis à jour !");
    }

    /**
     * Affiche les annonces d'un annonceur à mettre à jour.
     *
     * @param  int  $id
     * @return view('admin.annonceurs.editannonce', compact('id','annonceur'));
    */
    public function editannonce (Annonceur $annonceur, $id)
    {
        // On récupère l'annnonceur 
        $annonceur = Annonceur::where('id', $id)->first();

        // On récupère les différentes annonces liées à cet annonceur
        $pubs = Pub::where('annonceur_id', $annonceur->id)->get();

        // On retourne la vue
        return view('admin.annonceurs.editannonce', compact('annonceur', 'pubs'));
    }

    /**
     * Affiche la vue de la création d'une annonces pour l'annonceur.
     *
     * @param  int  $id
     * @return view('admin.annonceurs.createannonce', compact('id','annonceur'));
    */
    public function createannonce (Annonceur $annonceur, $id)
    {
        // On récupère l'annnonceur 
        $annonceur = Annonceur::where('id', $id)->first();
       
        // On retourne la vue
        return view('admin.annonceurs.createannonce', compact('annonceur'));
    }

    /**
     * Créé une annonce pour l'annonceur.
     *
     * @param  int  $id
     * @return view('admin.annonceurs.editannonce', compact('id','annonceur'));
    */
    public function storeannonceannonceur (Requests\StoreAnnonceRequest $request, $id)
    {
        // On récupère l'annnonceur 
        $annonceur = Annonceur::findOrFail($id);
       
        // On met diffForHumans() en locale avec la classe 
        \Carbon\Carbon::setLocale('fr');

        // On vérifie que l'admin n'a pas sélectionné un séparateur
        if ($request->pub == "separateur1") return redirect()->back()->with('error', "$request->pub n'est pas un choix d'annonce mais un séparateur ! Choisissez un visuel d'annonce !!");
        elseif ($request->pub == "separateur2") return redirect()->back()->with('error', "$request->pub n'est pas un choix d'annonce mais un séparateur ! Choisissez un visuel d'annonce !!");
        elseif ($request->pub == "separateur3") return redirect()->back()->with('error', "$request->pub n'est pas un choix d'annonce mais un séparateur ! Choisissez un visuel d'annonce !!");
        elseif ($request->pub == "separateur4") return redirect()->back()->with('error', "$request->pub n'est pas un choix d'annonce mais un séparateur ! Choisissez un visuel d'annonce !!");
        elseif ($request->pub == "separateur5") return redirect()->back()->with('error', "$request->pub n'est pas un choix d'annonce mais un séparateur ! Choisissez un visuel d'annonce !!");
        elseif ($request->pub == "separateur6") return redirect()->back()->with('error', "$request->pub n'est pas un choix d'annonce mais un séparateur ! Choisissez un visuel d'annonce !!");
        elseif ($request->pub == "separateur7") return redirect()->back()->with('error', "$request->pub n'est pas un choix d'annonce mais un séparateur ! Choisissez un visuel d'annonce !!");
        elseif ($request->pub == "separateur8") return redirect()->back()->with('error', "$request->pub n'est pas un choix d'annonce mais un séparateur ! Choisissez un visuel d'annonce !!");
        elseif ($request->pub == "separateur9") return redirect()->back()->with('error', "$request->pub n'est pas un choix d'annonce mais un séparateur ! Choisissez un visuel d'annonce !!");
        elseif ($request->pub == "separateur10") return redirect()->back()->with('error', "$request->pub n'est pas un choix d'annonce mais un séparateur ! Choisissez un visuel d'annonce !!");
        elseif ($request->pub == "separateur11") return redirect()->back()->with('error', "$request->pub n'est pas un choix d'annonce mais un séparateur ! Choisissez un visuel d'annonce !!");
        elseif ($request->pub == "separateur12") return redirect()->back()->with('error', "$request->pub n'est pas un choix d'annonce mais un séparateur ! Choisissez un visuel d'annonce !!");
        elseif ($request->pub == "separateur13") return redirect()->back()->with('error', "$request->pub n'est pas un choix d'annonce mais un séparateur ! Choisissez un visuel d'annonce !!");
        elseif ($request->pub == "separateur14") return redirect()->back()->with('error', "$request->pub n'est pas un choix d'annonce mais un séparateur ! Choisissez un visuel d'annonce !!");
        elseif ($request->pub == "separateur15") return redirect()->back()->with('error', "$request->pub n'est pas un choix d'annonce mais un séparateur ! Choisissez un visuel d'annonce !!");
        elseif ($request->pub == "separateur16") return redirect()->back()->with('error', "$request->pub n'est pas un choix d'annonce mais un séparateur ! Choisissez un visuel d'annonce !!");
        elseif ($request->pub == "separateur17") return redirect()->back()->with('error', "$request->pub n'est pas un choix d'annonce mais un séparateur ! Choisissez un visuel d'annonce !!");
        elseif ($request->pub == "separateur18") return redirect()->back()->with('error', "$request->pub n'est pas un choix d'annonce mais un séparateur ! Choisissez un visuel d'annonce !!");
        elseif ($request->pub == "separateur19") return redirect()->back()->with('error', "$request->pub n'est pas un choix d'annonce mais un séparateur ! Choisissez un visuel d'annonce !!");
        elseif ($request->pub == "separateur20") return redirect()->back()->with('error', "$request->pub n'est pas un choix d'annonce mais un séparateur ! Choisissez un visuel d'annonce !!");
        elseif ($request->pub == "separateur21") return redirect()->back()->with('error', "$request->pub n'est pas un choix d'annonce mais un séparateur ! Choisissez un visuel d'annonce !!");
        elseif ($request->pub == "separateur22") return redirect()->back()->with('error', "$request->pub n'est pas un choix d'annonce mais un séparateur ! Choisissez un visuel d'annonce !!");

        if (Auth::user()->role == "administrateur")
        {
            $width = 200;
            $height = 200;

            $image = $request->file('image');
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

            // On récupère la pub concernée
            $pub = Pub::where('product_id', $request->pub)->first();

            // On créé les données de la pub pour la mettre à jour
            $data = [
                'image'         => $fileName,
                'internet'      => !empty($annonceur->urlsite) ? $annonceur->urlsite : NULL,
                'annonceur_id'  => $annonceur->id,
                'actif'         => 1
            ];
            // On enregistre les données
            $pub->update($data);

            // On créé le noufacture
            $panier = new Panier;
            $panier->user_id = $annonceur->id;
            $panier->total = number_format($pub->prix * 1.2, 2, '.', '');
            $panier->created_at = Carbon::now();
            $panier->updated_at = Carbon::now();
            // On enregistre les données
            $panier->save();

            // On récupère le dernier panier inséré
            $panier = Panier::orderBy('id', 'desc')->first();

            // On créé le nouveau paiement
            $paiement = new Paiement;
            $paiement->panier_id = $panier->id;
            $paiement->data = json_encode("Payé par l'admin");
            $paiement->type = "Payé par l'admin";
            $paiement->created_at = Carbon::now();
            $paiement->updated_at = Carbon::now();
            // On enregistre les données
            $paiement->save();

            // On créé une nouvelle ligne pour la table lines
            $line = new Line;
            $line->product_id = $pub->product_id;
            $line->panier_id = $panier->id;
            $line->user_id = $annonceur->user_id;
            $line->prix = number_format($pub->prix, 2, '.', '');
            $line->qte = 1;
            $line->type = "Payé par l'admin";
            $panier->created_at = Carbon::now();
            $panier->updated_at = Carbon::now();
            // On enregistre les données
            $line->save();

            // On met à jour l'annonceur en précisant qu'il a payé
            $data4 = [
                'annonce'   => $pub->image,
                'paye'      => 1
            ];
            // On met à jour les données
            $annonceur->update($data4);
            
            // On retourne à la vue
            return redirect(route('admin.annonceurs'))->with('message', "L'annonce N° $pub->id de l'annonceur $annonceur->societe a bien été créée !");
        }
        else return abort('401');
    }

    /**
     * Met à jour les annonces d'un annonceur.
     *
     * @param  int  $id
     * @return view('admin.annonceurs.editannonce', compact('id','annonceur'));
    */
    public function updateannonce (Request $request, $id)
    {
        $request->validate([
            'pub'   => 'required',
            'image' => 'required'
        ]);

        // On récupère la Pub
        $pub = Pub::findOrFail($id);

        // On récupère l'annonceur
        $annonceur = Annonceur::where('id', $pub->annonceur_id)->first();

        // On met diffForHumans() en locale avec la classe 
        \Carbon\Carbon::setLocale('fr');

        // On vérifie que l'admin n'a pas sélectionné un séparateur
        if ($request->pub == "separateur1") return redirect()->back()->with('error', "$request->pub n'est pas un choix d'annonce mais un séparateur ! Choisissez un visuel d'annonce !!");
        elseif ($request->pub == "separateur2") return redirect()->back()->with('error', "$request->pub n'est pas un choix d'annonce mais un séparateur ! Choisissez un visuel d'annonce !!");
        elseif ($request->pub == "separateur3") return redirect()->back()->with('error', "$request->pub n'est pas un choix d'annonce mais un séparateur ! Choisissez un visuel d'annonce !!");
        elseif ($request->pub == "separateur4") return redirect()->back()->with('error', "$request->pub n'est pas un choix d'annonce mais un séparateur ! Choisissez un visuel d'annonce !!");
        elseif ($request->pub == "separateur5") return redirect()->back()->with('error', "$request->pub n'est pas un choix d'annonce mais un séparateur ! Choisissez un visuel d'annonce !!");
        elseif ($request->pub == "separateur6") return redirect()->back()->with('error', "$request->pub n'est pas un choix d'annonce mais un séparateur ! Choisissez un visuel d'annonce !!");
        elseif ($request->pub == "separateur7") return redirect()->back()->with('error', "$request->pub n'est pas un choix d'annonce mais un séparateur ! Choisissez un visuel d'annonce !!");
        elseif ($request->pub == "separateur8") return redirect()->back()->with('error', "$request->pub n'est pas un choix d'annonce mais un séparateur ! Choisissez un visuel d'annonce !!");
        elseif ($request->pub == "separateur9") return redirect()->back()->with('error', "$request->pub n'est pas un choix d'annonce mais un séparateur ! Choisissez un visuel d'annonce !!");
        elseif ($request->pub == "separateur10") return redirect()->back()->with('error', "$request->pub n'est pas un choix d'annonce mais un séparateur ! Choisissez un visuel d'annonce !!");
        elseif ($request->pub == "separateur11") return redirect()->back()->with('error', "$request->pub n'est pas un choix d'annonce mais un séparateur ! Choisissez un visuel d'annonce !!");
        elseif ($request->pub == "separateur12") return redirect()->back()->with('error', "$request->pub n'est pas un choix d'annonce mais un séparateur ! Choisissez un visuel d'annonce !!");
        elseif ($request->pub == "separateur13") return redirect()->back()->with('error', "$request->pub n'est pas un choix d'annonce mais un séparateur ! Choisissez un visuel d'annonce !!");
        elseif ($request->pub == "separateur14") return redirect()->back()->with('error', "$request->pub n'est pas un choix d'annonce mais un séparateur ! Choisissez un visuel d'annonce !!");
        elseif ($request->pub == "separateur15") return redirect()->back()->with('error', "$request->pub n'est pas un choix d'annonce mais un séparateur ! Choisissez un visuel d'annonce !!");
        elseif ($request->pub == "separateur16") return redirect()->back()->with('error', "$request->pub n'est pas un choix d'annonce mais un séparateur ! Choisissez un visuel d'annonce !!");
        elseif ($request->pub == "separateur17") return redirect()->back()->with('error', "$request->pub n'est pas un choix d'annonce mais un séparateur ! Choisissez un visuel d'annonce !!");
        elseif ($request->pub == "separateur18") return redirect()->back()->with('error', "$request->pub n'est pas un choix d'annonce mais un séparateur ! Choisissez un visuel d'annonce !!");
        elseif ($request->pub == "separateur19") return redirect()->back()->with('error', "$request->pub n'est pas un choix d'annonce mais un séparateur ! Choisissez un visuel d'annonce !!");
        elseif ($request->pub == "separateur20") return redirect()->back()->with('error', "$request->pub n'est pas un choix d'annonce mais un séparateur ! Choisissez un visuel d'annonce !!");
        elseif ($request->pub == "separateur21") return redirect()->back()->with('error', "$request->pub n'est pas un choix d'annonce mais un séparateur ! Choisissez un visuel d'annonce !!");
        elseif ($request->pub == "separateur22") return redirect()->back()->with('error', "$request->pub n'est pas un choix d'annonce mais un séparateur ! Choisissez un visuel d'annonce !!");

        if (Auth::user()->role == "administrateur")
        {
            $width = 200;
            $height = 200;

            $image = $request->file('image');
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

            $data['annonce'] = $fileName;

            // On applique un random sur cette image
            if ($pub->format == "(191px) x (238px)") $image = rand(1,11).'.jpg';
            elseif ($pub->format == "(382px) x (238px)") $image = rand(1,10).'.jpg';
            elseif ($pub->format == "(382px) x (440px)") $image = rand(1,7).'.jpg';

            // On met à jour cette pub
            $pub['image'] = $image;
            $pub['annonceur_id'] = Null;
            $pub['actif'] = 0;
            $pub->save();

            // On va chercher la nouvelle ligne à remplir
            $pub2 = Pub::where('product_id', $request->pub)->first();

            $data2 = [
                'image'         => $fileName,
                'actif'         => 1,
                'annonceur_id'  => $annonceur->id,
                'updated_at'    => Carbon::now()
            ];

            $pub2->update($data2);
            
            // On retourne à la vue
            return redirect(route('admin.annonceurs'))->with('message', "L'annonce N° $pub->id de l'annonceur $annonceur->societe a bien été mise à jour !");
        }
        else return abort('401');
    }

    /**
     * Méthode createidentifiant () affiche la vue de création de l'identifiant unique de l'annonceur
     *
     * @param $id
     * @return view('admin.vignerons.createutilisateur', compact('user'));
     **/
    public function createidentifiant ($id)
    {
        // On récupère l'id du logué pour empêcher les petits malins d'utiliser l'admin administrateur
        if (Auth::user()->role == "administrateur")
        {
            // On retrouve l'id de l'annonceur
            $annonceur = Annonceur::where('id', $id)->first();

            return view('admin.annonceurs.createutilisateur', compact('annonceur'));
        }

        else return abort('401');
    }

    /**
    * Méthode storeidentifiant () enregistre le nouvel annonceur comme user et met à jour son user_id
     *
     * @param Requests\IdentifiantUniqueRequest $request
     * @return redirect()->route('admin.create.resultat', compact('vigneron'));
    **/
    public function storeidentifiant (Requests\IdentifiantUniqueRequest $request)
    {
        // On met diffForHumans() en locale avec la classe 
        \Carbon\Carbon::setLocale('fr');

        // On récupère le vigneron qui correspond au nom du user :
        $annonceur = Annonceur::where('societe', $request->societe)->first();
        
        // On stocke les données reçues dans un tableau $data
        $data = [
            'name'          => $request->societe,
            'email'         => $request->email,
            'password'      => $request->password ? Hash::make($request->password) : NULL,
            'role'          => "annonceur",
            'imageprofil'   => 'avatar-neutre.jpg'
        ];

        // On récupère l'annonceur qui correspond au nom du user :
        $annonceur = Annonceur::where('societe', $request->societe)->first();

        // On regarde si le vigneron n'a pas déjà de user_id
        if ($annonceur->user_id != NULL)
        {
            // Si oui, on affiche une erreur
            return redirect()->back()->with('error', "Cet annonceur est déjà accrédité !!");
        }
        // Sinon, on créé les données
        else
        {
            // On créé l'enregistrement dans la BDD
            User::create($data);

            // On récupère l'id du dernier user enregistré :
            $user = User::latest()->first();

            // On assigne la valeur de l'id du user à l'user_id de l'annonceur et on met actif sur 1 et payé sur 0
            $data = [
                'user_id'   => $user->id,
                'actif'     => 1,
                'paye'      => 0
            ];

            // On met à jour l'user_id de l'annonceur
            $annonceur->update($data);

            // On récupère l'id de l'annonceur
            $annonceur = $annonceur->id;

            // On récupère en clair le mot de passe de l'annonceur utilisateur
            $motdepasse = $request->password;

            // On créé le message pour les mails
            $message = Message::create([
                'name'          => $request->societe,
                'email'         => $request->email,
                'sujet'         => "Accréditation d'un annonceur",
                'role'          => 'annonceur',
                'contenu'       => "L'accréditation est acceptée.",
                'motdepasse'    => Crypt::encrypt($motdepasse),
                'user_id'       => $user->id
            ]);

            // Envoi des emails à l'administration du site et à l'annonceur
            Mail::to(env('TO_MAIL'))->send(new \App\Mail\MailIdentifiantUniqueAnnonceur($message));
            Mail::to($request->email)->send(new \App\Mail\MailIdentifiantUniqueAnnonceur($message));

            return redirect()->route('admin.annonceurs.create.resultat', compact('annonceur'));
        }
    }

    /**
    	* Méthode resultatidentifiant () pour afficher le résultat de l'indentifiant unique
    	*
    	* @param $id
    	* @return view('admin.vignerons.resultatutilisateur', compact('annonceur'));
    **/
    public function resultatidentifiant ($id)
    {
        // On récupère le vigneron
        $annonceur = Annonceur::findOrFail($id);

        return view('admin.annonceurs.resultatutilisateur', compact('annonceur'));
    }

    /**
     * Méthode destroy () pour supprimer un annonceur
     *
     * @param $id
     * @return redirect(route('admin.annonceurs'));
     **/
    public function destroy (Annonceur $annonceur, $id)
    {
        // On récupère l'id du logué pour empêcher les petits malins d'utiliser l'admin administrateur
        if (Auth::user()->role == "administrateur")
        {
            // On récupère l'annonceur
            $annonceur = Annonceur::findOrFail($id);

            // on en déduit le user
            $user = User::where('id', $annonceur->user_id)->first();

            // On récupère les paniers pour les paiements avant de supprimer le ou les paniers
            $panierpaiement = Panier::where('user_id', $user->id)->first();

            // On regarde s'il existe une ou des factures
            $factures = Facture::where('user_id', $user->id)->get();
            // Si oui, on les supprime
            if ($factures) {
                foreach ($factures as $facture) {
                    $facture->delete();
                }
            }

            // Si il y a au moins une facture, il y a un ou des messages
            $messages = Message::where('user_id', $user->id)->get();
            // On les supprime
            if ($messages) {
                foreach ($messages as $messages) {
                    $messages->delete();
                }
            }

            // Si il y a au moins une facture, il y a une ou des lignes
            $lines = Line::where('user_id', $user->id)->get();
            // On les supprime
            if ($lines) {
                foreach ($lines as $line) {
                    $line->delete();
                }
            }

            // On récupère les paniers pour les paiements avant de supprimer le ou les paniers
            $panierpaiement = Panier::where('user_id', $user->id)->first();

            // Si il y a au moins une facture, il y a un ou des paniers
            $paniers = Panier::where('user_id', $user->id)->get();
            // On les supprime
            if ($paniers) {
                foreach ($paniers as $panier) {
                    $panier->delete();
                }
            }

            // Si il y a au moins un panier, il y a un ou des paiements
            if ($panierpaiement) {
                $paiements = Paiement::where('panier_id', $panierpaiement->id)->get();
                // On les supprime

                foreach ($paiements as $paiement) {
                    $paiement->delete();
                }
            }
        
            // On récupère le ou les pubs concernées
            $pubs = Pub::where('annonceur_id', $annonceur->id)->get();
            if ($pubs) {
                foreach ($pubs as $pub) {
                    // On créé les données
                    $data = [
                        'internet'      => "#",
                        'image'         => rand(39,45).'.jpg',
                        'actif'         => 0,
                        'annonceur_id'  => NULL
                    ];
                    // On met à jour la pub
                    $pub->update($data);
                }
            }
            
            // On supprime le user
            $user = User::where('id', $annonceur->user_id)->first();
            $user->delete();

            // On supprime l'annonceur
            $annonceur->delete();
    
            return redirect()->back()->with('message', "$annonceur->societe, toutes ses tables associées dans la BDD 
            ainsi que son statut d'annonceur ont bien été supprimés !");
        }
        else return abort('401');
    }

     /**
     * Méthode destroyannonce () pour supprimer une annonce d'un annonceur
     *
     * @param $id
     * @return redirect()->back()->with('message', "$annonceur->societe, l'annonce ainsi que l'achat associé a bien été supprimé !");
     **/
    public function destroyannonce ($id)
    {
        // On récupère l'id du logué pour empêcher les petits malins d'utiliser l'admin administrateur
        if (Auth::user()->role == "administrateur")
        {
            // On récupère l'achat
            $facture = Facture::findOrFail($id);

            // On en déduit le user
            $user = User::where('id', $facture->user_id)->first();

            // On retrouve le produit
            $produit = Product::where('name', $facture->produit)->first();

            // On retrouve la ligne
            $line = Line::where('product_id', $produit->id)->first();

            // On retrouve le panier
            $panier = Panier::where('id', $line->panier_id)->first();

            // On retrouve le paiement
            $paiement = Paiement::where('panier_id', $panier->id)->first();

            // Si il y a 1 seule line avec le même product_id, on met la pub à jour, sinon rien.
            $lines = Line::where('product_id', $produit->id)->get();
            if ($lines->count() <= 1)
            {
                // On retrouve la pub
                $pub = Pub::where('product_id', $produit->id)->first();
                $data = [
                    'internet'      => "#",
                    'image'         => rand(39,45).'.jpg',
                    'actif'         => 0,
                    'annonceur_id'  => NULL
                ];
                // Et on la met à jour
                $pub->update($data);
            }
            
            // On supprime facture, ligne, panier et paiement de leurs tables
            $facture->delete();
            $line->delete();
            $panier->delete();
            $paiement->delete();

            // Enfin, on vérifie s'il reste encore des factures avec l'id du user
            $factures = Facture::where('user_id', $user->id)->get();
            // Si il n'y en a plus, on met payé de l'annonceur sur 0.
            if ($factures->count() == 0) 
            {
                $annonceur = Annonceur::where('user_id', $user->id)->first();
                $annonceur['paye'] = 0;
                $annonceur->update();
            }

            // On retourne sur la vue d'avant
            return redirect()->back()->with('message', "$user->name, l'annonce ainsi que l'achat associé ont bien été supprimés !");
        }
        else return abort('401');
    }

}
