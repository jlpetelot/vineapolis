<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Importvigneron extends Model
{

    // // Le champ de la table que l'on autorise à être modifié
    // protected $fillable = ['statut'];

    // /**
    //  * Méthode scopeFilter () pour rechercher les vignerons en fonction du nom de la société ou de l'email
    //  *
    //  * @param query, $term
    //  **/
    // public function scopeFilter ($query, $term)
    // {
    //     // Un terme de recherche est-il entré ?
    //     if ($term)
    //     {
    //         $query->where(function($q) use ($term)
    //         {
    //             $q->where('societe', 'LIKE', "%{$term}%")
    //                 ->orwhere('email', 'LIKE', "%{$term}%");
    //         });
    //     }
    // }

    // /**
    //  * Méthode statut () pour afficher l'état de la colonne statut
    //  *
    //  * @return '<span class="label label-success">Oui</span>';
    //  * @return '<span class="label label-warning">Non</span>';
    //  **/
    // public function statut () {
    //     if ($this->statut == NULL) {
    //         return '<span class="label label-warning">Pas fait</span>';
    //     }
    //     elseif ($this->statut === 1)
    //     {
    //         return '<span class="label label-success">Fait</span>';
    //     }
    // }

}
