<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Qualite extends Model
{

    /**
     * Méthode utilisateur () pour la relation entre les tables qualites et users
     * Ici, une qualité appartient à un utilisateur
     *
     * @return $this->belongsTo('App\User');
    **/
//    public function utilisateur ()
//    {
//        return $this->belongsTo('App\User');
//    }
}
