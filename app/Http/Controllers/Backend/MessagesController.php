<?php

namespace App\Http\Controllers\Backend;

use App\Message;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MessagesController extends BackendController
{

    // Le nombre d'utilisateurs par page
    protected $limit = 10;


    /**
    	* Méthode index () pour afficher tous les messages
    	*
    	* @return view('admin.messages.messages', compact('messages'));
    **/
    public function index ()
    {
        // On affiche les derniers messages entrés en dernier lorsqu'ils seront créés
        // on se sert du scopFilter présent dans le modèle Message.php
        // pour rechercher les messages par leur nom ou leur email
        // puis on pagine
        // Carbon::setLocale('fr');
        $messages = Message::latest()
            ->filter(request('term'))
            ->paginate($this->limit);

        // On compte les messages
        $compteMessages = Message::count();

        return view('admin.messages.messages', compact('messages', 'compteMessages'));
    }

    /**
    	* Méthode detail () pour afficher le détail du message
    	*
    	* @param $id
    	* @return
    **/
    public function detail ($id)
    {
        // On récupère le message
        $message = Message::findOrFail($id);

        return view('admin.messages.detail', compact('message'));
    }

    /**
     * Méthode renvoiindentifiant () pour réenvoyer au vigneron son accréditation
     *
     * @param
     * @return
     **/
    public function renvoiidentifiant ($id)
    {
        // on récupère l'id du message de l'indentifiant déjà envoyé
        $mail = Message::findOrFail($id);

        // On construit le message
        $message = Message::create([
            'name'          => $mail->name,
            'email'         => $mail->email,
            'sujet'         => "Accréditation d'un vigneron",
            'role'          => 'vigneron',
            'contenu'       => "L'accréditation de ce vigneron a été réenvoyée.",
            'motdepasse'    => $mail->motdepasse,
            'user_id'       => $mail->user_id,
        ]);

        // Envoi des emails à l'administration du site et au vigneron
        Mail::to(env('TO_MAIL'))->send(new \App\Mail\MailIdentifiantUnique($message));
        Mail::to($mail->email)->send(new \App\Mail\MailIdentifiantUnique($message));

        return redirect()->back()->with('success', "L'accréditation de ".$mail->name." lui est parvenu de nouveau avec succès !");
    }

    /**
     * Méthode destroymessage () pour supprimer les messages faits de l'accueil et des messages
     *
     * @param $id
     * @return redirect(route('admin'))
     **/
    public function destroymessage ($id)
    {
        // On récupère le message
        $message = Message::findOrFail($id);

        $message->delete();

        return redirect()->back()
            ->with('success', "Le message ".$message->name." a bien été supprimé !");
    }

    /**
    	* Méthode messageemail () pour afficher la vue de réponse à un message
        *
    	* @param $id
    	* @return
    **/
    public function messageemail ($id)
    {
        // On retrouve le message
        $message = Message::findOrFail($id);

        // on affiche la vue
        return view('admin.messages.repondremessage', compact('message'));
    }

    /**
    	* Méthode messageenvoi () pour envoyer la réponse au message
    	*
    	* @param $id
    	* @return
    **/
    public function messageenvoi (Requests\RepondreMesssageRequest $request, $id)
    {
        // On construit le message
        $message = Message::create([
            'name'          => $request->name,
            'email'         => $request->email,
            'sujet'         => $request->sujet,
            'role'          => $request->role,
            'contenu'       => $request->contenu,
            'reponse_id'    => $request->id,
            'created_at'    => $request->created_at
        ]);

        // Envoi des emails à la personne concernée
        Mail::to($message->email)->send(new \App\Mail\ReponseMessage($message));

        return redirect()->back()
            ->with('success', "Votre réponse au message de ".$message->name." lui est parvenu avec succès !");
    }
}
