<?php

namespace App\Http\Controllers;

use App\Message;

use App\Vigneron;
use App\Annonceur;
use App\Http\Requests;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    /**
    	* Méthode index () affiche la vue contact du site
    	*
    	* @return view("contact.contact", compact('header'));
    **/
    public function index()
    {
        $header = "Vineapolis | Contact";
        return view("contact.contact", compact('header'));
    }

    /**
    	* Méthode postcontact () pour faire partir les mails
    	*
    	* @param Request $request
    	* @return
    **/
    public function postcontact (Requests\ContactRequest $request)
    {
        // On créé un nouveau message
        $message = Message::create([
            'name'      => $request->name,
            'email'     => $request->email,
            'sujet'     => $request->sujet,
            'role'      => "internaute",
            'contenu'   => $request->contenu
        ]);

        // Pour tester l'envoi en local :
        // return new \App\Mail\Contactdusite($message);

        // Envoi de l'email
        Mail::to(env('TO_MAIL'))->send(new \App\Mail\Contactdusite($message));

        // Retour à la vue contact pour le message de succès
        return redirect()->back()->with('success', $message['name'].', votre message nous est parvenu avec succès. Nous y répondrons dans les plus brefs délais');
    }

    /**
     * Méthode contactvigneron () pour le contact des vignerons
     * On injecte la classe Vigneron en paramètre, ce qui, avec l'aide du provider RouteServiceProvider.php
     * et sa méthode boot () modifiée permet de ramener l'alias de la societe
     *
     * @param Vigneron $vin
     * @return view("contactchaquevigneron", compact('header', 'vin'));
    **/
    public function contactvigneron (Vigneron $vin)
    {
        $header = "Vineapolis | Contact Vigneron";
        return view("contact.contactvigneron", compact('header', 'vin'));
    }

    /**
     * Méthode contactvignerons () pour le contact des vignerons sans adresse
     *
     * @param Vigneron $vin
     * @return view("contactchaquevignerons", compact('header'));
     **/
    public function contactvignerons ()
    {
        $header = "Vineapolis | Contact Vignerons";
        return view("contact.contactvignerons", compact('header'));
    }

    /**
     * Méthode postchaquevigneron () le traitement du formulaire de contact et l'envoi de l'email pour vignerons adresse
     *
     * @param Requests\ContactVigneronRequest $request
     * @return redirect()->back();
     **/
    public function postchaquevigneron (Requests\ContactVigneronRequest $request)
    {
        // On met diffForHumans() en locale avec la classe 
        \Carbon\Carbon::setLocale('fr');

        // On créé le message à envoyer pour le stocker dans la table messages de la BDD
        $message = Message::create([
            'name'      => $request->societe,
            'email'     => $request->email,
            'sujet'     => "Demande d'accréditation d'un vigneron",
            'contenu'   => "Créer l'accréditation du vigneron ".$request->societe." dans l'administration",
            'role'      => "vigneron",
            'tache'     => 1
        ]);

        // Envoi de l'email
        Mail::to(env('TO_MAIL'))->send(new \App\Mail\ContactVigneron($message));

        // Retour à la vue contact pour le message de succès
        return redirect()->route('contactvigneron')
            ->with('success', $request->societe.", votre message nous est parvenu avec succès. Vous recevrez votre accréditation dans les 24 heures.");
    }

    /**
     * Méthode postchaquevignerons () le traitement du formulaire de contact et l'envoi de l'email pour vignerons sans adresse
     *
     * @param Requests\ContactVigneronRequest $request
     * @return redirect()->back();
     **/
    public function postchaquevignerons (Requests\ContactVigneronRequest $request)
    {
        // On met diffForHumans() en locale avec la classe 
        \Carbon\Carbon::setLocale('fr');
        
        // On récupère les données du forulaire
        $data = [
            'societe'       => $request->societe,
            'aliassociete'  => $this->enlevertouteslesmerdes($request->societe),
            'email'         => $request->email,
            'actif'         => 0,
            'created_at'    => Carbon::now(),
            'updated_at'    => Carbon::now(),
        ];

        // On créé un nouveau vigneron avec des paramètres de bases : societe, aliassociete et email
        $vigneron = Vigneron::create($data);

        // On créé le message à envoyer pour le stocker dans la table messages de la BDD
        $message = Message::create([
            'name'      => $request->societe,
            'email'     => $request->email,
            'sujet'     => "Demande d'accréditation d'un vigneron",
            'contenu'   => "Créer l'accréditation du vigneron ".$request->societe." dans l'administration",
            'role'      => "vigneron",
            'tache'     => 1
        ]);

        // Envoi de l'email
        Mail::to(env('TO_MAIL'))->send(new \App\Mail\ContactVigneron($message));

        // Retour à la vue contact pour le message de succès
        return redirect()->route('contactvignerons')
            ->with('success', $request->societe.", votre message nous est parvenu avec succès. Vous recevrez votre accréditation dans les 24 heures.");
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
     * Méthode annonceurs () pour le contact des annonceurs
     *
     * @param
     * @return view("contactannonceurs", compact('header'));
    **/
    public function annonceurs ()
    {
        $header = "Vineapolis | Contact Annonceurs";
        return view("contact.contactannonceurs", compact('header'));
    }

    /**
     * Méthode annonceurspost () le traitement du formulaire de contact et l'envoi de l'email pour les annonceurs
     *
     * @param Requests\ContactAnnonceurRequest $request
     * @return redirect()->back();
    **/
    public function annonceurspost (Requests\ContactAnnonceurRequest $request)
    {
        // On met diffForHumans() en locale avec la classe 
        \Carbon\Carbon::setLocale('fr');
        
        // On récupère les données du formulaire
        $data = [
            'societe'       => $request->societe,
            'aliassociete'  => $this->enlevertouteslesmerdes($request->societe),
            'email'         => $request->email,
            'actif'         => 0,
            'created_at'    => Carbon::now(),
            'updated_at'    => Carbon::now(),
        ];

        // On créé un nouveau vigneron avec des paramètres de bases : societe, aliassociete et email
        $annonceur = Annonceur::create($data);

        // On créé le message à envoyer pour le stocker dans la table messages de la BDD
        $message = Message::create([
            'name'      => $request->societe,
            'email'     => $request->email,
            'sujet'     => "Demande d'accréditation d'un annonceur",
            'contenu'   => "Créer l'accréditation de l'annonceur ".$request->societe." dans l'administration",
            'role'      => "annonceur",
            'tache'     => 1
        ]);

        // Envoi de l'email
        Mail::to(env('TO_MAIL'))->send(new \App\Mail\ContactAnnonceur($message));

        // Retour à la vue contact pour le message de succès
        return redirect()->route('annonceurs')
          ->with('success', $request->societe.", votre message nous est parvenu avec succès. Vous recevrez votre accréditation dans les 24 heures.");
        }

}
