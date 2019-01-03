<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pub extends Model
{
    protected $fillable = ['image', 'legende', 'internet', 'categorie', 'actif', 'annonceur_id'];

     /**
     * Méthode annonceur () pour la relation entre les tables pubs et annonceurs
     * Ici la relation une pub appartient à un seul annonceur
     *
     * @return $this->belongsTo('App\Annonceur');
    **/
    public function annonceur ()
    {
        return $this->belongsTo('App\Annonceur');
    }
}
