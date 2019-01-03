<?php

namespace App\Http\Controllers\Backend;

use App\Message;
use App\Tache;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Carbon;

class AccueilController extends BackendController
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // On importe les tâches à faire
        $taches = Tache::orderBy('id', 'desc')->get();
        // On importe les messages à faire
        $messages = Message::where('tache', 1)->orderby('id', 'desc')->get();

        return view('admin.index', compact('taches','messages'));
    }

    /**
    	* Méthode ajouttache () pour ajouter une tâche
    	*
    	* @param
    	* @return
    **/
    public function ajouttache ()
    {
        return view('admin.users.ajouttache', compact('taches'));
    }

    /**
     * Méthode store () pour enregistrer tâches dans la BDD
     * On a créé un request TacheRequest
     * pour gérer la validation et ajouté use App\Http\Requests; pour le fonctionnement
     *
     * @param Requests\UserRequest $request
     * @return redirect('admin');
     **/
    public function store (Requests\TachesRequest $request)
    {

        $data = [
            'contenu'           => $request->contenu,
            'delai'             => $request->delai,
            'created_at'        => Carbon::now(),
            'updated_at'        => Carbon::now()
        ];

        //dd($data);

        Tache::create($data);

        // dd($data);

        return redirect(route('admin'))
            ->with('message', "La nouvelle tâche a bien été ajoutée !");

    }

    /**
    	* Méthode destroy () pour supprimer les tâches
    	*
    	* @param $id
    	* @return redirect(route('admin'))
    **/
    public function destroy ($id)
    {
        $tache = Tache::findOrFail($id);

        // dd($tache);

        $tache->delete();

        return redirect(route('admin'))
            ->with('message', "La tâche a bien été supprimée !");

    }
}
