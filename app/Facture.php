<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Facture extends Model
{
    // On met cela pour éviter les erreurs du type : Call to a member function format() on string
    protected $dates = ['datefacture', 'created_at', 'updated_at'];

    // On permet les 14 colonnes à remplir
    protected $fillable = [
        'name',
        'adresse',
        'telephone',
        'email',
        'identiteunique',
        'produit',
        'qte',
        'duree',
        'type',
        'prixHT',
        'soustotalHT',
        'tva',
        'totalTTC',
        'user_id',
        'created_at',
        'datefacture',
        'updated_at',
    ];

    /**
     * Méthode user () pour la relation entre les tables pedefs et users et
     * Ici la relation un PDF appartient à un user
     *
     * @return $this->hasOne('App\Vigneron');
    **/
    public function user ()
    {
        return $this->belongsTo('App\User');
    }

    /**
     * Méthode scopeFilter () pour rechercher les factures en fonction du nom de la société ou de l'email
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
                $q->where('name', 'LIKE', "%{$term}%")
                ->orwhere('email', 'LIKE', "%{$term}%");
            });
        }
    }
}
