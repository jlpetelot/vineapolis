<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Vigneron extends Model
{
    use Searchable;

    // On met cela pour éviter les erreurs du type : Call to a member function format() on string
    protected $dates = ['datefacture', 'created_at', 'updated_at'];

    protected $fillable = [
        'societe',
        'aliassociete',
        'adresse',
        'telephone',
        'site',
        'email',
        'latlong',
        'sortevin',
        'qualitevin',
        'actif',
        'departement',
        'francevinicole',
        'region',
        'indiceregion',
        'regionvinicole',
        'aliasregionvinicole',
        'communevinicole',
        'aliascommunevinicole',
        'localitevinicole',
        'aliaslocalitevinicole',
        'localitevinicoleactif',
        'zoom',
        'duree',
        'latlongregion',
        'imagereportage',
        'reportage',
        'fiche',
        'video',
        'product_id',
        'paye',
        'user_id',
        'created_at',
        'datefacture',
        'updated_at'
    ];

    /**
     * Méthode user () pour la relation entre les tables vignerons et users
     *
     * @param
     * @return
     **/
    public function user ()
    {
        return $this->belongsTo('App\User');
    }

    /**
     * Méthode comments () pour la relation entre les tables vignerons et comments
     * Ici la relation un vigneron peut avoir un ou plusieurs commentaires
     *
     * @return $this->hasMany('Comment::class')
    **/
    public function comments ()
    {
        return $this->hasMany('App\Comment');
    }

    /**
     * Méthode dateFormattedCreate () pour formater les dates des vignerons
     * pour la colonne created_at de la table vignerons
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
     * Méthode dateFormattedUpdate () pour formater les dates des vignerons
     * pour la colonne updated_at de la table vignerons
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
     * Méthode active () pour afficher l'état de la colonne actif des vignerons
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
            return '<span class="label label-success">Oui</span>';
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
