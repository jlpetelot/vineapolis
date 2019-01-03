<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    /**
    	* Méthode users () pour la relation entre les tables products et users
    	* Un produit appartient à un ou plusieurs utilisateurs
        *
    	* return $this->belongsToMany('App\User');
    **/
    public function users ()
    {
        return $this->belongsToMany('App\User');
    }


    /**
     * Méthode users () pour la relation entre les tables products et lines
     * Un produit appartient à une plusieurs lines (de commande)
     *
     * return $this->hasMany('App\Line');
     **/
    public function lines ()
    {
        return $this->hasMany('App\Line');
    }


}
