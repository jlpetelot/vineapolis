<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Annonceur extends Model
{
    // On met cela pour éviter les erreurs du type : Call to a member function format() on string
    protected $dates = ['datefacture', 'created_at', 'updated-at'];
    
    protected $fillable = [
        'societe',
        'email',
        'adresse',
        'telephone',
        'annonce',
        'urlsite',
        'actif',
        'paye',
        'user_id',
        'created_at',
        'datefacture',
        'updated_at'
    ];

    /**
     * Méthode pubs () pour la relation entre les tables annonceurs et pubs
     * Ici la relation un user possède un seul mot de passe
     *
     * @return $this->hasMany('App\Pub');
    **/
    public function pubs ()
    {
        return $this->hasMany('App\Pub');
    }

    /**
     * Méthode dateFormattedCreate () pour formater les dates des annonceurs
     * pour la colonne created_at de la table annonceurs
     *
     * @param $showTimes = false
     * @$this->created_at->format($format);
    **/
    public function dateFormattedCreate ($showTimes = false)
    {
        // $format = "d/m/Y à h:m:s";
        $format = "d/m/Y";
        if ($showTimes) $format = $format . " H:i:s";
        return $this->created_at->format($format);
    }

    /**
     * Méthode dateFormattedUpdate () pour formater les dates des annonceurs
     * pour la colonne updated_at de la table annonceurs
     *
     * @param $showTimes = false
     * @$this->created_at->format($format);
     **/

    public function dateFormattedUpdate ($showTimes = false)
    {
        // $format = "d/m/Y à h:m:s";
        $format = "d/m/Y";
        if ($showTimes) $format = $format . " H:i:s";
        return $this->updated_at->format($format);
    }

    /**
     * Méthode active () pour afficher l'état de la colonne actif des annonceurs
     *
     * @return '<span class="label label-success">Oui</span>';
     * @return '<span class="label label-warning">Non</span>';
    **/
    public function active () {
        if ($this->actif === 0) {
            return '<span class="label label-default">Non</span>';
        }
        elseif ($this->actif === 1)
        {
            return '<span class="label label-warning">Oui</span>';
        }
    }

    /**
     * Méthode scopeFilter () pour rechercher les vignerons en fonction du nom de la société ou de l'email
     *
     * @param query, $term
    **/
    public function scopeFilter ($query, $term)
    {
        // Un terme de recherche est-il entré ?
        if ($term)
        {
            $query->where(function($q) use ($term)
            {
                $q->where('societe', 'LIKE', "%{$term}%")
                ->orwhere('email', 'LIKE', "%{$term}%");
            });
        }
    }
}
