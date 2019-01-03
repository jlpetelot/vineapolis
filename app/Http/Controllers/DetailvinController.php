<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\CommentaireVigneronRequest;

use App\Vigneron;
use App\Pub;
use App\Comment;
use App\User;
use App\Remplace1;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Message;
use Illuminate\Support\Facades\Mail;


class DetailvinController extends Controller
{   
    /**
     * Méthode index () pour les détails du vigneron
     * On injecte la classe Vigneron en paramètre, ce qui, avec l'aide du provider RouteServiceProvider.php
     * et sa méthode boot () modifiée permet de ramener l'alias de la societe
     *
     * @param Vigneron $vin
     * @return view('detailvin', compact(''))
     **/

    public function index (Vigneron $vin)
    {
        // On met diffForHumans() en locale avec la classe 
        \Carbon\Carbon::setLocale('fr');

        $header = "Vineapolis | Détail du vin";
        $cheminpub = asset('img/pubs').'/';
        $cheminimage = asset('img').'/';
        $cheminprofil = asset('backend/img').'/';

        $cheminremplace1 = asset('img/remplace1').'/';

        $image73 = Pub::where('id', 73)->first();
        $image74 = Pub::where('id', 74)->first();
        $image75 = Pub::where('id', 75)->first();
        $image76 = Pub::where('id', 76)->first();
        $image77 = Pub::where('id', 77)->first();
        $image78 = Pub::where('id', 78)->first();
        $image79 = Pub::where('id', 79)->first();
        $image80 = Pub::where('id', 80)->first();

        $imageremplace1 = Remplace1::inRandomOrder()->first();
        $imageremplace2 = Remplace1::inRandomOrder()->first();
        $imageremplace3 = Remplace1::inRandomOrder()->first();
        $imageremplace4 = Remplace1::inRandomOrder()->first();
    
        // On ramène les commentaires
        $commentaires = Comment::where('vigneron_id', $vin->id)
                        ->orderBy('id', 'DESC')
                        ->get();

        // 2ème méthode pour ramèner les commentaires grâce aux relations entre les modèles Viogneron et Comment
        // grâce à cela, laravel sait qu'il existe une clé étrangère vigneron_id par défaut
        // $commentaires = $vin->comments;

        // On récupère le vigneron
        $nomvigneron = $vin->societe;       

        if ($vin->actif === 0)
        {
            return view('errors.404');
        }
        else
        {
            return view('detailvin', compact(
                'header',
                'cheminpub',
                'cheminimage',
                'cheminprofil',
                'cheminremplace1',
                'image73',
                'image74',
                'image75',
                'image76',
                'image77',
                'image78',
                'image79',
                'image80',
                'imageremplace1',
                'imageremplace2',
                'imageremplace3',
                'imageremplace4',
                'vin',
                'commentaires',
                'nomvigneron'
            ));
        }
    }

    /**
     * Méthode envoimessage () permet de stocker les commentaires envoyés par le front-end aux vignerons
     * et prévenir l'admin et le vigneron par email
     * 24 heures pour modérer le message dans l'admin
     *
     * @param CommentaireVigneronRequest $request
     * @param $aliassociete
     * @return redirect()->back()->with('message')
    **/
    public function envoimessage (Request $request, $aliassociete)
    // public function envoimessage (CommentaireVigneronRequest $request, $aliassociete)
    {   
        // On met diffForHumans() en locale avec la classe 
        \Carbon\Carbon::setLocale('fr');
        
        // On récupère le nom du logué
        $nomuser = Auth::user()->name;

        // On récupère l'email du logué
        $email_user = Auth::user()->email;

        // On récupère l'email du user'
        $emailuser = Auth::user()->email;

        // On récupère l'image du profil du logué
        $profileuser = Auth::user()->imageprofil;

        // On récupère le vigneron
        $vigneron = Vigneron::where('aliassociete', $aliassociete)->first();

       // On créé un nouvel enregistrement
        $commentaire = new Comment;

        $commentaire->body          = $request->body;
        $commentaire->name          = $nomuser;
        $commentaire->imageprofil   = $profileuser;
        $commentaire->vigneron_id   = $vigneron->id;
        $commentaire->user_email    = Auth::user()->email;
        $commentaire->reponse       = NULL;
        $commentaire->created_at    = Carbon::now();
        $commentaire->updated_at    = NULL;

        $commentaire->save();

        /*=============== ENVOI D'UN MAIL AU VIGNERON ET À L'ADMIN ==============*/
        // On créé le message pour les mails
        $message = Message::create([
            'name'          => $vigneron->societe,
            'email'         => $vigneron->email,
            'sujet'         => "Nous devons valider ce commentaire dans les 24 heures.",
            'role'          => 'vigneron',
            'contenu'       => $request->body,
            'commentaire'   => 1,
            'motdepasse'    => NULL,
            'created_at'    => Carbon::now(),
            'user_id'       => $vigneron->id
        ]);

        // Envoi de 2 emails, 1 au vigneron et 1 à l'admin
        // au vigneron
        Mail::to($vigneron->email)->send(new \App\Mail\Commentairevigneron($message));
        // à l'admin
        Mail::to(env('TO_MAIL'))->send(new \App\Mail\Commentairevigneron($message));
        /*=============== ../ENVOI D'UN MAIL À L'INTÉRESSÉ ET L'ADMIN==============*/

        return redirect()->back()
        ->with('message', $nomuser.", votre message nous est parvenu avec succès. 
        Le vigneron vient d'être contacté.<br/>
        Nous nous réservons 24 heures pour définitivement entériner votre message.");
    }
}
