<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{

    /**
     * Méthode user () pour la relation entre les tables profils et users
     * Ici un profil appartient a un seul utilisateur
     *
     * return $this->hasOne('App\Role');
     **/
    public function user ()
    {
        return $this->belongsTo('App\User');
    }
}
