<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Newsletter;
use Auth;
use App\User;
use Carbon\Carbon;

class InternauteController extends BackendController
{
    /**
     * Méthode index () pour affichr la newsletter dans les internautes
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // On récupère le nom du user
        $user = Auth::user()->name;

        // On récupère l'id du user
        $id = Auth::user()->id;

        // On va chercher toutes les newsletter
        $newsletters = Newsletter::all();

        // On affiche la vue
        return view('admin.internautes.index', compact('newsletters', 'user', 'id'));

    }

    /**
     * Méthode store () pour enregistrer les newsletter dans la BDD
     *
     * @param Request $request
     * @param $id
     * @return redirect(route('admin.internaute.newsletter')->with('message')
    **/
    public function store (Request $request, $id)
    {
        // On récupère l'id du user
        $user = User::findOrFail($id);

        // On créé les données.
        $data = [
            'inscrit'           => $request->inscrit,
            'user_id'           => $user->id,
            'created_at'        => Carbon::now(),
            'updated_at'        => Carbon::now()
        ];

        if ($request->inscrit == 1) {
             // On créé une nouvelle newsletter
            Newsletter::create($data);

            return redirect(route('admin.internaute.newsletter'))
                ->with('message', $user->name. ", votre inscription à notre Newsletter a bien été créée !");
        }
        elseif ($request->inscrit == NULL) {
            return redirect(route('admin.internaute.newsletter'))
                ->with('error', $user->name. ", pour s'inscrire à la Newsletter, le bouton d'inscription doit être cochée. 
                Recommencez, svp.");
        }
    }
}
