<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Panier extends Model
{
    // On permet les colonnes à remplir
    protected $fillable = ['user_id', 'total','created_at', 'updated_at'];

    /**
     * Méthode lines () pour la relation entre les tables paniers et lines
     * Ici la relation un panier a une ou plusieurs lignes
     *
     * return $this->hasMany('App\Line');
     **/
    public function lines ()
    {
        return $this->hasMany('App\Line');
    }

    /**
     * Méthode paiement () pour la relation entre les tables paniers et paiements
     * Ici la relation un panier a un seul paiement
     *
     * return $this->hasOne('App\Paiement');
     **/
    public function paiement()
    {
        return $this->hasOne('App\Paiement');
    }

}
