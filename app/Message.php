<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = [
        'name', 'email', 'sujet', 'role', 'motdepasse', 'contenu', 'tache', 'commentaire', 'user_id', 'reponse_id'
    ];

    /**
     * Méthode user () relation entre les tables contacts et users
     *  Un message appartient à un utilisateur et un seul
     *
     * @return
     **/
    public function user ()
    {
        return $this->belongsTo('App\User');
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
        if ($showTimes) $format = $format . " à H:i:s";
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
     * Méthode scopeFilter () pour rechercher les vignerons en fonction du nom de la société
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
                    ->orwhere('email', 'LIKE', "%{$term}%")
                    ->orwhere('id', 'LIKE', "{$term}")
                    ->orwhere('role', 'LIKE', "%{$term}%");
            });
        }
    }

}
