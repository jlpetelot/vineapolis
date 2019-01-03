<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Newsletter;
use Carbon\Carbon;
use App\Http\Requests;
use App\user;

class NewsletterController extends Controller
{   
    /**
     * Méthode index () pour afficher la newsletter
     *
     * @return view("newsletter", compact('header', 'newsletters'));
    **/
    public function index ()
    {
        // On récupère la newsletter
        $newsletters = Newsletter::all();

        $header = "Vineapolis | Newsletter";
        return view("newsletter", compact('header', 'newsletters'));
    }

    /**
     * Méthode store () pour enregistrer un nouvel utilisateur avev l'inscription à la Newsletter
     *
     * @return view("newsletter", compact('header', 'newsletters'));
    **/
    public function store (Requests\UserRequest $request)
    {
        // On récupère les données du fomulaire pour le user
        $datauser = [
            'name'              => $request->name,
            'email'             => $request->email,
            'password'          => $request->password,
            'created_at'        => Carbon::now(),
            'updated_at'        => Carbon::now(),
        ];

        // On créé un nouvel utilisateur
        $user = User::create($datauser);

        // On récupère le dernier inscrit dans les users
        $dernierinscrit = User::orderBy('id', 'desc')->first();

        // On récupère les données du fomulaire pour la newsletter
        $datanews = [
            'inscrit'           => $request->inscrit,
            'body'              => NULL,
            'user_id'           => $dernierinscrit->id,
            'created_at'        => Carbon::now(),
            'updated_at'        => Carbon::now(),
        ];

        

        // On créé un nouvel inscrit à la newsletter
        $newsletter = Newsletter::create($datanews);

        return redirect()->back()
            ->with('message', $dernierinscrit->name.", vous êtes désormais inscrit à notre Newsletter. 
            Un email de confirmation vous a été envoyé.");
    }
}
